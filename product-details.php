<?php
require_once 'includes/seo-functions.php';
include 'includes/db.php';

// Get product ID from URL
$product_id = isset($_GET['id']) ? mysqli_real_escape_string($conn, $_GET['id']) : '';
$product = null;

if (!empty($product_id)) {
    // Fetch product with category name
    $query = "SELECT p.*, c.name as category_name 
              FROM products p 
              LEFT JOIN categories c ON p.category_id = c.id 
              WHERE p.id = '$product_id' OR p.name = '$product_id' 
              LIMIT 1";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $product = [
            'id' => $row['id'],
            'icon' => $row['icon'] ?: 'fas fa-pills',
            'image' => !empty($row['image']) ? 'admin/uploads/' . $row['image'] : '',
            'category' => strtolower($row['category_name'] ?: 'others'),
            'name' => $row['name'],
            'composition' => $row['composition'],
            'usage' => $row['usage_info'],
            'packaging' => $row['packaging'],
            'form' => $row['form'],
            'stage' => $row['stage'],
            'approval' => $row['approval'],
            'desc' => $row['description']
        ];
    }
}

// Redirect if product not found
if (!$product) {
    header('Location: products.php');
    exit;
}

$product_title = $product['name'] . " | DUPIN HEALTHCARE";

// SEO Custom Data
$custom_seo = [
    'title' => $product['name'] . ' | Pharmaceutical Product | DUPIN HEALTHCARE',
    'description' => $product['desc'],
    'og_type' => 'product'
];

// Product Schema
$custom_schema = generate_product_schema($product);

$site_url = get_site_url();
// Breadcrumb Schema
$breadcrumb_items = [
    "Home" => $site_url . "index.php",
    "Products" => $site_url . "products.php",
    $product['name'] => $site_url . "product-details.php?id=" . $product['id']
];

include 'includes/header.php';
?>

<!-- Product Detail Hero -->
<section class="page-banner" style="padding: 60px 0;">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <span>›</span>
            <a href="products.php">Products</a>
            <span>›</span>
            <span><?= $product['name'] ?></span>
        </div>
        <h1 style="margin-top:15px;"><?= $product['name'] ?></h1>
    </div>
</section>

