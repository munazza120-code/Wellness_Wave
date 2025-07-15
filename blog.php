<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Blog - Wellness Wave</title>
  <style>
    /* Global Styles */
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color:  #e0f7fa;
      color: #333;
      line-height: 1.6;
    }

 /* Animated Vertical Nav Bar */
    .vertical-nav {
      position: fixed;
      top: 0;
      left: -180px;
      width: 180px;
      height: 100%;
      background: linear-gradient(135deg, #056d78 0%, #a3cfd0 100%);
      box-shadow: 2px 0 8px rgba(0,0,0,0.10);
      transition: left 0.3s cubic-bezier(.4,2,.4,1);
      z-index: 1001;
      display: flex;
      flex-direction: column;
      padding-top: 60px;
    }

    .vertical-nav.open {
      left: 0;
    }

    .vertical-nav a {
      color: #fff;
      text-decoration: none;
      padding: 18px 28px;
      font-size: 1.08rem;
      border-bottom: 1px solid rgba(255,255,255,0.08);
      transition: background 0.2s;
    }

    .vertical-nav a:hover {
      background: rgba(255,255,255,0.10);
    }

    .nav-toggle {
      position: fixed;
      top: 32px;
      left: 10px;
      z-index: 1100;
      background: #056d78;
      border-radius: 0 4px 4px 0;
      border: none;
      outline: none;
      cursor: pointer;
      box-shadow: 2px 0 8px rgba(0,0,0,0.08);
      padding: 8px 10px;
      transition: left 0.3s cubic-bezier(.4,2,.4,1);
      color: white;
      font-size: 1.5rem;
      line-height: 1;
    }

    .vertical-nav.open ~ .nav-toggle {
      left: 190px;
    }


    /* Header */
    header {
      background: linear-gradient(135deg,  #a3cfd0 0%,  #056d78 100%);
      padding: 25px 20px;
      text-align: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    header h1 {
      margin: 0;
      font-size: 2.5rem;
      color: white;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    }

    /* Main Container */
    .blog-container {
      max-width: 1000px;
      margin: 40px auto;
      padding: 30px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .blog-container h2 {
      color: #2c3e50;
      border-bottom: 2px solid #2c3e50;
      padding-bottom: 10px;
      margin-bottom: 25px;
      font-size: 2rem;
    }

    .blog-intro {
      font-size: 1.1rem;
      margin-bottom: 30px;
      color: #2c3e50;
      line-height: 1.8;
    }

    .blog-categories {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 25px;
      margin-top: 40px;
    }

    .category-card {
      background:  #e0f7fa;
      border-radius: 8px;
      padding: 20px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border-left: 4px solid #2c3e50;
    }

    .category-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .category-card h3 {
      color:  #e0f7fa;
      margin-top: 0;
      border-bottom: 1px dashed #2c3e50;;
      padding-bottom: 10px;
    }

    .category-card ul {
      padding-left: 20px;
      color: #555;
    }

    .category-card li {
      margin-bottom: 8px;
    }

    /* Footer */
    footer {
      text-align: center;
      padding: 20px;
      background: linear-gradient(135deg, #a3cfd0 0%,  #056d78 100%);
      color: white;
      margin-top: 50px;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .blog-container {
        margin: 20px;
        padding: 20px;
      }

      header h1 {
        font-size: 2rem;
      }

      .blog-categories {
        grid-template-columns: 1fr;
      }
       .vertical-nav {
        width: 65vw;
        min-width: 110px;
        left: -65vw;
      }
      .vertical-nav.open {
        left: 0;
      }
      .vertical-nav.open ~ .nav-toggle {
        left: 68vw;
      }
    }
  </style>
</head>
<body>
 <nav class="vertical-nav" id="vNav">
                        <a href="http://localhost//PHP_Files/homepagephp.php">Home</a>

    <a href="http://localhost//PHP_Files/aboutus.php">About Us</a>
<a href="http://localhost//PHP_Files/FAQs.php">FAQ</a>
                    <a href="http://localhost//PHP_Files/blog.php">Blog</a>
                    <a href="http://localhost//PHP_Files/contact.php">Contact</a>
  
  </nav>
  <button class="nav-toggle" id="navToggle" aria-label="Open navigation">&#x25B6;</button>
  <header>
    <h1>Wellness Wave Blog</h1>
  </header>

  <div class="blog-container">
    <h2>Explore Our Wellness Articles</h2>
    <p class="blog-intro">
      Stay updated with the latest wellness trends, nutrition insights, and natural health tips through our blog. 
      Our articles are written in easy-to-understand language to help you make informed decisions about your health and wellbeing.
    </p>

    <div class="blog-categories">
      <div class="category-card">
        <h3>Natural Remedies</h3>
        <ul>
          <li>Simple Home Remedies for Everyday Illnesses</li>
          <li>Herbal Preparations and Their Uses</li>
          <li>Essential Oils for Health and Wellness</li>
          <li>Traditional Healing Practices</li>
        </ul>
      </div>

      <div class="category-card">
        <h3>Nutrition & Diet</h3>
        <ul>
          <li>Seasonal Foods & Their Health Benefits</li>
          <li>Superfoods and Their Properties</li>
          <li>Dietary Approaches for Common Conditions</li>
          <li>Healthy Eating on a Budget</li>
        </ul>
      </div>

      <div class="category-card">
        <h3>Mind & Body</h3>
        <ul>
          <li>Mindfulness and Meditation Techniques</li>
          <li>Yoga for Different Life Stages</li>
          <li>Mental Health and Emotional Wellbeing</li>
          <li>Stress Reduction Strategies</li>
        </ul>
      </div>

      <div class="category-card">
        <h3>Health Myths</h3>
        <ul>
          <li>Debunking Common Health Beliefs</li>
          <li>Science vs. Tradition in Healthcare</li>
          <li>Evaluating Health Trends</li>
          <li>Evidence-Based Natural Therapies</li>
        </ul>
      </div>

      <div class="category-card">
        <h3>Natural Beauty</h3>
        <ul>
          <li>Skin Care with Natural Ingredients</li>
          <li>Hair Care Recipes from Your Kitchen</li>
          <li>Non-Toxic Beauty Alternatives</li>
          <li>Holistic Approaches to Aging</li>
        </ul>
      </div>

      <div class="category-card">
        <h3>Research Updates</h3>
        <ul>
          <li>New Findings in Herbal Medicine</li>
          <li>Dietary Science Breakthroughs</li>
          <li>Integrative Medicine Studies</li>
          <li>Traditional Medicine in Modern Research</li>
        </ul>
      </div>
    </div>
  </div>

  <footer>
    &copy; 2025 Wellness Wave. All rights reserved.
  </footer>
<script>
    const nav = document.getElementById('vNav');
    const toggle = document.getElementById('navToggle');
    let open = false;
    function updateArrow() {
      toggle.innerHTML = open ? "&#x25C0;" : "&#x25B6;"; // ◀ or ▶
      toggle.setAttribute('aria-label', open ? 'Close navigation' : 'Open navigation');
    }
    toggle.addEventListener('click', function() {
      open = !open;
      nav.classList.toggle('open', open);
      updateArrow();
    });
    // Initialize arrow
    updateArrow();
  </script>
</body>
</html>