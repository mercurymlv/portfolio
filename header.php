<?php
  $pageTitle = $pageTitle ?? 'Matthew Valdez – Portfolio';
  $pageDescription = $pageDescription ?? 'Data, supply chain, and analytics portfolio';
  // index has anchors, subpages use full url
  $base = isset($is_subpage) && $is_subpage ? 'https://portfolio.matthewvaldez.com/' : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>
    <?= htmlspecialchars($pageTitle) ?>
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">

  <!-- font stuff -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&display=swap" rel="stylesheet">

  <!-- bootstrap stuff -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  
  <link rel="stylesheet" href="/css/styles.css">
  <!-- Only load the supplemental study.css for the subpages -->
  <?php if (isset($is_subpage) && $is_subpage): ?>
  <link rel="stylesheet" href="/css/study.css">
  <?php endif; ?>

  <!-- favicon stuff -->
  <link rel="apple-touch-icon" sizes="180x180" href="/img/fav/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/fav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/img/fav/favicon-16x16.png">
  <link rel="manifest" href="/img/fav/site.webmanifest">

<!-- for recaptcha - only needed on index-->
<?php if (!isset($is_subpage) || !$is_subpage): ?>
<script src="https://www.google.com/recaptcha/api.js?render=6Le4aVosAAAAAMZ5NUA-sprcJgi15d4YC7FK6Qwh"></script>
<?php endif; ?>

</head>
<body>

<header class="site-header">
  <nav class="nav">
    <a href="<?= $base ?>#home"><i class="bi bi-house-door"></i> Home</a>
    <a href="<?= $base ?>#about"><i class="bi bi-file-earmark-person"></i> About</a>
    <a href="<?= $base ?>#portfolio"><i class="bi bi-journal-check"></i> Portfolio</a>
    <a href="<?= $base ?>#contact"><i class="bi bi-pencil"></i> Contact</a>
  </nav>
</header>


