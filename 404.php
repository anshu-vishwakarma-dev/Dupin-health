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
            --bg-color: #cadae3;
            --pharma-blue: #006eb1;
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
            opacity: 0.85;
        }
        .cloud::before, .cloud::after {
            content: '';
            position: absolute;
            background: #fff;
            border-radius: 50%;
        }

        .c1 { width: 200px; height: 55px; top: 15%; left: 10%; }
        .c1::before { width: 90px; height: 90px; top: -45px; left: 30px; }
        .c1::after { width: 70px; height: 70px; top: -30px; left: 100px; }

        .c2 { width: 140px; height: 40px; top: 45%; left: 45%; opacity: 0.6; }
        .c2::before { width: 65px; height: 65px; top: -30px; left: 20px; }
        .c2::after { width: 50px; height: 50px; top: -20px; left: 65px; }

        .c3 { width: 160px; height: 50px; top: 12%; right: 25%; }
        .c3::before { width: 80px; height: 80px; top: -40px; left: 25px; }
        .c3::after { width: 60px; height: 60px; top: -30px; left: 80px; }

        /* Main Content wrapper */
        .main-content {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            width: 100%;
            max-width: 1200px;
            padding: 20px;
            position: relative;
            z-index: 10;
        }

        /* Left Side: Text */
        .text-box {
            text-align: center;
            flex: 1;
        }

        .oops {
            color: var(--text-white);
            font-size: 5rem;
            font-weight: 800;
            margin-bottom: -15px;
            letter-spacing: 1px;
        }

        .error-num {
            color: var(--pharma-blue);
            font-size: 20rem;
            font-weight: 900;
            line-height: 0.85;
            letter-spacing: -10px;
            margin-bottom: 5px;
            display: inline-block;
        }

        .pnf {
            color: var(--text-white);
            font-size: 2.2rem;
            font-weight: 900;
            letter-spacing: 5px;
            text-transform: uppercase;
        }

        .home-btn {
            display: inline-block;
            margin-top: 50px;
            padding: 16px 45px;
            background: var(--pharma-blue);
            color: #fff;
            text-decoration: none;
            font-weight: 800;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            transition: all 0.3s;
            box-shadow: 0 10px 20px rgba(0, 110, 177, 0.3);
        }
        .home-btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px rgba(0, 110, 177, 0.4);
        }

        /* Right Side: Doctor Illustration Section */
        .doc-section {
            flex: 0 0 350px;
            height: 600px;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
        }

        .doctor-svg {
            width: 250px;
            height: auto;
            position: relative;
            z-index: 5;
        }

        /* The sparkle/thinking lines */
        .sparkles {
            position: absolute;
            top: 40px;
            right: 40px;
            z-index: 10;
        }

        /* Disconnected cable logic */
        .cable-svg {
            position: absolute;
            bottom: 235px;
            right: 170px;
            width: 350px;
            height: 120px;
            z-index: 6;
            pointer-events: none;
        }

        .shadow {
            position: absolute;
            bottom: 30px;
            width: 140px;
            height: 15px;
            background: rgba(0,0,0,0.1);
            border-radius: 50%;
            z-index: 2;
        }

        @media (max-width: 950px) {
            body { overflow-y: auto; height: auto; padding: 60px 20px; }
            .main-content { flex-direction: column; }
            .error-num { font-size: 14rem; }
            .pnf { font-size: 1.8rem; }
            .doc-section { height: 550px; }
        }
    </style>
