<?php
    // Tag the page as a sub-page, not index, for nav links
    $is_subpage = true;
    $pageTitle = 'Matthew Valdez - Tree Canopy';
    $pageDescription = 'A data analysis of urban tree canopy change (2016–2021) and its relationship to race and health.';
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
        <h1>Visualizing Seattle’s Tree Canopy</h1>
        <p class="description"><?php echo $pageDescription; ?></p>
        <p class="meta categories">
          <span>Public Datasets • </span>
          <span>Data Visualization • </span>
          <span>Tableau • </span>
          <span>Urban Forestry</span>
        </p>

        <figure class="case-lead-img">
          <img src="/img/pexels-photo-4424285-4424285-1024x682.jpg" alt="View of Seattle Space Needle through trees">
          <figcaption>Space Needle through tree canopy.</figcaption>
        </figure>
        <p class="byline">
          <span class="author fw-bold">Matthew Valdez</span> / 
          <time datetime="2024-06-24" class="fw-bold">June 24, 2024</time>
        </p>
      </header>

      <section class="case-content">
        <p>
          I consider myself a city person with a strong appreciation for nature and the role urban tree canopy plays in the health and livability of a city. I began this analysis to better understand how Seattle—and different communities within it—are doing in this regard.
        </p>
        
        <h2>What Is an Urban Tree Canopy—and Why It Matters</h2>
        <p>
          Urban tree canopy is defined as the layer of leaves, branches, and stems of trees that cover the ground when viewed from above<sup><a href="#ref-1">1</a></sup>. Beyond being pretty, it provides significant environmental benefits in urban areas.
        </p>
        <ul>
          <li><span class="term">Pollution Removal:</span> Trees absorb pollutants such as carbon dioxide, ozone, and particulate matter, improving air quality.</li>
          <li><span class="term">Heat Alleviation:</span> Tree shade and evapotranspiration (moisture release) help reduce urban temperatures and mitigate the urban 'heat island' effect.</li>
          <li><span class="term">Support for Wildlife:</span> Urban canopies provide habitat for birds, insects, and other wildlife, supporting biodiversity.</li>
        </ul>
        
        <h2>Why Tree Canopy Matters for People</h2>
        <p>These environmental benefits translate into measurable social and health advantages for urban communities<sup><a href="#ref-2">2</a></sup>, including:</p>
        <ul>
          <li><span class="term">Better Mental and Physical Health:</span> Access to green spaces has been linked to reduced stress, improved mood, and increased physical activity.</li>
          <li><span class="term">Increased Property Values:</span> Properties in well-treed areas often have higher market values due to the aesthetic and environmental benefits provided by the canopy.</li>
          <li><span class="term">Reduction in Crime:</span> Some studies suggest that greener neighborhoods experience lower crime rates and tend to have reduced rates of less graffiti, vandalism, and litter.</li>
        </ul>
  

        <p>With those benefits in mind, the overall trend in Seattle’s tree canopy is concerning:</p>
        <blockquote class="pull-quote">
          <i class="bi bi-quote"></i>
          <p>…the city as a whole losing roughly 0.4% of its canopy, equating to about 250 acres.</p>
        </blockquote>

        <h2>A Closer Look at the Data</h2>
        <p>My hometown of Seattle, Washington provides data on tree canopy changes for two periods: 2016 and 2021. The University of Vermont’s Spatial Analysis Lab (SAL) mapped these changes using high-resolution remote sensing data. More information, a detailed description of the mapping process, and the full dataset are available on the City of Seattle’s website<sup><a href="#ref-3">3</a></sup>.</p>
        <p>I combined this dataset with US Census data, allowing comparisons between canopy percentage and demographic factors such as race and health. This analysis can reveal how changes in tree canopy may be affecting different communities and their well-being.</p>
        <p>The City of Seattle also published a final assessment of the data as a PDF: <a href="https://seattle.gov/documents/Departments/OSE/Urban%20Forestry/2021%20Tree%20Canopy%20Assessment%20Report_FINAL_230227.pdf" target="_blank">2021 Tree Canopy Assessment.</a></p>

        <h3>How the Analysis Was Done</h3>
        <p>I downloaded the tree canopy data as an Excel file and joined it with a KML file (a format used for mapping geographic data) of Seattle. The data is organized by census tract, which provides a more detailed view than neighborhoods or ZIP codes and aligns neatly with supporting Census data. I combined, analyzed, and visualized the dataset using Tableau.</p>
        <p>In Tableau, I created a dashboard highlighting areas of interest. During validation, I discovered that census tract 246 was missing key data points, so it is excluded from certain views to ensure the accuracy and reliability of the analysis.</p>
        <figure class="case-lead-img">
          <img src="/img/Seattle-Tree-Canopy-Dashboard-1024x791.png" alt="Screenshot of Tableau Dashboard">
          <figcaption>Tree Canopy Dashboard - <a href="https://public.tableau.com/app/profile/matthew.valdez/viz/Seattle_Tree_Canopy/SeattleTreeCanopyDashboard" target="_blank">Explore the dashboard in Tableau <i class="bi bi-box-arrow-up-right"></i></a></figcaption>
        </figure>

        <h3>Visualizing Seattle’s Tree Canopy</h3>
        <p>The map below shows Seattle’s tree canopy by census tract in 2021, with green indicating high coverage, yellow moderate, and red minimal coverage.</p>
        <p>The color distribution matches expectations: the downtown core and industrial districts south of downtown appear deep red, reflecting sparse tree coverage. In contrast, neighborhoods with large parks, such as Discovery Park, Seward Park, and the Washington Park Arboretum, are bright green, highlighting dense canopy areas.</p>
        <p>This map not only illustrates the current state of the city’s canopy but also sets the stage for analyzing how these patterns relate to demographics and changes over time.</p>
        <figure class="case-lead-img">
          <img src="/img/2021-tree-canopy.png" alt="Seattle Tree canopy color-coded map">
          <figcaption>Screenshot of Seattle’s 2021 tree canopy by census tract.</figcaption>
        </figure>

        <h3>Changes in Canopy (2016–2021)</h3>
        <p>Next, we look at how Seattle’s tree canopy has changed over the five-year period from 2016 to 2021. Changes are calculated by census tract and grouped into seven categories to make the patterns easier to see.</p>
        <p>The color scale is designed so that zero or minimal change appears white, while gains are green and losses are red. This makes increases and decreases immediately visible across the city.</p>
        <p>Our goal is to highlight which areas are gaining or losing canopy and to track these changes alongside demographic patterns, which we explore in the following sections.</p>
        <p>A quick glance at the map reveals a notable trend: more red than green overall. This shows a general decline in tree coverage, with Seattle losing roughly 0.4% of its canopy — about 250 acres — during this period.</p>
        change-tree-canopy-1024x867.png
        <figure class="case-lead-img">
          <img src="/img/change-tree-canopy-1024x867.png" alt="Seattle Tree canopy color-coded map by percent change">
          <figcaption>Screenshot of canopy change by census tract, 2016–2021.</figcaption>
        </figure>

        <h3>Canopy and Race</h3>
        <p>Linking US Census data with tree canopy data allows us to explore how canopy coverage varies across demographic groups. One key measure in the census is the percentage of people of color within each census tract.</p>
        <p>Previous research has shown that communities with higher percentages of people of color tend to have significantly lower tree canopy coverage. Nationally, this gap amounts to roughly 33% less canopy compared to majority-white areas<sup><a href="#ref-4">4</a></sup>. These disparities in environmental conditions can have meaningful consequences for health, comfort, and overall quality of life.</p>
        <p>In Seattle, we examined this relationship by plotting the percentage of people of color against tree canopy coverage at the census-tract level. The scatterplot reveals a clear downward trend: as the proportion of non-white residents increases, average canopy coverage tends to decrease, consistent with national patterns. A linear regression fitted to the data confirms that this relationship is statistically significant (p < 0.01), though it explains only a modest portion of the overall variation (R² ≈ 0.06), suggesting that many other factors also shape canopy distribution across the city.</p>
        <figure class="case-lead-img">
          <img src="/img/scatter-race.png" alt="Scatterplot comparing race and tree canopy coverage">
          <figcaption>Scatterplot showing tree canopy coverage vs. percent people of color by census tract, with linear regression line.</figcaption>
        </figure>

        <h3>Canopy and Health</h3>
        <p>One of the key benefits of living in areas with higher tree canopy is its positive association with health<sup><a href="#ref-2">2</a></sup>. Using US Census data, we compared population health measures across census tracts with varying levels of canopy coverage.</p>
        <p>The health data includes prevalence of chronic conditions, general health status, and access to healthcare services. For analysis, these measures are grouped into health categories.</p>
        <p>The bar chart below shows a clear trend: as tree canopy percentage increases, overall health indicators improve. A mean line added to the chart highlights the general upward pattern across the population.</p>
        <p>While many factors influence health, and we cannot claim a direct causal relationship, the data aligns with expectations — higher tree canopy coverage tends to coincide with better health outcomes. This trend underscores the importance of urban green spaces for community well-being.</p>
        <figure class="case-lead-img">
          <img src="/img/bar-health.png" alt="Bar Chart comparing health (groups) and tree canopy coverage">
          <figcaption>Bar chart showing population health by tree canopy percentage, with mean line.</figcaption>
        </figure>

        <h3>Final Thoughts</h3>
        <p>I would like to thank the City of Seattle for making a wealth of important datasets publicly available. Examining relevant, well-curated data can offer valuable insights and empower residents to take action or engage in more informed discussions about issues that impact our quality of life.</p>
        <p>Reflecting on the results, I was surprised to learn that Seattle lost approximately 250 acres of tree canopy within a five-year span, and that disparities related to race and health closely mirror national trends. Anecdotally, I experience Seattle as a leafy, green city with a progressive government that prioritizes environmental stewardship and social equity.</p>
        <p>This contrast highlights the importance of producing and analyzing data to ground decisions in evidence rather than perception. Data helps surface patterns that may not be immediately visible and allows us to identify specific areas where targeted intervention is needed.</p>
        <p>By leveraging these insights, cities like Seattle can work toward creating a healthier, more equitable urban environment for all residents.</p>



      </section>
      <section aria-labelledby="references" class="case-content">
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
      </section>




    </article>

    <aside class="case-sidebar">

      <div class="sidebar-box">
        <h3>Related Case Studies</h3>
        <nav class="sidebar-links">
          <a href="trivia.php">Trivia Game With Flask</a>
          <a href="stocks.php">Personal Stock Screener</a>
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

<?php include 'footer.php'; ?>
