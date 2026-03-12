<?php
require_once 'includes/seo-functions.php';
// Breadcrumb Schema
$site_url = get_site_url();
$breadcrumb_items = [
    "Home" => $site_url . "index.php",
    "Contact Us" => $site_url . "contact.php"
];

// Handle form submission
$success = false;
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $phone   = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($message)) {
        $error = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } else {
        // In production: use mail() or SMTP library
        // mail('info@pharmacore.com', "Enquiry: $subject", "Name: $name\nEmail: $email\nPhone: $phone\n\n$message");
        $success = true;
    }
}

include 'includes/header.php';
?>

<!-- Page Banner -->
<section class="page-banner">
    <div class="container">
        <h1>Contact Us</h1>
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <span>›</span>
            Contact
        </div>
    </div>
</section>

<!-- Contact Page -->
<section class="contact-page">
    <div class="container">
        <div class="section-header anim-fadeInUp" style="margin-bottom:50px;">
            <span class="section-badge">Get In Touch</span>
            <h2 class="section-title">We'd Love to <span>Hear From You</span></h2>
            <p class="section-subtitle">Whether you have a partnership enquiry, need product information, or want to explore career opportunities — we're here to help.</p>
            <div class="divider"></div>
        </div>

        <div class="contact-grid">
            <!-- Left: Info -->
            <div class="anim-fadeInLeft">
                <h3 style="font-size:1.3rem;font-weight:700;color:var(--text-dark);margin-bottom:26px;">Contact Information</h3>
                <div class="contact-info-blocks">
                    <div class="contact-info-block">
                        <div class="ci-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h4>Registered Office</h4>
                            <p>VC 59 vastum city new gudaura sec o kanpur road<br>Lucknow, Uttar Pradesh – 226012</p>
                        </div>
                    </div>
                    <div class="contact-info-block">
                        <div class="ci-icon"><i class="fas fa-phone-alt"></i></div>
                        <div>
                            <h4>Phone</h4>
                            <p>18008895167 (Toll Free)<br>9648133333 (Direct)</p>
                        </div>
                        <!-- 9277083830 -->
                    </div>
                    <div class="contact-info-block">
                        <div class="ci-icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <h4>Email</h4>
                            <p>dupinhealthcarepvtltd@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-info-block">
                        <div class="ci-icon"><i class="fas fa-clock"></i></div>
                        <div>
                            <h4>Working Hours</h4>
                            <p>Monday – Friday: 9:00 AM – 6:00 PM IST<br>Saturday: 9:00 AM – 1:00 PM IST</p>
                        </div>
                    </div>
                </div>

                <!-- Map -->
                <div class="map-embed">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14247.973419992348!2d80.8932753!3d26.7765103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bf86968d9f187%3A0x6b77e8a342468301!2sVastum%20City!5e0!3m2!1sen!2sin!4v1709983000000!5m2!1sen!2sin"
                        loading="lazy"
                        allowfullscreen
                        title="Dupin Healthcare Office Location">
                    </iframe>
                </div>
            </div>

            <!-- Right: Form -->
            <div class="anim-fadeInRight">
                <div class="contact-form">
                    <h3>Send Us a Message</h3>
                    <p class="form-subtitle">Fill out the form below and our team will respond within 24 hours.</p>

                    <?php if ($success): ?>
                    <div style="background:#dcfce7;border:1px solid #bbf7d0;border-radius:var(--radius-sm);padding:16px 20px;margin-bottom:24px;display:flex;align-items:center;gap:12px;">
                        <i class="fas fa-check-circle" style="color:#15803d;font-size:1.2rem;"></i>
                        <div>
                            <strong style="color:#15803d;">Message Sent Successfully!</strong><br>
                            <span style="font-size:0.85rem;color:#166534;">Thank you, <?= htmlspecialchars($name) ?>. We'll get back to you within 24 hours.</span>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if ($error): ?>
                    <div style="background:#fef2f2;border:1px solid #fecaca;border-radius:var(--radius-sm);padding:16px 20px;margin-bottom:24px;">
                        <i class="fas fa-exclamation-circle" style="color:#dc2626;"></i>
                        <strong style="color:#dc2626;"> <?= htmlspecialchars($error) ?></strong>
                    </div>
                    <?php endif; ?>

                    <form method="POST" action="contact.php" id="contactForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Full Name <span style="color:var(--danger);">*</span></label>
                                <input type="text" id="name" name="name" placeholder="Enter your full name" required
                                    value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address <span style="color:var(--danger);">*</span></label>
                                <input type="email" id="email" name="email" placeholder="Enter your email address" required
                                    value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number"
                                    value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>">
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <select id="subject" name="subject">
                                    <option value="">Select Subject</option>
                                    <option value="product-enquiry" <?= ($_POST['subject'] ?? '')==='product-enquiry'?'selected':'' ?>>Product Enquiry</option>
                                    <option value="partnership"     <?= ($_POST['subject'] ?? '')==='partnership'?'selected':'' ?>>Partnership / Licensing</option>
                                    <option value="careers"         <?= ($_POST['subject'] ?? '')==='careers'?'selected':'' ?>>Career Opportunities</option>
                                    <option value="medical-affairs" <?= ($_POST['subject'] ?? '')==='medical-affairs'?'selected':'' ?>>Medical Affairs</option>
                                    <option value="other"           <?= ($_POST['subject'] ?? '')==='other'?'selected':'' ?>>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="organisation">Organisation / Hospital</label>
                            <input type="text" id="organisation" name="organisation" placeholder="Enter your organisation name"
                                value="<?= htmlspecialchars($_POST['organisation'] ?? '') ?>">
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message <span style="color:var(--danger);">*</span></label>
                            <textarea id="message" name="message" placeholder="Please describe your enquiry in detail..." required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" id="submitBtn" style="width:100%;justify-content:center;">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Regional Offices -->
        <div style="margin-top:80px;">
            <div class="section-header anim-fadeInUp">
                <span class="section-badge">Global Presence</span>
                <h2 class="section-title">Our <span>Offices</span></h2>
                <div class="divider"></div>
            </div>
            <div class="services-features stagger-children" style="margin-top:20px;">
                <?php
                $offices = [
                    ['flag'=>'🏭','city'=>'Manufacturing Unit', 'icon'=>'fas fa-industry',   'address'=>'Plot no.70/1, Dharampur, jharmajri, Baddi, Dist - Solan, Himachal Pradesh - 173205', 'phone'=>'Available on request'],
                    ['flag'=>'📍','city'=>'Registered Office', 'icon'=>'fas fa-building',   'address'=>'VC 59 vastum city new gudaura sec o kanpur road, Lucknow, UP - 226012',      'phone'=>'18008895167'],
                ];
                foreach ($offices as $o): ?>
                <div class="sf-card anim-fadeInUp" style="text-align:center;">
                    <div style="font-size:2.5rem;margin-bottom:14px;"><?= $o['flag'] ?></div>
                    <h3><?= $o['city'] ?></h3>
                    <div class="sf-list" style="align-items:flex-start;text-align:left;margin-top:14px;">
                        <li><i class="fas fa-map-marker-alt"></i> <?= $o['address'] ?></li>
                        <li><i class="fas fa-phone-alt"></i> <?= $o['phone'] ?></li>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<script>
const observer = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('in-view'); });
}, { threshold: 0.1 });
document.querySelectorAll('.anim-fadeInUp,.anim-fadeInLeft,.anim-fadeInRight').forEach(el => observer.observe(el));

// Form submit effect
document.getElementById('contactForm')?.addEventListener('submit', function() {
    const btn = document.getElementById('submitBtn');
    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
    btn.disabled = true;
});
</script>

<?php include 'includes/footer.php'; ?>
