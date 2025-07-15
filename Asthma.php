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
        <h2>Asthma Care: Comprehensive Guide</h2>
        <p style="color: white;">Understanding, preventing, and managing asthma for all age groups</p>
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
            <p>Asthma is a condition where your airways become narrow and inflamed, making it hard to breathe. Symptoms include coughing, wheezing, chest tightness, and shortness of breath. It can be triggered by allergies, cold air, exercise, or pollution.</p>
        </div>
        
        <div class="info-section">
            <h3>⚠ Precautions</h3>
            <ul>
                <li>Avoid exposure to smoke, dust, strong perfumes, and pollution.</li>
                <li>Stay away from allergens like pollen, pet dander, or mold.</li>
                <li>Keep your living space clean and well-ventilated.</li>
                <li>Use asthma medication as prescribed by your doctor.</li>
                <li>Avoid strenuous exercise without proper warm-up.</li>
                <li>Have an action plan for asthma attacks and know when to seek help.</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🥗 Dietary Plan</h3>
            <div class="timing-plan">
                <div class="time-item">
                    <strong>7:00 – 7:30 AM | Early Morning:</strong>
                    <p>Warm water with lemon (helps clear airways)</p>
                </div>
                <div class="time-item">
                    <strong>8:00 – 8:30 AM | Breakfast:</strong>
                    <p>Fresh fruits like apples, pears, or berries (rich in antioxidants)<br>Whole grain cereals or oats<br>Milk or yogurt</p>
                </div>
                <div class="time-item">
                    <strong>11:00 AM | Mid-Morning Snack:</strong>
                    <p>Nuts like almonds or walnuts<br>Fresh vegetable sticks</p>
                </div>
                <div class="time-item">
                    <strong>1:00 – 1:30 PM | Lunch:</strong>
                    <p>Lean proteins like chicken, fish, or legumes<br>Cooked vegetables like carrots, spinach, and broccoli<br>Brown rice or whole wheat roti</p>
                </div>
                <div class="time-item">
                    <strong>4:00 PM | Evening Snack:</strong>
                    <p>Herbal teas (ginger or tulsi)<br>Fruits like papaya or melon</p>
                </div>
                <div class="time-item">
                    <strong>7:00 – 7:30 PM | Dinner:</strong>
                    <p>Light meal: vegetable soup, khichdi, or soft cooked veggies with roti<br>Avoid fried or heavy foods in the evening</p>
                </div>
                <div class="time-item">
                    <strong>Before Bed (Optional):</strong>
                    <p>Warm turmeric milk (helps reduce inflammation, 2–3 times/week)</p>
                </div>
            </div>
        </div>

        <div class="info-section">
            <h3>🏃 Exercises</h3>
            <ul>
                <li>Gentle breathing exercises like pranayama (deep breathing) daily</li>
                <li>Moderate, low-impact activities such as walking or swimming</li>
                <li>Avoid intense workouts or outdoor exercise when pollution is high</li>
                <li>Always warm up before physical activity</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🧴 DIY Remedies</h3>
            <ul>
                <li>Steam inhalation with eucalyptus or mint oil for easier breathing</li>
                <li>Honey and ginger tea to soothe the throat</li>
                <li>Keep indoor plants that purify air (like aloe vera or spider plant)</li>
                <li>Use a humidifier in dry weather to keep air moist</li>
                <li>Avoid cold drinks and foods that can trigger asthma</li>
            </ul>
        </div>
    </div>

    <!-- Children Section -->
    <div id="children" class="age-content">
        <div class="info-section">
            <h3>🔴 What Is It?</h3>
            <p>Asthma in children causes airway inflammation and difficulty breathing, with symptoms like wheezing, coughing, and chest tightness. Common triggers include allergies, cold air, and exercise.</p>
        </div>
        
        <div class="info-section">
            <h3>⚠ Precautions for Children</h3>
            <ul>
                <li>Avoid smoke, dust, strong perfumes, and pet dander.</li>
                <li>Keep their play area clean and dust-free.</li>
                <li>Make sure they take asthma medicines as the doctor says.</li>
                <li>Avoid heavy exercise without warm-up and breaks.</li>
                <li>Watch for signs like coughing or wheezing and tell a doctor if they happen.</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🥗 Dietary Plan</h3>
            <div class="timing-plan">
                <div class="time-item">
                    <strong>7:00 – 7:30 AM | Early Morning:</strong>
                    <p>Warm water or mild lemon water</p>
                </div>
                <div class="time-item">
                    <strong>8:00 – 8:30 AM | Breakfast:</strong>
                    <p>Oatmeal or porridge with milk<br>Fresh fruits like banana or apple</p>
                </div>
                <div class="time-item">
                    <strong>11:00 AM | Mid-Morning Snack:</strong>
                    <p>Fresh fruit or a handful of seeds (pumpkin or sunflower)</p>
                </div>
                <div class="time-item">
                    <strong>1:00 – 1:30 PM | Lunch:</strong>
                    <p>Soft roti or rice<br>Cooked vegetables (carrots, peas, spinach)<br>Lentils or beans for protein<br>Small bowl of yogurt</p>
                </div>
                <div class="time-item">
                    <strong>4:00 PM | Evening Snack:</strong>
                    <p>Fresh vegetable sticks (carrot, cucumber)<br>Or a glass of coconut water</p>
                </div>
                <div class="time-item">
                    <strong>7:00 – 7:30 PM | Dinner:</strong>
                    <p>Light meal: vegetable soup, khichdi, or soft cooked vegetables with roti<br>Avoid fried or heavy foods in the evening</p>
                </div>
                <div class="time-item">
                    <strong>Before Bed (Optional):</strong>
                    <p>Warm turmeric milk (if child likes, 2–3 times a week)</p>
                </div>
            </div>
        </div>

        <div class="info-section">
            <h3>🏃 Exercises</h3>
            <ul>
                <li>Gentle play and breathing exercises like blowing bubbles or balloon games</li>
                <li>Moderate activities like walking or swimming with supervision</li>
                <li>Avoid playing outside when air is polluted or dusty</li>
                <li>Always warm up before playing or sports</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🧴 DIY Remedies</h3>
            <ul>
                <li>Steam inhalation with a little eucalyptus oil (with adult supervision)</li>
                <li>Honey and ginger tea (for kids above 5 years)</li>
                <li>Keep the room clean and free of dust</li>
                <li>Use a humidifier to keep air moist if dry</li>
                <li>Avoid cold drinks and foods that may trigger coughing</li>
            </ul>
        </div>
    </div>

    <!-- Elderly Section -->
    <div id="elderly" class="age-content">
        <div class="info-section">
            <h3>🔴 What Is It?</h3>
            <p>Asthma in older adults involves chronic airway inflammation and breathing difficulties. Symptoms may worsen with age and can be triggered by environmental factors, infections, or medications.</p>
        </div>
        
        <div class="info-section">
            <h3>⚠ Precautions for Older People</h3>
            <ul>
                <li>Avoid exposure to smoke, dust, and strong smells like perfumes or cleaning chemicals.</li>
                <li>Stay indoors on high pollution or pollen days.</li>
                <li>Use prescribed inhalers and medicines regularly.</li>
                <li>Keep the home clean, dust-free, and well-ventilated.</li>
                <li>Avoid strenuous activities without warming up and pacing yourself.</li>
                <li>Have an emergency plan ready for asthma attacks.</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🥗 Dietary Plan</h3>
            <div class="timing-plan">
                <div class="time-item">
                    <strong>7:00 – 7:30 AM | Early Morning:</strong>
                    <p>Warm water with lemon or ginger</p>
                </div>
                <div class="time-item">
                    <strong>8:00 – 8:30 AM | Breakfast:</strong>
                    <p>Soft porridge or oats with milk<br>Fresh fruits like banana or papaya (easy to digest and anti-inflammatory)</p>
                </div>
                <div class="time-item">
                    <strong>11:00 AM | Mid-Morning Snack:</strong>
                    <p>Handful of soaked almonds or walnuts<br>Fresh vegetable sticks or fruits</p>
                </div>
                <div class="time-item">
                    <strong>1:00 – 1:30 PM | Lunch:</strong>
                    <p>Lean proteins: soft cooked chicken, fish, or lentils<br>Cooked vegetables like spinach, carrots, and bottle gourd<br>Brown rice or whole wheat roti</p>
                </div>
                <div class="time-item">
                    <strong>4:00 PM | Evening Snack:</strong>
                    <p>Herbal tea (tulsi or ginger)<br>Light snack such as roasted chickpeas or fresh fruit</p>
                </div>
                <div class="time-item">
                    <strong>7:00 – 7:30 PM | Dinner:</strong>
                    <p>Light meal: vegetable soup, khichdi, or soft cooked veggies with roti<br>Avoid fried, spicy, or heavy foods at night</p>
                </div>
                <div class="time-item">
                    <strong>Before Bed (Optional):</strong>
                    <p>Warm turmeric milk (2–3 times a week) to reduce inflammation and soothe airways</p>
                </div>
            </div>
        </div>

        <div class="info-section">
            <h3>🏃 Exercises</h3>
            <ul>
                <li>Gentle breathing exercises (pranayama) to strengthen lungs</li>
                <li>Low-impact activities like walking or chair exercises</li>
                <li>Avoid exposure to cold air or pollutants during exercise</li>
                <li>Warm up slowly before any physical activity</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🧴 DIY Remedies</h3>
            <ul>
                <li>Steam inhalation with eucalyptus or peppermint oil (use carefully)</li>
                <li>Honey and warm ginger tea to soothe the throat</li>
                <li>Use a humidifier to maintain moisture in dry air</li>
                <li>Keep air fresh and dust-free indoors</li>
                <li>Avoid triggers like cold drinks, smoke, and strong smells</li>
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
       <li><a href="http://localhost//PHP_Files/aboutus.php">About Us</a></li>
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