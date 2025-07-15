
<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    header("Location: homepagephp.php"); // or your login page
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Wellness Wave - Healing through innovative natural remedies with a soothing ocean-inspired design.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELLNESS WAVE - Natural Remedies Consultation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* ...keep your existing CSS... */
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
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        body {
            background-color: var(--accent);
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .top-nav { 
            /* ...unchanged... */ background: var(--primary); 
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
             position: fixed; width: 100%; top: 0; 
             z-index: 1000; display: flex;
              justify-content: space-between; 
              align-items: center;
               padding: 1rem 5%;
                border-bottom: 2px solid black;
            }

        .logo-container {
         display: flex; 
         align-items: center;
          }
        .cube-logo {
         width: 50px;
          height: 50px;
           perspective: 6000px; 
           margin-right: 15px; 
       }
        .cube {
         width: 100%; 
         height: 100%; 
         transform-style: preserve-3d;
          animation: rotateCube 10s linear infinite;
           }
        .cube div { 
            position: absolute; 
            width: 50px; 
            height: 50px; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            text-align: center;
             font-size: 10px; 
             font-weight: bold; 
             background: radial-gradient(circle, var(--accent), var(--primary)); 
             border: 1px solid white;
              box-shadow: 0 0 15px white;
               color: white; cursor: pointer; 
           }
        .cube .front  { transform: translateZ(25px); }
        .cube .back   { transform: rotateY(180deg) translateZ(25px); }
        .cube .right  { transform: rotateY(90deg) translateZ(25px); }
        .cube .left   { transform: rotateY(-90deg) translateZ(25px); }
        .cube .top    { transform: rotateX(90deg) translateZ(25px); }
        .cube .bottom { transform: rotateX(-90deg) translateZ(25px); }
        @keyframes rotateCube { 0% { transform: rotateX(0) rotateY(0); } 100% { transform: rotateX(360deg) rotateY(360deg); } }
        .logo-text { 
            font-size: 1.8rem; 
            font-weight: bold;
             color: white; }
        .main-nav { display: flex;
         list-style: none; 
     }
        .main-nav li {
         margin-left: 2rem;
          }
        .main-nav a { 
            color: white; 
            text-decoration: none;
             font-weight: 500;
              transition: all 0.3s;
               position: relative;
                padding: 5px 0; 
            }
        .main-nav a:after { 
            content: ''; 
            position: absolute; 
            width: 0;
             height: 2px;
             background: var(--light); bottom: 0; 
             left: 0; transition: width 0.3s;
              }
        .main-nav a:hover:after {
         width: 100%; 
     }
        .main-nav a.active { 
            color: var(--light); 
        }
        .main-nav a.active:after { 
            width: 100%; 
        }
        .auth-buttons {
         display: flex; 
         gap: 1rem;
          }
        .btn {
         padding: 0.6rem 1.5rem; 
         border-radius: 30px;
          font-weight: 600; 
          cursor: pointer; 
          transition: all 0.3s;
           border: none; 
       }
        .btn-outline { 
            background: transparent; 
            border: 2px solid white; 
            color: white; 
        }
        .btn-outline:hover {
         background: white; 
         color: var(--primary); 
     }
        .btn-solid { 
            background: white;
             color: var(--primary); 
         }
        .btn-solid:hover {
         background: var(--light); 
         transform: translateY(-2px); 
         box-shadow: 0 5px 15px rgba(255, 255, 255, 0.3);
          }
        .disease-nav-container { 
            width: 100%;
             background-color: #056d78;
              color: white;
               padding: 5px 0;
                position: fixed; 
                top: 80px; z-index: 999;
                 overflow-x: auto; 
                 white-space: nowrap;
                  -webkit-overflow-scrolling: touch;
                   box-shadow: 0 2px 5px rgba(0,0,0,0.1);
               }
        .disease-nav {
         display: inline-block; 
         padding: 0 20px; 
     }
        .disease-nav a {
         display: inline-block;
          background-color: #68adaf;
           color: white;
            text-decoration: initial;
             padding: 1px 10px; margin: 0 5px; 
             font-size: 0.85em; 
             transition: background-color 0.3s ease, color 0.3s ease; 
             border-radius: 3px;
              font-weight: 500; 
          }
        .disease-nav a:hover {
         background-color: #fffacb;
          color: #056d78;
           transform: scale(1.2);
       }
        main { 
            margin-top: 140px; 
            min-height: calc(100vh - 140px); 
            padding-bottom: 60px;
             }

        /* SLIDER CHANGED BELOW */
        .slider-container {
            width: 100%;
            max-width: 1220px;
            margin: 0 auto 30px;
            aspect-ratio: 16 / 7;
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.18);
            background: #fff;
        }
        .img-slide {
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            opacity: 0;
            transition: opacity 1s;
            object-fit: cover;
            z-index: 1;
        }
        .img-slide.active {
            opacity: 1;
            z-index: 2;
            pointer-events: auto;
        }
        .slide-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(2,66,79,0.72);
            color: #fff;
            font-size: 1.25em;
            padding: 18px 20px 16px 28px;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
            max-width: 100%;
            z-index: 6;
            letter-spacing: 0.02em;
        }
        .slider-nav {
            position: absolute;
            bottom: 22px;
            right: 38px;
            display: flex;
            gap: 13px;
            z-index: 10;
        }
        .slider-dot {
            width: 13px;
            height: 13px;
            border-radius: 50%;
            background: rgba(255,255,255,0.5);
            border: 2px solid white;
            cursor: pointer;
            transition: all 0.3s;
        }
        .slider-dot.active {
            background: var(--secondary);
            border-color: var(--accent);
            transform: scale(1.3);
        }
        .slider-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(2,66,79,0.7);
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 36px; height: 36px;
            font-size: 1.6rem;
            z-index: 10;
            cursor: pointer;
            display: flex; align-items: center; justify-content: center;
            transition: background 0.2s, transform 0.2s;
        }
        .slider-arrow:hover {
            background: var(--secondary);
            transform: translateY(-50%) scale(1.13);
        }
        .slider-arrow.left { left: 10px; }
        .slider-arrow.right { right: 10px; }
        /* END slider styles */

        /* ...rest of your CSS unchanged... */
        .content-area { 
            padding: 20px 5%; 
            max-width: 1200px;
             margin: 0 auto; 
         }
        .intro-text { 
            text-align: center;
             margin-bottom: 40px;
              }
        .intro-text h1 {
         color: var(--primary); 
         margin-bottom: 15px;
          font-size: 2.5rem; 
      }
        .intro-text p {
         color: var(--text); 
         font-size: 1.1rem;
          max-width: 800px;
           margin: 0 auto;
            }
        .features {
         padding: 3rem 0;
          }
        .section-title {
         text-align: center; 
         margin-bottom: 3rem; 
     }
        .section-title h2 {
         font-size: 2rem; 
         color: var(--primary); 
         margin-bottom: 1rem; 
         text-decoration: none;
          }
        .section-title p {
         color: var(--text); 
         max-width: 700px;
          margin: 0 auto; 
          text-decoration: none;
           }
        .features-grid { display: grid;
         grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
         gap: 2rem; text-decoration: none; 
     }
        .feature-card {
         background: white; 
         border-radius: 10px; padding: 2rem; text-align: center; transition: all 0.3s; box-shadow: 0 5px 15px rgba(0,0,0,0.05); text-decoration: none; }
        .feature-card:hover { transform: translateY(-10px); box-shadow: 0 15px 30px rgba(0,0,0,0.1); }
        .feature-icon { font-size: 2.5rem; color: var(--primary); margin-bottom: 1.5rem; }
        .feature-card h3 { font-size: 1.3rem; margin-bottom: 1rem; color: var(--primary); }
        .feature-card p { color: var(--text); }
        /* ...keep your remaining CSS unchanged... */
        .search-container { position: fixed; bottom: 20px; left: 20px; z-index: 1000; background-color: rgba(255, 255, 255, 0.9); padding: 8px; border-radius: 20px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);}
        .search-container input[type="search"] { border: none; outline: none; padding: 5px 10px; border-radius: 15px; background-color: transparent; width: 180px; transition: width 0.3s ease;}
        .search-container input[type="search"]:focus { width: 250px;}
        .footer { background-color: var(--primary); color: white; padding: 30px 20px 20px;}
        .footer-container { display: flex; flex-wrap: wrap; justify-content: space-between; gap: 30px; max-width: 1200px; margin: 0 auto;}
        .footer h2, .footer h3 { margin-bottom: 15px; font-size: 20px; color: white;}
        .footer p, .footer a { font-size: 14px; color: white; text-decoration: none; transition: color 0.3s ease;}
        .footer a:hover { color: var(--accent);}
        .footer-links ul { list-style: none; padding: 0;}
        .footer-links li { margin-bottom: 10px;}
        .footer-social .social-icons a { display: inline-block; margin: 0 10px 10px 0; color: white; background-color: var(--dark); padding: 10px; border-radius: 50%; transition: transform 0.3s, background 0.3s; text-decoration: none;}
        .footer-social .social-icons a:hover { transform: scale(1.2); background-color: var(--accent); color: var(--text);}
        .footer-bottom { text-align: center; margin-top: 30px; border-top: 1px solid black; padding-top: 15px;}
        .footer-legal a { color: var(--accent); margin: 0 5px;}
        .footer-legal a:hover { color: white;}
        .mobile-menu-btn { display: none; font-size: 1.5rem; cursor: pointer; color: white;}
        .vertical-nav { position: fixed; top: 0; right: -300px; width: 300px; height: 100vh; background: var(--primary); box-shadow: -5px 0 15px rgba(0,0,0,0.1); z-index: 1001; transition: right 0.3s ease; padding: 2rem; display: flex; flex-direction: column;}
        .vertical-nav.active { right: 0;}
        .close-btn { align-self: flex-end; font-size: 1.5rem; cursor: pointer; margin-bottom: 2rem; color: white;}
        .vertical-nav-links { list-style: none; display: flex; flex-direction: column; gap: 1.5rem;}
        .vertical-nav-links a { color: white; text-decoration: none; font-weight: 500; font-size: 1.1rem; transition: color 0.3s;}
        .vertical-nav-links a:hover { color: var(--light);}
        .overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; opacity: 0; visibility: hidden; transition: all 0.3s;}
        .overlay.active { opacity: 1; visibility: visible;}
        @media (max-width: 992px) { .main-nav { display: none;} .mobile-menu-btn { display: block;} .disease-nav-container { top: 70px;} main { margin-top: 120px; min-height: calc(100vh - 120px);} }
        @media (max-width: 768px) { .top-nav { padding: 1rem;} .logo-text { font-size: 1.5rem;} .cube-logo { width: 40px; height: 40px; margin-right: 10px;} .cube div { width: 40px; height: 40px;} .cube .front  { transform: translateZ(20px); } .cube .back   { transform: rotateY(180deg) translateZ(20px); } .cube .right  { transform: rotateY(90deg) translateZ(20px); } .cube .left   { transform: rotateY(-90deg) translateZ(20px); } .cube .top    { transform: rotateX(90deg) translateZ(20px); } .cube .bottom { transform: rotateX(-90deg) translateZ(20px); } .intro-text h1 { font-size: 2rem;} .slide-caption { font-size: 1rem; max-width: 80%; bottom: 10px; left: 10px;} .search-container { bottom: 10px; left: 10px;}}
        @media (max-width: 576px) { .auth-buttons { display: none;} .disease-nav a { font-size: 0.75em; padding: 4px 8px;} .intro-text h1 { font-size: 1.8rem;} .footer-container { flex-direction: column; text-align: center;} .footer-social .social-icons a { margin: 10px;} }
    </style>
