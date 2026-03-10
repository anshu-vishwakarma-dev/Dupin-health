<?php
include 'includes/header.php';
?>

<!-- ===== HERO SECTION ===== -->
<section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>

    <!-- Floating Particles -->
    <div class="hero-particles">
        <div class="particle" style="width:80px;height:80px;top:15%;left:8%;--dur:7s;--delay:0s;"></div>
        <div class="particle" style="width:50px;height:50px;top:70%;left:15%;--dur:9s;--delay:1s;"></div>
        <div class="particle" style="width:120px;height:120px;top:30%;right:10%;--dur:11s;--delay:2s;"></div>
        <div class="particle" style="width:40px;height:40px;top:80%;right:20%;--dur:6s;--delay:0.5s;"></div>
        <div class="particle" style="width:60px;height:60px;top:55%;left:45%;--dur:8s;--delay:1.5s;"></div>
    </div>

    <div class="container">
        <div class="hero-content">
            <div class="hero-badge">
                <i class="fas fa-shield-alt"></i>
                WHO-GMP | ISO | GLP Certified | HACCP Awarded
            </div>
            <h1 class="hero-title">
                Your Trusted Excellence in <span class="highlight">Third-Party</span><br>
                Pharma Manufacturing
            </h1>
            <p class="hero-description">
                Dupin Healthcare Private Limited bridges the gap between pharmaceutical innovation and large-scale production, empowering brands with state-of-the-art manufacturing solutions.
            </p>
            <div class="hero-cta">
                <a href="products.php" class="btn btn-primary">
                    <i class="fas fa-capsules"></i> Explore Products
                </a>
                <a href="about.php" class="btn btn-white">
                    <i class="fas fa-play-circle"></i> Our Story
                </a>
            </div>
            <div class="hero-stats">
                <div class="hero-stat">
                    <div class="number">30<span>+</span></div>
                    <div class="label">Products</div>
                </div>
                <div class="hero-stat">
                    <div class="number">Pan<span>-</span></div>
                    <div class="label">India Reach</div>
                </div>
                <div class="hero-stat">
                    <div class="number">2024</div>
                    <div class="label">Incorporated</div>
                </div>
                <div class="hero-stat">
                    <div class="number">WHO<span>-</span></div>
                    <div class="label">GMP Certified</div>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-scroll">
        <div class="scroll-indicator">
            <i class="fas fa-chevron-down"></i>
            <span>Scroll</span>
        </div>
    </div>
</section>

<!-- ===== ABOUT SNIPPET ===== -->
<section class="about-section">
    <div class="container">
        <div class="about-grid">
            <!-- Image Column -->
            <div class="about-image-col anim-fadeInLeft">
                <div class="about-image-wrap">
                    <img src="images/about.png" alt="Dupin Healthcare Research Team" loading="lazy">
                </div>
                <div class="about-badge-float">
                    <div class="icon"><i class="fas fa-award"></i></div>
                    <div class="badge-text">
                        <div class="num">Top Rated</div>
                        <div class="lbl">Pharma Company 2024</div>
                    </div>
                </div>
            </div>

            <!-- Text Column -->
            <div class="about-text-col anim-fadeInRight">
                <div class="section-header">
                    <span class="section-badge">Who We Are</span>
                    <h2 class="section-title">Premier <span>Third-Party</span> Manufacturing Partner</h2>
                    <div class="divider"></div>
                </div>
                <p class="about-desc">
                    At Dupin Health Care Private Limited, we specialize in Contract Manufacturing for a wide array of therapeutic segments. We operate as a seamless extension of your business, handling production complexities while you focus on marketing.
                </p>
                <div class="about-features">
                    <div class="feature-item">
                        <i class="fas fa-industry"></i>
                        <div>
                            <h5>State-of-the-Art Facility</h5>
                            <p>Modern machinery equipped for diverse therapeutic segments in Baddi, HP.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-certificate"></i>
                        <div>
                            <h5>Quality Compliance</h5>
                            <p>Compliance with WHO-GMP and ISO-GLP international benchmarks.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-truck-fast"></i>
                        <div>
                            <h5>Robust Distribution</h5>
                            <p>Technology-driven supply chain network across Pan-India.</p>
                        </div>
                    </div>
                </div>
                <a href="about.php" class="btn btn-primary">Learn More About Us <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- ===== SERVICES SECTION ===== -->
