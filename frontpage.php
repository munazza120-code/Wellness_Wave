<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Wellness Wave - Healing through innovative phobia treatment with a soothing 3D ocean-inspired homepage.">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Water Waves with 3D Cube</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: linear-gradient(#072E33, #02424f, #0C7075, #02424f);
        height: 100vh;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Montserrat', sans-serif;
    }

    .ocean {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .wave {
        background: url('data:image/svg+xml;utf8,<svg viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="%23000"/><path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="%23000"/><path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="%23000"/></svg>');
        position: absolute;
        width: 200%;
        height: 100%;
        animation: wave 10s linear infinite;
        transform: translate3d(0, 0, 0);
        opacity: 0.8;
    }

    .wave:nth-of-type(2) {
        bottom: 0;
        animation: wave 15s linear reverse infinite;
        opacity: 0.5;
    }

    .wave:nth-of-type(3) {
        bottom: 0;
        animation: wave 20s linear infinite;
        opacity: 0.3;
    }

    @keyframes wave {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }

    .content {
        position: relative;
        z-index: 1;
        color: white;
        text-align: center;
        font-family: 'Montserrat', sans-serif;
    }

    h1 {
        font-size: 5rem;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        margin-top: 120px;
        color: white;
    }

    p {
        font-size: 1.5rem;
        max-width: 600px;
        margin: 0 auto;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        color: #FBFADA;
    }

    .cube-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, calc(-50% - 120px));
        width: 80px;
        height: 80px;
        perspective: 300px;
        cursor: pointer;
    }

    .cube {
        width: 100%;
        height: 100%;
        position: relative;
        transform-style: preserve-3d;
        animation: rotateCube 10s linear infinite;
        transition: all 0.3s ease;
    }

    .cube.stopped {
        animation: none;
    }

    .cube div {
        position: absolute;
        width: 80px;
        height: 80px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        font-size: 10px;
        font-weight: bold;
        background: radial-gradient(circle, rgba(5, 22, 26, 0.5), rgba(44, 94, 102, 0.3));
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 0 10px rgba(12, 112, 117, 0.7), 0 0 20px rgba(41, 77, 97, 0.3);
        padding: 5px;
        color: white;
        transition: all 0.3s ease;
    }

    .cube:hover div {
        background: radial-gradient(circle, rgba(253,187,45,0.9), rgba(178,31,31,0.9));
        box-shadow: 0 0 15px rgba(253,187,45,0.7), 0 0 25px rgba(10,10,10,0.5);
    }

    .cube .front { transform: translateZ(40px); }
    .cube .back { transform: rotateY(180deg) translateZ(40px); }
    .cube .right { transform: rotateY(90deg) translateZ(40px); }
    .cube .left { transform: rotateY(-90deg) translateZ(40px); }
    .cube .top { transform: rotateX(90deg) translateZ(40px); }
    .cube .bottom { transform: rotateX(-90deg) translateZ(40px); }

    @keyframes rotateCube {
        0% { transform: rotateX(0) rotateY(0); }
        100% { transform: rotateX(360deg) rotateY(360deg); }
    }
</style>

</head>
<body>
    <div class="ocean">
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
         <div class="wave"></div>
    </div>

    <!-- 3D Cube -->
    <div class="cube-container" id="cubeContainer">
        <a href="http://localhost//PHP_Files/homepagephp.php"><div class="cube" id="cube">
            <div class="front">WELLNESS</div>
            <div class="back">WAVE</div>
            <div class="right">HEAL</div>
            <div class="left">CARE</div>
            <div class="top">HOPE</div>
            <div class="bottom">PEACE</div>
        </div>
    </div></a>

    <div class="content">
        <h1>WELLNESS WAVE</h1>
        <p>Healing through natural treatments</p>
    </div>

    <script>
        // Cube rotation toggle
        const cube = document.getElementById('cube');
        const cubeContainer = document.getElementById('cubeContainer');
        let isRotating = true;

        cubeContainer.addEventListener('click', function() {
            if (isRotating) {
                cube.classList.add('stopped');
                // Apply the current rotation as a fixed transform
                const computedStyle = window.getComputedStyle(cube);
                const matrix = computedStyle.transform;
                cube.style.transform = matrix;
            } else {
                cube.classList.remove('stopped');
                cube.style.animation = 'rotateCube 10s linear infinite';
            }
            isRotating = !isRotating;
        });

        // Optional: Add interactive elements for waves
        document.addEventListener('mousemove', (e) => {
            const waves = document.querySelectorAll('.wave');
            const x = e.clientX / window.innerWidth;
            const y = e.clientY / window.innerHeight;
            
            waves.forEach((wave, index) => {
                const speed = index + 1;
                wave.style.transform = `translate3d(${-50 + x * 10 * speed}%, ${y * 5 * speed}px, 0)`;
            });
        });
    </script>
</body>
</html>