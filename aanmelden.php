<?php
// Basisinstellingen
$page_title = "Word Metaalhandelaar | Officiële Registratie | Metaal-handel.nl";
$page_description = "Registreer uw bedrijf als officiële metaalhandelaar bij Metaal-handel.nl. Krijg toegang tot duizenden opdrachten per maand en groei uw omzet. Direct aanmelden.";
$base_path = $_SERVER['DOCUMENT_ROOT']; 
$base_url = "/metaal-handel/"; // Aangepast voor submap
$canonical_url = "https://metaal-handel.nl/aanmelden.php";

$page_title = "Het platform voor het ophalen van oud ijzer en metalen";
include('header.php');
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="description" content="<?php echo $page_description; ?>">
  <meta name="keywords" content="metaalhandelaar worden, oud ijzer handelaar registratie, metaal recycling aanmelden, metaalhandel inschrijven, schroothandelaar worden, metaalrecycling bedrijf registratie">
  <meta name="author" content="Metaal-handel.nl">
  <meta name="robots" content="index, follow">
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $canonical_url; ?>">
  <meta property="og:title" content="<?php echo $page_title; ?>">
  <meta property="og:description" content="<?php echo $page_description; ?>">
  <meta property="og:image" content="<?php echo $base_url; ?>images/metaal-handel-og-image.jpg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?php echo $canonical_url; ?>">
  <meta property="twitter:title" content="<?php echo $page_title; ?>">
  <meta property="twitter:description" content="<?php echo $page_description; ?>">
  <meta property="twitter:image" content="<?php echo $base_url; ?>images/metaal-handel-og-image.jpg">
  
  <!-- Canonical URL -->
  <link rel="canonical" href="<?php echo $canonical_url; ?>">
  
  <!-- Preconnect en preload voor snellere laadtijden -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" as="style">
  <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" as="style">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <title><?php echo $page_title; ?></title>
  
  <!-- Favicon -->
  <link rel="icon" href="<?php echo $base_url; ?>favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $base_url; ?>favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?php echo $base_url; ?>apple-touch-icon.png">
  
  <!-- Stylesheet -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>style-metaal-handel.css">
  
  <!-- Structured data voor Google -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "url": "<?php echo $canonical_url; ?>",
    "name": "<?php echo $page_title; ?>",
    "description": "<?php echo $page_description; ?>",
    "publisher": {
      "@type": "Organization",
      "name": "Metaal-handel.nl",
      "logo": {
        "@type": "ImageObject",
        "url": "https://metaal-handel.nl/images/logo.png"
      }
    },
    "mainEntity": {
      "@type": "Service",
      "name": "Handelaarsregistratie",
      "description": "Registreer uw bedrijf als officiële metaalhandelaar bij Metaal-handel.nl",
      "provider": {
        "@type": "Organization",
        "name": "Metaal-handel.nl"
      },
      "serviceType": "Metaalhandel",
      "areaServed": {
        "@type": "Country",
        "name": "Nederland"
      }
    }
  }
  </script>
  
  <style>
    /* Responsieve en SEO verbeterde stijlen */
    body {
      background-color: #000;
      color: #fff;
      font-family: 'Poppins', sans-serif;
      line-height: 1.6;
    }
    
    #main-header {
      background-color: #000;
      border-bottom: 1px solid #333;
      position: sticky;
      top: 0;
      z-index: 999;
    }
    
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    
    /* Logo stijl */
    .logo {
      color: #fff;
      display: flex;
      align-items: center;
      font-weight: bold;
      font-size: 1.5rem;
      text-decoration: none;
    }
    
    .logo i {
      color: #ff8c00;
      margin-right: 8px;
    }
    
    .logo span {
      color: #ff8c00;
    }
    
    /* Header layout */
    .header-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 0;
    }
    
    /* Main navigation */
    .main-nav {
      display: none; /* Verborgen op mobiel */
    }
    
    @media (min-width: 992px) {
      .main-nav {
        display: block;
      }
    }
    
    .nav-list {
      display: flex;
      list-style: none;
      margin: 0;
      padding: 0;
    }
    
    .nav-list li {
      margin-right: 20px;
      position: relative;
    }
    
    .nav-list a {
      color: #fff;
      text-decoration: none;
      font-weight: 500;
      padding: 10px 0;
      display: block;
      transition: color 0.3s ease;
    }
    
    .nav-list a:hover, 
    .nav-list a.active {
      color: #ff8c00;
    }
    
    /* Contact buttons */
    .contact-info {
      display: none;
    }
    
    @media (min-width: 992px) {
      .contact-info {
        display: flex;
        gap: 10px;
      }
    }
    
    .contact-btn {
      padding: 10px 15px;
      border-radius: 5px;
      color: #fff;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-weight: 500;
      transition: background-color 0.3s ease;
      background-color: #222;
    }
    
    .contact-btn:hover {
      background-color: #333;
    }
    
    .contact-btn.btn-primary {
      background-color: #ff8c00;
      color: #000;
    }
    
    .contact-btn.btn-primary:hover {
      background-color: #e67e00;
    }
    
    /* Hamburger menu for mobile */
    .nav-toggle {
      background: none;
      border: none;
      color: #fff;
      font-size: 1.5rem;
      cursor: pointer;
      display: block;
    }
    
    @media (min-width: 992px) {
      .nav-toggle {
        display: none;
      }
    }
    
    /* Verbeterde dropdown styling voor desktop en mobiel */
    /* Desktop dropdown */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #111;
      min-width: 220px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);
      z-index: 1000;
      border-radius: 4px;
      top: 100%;
      left: 0;
    }
    
    /* Dropdown pijltje */
    .dropdown .nav-link::after {
      content: '\f107';
      font-family: 'Font Awesome 6 Free';
      font-weight: 900;
      margin-left: 5px;
      transition: transform 0.3s ease;
    }
    
    .dropdown .nav-link.active::after {
      transform: rotate(180deg);
    }
    
    /* Desktop hover dropdown alleen op desktop */
    @media (min-width: 992px) {
      .dropdown:hover .dropdown-content {
        display: block;
      }
      
      .dropdown:hover .nav-link::after {
        transform: rotate(180deg);
      }
    }
    
    /* Mobile click dropdown */
    @media (max-width: 991px) {
      .dropdown-content.active {
        display: block;
      }
    }
    
    .dropdown-content a {
      color: #fff;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      border-bottom: 1px solid #333;
      transition: background-color 0.3s ease;
    }
    
    .dropdown-content a:last-child {
      border-bottom: none;
    }
    
    .dropdown-content a:hover {
      background-color: #222;
    }
    
    /* Mobile navigation */
    .mobile-nav {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #000;
      z-index: 2000;
      overflow-y: auto;
      padding: 50px 0 30px;
    }
    
    .mobile-nav.active {
      display: block;
    }
    
    .mobile-nav-list {
      list-style-type: none;
      padding: 0 20px;
      margin: 0;
    }
    
    .mobile-nav-list li {
      margin-bottom: 10px;
    }
    
    .mobile-nav-list a {
      color: #fff;
      text-decoration: none;
      font-size: 1.2rem;
      display: block;
      padding: 10px 0;
      border-bottom: 1px solid #333;
    }
    
    .mobile-nav-close {
      position: absolute;
      top: 15px;
      right: 15px;
      background: none;
      border: none;
      color: #fff;
      font-size: 1.5rem;
      cursor: pointer;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .mobile-dropdown-btn {
      color: #fff;
      background: none;
      border: none;
      width: 100%;
      text-align: left;
      font-size: 1.2rem;
      padding: 10px 0;
      cursor: pointer;
      border-bottom: 1px solid #333;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .mobile-dropdown-content {
      display: none;
      padding-left: 15px;
    }
    
    .mobile-dropdown-content.active {
      display: block;
    }
    
    .mobile-dropdown-content a {
      font-size: 1.1rem;
      padding: 12px 0;
    }
    
    /* Verbeterde accordion styling voor FAQ */
    .accordion-item {
      margin-bottom: 10px;
      border: 1px solid #333;
      border-radius: 6px;
      overflow: hidden;
    }
    
    .accordion-header {
      background-color: #1a1a1a;
      color: #fff;
      cursor: pointer;
      padding: 18px 20px;
      width: 100%;
      text-align: left;
      border: none;
      outline: none;
      font-size: 1.1rem;
      font-weight: 500;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: background-color 0.2s ease;
    }
    
    .accordion-header:hover {
      background-color: #222;
    }
    
    .accordion-header::after {
      content: '\f078';
      font-family: 'Font Awesome 6 Free';
      font-weight: 900;
      font-size: 0.8rem;
      transition: transform 0.3s ease;
    }
    
    .accordion-header.active {
      background-color: #222;
    }
    
    .accordion-header.active::after {
      transform: rotate(180deg);
    }
    
    .accordion-content {
      max-height: 0;
      overflow: hidden;
      background-color: #0f0f0f;
      transition: max-height 0.3s ease;
    }
    
    .accordion-content-inner {
      padding: 20px;
      color: #ccc;
    }
    
    .accordion-content-inner p:last-child {
      margin-bottom: 0;
    }
    
    .accordion-content-inner ul {
      padding-left: 20px;
      margin: 10px 0;
    }
    
    .accordion-content-inner li {
      margin-bottom: 8px;
    }
    
    /* Pagina-specifieke stijlen */
    /* Hero sectie */
    .hero-section {
      padding: 80px 0;
      text-align: center;
      background-position: center;
      background-size: cover;
      position: relative;
    }
    
    .hero-section h1 {
      font-size: 2.5rem;
      margin-bottom: 15px;
      font-weight: 700;
      color: #fff;
    }
    
    .lead {
      font-size: 1.2rem;
      max-width: 700px;
      margin: 0 auto;
      color: #ddd;
    }
    
    /* Registration form styling */
    .registration-section {
      background-color: #111;
      padding: 60px 0;
    }
    
    .registration-container {
      display: grid;
      grid-template-columns: 1fr;
      gap: 40px;
    }
    
    @media (min-width: 992px) {
      .registration-container {
        grid-template-columns: 1fr 1.5fr;
      }
    }
    
    .registration-info {
      color: #ccc;
    }
    
    @media (min-width: 992px) {
      .registration-info {
        padding-right: 30px;
      }
    }
    
    .registration-info h2 {
      color: #fff;
      margin-bottom: 20px;
      font-size: 1.8rem;
    }
    
    /* Steps styling */
    .registration-steps {
      margin: 40px 0;
    }
    
    .step {
      display: flex;
      align-items: flex-start;
      margin-bottom: 30px;
      position: relative;
    }
    
    .step-number {
      background-color: #ff8c00;
      color: #000;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      font-size: 1.2rem;
      margin-right: 20px;
      flex-shrink: 0;
    }
    
    .step-content h4 {
      color: #fff;
      margin-bottom: 5px;
      font-size: 1.2rem;
    }
    
    .step-content p {
      margin: 0;
      color: #ccc;
    }
    
    /* Verticale lijn tussen stappen */
    .step:not(:last-child):after {
      content: '';
      position: absolute;
      left: 20px;
      top: 40px;
      width: 2px;
      height: calc(100% - 20px);
      background-color: #333;
    }
    
    /* Testimonial styling */
    .testimonial {
      margin-top: 50px;
      background-color: #1a1a1a;
      border-radius: 8px;
      padding: 30px;
      position: relative;
      border: 1px solid #333;
    }
    
    .quote-mark {
      position: absolute;
      top: -20px;
      left: 20px;
      font-size: 3rem;
      color: #ff8c00;
      font-family: Georgia, serif;
      opacity: 0.7;
      line-height: 1;
    }
    
    .quote-text {
      font-style: italic;
      margin-bottom: 20px;
      line-height: 1.6;
      position: relative;
      z-index: 1;
    }
    
    .quote-author {
      display: flex;
      align-items: center;
    }
    
    .quote-author-img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      object-fit: cover;
      margin-right: 15px;
    }
    
    .author-info h4 {
      color: #fff;
      margin: 0 0 5px 0;
    }
    
    .author-info p {
      margin: 0 0 5px 0;
      font-size: 0.9rem;
    }
    
    .rating {
      color: #ff8c00;
    }
    
    /* Form styling */
    .registration-form {
      background-color: #1a1a1a;
      border-radius: 8px;
      padding: 40px;
      border: 1px solid #333;
    }
    
    @media (max-width: 576px) {
      .registration-form {
        padding: 20px;
      }
    }
    
    .registration-form h3 {
      color: #fff;
      margin: 0 0 20px 0;
      padding-bottom: 10px;
      border-bottom: 1px solid #333;
      font-size: 1.5rem;
    }
    
    .form-group {
      margin-bottom: 25px;
    }
    
    .form-row {
      display: flex;
      gap: 15px;
    }
    
    @media (max-width: 576px) {
      .form-row {
        flex-direction: column;
        gap: 25px;
      }
    }
    
    .half {
      flex: 1;
    }
    
    label {
      display: block;
      color: #ccc;
      margin-bottom: 8px;
      font-weight: 500;
    }
    
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="url"],
    input[type="password"],
    textarea,
    select {
      width: 100%;
      padding: 14px 15px;
      border-radius: 6px;
      border: 1px solid #444;
      background-color: #111;
      color: #fff;
      font-size: 16px;
      transition: border-color 0.3s ease;
      font-family: 'Poppins', sans-serif;
    }
    
    input:focus,
    textarea:focus,
    select:focus {
      border-color: #ff8c00;
      outline: none;
      box-shadow: 0 0 0 2px rgba(255, 140, 0, 0.2);
    }
    
    small {
      display: block;
      color: #999;
      font-size: 0.8rem;
      margin-top: 5px;
    }
    
    /* Checkbox group styling */
    .checkbox-group {
      display: flex;
      flex-wrap: wrap;
      gap: 10px 20px;
      margin-top: 8px;
    }
    
    .provinces {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
    }
    
    @media (max-width: 768px) {
      .provinces {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    
    @media (max-width: 480px) {
      .provinces {
        grid-template-columns: 1fr;
      }
    }
    
    .checkbox-label {
      display: flex;
      align-items: center;
      color: #ccc;
      cursor: pointer;
      padding: 6px 0;
    }
    
    .checkbox-label input[type="checkbox"] {
      margin-right: 10px;
      width: 18px;
      height: 18px;
      accent-color: #ff8c00;
    }
    
    /* File upload styling */
    .file-upload {
      position: relative;
      margin-top: 8px;
      display: flex;
    }
    
    .file-upload input[type="file"] {
      position: absolute;
      left: -9999px;
    }
    
    .file-upload-btn {
      display: inline-block;
      background-color: #333;
      color: #fff;
      padding: 12px 15px;
      border-radius: 6px 0 0 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      white-space: nowrap;
    }
    
    .file-upload-btn:hover {
      background-color: #444;
    }
    
    .file-name {
      display: inline-block;
      padding: 12px 15px;
      background-color: #111;
      border: 1px solid #444;
      border-left: none;
      border-radius: 0 6px 6px 0;
      color: #ccc;
      width: 100%;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }
    
    /* Terms styling */
    .terms-group {
      margin-top: 30px;
    }
    
    .terms-group a {
      color: #ff8c00;
      text-decoration: none;
    }
    
    .terms-group a:hover {
      text-decoration: underline;
    }
    
    /* Captcha styling */
    .captcha-group {
      margin-top: 30px;
    }
    
    .captcha-box {
      display: flex;
      align-items: center;
      gap: 20px;
      background-color: #111;
      border-radius: 6px;
      padding: 15px;
      border: 1px solid #444;
      flex-wrap: wrap;
    }
    
    @media (max-width: 576px) {
      .captcha-box {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
      }
    }
    
    .captcha-img {
      display: flex;
      align-items: center;
      gap: 10px;
    }
    
    .captcha-img img {
      height: 50px;
      border-radius: 4px;
      background-color: #fff;
    }
    
    .refresh-captcha {
      background-color: #333;
      border: none;
      width: 35px;
      height: 35px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    
    .refresh-captcha:hover {
      background-color: #444;
    }
    
    .captcha-input {
      flex: 1;
    }
    
    .captcha-input label {
      margin-bottom: 5px;
    }
    
    .captcha-input input {
      max-width: 180px;
    }
    
    /* Submit button styling */
    .form-submit {
      margin-top: 40px;
      text-align: center;
    }
    
    .btn {
      padding: 12px 25px;
      border-radius: 6px;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      font-weight: 600;
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
      font-family: 'Poppins', sans-serif;
    }
    
    .btn-primary {
      background-color: #ff8c00;
      color: #000;
    }
    
    .btn-primary:hover {
      background-color: #e67e00;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(255, 140, 0, 0.3);
    }
    
    .btn-lg {
      padding: 15px 30px;
      font-size: 1.1rem;
      min-width: 220px;
    }
    
    .submit-note {
      font-size: 0.8rem;
      color: #999;
      margin-top: 10px;
    }
    
    /* FAQ section styling */
    .faq-section {
      background-color: #0a0a0a;
      padding: 60px 0;
    }
    
    .section-title {
      text-align: center;
      color: #fff;
      margin-bottom: 40px;
      font-size: 2rem;
    }
    
    .accordion {
      max-width: 900px;
      margin: 0 auto;
    }
    
    /* Benefits section */
    .benefits-section {
      padding: 60px 0;
      background-color: #0a0a0a;
    }
    
    .benefits-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 30px;
    }
    
    .benefit-card {
      background-color: #111;
      border-radius: 8px;
      padding: 30px;
      text-align: center;
      border: 1px solid #333;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
    }
    
    .benefit-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }
    
    .benefit-icon {
      font-size: 2.5rem;
      color: #ff8c00;
      margin-bottom: 20px;
    }
    
    .benefit-card h3 {
      color: #fff;
      margin-bottom: 15px;
    }
    
    /* Commitment section */
    .commitment-section {
      padding: 60px 0;
      background-color: #111;
    }
    
    .commitment-content {
      max-width: 900px;
      margin: 0 auto;
    }
    
    .commitment-content h2 {
      color: #fff;
      text-align: center;
      margin-bottom: 30px;
      font-size: 2rem;
    }
    
    .commitment-list {
      list-style: none;
      padding: 0;
      margin: 30px 0;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }
    
    @media (max-width: 768px) {
      .commitment-list {
        grid-template-columns: 1fr;
      }
    }
    
    .commitment-list li {
      display: flex;
      align-items: flex-start;
      color: #ccc;
      font-size: 1.05rem;
    }
    
    .commitment-list i {
      color: #ff8c00;
      margin-right: 10px;
      font-size: 1.2rem;
      padding-top: 3px;
    }
    
    /* Statistieken sectie */
    .stats {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      margin-top: 40px;
    }
    
    @media (max-width: 768px) {
      .stats {
        grid-template-columns: 1fr;
      }
    }
    
    .stat-item {
      background-color: #1a1a1a;
      border-radius: 8px;
      padding: 25px 20px;
      text-align: center;
      border: 1px solid #333;
    }
    
    .stat-number {
      font-size: 2rem;
      font-weight: 700;
      color: #ff8c00;
      margin-bottom: 10px;
    }
    
    .stat-label {
      color: #ccc;
      font-size: 0.95rem;
    }
  </style>
</head>

<body>
<!-- Mobile Navigation -->
<nav class="mobile-nav" id="mobile-nav" aria-label="Mobiel menu">
  <button class="mobile-nav-close" aria-label="Menu sluiten">
    <i class="fas fa-times"></i>
  </button>
  <ul class="mobile-nav-list">
    <li><a href="<?php echo $base_url; ?>index.php">Home</a></li>
    
    <li>
      <button class="mobile-dropdown-btn">
        Voor particulieren <i class="fas fa-chevron-down"></i>
      </button>
      <div class="mobile-dropdown-content">
        <a href="<?php echo $base_url; ?>hoe-werkt-het.php">Hoe werkt het?</a>
        <a href="<?php echo $base_url; ?>opdracht-plaatsen.php">Opdracht plaatsen</a>
        <a href="<?php echo $base_url; ?>veelgestelde-vragen.php">Veelgestelde vragen</a>
      </div>
    </li>
    
    <li>
      <button class="mobile-dropdown-btn">
        Voor handelaren <i class="fas fa-chevron-down"></i>
      </button>
      <div class="mobile-dropdown-content">
        <a href="<?php echo $base_url; ?>voordelen.php">Voordelen</a>
        <a href="<?php echo $base_url; ?>aanmelden.php">Aanmelden als handelaar</a>
        <a href="<?php echo $base_url; ?>dashboard.php">Dashboard</a>
      </div>
    </li>
    
    <li><a href="<?php echo $base_url; ?>opdracht-plaatsen.php">Opdracht plaatsen</a></li>
    <li><a href="<?php echo $base_url; ?>prijzen.php">Dagprijzen</a></li>
    <li><a href="<?php echo $base_url; ?>contact.php">Contact</a></li>
    <li><a href="<?php echo $base_url; ?>login.php">Inloggen</a></li>
  </ul>
</nav>

<main class="main-content">
  <section class="hero-section registration-hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.9)), url('<?php echo $base_url; ?>images/registration-hero-bg.jpg');">
    <div class="container">
      <h1>Word een officiële metaalhandelaar</h1>
      <p class="lead">Sluit u aan bij het grootste metaalhandel netwerk van Nederland en krijg dagelijks toegang tot tientallen nieuwe opdrachten</p>
    </div>
  </section>

  <section class="benefits-section">
    <div class="container">
      <h2 class="section-title">Voordelen van aansluiten bij Metaal-handel.nl</h2>
      <div class="benefits-grid">
        <div class="benefit-card">
          <div class="benefit-icon">
            <i class="fas fa-calendar-alt"></i>
          </div>
          <h3>Flexibele planning</h3>
          <p>Bepaal zelf wanneer en waar u opdrachten aanneemt. Geen verplicht minimum aantal opdrachten of vaste uren.</p>
        </div>
        <div class="benefit-card">
          <div class="benefit-icon">
            <i class="fas fa-route"></i>
          </div>
          <h3>Efficiënte routes</h3>
          <p>Combineer meerdere opdrachten in dezelfde regio voor optimale route-planning en minimale transportkosten.</p>
        </div>
        <div class="benefit-card">
          <div class="benefit-icon">
            <i class="fas fa-user-plus"></i>
          </div>
          <h3>Nieuwe klanten</h3>
          <p>Bereik duizenden nieuwe klanten zonder marketingkosten of tijdrovende acquisitie. Wij zorgen voor de leads.</p>
        </div>
        <div class="benefit-card">
          <div class="benefit-icon">
            <i class="fas fa-chart-line"></i>
          </div>
          <h3>Omzetgroei</h3>
          <p>Onze handelaren zien gemiddeld 40% omzetgroei in het eerste jaar. Verdien meer met minder moeite.</p>
        </div>
      </div>
    </div>
  </section>
  
  <section class="registration-section">
    <div class="container">
      <div class="registration-container">
        <div class="registration-info">
          <h2>Registreer uw metaalhandel bedrijf</h2>
          <p>Vul het formulier hiernaast in om uw aanvraag te starten. Na indiening controleren wij uw gegevens en activeren we uw handelaarsaccount, meestal binnen 24 werkuren.</p>
          
          <div class="registration-steps">
            <div class="step">
              <div class="step-number">1</div>
              <div class="step-content">
                <h4>Vul het formulier in</h4>
                <p>Zorg voor correcte en volledige bedrijfsgegevens inclusief geldig KVK-nummer en bedrijfsgegevens.</p>
              </div>
            </div>
            <div class="step">
              <div class="step-number">2</div>
              <div class="step-content">
                <h4>Verificatie</h4>
                <p>We controleren uw bedrijfsgegevens en eventuele benodigde vergunningen voor metaalhandel en -recycling.</p>
              </div>
            </div>
            <div class="step">
              <div class="step-number">3</div>
              <div class="step-content">
                <h4>Activatie</h4>
                <p>Na goedkeuring ontvangt u inloggegevens en kunt u direct beginnen met bieden op opdrachten in uw regio.</p>
              </div>
            </div>
          </div>
          
          <div class="testimonial">
            <div class="quote-mark">"</div>
            <p class="quote-text">Sinds ik mijn bedrijf heb aangemeld bij Metaal-handel.nl heb ik mijn klantenbestand verdubbeld en is mijn weekomzet met 35% gestegen. De opdrachten komen automatisch binnen en ik kies zelf welke ik aanneem.</p>
            <div class="quote-author">
              <img src="<?php echo $base_url; ?>images/handelaar-testimonial.jpg" alt="Johan van Metaalrecycling Utrecht" class="quote-author-img" width="60" height="60">
              <div class="author-info">
                <h4>Johan Dekker</h4>
                <p>Metaalrecycling Utrecht</p>
                <div class="rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="registration-form">
          <form id="trader-registration-form" action="<?php echo $base_url; ?>process-registration.php" method="POST" enctype="multipart/form-data">
            <h3>Uw gegevens</h3>
            
            <!-- Bedrijfsgegevens -->
            <div class="form-group">
              <label for="company_name">Bedrijfsnaam *</label>
              <input type="text" id="company_name" name="company_name" required placeholder="Volledige bedrijfsnaam zoals vermeld bij KVK">
            </div>
            
            <div class="form-group">
              <label for="kvk_number">KVK-nummer *</label>
              <input type="text" id="kvk_number" name="kvk_number" required pattern="[0-9]{8}" title="Vul een geldig 8-cijferig KVK-nummer in" placeholder="12345678">
            </div>
            
            <div class="form-group">
              <label for="btw_number">BTW-nummer *</label>
              <input type="text" id="btw_number" name="btw_number" required placeholder="NL123456789B01">
            </div>
            
            <div class="form-group">
              <label for="company_address">Adres *</label>
              <input type="text" id="company_address" name="company_address" required placeholder="Straatnaam en huisnummer">
            </div>
            
            <div class="form-row">
              <div class="form-group half">
                <label for="postal_code">Postcode *</label>
                <input type="text" id="postal_code" name="postal_code" required pattern="[0-9]{4}\s?[A-Za-z]{2}" title="Vul een geldige postcode in (bijv. 1234 AB)" placeholder="1234 AB">
              </div>
              
              <div class="form-group half">
                <label for="city">Plaats *</label>
                <input type="text" id="city" name="city" required placeholder="Plaatsnaam">
              </div>
            </div>
            
            <div class="form-group">
              <label for="website">Website</label>
              <input type="url" id="website" name="website" placeholder="https://www.uwbedrijf.nl">
            </div>
            
            <!-- Contactgegevens -->
            <h3>Contactpersoon</h3>
            
            <div class="form-row">
              <div class="form-group half">
                <label for="first_name">Voornaam *</label>
                <input type="text" id="first_name" name="first_name" required placeholder="Voornaam">
              </div>
              
              <div class="form-group half">
                <label for="last_name">Achternaam *</label>
                <input type="text" id="last_name" name="last_name" required placeholder="Achternaam">
              </div>
            </div>
            
            <div class="form-group">
              <label for="position">Functie *</label>
              <input type="text" id="position" name="position" required placeholder="Uw functie binnen het bedrijf">
            </div>
            
            <div class="form-group">
              <label for="email">E-mailadres *</label>
              <input type="email" id="email" name="email" required placeholder="uw@emailadres.nl">
            </div>
            
            <div class="form-group">
              <label for="phone">Telefoonnummer *</label>
              <input type="tel" id="phone" name="phone" required placeholder="06-12345678">
            </div>
            
            <!-- Wachtwoord -->
            <h3>Account aanmaken</h3>
            
            <div class="form-group">
              <label for="password">Wachtwoord *</label>
              <input type="password" id="password" name="password" required minlength="8">
              <small>Minimaal 8 karakters, inclusief een hoofdletter, cijfer en speciaal teken</small>
            </div>
            
            <div class="form-group">
              <label for="password_confirm">Wachtwoord bevestigen *</label>
              <input type="password" id="password_confirm" name="password_confirm" required minlength="8">
            </div>
            
            <!-- Bedrijfsinformatie -->
            <h3>Bedrijfsinformatie</h3>
            
            <div class="form-group">
              <label for="company_description">Bedrijfsomschrijving *</label>
              <textarea id="company_description" name="company_description" required rows="3" placeholder="Korte beschrijving van uw activiteiten als metaalhandelaar..."></textarea>
            </div>
            
            <div class="form-group">
              <label>Welke materialen accepteert u? *</label>
              <div class="checkbox-group">
                <label class="checkbox-label">
                  <input type="checkbox" name="materials[]" value="ijzer"> IJzer en staal
                </label>
                <label class="checkbox-label">
                  <input type="checkbox" name="materials[]" value="koper"> Koper
                </label>
                <label class="checkbox-label">
                  <input type="checkbox" name="materials[]" value="aluminium"> Aluminium
                </label>
                <label class="checkbox-label">
                  <input type="checkbox" name="materials[]" value="lood"> Lood
                </label>
                <label class="checkbox-label">
                  <input type="checkbox" name="materials[]" value="zink"> Zink
                </label>
                <label class="checkbox-label">
                  <input type="checkbox" name="materials[]" value="rvs"> RVS
                </label>
                <label class="checkbox-label">
                  <input type="checkbox" name="materials[]" value="kabels"> Kabels
                </label>
                <label class="checkbox-label">
                  <input type="checkbox" name="materials[]" value="elektromotoren"> Elektromotoren
                </label>
                <label class="checkbox-label">
                  <input type="checkbox" name="materials[]" value="witgoed"> Witgoed
                </label>
                <label class="checkbox-label">
                  <input type="checkbox" name="materials[]" value="elektronisch"> Elektronisch afval
                </label>
              </div>
            </div>
            
            <div class="form-group">
              <label>Werkgebied (meerdere selecties mogelijk) *</label>
              <div class="checkbox-group provinces">
                <label class="checkbox-label province">
                  <input type="checkbox" name="provinces[]" value="drenthe"> Drenthe
                </label>
                <label class="checkbox-label province">
                  <input type="checkbox" name="provinces[]" value="flevoland"> Flevoland
                </label>
                <label class="checkbox-label province">
                  <input type="checkbox" name="provinces[]" value="friesland"> Friesland
                </label>
                <label class="checkbox-label province">
                  <input type="checkbox" name="provinces[]" value="gelderland"> Gelderland
                </label>
                <label class="checkbox-label province">
                  <input type="checkbox" name="provinces[]" value="groningen"> Groningen
                </label>
                <label class="checkbox-label province">
                  <input type="checkbox" name="provinces[]" value="limburg"> Limburg
                </label>
                <label class="checkbox-label province">
                  <input type="checkbox" name="provinces[]" value="noord-brabant"> Noord-Brabant
                </label>
                <label class="checkbox-label province">
                  <input type="checkbox" name="provinces[]" value="noord-holland"> Noord-Holland
                </label>
                <label class="checkbox-label province">
                  <input type="checkbox" name="provinces[]" value="overijssel"> Overijssel
                </label>
                <label class="checkbox-label province">
                  <input type="checkbox" name="provinces[]" value="utrecht"> Utrecht
                </label>
                <label class="checkbox-label province">
                  <input type="checkbox" name="provinces[]" value="zeeland"> Zeeland
                </label>
                <label class="checkbox-label province">
                  <input type="checkbox" name="provinces[]" value="zuid-holland"> Zuid-Holland
                </label>
              </div>
            </div>
            
            <!-- Documentatie -->
            <h3>Documentatie</h3>
            
            <div class="form-group">
              <label for="kvk_extract">KVK Uittreksel (PDF) *</label>
              <div class="file-upload">
                <input type="file" id="kvk_extract" name="kvk_extract" accept=".pdf" required>
                <div class="file-upload-btn">
                  <i class="fas fa-cloud-upload-alt"></i> Bestand kiezen
                </div>
                <span class="file-name">Geen bestand gekozen</span>
              </div>
            </div>
            
            <div class="form-group">
              <label for="id_copy">Kopie ID eigenaar/vertegenwoordiger (PDF) *</label>
              <div class="file-upload">
                <input type="file" id="id_copy" name="id_copy" accept=".pdf" required>
                <div class="file-upload-btn">
                  <i class="fas fa-cloud-upload-alt"></i> Bestand kiezen
                </div>
                <span class="file-name">Geen bestand gekozen</span>
              </div>
              <small>Upload een veilig gemaakte kopie (streep BSN door)</small>
            </div>
            
            <div class="form-group">
              <label for="permits">Milieuvergunningen (indien van toepassing)</label>
              <div class="file-upload">
                <input type="file" id="permits" name="permits" accept=".pdf">
                <div class="file-upload-btn">
                  <i class="fas fa-cloud-upload-alt"></i> Bestand kiezen
                </div>
                <span class="file-name">Geen bestand gekozen</span>
              </div>
            </div>
            
            <!-- Voorwaarden -->
            <div class="form-group terms-group">
              <label class="checkbox-label">
                <input type="checkbox" name="terms" required>
                <span>Ik ga akkoord met de <a href="<?php echo $base_url; ?>algemene-voorwaarden.php" target="_blank">algemene voorwaarden</a> *</span>
              </label>
            </div>
            
            <div class="form-group terms-group">
              <label class="checkbox-label">
                <input type="checkbox" name="privacy_policy" required>
                <span>Ik ga akkoord met het <a href="<?php echo $base_url; ?>privacy.php" target="_blank">privacybeleid</a> *</span>
              </label>
            </div>
            
            <div class="form-group terms-group">
              <label class="checkbox-label">
                <input type="checkbox" name="marketing">
                <span>Ik wil graag tips en nieuws ontvangen over het optimaliseren van mijn metaalhandel</span>
              </label>
            </div>
            
            <!-- Captcha en verzendknop -->
            <div class="form-group captcha-group">
              <div class="captcha-box">
                <div class="captcha-img">
                  <img src="<?php echo $base_url; ?>captcha.php" alt="CAPTCHA" id="captcha">
                  <button type="button" class="refresh-captcha" aria-label="Vernieuw captcha"><i class="fas fa-redo-alt"></i></button>
                </div>
                <div class="captcha-input">
                  <label for="captcha_code">Voer de code in *</label>
                  <input type="text" id="captcha_code" name="captcha_code" required>
                </div>
              </div>
            </div>
            
            <div class="form-submit">
              <button type="submit" class="btn btn-primary btn-lg">
                <i class="fas fa-user-plus"></i> Registreren als handelaar
              </button>
              <p class="submit-note">* Verplichte velden</p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  
  <section class="faq-section">
    <div class="container">
      <h2 class="section-title">Veelgestelde vragen over registratie als metaalhandelaar</h2>
      
      <div class="accordion">
        <div class="accordion-item">
          <button class="accordion-header">
            Hoe lang duurt de goedkeuringsprocedure?
          </button>
          <div class="accordion-content">
            <div class="accordion-content-inner">
              <p>De verificatie van uw metaalhandel bedrijfsgegevens duurt doorgaans 24 werkuren. In sommige gevallen, bijvoorbeeld wanneer aanvullende documentatie nodig is, kan dit proces tot 48 uur duren. U ontvangt een e-mail zodra uw account is geactiveerd.</p>
            </div>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">
            Welke documenten heb ik nodig voor registratie?
          </button>
          <div class="accordion-content">
            <div class="accordion-content-inner">
              <p>Voor registratie als metaalhandelaar heeft u de volgende documenten nodig:</p>
              <ul>
                <li>Een recent KVK uittreksel (niet ouder dan 3 maanden)</li>
                <li>Een kopie van een geldig legitimatiebewijs van de eigenaar/vertegenwoordiger (zorg dat het BSN-nummer is doorgestreept)</li>
                <li>Indien van toepassing: milieuvergunningen voor het verwerken van metaalafval</li>
              </ul>
              <p>Alle documenten moeten in PDF-formaat worden geüpload.</p>
            </div>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">
            Zijn er kosten verbonden aan registratie?
          </button>
          <div class="accordion-content">
            <div class="accordion-content-inner">
              <p>Nee, de registratie als metaalhandelaar is volledig kosteloos. Metaal-handel.nl werkt op basis van een commissiemodel, waarbij u alleen betaalt voor succesvol afgeronde opdrachten. De standaard commissie bedraagt 10% van het geboden bedrag.</p>
              <p>Voor handelaren die regelmatig gebruik maken van ons platform zijn er volumekortingen beschikbaar, waardoor de commissie kan dalen tot 5-7%. Er zijn geen abonnementskosten of andere vaste lasten.</p>
            </div>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">
            Kan ik mijn werkgebied later aanpassen?
          </button>
          <div class="accordion-content">
            <div class="accordion-content-inner">
              <p>Ja, na registratie kunt u uw werkgebied op elk moment aanpassen via uw handelaarsdashboard. U kunt uw werkgebied uitbreiden als u meer opdrachten wilt ontvangen, of juist beperken als u zich wilt concentreren op specifieke regio's.</p>
              <p>Ook is het mogelijk om tijdelijk uw werkgebied aan te passen, bijvoorbeeld tijdens vakantieperiodes of seizoensgebonden drukte.</p>
            </div>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">
            Hoe werkt het bieden op opdrachten?
          </button>
          <div class="accordion-content">
            <div class="accordion-content-inner">
              <p>Na activatie van uw account krijgt u toegang tot alle beschikbare opdrachten in uw geselecteerde werkgebied. Per opdracht ziet u:</p>
              <ul>
                <li>Het type materiaal en geschatte hoeveelheid</li>
                <li>De locatie (postcode) en eventuele foto's</li>
                <li>De gewenste ophaaldatum</li>
              </ul>
              <p>U kunt vervolgens een bod uitbrengen dat past bij de waarde van de materialen. De particulier kiest uit alle biedingen en u krijgt direct bericht als uw bod wordt geaccepteerd, waarna u direct contact kunt opnemen voor de definitieve ophaalafspraak.</p>
            </div>
          </div>
        </div>
        
        <div class="accordion-item">
          <button class="accordion-header">
            Welke garanties biedt Metaal-handel.nl?
          </button>
          <div class="accordion-content">
            <div class="accordion-content-inner">
              <p>Als geregistreerde handelaar profiteert u van de volgende garanties:</p>
              <ul>
                <li>Geverifieerde opdrachten - alle particuliere aanvragen worden gecontroleerd</li>
                <li>Beveiligde betalingen - commissies worden alleen berekend bij succesvol afgeronde opdrachten</li>
                <li>Privacy bescherming - uw bedrijfsgegevens worden alleen gedeeld met particulieren die uw bod accepteren</li>
                <li>Klantenservice - directe ondersteuning bij vragen of problemen</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="commitment-section">
    <div class="container">
      <div class="commitment-content">
        <h2>Onze toewijding aan metaalhandelaren</h2>
        <p>Als geregistreerde partner van Metaal-handel.nl profiteert u van deze voordelen:</p>
        <ul class="commitment-list">
          <li><i class="fas fa-check-circle"></i> Toegang tot duizenden opdrachten per maand in heel Nederland</li>
          <li><i class="fas fa-check-circle"></i> Efficiënte route-optimalisatie voor lagere transportkosten</li>
          <li><i class="fas fa-check-circle"></i> Stabiele inkomstenstroom zonder acquisitiekosten</li>
          <li><i class="fas fa-check-circle"></i> Flexibiliteit in werkuren en aanname van opdrachten</li>
          <li><i class="fas fa-check-circle"></i> Premium ondersteuning van ons handelaarssupport team</li>
          <li><i class="fas fa-check-circle"></i> Toegang tot gedetailleerde statistieken en prestatieanalyses</li>
          <li><i class="fas fa-check-circle"></i> Mogelijkheid om uw online reputatie en zichtbaarheid te vergroten</li>
          <li><i class="fas fa-check-circle"></i> Gratis promotie van uw metaalhandel bedrijf op ons platform</li>
        </ul>
        <div class="stats">
          <div class="stat-item">
            <div class="stat-number">12.000+</div>
            <div class="stat-label">Opdrachten per maand</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">800+</div>
            <div class="stat-label">Actieve handelaren</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">€2.1M</div>
            <div class="stat-label">Maandelijkse omzet</div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include('footer.php'); ?>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu functionaliteit
    const navToggle = document.querySelector('.nav-toggle');
    const mobileNav = document.getElementById('mobile-nav');
    const mobileNavClose = document.querySelector('.mobile-nav-close');
    
    navToggle.addEventListener('click', function() {
      mobileNav.classList.add('active');
      document.body.style.overflow = 'hidden'; // Voorkomt scrollen op de achtergrond
      this.setAttribute('aria-expanded', 'true');
    });
    
    mobileNavClose.addEventListener('click', function() {
      mobileNav.classList.remove('active');
      document.body.style.overflow = '';
      navToggle.setAttribute('aria-expanded', 'false');
    });
    
    // Mobile dropdown functionaliteit
    const mobileDropdownBtns = document.querySelectorAll('.mobile-dropdown-btn');
    
    mobileDropdownBtns.forEach(function(btn) {
      btn.addEventListener('click', function() {
        const dropdownContent = this.nextElementSibling;
        dropdownContent.classList.toggle('active');
        
        // Verander het pijltje-icoon
        const icon = this.querySelector('i');
        if (dropdownContent.classList.contains('active')) {
          icon.classList.remove('fa-chevron-down');
          icon.classList.add('fa-chevron-up');
        } else {
          icon.classList.remove('fa-chevron-up');
          icon.classList.add('fa-chevron-down');
        }
      });
    });
    
    // Desktop dropdown menu bij klikken op tablet/mobiel
    const dropdownLinks = document.querySelectorAll('.dropdown .nav-link');
    
    // Alleen op kleinere schermen
    if (window.innerWidth < 992) {
      dropdownLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
          // Alleen als het een directe dropdown link is
          if (this.nextElementSibling && this.nextElementSibling.classList.contains('dropdown-content')) {
            e.preventDefault();
            this.classList.toggle('active');
            const content = this.nextElementSibling;
            content.classList.toggle('active');
          }
        });
      });
    }
    
    // Accordion functionaliteit voor FAQ
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    
    accordionHeaders.forEach(header => {
      header.addEventListener('click', function() {
        // Toggle active class
        this.classList.toggle('active');
        
        // Get the next element (content)
        const content = this.nextElementSibling;
        
        // Toggle content visibility
        if (content.style.maxHeight) {
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
        }
      });
    });
    
    // File upload UI
    const fileInputs = document.querySelectorAll('input[type="file"]');
    
    fileInputs.forEach(input => {
      const fileNameSpan = input.nextElementSibling.nextElementSibling;
      const fileButton = input.nextElementSibling;
      
      // Klik op de knop activeert het file-input veld
      fileButton.addEventListener('click', () => {
        input.click();
      });
      
      // Update de getoonde bestandsnaam bij selectie
      input.addEventListener('change', () => {
        if (input.files.length > 0) {
          fileNameSpan.textContent = input.files[0].name;
        } else {
          fileNameSpan.textContent = "Geen bestand gekozen";
        }
      });
    });
    
    // Form validatie
    const form = document.getElementById('trader-registration-form');
    const password = document.getElementById('password');
    const passwordConfirm = document.getElementById('password_confirm');
    
    form.addEventListener('submit', function(event) {
      // Valideer minimum aantal materialen
      const materialsChecked = document.querySelectorAll('input[name="materials[]"]:checked').length;
      if (materialsChecked === 0) {
        event.preventDefault();
        alert('Selecteer a.u.b. minimaal één type materiaal dat u accepteert.');
        return false;
      }
      
      // Valideer minimum aantal provincies
      const provincesChecked = document.querySelectorAll('input[name="provinces[]"]:checked').length;
      if (provincesChecked === 0) {
        event.preventDefault();
        alert('Selecteer a.u.b. minimaal één provincie als werkgebied.');
        return false;
      }
      
      // Valideer dat wachtwoorden overeenkomen
      if (password.value !== passwordConfirm.value) {
        event.preventDefault();
        alert('De ingevoerde wachtwoorden komen niet overeen.');
        password.focus();
        return false;
      }
      
      // Valideer wachtwoordsterkte
      const passwordRegex = /^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])/;
      if (!passwordRegex.test(password.value)) {
        event.preventDefault();
        alert('Uw wachtwoord moet minimaal één hoofdletter, één cijfer en één speciaal teken bevatten.');
        password.focus();
        return false;
      }
    });
    
    // Refresh captcha
    const refreshCaptchaBtn = document.querySelector('.refresh-captcha');
    const captchaImg = document.getElementById('captcha');
    
    refreshCaptchaBtn.addEventListener('click', function() {
      captchaImg.src = '<?php echo $base_url; ?>captcha.php?' + new Date().getTime();
    });
  });
</script>

</body>
</html>
