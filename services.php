<?php
require_once 'includes/seo-functions.php';
// Breadcrumb Schema
$site_url = get_site_url();
$breadcrumb_items = [
    "Home" => $site_url . "index.php",
    "Services" => $site_url . "services.php"
];
include 'includes/header.php';
?>

<!-- Page Banner -->
<section class="page-banner">
    <div class="container">
        <h1>Our Services</h1>
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <span>›</span>
            Services
        </div>
    </div>
</section>

<!-- Services Page -->
<section class="services-page">
    <div class="container">
        <div class="section-header anim-fadeInUp">
            <span class="section-badge">What We Offer</span>
            <h2 class="section-title">Trusted <span>Pharmaceutical Services</span></h2>
            <p class="section-subtitle">At Dupin Health Care Private Limited, we specialize in high-quality third-party pharmaceutical manufacturing and PCD Pharma Franchise services across India.</p>
            <div class="divider"></div>
        </div>

        <div class="services-features stagger-children">
            <?php
            $services = [
                [
                    'icon' => 'fas fa-industry',
                    'title' => 'Third-Party Manufacturing',
                    'desc' => 'We are a premier provider of Third-Party contract services, offering state-of-the-art manufacturing solutions for various therapeutic segments.',
                    'items' => ['Solid Dosage Forms (Tablets/Capsules)', 'Liquid & Semi-Solid Formulations', 'WHO-GMP Compliant Production', 'Scalable & Cost-Effective Solutions', 'Technology Transfer Support']
                ],
                [
                    'icon' => 'fas fa-handshake',
                    'title' => 'PCD Pharma Franchise',
                    'desc' => 'Dupin Healthcare provides exclusive PCD Pharma Franchise opportunities, empowering partners to represent our quality brand in their local districts.',
                    'items' => ['Exclusive Monopoly Rights', 'High-Quality Product Range', 'Marketing & Promotional Support', 'Timely Delivery & Logistics', 'Transparent Business Practices']
                ],
                [
                    'icon' => 'fas fa-truck-medical',
                    'title' => 'Multi-Tier Distribution',
                    'desc' => 'Our robust, technology-driven distribution network ensures that medicines reach patients reliably across Pan-India geographies.',
                    'items' => ['C&F JS pharmaceutical Lucknow', 'Super Stockists for Specific Zones', 'PCD Franchise Partners', 'Retail & Hospital Supply Chain', 'Seamless Supply Management']
                ],
                [
                    'icon' => 'fas fa-shield-halved',
                    'title' => 'Quality Compliance',
                    'desc' => 'We maintain the highest standards of safety and efficacy, ensuring all our products meet international regulatory benchmarks.',
                    'items' => ['WHO-GMP Certified Manufacturing', 'ISO-GLP Quality Benchmarks', 'HACCP Awarded Standards', 'Stringent Quality Control Lab', 'Continuous Process Monitoring']
                ],
            ];
            foreach ($services as $s): ?>
            <div class="sf-card anim-fadeInUp">
                <div class="sf-icon"><i class="<?= $s['icon'] ?>"></i></div>
                <h3><?= $s['title'] ?></h3>
                <p><?= $s['desc'] ?></p>
                <ul class="sf-list">
                    <?php foreach ($s['items'] as $item): ?>
                    <li><i class="fas fa-check-circle"></i> <?= $item ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Distribution Network Details -->
        <div class="dist-model-section anim-fadeInUp">
            <div class="section-header" style="text-align:center;">
                <span class="section-badge">Distribution Reach</span>
                <h2 class="section-title">Our Global & Pan-India <span>Distribution Reach</span></h2>
                <p class="section-subtitle" style="max-width:800px; margin-left:auto; margin-right:auto;">At Dupin Health Care Private Limited, we understand that life-saving medicines are only effective if they reach the patient on time. We have built a robust, technology-driven distribution network designed to ensure seamless supply chain management across diverse geographies.</p>
                <div class="divider" style="margin:16px auto 0;"></div>
            </div>

            <div class="dist-model-grid stagger-children">
                <div class="dist-card anim-fadeInUp">
                    <div class="dist-card-icon"><i class="fas fa-warehouse"></i></div>
                    <h4>C&F Agents (Carrying & Forwarding)</h4>
                    <p>Strategically located regional hubs that manage large-scale inventory and state-wise distribution.</p>
                </div>
                <div class="dist-card anim-fadeInUp">
                    <div class="dist-card-icon"><i class="fas fa-boxes-stacked"></i></div>
                    <h4>Super Stockists</h4>
                    <p>Our primary partners for specific zones, ensuring that even remote areas have access to our formulations.</p>
                </div>
                <div class="dist-card anim-fadeInUp">
                    <div class="dist-card-icon"><i class="fas fa-handshake-angle"></i></div>
                    <h4>PCD Franchise Partners</h4>
                    <p>A growing network of exclusive distributors who represent the Dupin brand in their local districts.</p>
                </div>
                <div class="dist-card anim-fadeInUp">
                    <div class="dist-card-icon"><i class="fas fa-hospital-user"></i></div>
                    <h4>Retail & Hospital Supply</h4>
                    <p>Direct-to-institution supply chains for hospitals, clinics, and government healthcare departments.</p>
                </div>
            </div>
        </div>

        <!-- Presence & Supply Network (Geographic) -->
        <div class="network-section anim-fadeInUp" style="border:none; padding-bottom:0;">
            <div class="section-header" style="text-align:center;">
                <span class="section-badge">Our Footprint</span>
                <h2 class="section-title">Our Presence & <span>Supply Network</span></h2>
                <p class="section-subtitle" style="max-width:800px; margin-left:auto; margin-right:auto;">From our centrally located headquarters in Lucknow, Uttar Pradesh, we have developed a logistics network that ensures speed and safety across every corner of the country.</p>
                <div class="divider" style="margin:16px auto 0;"></div>
            </div>

            <div class="presence-grid" style="margin-top:50px;">
                <div class="presence-col">
                    <h4><i class="fas fa-map-location-dot"></i> Domestic Presence (Pan-India)</h4>
                    <ul class="presence-list">
                        <li><i class="fas fa-circle-check"></i> <div><strong>North India:</strong> Uttar Pradesh (Base), Delhi NCR, Haryana, Punjab, and Uttarakhand.</div></li>
                        <li><i class="fas fa-circle-check"></i> <div><strong>Central India:</strong> Madhya Pradesh and Chhattisgarh.</div></li>
                        <li><i class="fas fa-circle-check"></i> <div><strong>East & West India:</strong> Expanding networks in Bihar, Rajasthan, and Gujarat.</div></li>
                    </ul>
                </div>
                <div class="presence-col">
                    <h4><i class="fas fa-route"></i> Strategic Locations</h4>
                    <ul class="presence-list">
                        <li><i class="fas fa-location-crosshairs"></i> <div><strong>Regional Hubs:</strong> Fast-track delivery to major metropolitan cities.</div></li>
                        <li><i class="fas fa-city"></i> <div><strong>Tier 2 & 3 Cities:</strong> Ensuring availability in smaller towns and rural centers.</div></li>
                        <li><i class="fas fa-hospital-user"></i> <div><strong>Institutional Supply:</strong> Supplying directly to leading hospitals and government departments.</div></li>
                    </ul>
                </div>
            </div>

            <!-- Global Aspirations -->
            <div class="aspiration-box anim-zoomIn" style="margin-top: 60px;">
                <span class="tag">Global Aspirations</span>
                <p>"While we are currently focused on strengthening the Indian healthcare landscape, Dupin Health Care is actively working towards meeting international regulatory standards (such as WHO-GMP) to take our 'Made in India' quality to the global market."</p>
            </div>
        </div>

        <!-- Business FAQs / Model Confirmation -->
        <div style="margin-top:80px; padding: 30px; background: var(--bg-light); border-radius: var(--radius-xl);">
            <div class="section-header anim-fadeInUp" style="text-align:left;">
                <span class="section-badge">Business Q&A</span>
                <h2 class="section-title">Common <span>Queries</span></h2>
                <div class="divider" style="margin:16px 0 0 0;"></div>
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-top: 40px;" class="stagger-children">
                <div class="anim-fadeInUp" style="background:#fff; padding:30px; border-radius:var(--radius-lg); border-left: 5px solid var(--primary);">
                    <h4 style="color:var(--primary); margin-bottom:12px; font-weight:800;">Do you provide PCD pharma franchise?</h4>
                    <p style="font-weight:600; color:var(--text-dark);">Yes, DUPIN HEALTHCARE provides exclusive PCD Pharma Franchise opportunities across India with monopoly rights.</p>
                </div>
                <div class="anim-fadeInUp" style="background:#fff; padding:30px; border-radius:var(--radius-lg); border-left: 5px solid var(--secondary);">
                    <h4 style="color:var(--secondary); margin-bottom:12px; font-weight:800;">Do you offer Third-Party Manufacturing?</h4>
                    <p style="font-weight:600; color:var(--text-dark);">Yes, DUPIN HEALTHCARE is a premier provider of Third-Party contract manufacturing services with state-of-the-art facilities.</p>
                </div>
            </div>
        </div>

        <div style="margin-top:100px;">
            <div class="section-header anim-fadeInUp" style="text-align:center; max-width: 700px; margin-left: auto; margin-right: auto;">
                <span class="section-badge" style="margin-bottom: 12px;">Why DUPIN HEALTHCARE</span>
                <h2 class="section-title">Why Choose <span>Us?</span></h2>
                <div class="divider" style="margin: 16px auto 0;"></div>
            </div>
            <div class="stats-grid stagger-children" style="margin-top:50px; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));">
                <?php
                $reasons = [
                    ['icon'=>'fas fa-award',        'num'=>'WHO-GMP', 'label'=>'Quality Certified & WHO-GMP Compliant'],
                    ['icon'=>'fas fa-truck-fast',   'num'=>'Pan-India','label'=>'Robust Supply Network Across India'],
                    ['icon'=>'fas fa-clock',         'num'=>'ESTD 2024',   'label'=>'Modern Excellence Integrated Since 2024'],
                    ['icon'=>'fas fa-industry',      'num'=>'Baddi Unit',    'label'=>'State-of-the-Art Formulation Facility'],
                ];
                foreach ($reasons as $r): ?>
                <div class="reason-card anim-zoomIn">
                    <div class="reason-icon-wrap">
                        <i class="<?= $r['icon'] ?>"></i>
                    </div>
                    <h3><?= $r['num'] ?></h3>
                    <p><?= $r['label'] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Certified Excellence Ribbon -->
        <div class="anim-fadeInUp" style="background: var(--bg-light); padding: 40px; border-radius: var(--radius-lg); margin-top: 80px; text-align: center; border: 1px solid var(--border);">
            <div style="display:flex; justify-content:center; align-items:center; gap:40px; flex-wrap:wrap; opacity:0.8;">
                <div style="font-weight:700; color:var(--primary); font-size:1.1rem;"><i class="fas fa-award"></i> WHO-GMP</div>
                <div style="font-weight:700; color:var(--primary); font-size:1.1rem;"><i class="fas fa-certificate"></i> ISO COMPLIANT</div>
                <div style="font-weight:700; color:var(--primary); font-size:1.1rem;"><i class="fas fa-vial-circle-check"></i> GLP CERTIFIED</div>
                <div style="font-weight:700; color:var(--primary); font-size:1.1rem;"><i class="fas fa-shield-halved"></i> HACCP AWARDED</div>
            </div>
            <p style="margin-top:20px; font-size:0.9rem; color:var(--text-light);">We strictly follow regulatory guidelines to maintain the highest quality standards in pharmaceutical manufacturing.</p>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="cta-section" style="margin-top:0;">
    <div class="container">
        <div class="cta-content anim-fadeInUp">
            <h2>Ready to Work With Us?</h2>
            <p>Let's discuss how Dupin Healthcare can become your trusted pharmaceutical manufacturing partner.</p>
            <div class="cta-btns">
                <a href="contact.php" class="btn btn-primary"><i class="fas fa-envelope"></i> Contact Us</a>
            </div>
        </div>
    </div>
</section>

<script>
const observer = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('in-view'); });
}, { threshold: 0.1 });
document.querySelectorAll('.anim-fadeInUp,.anim-zoomIn').forEach(el => observer.observe(el));
</script>

<?php include 'includes/footer.php'; ?>
