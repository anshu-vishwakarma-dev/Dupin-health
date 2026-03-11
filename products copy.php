<?php
require_once 'includes/seo-functions.php';
// Breadcrumb Schema
$site_url = get_site_url();
$breadcrumb_items = [
    "Home" => $site_url . "index.php",
    "Products" => $site_url . "products.php"
];
include 'includes/header.php';
?>

<!-- Page Banner -->
<section class="page-banner">
    <div class="container">
        <h1>Our Products</h1>
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <span>›</span>
            Products
        </div>
    </div>
</section>

<!-- Products Page -->
<section class="products-page">
    <div class="container">
        <div class="section-header anim-fadeInUp">
            <span class="section-badge">Portfolio</span>
            <h2 class="section-title">Our Pharmaceutical <span>Products</span></h2>
            <p class="section-subtitle">Dupin Healthcare offers a diverse portfolio of high-quality formulations across multiple therapeutic segments.</p>
            <div class="divider"></div>
        </div>

        <!-- Filter Buttons -->
        <div class="products-filter anim-fadeInUp">
            <button class="filter-btn active" data-filter="all">All Products</button>
            <button class="filter-btn" data-filter="tablets">Tablets</button>
            <button class="filter-btn" data-filter="capsules">Capsules</button>
            <button class="filter-btn" data-filter="syrups">Syrups/Liquids</button>
            <button class="filter-btn" data-filter="softgels">Softgels</button>
            <button class="filter-btn" data-filter="others">Others</button>
        </div>

        <!-- Products Grid -->
        <div class="products-cards stagger-children" id="productsGrid">
            <?php
            include 'includes/product-db.php';
            foreach ($products as $p): ?>
            <div class="prod-card anim-zoomIn" data-category="<?= $p['category'] ?>">
                <div class="prod-card-img">
                    <i class="<?= $p['icon'] ?>"></i>
                    <span class="prod-category"><?= ucfirst($p['category']) ?></span>
                </div>
                <div class="prod-card-body">
                    <h3><?= $p['name'] ?></h3>
                    <p style="font-size:0.85rem; color:var(--text-body); margin-bottom:15px; display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical; overflow:hidden;"><?= $p['desc'] ?></p>
                    <div class="prod-meta">
                        <span><i class="fas fa-tags"></i> <?= ucfirst($p['category']) ?></span>
                    </div>
                    <div style="margin-top:20px;">
                        <a href="product-details.php?id=<?= $p['id'] ?>" class="btn btn-primary" style="width:100%; font-size:0.85rem; padding:10px; border-radius:var(--radius-sm); display:block; text-align:center;">
                            View Details <i class="fas fa-arrow-right" style="margin-left:8px; font-size:0.7rem;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Download Catalogue -->
        <div style="text-align:center;margin-top:60px;padding:40px;background:var(--bg-light);border-radius:var(--radius-lg);" class="anim-fadeInUp">
            <h3 style="font-size:1.3rem;color:var(--text-dark);margin-bottom:10px;">Need Our Complete Product Catalogue?</h3>
            <p style="color:var(--text-light);margin-bottom:24px;">Download our comprehensive product brochure with full prescribing information.</p>
            <a href="contact.php" class="btn btn-primary"><i class="fas fa-download"></i> Request Catalogue</a>
        </div>
    </div>
</section>

<script>
// Filter functionality
const filterBtns = document.querySelectorAll('.filter-btn');
const productCards = document.querySelectorAll('.prod-card');

filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const filter = btn.dataset.filter;
        productCards.forEach(card => {
            if (filter === 'all' || card.dataset.category === filter) {
                card.style.display = '';
                card.style.animation = 'fadeInUp 0.4s ease both';
            } else {
                card.style.display = 'none';
            }
        });
    });
});

const observer = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('in-view'); });
}, { threshold: 0.1 });
document.querySelectorAll('.anim-fadeInUp,.anim-zoomIn').forEach(el => observer.observe(el));
</script>

<?php include 'includes/footer.php'; ?>
