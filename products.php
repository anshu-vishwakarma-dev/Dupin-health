<?php
require_once 'includes/seo-functions.php';
// Breadcrumb Schema
$site_url = get_site_url();
$breadcrumb_items = [
    "Home" => $site_url . "index.php",
    "Products" => $site_url . "products.php"
];

// --- Pagination & Filtering Logic ---
include 'includes/product-db.php';

$current_filter = isset($_GET['filter']) ? $_GET['filter'] : 'all';
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;
$items_per_page = 6; // 2 rows × 3 columns

$valid_filters = ['all', 'tablets', 'capsules', 'syrups', 'softgels', 'others'];
if (!in_array($current_filter, $valid_filters)) $current_filter = 'all';

// Filter products
$filtered_products = array_values(array_filter($products, function($p) use ($current_filter) {
    return $current_filter === 'all' || $p['category'] === $current_filter;
}));

// Pagination
$total_items  = count($filtered_products);
$total_pages  = max(1, ceil($total_items / $items_per_page));
if ($page > $total_pages) $page = $total_pages;
$offset = ($page - 1) * $items_per_page;
$paginated_products = array_slice($filtered_products, $offset, $items_per_page);

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

        <!-- Filter Buttons (links for server-side) -->
        <div class="products-filter anim-fadeInUp">
            <?php
            $filter_labels = [
                'all'      => 'All Products',
                'tablets'  => 'Tablets',
                'capsules' => 'Capsules',
                'syrups'   => 'Syrups/Liquids',
                'softgels' => 'Softgels',
                'others'   => 'Others',
            ];
            foreach ($filter_labels as $key => $label): ?>
                <a href="products.php?filter=<?= $key ?>&page=1"
                   class="filter-btn <?= $current_filter === $key ? 'active' : '' ?>">
                    <?= $label ?>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Products Grid (2 rows) -->
        <div class="products-cards stagger-children" id="productsGrid">
            <?php foreach ($paginated_products as $p): ?>
            <div class="prod-card anim-zoomIn" data-category="<?= $p['category'] ?>">
                <div class="prod-card-img">
                    <img src="<?= $p['image'] ?>" alt="<?= $p['name'] ?>" loading="lazy" onerror="this.src='images/cat-tablets.png'">
                    <span class="prod-category"><?= ucfirst($p['category']) ?></span>
                </div>
                <div class="prod-card-body">
                    <h3><?= $p['name'] ?></h3>
                    <p style="font-size:0.85rem;color:var(--text-body);margin-bottom:15px;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
                        <?= $p['desc'] ?>
                    </p>
                    <div class="prod-meta">
                        <span><i class="fas fa-tags"></i> <?= ucfirst($p['category']) ?></span>
                    </div>
                    <div style="margin-top:20px;">
                        <a href="product-details.php?id=<?= $p['id'] ?>" class="btn btn-primary"
                           style="width:100%;font-size:0.85rem;padding:10px;border-radius:var(--radius-sm);display:block;text-align:center;">
                            View Details <i class="fas fa-arrow-right" style="margin-left:8px;font-size:0.7rem;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <?php if ($total_pages > 1): ?>
        <div class="pagination anim-fadeInUp">
            <!-- Prev -->
            <?php if ($page > 1): ?>
                <a href="products.php?filter=<?= $current_filter ?>&page=<?= $page - 1 ?>" class="pagination-btn">
                    <i class="fas fa-chevron-left"></i> Prev
                </a>
            <?php else: ?>
                <span class="pagination-btn disabled"><i class="fas fa-chevron-left"></i> Prev</span>
            <?php endif; ?>

            <!-- Page Numbers -->
            <div class="pagination-numbers">
                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <a href="products.php?filter=<?= $current_filter ?>&page=<?= $i ?>"
                       class="pagination-num <?= $page === $i ? 'active' : '' ?>">
                        <?= $i ?>
                    </a>
                <?php endfor; ?>
            </div>

            <!-- Next -->
            <?php if ($page < $total_pages): ?>
                <a href="products.php?filter=<?= $current_filter ?>&page=<?= $page + 1 ?>" class="pagination-btn">
                    Next <i class="fas fa-chevron-right"></i>
                </a>
            <?php else: ?>
                <span class="pagination-btn disabled">Next <i class="fas fa-chevron-right"></i></span>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <!-- Download Catalogue -->
        <div style="text-align:center;margin-top:60px;padding:40px;background:var(--bg-light);border-radius:var(--radius-lg);" class="anim-fadeInUp">
            <h3 style="font-size:1.3rem;color:var(--text-dark);margin-bottom:10px;">Need Our Complete Product Catalogue?</h3>
            <p style="color:var(--text-light);margin-bottom:24px;">Download our comprehensive product brochure with full prescribing information.</p>
            <a href="contact.php" class="btn btn-primary"><i class="fas fa-download"></i> Request Catalogue</a>
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
