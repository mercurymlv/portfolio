<?php
    // Tag the page as a sub-page, not index, for nav links
    $is_subpage = true;
    $pageTitle = 'Matthew Valdez - Trivia Game';
    $pageDescription = 'A Flask-based training platform inspired by Jeopardy!';
    $topics = [
        'Flask development',
        'deployment',
        'python',
        'frameworks',
        'learning'
    ];
    include 'header.php'; 
?>

<main class="case-study">
  <div class="case-layout">
    <article class="case-article">

      <header class="case-header">
        <h1>How I Built a Trivia Game—and the Data Behind It</h1>
        <p class="description"><?php echo $pageDescription; ?></p>
        <p class="meta categories">
          <span>Flask • </span>
          <span>Python Framework • </span>
          <span>Deployment • </span>
          <span>Entertainment</span>
        </p>

        <figure class="case-lead-img">
          <img src="/img/" alt="">
          <figcaption>caption</figcaption>
        </figure>
        <p class="byline">
          <span class="author fw-bold">Matthew Valdez</span> / 
          <time datetime="2026-02-02" class="fw-bold">Feb 2, 2026</time>
        </p>
      </header>

      <section class="case-content">

        
        <p>This project grew out of an interest in how Jeopardy! contestants increasingly use data to guide their training—tracking performance, identifying weak areas, and focusing effort where it matters most. While building a trivia game, the real goal in my mind was creating a platform that could eventually evaluate where I was strongest, where I struggled, and how that changed over time. I love the show and still hope to be a contestant someday.</p>
        <!-- Block quote - standalone not extract remove quote -->
        <blockquote class="pull-quote">
          <!-- <i class="bi bi-quote"></i> -->
          <p>Rather than building trivia for trivia’s sake, I approached this project as a data collection and analysis problem, with gameplay as the interface.</p>
        </blockquote>
        
        <h2>The Idea: Treat Trivia Like a Dataset</h2>
        <p>Jeopardy! has evolved into a game of preparation and pattern recognition. Top contestants don’t just study broadly — they track performance, identify weak categories, and train strategically.</p>
        <p>This project began with a simple question: what if I built my own training platform that captures and analyzes performance data in real time?</p>
        <p>Rather than building trivia purely for entertainment, I designed a system where every answer generates structured data. Accuracy, category distribution, session history, and optional user context are all captured with future analysis in mind.</p>  
        <p>The interface looks like a game. The foundation is a measurement system.</p>

        <h2>Application Architecture</h2>
        <p>The application is built in Flask with Jinja templates, providing a clean separation between logic and presentation. Python handles the game flow, scoring logic, validation, and data recording.</p>
        <p>User authentication is implemented with secure password hashing and managed sessions. Even as a personal project,he application follows production-oriented practices around account security and route protection.</p>
        <p>The goal was to build something lightweight but disciplined — minimal overhead, clear structure, and secure by default.</p>

        <h2>Database Design and Data Capture</h2>
        <p>Although the application uses SQLite, the schema is intentionally structured for analytical use.
        <p>Each game session records:
          <ul>
            <li>Questions served</li>
            <li>Categories and difficulty</li>
            <li>User responses</li>
            <li>Accuracy and timing</li>
          </ul>
        </p>
        <p>This structure allows for longitudinal analysis — tracking strengths, identifying patterns, and measuring improvement over time. The database design prioritizes clean relationships and future query flexibility over scale.</p>
        <p>In short, trivia is the input. Performance data is the output.</p>

        <h2>User-Contributed Content</h2>
        <p>To keep the dataset dynamic, the platform allows users to submit questions. This introduces validation workflows and moderation controls while expanding the question bank organically.</p>
        <p>From a systems perspective, this shifts the project from a static application to a growing data source — one that evolves with usage.</p>

        <h2>AI-Assisted Evaluation</h2>
        <p>The platform integrates an AI API to evaluate open-ended responses and generate meaningful feedback. Rather than relying solely on exact string matching, the system can assess answers semantically and respond in a way that reflects understanding — including brief commentary on why an answer may be partially correct or where reasoning may have diverged.</p>
        <p>Beyond grading, the long-term goal is analytical feedback. As more gameplay data is collected, the AI layer will be able to review a user’s historical performance and identify patterns — recurring category gaps, common misconceptions, or areas where accuracy trends downward under certain conditions.</p>
        <p>In this model, AI is not just an answer checker. It becomes a feedback engine, turning raw performance data into actionable insights for improvement.</p>
              
        <h2>Interface and Deployment</h2>
        <p>The front end uses Bootstrap to ensure responsiveness across devices while maintaining a clean, focused interface. The design intentionally prioritizes clarity over visual complexity.</p>
        <p>The application is deployed on PythonAnywhere, where I configured environment management, production settings, and WSGI integration. Moving from local development to a live deployment was a key part of validating the full-stack workflow.</p>
 
        <h2>What This Project Demonstrates</h2>
        <p>This project combines:</p>
        <ul>
          <li>Full-stack Flask development</li>
          <li>Secure user authentication and session management</li>
          <li>Relational data modeling for analytical use</li>
          <li>User-generated content workflows</li>
          <li>External API integration</li>
          <li>Live production deployment</li>
        </ul>
        <p>More than a trivia game, it is a structured data platform disguised as entertainment — built to measure performance, surface patterns, and support continuous improvement.</p>
        <p>And if I ever do step onto that Jeopardy! stage, I’ll be bringing a dataset with me.</p>
 

        <!-- sub header with clickable image -->
        <!-- <h3>How the Analysis Was Done</h3>
        <figure class="case-lead-img">
          <img src="/img/canopy-dashboard.png" 
              alt="Screenshot of Tableau Dashboard"
              class="clickable-image"
              data-fullsize="/img/canopy-dashboard.png">
          <figcaption>Tree Canopy Dashboard - <a href="https://public.tableau.com/app/profile/matthew.valdez/viz/Seattle_Tree_Canopy/SeattleTreeCanopyDashboard" target="_blank">Explore the dashboard in Tableau <i class="bi bi-box-arrow-up-right"></i></a></figcaption>
        </figure> -->

        <!-- <h3>Final Thoughts</h3>
        <p>I would like to thank the City of Seattle for making a wealth of important datasets publicly available. Examining relevant, well-curated data can offer valuable insights and empower residents to take action or engage in more informed discussions about issues that impact our quality of life.</p>
        <p>Reflecting on the results, I was surprised to learn that Seattle lost approximately 250 acres of tree canopy within a five-year span, and that disparities related to race and health closely mirror national trends. Anecdotally, I experience Seattle as a leafy, green city with a progressive government that prioritizes environmental stewardship and social equity.</p>
        <p>This contrast highlights the importance of producing and analyzing data to ground decisions in evidence rather than perception. Data helps surface patterns that may not be immediately visible and allows us to identify specific areas where targeted intervention is needed.</p>
        <p>By leveraging these insights, cities like Seattle can work toward creating a healthier, more equitable urban environment for all residents.</p>
 -->


      </section>

      <!-- References - if applicable. Keep in own section.  -->
      <!-- <section aria-labelledby="references" class="case-content">
        <h2 id="references">References</h2>

        <ol class="references">
          <li id="ref-1">
            Center for Watershed Protection.
            <a href="https://cwp.org/urban-tree-canopy/" target="_blank" rel="noopener">
              Urban Tree Canopy
            </a>.
          </li>

          <li id="ref-2">
            Urban Canopy Works.
            <a href="https://www.urbancanopyworks.com/services-of-urban-trees.html" target="_blank" rel="noopener">
              Why Urban Tree Canopy Is Important for Cities
            </a>.
          </li>

          <li id="ref-3">
            City of Seattle Open Data Portal.
            <a href="https://data.seattle.gov/dataset/Existing-Tree-Canopy-/j6bn-vr2d/about_data" target="_blank" rel="noopener">
              Existing Tree Canopy (%)
            </a>.
          </li>

          <li id="ref-4">
            Policy Perspectives.
            <a href="https://policy-perspectives.org/2022/02/17/how-racism-has-shaped-the-presence-of-urban-tree-cover-in-public-spaces/" target="_blank" rel="noopener">
              How Racism Has Shaped the Presence of Urban Tree Cover in Public Spaces
            </a>.
          </li>
        </ol>
      </section> -->




    </article>

    <aside class="case-sidebar">

      <div class="sidebar-box">
        <h3>Related Case Studies</h3>
        <nav class="sidebar-links">
          <!-- <a href="trivia.php">Trivia Game With Flask</a> -->
          <a href="stocks.php">Personal Stock Screener</a>
          <a href="seattle-trees.php">Seattle Tree Canopy Visualized</a>
          <a href="db-norm.php">Database Normalization</a>
        </nav>
      </div>

      <div class="sidebar-box">
        <h3>Data & Resources</h3>
        <nav class="sidebar-links">
          <a href="https://data.seattle.gov/" target="_blank">Seattle Open Data Portal</a>
          <a href="https://data.seattle.gov/dataset/Seattle-Tree-Canopy-2016-2021-Block-Groups/az78-wea3/about_data" target="_blank">Tree Canopy Dataset</a>
          <a href="https://www.census.gov/programs-surveys/acs" target="_blank">US Census / ACS</a>
        </nav>
      </div>

    </aside>

  </div>
