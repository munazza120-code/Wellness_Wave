<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us - Wellness Wave</title>
  <style>
    /* Global Styles */
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #e0f7fa;
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

    /* Contact Info Styles */
    .contact-info {
      margin-top: 30px;
    }
    
    .contact-method {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      background:  #e0f7fa;
      padding: 15px;
      border-radius: 8px;
      border-left: 4px solid #2c3e50;
    }
    
    .contact-icon {
      font-size: 1.5rem;
      margin-right: 15px;
      color: #4b6cb7;
      width: 30px;
      text-align: center;
    }
    
    .contact-text {
      flex: 1;
      color: #555;
    }

    .contact-text strong {
      color: #2c3e50;
    }

    .contact-text a {
      color: #4b6cb7;
      text-decoration: none;
      font-weight: bold;
    }

    .contact-text a:hover {
      text-decoration: underline;
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
      
      .contact-method {
        flex-direction: column;
        align-items: flex-start;
      }
      
      .contact-icon {
        margin-right: 0;
        margin-bottom: 10px;
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
    <h1>Contact Wellness Wave</h1>
  </header>

  <div class="about-container">
    <h2>Get In Touch</h2>
    <p>
      At <span class="mission-highlight">Wellness Wave</span>, we value your questions and feedback. Reach out to us through any of these channels:
    </p>
    
    <div class="contact-info">
      <div class="contact-method">
        <div class="contact-icon">📧</div>
        <div class="contact-text">
          <strong>Email:</strong> support@wellnesswave.com
        </div>
      </div>
      
      <div class="contact-method">
        <div class="contact-icon">📞</div>
        <div class="contact-text">
          <strong>Phone:</strong> +92-XXX-XXXXXXX
        </div>
      </div>
      
      <div class="contact-method">
        <div class="contact-icon">🌍</div>
        <div class="contact-text">
          <strong>Location:</strong> Lahore, Pakistan
        </div>
      </div>
      
      <div class="contact-method">
        <div class="contact-icon">📩</div>
        <div class="contact-text">
          <strong>Feedback:</strong> <a href="#">Submit your feedback online</a>
        </div>
      </div>
    </div>
    
    <p>
      Our team typically responds within 24 hours. For immediate assistance during business hours, please call us directly.
    </p>
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