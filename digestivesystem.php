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
        </div>
    </header>

    <!-- Horizontal Phobia Navigation -->
    <div class="horizontal-nav-container">
        <nav class="horizontal-nav">
            <!-- Generate ~150 Phobia Links (Example subset) -->
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

            <!-- Hemorrhoids Information Container -->
 <div class="info-container">
    <div class="info-header">
        <h2>Digestive Health: Comprehensive Guide</h2>
        <p style="color: white;">Understanding, preventing, and managing digestive problems for all age groups</p>
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
            <p>Digestive problems in older people include gas, acidity, constipation, diarrhea, bloating, and stomach discomfort. These issues are often caused by poor eating habits, stress, eating too fast, overeating, low fiber diet, dehydration, or side effects of medicines. With age, the digestive system can become slower, so proper care is important to avoid long-term health issues.</p>
        </div>
        
        <div class="info-section">
            <h3>⚠ Precautions</h3>
            <ul>
                <li>Eat on time and chew food well.</li>
                <li>Avoid overeating, especially late at night.</li>
                <li>Reduce intake of spicy, oily, and fried food.</li>
                <li>Drink enough water throughout the day.</li>
                <li>Avoid too much tea, coffee, and fizzy drinks.</li>
                <li>Include fiber-rich food (fruits, vegetables, whole grains).</li>
                <li>Avoid lying down or sleeping right after eating.</li>
                <li>Manage stress with prayer, breathing exercises, or short walks.</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🥗 Dietary Plan</h3>
            <div class="timing-plan">
                <div class="time-item">
                    <strong>Morning (7:00–8:00 AM):</strong>
                    <p>Warm water with lemon or soaked raisins. Breakfast with oats, brown bread, or boiled egg</p>
                </div>
                <div class="time-item">
                    <strong>Afternoon (12:30–1:30 PM):</strong>
                    <p>Chapati with dal, boiled vegetables, and cucumber or plain yogurt</p>
                </div>
                <div class="time-item">
                    <strong>Evening (4:30–5:30 PM):</strong>
                    <p>Herbal tea or green tea with light snacks like roasted chana or a banana</p>
                </div>
                <div class="time-item">
                    <strong>Night (7:30–8:30 PM):</strong>
                    <p>Light dinner like vegetable soup, khichdi, or boiled rice with curd</p>
                </div>
                <div class="time-item">
                    <strong>Tips:</strong>
                    <p>Avoid junk food, raw onion at night, and heavy meals. Drink warm water before sleeping if digestion is slow. Use rock salt (sendha namak) instead of regular salt in sensitive cases.</p>
                </div>
            </div>
        </div>

        <div class="info-section">
            <h3>🏃 Exercise Suggestions</h3>
            <ul>
                <li>Walk for 20–30 minutes daily after meals</li>
                <li>Practice light yoga like Vajrasana (after eating), Pavanmuktasana, or gentle stretching</li>
                <li>Avoid sitting or lying down immediately after eating</li>
                <li>Teens and adults can include light jogging, cycling, or sports</li>
                <li>Seniors should do slow walking and simple breathing exercises</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🧴 DIY/Home Remedies</h3>
            <ul>
                <li>Ajwain and salt mix: Take a pinch of ajwain with black salt after meals</li>
                <li>Jeera (cumin) water: Boil 1 tsp jeera and sip the water warm – helps with gas and bloating</li>
                <li>Saunf (fennel) tea: Boil fennel in water and drink after meals to ease digestion</li>
                <li>Isabgol (psyllium husk): Mix in warm water or milk at night for constipation (especially in elderly)</li>
                <li>Buttermilk with roasted cumin powder: A good natural remedy for digestion after lunch</li>
            </ul>
        </div>
    </div>

    <!-- Children Section -->
    <div id="children" class="age-content">
        <div class="info-section">
            <h3>🔴 What Is It?</h3>
            <p>Digestive problems in children are common and include gas, stomach pain, constipation, loose motion, or feeling full too soon. These issues often happen because of eating too much junk food, eating too fast, drinking less water, or not chewing food properly. Sometimes, infections from dirty hands or food can also upset the stomach.</p>
        </div>
        
        <div class="info-section">
            <h3>⚠ Precautions for Children</h3>
            <ul>
                <li>Give fresh, home-cooked meals</li>
                <li>Make sure they chew their food properly</li>
                <li>Avoid giving too many snacks, chips, cold drinks, or sweets</li>
                <li>Encourage drinking clean water throughout the day</li>
                <li>Remind them to wash hands before and after eating</li>
                <li>Avoid forcing them to eat when they're not hungry</li>
                <li>Keep a regular meal schedule</li>
                <li>Do not allow lying down or sleeping right after meals</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🥗 Dietary Plan</h3>
            <div class="timing-plan">
                <div class="time-item">
                    <strong>Morning:</strong>
                    <p>Warm water or milk, then light food like porridge, oats, or boiled egg</p>
                </div>
                <div class="time-item">
                    <strong>Afternoon:</strong>
                    <p>Chapati or rice with vegetables and lentils. Add a few spoons of plain yogurt</p>
                </div>
                <div class="time-item">
                    <strong>Evening:</strong>
                    <p>One fruit like banana, apple, or papaya. Avoid candies or sugary snacks</p>
                </div>
                <div class="time-item">
                    <strong>Night:</strong>
                    <p>Soft rice with vegetables, or simple khichdi or vegetable soup</p>
                </div>
                <div class="time-item">
                    <strong>Tips:</strong>
                    <p>Add more fruits and vegetables to their meals. Avoid spicy and fried foods. Give water after 30 minutes of eating, not during meals.</p>
                </div>
            </div>
        </div>

        <div class="info-section">
            <h3>🏃 Exercise Suggestions</h3>
            <ul>
                <li>Let them play outdoor games every day</li>
                <li>Encourage walking or moving around after meals</li>
                <li>Avoid long screen time – it makes them sit too much</li>
                <li>Simple stretching or child-friendly yoga like "cat-cow" pose can help</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🧴 DIY/Home Remedies</h3>
            <ul>
                <li>Ajwain water: Soak a few carom seeds in warm water and give 1–2 spoons (only if needed and after checking with doctor)</li>
                <li>Saunf (fennel) tea: Light fennel water can help with gas (for older children)</li>
                <li>Ghee with warm milk: A little ghee in warm milk at night helps with constipation</li>
                <li>Banana or papaya: Natural fruit that helps digestion</li>
                <li>Plain yogurt: A small bowl daily keeps the stomach healthy</li>
            </ul>
        </div>
    </div>

    <!-- Elderly Section -->
    <div id="elderly" class="age-content">
        <div class="info-section">
            <h3>🔴 What Is It?</h3>
            <p>Digestive problems happen when the stomach and intestines are not working properly. This can lead to symptoms like gas, bloating, constipation, diarrhea, heartburn, or stomach pain. It usually happens due to poor eating habits, stress, low water intake, eating too fast, or infections. A weak digestive system can affect overall health, energy, and mood.</p>
        </div>
        
        <div class="info-section">
            <h3>⚠ Precautions for Older People</h3>
            <ul>
                <li>Eat slowly and chew food well</li>
                <li>Avoid overeating or skipping meals</li>
                <li>Do not lie down immediately after eating</li>
                <li>Stay away from oily, spicy, or junk food</li>
                <li>Drink plenty of water throughout the day</li>
                <li>Wash hands before eating to prevent infections</li>
                <li>Keep a regular eating schedule</li>
                <li>Avoid unnecessary medicines (especially painkillers) that harm the stomach</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🥗 Dietary Plan</h3>
            <div class="timing-plan">
                <div class="time-item">
                    <strong>Morning (7:00–8:00 AM):</strong>
                    <p>Warm water with lemon. After 20 minutes, eat a light breakfast like oats, porridge, or soft boiled eggs</p>
                </div>
                <div class="time-item">
                    <strong>Afternoon (12:30–1:30 PM):</strong>
                    <p>Simple meals like dal, steamed rice or chapati, vegetables, and a few slices of cucumber</p>
                </div>
                <div class="time-item">
                    <strong>Evening (4:30–5:30 PM):</strong>
                    <p>Herbal tea or green tea with a banana or apple</p>
                </div>
                <div class="time-item">
                    <strong>Night (7:30–8:30 PM):</strong>
                    <p>Light dinner – vegetable soup or khichdi or boiled vegetables with chapati</p>
                </div>
                <div class="time-item">
                    <strong>Tips:</strong>
                    <p>Eat fresh, home-cooked food. Avoid raw food at night. Don't drink too much water during meals – drink before or after instead.</p>
                </div>
            </div>
        </div>

        <div class="info-section">
            <h3>🏃 Exercise Suggestions</h3>
            <ul>
                <li>Walk for 10–15 minutes after each meal</li>
                <li>Do light yoga like "Pavanmuktasana" and "Vajrasana" after eating</li>
                <li>Regular morning walk or slow jogging helps digestion</li>
                <li>Avoid long sitting hours – take breaks and move around</li>
                <li>Breathing exercises (like deep belly breathing) also improve gut health</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🧴 DIY/Home Remedies</h3>
            <ul>
                <li>Ajwain (carom) water: Boil 1 tsp ajwain in water and sip warm after meals</li>
                <li>Jeera (cumin) tea: Boil 1 tsp cumin in a cup of water and drink once or twice daily</li>
                <li>Fennel seeds (saunf): Chew after meals to reduce gas and improve digestion</li>
                <li>Buttermilk with pinch of black salt: Drink once daily for gut health</li>
                <li>Mint tea: Helps relieve gas, nausea, and stomach pain</li>
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