</main>

<!-- Script for the lightbox (image zoom) functionality -->
<script>
// Create lightbox on page load
document.addEventListener('DOMContentLoaded', function() {
  // Create lightbox HTML
  const lightbox = document.createElement('div');
  lightbox.className = 'lightbox';
  lightbox.innerHTML = `
    <button class="lightbox-close">&times;</button>
    <img src="" alt="">
  `;
  document.body.appendChild(lightbox);

  const lightboxImg = lightbox.querySelector('img');
  const closeBtn = lightbox.querySelector('.lightbox-close');

  // Add click handlers to all clickable images
  document.querySelectorAll('.clickable-image').forEach(img => {
    img.addEventListener('click', function() {
      const fullsizeSrc = this.getAttribute('data-fullsize') || this.src;
      lightboxImg.src = fullsizeSrc;
      lightboxImg.alt = this.alt;
      lightbox.classList.add('active');
    });
  });

  // Close lightbox when clicking background or close button
  lightbox.addEventListener('click', function(e) {
    if (e.target === lightbox || e.target === closeBtn) {
      lightbox.classList.remove('active');
    }
  });

  // Close with ESC key
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && lightbox.classList.contains('active')) {
      lightbox.classList.remove('active');
    }
  });
});
</script>

<?php include 'footer.php'; ?>