<!-- Product Detail Content -->
<section class="section">
    <div class="container product-details-container">
        <div class="product-details-grid">
            <!-- Product Visuals (Item 4: Image/Icon) -->
            <div class="product-visual-sticky">
                <div style="background:var(--bg-white); border-radius:var(--radius-lg); overflow:hidden; position:relative; border:1px solid var(--border);">
                    
                    <!-- <img src="<?= $p['image'] ?>" alt="<?= $p['name'] ?>" loading="lazy" onerror="this.src='images/cat-tablets.png'"> -->
                    
                    <div style="width:100%; height:280px; background:var(--bg-light); align-items:center; justify-content:center;">
                        <?php  
                        if(!empty($product['image'])){
                        ?>
                        <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" loading="lazy" onerror="this.src='images/cat-tablets.png'">
                        <?php }else{ ?>
                        <i class="<?= $product['icon'] ?>" style="font-size:100px; color:var(--primary); opacity:0.6;"></i>
                        <?php } ?>
                        <div style="position:absolute; top:20px; right:20px; background:var(--success); color:#fff; padding:5px 15px; border-radius:30px; font-size:0.75rem; font-weight:700;">
                            <i class="fas fa-check-circle"></i> <?= $product['approval'] ?>
                        </div>
                    </div>
                </div>
                
                <div class="product-details-actions" data-html2canvas-ignore="true">
                    <!-- Item 5: Downloadable Brochure/PDF -->
                    <button onclick="downloadBrochure()" class="btn btn-primary" style="width:100%; border-radius:var(--radius-md); border:none; cursor:pointer;"><i class="fas fa-file-pdf"></i> Download Brochure</button>
                    <a href="contact.php" class="btn btn-outline" style="width:100%; border-radius:var(--radius-md); border-color:var(--primary); color:var(--primary); text-align:center;"><i class="fas fa-envelope"></i> Enquire Now</a>
                </div>
            </div>

            <!-- Product Specs (Item 2: Category, Item 3: Details) -->
            <div class="">
                <div id="brochure-content" class="brochure-content">
                    <!-- Added Brochure Header just for the PDF but hidden on web using a tiny style -->
                    <div style="text-align:center; margin-bottom:30px;" class="pdf-header-only">
                        <h2 style="font-family:'Playfair Display', serif; font-size:2.8rem; color:var(--text-dark); margin-bottom:10px;">Product <span style="color:var(--primary);">Brochure</span></h2>
                        <div style="width:80px; height:3px; background:var(--primary); margin:0 auto; border-radius:2px;"></div>
                    </div>
                    
                    <span class="section-badge" style="margin-bottom:10px;">Product Category: <?= ucfirst($product['category']) ?></span>
                    <h2 style="font-size:2.4rem; color:var(--text-dark); margin-bottom:15px;"><?= $product['name'] ?></h2>
                    <p style="font-size:1.1rem; color:var(--text-body); line-height:1.7; margin-bottom:30px;"><?= $product['desc'] ?></p>
                <div style="background:var(--bg-white); border:1px solid var(--border); border-radius:var(--radius-md); overflow:hidden;">
                    <div style="padding:20px; border-bottom:1px solid var(--border); background:var(--bg-light);">
                        <h4 style="margin:0; color:var(--text-dark);"><i class="fas fa-list-check" style="color:var(--primary); margin-right:10px;"></i> Technical Specifications</h4>
                    </div>
                    <div style="padding:10px 15px;">
                        <div class="product-spec-row">
                            <span class="product-spec-label">Product Name</span>
                            <span class="product-spec-value" style="font-weight:600;"><?= $product['name'] ?></span>
                        </div>
                        <div class="product-spec-row">
                            <span class="product-spec-label">Composition</span>
                            <span class="product-spec-value"><?= $product['composition'] ?></span>
                        </div>
                        <div class="product-spec-row">
                            <span class="product-spec-label">Usage / Indication</span>
                            <span class="product-spec-value"><?= $product['usage'] ?></span>
                        </div>
                        <div class="product-spec-row">
                            <span class="product-spec-label">Packaging</span>
                            <span class="product-spec-value"><?= $product['packaging'] ?></span>
                        </div>
                        <div class="product-spec-row">
                            <span class="product-spec-label">Regulatory Status</span>
                            <span class="product-spec-value"><?= $product['approval'] ?></span>
                        </div>
                        <div class="product-spec-row">
                            <span class="product-spec-label">Therapeutic Category</span>
                            <span class="product-spec-value"><?= ucfirst($product['category']) ?></span>
                        </div>
                        <div class="product-spec-row">
                            <span class="product-spec-label">Storage</span>
                            <span class="product-spec-value">Store in a cool, dry & dark place. Protect from direct sunlight.</span>
                        </div>
                    </div>
                </div>

                </div>

                <div style="margin-top:20px; padding:25px; background:rgba(30, 64, 175, 0.05); border-left:4px solid var(--primary); border-radius:var(--radius-sm);">
                    <h5 style="margin-bottom:10px; color:var(--primary);"><i class="fas fa-circle-info"></i> Important Information</h5>
                    <p style="font-size:0.9rem; color:var(--text-body); margin:0;">The information provided here is for professional use only. Please consult with a healthcare practitioner before use. Always read the label and follow the directions for use.</p>
                </div>
                <br>
            </div>
        </div>
    </div>
</section>

<!-- Include html2pdf library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
function downloadBrochure() {
    const element = document.getElementById('brochure-content');
    
    // Temporarily make the header visible for the PDF
    const header = element.querySelector('.pdf-header-only');
    if(header) { header.style.display = 'block'; }
    
    const opt = {
        margin:       [0.5, 0.5, 0.5, 0.5],
        filename:     '<?= $product['name'] ?>_Brochure.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2, scrollY: 0 },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
    };
    
    html2pdf().set(opt).from(element).save().then(() => {
        // Hide it again after generation
        if(header) { header.style.display = 'none'; }
    });
}
</script>
<style>
.pdf-header-only { display: none; }
</style>

<!-- Related Products -->
<!-- <section class="section" style="background:var(--bg-light); border-top:1px solid #e2e8f0;">
    <div class="container">
        <div class="section-header anim-fadeInUp">
            <h2 class="section-title">Related <span>Products</span></h2>
            <div class="divider"></div>
        </div>
        
        <div style="display:grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap:30px; margin-top:40px;">
            <?php 
            $count = 0;
            foreach ($products as $rp): 
                if ($rp['category'] === $product['category'] && $rp['id'] !== $product['id'] && $count < 4):
            ?>
            <a href="product-details.php?id=<?= $rp['id'] ?>" style="text-decoration:none;">
                <div class="prod-card" style="margin:0;">
                    <div class="prod-card-icon"><i class="<?= $rp['icon'] ?>"></i></div>
                    <div class="prod-card-body">
                        <h3 style="font-size:1rem;"><?= $rp['name'] ?></h3>
                        <div style="font-size:0.75rem; color:var(--text-light);"><i class="fas fa-box-open"></i> <?= $rp['packaging'] ?></div>
                    </div>
                </div>
            </a>
            <?php 
                $count++;
                endif;
            endforeach; ?>
        </div>
    </div>
</section> -->

<?php include 'includes/footer.php'; ?>