<section class="services-section">
    <div class="container">
        <div class="section-header anim-fadeInUp">
            <span class="section-badge">What We Offer</span>
            <h2 class="section-title">Our Core <span>Services</span></h2>
            <p class="section-subtitle">Comprehensive pharmaceutical solutions designed to meet the diverse needs of healthcare providers and patients.</p>
            <div class="divider"></div>
        </div>
        <div class="services-grid stagger-children">
            <?php
            $services = [
                ['icon'=>'fas fa-industry',       'title'=>'Third-Party Manufacturing','desc'=>'Seamless contract manufacturing solutions for a wide array of therapeutic segments with precision and compliance.', 'link'=>'services.php'],
                ['icon'=>'fas fa-handshake',      'title'=>'PCD Pharma Franchise',    'desc'=>'Exclusive franchise opportunities for partners to represent the Dupin brand in their local districts.',           'link'=>'services.php'],
                ['icon'=>'fas fa-truck-medical',  'title'=>'Distribution Reach',      'desc'=>'Robust multi-tier distribution model including C&F agents, super stockists, and retail supply.',              'link'=>'services.php'],
                ['icon'=>'fas fa-shield-halved',  'title'=>'Quality Assurance',       'desc'=>'Ensuring every product meets international safety benchmarks like WHO-GMP and ISO-GLP.',                     'link'=>'services.php'],
                ['icon'=>'fas fa-flask-vial',     'title'=>'Advanced Formulations',   'desc'=>'Continuously upgrading technology and processes to deliver advanced therapeutic formulations.',              'link'=>'services.php'],
                ['icon'=>'fas fa-briefcase',      'title'=>'Business Partnership',    'desc'=>'Operating as a seamless extension of your own business to help you focus on marketing and distribution.',     'link'=>'services.php'],
            ];
            foreach ($services as $s): ?>
            <div class="service-card anim-fadeInUp">
                <div class="service-icon"><i class="<?= $s['icon'] ?>"></i></div>
                <h3><?= $s['title'] ?></h3>
                <p><?= $s['desc'] ?></p>
                <a href="<?= $s['link'] ?>" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== PRODUCTS PREVIEW ===== -->
