<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Preventive Care | Wellness Wave</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #02424F;
      --secondary: #056d78;
      --accent: #a3cfd0;
      --dark: #010626;
      --light: #fffacb;
      --text: #072E33;
      --text-light: #12372A;
    }
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body {
      font-family: 'Montserrat', Arial, sans-serif;
      background-color: var(--accent);
      color: var(--text);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    a {
      color: var(--secondary);
      text-decoration: none;
    }
    .container {
      width: 96%;
      max-width: 1200px;
      margin: 0 auto;
    }
    header {
      background: linear-gradient(135deg, var(--accent) 0%, var(--secondary) 100%);
      color: #fff;
      padding: 32px 20px 24px 20px;
      text-align: center;
      box-shadow: 0 4px 12px rgba(2,66,79,0.13);
      border-bottom-left-radius: 40px;
      border-bottom-right-radius: 40px;
      position: relative;
    }
    .header-content {
      text-align: center;
    }
    header h1 {
      margin: 0;
      font-family: 'Playfair Display', serif;
      font-size: 2.5rem;
      font-weight: 700;
      color: #fff;
      letter-spacing: 1.2px;
      text-shadow: 1px 1px 3px rgba(1,6,38,0.17);
      margin-bottom: 0.8rem;
    }
    .subtitle {
      font-size: 1.18rem;
      color: var(--light);
      max-width: 700px;
      margin: 0 auto 1.5rem auto;
      font-weight: 500;
      line-height: 1.5;
    }
    nav {
      display: flex;
      justify-content: center;
      gap: 2rem;
      margin-top: 1.2rem;
      margin-bottom: 0.2rem;
      flex-wrap: wrap;
    }
    nav a {
      font-family: 'Montserrat', Arial, sans-serif;
      font-weight: 700;
      font-size: 1.02rem;
      color: #fff;
      padding: 0.5em 1.2em;
      border-radius: 20px;
      background: transparent;
      transition: background 0.17s, color 0.17s;
    }
    nav a.active, nav a:hover {
      background: var(--light);
      color: var(--primary);
    }
    .preventive-section {
      padding: 3.2rem 0 2rem 0;
    }
    .preventive-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 2.2rem;
    }
    .preventive-card {
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 5px 15px rgba(2,66,79,0.10);
      transition: transform 0.2s, box-shadow 0.2s;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 2rem 1.5rem 1.5rem 1.5rem;
      position: relative;
      overflow: hidden;
      border-left: 6px solid var(--secondary);
    }
    .preventive-card:hover {
      transform: translateY(-8px) scale(1.028);
      box-shadow: 0 16px 48px rgba(2,66,79,0.16);
      border-left: 6px solid var(--primary);
    }
    .preventive-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 12px;
      border: 3px solid var(--accent);
      margin-bottom: 1.2rem;
      box-shadow: 0 8px 16px rgba(2, 66, 79, 0.10);
    }
    .preventive-card h2 {
      font-family: 'Playfair Display', serif;
      font-size: 1.25rem;
      color: var(--primary);
      margin-bottom: 0.5rem;
      font-weight: 700;
      letter-spacing: 0.5px;
      text-align: center;
    }
    .tag {
      display: inline-block;
      background: var(--secondary);
      color: var(--light);
      font-size: 0.89rem;
      font-weight: bold;
      border-radius: 12px;
      padding: 0.25em 0.9em;
      margin-bottom: 0.8rem;
      letter-spacing: 0.02em;
      box-shadow: 0 2px 8px rgba(2, 66, 79, 0.05);
    }
    .preventive-desc {
      color: var(--text-light);
      font-size: 1.07rem;
      text-align: center;
      line-height: 1.6;
      margin-bottom: 0.5rem;
    }
    .evidence {
      color: var(--secondary);
      font-size: 0.97em;
      font-style: italic;
      font-weight: 500;
    }
    footer {
      background: linear-gradient(135deg, var(--accent) 0%, var(--secondary) 100%);
      color: #fff;
      text-align: center;
      padding: 24px 0 16px 0;
      margin-top: 50px;
      border-top-left-radius: 32px;
      border-top-right-radius: 32px;
      box-shadow: 0 -4px 24px rgba(1,6,38,0.11);
      font-size: 1.09rem;
    }
    /* Responsive */
    @media (max-width: 700px) {
      header h1 {
        font-size: 2rem;
      }
      .preventive-grid {
        grid-template-columns: 1fr;
      }
      .preventive-card img {
        height: 140px;
      }
      .preventive-section {
        padding: 2rem 0 1rem 0;
      }
      nav {
        flex-wrap: wrap;
        gap: 0.8rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="container header-content">
      <h1>Preventive Care</h1>
      <p class="subtitle">Strategies to maintain health and prevent illness before it starts.</p>
      <nav>
        <a class="active" href="http://localhost//PHP_Files/homepagephp.php" style="text-decoration: none;">Home</a>
        <a href="http://localhost//PHP_Files/aboutus.php" style="text-decoration: none;">About Us</a>
        <a href="http://localhost//PHP_Files/ourapproach.php" style="text-decoration: none;">Our Approach</a>
        <a href="http://localhost//PHP_Files/blog.php" style="text-decoration: none;">Consultants</a>
        <a href="http://localhost//PHP_Files/FAQs.php" style="text-decoration: none;">FAQ</a>
        <a href="http://localhost//PHP_Files/Contact.php" style="text-decoration: none;">Contact</a>
      </nav>
    </div>
  </header>
  <main>
    <section class="preventive-section">
      <div class="container preventive-grid">
        <article class="preventive-card">
          <img src="https://i.pinimg.com/736x/33/46/a4/3346a40fbb32f991ed2c08b8249fb3a4.jpg" alt="Balanced Diet">
          <h2>Balanced Diet</h2>
          <span class="tag">Nutrition</span>
          <p class="preventive-desc">
            Eat a variety of whole foods, fruits, and vegetables to provide your body essential nutrients and keep your immune system strong. <span class="evidence">[Dietary Guidelines]</span>
          </p>
        </article>
        <article class="preventive-card">
          <img src="https://i.pinimg.com/736x/bd/d4/59/bdd4599cbd9267ae10d528fcbd104019.jpg" alt="Physical Activity">
          <h2>Regular Physical Activity</h2>
          <span class="tag">Exercise</span>
          <p class="preventive-desc">
            Engage in at least 30 minutes of moderate exercise most days. Physical activity helps manage weight, boosts mood, and reduces risk of chronic illnesses. <span class="evidence">[CDC Recommendations]</span>
          </p>
        </article>
        <article class="preventive-card">
          <img src="https://i.pinimg.com/736x/7a/40/cc/7a40cc5d9e8d3ed1f755bb4f8f3fccd1.jpg" alt="Sleep Hygiene">
          <h2>Sleep Hygiene</h2>
          <span class="tag">Rest</span>
          <p class="preventive-desc">
            Prioritize 7–8 hours of quality sleep each night to support body repair, cognitive function, and mental health. <span class="evidence">[Sleep Foundation]</span>
          </p>
        </article>
        <article class="preventive-card">
          <img src="https://i.pinimg.com/736x/d7/d8/ae/d7d8aebe7ba522261ef793271ebcf02a.jpg" alt="Hydration">
          <h2>Stay Hydrated</h2>
          <span class="tag">Hydration</span>
          <p class="preventive-desc">
            Drink plenty of water throughout the day. Proper hydration aids in digestion, circulation, and temperature regulation. <span class="evidence">[Medical News Today]</span>
          </p>
        </article>
        <article class="preventive-card">
          <img src="https://i.pinimg.com/736x/b5/8c/73/b58c73bb7c47df468bee9e0da81acf45.jpg" alt="Stress Management">
          <h2>Manage Stress</h2>
          <span class="tag">Mental Wellness</span>
          <p class="preventive-desc">
            Practice relaxation techniques like meditation, deep breathing, or yoga to manage stress and protect immune health. <span class="evidence">[Harvard Health]</span>
          </p>
        </article>
        <article class="preventive-card">
          <img src="https://i.pinimg.com/736x/1f/1d/1f/1f1d1f0c45f450e6b5ddcefa29a9488d.jpg" alt="Preventive Checkups">
          <h2>Preventive Screenings</h2>
          <span class="tag">Checkups</span>
          <p class="preventive-desc">
            Schedule regular checkups and screenings for early detection of potential health issues. Prevention is better than cure! <span class="evidence">[US Preventive Services]</span>
          </p>
        </article>
      </div>
    </section>
  </main>
  <footer>
    <div class="container footer-content">
      <p>&copy; 2025 Preventive Care by Wellness Wave. For informational purposes only. Consult a healthcare professional before making health decisions.</p>
    </div>
  </footer>
</body>
</html>