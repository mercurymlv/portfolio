<?php
    // Tag the page as a sub-page, not index, for nav links
    $is_subpage = true;
    $pageTitle = 'Matthew Valdez - Tree Canopy';
    $pageDescription = 'An interactive dashboard analyzing Seattle’s urban tree canopy';
    $topics = [
        'data visualization',
        'urban forestry',
        'public datasets',
        'spatial analysis',
        'Tableau'
    ];
    include 'header.php'; 
?>

<main class="case-study">
  <div class="case-layout">

    <article class="case-article">
      <header class="case-header">
        <h1>Seattle Tree Canopy Dashboard</h1>

        <p class="case-meta">
          Public Data • Tableau • Spatial Analysis
        </p>
      </header>

      <section class="case-content">
        <p>Intro paragraph setting context...</p>

        <figure>
          <img src="..." alt="">
          <figcaption>Canopy coverage by neighborhood</figcaption>
        </figure>

        <blockquote>
          Key insight or takeaway worth emphasizing.
        </blockquote>

        <h2>Approach</h2>
        <p>...</p>

        <h2>What I Learned</h2>
        <p>...</p>
      </section>
    </article>

    <aside class="case-sidebar">
      <h3>Related Case Studies</h3>
      <ul>
        <li><a href="#">Inventory Forecast Dashboard</a></li>
        <li><a href="#">Distribution Network Analysis</a></li>
        <li><a href="#">ERP Data Migration</a></li>
      </ul>
    </aside>

  </div>
</main>

<?php include 'footer.php'; ?>
