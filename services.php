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
            <p class="section-subtitle">
                <?php echo get_setting('services_text', 'At Dupin Health Care Private Limited, we specialize in high-quality third-party pharmaceutical manufacturing and PCD Pharma Franchise services across India.'); ?>
            </p>
            <div class="divider"></div>
        </div>

        <div class="services-features stagger-children">
            <?php
            $s_res = db_query("SELECT * FROM services ORDER BY display_order ASC, id ASC");
            while ($s = db_fetch_assoc($s_res)):
                $items = !empty($s['items']) ? explode(',', $s['items']) : [];
            ?>
                <div class="sf-card anim-fadeInUp">
                    <div class="sf-icon"><i class="<?= $s['icon'] ?>"></i></div>
                    <h3><?= $s['title'] ?></h3>
                    <p><?= $s['description'] ?></p>
                    <?php if (!empty($items)): ?>
                        <ul class="sf-list">
                            <?php foreach ($items as $item): ?>
                                <li><i class="fas fa-check-circle"></i> <?= trim($item) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
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
                <?php
                $dist_res = db_query("SELECT * FROM site_features WHERE type='distribution' ORDER BY display_order ASC, id ASC");
                while ($d = db_fetch_assoc($dist_res)):
                ?>
                    <div class="dist-card anim-fadeInUp">
                        <div class="dist-card-icon"><i class="<?= $d['icon'] ?>"></i></div>
                        <h4><?= $d['title'] ?></h4>
                        <p><?= $d['description'] ?></p>
                    </div>
                <?php endwhile; ?>
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
                        <?php
                        $domestic = get_setting('presence_domestic');
                        $domestic_items = !empty($domestic) ? explode('|', $domestic) : [];
                        foreach ($domestic_items as $item):
                            $parts = explode(':', $item, 2);
                            $title = $parts[0] ?? '';
                            $desc = $parts[1] ?? '';
                        ?>
                            <li><i class="fas fa-circle-check"></i>
                                <div><strong><?= trim($title) ?>:</strong> <?= trim($desc) ?></div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="presence-col">
                    <h4><i class="fas fa-route"></i> Strategic Locations</h4>
                    <ul class="presence-list">
                        <?php
                        $strategic = get_setting('presence_strategic');
                        $strategic_items = !empty($strategic) ? explode('|', $strategic) : [];
                        foreach ($strategic_items as $item):
                            $parts = explode(':', $item, 2);
                            $title = $parts[0] ?? '';
                            $desc = $parts[1] ?? '';
                        ?>
                            <li><i class="fas fa-location-crosshairs"></i>
                                <div><strong><?= trim($title) ?>:</strong> <?= trim($desc) ?></div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!-- Global Aspirations -->
            <div class="aspiration-box anim-zoomIn" style="margin-top: 60px;">
                <span class="tag">Global Aspirations</span>
                <p>"<?= get_setting('global_aspirations', 'While we are currently focused on strengthening the Indian healthcare landscape, Dupin Health Care is actively working towards meeting international regulatory standards to take our quality global.') ?>"</p>
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
                <?php
                $faq_res = db_query("SELECT * FROM faqs ORDER BY display_order ASC, id ASC");
                while ($fq = db_fetch_assoc($faq_res)):
                    $border_color = ($fq['color_type'] == 'secondary') ? 'var(--secondary)' : 'var(--primary)';
                ?>
                    <div class="anim-fadeInUp" style="background:var(--bg-white); padding:30px; border-radius:var(--radius-lg); border-left: 5px solid <?= $border_color ?>;">
                        <h4 style="color:<?= $border_color ?>; margin-bottom:12px; font-weight:800;"><?= $fq['question'] ?></h4>
                        <p style="font-weight:600; color:var(--text-dark);"><?= $fq['answer'] ?></p>
                    </div>
                <?php endwhile; ?>
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
                $reasons_res = db_query("SELECT * FROM site_features WHERE type='why' ORDER BY display_order ASC, id ASC");
                while ($r = db_fetch_assoc($reasons_res)): ?>
                    <div class="reason-card anim-zoomIn">
                        <div class="reason-icon-wrap">
                            <i class="<?= $r['icon'] ?>"></i>
                        </div>
                        <h3><?= $r['title'] ?></h3>
                        <p><?= $r['description'] ?></p>
                    </div>
                <?php endwhile; ?>
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
        entries.forEach(e => {
            if (e.isIntersecting) e.target.classList.add('in-view');
        });
    }, {
        threshold: 0.1
    });
    document.querySelectorAll('.anim-fadeInUp,.anim-zoomIn').forEach(el => observer.observe(el));
</script>

<?php include 'includes/footer.php'; ?>