<section class="products-preview">
    <div class="container">
        <div class="section-header anim-fadeInUp">
            <span class="section-badge">Our Portfolio</span>
            <h2 class="section-title">Featured <span>Products</span></h2>
            <p class="section-subtitle">Explore our wide range of innovative pharmaceutical products across major therapeutic areas.</p>
            <div class="divider"></div>
        </div>
        <div class="products-grid stagger-children">
            <?php
            $products = [
                ['icon'=>'fas fa-pills',        'tag'=>'General',      'name'=>'DUPICIT D3',        'desc'=>'High-quality Vitamin D3 supplement for bone health and immunity.'],
                ['icon'=>'fas fa-tablets',       'tag'=>'Anti-allergic','name'=>'BILADUP M',         'desc'=>'Effective combination for allergic rhinitis and asthma management.'],
                ['icon'=>'fas fa-capsules',      'tag'=>'Gastro',       'name'=>'DUPINEX DSR',       'desc'=>'Fast-acting relief for gastroesophageal reflux disease and acidity.'],
                ['icon'=>'fas fa-syringe',       'tag'=>'Antibiotic',   'name'=>'DUPIMIST FT',       'desc'=>'Advanced antibiotic formulation for various bacterial infections.'],
            ];
            foreach ($products as $p): ?>
            <div class="product-card anim-zoomIn">
                <div class="product-card-img">
                    <i class="<?= $p['icon'] ?>"></i>
                    <span class="product-tag"><?= $p['tag'] ?></span>
                </div>
                <div class="product-card-body">
                    <h3><?= $p['name'] ?></h3>
                    <p><?= $p['desc'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div style="text-align:center;margin-top:44px;">
            <a href="products.php" class="btn btn-outline">View All Products <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<!-- ===== STATS SECTION ===== -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid stagger-children">
            <div class="stat-card anim-zoomIn">
                <div class="stat-card-icon"><i class="fas fa-capsules"></i></div>
                <div class="stat-number"><span class="counter" data-target="500">0</span><sup>+</sup></div>
                <div class="stat-label">Products in Portfolio</div>
            </div>
            <div class="stat-card anim-zoomIn">
                <div class="stat-card-icon"><i class="fas fa-flask"></i></div>
                <div class="stat-number"><span class="counter" data-target="120">0</span></div>
                <div class="stat-label">Active R&D Projects</div>
            </div>
            <div class="stat-card anim-zoomIn">
                <div class="stat-card-icon"><i class="fas fa-globe"></i></div>
                <div class="stat-number"><span class="counter" data-target="30">0</span><sup>+</sup></div>
                <div class="stat-label">Countries Served</div>
            </div>
            <div class="stat-card anim-zoomIn">
                <div class="stat-card-icon"><i class="fas fa-users"></i></div>
                <div class="stat-number"><span class="counter" data-target="5000">0</span><sup>+</sup></div>
                <div class="stat-label">Team Members</div>
            </div>
        </div>
    </div>
</section>

<!-- ===== TESTIMONIALS ===== -->
<section class="testimonials-section">
    <div class="container">
        <div class="section-header anim-fadeInUp">
            <span class="section-badge">Testimonials</span>
            <h2 class="section-title">What Healthcare <span>Professionals</span> Say</h2>
            <div class="divider"></div>
        </div>
        <div class="testimonials-grid stagger-children">
            <?php
            $testimonials = [
                ['text'=>'Dupin Healthcare\'s quality formulations have significantly improved patient outcomes. The efficacy and quality of their products is unmatched.', 'name'=>'Dr. Priya Sharma', 'role'=>'Cardiologist, AIIMS Delhi', 'init'=>'PS', 'stars'=>5],
                ['text'=>'We have partnered with Dupin Healthcare since their inception. Their regulatory team is exceptional, and the manufacturing quality speaks for itself. Truly world-class.', 'name'=>'Mr. Arjun Mehta', 'role'=>'Procurement Head, Apollo Hospitals', 'init'=>'AM', 'stars'=>5],
                ['text'=>'The R&D support from Dupin Healthcare helped our institution optimize clinical integration. Their data management and compliance are outstanding.', 'name'=>'Dr. Sarah Williams', 'role'=>'Principal Investigator, Private Clinic', 'init'=>'SW', 'stars'=>5],
            ];
            foreach ($testimonials as $t): ?>
            <div class="testimonial-card anim-fadeInUp">
                <div class="quote-icon">&ldquo;</div>
                <div class="stars"><?= str_repeat('★', $t['stars']) ?></div>
                <p class="testimonial-text"><?= $t['text'] ?></p>
                <div class="testimonial-author">
                    <div class="author-avatar"><?= $t['init'] ?></div>
                    <div class="author-info">
                        <div class="name"><?= $t['name'] ?></div>
                        <div class="role"><?= $t['role'] ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== CTA SECTION ===== -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content anim-fadeInUp">
            <h2>Ready to Partner with DUPIN HEALTHCARE?</h2>
            <p>Get in touch with our team to explore distribution partnerships, licensing opportunities, or to learn more about our product portfolio.</p>
            <div class="cta-btns">
                <a href="contact.php" class="btn btn-primary">
                    <i class="fas fa-envelope"></i> Contact Us Today
                </a>
                <a href="products.php" class="btn btn-outline" style="color:#fff;border-color:rgba(255,255,255,0.4);">
                    <i class="fas fa-capsules"></i> View Products
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Scroll Animation + Counter Script -->
<script>
// Intersection Observer for scroll animations
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('in-view');
        }
    });
}, { threshold: 0.12 });

document.querySelectorAll('.anim-fadeInUp, .anim-fadeInLeft, .anim-fadeInRight, .anim-zoomIn').forEach(el => {
    observer.observe(el);
});

// Counter Animation
const counters = document.querySelectorAll('.counter');
const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const el = entry.target;
            const target = parseInt(el.dataset.target);
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;
            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                el.textContent = Math.floor(current).toLocaleString();
            }, 16);
            counterObserver.unobserve(el);
        }
    });
}, { threshold: 0.5 });

counters.forEach(c => counterObserver.observe(c));
</script>

<?php include 'includes/footer.php'; ?>
