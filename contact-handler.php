<?php
// Error reporting
error_reporting(0);
ini_set('display_errors', 0);

// Return JSON response
header('Content-Type: application/json');

// Load config from outside web root using absolute path
$config_path = $_SERVER['DOCUMENT_ROOT'] . '/../config/config.php';

// Check if config exists
if (!file_exists($config_path)) {
    echo json_encode(['success' => false, 'message' => 'Config file not found at: ' . $config_path]);
    exit;
}

try {
    $config = require_once($config_path);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Config load error: ' . $e->getMessage()]);
    exit;
}

// Get the token from POST
$recaptcha_token = $_POST['recaptcha_token'] ?? '';

if (empty($recaptcha_token)) {
    echo json_encode(['success' => false, 'message' => 'Security verification failed.']);
    exit;
}

// Verify with Google/recaptcha
$secret_key = $config['recaptcha']['secret_key'];
$verify_url = 'https://www.google.com/recaptcha/api/siteverify';

$data = [
    'secret' => $secret_key,
    'response' => $recaptcha_token,
    'remoteip' => $_SERVER['REMOTE_ADDR']
];

$options = [
    'http' => [
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data)
    ]
];

$context = stream_context_create($options);
$verify_response = file_get_contents($verify_url, false, $context);
$response_data = json_decode($verify_response);

// Check if verification was successful and score is acceptable
if (!$response_data->success || $response_data->score < 0.5) {
    echo json_encode(['success' => false, 'message' => 'Security verification failed. Please try again.']);
    exit;
}

// Security: Only allow POST requests
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

// Get and sanitize form data
$name = strip_tags(trim($_POST["name"] ?? ''));
$email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
$subject = strip_tags(trim($_POST["subject"] ?? ''));
$message = strip_tags(trim($_POST["message"] ?? ''));

// Validate inputs
if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    echo json_encode(['success' => false, 'message' => 'All fields are required']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email address']);
    exit;
}

// Basic spam prevention
$spam_patterns = ['http://', 'https://', 'www.', '<a href'];
foreach ($spam_patterns as $pattern) {
    if (stripos($message, $pattern) !== false || stripos($subject, $pattern) !== false) {
        echo json_encode(['success' => false, 'message' => 'Message appears to be spam']);
        exit;
    }
}

// Check if PHPMailer is available
$use_smtp = file_exists('PHPMailer/PHPMailer.php');

if ($use_smtp) {
    // Use PHPMailer with SMTP
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';
    require 'PHPMailer/Exception.php';
    
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    
    try {
        // SMTP settings from config
        $mail->isSMTP();
        $mail->Host = $config['smtp']['host'];
        $mail->SMTPAuth = true;
        $mail->Username = $config['smtp']['username'];
        $mail->Password = $config['smtp']['password'];
        $mail->SMTPSecure = $config['smtp']['encryption'] === 'ssl' 
            ? PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS 
            : PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = $config['smtp']['port'];
        
        // Email settings
        $mail->setFrom($config['smtp']['username'], 'Portfolio Contact Form');
        $mail->addAddress($config['to_email']);
        $mail->addReplyTo($email, $name);
        
        // Content
        $mail->isHTML(false);
        $mail->Subject = "Portfolio Contact: " . $subject;
        $mail->Body = "New contact form submission:\n\n" .
                      "Name: $name\n" .
                      "Email: $email\n" .
                      "Subject: $subject\n\n" .
                      "Message:\n$message";
        
        $mail->send();
        echo json_encode(['success' => true]);
        
    } catch (Exception $e) {
        // Return detailed error for debugging
        echo json_encode([
            'success' => false, 
            'message' => 'Email could not be sent'
        ]);
        exit;
    }
    
} else {
    // Fallback to regular mail()
    $email_subject = "Portfolio Contact: " . $subject;
    $email_body = "New contact form submission:\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n\n";
    $email_body .= "Message:\n$message\n";
    
    $headers = "From: Portfolio Contact Form <noreply@" . $_SERVER['HTTP_HOST'] . ">\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    if (mail($config['to_email'], $email_subject, $email_body, $headers)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Email could not be sent']);
    }
}
?>