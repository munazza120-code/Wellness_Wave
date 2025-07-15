<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Us - Wellness Wave</title>
  <style>
    /* Global Styles */
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color:#e0f7fa;
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
    .about-container {
      max-width: 1000px;
      margin: 40px auto;
      padding: 30px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .about-container h2 {
      color: #2c3e50;
      border-bottom: 2px solid #2c3e50;
      padding-bottom: 10px;
      margin-bottom: 25px;
      font-size: 2rem;
    }

    .about-container p {
      font-size: 1.1rem;
      margin-bottom: 20px;
      color: #2c3e50;
      line-height: 1.8;
    }

    .mission-highlight {
      font-weight: bold;
      color: #4b6cb7;
    }

    .team-section {
      margin-top: 40px;
    }

    .team-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 25px;
      margin-top: 30px;
    }

    .team-member {
      background: #f8f9fa;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
      border-left: 4px solid #2c3e50;
    }

    .team-member h3 {
      color: #2c3e50;
      margin-top: 0;
    }

    .team-member p {
      color: #555;
      font-size: 0.95rem;
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
      .about-container {
        margin: 20px;
        padding: 20px;
      }

      header h1 {
        font-size: 2rem;
      }

      .team-grid {
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
    <h1>About Wellness Wave</h1>
  </header>

  <div class="about-container">
    <h2>Our Mission</h2>
    <p>
      At <span class="mission-highlight">Wellness Wave</span>, our mission is to empower individuals with accessible, natural solutions for common health issues.
      We are a passionate team of health educators, developers, and wellness consultants working to promote preventive healthcare through
      balanced diets, herbal remedies, and lifestyle awareness.
    </p>

    <p>
      We understand that many people suffer from treatable health issues due to poor dietary habits or lack of awareness. Our goal is to bridge this gap
      using technology, science-backed information, and traditional healing wisdom—making wellness a daily habit.
    </p>

    <div class="team-section">
      <h2>Our Team</h2>
      <div class="team-grid">
        <div class="team-member">
          <h3>Health Educators</h3>
          <p>Certified professionals with expertise in nutrition and natural therapies</p>
        </div>
        <div class="team-member">
          <h3>Developers</h3>
          <p>Tech specialists creating accessible wellness solutions</p>
        </div>
        <div class="team-member">
          <h3>Wellness Consultants</h3>
          <p>Practitioners bridging traditional and modern medicine</p>
        </div>
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