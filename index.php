<?php include 'header.php';?>


<main>
<div class="page-surface">
  <!-------------------------------->
  <!-- Intro Section -->
  <!-------------------------------->
  <section id="home" class="section hero">
      <div class="hero-text">
          <p><img src="/img/book.png" alt="Book icon" class="book"></p>
          <h2>Portfolio</h2>
          <h1>Matthew Valdez</h1>
          <p class="hero-subtitle">Unlocking Insights in Supply Chain, Data, and Reporting</p>
      </div>
      <div class="hero-image">
      </div>
  </section>

  <!-------------------------------->
  <!-- About, What-I-Do, Resume Section -->
  <!-------------------------------->
  <section id="about" class="section about">
    <div class="about-intro">
      <h2>About Me</h2>
      <p class="about-subtitle">
        I am a data analyst based in Seattle and San Francisco, working at the intersection of supply chain operations, data analysis, and reporting.
      </p>
    </div>

    <!-- Cartoon image - spans 2 rows-->
    <div class="about-image"></div>

    <div class="what-i-do">
      <h3>What I Do</h3>
      <p class="what-i-do-intro">
        With years of experience in supply chain, I support systems and business teams from planning to delivery.
      </p>
    </div>

    <!-- Each high-level skill area is a "card" -->
    <div class="cards">
      <div class="card">
        <i class="bi bi-box-seam"></i>
        <h4>Supply Chain Systems</h4>
        <p>The backbone of a nimble network. I have extensive experience with Oracle and other ERPs, analyzing system flow, ensuring integrity, and maintaining up-time.</p>
      </div>

      <div class="card">
        <i class="bi bi-bar-chart"></i>
        <h4>Data & Reporting</h4>
        <p>I manage master and production-level data, establish sound governance principles, and develop meaningful metrics, KPIs, and visuals.</p>
      </div>

      <div class="card">
        <i class="bi bi-rocket-takeoff"></i>
        <h4>Project Launches</h4>
        <p>Cross-functional lead on many large-scale projects, from launching new distribution centers to major ERP system updates. I delve into the details to validate, test, and ensure a smooth launch.</p>
      </div>
    </div>

    <!-- Resume-like area: Skills list + Experience (2 columns) -->
    <div class="resume-section">
      
      <!-- Skills column -->
      <div class="skills-list">
        <h3><i class="bi bi-lightning-charge"></i>Skills</h3>
        <div class="skill-category">
          <h4>Data:</h4>
          <p>Excel functions, Power Pivot/Query, DAX, M, SQL, ETL</p>
        </div>
        <div class="skill-category">
          <h4>AI & Automation:</h4>
          <p>Leverage LLMs for data analysis, automation, and optimization.</p>
        </div>
        <div class="skill-category">
          <h4>Reporting and Visualization:</h4>
          <p>Build Tableau and Power BI dashboards to inform decisions.</p>
        </div>
        <div class="skill-category">
          <h4>Customer & Stakeholder Support:</h4>
          <p>Partner with internal/external teams to improve efficiency and processes.</p>
        </div>
        <div class="skill-category">
          <h4>Cross-functional Collaboration:</h4>
          <p>Leading projects between IT and end-users</p>
        </div>
      </div>

      <!-- Experience column -->
      <!-- Each position is an article combining different elements -->
      <!-- Elements divided into sub-columns for visibility -->
      <div class="experience">
        <h3><i class="bi bi-briefcase"></i>My Experience</h3>
        <article class="job">
          <div class="job-meta">
            <p class="job-years">2016-2022</p>
            <p class="job-company">Starbucks Coffee Company</p>
          </div>
          <div class="job-details">
            <h4 class="job-title">Supply Chain Data & Systems Lead</h4>
            <p class="job-description">Led a three-person data administration team supporting supply chain distribution, overseeing data flow, requirements gathering, and project rollouts.</p>
          </div>
        </article>

        <article class="job">
          <div class="job-meta">
            <p class="job-years">2010-2016</p>
            <p class="job-company">Starbucks Coffee Company</p>
          </div>
          <div class="job-details">
            <h4 class="job-title">Data Administrator</h4>
            <p class="job-description">Maintained master and production data supporting ordering and outbound operations, establishing data governance rules and standardized intake processes to ensure consistency and accuracy.</p>
          </div>
        </article>

        <article class="job">
          <div class="job-meta">
            <p class="job-years">2005-2010</p>
            <p class="job-company">Starbucks Coffee Company</p>
          </div>
          <div class="job-details">
            <h4 class="job-title">Logistics Services Rep</h4>
            <p class="job-description">Supported a region of 650 retail stores, resolving inventory and delivery issues and translating frontline insights into long-term solutions.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-------------------------------->
  <!-- Portfolio Section -->
  <!-------------------------------->
  <section id="portfolio" class="section portfolio">
    <div> 
      <h2>Portfolio</h2>
    </div>

    <!-- Each project is an article within a grid -->
    <div class="project-grid">
      
      <article class="project-card">
        <h3>Visualizing Seattle’s Tree Canopy</h3>
        <figure>
          <img class="project-image" src="/img/port-trees.png" alt="Seattle Tree Canopy Dashboard Screenshot">
        </figure>
        <p class="project-desc">
          Analysis of Seattle City Tree Canopy data.
        </p>
        <div class="project-links">
          <a href="seattle-trees.php">Case Study</a>
          <a href="https://public.tableau.com/app/profile/matthew.valdez/viz/Seattle_Tree_Canopy/SeattleTreeCanopyDashboard" target="_blank">Tableau <i class="bi bi-box-arrow-up-right"></i></a>
        </div>
      </article>

      <article class="project-card">
        <h3>Trivia Game</h3>
        <figure>
          <img class="project-image"src="/img/port-trivia.png" alt="Trivia Game Screenshot">
        </figure>
        <p class="project-desc">
          A fun trivia game to test your general knowledge.
        </p>
        <div class="project-links">
          <a href="trivia-game.php">Case Study</a>
          <a href="https://mlv888.pythonanywhere.com/" target="_blank">Play Game <i class="bi bi-box-arrow-up-right"></i></a>
        </div>
      </article>

      <article class="project-card">
        <h3>Stock Screener</h3>
        <figure>
          <img class="project-image"src="/img/port-stocks.png" alt="Stock Screener Screenshot">
        </figure>
        <p class="project-desc">
          A personal finance stock screener tool tailored to my investment strategy.
        </p>
        <div class="project-links">
          <a href="stock-screener.php">Case Study</a>
          <a href="https://www.matthewvaldez.com/stocks/" target="_blank">Open <i class="bi bi-box-arrow-up-right"></i></a>
        </div>
      </article>

    </div>
  </section>

  <!-------------------------------->
  <!-- Contact Form Section -->
  <!-------------------------------->
  <section id="contact" class="section contact-section">
    <div class="contact-container">
      <h2>Get In Touch</h2>
      <p class="contact-intro">Have a project in mind? Send me a message and I'll get back to you soon.</p>
           
      <form id="contact-form" class="contact-form">
        <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" id="name" name="name" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email *</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label for="subject">Subject *</label>
            <input type="text" id="subject" name="subject" required>
        </div>
        
        <div class="form-group">
            <label for="message">Message *</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <div class="form-button">
          <button type="submit" id="submit-btn">Send Message</button>
        </div>
      </form>
      <!-- Message that is displayed after form submission - with close button-->
      <div id="form-message" class="message" style="display: none;">
        <span class="message-text"></span>
        <button class="message-close" onclick="this.parentElement.style.display='none'"><i class="bi bi-x-circle"></i></button>
      </div>
    </div>
  </section>
