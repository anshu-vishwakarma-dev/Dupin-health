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
                <?php echo get_setting('hero_title', 'Your Trusted Excellence in <span class="highlight">Third-Party</span><br>Pharma Manufacturing'); ?>
            </h1>
            <p class="hero-description">
                <?php echo get_setting('hero_description', 'Dupin Healthcare Private Limited bridges the gap between pharmaceutical innovation and large-scale production, empowering brands with state-of-the-art manufacturing solutions.'); ?>
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
                    <h2 class="section-title">Your Trusted Excellence in <span>Third-Party</span> Pharma Manufacturing</h2>
                    <div class="divider"></div>
                </div>
                <p class="about-desc">
                    <?php echo get_setting('about_company', 'At Dupin Health Care Private Limited, we specialize in Contract Manufacturing for a wide array of therapeutic segments. We operate as a seamless extension of your business, handling production complexities while you focus on marketing.'); ?>
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
            <p class="section-subtitle"><?php echo get_setting('services_text', 'Comprehensive pharmaceutical solutions designed to meet the diverse needs of healthcare providers and patients.'); ?></p>
            <div class="divider"></div>
        </div>
        <div class="services-grid stagger-children">
            <?php
            $services = [
                ['icon'=>'fas fa-industry',       'title'=>'Third-Party Manufacturing','desc'=>'Seamless contract manufacturing solutions for a wide array of therapeutic segments with precision and compliance.', 'link'=>'services.php'],
                ['icon'=>'fas fa-handshake',      'title'=>'PCD Pharma Franchise',    'desc'=>'Exclusive franchise opportunities for partners to represent the Dupin brand in their local districts.',           'link'=>'services.php'],
                ['icon'=>'fas fa-truck-medical',  'title'=>'Distribution Reach',      'desc'=>'Robust multi-tier distribution model including C&F agents, super stockists, and retail supply, supporting CFA - JS pharmaceutical Lucknow distribution.',              'link'=>'services.php'],
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
        <style>
            .products-grid.single-product-layout {
                grid-template-columns: 1fr;
                max-width: 900px;
                margin: 0 auto;
            }
            .products-grid.single-product-layout .product-card {
                display: flex;
                flex-direction: row;
                align-items: center;
                gap: 30px;
                padding: 40px;
                min-height: auto;
            }
            .products-grid.single-product-layout .product-card-img {
                width: 40%;
                height: 300px;
                margin-bottom: 0;
            }
            .products-grid.single-product-layout .product-card-body {
                width: 60%;
                text-align: left;
                padding: 0;
            }
            .products-grid.single-product-layout .product-card-body h3 {
                font-size: 1.8rem;
                margin-bottom: 15px;
            }
            .products-grid.single-product-layout .product-card-body p {
                font-size: 1rem;
                line-height: 1.8;
            }
            @media (max-width: 768px) {
                .products-grid.single-product-layout .product-card {
                    flex-direction: column;
                    padding: 20px;
                }
                .products-grid.single-product-layout .product-card-img,
                .products-grid.single-product-layout .product-card-body {
                    width: 100%;
                }
                .products-grid.single-product-layout .product-card-img {
                    height: 250px;
                }
            }
        </style>
        <div class="section-header anim-fadeInUp">
            <span class="section-badge">Our Portfolio</span>
            <h2 class="section-title">Featured <span>Products</span></h2>
            <p class="section-subtitle">Explore our wide range of innovative pharmaceutical products across major therapeutic areas.</p>
            <div class="divider"></div>
        </div>
        <?php
        $prod_res = db_query("SELECT p.*, c.name as cat_name FROM products p JOIN categories c ON p.category_id = c.id ORDER BY p.id DESC LIMIT 4");
        $prod_count = db_num_rows($prod_res);
        $grid_class = ($prod_count === 1) ? 'products-grid stagger-children single-product-layout' : 'products-grid stagger-children';
        ?>
        <div class="<?php echo $grid_class; ?>">
            <?php
            if($prod_count > 0):
                while ($p = db_fetch_assoc($prod_res)): 
            ?>
            <div class="product-card anim-zoomIn">
                <div class="product-card-img">
                    <img src="admin/uploads/products/<?= !empty($p['image']) ? $p['image'] : 'default.png' ?>" alt="<?= $p['name'] ?>" loading="lazy" onerror="this.src='images/cat-tablets.png'">
                    <span class="product-tag"><?= $p['cat_name'] ?></span>
                </div>
                <div class="product-card-body">
                    <h3><?= $p['name'] ?></h3>
                    <p><?= substr(strip_tags($p['description']), 0, 100) ?>...</p>
                    <?php if($prod_count === 1): ?>
                        <div style="margin-top: 20px;">
                            <a href="product-details.php?id=<?= $p['id'] ?>" class="btn btn-primary">View Full Details</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php 
                endwhile; 
            else:
                echo "<p style='text-align:center;width:100%;'>No featured products found.</p>";
            endif;
            ?>
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
                <div class="stat-card-icon" style="color: #fff;"><i class="fas fa-capsules"></i></div>
                <div class="stat-number"><span class="counter" data-target="100">0</span><sup>+</sup></div>
                <div class="stat-label" style="color: #0d3480;">Products in Portfolio</div>
            </div>
            <div class="stat-card anim-zoomIn">
                <div class="stat-card-icon" style="color: #fff;"><i class="fas fa-flask"></i></div>
                <div class="stat-number"><span class="counter" data-target="20">0</span></div>
                <div class="stat-label" style="color: #0d3480;">Active R&D Projects</div>
            </div>
            <div class="stat-card anim-zoomIn">
                <div class="stat-card-icon" style="color: #fff;"><i class="fas fa-globe"></i></div>
                <div class="stat-number"><span class="counter" data-target="15">0</span><sup>+</sup></div>
                <div class="stat-label" style="color: #0d3480;">Countries Served</div>
            </div>
            <div class="stat-card anim-zoomIn">
                <div class="stat-card-icon" style="color: #fff;"><i class="fas fa-users"></i></div>
                <div class="stat-number"><span class="counter" data-target="300">0</span><sup>+</sup></div>
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
            $t_res = db_query("SELECT * FROM testimonials ORDER BY id DESC");
            while ($t = db_fetch_assoc($t_res)): ?>
            <div class="testimonial-card anim-fadeInUp">
                <div class="quote-icon">&ldquo;</div>
                <div class="stars"><?= str_repeat('★', $t['stars']) ?></div>
                <p class="testimonial-text"><?= $t['content'] ?></p>
                <div class="testimonial-author">
                    <div class="author-avatar"><?= $t['initials'] ?></div>
                    <div class="author-info">
                        <div class="name"><?= $t['name'] ?></div>
                        <div class="role"><?= $t['role'] ?></div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
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
