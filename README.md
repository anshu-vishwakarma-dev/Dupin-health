# Dupin Healthcare Private Limited - Corporate Website

A premium, responsive, and professionally designed pharmaceutical website for **Dupin Healthcare Private Limited**. This project utilizes a modular PHP architecture with a focus on luxury aesthetics, high performance, and comprehensive SEO.

## 🚀 Key Features

- **Luxury User Interface:** Modern medical-themed design with vibrant colors, smooth gradients, and glassmorphism.
- **Premium Page Preloader:** Custom pharmaceutical-themed capsule animation that waits for all assets to load.
- **Dynamic Product Catalog:** centralized product database (`product-db.php`) powering the product listing and detail pages.
- **Modular Architecture:** PHP-based includes for Header, Footer, and SEO functions for easy maintainability.
- **Advanced SEO Optimization:** Dynamic meta tags, Open Graph support, and schema markup integration.
- **AI Chatbot Integration:** A floating AI companion to assist visitors with common inquiries.
- **Full Responsiveness:** Optimized for desktops, tablets, and smartphones with dedicated CSS breakpoints.
- **Custom Illustrative 404:** A stylized, medical-themed error page matching the brand's creative vision.
- **Interactive Elements:** Smooth animations, sticky header, live news ticker, and floating action buttons (WhatsApp, Scroll-to-Top).

---

## 🛠️ Technology Stack

- **Backend:** PHP 8.x
- **Frontend:** HTML5, CSS3, Vanilla JavaScript
- **Icons & Fonts:** Font Awesome 6.5, Google Fonts (Inter, Playfair Display, Montserrat)
- **Deployment:** Optimized for XAMPP/Apache environments

---

## 📁 Project Structure

```text
pharma-website/
├── css/                   # Stylesheets
│   ├── style.css          # Main layout and design
│   ├── animations.css     # Keyframes and motion effects
│   ├── responsive.css     # Mobile and tablet media queries
│   └── unique.css         # Specialized component styles
├── includes/              # Modular PHP components
│   ├── header.php         # Navigation, Metadata & Preloader
│   ├── footer.php         # Footer navigation & AI Chatbot
│   ├── product-db.php     # Central product data registry
│   └── seo-functions.php  # Dynamic SEO & Metadata logic
├── images/                # Project assets and product photos
├── index.php              # Homepage
├── about.php              # Company profile and mission
├── products.php           # Product formulation catalog
├── product-details.php    # Detailed view for specific formulations
├── services.php           # Manufacturing and franchise services
├── research.php           # R&D and laboratory facility details
├── contact.php            # Contact information and inquiry form
├── 404.php                # Custom error page
└── .htaccess              # Server configurations and redirects
```

---

## 🔧 Installation & Setup

1. **Environment:** Install [XAMPP](https://www.apachefriends.org/) or any local Apache/PHP server.
2. **Directory:** Move the `pharma-website` folder into the `htdocs` directory of your XAMPP installation.
3. **Database:** Ensure PHP is enabled (No MySQL database required as it uses an array-based product registry).
4. **Access:** Open your browser and navigate to `http://localhost/pharma-website/`.

---

## 🛡️ SEO & Performance

The website includes a custom-built SEO engine in `includes/seo-functions.php` that automatically:
- Generates unique `<title>` and `<meta description>` per page.
- Handles Canonical URLs.
- Implements Open Graph (OG) tags for professional social media sharing.
- Provides JSON-LD Schema for Organizations and Breadcrumbs to improve search engine ranking.

---

## 📄 License & Ownership

&copy; 2024 **Dupin Healthcare Private Limited**. All rights reserved. 
The content, designs, and branding are the intellectual property of the company.
