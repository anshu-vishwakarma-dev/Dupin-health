<?php
require_once 'includes/seo-functions.php';

// --- CONFIGURATION: PUT YOUR CERTIFICATE FILE LINKS HERE ---
// 1. Apni Certificate image ya PDF ko is folder mein copy karein: images/certificates/
// 2. Us file ka naam niche diye gaye array mein likhein.
$cert_files = [
    'GMP'    => 'images/certificates/gmp.png', // Example: 'images/certificates/gmp-file.jpg'
    'GLP'    => 'images/certificates/GLP.jpeg', // Example: 'images/certificates/glp-file.pdf'
    'HACCP'  => 'images/certificates/HACCP.jpg', 
    'WHO'    => 'images/certificates/WHO.jpg', 
];

// Breadcrumb Schema
$site_url = get_site_url();
$breadcrumb_items = [
    "Home" => $site_url . "index.php",
    "Certifications & Compliance" => $site_url . "certifications.php"
];

include 'includes/header.php';
?>

<!-- Page Banner -->
<section class="page-banner">
    <div class="container">
        <h1>Certifications & Compliance</h1>
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <span>›</span>
            Certifications & Compliance
        </div>
    </div>
</section>

<!-- Certifications Content -->
<section class="certifications-page">
    <div class="container">
        
        <!-- Section Heading & Intro -->
        <div class="cert-intro anim-fadeInUp">
            <div class="section-header">
                <span class="section-badge">Quality Standards</span>
                <h2 class="section-title">Certifications & <span>Quality Compliance</span></h2>
                <div class="divider"></div>
            </div>
            <div class="cert-intro-text">
                <p>At <strong>DUPIN HEALTHCARE PRIVATE LIMITED</strong>, quality and safety are at the core of everything we do. Our manufacturing processes follow strict pharmaceutical standards and are supported by recognized certifications to ensure that every product meets national and international quality benchmarks.</p>
            </div>
        </div>

        <!-- 1️⃣ Certification Logos Row -->
        <div class="cert-logo-row anim-fadeInUp">
            <div class="cert-logo-item">
                <div class="logo-box">GMP</div>
                <span>GMP Certified</span>
            </div>
            <div class="cert-logo-item">
                <div class="logo-box">GLP</div>
                <span>GLP Certified</span>
            </div>
            <div class="cert-logo-item">
                <div class="logo-box">HACCP</div>
                <span>HACCP Compliance</span>
            </div>
            <div class="cert-logo-item">
                <div class="logo-box">WHO</div>
                <span>WHO-GMP</span>
            </div>
        </div>

        <!-- 2️⃣ Descriptions Section -->
        <div class="key-certifications">
            <h3 class="subsection-title">Key Certifications</h3>
            <div class="cert-desc-grid">
                
                <!-- GMP -->
                <div class="cert-desc-card anim-fadeInUp">
                    <div class="card-num">01</div>
                    <div class="card-info">
                        <h4>GMP Certified (Good Manufacturing Practices)</h4>
                        <p>Our manufacturing facilities operate under GMP standards, ensuring that pharmaceutical products are consistently produced and controlled according to quality standards.</p>
                        <?php if(!empty($cert_files['GMP'])): ?>
                            <a href="<?php echo $cert_files['GMP']; ?>" target="_blank" class="view-cert-btn">
                                <i class="fas fa-file-pdf"></i> View Certificate
                            </a>
                        <?php else: ?>
                            <small style="color:var(--text-light); font-style:italic;">[Original Certificate link will be added here]</small>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- GLP -->
                <div class="cert-desc-card anim-fadeInUp">
                    <div class="card-num">02</div>
                    <div class="card-info">
                        <h4>GLP Certified (Good Laboratory Practices)</h4>
                        <p>Our laboratories follow GLP guidelines, ensuring accurate testing, reliable results, and strict quality control during product development and testing.</p>
                        <?php if(!empty($cert_files['GLP'])): ?>
                            <a href="<?php echo $cert_files['GLP']; ?>" target="_blank" class="view-cert-btn">
                                <i class="fas fa-file-pdf"></i> View Certificate
                            </a>
                        <?php else: ?>
                            <small style="color:var(--text-light); font-style:italic;">[Original Certificate link will be added here]</small>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- HACCP -->
                <div class="cert-desc-card anim-fadeInUp">
                    <div class="card-num">03</div>
                    <div class="card-info">
                        <h4>HACCP Compliance</h4>
                        <p>We maintain HACCP (Hazard Analysis and Critical Control Points) standards to ensure safety and quality across our manufacturing and packaging processes.</p>
                        <?php if(!empty($cert_files['HACCP'])): ?>
                            <a href="<?php echo $cert_files['HACCP']; ?>" target="_blank" class="view-cert-btn">
                                <i class="fas fa-file-pdf"></i> View Certificate
                            </a>
                        <?php else: ?>
                            <small style="color:var(--text-light); font-style:italic;">[Original Certificate link will be added here]</small>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- WHO -->
                <div class="cert-desc-card anim-fadeInUp">
                    <div class="card-num">04</div>
                    <div class="card-info">
                        <h4>WHO-GMP Compliance</h4>
                        <p>Our production processes align with WHO-GMP standards, demonstrating our commitment to global pharmaceutical quality practices.</p>
                        <?php if(!empty($cert_files['WHO'])): ?>
                            <a href="<?php echo $cert_files['WHO']; ?>" target="_blank" class="view-cert-btn">
                                <i class="fas fa-file-pdf"></i> View Certificate
                            </a>
                        <?php else: ?>
                            <small style="color:var(--text-light); font-style:italic;">[Original Certificate link will be added here]</small>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>

        <!-- 3️⃣ Quality Commitment Statement -->
        <div class="quality-assurance-box anim-fadeInUp">
            <div class="qa-header">
                <i class="fas fa-shield-alt"></i>
                <h3>Quality Commitment Statement</h3>
            </div>
            <div class="qa-body">
                <p>At <strong>Dupin Healthcare Private Limited</strong>, we believe that quality is not just a requirement but a responsibility. Every stage of our manufacturing process—from raw material selection to final product delivery—is monitored under strict quality assurance protocols.</p>
                <div class="qa-points">
                    <div class="qa-point"><i class="fas fa-check-circle"></i> Raw Material Selection</div>
                    <div class="qa-point"><i class="fas fa-check-circle"></i> Quality Assurance</div>
                    <div class="qa-point"><i class="fas fa-check-circle"></i> 100% Safety Compliance</div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Simple Styling -->
