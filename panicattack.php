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
        <h2>Panic Attacks: Comprehensive Guide</h2>
        <p style="color: white;">Understanding, preventing, and managing panic attacks for all age groups</p>
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
            <p>Panic attacks are sudden episodes of intense fear or anxiety. They often come without warning and may feel like a heart attack. Symptoms include rapid heartbeat, sweating, shaking, chest pain, shortness of breath, dizziness, and fear of losing control or dying. Panic attacks can be triggered by stress, trauma, overthinking, hormonal imbalance, or even without any clear reason. They are not life-threatening but can affect daily life if not managed.</p>
        </div>
        
        <div class="info-section">
            <h3>⚠ Precautions</h3>
            <ul>
                <li>Maintain a regular sleep and wake cycle.</li>
                <li>Avoid overworking or multitasking under pressure.</li>
                <li>Limit intake of caffeine, smoking, and sugary or processed foods.</li>
                <li>Stay socially connected – talk to someone you trust.</li>
                <li>Practice stress-reducing habits like journaling, prayer, or listening to soft music.</li>
                <li>Stay away from negative environments or people.</li>
                <li>Learn breathing or grounding techniques to manage sudden panic.</li>
                <li>If frequent, consult a mental health professional.</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🥗 Dietary Plan</h3>
            <div class="timing-plan">
                <div class="time-item">
                    <strong>Morning (7:00–8:00 AM):</strong>
                    <p>Start with warm water. Breakfast with oats, whole wheat toast, banana, or eggs</p>
                </div>
                <div class="time-item">
                    <strong>Afternoon (12:30–1:30 PM):</strong>
                    <p>Balanced meal with chapati/rice, vegetables, dal, and plain yogurt</p>
                </div>
                <div class="time-item">
                    <strong>Evening (4:30–5:30 PM):</strong>
                    <p>Herbal tea (chamomile or tulsi) with light snacks like roasted nuts or fruit</p>
                </div>
                <div class="time-item">
                    <strong>Night (7:30–8:30 PM):</strong>
                    <p>Light dinner – soup, khichdi, or soft cooked vegetables with one roti</p>
                </div>
                <div class="time-item">
                    <strong>Tips:</strong>
                    <p>Avoid heavy, spicy, or fried meals at night. Eat slowly and mindfully. Include calming foods like dark chocolate (small amount), nuts, and leafy greens.</p>
                </div>
            </div>
        </div>

        <div class="info-section">
            <h3>🏃 Exercise Suggestions</h3>
            <ul>
                <li>Daily walking for 30–45 minutes in fresh air</li>
                <li>Breathing exercises (deep inhale–hold–slow exhale) 3–5 minutes daily</li>
                <li>Gentle yoga postures like child's pose, legs up the wall, or corpse pose</li>
                <li>Teens and adults can try stretching, cycling, or light jogging</li>
                <li>Practice meditation or guided relaxation before sleep</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🧴 DIY/Home Remedies</h3>
            <ul>
                <li>Lavender or rose water spray: Calms nerves – spray on face or pillow</li>
                <li>Chamomile tea: 1 cup in the evening to reduce anxiety</li>
                <li>Ashwagandha powder (with warm milk): Helps lower stress levels (with doctor's advice)</li>
                <li>Cold compress or splash: Applying cold water to face during an attack helps relax</li>
                <li>Five senses trick: Name 5 things you see, 4 you feel, 3 you hear, 2 you smell, 1 you taste – grounds the mind during panic</li>
            </ul>
        </div>
    </div>

    <!-- Children Section -->
    <div id="children" class="age-content">
        <div class="info-section">
            <h3>🔴 What Is It?</h3>
            <p>Panic attacks in children can happen when they suddenly feel scared, nervous, or overwhelmed. They may cry, shake, breathe fast, feel chest tightness, or say they feel sick. It can be caused by stress, fear, separation from parents, school pressure, or past trauma. Children may not always understand or explain what they're feeling, so calm support is very important.</p>
        </div>
        
        <div class="info-section">
            <h3>⚠ Precautions for Children</h3>
            <ul>
                <li>Keep a calm and safe home environment</li>
                <li>Talk to them kindly and listen when they are upset</li>
                <li>Give hugs, comfort, and stay close during fear or stress</li>
                <li>Limit scary movies, shouting, and arguments around them</li>
                <li>Keep a fixed daily routine including sleep and meals</li>
                <li>Praise them for small achievements to build confidence</li>
                <li>Teach them to take deep breaths when they feel scared</li>
                <li>If panic attacks repeat, consult a child psychologist</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🥗 Dietary Plan</h3>
            <div class="timing-plan">
                <div class="time-item">
                    <strong>Morning:</strong>
                    <p>Warm milk or water, then light breakfast like fruit, toast with peanut butter, or boiled egg</p>
                </div>
                <div class="time-item">
                    <strong>Afternoon:</strong>
                    <p>Simple lunch like chapati or rice with vegetables, lentils, and yogurt</p>
                </div>
                <div class="time-item">
                    <strong>Evening:</strong>
                    <p>Banana or dry fruits like almonds or walnuts (in small amount)</p>
                </div>
                <div class="time-item">
                    <strong>Night:</strong>
                    <p>Light dinner – soft rice or soup, with calming food like curd</p>
                </div>
                <div class="time-item">
                    <strong>Tips:</strong>
                    <p>Avoid too much sugar and junk food. Add calming foods like bananas, oats, and yogurt. Ensure they drink enough water during the day.</p>
                </div>
            </div>
        </div>

        <div class="info-section">
            <h3>🏃 Exercise Suggestions</h3>
            <ul>
                <li>Let them play outside or indoors for at least 1 hour daily</li>
                <li>Do fun stretching or dancing with music</li>
                <li>Practice belly breathing: "Smell the flower, blow the balloon"</li>
                <li>Teach simple yoga poses like butterfly or child's pose</li>
                <li>Before sleep, try quiet time – coloring, storytelling, or soft music</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🧴 DIY/Home Remedies</h3>
            <ul>
                <li>Calm jar: A small bottle with glitter and water – shake it and watch it settle for calmness</li>
                <li>Lavender oil on pillow: Helps relax at bedtime (use child-safe oil)</li>
                <li>Deep breathing game: Blow bubbles or pretend to blow up a balloon slowly</li>
                <li>Gratitude talk: Ask them 1 good thing about their day before sleeping</li>
                <li>Comfort item: Let them keep a favorite toy or blanket nearby for security</li>
            </ul>
        </div>
    </div>

    <!-- Elderly Section -->
    <div id="elderly" class="age-content">
        <div class="info-section">
            <h3>🔴 What Is It?</h3>
            <p>A panic attack is a sudden feeling of intense fear, stress, or discomfort. It comes without warning and may feel like a heart attack or a serious problem. Common signs include fast heartbeat, sweating, chest tightness, shortness of breath, dizziness, shaking, and fear of losing control. Panic attacks are caused by stress, fear, trauma, or anxiety and are not dangerous, but they feel very real.</p>
        </div>
        
        <div class="info-section">
            <h3>⚠ Precautions for Older People</h3>
            <ul>
                <li>Keep a regular daily routine with enough sleep</li>
                <li>Avoid stress and stay away from negative thinking</li>
                <li>Reduce intake of caffeine, energy drinks, and smoking</li>
                <li>Practice slow breathing and relaxation techniques daily</li>
                <li>Stay socially active – talk to family and friends</li>
                <li>Avoid watching scary or stressful content before sleep</li>
                <li>Write down your thoughts to release stress</li>
                <li>Get medical help if attacks happen often</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🥗 Dietary Plan</h3>
            <div class="timing-plan">
                <div class="time-item">
                    <strong>Morning (7:00–8:00 AM):</strong>
                    <p>Warm water, then light breakfast with fruit, eggs, or oats</p>
                </div>
                <div class="time-item">
                    <strong>Afternoon (12:30–1:30 PM):</strong>
                    <p>Balanced lunch with rice/roti, vegetables, and curd or lean protein</p>
                </div>
                <div class="time-item">
                    <strong>Evening (4:30–5:30 PM):</strong>
                    <p>Herbal tea (chamomile or tulsi) and light snacks like nuts or a banana</p>
                </div>
                <div class="time-item">
                    <strong>Night (7:30–8:30 PM):</strong>
                    <p>Light dinner with soup or khichdi – avoid spicy food</p>
                </div>
                <div class="time-item">
                    <strong>Tips:</strong>
                    <p>Drink plenty of water. Avoid too much sugar and caffeine. Add calming foods like bananas, dark chocolate (in moderation), and yogurt.</p>
                </div>
            </div>
        </div>

        <div class="info-section">
            <h3>🏃 Exercise Suggestions</h3>
            <ul>
                <li>Do deep breathing exercises (inhale 4 sec, hold 4 sec, exhale 4 sec) 2–3 times daily</li>
                <li>Practice yoga or stretching in the morning</li>
                <li>Go for a 30-minute walk daily – sunlight helps reduce anxiety</li>
                <li>Try mindfulness or guided meditation for 10–15 minutes</li>
                <li>Keep a calm bedtime routine – no screen 30 minutes before sleep</li>
            </ul>
        </div>

        <div class="info-section">
            <h3>🧴 DIY/Home Remedies</h3>
            <ul>
                <li>Cold water splash: Wash your face with cold water during a panic feeling</li>
                <li>Lavender oil: Smell or apply lightly on wrists for calming effect</li>
                <li>Breathing with paper bag: If hyperventilating, breathe slowly into a paper bag (short time only)</li>
                <li>Ashwagandha or chamomile tea: Natural herbs to reduce anxiety (check with doctor before regular use)</li>
                <li>Gratitude journal: Write 3 good things daily to build positive focus</li>
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