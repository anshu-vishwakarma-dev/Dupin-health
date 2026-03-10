<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oops! 404 - Page Not Found | DUPIN HEALTHCARE</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <style>
        :root {
            --bg-color: #cbdce4;
            --pharma-blue: #007cc3;
            --text-white: #ffffff;
            --doc-blue: #00a9e0;
            --mask-blue: #e0f2f7;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: var(--bg-color);
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }

        /* Background Clouds */
        .cloud-wrap {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 1;
            pointer-events: none;
        }

        .cloud {
            position: absolute;
            background: #fff;
            border-radius: 100px;
            opacity: 0.9;
        }
        .cloud::before, .cloud::after {
            content: '';
            position: absolute;
            background: #fff;
            border-radius: 50%;
        }

        .c1 { width: 180px; height: 50px; top: 15%; left: 10%; opacity: 0.8; }
        .c1::before { width: 80px; height: 80px; top: -40px; left: 25px; }
        .c1::after { width: 60px; height: 60px; top: -30px; left: 90px; }

        .c2 { width: 220px; height: 60px; top: 45%; left: 45%; opacity: 0.7; }
        .c2::before { width: 100px; height: 100px; top: -50px; left: 30px; }
        .c2::after { width: 80px; height: 80px; top: -30px; left: 100px; }

        .c3 { width: 140px; height: 40px; top: 10%; right: 20%; opacity: 0.8; }
        .c3::before { width: 60px; height: 60px; top: -30px; left: 20px; }
        .c3::after { width: 50px; height: 50px; top: -20px; left: 60px; }

        .main-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            z-index: 10;
            width: 100%;
            max-width: 1100px;
            padding: 20px;
        }

        /* Left Side: Text */
        .text-side {
            text-align: center;
            flex: 1;
        }

        .oops-text {
            color: var(--text-white);
            font-size: 5rem;
            font-weight: 800;
            margin-bottom: -15px;
            letter-spacing: 1px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.05);
        }

        .error-num {
            color: var(--pharma-blue);
            font-size: 10rem;
            font-weight: 900;
            line-height: 0.85;
            letter-spacing: -10px;
            margin-bottom: 5px;
            display: inline-block;
            filter: drop-shadow(4px 4px 0px rgba(0,0,0,0.02));
        }

        .pnf-text {
            color: var(--text-white);
            font-size: 2.2rem;
            font-weight: 900;
            letter-spacing: 6px;
            text-transform: uppercase;
        }

        .back-btn {
            display: inline-block;
            margin-top: 45px;
            padding: 16px 45px;
            background: var(--pharma-blue);
            color: #fff;
            text-decoration: none;
            font-weight: 800;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            transition: 0.3s;
            box-shadow: 0 10px 20px rgba(0, 124, 195, 0.25);
        }
        .back-btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px rgba(0, 124, 195, 0.35);
        }

        /* Right Side: Doctor Illustration using SVG */
        .doc-canvas {
            flex: 0 0 320px;
            height: 550px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
        }

        .doctor-svg {
            width: 280px;
            height: auto;
            position: relative;
            z-index: 5;
        }

        .sparklines {
            position: absolute;
            top: 20px;
            right: 40px;
            z-index: 10;
        }

        .cable-svg {
            position: absolute;
            bottom: 220px;
            right: 180px;
            width: 400px;
            height: 150px;
            z-index: 6;
            pointer-events: none;
        }

        .shadow-oval {
            position: absolute;
            bottom: 20px;
            width: 140px;
            height: 15px;
            background: rgba(0,0,0,0.08);
            border-radius: 50%;
            z-index: 2;
        }

        @media (max-width: 900px) {
            .main-wrapper { flex-direction: column; height: auto; padding: 60px 20px; }
            .error-num { font-size: 13rem; }
            .oops-text { font-size: 3.5rem; }
            .pnf-text { font-size: 1.8rem; }
            .doc-canvas { margin-top: 50px; }
            .cable-svg { display: none; }
        }
    </style>
