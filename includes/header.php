<?php
// Get current page for active nav highlighting
$current_page = basename($_SERVER['PHP_SELF']);

// Define current page label
$page_id = str_replace('.php', '', $current_page);
if ($page_id == 'index') $page_id = 'home'; // handle root / index.php

// Include SEO functions
require_once 'includes/seo-functions.php';

// Get Site URL
$site_url = get_site_url();

// Get SEO Metadata
$seo = get_seo_metadata($page_id, isset($custom_seo) ? $custom_seo : []);

// Canonical URL
$canonical_url = $seo['canonical'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Primary Meta Tags -->
    <title><?php echo $seo['title']; ?></title>
    <meta name="title" content="<?php echo $seo['title']; ?>">
    <meta name="description" content="<?php echo $seo['description']; ?>">
    <meta name="keywords" content="<?php echo $seo['keywords']; ?>">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="<?php echo $seo['og_type']; ?>">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <meta property="og:title" content="<?php echo $seo['title']; ?>">
    <meta property="og:description" content="<?php echo $seo['description']; ?>">
    <meta property="og:image" content="<?php echo $site_url . $seo['og_image']; ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo $canonical_url; ?>">
    <meta property="twitter:title" content="<?php echo $seo['title']; ?>">
    <meta property="twitter:description" content="<?php echo $seo['description']; ?>">
    <meta property="twitter:image" content="<?php echo $site_url . $seo['og_image']; ?>">

    <!-- JSON-LD Schema -->
    <script type="application/ld+json">
    <?php echo json_encode(generate_org_schema(), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
    </script>
    
    <?php if (isset($breadcrumb_items)): ?>
    <script type="application/ld+json">
    <?php echo json_encode(generate_breadcrumb_schema($breadcrumb_items), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
    </script>
    <?php endif; ?>

    <?php if (isset($custom_schema)): ?>
    <script type="application/ld+json">
    <?php echo json_encode($custom_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
    </script>
    <?php endif; ?>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/unique.css">

    
</head>
<body>

<!-- ===== PAGE PRELOADER ===== -->
<div class="preloader" id="preloader">
    <div class="loader-content">
        <div class="loader-capsule">
            <div class="capsule-part top"></div>
            <div class="capsule-part bottom"></div>
        </div>
        <div class="loader-text">DUPIN <span>HEALTHCARE</span></div>
        <div class="loader-bar">
            <div class="loader-progress"></div>
        </div>
    </div>
</div>

<!-- ===== PAGE PROGRESS BAR ===== -->
<div id="page-progress"></div>

<!-- ===== NEWS TICKER ===== -->
<div class="news-ticker-wrap" id="newsTicker">
    <div class="news-ticker-label">
        <i class="fas fa-bullhorn"></i> Updates
    </div>
    <div class="ticker-track">
        <div class="ticker-content" id="tickerContent">
            <span>🏆 DUPIN HEALTHCARE - Incorporated late 2024 with a vision to revolutionize third-party pharma manufacturing</span>
            <span>🔬 State-of-the-art facility in Baddi, Himachal Pradesh now operational</span>
            <span>🌍 Robust Pan-India distribution network ensuring seamless supply chain</span>
            <span>💊 Committed to WHO-GMP and ISO-GLP international safety benchmarks</span>
            <span>📅 Premier provider of third-party contract services and PCD Pharma Franchise</span>
            <!-- duplicate for seamless loop -->
            <span>🏆 DUPIN HEALTHCARE - Incorporated late 2024</span>
            <span>🔬 State-of-the-art facility in Baddi, Himachal Pradesh</span>
            <span>🌍 Robust Pan-India distribution network</span>
            <span>💊 WHO-GMP and ISO-GLP compliant</span>
            <span>📅 Third-party contract services and PCD Pharma Franchise</span>
        </div>
    </div>
    <button class="ticker-pause-btn" id="tickerPauseBtn" aria-label="Pause ticker">
        <i class="fas fa-pause" id="tickerIcon"></i>
    </button>
</div>

<!-- Top Info Bar -->
<div class="top-bar">
    <div class="container">
        <div class="top-bar-left">
            <span><i class="fas fa-phone-alt"></i> 18008895167, 9648133333, 9277083830</span>
            <span><i class="fas fa-envelope"></i> dupinhealthcarepvtltd@gmail.com</span>
        </div>
        <div class="top-bar-right">
            <a href="https://www.facebook.com/share/16suEJ2j5g/?mibextid=wwXIfr" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/officialdupin" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/dupin-pharmaceutical-company-b375ba3b5" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
</div>

<!-- Main Navigation (FIXED) -->
<header class="main-header" id="mainHeader">
    <div class="container">
        <div class="nav-wrapper">
            <!-- Logo -->
            <a href="index.php" class="logo">
                <div class="logo-icon">
                    <i class="fas fa-capsules"></i>
                </div>
                <div class="logo-text">
                    <span class="logo-name">DUPIN HEALTHCARE</span>
                    <span class="logo-tagline">Caring for life, EVERYDAY</span>
                </div>
            </a>

            <!-- Navigation Links -->
            <nav class="main-nav" id="mainNav">
                <ul>
                    <li><a href="index.php" class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="about.php" class="<?php echo $current_page == 'about.php' ? 'active' : ''; ?>">About Us</a></li>
                    <li><a href="products.php" class="<?php echo $current_page == 'products.php' ? 'active' : ''; ?>">Products</a></li>
                    <li><a href="services.php" class="<?php echo $current_page == 'services.php' ? 'active' : ''; ?>">Services</a></li>
                    <li><a href="certifications.php" class="<?php echo $current_page == 'certifications.php' ? 'active' : ''; ?>">Certifications</a></li>
                    <!-- <li><a href="research.php" class="<?php echo $current_page == 'research.php' ? 'active' : ''; ?>">Research &amp; Dev</a></li> -->
                    <li><a href="contact.php" class="<?php echo $current_page == 'contact.php' ? 'active' : ''; ?>">Contact</a></li>
                </ul>
            </nav>

            <!-- CTA Button and Hamburger -->
            <div class="nav-right">
                <a href="contact.php" class="btn btn-nav">Get in Touch</a>
                <button class="hamburger" id="hamburger" aria-label="Toggle Menu" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- ===== FLOATING FEATURE BUTTONS ===== -->

<!-- Dark Mode Toggle -->
<button class="dark-mode-toggle" id="darkModeToggle" aria-label="Toggle Dark Mode" title="Toggle Dark Mode">
    <i class="fas fa-moon" id="darkModeIcon"></i>
</button>

<!-- Back to Top -->
<button class="back-to-top" id="backToTop" aria-label="Back to top" title="Back to top">
    <i class="fas fa-chevron-up"></i>
</button>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/919277083830" class="whatsapp-float" target="_blank" rel="noopener" aria-label="Chat on WhatsApp" title="Chat on WhatsApp">
    <i class="fab fa-whatsapp"></i>
    <span class="wa-tooltip">Chat with us!</span>
</a>

<!-- ===== COOKIE CONSENT BANNER ===== -->
<div class="cookie-bar" id="cookieBar">
    <p>
        <i class="fas fa-cookie-bite" style="color:#f59e0b;margin-right:8px;"></i>
        We use cookies to enhance your experience on our website. By continuing, you agree to our
        <a href="#">Privacy Policy</a> &amp; <a href="#">Cookie Policy</a>.
    </p>
    <div class="cookie-bar-btns">
        <button class="cookie-accept" id="cookieAccept">Accept All</button>
        <button class="cookie-decline" id="cookieDecline">Decline</button>
    </div>
</div>

<script>
/* ================================================
   PharmaCore — Global JS (header.php)
   ================================================ */

// --- Dynamic header height CSS variable (ticker + topbar + header) ---
function setHeaderHeight() {
    const ticker  = document.getElementById('newsTicker');
    const topBar  = document.querySelector('.top-bar');
    const header  = document.getElementById('mainHeader');
    let total = 0;
    const tickerH = ticker ? ticker.offsetHeight : 0;
    const topBarH = (topBar && getComputedStyle(topBar).display !== 'none') ? topBar.offsetHeight : 0;
    const headerH = header ? header.offsetHeight : 0;
    total = tickerH + topBarH + headerH;
    document.documentElement.style.setProperty('--header-h', total + 'px');
    // Position stacked fixed bars
    if (topBar) {
        topBar.style.position = 'fixed';
        topBar.style.top      = tickerH + 'px';
        topBar.style.left     = '0';
        topBar.style.right    = '0';
        topBar.style.zIndex   = '1070';
    }
    if (header) {
        header.style.top = (tickerH + topBarH) + 'px';
    }
}
setHeaderHeight();
window.addEventListener('resize', setHeaderHeight);

// --- Page Preloader Hide ---
window.addEventListener('load', function() {
    const preloader = document.getElementById('preloader');
    if (preloader) {
        // We wait as long as the page takes to fully load everything (images, etc)
        // and then provide a smooth fade out.
        setTimeout(() => {
            preloader.classList.add('fade-out');
            document.body.style.overflow = ''; // Unlock scroll
        }, 500); 
    }
});

// Safety exit: If for some reason the page takes > 10s, force hide the loader
setTimeout(() => {
    const preloader = document.getElementById('preloader');
    if (preloader && !preloader.classList.contains('fade-out')) {
        preloader.classList.add('fade-out');
        document.body.style.overflow = '';
    }
}, 10000);

document.body.style.overflow = 'hidden'; // Lock scroll during load Phase

// --- Sticky/Fixed header scroll effect ---
window.addEventListener('scroll', function () {
    const header = document.getElementById('mainHeader');
    if (window.scrollY > 60) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }

    // Back to top visibility
    const btt = document.getElementById('backToTop');
    if (btt) {
        if (window.scrollY > 400) btt.classList.add('visible');
        else btt.classList.remove('visible');
    }

    // Reading progress bar
    const docHeight = document.body.scrollHeight - window.innerHeight;
    const progress = (window.scrollY / docHeight) * 100;
    const bar = document.getElementById('page-progress');
    if (bar) bar.style.width = Math.min(progress, 100) + '%';
});

// --- Mobile hamburger menu ---
const hamburger = document.getElementById('hamburger');
const mainNav   = document.getElementById('mainNav');

hamburger.addEventListener('click', function () {
    mainNav.classList.toggle('open');
    hamburger.classList.toggle('active');
    const expanded = hamburger.getAttribute('aria-expanded') === 'true';
    hamburger.setAttribute('aria-expanded', !expanded);
    document.body.style.overflow = mainNav.classList.contains('open') ? 'hidden' : '';
});

// Close nav when a link is clicked
mainNav.querySelectorAll('a').forEach(function (link) {
    link.addEventListener('click', function () {
        mainNav.classList.remove('open');
        hamburger.classList.remove('active');
        hamburger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
    });
});

// Close nav when clicking the backdrop (outside nav)
document.addEventListener('click', function (e) {
    if (mainNav.classList.contains('open') && !mainNav.contains(e.target) && !hamburger.contains(e.target)) {
        mainNav.classList.remove('open');
        hamburger.classList.remove('active');
        hamburger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
    }
});

// --- Back to Top ---
const bttBtn = document.getElementById('backToTop');
if (bttBtn) {
    bttBtn.addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

// --- Dark Mode Toggle ---
const dmToggle = document.getElementById('darkModeToggle');
const dmIcon   = document.getElementById('darkModeIcon');
if (dmToggle) {
    // Restore preference
    if (localStorage.getItem('pharma_dark') === '1') {
        document.body.classList.add('dark-mode');
        dmIcon.className = 'fas fa-sun';
    }
    dmToggle.addEventListener('click', function () {
        document.body.classList.toggle('dark-mode');
        const isDark = document.body.classList.contains('dark-mode');
        dmIcon.className = isDark ? 'fas fa-sun' : 'fas fa-moon';
        localStorage.setItem('pharma_dark', isDark ? '1' : '0');
    });
}

// --- News Ticker Pause ---
const tickerContent  = document.getElementById('tickerContent');
const tickerPauseBtn = document.getElementById('tickerPauseBtn');
const tickerIcon     = document.getElementById('tickerIcon');
if (tickerPauseBtn && tickerContent) {
    tickerPauseBtn.addEventListener('click', function () {
        tickerContent.classList.toggle('paused');
        const isPaused = tickerContent.classList.contains('paused');
        tickerIcon.className = isPaused ? 'fas fa-play' : 'fas fa-pause';
    });
}

// --- Cookie Consent ---
const cookieBar = document.getElementById('cookieBar');
if (cookieBar && !localStorage.getItem('pharma_cookie')) {
    setTimeout(function () { cookieBar.classList.add('show'); }, 1800);
}
document.getElementById('cookieAccept')?.addEventListener('click', function () {
    localStorage.setItem('pharma_cookie', 'accepted');
    cookieBar.classList.remove('show');
});
document.getElementById('cookieDecline')?.addEventListener('click', function () {
    localStorage.setItem('pharma_cookie', 'declined');
    cookieBar.classList.remove('show');
});
</script>
