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
            <div style="font-family: var(--font-heading); font-weight: 700; color: var(--secondary); letter-spacing: 2px; text-transform: uppercase; margin-bottom: 5px; font-size: 0.9rem;">
                Caring for life, EVERYDAY
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
                [
        'id' => 'duplicit-d3',
        'icon' => 'fas fa-pills',
        'image' => 'https://source.unsplash.com/400x300/?vitamin,supplement,tablet&sig=101',
        'category' => 'tablets',
        'name' => 'DUPICIT D3',
        'composition' => 'Cholecalciferol 60,000 IU',
        'usage' => 'Vitamin D deficiency, Bone health',
        'packaging' => '1x4 Tablets',
        'form' => 'Tablet',
        'stage' => 'Established',
        'approval' => 'WHO-GMP',
        'desc' => 'High-potency Vitamin D3 supplement for maintaining strong bones and supporting immune function.'
    ],
    [
        'id' => 'biladup-m',
        'icon' => 'fas fa-tablets',
        'image' => 'https://source.unsplash.com/400x300/?allergy,medicine,pharmacy&sig=102',
        'category' => 'tablets',
        'name' => 'BILADUP M',
        'composition' => 'Bilastine 20mg + Montelukast 10mg',
        'usage' => 'Allergic rhinitis, Asthma',
        'packaging' => '10x10 Tablets',
        'approval' => 'WHO-GMP',
        'desc' => 'Effective combination for managing seasonal allergies and exercise-induced asthma.'
    ],
    [
        'id' => 'dupinac-sp',
        'icon' => 'fas fa-pills',
        'image' => 'https://source.unsplash.com/400x300/?painkiller,inflammation,pills&sig=103',
        'category' => 'tablets',
        'name' => 'DUPINAC SP',
        'composition' => 'Aceclofenac 100mg + Paracetamol 325mg + Serratiopeptidase 15mg',
        'usage' => 'Pain & Inflammation relief',
        'packaging' => '10x10 Tablets',
        'approval' => 'WHO-GMP',
        'desc' => 'Triple-action formula for rapid relief from post-operative pain and inflammatory conditions.'
    ],
    [
        'id' => 'defocure-6',
        'icon' => 'fas fa-pills',
        'image' => 'https://source.unsplash.com/400x300/?steroid,immune,medication&sig=104',
        'category' => 'tablets',
        'name' => 'DEFOCURE 6',
        'composition' => 'Deflazacort 6mg',
        'usage' => 'Anti-inflammatory, Immunosuppressant',
        'packaging' => '10x10 Tablets',
        'approval' => 'WHO-GMP',
        'desc' => 'Glucocorticoid used to treat various inflammatory and autoimmune diseases.'
    ]
            ];
            foreach ($products as $p): ?>
            <div class="product-card anim-zoomIn">
                <div class="product-card-img">
                    <img src="<?= $p['image'] ?>" alt="<?= $p['name'] ?>" loading="lazy" onerror="this.src='images/cat-tablets.png'">
                    <span class="product-tag"><?= $p['category'] ?></span>
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
        <div class="stats-grid stagger-children" style="color: #fff;">
            <div class="stat-card anim-zoomIn">
                <div class="stat-card-icon" style="color: #0d3480;"><i class="fas fa-capsules"></i></div>
                <div class="stat-number"><span class="counter" data-target="100">0</span><sup>+</sup></div>
                <div class="stat-label" style="color: #0d3480;">Products in Portfolio</div>
            </div>
            <div class="stat-card anim-zoomIn">
                <div class="stat-card-icon" style="color: #0d3480;"><i class="fas fa-flask"></i></div>
                <div class="stat-number"><span class="counter" data-target="50">0</span></div>
                <div class="stat-label" style="color: #0d3480;">Active R&D Projects</div>
            </div>
            <div class="stat-card anim-zoomIn">
                <div class="stat-card-icon" style="color: #0d3480;"><i class="fas fa-globe"></i></div>
                <div class="stat-number"><span class="counter" data-target="15">0</span><sup>+</sup></div>
                <div class="stat-label" style="color: #0d3480;">Countries Served</div>
            </div>
            <div class="stat-card anim-zoomIn">
                <div class="stat-card-icon" style="color: #0d3480;"><i class="fas fa-users"></i></div>
                <div class="stat-number"><span class="counter" data-target="500">0</span><sup>+</sup></div>
                <div class="stat-label" style="color: #0d3480;">Team Members</div>
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
                ['text'=>'As a PCD partner in North India, Dupin Healthcare has provided exceptional support and high-quality formulations. Their ethics and timely delivery have helped me grow my franchise tremendously.', 'name'=>'Mr. Vikram Singh', 'role'=>'PCD Franchise Partner, Punjab', 'init'=>'VS', 'stars'=>5],
                ['text'=>'We chose Dupin Healthcare for third-party manufacturing of our syrup range. The quality standards and WHO-GMP compliance in their Lucknow unit are truly impressive. Highly recommended for contract services.', 'name'=>'Mr. Suresh Khanna', 'role'=>'MD, HealthCare Solutions', 'init'=>'SK', 'stars'=>5],
                ['text'=>'Being based in Lucknow, I have personally seen Dupin Healthcare\'s commitment to excellence. Their tablets and capsules are highly efficacious and have become a brand of trust for us.', 'name'=>'Dr. Rajesh Gupta', 'role'=>'Senior Physician, Lucknow', 'init'=>'RG', 'stars'=>5],
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
            <h2>Partner with DUPIN Healthcare for Quality Medicines</h2>
            <p>Join our <strong>PCD Pharma Franchise</strong> network or partner with us for premium <strong>Third-Party Manufacturing</strong>. Experience excellence in quality and support.</p>
            <div class="cta-btns">
                <a href="contact.php" class="btn btn-primary">
                    <i class="fas fa-handshake"></i> Partner With Us
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