</head>
<body>

    <!-- Decorative Atmosphere -->
    <div class="cloud-wrap">
        <div class="cloud c1"></div>
        <div class="cloud c2"></div>
        <div class="cloud c3"></div>
    </div>

    <div class="main-wrapper">
        <!-- Text Content -->
        <div class="text-side">
            <h2 class="oops-text">Oops!</h2>
            <div class="error-num">404</div>
            <h1 class="pnf-text">Page Not Found</h1>
            <br>
            <a href="index.php" class="back-btn">Go Back Home</a>
        </div>

        <!-- Illustration Content -->
        <div class="doc-canvas">
            <!-- Surprised/Confused Sparkles -->
            <svg class="sparklines" width="80" height="60" viewBox="0 0 80 60">
                <line x1="15" y1="45" x2="30" y2="25" stroke="white" stroke-width="4" stroke-linecap="round" />
                <line x1="40" y1="40" x2="40" y2="15" stroke="white" stroke-width="4" stroke-linecap="round" />
                <line x1="65" y1="45" x2="50" y2="25" stroke="white" stroke-width="4" stroke-linecap="round" />
            </svg>

            <!-- Refined SVG Illustration -->
            <svg class="doctor-svg" viewBox="0 0 400 850" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Gradients for better look -->
                <defs>
                    <linearGradient id="coat-grad" x1="200" y1="200" x2="200" y2="600" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="white"/>
                        <stop offset="1" stop-color="#f8f9fa"/>
                    </linearGradient>
                </defs>

                <!-- Pants & Shoes - Perfected Symmetry -->
                <path d="M150 500 L250 500 L260 780 L200 780 L200 600 L140 780 L140 500 Z" fill="#333333"/>
                <!-- Left Shoe -->
                <rect x="135" y="780" width="55" height="30" rx="15" fill="#4b3621"/>
                <!-- Right Shoe -->
                <rect x="210" y="780" width="55" height="30" rx="15" fill="#4b3621"/>
                <path d="M190 780 L210 780" stroke="#333333" stroke-width="2"/> <!-- Gap filler -->
                
                <!-- Lab Coat -->
                <path d="M120 180 C120 180 280 180 280 180 L320 600 L80 600 Z" fill="url(#coat-grad)"/>
                
                <!-- Inner Blue Shirt -->
                <path d="M170 180 L230 180 L215 500 L185 500 Z" fill="#00A9E0"/>
                
                <!-- Arms/Sleeves -->
                <path d="M100 240 C80 340 130 450 190 430" stroke="white" stroke-width="45" stroke-linecap="round"/>
                <path d="M300 240 C320 340 270 450 210 430" stroke="white" stroke-width="45" stroke-linecap="round"/>

                <!-- Better Hands holding the plug -->
                <path d="M175 435 C175 420 225 420 225 435 L225 450 C225 465 175 465 175 450 Z" fill="#FFDBAC"/>

                <!-- Face/Head Details -->
                <rect x="160" y="60" width="80" height="110" rx="40" fill="#FFDBAC"/>
                <!-- Hair with Depth -->
                <path d="M155 100 C155 30 245 30 245 100 L245 115 L155 115 Z" fill="#4A342B"/>
                <path d="M155 100 C170 70 210 70 245 100" stroke="#3d2b24" stroke-width="2" fill="none"/>
                
                <!-- Glasses -->
                <circle cx="180" cy="120" r="14" stroke="#333333" stroke-width="3"/>
                <circle cx="220" cy="120" r="14" stroke="#333333" stroke-width="3"/>
                <line x1="194" y1="120" x2="206" y2="120" stroke="#333333" stroke-width="3"/>
                
                <!-- Mask -->
                <rect x="170" y="145" width="60" height="30" rx="6" fill="#E0F2F7"/>
                <rect x="173" y="152" width="54" height="2" fill="#d1e9f0"/>
                <rect x="173" y="159" width="54" height="2" fill="#d1e9f0"/>
            </svg>

            <!-- High Quality Cable and Plug -->
            <svg class="cable-svg" preserveAspectRatio="none">
                <path d="M 350,110 C 200,200 150,-20 40,85" stroke="#007CC3" stroke-width="12" fill="transparent" stroke-linecap="round"/>
                <!-- Plug being held -->
                <g transform="translate(325, 95) rotate(18)">
                    <rect x="0" y="0" width="60" height="36" rx="10" fill="#007CC3"/>
                    <rect x="58" y="8" width="20" height="6" rx="3" fill="#BCC6CC"/>
                    <rect x="58" y="22" width="20" height="6" rx="3" fill="#BCC6CC"/>
                </g>
            </svg>

            <div class="shadow-oval"></div>
        </div>
    </div>

</body>
</html>