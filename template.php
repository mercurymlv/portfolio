<?php
    // Tag the page as a sub-page, not index, for nav links
    $is_subpage = true;
    $pageTitle = 'Matthew Valdez - Tree Canopy';
    $pageDescription = 'A comparison of Seattle tree canopy percentage change from 2016 to 2020 with a look at demographics from the US Census.';
    $topics = [
        'data visualization',
        'urban forestry',
        'public datasets',
        'Tableau'
    ];
    include 'header.php'; 
?>

<main class="case-study">
  <div class="case-layout">

    <article class="case-article">
      <header class="case-header">
        <h1>Seattle Tree Canopy Dashboard</h1>
        <p class="meta categories">
          <span>Public Datasets • </span>
          <span>Data Visualization • </span>
          <span>Tableau • </span>
          <span>Urban Forestry</span>
        </p>
        <p class="byline">
          <span class="author fw-bold">Matthew Valdez</span> / 
          <time datetime="2024-06-24" class="fw-bold">June 24, 2024</time>
        </p>
        <figure class="case-lead-img">
          <img src="/img/pexels-photo-4424285-4424285-1024x682.jpg" alt="View of Seattle Space Needle through trees">
          <figcaption>Space Needle through tree canopy.</figcaption>
        </figure>
        <p class="description"><?php echo $pageDescription; ?></p>
      </header>

      <section class="case-content">

        

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
      <div class="sidebar-box">
        <h3>Other Articles</h3>
        <nav class="sidebar-links">
          <a href="#">Inventory Forecast Dashboard</a>
          <a href="#">Distribution Network Analysis</a>
          <a href="#">ERP Data Migration</a>
        </nav>
      </div>
    </aside>

  </div>
</main>

<?php include 'footer.php'; ?>