</head>
<body>

    <!-- Main Navigation (unchanged) ... -->

    <nav class="top-nav">
        <div class="logo-container">
            <div class="cube-logo" onclick="toggleRotation()">
                <div class="cube">
                    <a href="http://localhost//PHP_Files/homepagephp.php"><div class="front">heal</div>
                    <div class="back">care</div>
                    <div class="right">hope</div>
                    <div class="left">peace</div>
                    <div class="top">wave</div>
                    <div class="bottom">Wellness</div></a>
                </div>
            </div>
            <div class="logo-text">WELLNESS WAVE</div>
        </div>
        <ul class="main-nav">
            <li><a href="http://localhost//PHP_Files/homepagephp.php" class="active">Home</a></li>
            <li><a href="http://localhost//PHP_Files/aboutus.php">About Us</a></li>
            <li><a href="http://localhost//PHP_Files/ourapproach.php">Our Approach</a></li>
            <li><a href="http://localhost//PHP_Files/blog.php">Blog</a></li>
            <li><a href="http://localhost//PHP_Files/FAQs.php">FAQ</a></li>
            <li><a href="http://localhost//PHP_Files/contact.php">Contact</a></li>
        </ul>
        <div class="auth-buttons">
            <a href="http://localhost//PHP_Files/auth.php"><button class="btn btn-outline">Login</button></a>
            <a href="http://localhost//PHP_Files/auth.php"><button class="btn btn-solid">Sign Up</button></a>
        </div>
        <div class="mobile-menu-btn" id="mobile-menu-btn">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
    
    <!-- Disease Navigation (unchanged) -->
    <div class="disease-nav-container">
        <nav class="disease-nav">
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
    
    <!-- Mobile Menu (unchanged) -->
    <div class="overlay" id="overlay"></div>
    <div class="vertical-nav" id="vertical-nav">
        <div class="close-btn" id="close-btn">
            <i class="fas fa-times"></i>
        </div>
        <ul class="vertical-nav-links">
            <li><a href="http://localhost//PHP_Files/homepagephp.php" class="active">Home</a></li>
            <li><a href="http://localhost//PHP_Files/aboutus.php">About Us</a></li>
            <li><a href="http://localhost//PHP_Files/ourapproach.php">Our Approach</a></li>
            <li><a href="http://localhost//PHP_Files/FAQs.php">FAQ</a></li>
            <li><a href="http://localhost//PHP_Files/contact.php">Contact</a></li>
            <li><a href="http://localhost//PHP_Files/blog.php">Blog</a></li>
            <li><a href="http://localhost//PHP_Files/auth.php" class="btn btn-outline" style="width: 100%; text-align: center; margin-top: 1rem;">Login</a></li>
            <li><a href="http://localhost//PHP_Files/auth.php" class="btn btn-solid" style="width: 100%; text-align: center;">Sign Up</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <main>
        <!-- Image Slider (updated) -->
        <div class="slider-container">
            <img class="img-slide active" src="https://i.pinimg.com/736x/df/1e/32/df1e3296cde459903a95d63c3f20544a.jpg" alt="Herbal Remedies">
            <div class="slide-caption">GARLIC OIL FOR HAIR GROWTH I DIY RECIPES</div>
            <img class="img-slide" src="https://i.pinimg.com/736x/51/8f/72/518f72d61c64ea4a3e002d828acb601b.jpg" alt="Turmeric Root">
            <div class="slide-caption">Health Benefits and Preparation of Ginger Tea</div>
            <img class="img-slide" src="https://i.pinimg.com/736x/21/39/03/2139034a45f439bfda0f72c81195bc16.jpg" alt="Ginger Tea">
            <div class="slide-caption">12 Powerful Ayurvedic Herbs and Spices </div>
            <img class="img-slide" src="https://i.pinimg.com/736x/07/93/2a/07932ab86b0b6c0f7197db770c74f139.jpg">
            <div class="slide-caption">Ayurvedic Plants Boost Stress and Depression Resilience</div>
            <img class="img-slide" src="https://i.pinimg.com/736x/43/74/ab/4374abc23ab83b5d8bf5faa38ff66c09.jpg" alt="Peppermint">
            <div class="slide-caption">Dark Circles home remedy! 🌺</div>
            <img class="img-slide" src="https://i.pinimg.com/736x/b1/7c/3d/b17c3dba159d12618cea2e630f00d8ce.jpg">
            <div class="slide-caption">Alovera for skin and hairs</div>
            <img class="img-slide" src="https://i.pinimg.com/736x/90/52/6f/90526fc46fe7806759ddc4108be8a9be.jpg" alt="Honey Lemon">
            <div class="slide-caption">Lavender: Relaxation & Sleep</div>
            <button class="slider-arrow left" id="slider-prev"><i class="fas fa-chevron-left"></i></button>
            <button class="slider-arrow right" id="slider-next"><i class="fas fa-chevron-right"></i></button>
            <div class="slider-nav">
                <div class="slider-dot active"></div>
                <div class="slider-dot"></div>
                <div class="slider-dot"></div>
                <div class="slider-dot"></div>
                <div class="slider-dot"></div>
                <div class="slider-dot"></div>
                <div class="slider-dot"></div>
            </div>
        </div>

        <!-- Introductory Text (unchanged) -->
        <div class="content-area">
            <div class="intro-text">
                <h1>Welcome to Wellness Wave</h1>
                <p>Your dedicated resource for natural remedies and holistic wellness solutions. Browse specific health conditions above or explore our resources to find natural approaches to health and wellbeing. We provide expert consultation and support to help you ride the wave towards a healthier life.</p>
            </div>
            <!-- Features Section (unchanged) ... -->
            <section class="features">
                <div class="section-title">
                    <h2>Our Holistic Approach</h2>
                    <p>We combine traditional wisdom with modern science to provide comprehensive wellness solutions</p>
                </div>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <a href="http://localhost//PHP_Files/naturalremedies.php" style="text-decoration: none;" ><h3>Natural Remedies</h3></a>
                        <p>Evidence-based herbal and natural solutions for various health conditions.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <a href="http://localhost//PHP_Files/expertconsultants.php"  style="text-decoration: none;"> <h3>Expert Consultation</h3></a>
                        <p>Personalized advice from our team of natural health practitioners.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <a href="http://localhost//PHP_Files/preventcare.php"  style="text-decoration: none;"><h3>Preventive Care</h3></a>
                        <p>Strategies to maintain health and prevent illness before it starts.</p>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Search Bar (unchanged) -->
    <div class="search-container">
        <form action="#search" method="get">
            <input type="search" name="query" placeholder="Search conditions...">
        </form>
    </div>

    <!-- Footer (unchanged)... -->
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
                    <li><a href="http://localhost//PHP_Files/expertconsultants.php">Consultants</a></li>
                    <li><a href="http://localhost//PHP_Files/FAQs.php">FAQ</a></li>
                    <li><a href="http://localhost//PHP_Files/blog.php">Blog</a></li>
                    <li><a href="http://localhost//PHP_Files/contact.php">Contact</a></li>
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

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const verticalNav = document.getElementById('vertical-nav');
        const overlay = document.getElementById('overlay');
        const closeBtn = document.getElementById('close-btn');
        
        mobileMenuBtn.addEventListener('click', () => {
            verticalNav.classList.add('active');
            overlay.classList.add('active');
        });
        closeBtn.addEventListener('click', () => {
            verticalNav.classList.remove('active');
            overlay.classList.remove('active');
        });
        overlay.addEventListener('click', () => {
            verticalNav.classList.remove('active');
            overlay.classList.remove('active');
        });

        // 7-image slider logic
        const slides = Array.from(document.querySelectorAll('.img-slide'));
        const captions = Array.from(document.querySelectorAll('.slide-caption'));
        const dots = Array.from(document.querySelectorAll('.slider-dot'));
        const prevBtn = document.getElementById('slider-prev');
        const nextBtn = document.getElementById('slider-next');
        let currentSlide = 0;
        let slideInterval;

        function showSlide(idx) {
            slides.forEach((slide, i) => slide.classList.toggle('active', i === idx));
            captions.forEach((cap, i) => cap.style.display = (i === idx ? 'block' : 'none'));
            dots.forEach((dot, i) => dot.classList.toggle('active', i === idx));
        }
        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }
        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }
        dots.forEach((dot, idx) => dot.addEventListener('click', () => { currentSlide = idx; showSlide(currentSlide); }));
        nextBtn.addEventListener('click', nextSlide);
        prevBtn.addEventListener('click', prevSlide);

        function startAuto() { slideInterval = setInterval(nextSlide, 4000); }
        function stopAuto() { clearInterval(slideInterval); }
        document.querySelector('.slider-container').addEventListener('mouseenter', stopAuto);
        document.querySelector('.slider-container').addEventListener('mouseleave', startAuto);

        // Show only the first caption at start
        captions.forEach((cap, i) => cap.style.display = i === 0 ? 'block' : 'none');
        showSlide(currentSlide);
        startAuto();

        // Cube Rotation Toggle (unchanged)
        let isRotating = true;
        function toggleRotation() {
            const cube = document.querySelector('.cube');
            if (!cube) return;
            if (isRotating) {
                cube.style.animation = 'none';
                isRotating = false;
            } else {
                cube.style.animation = 'rotateCube 10s linear infinite';
                isRotating = true;
            }
        }
    </script>
</body>
</html>