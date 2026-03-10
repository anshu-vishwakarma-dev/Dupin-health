<?php
require_once 'includes/seo-functions.php';
// Breadcrumb Schema
$site_url = get_site_url();
$breadcrumb_items = [
    "Home" => $site_url . "index.php",
    "Research & Development" => $site_url . "research.php"
];
include 'includes/header.php';
?>

<!-- Page Banner -->
<section class="page-banner">
    <div class="container">
        <h1>Research &amp; Development</h1>
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <span>›</span>
            Research &amp; Development
        </div>
    </div>
</section>

<!-- Research Page -->
<section class="research-page">
    <div class="container">

        <!-- Intro -->
        <div class="research-intro">
            <div class="anim-fadeInLeft">
                <span class="section-badge">Innovation at Core</span>
                <h2 class="section-title" style="margin-top:14px;">World-Class <span>Research</span> Facilities</h2>
                <div class="divider" style="margin:16px 0 20px;"></div>
                <p style="color:var(--text-body);line-height:1.8;margin-bottom:16px;">
                    Our R&D framework is built on a foundation of scientific excellence and rigorous quality control. We dedicate a significant portion of our resources back into discovering breakthrough formulations that are both effective and affordable.
                </p>
                <p style="color:var(--text-body);line-height:1.8;margin-bottom:26px;">
                    From advanced formulation development to state-of-the-art analytical testing, we have the specialized talent to transform complex pharmaceutical requirements into stable, high-quality life-saving medicines.
                </p>
                <div class="about-features">
                    <div class="feature-item">
                        <i class="fas fa-flask-vial"></i>
                        <div>
                            <h5>Advanced Formulation Lab</h5>
                            <p>Specialized in NDDS (New Drug Delivery Systems) and complex generics.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-dna"></i>
                        <div>
                            <h5>Analytical Stability Testing</h5>
                            <p>Rigorous shelf-life studies and impurity profiling for every batch.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-industry"></i>
                        <div>
                            <h5>Pilot Scale Production</h5>
                            <p>Seamless transition from lab-scale R&D to commercial manufacturing suites.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="anim-fadeInRight">
                <img src="images/research.png" alt="Dupin Healthcare R&D Laboratory" loading="lazy">
            </div>
        </div>

        <!-- Pipeline Section -->
        <div class="pipeline-section">
            <div class="section-header anim-fadeInUp">
                <span class="section-badge">Drug Pipeline</span>
                <h2 class="section-title">Our R&D <span>Pipeline</span></h2>
                <p class="section-subtitle">A robust pipeline of 28 active compounds across multiple therapeutic areas.</p>
                <div class="divider"></div>
            </div>

            <div class="pipeline-items stagger-children">
                <?php
                $pipeline = [
                    ['drug'=>'DH-ONC-217 (OncoPure)',   'area'=>'Oncology – Colorectal Care',       'phase'=>'Phase III',     'progress'=>85, 'status'=>'phase3'],
                    ['drug'=>'DH-IMM-104 (DefoGuard)',    'area'=>'Immunology – Allergic Rhinitis',  'phase'=>'Phase III',     'progress'=>78, 'status'=>'phase3'],
                    ['drug'=>'DH-NEU-311 (NeuroZex)',        'area'=>'Neurology – Anxiety Management',  'phase'=>'Phase II',      'progress'=>55, 'status'=>'phase2'],
                    ['drug'=>'DH-CARD-509 (CardioDup)',     'area'=>'Cardiovascular – Hypertension',    'phase'=>'Phase II',      'progress'=>48, 'status'=>'phase2'],
                    ['drug'=>'DH-RESP-622 (DupiBreath)',      'area'=>'Respiratory – Severe Asthma',        'phase'=>'Phase I',       'progress'=>30, 'status'=>'phase2'],
                ];
                $status_labels = ['phase3'=>'Phase III Active','phase2'=>'Phase II Active','preclinical'=>'Pre-Clinical'];
                foreach ($pipeline as $item): ?>
                <div class="pipeline-item anim-fadeInUp">
                    <div class="pipeline-phase">
                        <div class="ph-label">Stage</div>
                        <div class="ph-name"><?= $item['phase'] ?></div>
                    </div>
                    <div class="pipeline-progress">
                        <h4><?= $item['drug'] ?></h4>
                        <p><?= $item['area'] ?></p>
                        <div class="progress-bar">
                            <div class="fill" style="width:<?= $item['progress'] ?>%"></div>
                        </div>
                    </div>
                    <div class="pipeline-status">
                        <span class="status-badge <?= $item['status'] ?>"><?= $status_labels[$item['status']] ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Research Focus Areas -->
        <div style="margin-bottom:60px;">
            <div class="section-header anim-fadeInUp">
                <span class="section-badge">Focus Areas</span>
                <h2 class="section-title">Therapeutic <span>Focus Areas</span></h2>
                <div class="divider"></div>
            </div>
            <div class="services-grid stagger-children">
                <?php
                $focusAreas = [
                    ['icon'=>'fas fa-syringe','title'=>'Oncology',         'desc'=>'Targeted therapies, CAR-T cell therapy, and immune checkpoint inhibitors for multiple cancer indications.'],
                    ['icon'=>'fas fa-heart-pulse','title'=>'Cardiovascular','desc'=>'Novel mechanisms for heart failure, atherosclerosis, and thromboembolic disease prevention.'],
                    ['icon'=>'fas fa-brain','title'=>'Neuroscience',        'desc'=>'Disease-modifying therapies for Alzheimer\'s, Parkinson\'s, and rare neurological disorders.'],
                    ['icon'=>'fas fa-shield-halved','title'=>'Immunology',  'desc'=>'Biologic treatments for autoimmune conditions including RA, IBD, and psoriasis.'],
                    ['icon'=>'fas fa-lungs','title'=>'Respiratory',         'desc'=>'Next-generation biological therapies for severe asthma, COPD, and pulmonary fibrosis.'],
                    ['icon'=>'fas fa-droplet','title'=>'Metabolic Diseases','desc'=>'Innovative approaches to diabetes, obesity, and non-alcoholic fatty liver disease.'],
                ];
                foreach ($focusAreas as $fa): ?>
                <div class="service-card anim-fadeInUp">
                    <div class="service-icon"><i class="<?= $fa['icon'] ?>"></i></div>
                    <h3><?= $fa['title'] ?></h3>
                    <p><?= $fa['desc'] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- R&D Stats -->
        <div class="stats-section" style="border-radius:var(--radius-xl);padding:60px 40px;margin-bottom:0;">
            <div class="stats-grid stagger-children">
                <div class="stat-card anim-zoomIn">
                    <div class="stat-card-icon"><i class="fas fa-flask"></i></div>
                    <div class="stat-number">15+</div>
                    <div class="stat-label">R&D Formulations Pipeline</div>
                </div>
                <div class="stat-card anim-zoomIn">
                    <div class="stat-card-icon"><i class="fas fa-user-graduate"></i></div>
                    <div class="stat-number">Expert</div>
                    <div class="stat-label">Research Scientists Team</div>
                </div>
                <div class="stat-card anim-zoomIn">
                    <div class="stat-card-icon"><i class="fas fa-file-alt"></i></div>
                    <div class="stat-number">Quality</div>
                    <div class="stat-label">Assurance Protocols</div>
                </div>
                <div class="stat-card anim-zoomIn">
                    <div class="stat-card-icon"><i class="fas fa-shield-halved"></i></div>
                    <div class="stat-number">WHO-GMP</div>
                    <div class="stat-label">Compliance Excellence</div>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
const observer = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('in-view'); });
}, { threshold: 0.1 });
document.querySelectorAll('.anim-fadeInUp,.anim-fadeInLeft,.anim-fadeInRight,.anim-zoomIn').forEach(el => observer.observe(el));
</script>

<?php include 'includes/footer.php'; ?>
