<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELLNESS WAVE - Phobia Consultation</title>
    <style>
        /* --- Global Styles & Resets --- */
        :root {
            --primary-color: #a3cfd0; /* Teal variant */
            --secondary-color: #02424F;
            --background-color: #e0f7fa;
            --text-color: #333;
            --light-text: #488D84;
            --nav-bg: #056d78;
            --border-color: #02424F;
            --hover-color: #fffacb;
        }
        .auth-buttons a{
            text-decoration: none;
            color: white;
        }
        .auth-buttons button:hover{
            background-color: var(--hover-color);
            color: #02424F;
            transform: scale(1.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* --- Header Area --- */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: var(--nav-bg);
            border-bottom: 2px solid var(--border-color);
            position: relative;
            min-height: 80px;
        }

        /* --- Cube Styles --- */
        .top-left-container {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 1001;
        }

        .scene {
            width: 70px;
            height: 70px;
            perspective: 500px;
        }

       .cube-logo {
            width: 70px;
            height: 70px;
            perspective: 6000px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cube {
            width: 70px;
            height: 70px;
            transform-style: preserve-3d;
            animation: rotateCube 10s linear infinite;
        }

        .cube div {
            position: absolute;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-size: 10px;
            font-weight: bold;
            background: radial-gradient(circle, var(--primary-color), var(--nav-bg));
            border: 1px solid white;
            box-shadow: 0 0 15px white;
            color: white;
            cursor: pointer;
        }

        .cube .front  { transform: translateZ(30px); }
        .cube .back   { transform: rotateY(180deg) translateZ(30px); }
        .cube .right  { transform: rotateY(90deg) translateZ(30px); }
        .cube .left   { transform: rotateY(-90deg) translateZ(30px); }
        .cube .top    { transform: rotateX(90deg) translateZ(30px); }
        .cube .bottom { transform: rotateX(-90deg) translateZ(30px); }

        @keyframes rotateCube {
            0% { transform: rotateX(0) rotateY(0); }
            100% { transform: rotateX(360deg) rotateY(360deg); }
        }

        /* --- Website Title --- */
        .site-title {
            font-size: 1.8em;
            font-weight: bold;
            color: white;
            margin-left: 90px;
            text-align: center;
            flex-grow: 1;
        }

        /* --- Login/Sign Up Buttons --- */
        .auth-buttons button {
            background: radial-gradient(circle, var(--primary-color), var(--nav-bg));
            border: 1px solid white;
            padding: 8px 15px;
            margin-left: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9em;
            transition: all 0.3s ease;
        }
  
        .auth-buttons a, button:hover{
            color: var(--nav-bg);
        }

        /* --- Horizontal Phobia Navigation --- */
        .horizontal-nav-container {
            width: 100%;
            background-color: white;
            padding: 8px 0;
            overflow-x: scroll;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .horizontal-nav {
            display: inline-block;
            padding: 0 20px;
        }

        .horizontal-nav a {
            display: inline-block;
            background-color: var(--primary-color);
            color: var(--nav-bg);
            text-decoration: initial;
            padding: 5px 12px;
            font-size: 0.85em;
            transition: all 0.3s ease;
            border-radius: 3px;
            margin: 0 3px;
        }

        .horizontal-nav a:hover {
            background-color: var(--hover-color);
            color: var(--nav-bg);
            transform: scale(1.1);
            font-weight: bold;
        }

        /* --- Main Content Area --- */
        .main-container {
            display: flex;
            flex-grow: 1;
        }

        /* --- Vertical Navigation --- */
        .vertical-nav {
            width: 200px;
            background-color: var(--nav-bg);
            padding: 20px 0;
            border-right: 1px solid var(--border-color);
            flex-shrink: 0;
        }

        .vertical-nav ul {
            list-style: none;
        }

        .vertical-nav ul li a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            font-size: 1em;
            transition: all 0.3s ease;
        }

        .vertical-nav ul li a:hover {
            background-color: var(--hover-color);
            color: var(--nav-bg);
            font-weight: bold;
        }

        .vertical-nav ul li a.active {
            background-color: var(--secondary-color);
            color: white;
            font-weight: bold;
        }

        /* --- Content Area (Slider & Text) --- */
        .content-area {
            flex-grow: 1;
            padding: 30px;
            overflow-y: scroll;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .footer {
            background: linear-gradient(to right, var(--nav-bg), var(--secondary-color), var(--nav-bg));
            color: white;
            padding: 40px 20px 20px;
            font-family: 'Segoe UI', sans-serif;
        }

        .footer-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 30px;
        }

        .footer h2, .footer h3 {
            margin-bottom: 15px;
            font-size: 20px;
            color: white;
        }

        .footer p, .footer a {
            font-size: 14px;
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: var(--primary-color);
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-social .social-icons a {
            display: inline-block;
            margin: 0 10px 10px 0;
            color: white;
            background-color: var(--secondary-color);
            padding: 10px;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .footer-social .social-icons a:hover {
            transform: scale(1.2);
            background-color: var(--primary-color);
            color: var(--nav-bg);
        }

        .footer-bottom {
            text-align: center;
            margin-top: 30px;
            border-top: 1px solid var(--border-color);
            padding-top: 15px;
        }

        .footer-legal a {
            color: var(--primary-color);
            margin: 0 5px;
        }

        .footer-legal a:hover {
            color: white;
        }

        /* --- Hemorrhoids Information Container --- */
        .info-container {
            width: 100%;
            max-width: 900px;
            background: linear-gradient(145deg, var(--nav-bg), var(--secondary-color));
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            margin-bottom: 30px;
            border: 1px solid var(--primary-color);
            color: white;
        }

        .info-header {
            text-align: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--primary-color);
        }

        .info-header h2 {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .info-section {
            margin-bottom: 25px;
            background: rgba(2, 66, 79, 0.5);
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid var(--primary-color);
        }

        .info-section h3 {
            color: var(--primary-color);
            margin-bottom: 15px;
            font-size: 1.4rem;
        }

        .info-section ul {
            padding-left: 20px;
            margin-bottom: 15px;
        }

        .info-section li {
            margin-bottom: 8px;
            color: white;
        }

        .info-section p {
            color: white;
            margin-bottom: 15px;
        }

        .timing-plan {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-top: 15px;
        }

        .time-item {
            background: rgba(163, 207, 208, 0.1);
            padding: 12px;
            border-radius: 8px;
            border-left: 3px solid var(--primary-color);
        }

        .time-item strong {
            color: var(--primary-color);
            display: block;
            margin-bottom: 5px;
        }

        .age-group-tabs {
            display: flex;
            margin-bottom: 20px;
            border-bottom: 1px solid var(--primary-color);
        }

        .age-tab {
            padding: 10px 20px;
            cursor: pointer;
            background: transparent;
            color: white;
            border: none;
            border-bottom: 3px solid transparent;
            transition: all 0.3s ease;
        }

        .age-tab.active {
            color: var(--primary-color);
            border-bottom: 3px solid var(--primary-color);
            font-weight: bold;
        }

        .age-content {
            display: none;
        }

        .age-content.active {
            display: block;
        }

        /* --- Search Bar (Bottom Left) --- */
        .search-container {
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 1000;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 8px;
            border-radius: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .search-container input[type="search"] {
            border: none;
            outline: none;
            padding: 5px 10px;
            border-radius: 15px;
            background-color: transparent;
            width: 180px;
            transition: width 0.3s ease;
        }
        
        .search-container input[type="search"]:focus {
            width: 250px;
        }

        /* --- Modern Slider --- */
        .slider-container {
            width: 100%;
            max-width: 800px;
            aspect-ratio: 16 / 9;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .slider-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .slider-slide.active {
            opacity: 1;
            z-index: 1;
        }

        .slider-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slide-caption {
            background-color: rgba(2, 66, 79, 0.7);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1.2em;
            text-align: center;
        }

        /* Add some introductory text */
        .intro-text {
            text-align: center;
            max-width: 700px;
            margin-bottom: 20px;
        }
        
        .intro-text h1 {
            color: var(--nav-bg);
            margin-bottom: 10px;
        }

        /* --- Responsive Adjustments --- */
        @media (max-width: 768px) {
            .main-container {
                flex-direction: column;
            }

            .vertical-nav {
                width: 100%;
                border-right: none;
                border-bottom: 1px solid var(--border-color);
                padding: 10px 0;
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
            }

            .vertical-nav ul {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .vertical-nav ul li a {
                padding: 8px 15px;
                font-size: 0.9em;
            }

            .site-title {
                margin-left: 70px;
                font-size: 1.5em;
            }

            .auth-buttons button {
                padding: 6px 10px;
                font-size: 0.8em;
            }

            .horizontal-nav a {
                font-size: 0.8em;
                padding: 4px 8px;
            }

            .content-area {
                padding: 20px;
            }

            .search-container {
                bottom: 10px;
                left: 10px;
            }
            
            .search-container input[type="search"] {
                width: 150px;
            }
            
            .search-container input[type="search"]:focus {
                width: 200px;
            }

            .info-container {
                padding: 20px;
            }

            .timing-plan {
                grid-template-columns: 1fr;
            }

            @media (max-width: 480px) {
                .top-left-container {
                    display: none;
                }
                
                .site-title {
                    margin-left: 10px;
                    text-align: left;
                }
                
                .header {
                    padding: 10px;
                }
                
                .auth-buttons {
                    margin-left: auto;
                }
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="header">
        <!-- Animated Cube Container -->
        <div class="top-left-container">
             <!-- NOTE: In a real application, this container's display would be toggled based on login state -->
            <div class="scene">
                 <div class="cube-logo" onclick="toggleRotation()">
            <div class="cube">
                <a href="http://localhost//PHP_Files/homepagephp.php"><div class="front">heal </div>
                <div class="back"> care</div>
                <div class="right"> hope</div>
                <div class="left"> peace</div>
                <div class="top">wave </div>
                <div class="bottom"> Wellness</div></a></div>
            </div>
        </div>
</div>
        <!-- Site Title (Optional) -->
        <div class="site-title">WELLNESS WAVE</div>

        <!-- Login/Sign Up Buttons -->
        <div class="auth-buttons">
          <a href="http://localhost//PHP_Files/auth.php"> <button>Login</button></a>
           <a href="http://localhost//PHP_Files/auth.php"><button>Sign Up</button></a>
    </header>

    <!-- Horizontal Phobia Navigation -->
    <div class="horizontal-nav-container">
        <nav class="horizontal-nav">
             <a href="http://localhost//PHP_Files/feetfungus.php">Feet Fungus</a>
          <a href="http://localhost//PHP_Files/bodyfats.php">Obesity </a>
          <a href="http://localhost//PHP_Files/digestivesystem.php">Digestive problem</a>
          <a href="http://localhost//PHP_Files/panicattack.php"> Panic attack </a>
          <a href="http://localhost//PHP_Files/mucus.php">Mucus</a>
          <a href="http://localhost//PHP_Files/liver.php">Liver Disease</a>
          <a href="http://localhost//PHP_Files/joint.php"> Joint problem</a>
          <a href="http://localhost//PHP_Files/mucles.php">muscle problem</a>
          <a href="http://localhost//PHP_Files/Asthma.php">asthma disease</a>
          <a href="http://localhost//PHP_Files/hair.php"> Hair Problems</a>
          <a href="http://localhost//PHP_Files/hommorides.php">Hemorrhoids</a>
        </nav>
    </div>

    <!-- Main Content Area (Vertical Nav + Content) -->
    <div class="main-container">

        <!-- Vertical Navigation -->
        <nav class="vertical-nav">
            <ul>
                <li><a href="http://localhost//PHP_Files/homepagephp.php" class="active">Home</a></li>
                <li><a href="http://localhost//PHP_Files/aboutus.php">About Us</a></li>
                <li><a href="http://localhost//PHP_Files/ourapproach.php">Our Approach</a></li>
                <li><a href="http://localhost//PHP_Files/expertconsultants.php">Consultants</a></li>
                <li><a href="http://localhost//PHP_Files/FAQs.php">FAQ</a></li>
                <li><a href="http://localhost//PHP_Files/contacts.php">Contact</a></li>
                <li><a href="http://localhost//PHP_Files/blog.php">Blog</a></li>
            </ul>
        </nav>

        <!-- Content Area -->
        <main class="content-area">

            <!-- Modern Slider -->
          

            <!-- Hemorrhoids Information Container -->
            <div class="info-container">
    <div class="info-header">
        <h2>Excessive Mucus/Phlegm: Comprehensive Guide</h2>
        <p>Understanding, preventing, and managing mucus build-up for all age groups</p>
    </div>

    <div class="age-group-tabs">
        <button class="age-tab active" onclick="openAgeTab(event, 'adults')">Adults</button>
        <button class="age-tab" onclick="openAgeTab(event, 'children')">Children</button>
        <button class="age-tab" onclick="openAgeTab(event, 'elderly')">Older People</button>
    </div>

    <!-- Adults Section -->
    <div id="adults" class="age-content active">
        <div class="info-section">
            <h3>🔴 What Is It?</h3>
            <p>Mucus is a thick, slippery substance made by the body to protect and keep tissues moist. But when it becomes too much, thick, or colored, it can be a sign of infection or irritation. Common causes include cold, flu, allergies, pollution, spicy food, smoking, or sinus problems. Mucus can cause coughing, sore throat, chest congestion, or blocked nose. It needs to be managed before it leads to breathing issues or infections.</p>
        </div>
        
        <div class="info-section">
            <h3>⚠ Precautions</h3>
            <ul>
                <li>Stay away from cold air, dust, and smoke.</li>
                <li>Avoid cold drinks, ice creams, and fried food.</li>
                <li>Keep rooms clean and well-ventilated.</li>
                <li>Wear a mask in dusty or polluted areas.</li>
                <li>Stay hydrated – drink warm fluids often.</li>
                <li>Avoid overuse of nose sprays and self-medication.</li>
                <li>If mucus is green/yellow or lasts many days, consult a doctor.</li>
                <li>Steam inhalation daily during congestion helps.</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🥗 Dietary Plan</h3>
            <div class="timing-plan">
                <div class="time-item">
                    <strong>Morning (7:00–8:00 AM):</strong>
                    <p>Warm water with honey or turmeric. Light breakfast like porridge, eggs, or toast. Avoid milk in the morning if mucus is heavy.</p>
                </div>
                <div class="time-item">
                    <strong>Afternoon (12:30–1:30 PM):</strong>
                    <p>Warm homemade food like rice/chapati with vegetables, lentils, and ginger-based soup.</p>
                </div>
                <div class="time-item">
                    <strong>Evening (4:30–5:30 PM):</strong>
                    <p>Herbal tea (ginger, tulsi, or mulethi) with roasted snacks or fruits.</p>
                </div>
                <div class="time-item">
                    <strong>Night (7:30–8:30 PM):</strong>
                    <p>Light dinner – vegetable soup, khichdi, or dal with black pepper and ajwain.</p>
                </div>
                <div class="time-item">
                    <strong>Tips:</strong>
                    <p>Avoid dairy if it increases phlegm. Use spices like turmeric, black pepper, and ginger. Stay away from sugary and chilled items.</p>
                </div>
            </div>
        </div>

        <div class="info-section">
            <h3>🏃 Exercise Suggestions</h3>
            <ul>
                <li>Practice deep breathing exercises (3–5 minutes daily).</li>
                <li>Do mild walking after meals to keep lungs active.</li>
                <li>Gentle yoga like Bhujangasana (cobra pose) or Anulom-Vilom helps open airways.</li>
                <li>Steam inhalation before sleep helps clear chest mucus.</li>
                <li>Avoid intense exercise if sick or coughing heavily.</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🧴 DIY/Home Remedies</h3>
            <ul>
                <li>Steam inhalation: Add a pinch of salt or turmeric in hot water – inhale for 5–10 mins.</li>
                <li>Ginger-honey paste: Mix crushed ginger with honey – take 1 tsp 2–3 times a day.</li>
                <li>Turmeric milk (at night): Use warm water if milk increases phlegm.</li>
                <li>Mulethi (licorice) tea: Boil mulethi with tulsi – sip slowly.</li>
                <li>Saltwater gargle: Helps reduce throat mucus and discomfort.</li>
            </ul>
        </div>
    </div>

    <!-- Children Section -->
    <div id="children" class="age-content">
        <div class="info-section">
            <h3>🔴 What Is It?</h3>
            <p>Mucus helps protect the nose, throat, and lungs, but too much of it can cause coughing, stuffy nose, chest congestion, or trouble breathing. In children, mucus is usually caused by cold, flu, seasonal allergies, or dust. It may lead to disturbed sleep, loss of appetite, and tiredness. It's important to treat it gently so it doesn't lead to infections like chest congestion or ear pain.</p>
        </div>
        
        <div class="info-section">
            <h3>⚠ Precautions for Children</h3>
            <ul>
                <li>Keep the child warm and away from cold air or fans.</li>
                <li>Avoid giving ice cream, cold drinks, or chocolates.</li>
                <li>Keep their nose clean using soft tissues or wipes.</li>
                <li>Use a humidifier or bowl of warm water in the room at night.</li>
                <li>Dress in layers to protect from temperature changes.</li>
                <li>Avoid dust, smoke, and strong smells like sprays.</li>
                <li>Give fluids and warm soups to loosen mucus.</li>
                <li>Do not give over-the-counter medicines without doctor's advice.</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🥗 Dietary Plan</h3>
            <div class="timing-plan">
                <div class="time-item">
                    <strong>Morning:</strong>
                    <p>Warm water with honey (only for children above 1 year). Breakfast with porridge, soft eggs, or roti with ghee.</p>
                </div>
                <div class="time-item">
                    <strong>Afternoon:</strong>
                    <p>Simple lunch – mashed rice or chapati with cooked vegetables and dal.</p>
                </div>
                <div class="time-item">
                    <strong>Evening:</strong>
                    <p>Warm herbal drink like ajwain water or tulsi tea (mild). Light snacks like banana, roasted makhana, or dates.</p>
                </div>
                <div class="time-item">
                    <strong>Night:</strong>
                    <p>Light dinner – khichdi, vegetable soup, or soft rice with ajwain and ghee.</p>
                </div>
                <div class="time-item">
                    <strong>Tips:</strong>
                    <p>Avoid milk if it increases coughing. Add turmeric, ginger, and black pepper in meals. Give warm fluids throughout the day.</p>
                </div>
            </div>
        </div>

        <div class="info-section">
            <h3>🏃 Exercise Suggestions</h3>
            <ul>
                <li>Let the child play indoors in warm clothes.</li>
                <li>Encourage them to blow their nose gently.</li>
                <li>Do "balloon blowing" or pretend games that involve deep breathing.</li>
                <li>Teach simple yoga like lion pose or butterfly pose.</li>
                <li>Gentle tapping on the back (cupping method) helps loosen mucus.</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🧴 DIY/Home Remedies</h3>
            <ul>
                <li>Steam (supervised): Place warm water near the child – let them inhale steam gently.</li>
                <li>Ajwain potli: Roast ajwain in a cloth and place it near the chest (not too hot).</li>
                <li>Turmeric with honey (for age 2+): A small pinch with honey helps relieve throat.</li>
                <li>Tulsi and ginger decoction: Boil in water and give a spoonful 2–3 times a day.</li>
                <li>Warm oil chest rub: Use mustard oil with garlic – apply on chest and soles (warm only slightly).</li>
            </ul>
        </div>
    </div>

    <!-- Elderly Section -->
    <div id="elderly" class="age-content">
        <div class="info-section">
            <h3>🔴 What Is It?</h3>
            <p>Mucus is produced by the body to trap dust and germs, but too much mucus or thick phlegm may lead to coughing, throat irritation, chest congestion, and difficulty breathing. In older people, it is often caused by infections (cold, flu, bronchitis), pollution, allergies, smoking, or digestive issues like acid reflux. If not cleared, it may cause infections or breathing problems, especially in seniors.</p>
        </div>
        
        <div class="info-section">
            <h3>⚠ Precautions for Older People</h3>
            <ul>
                <li>Avoid smoking, secondhand smoke, and pollution.</li>
                <li>Keep your nose and throat covered in cold weather.</li>
                <li>Avoid cold, oily, or sugary foods during mucus build-up.</li>
                <li>Stay hydrated with warm fluids to thin mucus.</li>
                <li>Use a humidifier or steam to keep airways moist.</li>
                <li>Avoid overuse of nasal drops – they can make things worse over time.</li>
                <li>If mucus changes color (green/yellow) or lasts more than a week, see a doctor.</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🥗 Dietary Plan</h3>
            <div class="timing-plan">
                <div class="time-item">
                    <strong>Morning (7:00–8:00 AM):</strong>
                    <p>Warm water with turmeric or ginger. Light breakfast with oats, porridge, or toast and boiled egg.</p>
                </div>
                <div class="time-item">
                    <strong>Afternoon (12:30–1:30 PM):</strong>
                    <p>Warm, non-spicy lunch – dal, sabzi, roti, or soft rice with ghee.</p>
                </div>
                <div class="time-item">
                    <strong>Evening (4:30–5:30 PM):</strong>
                    <p>Herbal tea (like tulsi or mulethi) with light snacks (roasted chana or nuts).</p>
                </div>
                <div class="time-item">
                    <strong>Night (7:30–8:30 PM):</strong>
                    <p>Light dinner – vegetable soup, khichdi, or dal rice with ajwain or jeera.</p>
                </div>
                <div class="time-item">
                    <strong>Tips:</strong>
                    <p>Use anti-inflammatory spices like turmeric, black pepper, and ginger. Avoid curd, milk, fried food, and cold drinks during congestion. Drink warm water regularly throughout the day.</p>
                </div>
            </div>
        </div>

        <div class="info-section">
            <h3>🏃 Exercise Suggestions</h3>
            <ul>
                <li>Practice deep breathing 2–3 times daily.</li>
                <li>Go for light walks to improve lung movement.</li>
                <li>Try steam inhalation with turmeric or eucalyptus oil (10 minutes).</li>
                <li>Gentle yoga poses like Bhujangasana, Anulom Vilom, or pranayama help clear airways.</li>
                <li>Seniors can do seated breathing exercises or light stretches.</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🧴 DIY/Home Remedies</h3>
            <ul>
                <li>Ginger-honey paste: Mix ½ tsp crushed ginger with honey – take twice daily.</li>
                <li>Saltwater gargle: Gargle with warm salty water twice a day.</li>
                <li>Steam inhalation: Add turmeric, eucalyptus, or ajwain in hot water and inhale.</li>
                <li>Mulethi tea: Helps reduce cough and soothe throat – sip slowly.</li>
                <li>Turmeric milk at bedtime: Use warm water if milk causes extra mucus.</li>
            </ul>
        </div>
    </div>
</div>

            <!-- Introductory Text -->
             <div class="intro-text">
                <h1>Welcome to Wellness Wave</h1>
                <p>Your dedicated resource for understanding and overcoming health issues. Browse specific conditions above or explore our resources using the navigation on the left. We provide expert consultation and support to help you ride the wave towards a healthier life.</p>
            </div>

        </main>

    </div>

    <!-- Search Bar -->
    <div class="search-container">
        <form action="#search" method="get">
            <input type="search" name="query" placeholder="Search conditions...">
            <!-- You can add a search icon/button here if desired -->
        </form>
    </div>
    <!-- Existing code before footer -->

    <!-- Footer -->
    <footer class="footer">
  <div class="footer-container">
    <div class="footer-about">
      <h2>Wellness Wave</h2>
      <p>Your go-to platform for natural remedies, nutritional guidance, and holistic wellness tips.</p>
    </div>

    <div class="footer-links">
      <h3>Quick Links</h3>
      <ul>
         <a href="http://localhost//PHP_Files/aboutus.php">About Us</a></li>
            <li><a href="http://localhost//PHP_Files/ourapproach.php">Our Approach</a></li>
            <li><a href="http://localhost//PHP_Files/FAQs.php">FAQ</a></li>
            <li><a href="http://localhost//PHP_Files/contact.php">Contact</a></li>
            <li><a href="http://localhost//PHP_Files/blog.php">Blog</a></li>
      </ul>
    </div>

    <div class="footer-contact">
      <h3>Contact Us</h3>
      <p>Email: info@wellnesswave.com</p>
      <p>Phone: +123 456 7890</p>
      <p>Location: Earth 🌍</p>
    </div>

    <div class="footer-social">
      <h3>Follow Us</h3>
      <div class="social-icons">
        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="footer-legal">
      <a href="#privacy-policy">Privacy Policy</a> | 
      <a href="#terms-of-service">Terms of Service</a>
    </div>
    <p>&copy; 2025 Wellness Wave. All rights reserved.</p>
  </div>
</footer>

    <!-- JavaScript -->
    <script>
        const params = new URLSearchParams(window.location.search);
  const formType = params.get('form'); // 'login' or 'signup'

  // Now control which form to show
  if (formType === 'signup') {
    document.body.classList.add('sign-up-mode'); // or whatever class switches to sign up
  } else {
    document.body.classList.remove('sign-up-mode'); // default is login
  }

        // --- Cube Rotation Toggle ---
        let isRotating = true;
        function toggleRotation() {
            const cube = document.querySelector('.cube');
            if (!cube) return; // Safety check

            if (isRotating) {
                cube.style.animation = 'none'; // Stop rotation
                isRotating = false;
            } else {
                // Resume rotation
                cube.style.animation = 'rotateCube 10s linear infinite';
                isRotating = true;
            }
        }

        // --- Age Group Tab Functionality ---
        function openAgeTab(evt, ageGroup) {
            // Hide all age content
            const ageContents = document.getElementsByClassName("age-content");
            for (let i = 0; i < ageContents.length; i++) {
                ageContents[i].classList.remove("active");
            }

            // Remove active class from all tabs
            const ageTabs = document.getElementsByClassName("age-tab");
            for (let i = 0; i < ageTabs.length; i++) {
                ageTabs[i].classList.remove("active");
            }

            // Show the current tab and add active class
            document.getElementById(ageGroup).classList.add("active");
            evt.currentTarget.classList.add("active");
        }

        // --- Optional: Active state for Vertical Nav ---
        const verticalNavLinks = document.querySelectorAll('.vertical-nav ul li a');
        verticalNavLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                // Remove active class from all links
                verticalNavLinks.forEach(l => l.classList.remove('active'));
                // Add active class to the clicked links
                this.classList.add('active');
                
            });
        });

    </script>
   
</body>
</html>