<style>
.certifications-page { padding: 80px 0; background: #f8fafc; }
.cert-intro { max-width: 900px; margin: 0 auto 60px; text-align: center; }
.cert-logo-row { display: flex; justify-content: center; gap: 40px; flex-wrap: wrap; margin-bottom: 60px; }
.cert-logo-item { display: flex; flex-direction: column; align-items: center; width: 150px; }
.cert-logo-item .logo-box { width: 100px; height: 100px; background: #fff; border: 3px solid var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 800; color: var(--primary); margin-bottom: 10px; box-shadow: var(--shadow-sm); }
.cert-logo-item span { font-weight: 700; font-size: 0.85rem; color: var(--text-dark); }

.subsection-title { text-align: center; font-size: 1.8rem; margin-bottom: 40px; color: var(--text-dark); }
.cert-desc-grid { display: flex; flex-direction: column; gap: 20px; max-width: 1000px; margin: 0 auto 60px; }
.cert-desc-card { background: #fff; padding: 30px; border-radius: 15px; display: flex; gap: 25px; border: 1px solid var(--border); transition: var(--transition); }
.cert-desc-card:hover { transform: translateX(10px); border-color: var(--primary); box-shadow: var(--shadow-md); }
.card-num { font-size: 2.5rem; font-weight: 900; color: rgba(27, 79, 168, 0.1); }
.card-info h4 { color: var(--primary); font-size: 1.2rem; margin-bottom: 10px; }
.card-info p { margin-bottom: 15px; font-size: 0.95rem; }

.view-cert-btn { background: var(--primary); color: #fff; padding: 10px 20px; border-radius: 8px; font-weight: 600; display: inline-flex; align-items: center; gap: 10px; text-decoration: none; font-size: 0.9rem; }
.view-cert-btn:hover { background: var(--primary-dark); transform: scale(1.05); }

.quality-assurance-box { background: var(--text-dark); color: #fff; padding: 50px; border-radius: 25px; }
.qa-header { display: flex; align-items: center; gap: 15px; margin-bottom: 20px; }
.qa-header i { font-size: 2rem; color: var(--secondary); }
.qa-header h3 { font-size: 1.5rem; color: var(--secondary); margin: 0; }
.qa-points { display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 15px; margin-top: 20px; }
.qa-point { display: flex; align-items: center; gap: 10px; font-size: 0.95rem; }
.qa-point i { color: var(--secondary); }

@media (max-width: 768px) {
    .cert-desc-card { flex-direction: column; text-align: center; padding: 20px; }
    .qa-header { flex-direction: column; text-align: center; }
}
</style>

<script>
// Scroll animations
const obs = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('in-view'); });
}, { threshold: 0.1 });
document.querySelectorAll('.anim-fadeInUp').forEach(el => obs.observe(el));
</script>

<?php include 'includes/footer.php'; ?>
