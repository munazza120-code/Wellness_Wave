<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Expert Consultants</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
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

    body {
      margin: 0;
      padding: 0;
      min-height: 100vh;
      background-color: var(--accent);
      font-family: 'Montserrat', Arial, sans-serif;
      color: var(--text);
      display: flex;
      flex-direction: column;
    }

    .expert-grid {
      padding: 60px 0 50px 0;
      background: none;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .expert-grid::before {
      content: "";
      position: absolute;
      top: -40px; left: -100px; right: -100px; height: 340px;
      background: linear-gradient(135deg, var(--accent) 0%, var(--secondary) 100%);
      border-bottom-left-radius: 64px 44px;
      border-bottom-right-radius: 64px 44px;
      z-index: 0;
      opacity: 1;
      filter: blur(1px);
    }

    .expert-grid-content {
      position: relative;
      z-index: 1;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 2.5vw;
    }

    .expert-grid h1 {
      font-family: 'Playfair Display', serif;
      font-size: 2.5rem;
      font-weight: 700;
      color: #fff;
      letter-spacing: 1.2px;
      margin-bottom: 0.7rem;
      margin-top: 0;
      text-shadow: 1px 1px 3px rgba(1,6,38,0.17);
    }

    .expert-grid .subtitle {
      color: var(--light);
      font-size: 1.15rem;
      margin-bottom: 2.6rem;
      font-weight: 500;
      letter-spacing: 0.04em;
      text-shadow: 0 2px 10px rgba(1, 6, 38, 0.08);
    }

    .instructions {
      color: var(--dark);
      background: #fff;
      max-width: 540px;
      margin: 0 auto 2.8rem auto;
      border-radius: 10px;
      padding: 1.1em 2em 1em 2em;
      font-size: 1.1rem;
      font-weight: 500;
      box-shadow: 0 5px 15px rgba(2,66,79,0.05);
      border-left: 4px solid var(--secondary);
      opacity: 0.96;
    }

    .grid-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 32px;
      justify-items: center;
      align-items: stretch;
      margin-top: 1.2rem;
    }

    .grid-item {
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 5px 15px rgba(2,66,79,0.10);
      padding: 2.3em 1.6em 2em 1.6em;
      max-width: 350px;
      min-width: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      position: relative;
      transition: transform 0.2s cubic-bezier(.72,.1,.62,1.42), box-shadow 0.2s;
      overflow: hidden;
      border-left: 6px solid var(--secondary);
    }

    .grid-item:hover {
      transform: translateY(-8px) scale(1.032);
      box-shadow: 0 16px 48px rgba(2,66,79,0.16);
      border-left: 6px solid var(--primary);
    }

    .avatar {
      width: 88px;
      height: 88px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 1.1rem;
      border: 4px solid var(--primary);
      box-shadow: 0 3px 12px rgba(2,66,79,0.13);
      background: var(--accent);
    }

    .grid-item h3 {
      font-family: 'Playfair Display', serif;
      color: var(--primary);
      font-size: 1.18rem;
      font-weight: 700;
      margin-bottom: 0.5em;
      margin-top: 0;
      z-index: 1;
    }

    .grid-item p {
      color: var(--secondary);
      font-size: 1.08rem;
      margin-bottom: 1em;
      font-weight: 600;
      z-index: 1;
    }

    .grid-item ul {
      list-style: none;
      padding: 0;
      text-align: left;
      font-size: 1.01rem;
      margin-bottom: 0.7em;
      z-index: 1;
      width: 100%;
    }

    .grid-item li {
      margin: 10px 0;
      padding-left: 1.2em;
      position: relative;
      color: var(--text-light);
      font-size: 1.07rem;
      z-index: 1;
    }

    .grid-item li::before {
      content: "•";
      position: absolute;
      left: 0;
      color: var(--primary);
      font-weight: bold;
      font-size: 1.1em;
    }

    .grid-item a {
      color: var(--secondary);
      text-decoration: none;
      word-break: break-all;
      font-weight: 600;
      transition: color 0.17s;
    }

    .grid-item a:hover {
      color: var(--primary);
      text-decoration: underline;
    }

    @media (max-width: 900px) {
      .expert-grid h1 { font-size: 2rem; }
      .grid-container { gap: 22px; }
      .expert-grid-content { padding: 0 1vw; }
    }
    @media (max-width: 600px) {
      .expert-grid { padding: 32px 0 30px 0; }
      .grid-item { padding: 1.3em 1em 1em 1em; border-radius: 12px; }
      .instructions { font-size: 1rem; padding: 1em 1em; }
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
  </style>
</head>
<body>
  <section class="expert-grid">
    <div class="expert-grid-content">
      <h1>Expert Consultants</h1>
      <p class="subtitle">Meet our world-class team of natural health and wellness practitioners.<br>Connect for personalized, evidence-based advice.</p>
 <nav>
        <a class="active" href="http://localhost//PHP_Files/homepagephp.php" style="text-decoration: none;">Home</a>
        <a href="http://localhost//PHP_Files/aboutus.php" style="text-decoration: none;">About Us</a>
        <a href="http://localhost//PHP_Files/ourapproach.php" style="text-decoration: none;">Our Approach</a>
        <a href="http://localhost//PHP_Files/blog.php" style="text-decoration: none;">Consultants</a>
        <a href="http://localhost//PHP_Files/FAQs.php" style="text-decoration: none;">FAQ</a>
        <a href="http://localhost//PHP_Files/Contact.php" style="text-decoration: none;">Contact</a>
      </nav>
      <div class="instructions">
        <b>How to use:</b> <br>
        Browse our featured experts. Click on any contact link to reach out for consultations, collaborations, or wellness sessions.<br>
        
      </div>

      <div class="grid-container">
        <!-- Card 1 -->
        <div class="grid-item">
          <img class="avatar" src="https://randomuser.me/api/portraits/women/65.jpg" alt="Dr. Warda Sikandar">
          <h3>NUTRITIONIST | AESTHETICIAN | WELLNESS SPEAKER</h3>
          <p>Customized Diet Plans Available</p>
          <ul>
            <li>📩 Email: <a href="mailto:Wardarose1342@gmail.com">Wardarose1342@gmail.com</a></li>
            <li>☎️ WhatsApp: <a href="https://wa.me/923214177981" target="_blank">0321-4177981</a></li>
            <li>📱 DM on Social Media</li>
            <li>🤝 PR / Collaboration: Available</li>
            <li>🧷Profile: <a href="https://www.instagram.com/p/DIpCOOdgiJ4/" target="_blank">Dr. Warda Sikandar</a></li>
          </ul>
        </div>
        <!-- Card 2 -->
        <div class="grid-item">
          <img class="avatar" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Dr. Akram Nutritionist">
          <h3>Medical & Health | Consultant Nutritionist | WELLNESS SPEAKER</h3>
          <p>40 Years Experience</p>
          <ul>
            <li>📩 Clinic: @akrammedicalcomplexlhr</li>
            <li>☎️ WhatsApp: <a href="https://wa.me/923214177981" target="_blank">0321-4177981</a></li>
            <li>📱 DM on Social Media</li>
            <li>🤝 PR / Collaboration: Available</li>
            <li>🧷Profile: <a href="https://www.instagram.com/p/DIpCOOdgiJ4/" target="_blank">Dr. Warda Sikandar</a></li>
          </ul>
        </div>
        <!-- Card 3 (Sample for easy adding) -->
        <div class="grid-item">
          <img class="avatar" src="https://randomuser.me/api/portraits/women/68.jpg" alt="Dr. Sara Herbalist">
          <h3>Herbalist | Integrative Health Coach</h3>
          <p>Holistic Wellness & Herbal Expertise</p>
          <ul>
            <li>📩 Email: <a href="mailto:dr.sara@example.com">dr.sara@example.com</a></li>
            <li>☎️ WhatsApp: <a href="https://wa.me/923001234567" target="_blank">0300-1234567</a></li>
            <li>📱 Instagram: <a href="https://instagram.com/dr.sara" target="_blank">@dr.sara</a></li>
            <li>🤝 Virtual Consultations: Available</li>
            <li>🧷Profile: <a href="https://instagram.com/dr.sara" target="_blank">Dr. Sara</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</body>
</html>