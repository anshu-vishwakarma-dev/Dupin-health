<?php
require_once 'includes/seo-functions.php';
// Breadcrumb Schema
$site_url = get_site_url();
$breadcrumb_items = [
    "Home" => $site_url . "index.php",
    "About Us" => $site_url . "about.php"
];
include 'includes/header.php';
?>

<!-- Page Banner -->
<section class="page-banner">
    <div class="container">
        <h1>ABOUT DUPIN HEALTHCARE</h1>
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <span>›</span>
            About Us
        </div>
    </div>
</section>

<!-- About Page Content -->
<section class="about-page">
    <div class="container">

        <!-- Intro Section -->
        <div class="about-grid" style="margin-bottom:80px;">
            <div class="about-image-col anim-fadeInLeft">
                <div class="about-image-wrap">
                    <img src="images/about.png" alt="Dupin Healthcare Research Facility" loading="lazy">
                </div>
                <div class="about-badge-float">
                    <div class="icon"><i class="fas fa-award"></i></div>
                    <div class="badge-text">
                        <div class="num">Est. 2024</div>
                        <div class="lbl">Trusted Excellence</div>
                    </div>
                </div>
            </div>
            <div class="about-text-col anim-fadeInRight">
                <div class="section-header" style="text-align:left;margin-bottom:24px;">
                    <span class="section-badge">Our Story</span>
                    <h2 class="section-title">Building a Healthier <span>World</span></h2>
                    <div class="divider" style="margin:16px 0 0 0;"></div>
                </div>
                <div style="color:var(--text-body);line-height:1.8;margin-bottom:24px;">
                    <?php echo nl2br(get_setting('about_company', 'Incorporated in late 2024, Dupin Health Care Private Limited was born with a vision to revolutionize the third-party pharma manufacturing landscape. Based in Lucknow, Uttar Pradesh, we bridge the gap between pharmaceutical innovation and large-scale production.')); ?>
                </div>
                <div class="about-features">
                    <div class="feature-item">
                        <i class="fas fa-industry"></i>
                        <div>
                            <h5>State-of-the-Art Facility</h5>
                            <p>Located in Baddi, Himachal Pradesh, equipped with modern machinery.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-certificate"></i>
                        <div>
                            <h5>High Quality Standards</h5>
                            <p>Compliance with WHO-GMP and ISO-GLP safety benchmarks.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-truck-fast"></i>
                        <div>
                            <h5>Extensive Network</h5>
                            <p>Robust Pan-India distribution reach through C&F and stockists.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mission & Vision -->
        <div class="anim-fadeInUp">
            <div class="section-header">
                <span class="section-badge">Our Purpose</span>
                <h2 class="section-title">Mission & <span>Vision</span></h2>
                <div class="divider"></div>
            </div>
        </div>
        <div class="mission-vision stagger-children">
            <div class="mv-card mission anim-fadeInLeft">
                <i class="fas fa-bullseye"></i>
                <h3>Our Mission</h3>
                <div style="color:var(--text-body);line-height:1.6;">
                    <?php echo nl2br(get_setting('mission', 'Manufacturing products that exceed international standards and providing seamless, cost-effective, and scalable solutions.')); ?>
                </div>
            </div>
            <div class="mv-card vision anim-fadeInRight">
                <i class="fas fa-eye"></i>
                <h3>Our Vision</h3>
                <p><?php echo get_setting('vision', 'To be recognized as a global leader in pharmaceutical contract manufacturing, driven by innovation, integrity, and excellence.'); ?></p>
            </div>
        </div>

        <!-- Core Values -->
        <div style="margin:80px 0;">
            <div class="section-header anim-fadeInUp">
                <span class="section-badge">Our Culture</span>
                <h2 class="section-title">Core <span>Values</span></h2>
                <div class="divider"></div>
            </div>
            <div class="services-grid stagger-children" style="margin-top:20px;">
                <?php
                $values = [
                    ['icon' => 'fas fa-heart', 'title' => 'Patient First',      'desc' => 'Every decision starts with the question: how does this benefit the patient? Patient welfare guides all our actions.'],
                    ['icon' => 'fas fa-shield-alt', 'title' => 'Integrity',       'desc' => 'We uphold the highest ethical standards in research, manufacturing, and business conduct. No compromise.'],
                    ['icon' => 'fas fa-lightbulb', 'title' => 'Innovation',       'desc' => 'We foster a culture where creative thinking and bold ideas thrive, continuously investing in better formulations.'],
                    ['icon' => 'fas fa-leaf',   'title' => 'Sustainability',     'desc' => 'Committed to green chemistry, carbon-neutral manufacturing, and responsible supply chain practices.'],
                    ['icon' => 'fas fa-users',  'title' => 'Collaboration',      'desc' => 'We believe great science happens when diverse minds work together — internally and with global partners.'],
                    ['icon' => 'fas fa-star',   'title' => 'Excellence',         'desc' => 'From the lab to the pharmacy shelf, we pursue perfection in quality, efficacy, and safety at every step.'],
                ];
                foreach ($values as $v): ?>
                    <div class="service-card anim-fadeInUp">
                        <div class="service-icon"><i class="<?= $v['icon'] ?>"></i></div>
                        <h3><?= $v['title'] ?></h3>
                        <p><?= $v['desc'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Quality & Regulatory Compliance -->
        <div class="cert-section anim-fadeInUp">
            <div class="section-header" style="text-align:center;">
                <span class="section-badge">Quality Assurance</span>
                <h2 class="section-title">Certifications & <span>Compliance</span></h2>
                <p class="section-subtitle" style="max-width:800px; margin-left:auto; margin-right:auto;">Our manufacturing processes adhere to the highest international safety and quality benchmarks, ensuring every product is reliable and effective.</p>
                <div class="divider" style="margin:16px auto 0;"></div>
            </div>

            <div class="cert-grid stagger-children">
                <div class="cert-badge-card anim-zoomIn">
                    <div class="cert-icon"><i class="fas fa-microscope"></i></div>
                    <h4>WHO-GMP</h4>
                    <p>World Health Organization - Good Manufacturing Practices certified facility and processes.</p>
                </div>
                <div class="cert-badge-card anim-zoomIn">
                    <div class="cert-icon"><i class="fas fa-certificate"></i></div>
                    <h4>ISO Certified</h4>
                    <p>Compliant with international standards for quality management and safety systems.</p>
                </div>
                <div class="cert-badge-card anim-zoomIn">
                    <div class="cert-icon"><i class="fas fa-flask-vial"></i></div>
                    <h4>GLP Certified</h4>
                    <p>Good Laboratory Practices ensure rigorous testing and data integrity in all formulations.</p>
                </div>
                <div class="cert-badge-card anim-zoomIn">
                    <div class="cert-icon"><i class="fas fa-shield-virus"></i></div>
                    <h4>HACCP Awarded</h4>
                    <p>Hazard Analysis Critical Control Point awarded for supreme safety and hygiene standards.</p>
                </div>
            </div>

            <div style="text-align:center; margin-top:40px; color:var(--text-light); font-size: 0.95rem;">
                <i class="fas fa-id-card-clip" style="color:var(--secondary); margin-right:8px;"></i>
                All manufacturing licenses and regulatory approvals are maintained as per the latest <strong>Drug & Cosmetics Act</strong> guidelines.
            </div>
        </div>

        <!-- Leadership Team -->
        <div class="team-section">
            <div class="section-header anim-fadeInUp">
                <span class="section-badge">Leadership</span>
                <h2 class="section-title">Meet Our <span>Team</span></h2>
                <p class="section-subtitle">Guided by experienced leaders who combine scientific expertise with business acumen to drive our global mission.</p>
                <div class="divider"></div>
            </div>
            <div class="team-grid stagger-children">
                <?php
                $team_res = db_query("SELECT * FROM team ORDER BY display_order ASC, id ASC");
                while ($m = db_fetch_assoc($team_res)): 
                    $init = "";
                    foreach(explode(' ', $m['name']) as $word) { $init .= substr($word, 0, 1); }
                ?>
                    <div class="team-card anim-zoomIn">
                        <div class="team-photo">
                            <i class="fas fa-user-tie"></i>
                            <div class="team-photo-overlay">
                                <?php if($m['linkedin_url']): ?>
                                    <a href="<?= $m['linkedin_url'] ?>" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                <?php endif; ?>
                                <a href="contact.php" aria-label="Email"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="team-info">
                            <div class="author-avatar" style="margin:0 auto 10px;"><?= substr($init, 0, 2) ?></div>
                            <h4><?= $m['name'] ?></h4>
                            <div class="role"><?= $m['role'] ?></div>
                            <p><?= $m['description'] ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>

    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content anim-fadeInUp">
            <h2>Join the DUPIN HEALTHCARE Family</h2>
            <p>We are always looking for dedicated partners and professionals passionate about pharmaceutical excellence. Explore opportunities with us.</p>
            <div class="cta-btns">
                <a href="contact.php" class="btn btn-primary"><i class="fas fa-user-plus"></i> Join Our Team</a>
                <a href="contact.php" class="btn btn-outline" style="color:#fff;border-color:rgba(255,255,255,0.4);">
                    <i class="fas fa-envelope"></i> Get In Touch
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    const observer = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) e.target.classList.add('in-view');
        });
    }, {
        threshold: 0.12
    });
    document.querySelectorAll('.anim-fadeInUp,.anim-fadeInLeft,.anim-fadeInRight,.anim-zoomIn').forEach(el => observer.observe(el));
</script>

<?php include 'includes/footer.php'; ?>