</div>


<!-- Script for form submission handling - validating with recaptcha v3 and using host SMTP -->
<script>
  document.getElementById('contact-form').addEventListener('submit', async function(e) {
      e.preventDefault();
      
      const btn = document.getElementById('submit-btn');
      const msgDiv = document.getElementById('form-message');
      const form = e.target;
    
      // Disable button
      btn.disabled = true;
      btn.textContent = 'Sending...';
      
      try {
          // Get reCAPTCHA token
          const token = await grecaptcha.execute('6Le4aVosAAAAAMZ5NUA-sprcJgi15d4YC7FK6Qwh', {action: 'submit'});
          
          // Prepare form data
          const formData = new FormData(form);
          formData.append('recaptcha_token', token);
          
          const response = await fetch('contact-handler.php', {
              method: 'POST',
              body: formData
          });
          
          const result = await response.json();
          
          if (result.success) {
              msgDiv.className = 'message success';
              msgDiv.querySelector('.message-text').textContent = 'Thank you! Your message has been sent successfully.';
              form.reset();
          } else {
              msgDiv.className = 'message error';
              msgDiv.querySelector('.message-text').textContent = result.message || 'Sorry, there was an error. Please try again.';
          }
          
          msgDiv.style.display = 'block';
          
          // Scroll to message
          msgDiv.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
          
      } catch (error) {
          msgDiv.className = 'message error';
          msgDiv.querySelector('.message-text').textContent = 'Sorry, there was an error. Please try again.';
          msgDiv.style.display = 'block';
      }
      
      // Re-enable button
      btn.disabled = false;
      btn.textContent = 'Send Message';
  });
</script>

</main>
<?php include 'footer.php'; ?>