</head>
<body>

    <!-- Background Clouds -->
    <div class="cloud-wrap">
        <div class="cloud c1"></div>
        <div class="cloud c2"></div>
        <div class="cloud c3"></div>
    </div>

    <div class="main-content">
        <!-- Text Section -->
        <div class="text-box">
            <h2 class="oops">Oops!</h2>
            <div class="error-num">404</div>
            <h1 class="pnf">Page Not Found</h1>
            <br>
            <a href="index.php" class="home-btn">Go To Safety</a>
        </div>

        <!-- Illustration Section -->
        <div class="doc-section">
            <!-- Sparkles above head -->
            <svg class="sparkles" width="70" height="50" viewBox="0 0 70 50">
                <line x1="10" y1="35" x2="25" y2="15" stroke="white" stroke-width="4" stroke-linecap="round" />
                <line x1="35" y1="30" x2="35" y2="5" stroke="white" stroke-width="4" stroke-linecap="round" />
                <line x1="60" y1="35" x2="45" y2="15" stroke="white" stroke-width="4" stroke-linecap="round" />
            </svg>

            <!-- Detailed Doctor SVG -->
            <svg class="doctor-svg" viewBox="0 0 400 850" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Shoes -->
                <rect x="145" y="780" width="55" height="30" rx="15" fill="#4B3621"/>
                <rect x="210" y="780" width="55" height="30" rx="15" fill="#4B3621"/>
                <!-- Pants -->
                <path d="M150 500 L250 500 L260 780 L200 780 L200 650 L140 780 L140 500 Z" fill="#333333"/>
                
                <!-- White Lab Coat -->
                <path d="M120 200 C120 200 280 200 280 200 L320 600 L80 600 Z" fill="white"/>
                <!-- Inner Blue Shirt -->
                <path d="M170 200 L230 200 L215 600 L185 600 Z" fill="#00A9E0"/>
                
                <!-- Arms -->
                <path d="M100 250 C85 350 140 460 200 440" stroke="white" stroke-width="45" stroke-linecap="round"/>
                <path d="M300 250 C315 350 260 460 190 440" stroke="white" stroke-width="45" stroke-linecap="round"/>

                <!-- Hands -->
                <circle cx="210" cy="440" r="22" fill="#FFDBAC"/>
                <circle cx="185" cy="440" r="22" fill="#FFDBAC"/>

                <!-- Face/Head -->
                <rect x="160" y="70" width="80" height="110" rx="40" fill="#FFDBAC"/>
                <!-- Hair -->
                <path d="M155 110 C155 40 245 40 245 110 L245 120 L155 120 Z" fill="#4A342B"/>
                <!-- Glasses -->
                <circle cx="182" cy="130" r="14" stroke="#333333" stroke-width="3"/>
                <circle cx="218" cy="130" r="14" stroke="#333333" stroke-width="3"/>
                <line x1="196" y1="130" x2="204" y2="130" stroke="#333333" stroke-width="3"/>
                
                <!-- Surgical Mask (Missing piece added) -->
                <rect x="170" y="150" width="60" height="30" rx="5" fill="#E0F2F7"/>
                <line x1="170" y1="160" x2="160" y2="155" stroke="white" stroke-width="2"/>
                <line x1="170" y1="170" x2="160" y2="175" stroke="white" stroke-width="2"/>
                <line x1="230" y1="160" x2="240" y2="155" stroke="white" stroke-width="2"/>
                <line x1="230" y1="170" x2="240" y2="175" stroke="white" stroke-width="2"/>
            </svg>

            <!-- Disconnected Cable with Plug -->
            <svg class="cable-svg" preserveAspectRatio="none">
                <!-- Blue cable curved towards hands -->
                <path d="M 320,105 C 180,180 150,-10 40,85" stroke="#006EB1" stroke-width="10" fill="transparent" stroke-linecap="round"/>
                <!-- Plug Head held in hands position -->
                <rect x="305" y="85" width="55" height="35" rx="10" fill="#006EB1" transform="rotate(15, 332, 102)"/>
                <!-- Plug Prongs -->
                <rect x="355" y="93" width="18" height="5" rx="2" fill="#BCC6CC" transform="rotate(15, 332, 102)"/>
                <rect x="355" y="107" width="18" height="5" rx="2" fill="#BCC6CC" transform="rotate(15, 332, 102)"/>
            </svg>

            <!-- Standing Shadow -->
            <div class="shadow"></div>
        </div>
    </div>

</body>
</html>