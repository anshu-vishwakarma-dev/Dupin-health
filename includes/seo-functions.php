<?php
/**
 * SEO Helper Functions for DUPIN HEALTHCARE
 */

function get_site_url() {
    $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http");
    $host = $_SERVER['HTTP_HOST'];
    // Assuming the app is in /pharma-website/ subdirectory based on user paths
    return "$protocol://$host/pharma-website/";
}

function get_seo_metadata($page_id, $custom_data = []) {
    $defaults = [
        'title' => 'DUPIN HEALTHCARE PRIVATE LIMITED | Excellence in Pharma Manufacturing',
        'description' => 'DUPIN HEALTHCARE - Your Trusted Excellence in Third-Party Pharma Manufacturing. Bridging the gap between innovation and production.',
        'keywords' => 'pharma manufacturing, third-party manufacturing, PCD pharma franchise, pharmaceutical products, Baddi Himachal Pradesh, DUPIN HEALTHCARE',
        'canonical' => (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",
        'og_image' => 'images/og-image.jpg', // Default OG image
        'og_type' => 'website'
    ];

    $pages = [
        'index' => [
            'title' => 'DUPIN HEALTHCARE | Third-Party Pharma Manufacturing Excellence',
            'description' => 'Premier Third-Party Pharma Manufacturing partner. We provide state-of-the-art manufacturing solutions in Baddi, Himachal Pradesh.',
            'keywords' => 'third party pharma manufacturing, pharmaceutical contract manufacturing, pharma franchise India'
        ],
        'about' => [
            'title' => 'About Us | DUPIN HEALTHCARE PRIVATE LIMITED',
            'description' => 'Learn about DUPIN HEALTHCARE, our mission, vision, and our state-of-the-art manufacturing facility in Baddi.',
            'keywords' => 'about dupin healthcare, pharma leaders, manufacturing excellence'
        ],
        'products' => [
            'title' => 'Our Pharmaceutical Products | DUPIN HEALTHCARE',
            'description' => 'Explore our diverse portfolio of high-quality formulations including tablets, capsules, syrups, and softgels.',
            'keywords' => 'pharma products list, tablets, capsules, syrups, pharmaceutical formulations'
        ],
        'services' => [
            'title' => 'Pharmaceutical Services | Third-Party & PCD Franchise',
            'description' => 'Comprehensive pharma solutions: Third-party manufacturing, PCD Pharma Franchise, and robust distribution network.',
            'keywords' => 'pcd pharma franchise, third party manufacturing services, pharma distribution'
        ],
        'research' => [
            'title' => 'Research & Development | DUPIN HEALTHCARE',
            'description' => 'Our commitment to innovation and quality through advanced R&D and state-of-the-art laboratory facilities.',
            'keywords' => 'pharma R&D, pharmaceutical research, drug development'
        ],
        'contact' => [
            'title' => 'Contact Us | Get in Touch with DUPIN HEALTHCARE',
            'description' => 'Contact DUPIN HEALTHCARE for partnership enquiries, product information, or manufacturing services.',
            'keywords' => 'contact pharma company, business enquiry, Lucknow pharma office'
        ],
        'certifications' => [
            'title' => 'Certifications & Compliance | DUPIN HEALTHCARE PRIVATE LIMITED',
            'description' => 'Explore our pharmaceutical certifications and quality compliance standards including GMP, GLP, HACCP, and WHO-GMP.',
            'keywords' => 'pharma certifications, GMP certified, WHO-GMP compliance, GLP, HACCP pharma'
        ]
    ];

    $meta = $defaults;

    if (isset($pages[$page_id])) {
        $meta = array_merge($meta, $pages[$page_id]);
    }

    if (!empty($custom_data)) {
        $meta = array_merge($meta, $custom_data);
    }

    return $meta;
}

function generate_org_schema() {
    return [
        "@context" => "https://schema.org",
        "@type" => "Organization",
        "name" => "DUPIN HEALTHCARE PRIVATE LIMITED",
        "url" => "http://localhost/pharma-website/", // Update with actual domain
        "logo" => "http://localhost/pharma-website/images/logo.png",
        "contactPoint" => [
            [
                "@type" => "ContactPoint",
                "telephone" => "18008895167",
                "contactType" => "customer service",
                "areaServed" => "IN",
                "availableLanguage" => ["en", "Hindi"]
            ]
        ],
        "sameAs" => [
            "https://www.facebook.com/share/16suEJ2j5g/",
            "https://www.instagram.com/officialdupin",
            "https://www.linkedin.com/in/dupin-pharmaceutical-company-b375ba3b5"
        ]
    ];
}

function generate_breadcrumb_schema($items) {
    if (empty($items)) return null;

    $list_items = [];
    $i = 1;
    foreach ($items as $name => $url) {
        $list_items[] = [
            "@type" => "ListItem",
            "position" => $i,
            "name" => $name,
            "item" => $url
        ];
        $i++;
    }

    return [
        "@context" => "https://schema.org",
        "@type" => "BreadcrumbList",
        "itemListElement" => $list_items
    ];
}

function generate_product_schema($product) {
    return [
        "@context" => "https://schema.org/",
        "@type" => "Product",
        "name" => $product['name'],
        "description" => $product['desc'],
        "brand" => [
            "@type" => "Brand",
            "name" => "DUPIN HEALTHCARE"
        ],
        "sku" => $product['id'],
        "offers" => [
            "@type" => "Offer",
            "url" => (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",
            "priceCurrency" => "INR",
            "availability" => "https://schema.org/InStock"
        ],
        "category" => $product['category']
    ];
}
