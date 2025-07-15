<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Evidence-Based Natural Remedies | Wellness Wave</title>
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
    .remedy-section {
      padding: 3.2rem 0 2rem 0;
    }
    .remedies-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 2.2rem;
    }
    .remedy-card {
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
    .remedy-card:hover {
      transform: translateY(-8px) scale(1.028);
      box-shadow: 0 16px 48px rgba(2,66,79,0.16);
      border-left: 6px solid var(--primary);
    }
    .remedy-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 12px;
      border: 3px solid var(--accent);
      margin-bottom: 1.2rem;
      box-shadow: 0 8px 16px rgba(2, 66, 79, 0.10);
    }
    .remedy-card h2 {
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
    .remedy-desc {
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
      .remedies-grid {
        grid-template-columns: 1fr;
      }
      .remedy-card img {
        height: 140px;
      }
      .remedy-section {
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
      <h1>Evidence-Based Natural & Herbal Remedies</h1>
      <p class="subtitle">Discover time-honored, globally trusted solutions for common health conditions, rooted in scientific research and traditional wisdom.</p>
     <nav style="text-decoration: none;"> 
        <a class="active" href="http://localhost//PHP_Files/homepagephp.php" style="text-decoration: none;">Home</a>
        <a href="http://localhost//PHP_Files/aboutus.php" style="text-decoration: none;">About Us</a>
        <a href="http://localhost//PHP_Files/ourapproach.php" style="text-decoration: none;">Our Approach</a>
        <a href="http://localhost//PHP_Files/blog.php" style="text-decoration: none;">Consultants</a>
        <a href="http://localhost//PHP_Files/FAQs.php" style="text-decoration: none;">FAQ</a>
        <a href="http://localhost//PHP_Files/Contact.php" style="text-decoration: none;">Contact</a>
      </nav>
      </nav>
    </div>
  </header>
  <main>
    <section class="remedy-section">
      <div class="container remedies-grid">
        <article class="remedy-card">
          <img src="https://www.health.com/thmb/DnvvgyM3YhTQDPDiYGb47CTeX9M=/2121x0/filters:no_upscale():max_bytes(150000):strip_icc()/Health-GettyImages-CurcuminVsTurmeric-61d015f5c4154a91a44e4ef91293d91f.jpg" alt="Turmeric">
          <h2>Turmeric (Curcumin)</h2>
          <span class="tag">Anti-Inflammatory</span>
          <p class="remedy-desc">
            Used in India for centuries, turmeric contains curcumin, a compound shown to reduce inflammation and pain, especially in arthritis. <span class="evidence">[Clinical Studies]</span>
          </p>
        </article>
        <article class="remedy-card">
          <img src="https://www.herb-pharm.com/cdn/shop/products/Ginger_Stock_1-19-18_xxl_55046165_1500X1500_47cd057d-f396-4c85-a6da-e08a239bb9df_1500x.jpg?v=1698948920" alt="Ginger">
          <h2>Ginger</h2>
          <span class="tag">Digestive Aid</span>
          <p class="remedy-desc">
            Ginger is renowned for its ability to relieve nausea, motion sickness, and indigestion. Widely used in Asia and now recommended in modern medicine. <span class="evidence">[Randomized Trials]</span>
          </p>
        </article>
        <article class="remedy-card">
          <img src="https://letsliveitup.com/cdn/shop/articles/peppermint-leaf-health-benefits-and-nutrition_1000x.jpg?v=1746647357" alt="Peppermint">
          <h2>Peppermint</h2>
          <span class="tag">IBS Relief</span>
          <p class="remedy-desc">
            Peppermint oil capsules have been shown to relieve symptoms of irritable bowel syndrome (IBS). Used traditionally in Europe and validated by clinical research. <span class="evidence">[Meta-Analyses]</span>
          </p>
        </article>
        <article class="remedy-card">
          <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRLkCStQ6lQpnK8dSQA97SoKd-BPWbpeAwj8UbbCrQHEI8SLhO7GSTq4Hgmzq0b-7kM87bKsQfvGLXWRtR0-QINKA" alt="Echinacea">
          <h2>Echinacea</h2>
          <span class="tag">Immunity Booster</span>
          <p class="remedy-desc">
            Popular in North America and Europe, Echinacea is used to reduce the duration of colds and support the immune system. <span class="evidence">[Systematic Reviews]</span>
          </p>
        </article>
        <article class="remedy-card">
          <img src="https://www.gardendesign.com/pictures/images/675x529Max/site_3/english-lavender-lavandula-angustifolia-garden-design_11716.jpg" alt="Lavender">
          <h2>Lavender</h2>
          <span class="tag">Anxiety & Sleep</span>
          <p class="remedy-desc">
            Lavender aromatherapy and supplements have shown efficacy in reducing anxiety and improving sleep quality. Used in Mediterranean traditions. <span class="evidence">[Clinical Trials]</span>
          </p>
        </article>
        <article class="remedy-card">
          <img src="https://static-01.daraz.pk/p/cb488286cc2ee0565e2d51d018c190ce.jpg" alt="Honey">
          <h2>Honey</h2>
          <span class="tag">Cough Soother</span>
          <p class="remedy-desc">
            Raw honey, used worldwide, is scientifically proven to soothe sore throats and suppress coughs, especially in children. <span class="evidence">[Controlled Studies]</span>
          </p>
        </article>
      </div>
    </section>
  </main>
  <footer>
    <div class="container footer-content">
      <p>&copy; 2025 Evidence-Based Natural Remedies. For informational purposes only. Consult a healthcare professional before use.</p>
    </div>
  </footer>
</body>
</html>