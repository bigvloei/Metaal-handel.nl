<?php
// Stel basispad in voor include bestanden
$base_path = $_SERVER['DOCUMENT_ROOT']; 
$current_page = basename($_SERVER['PHP_SELF']);
// Root-level URL, geen submap meer
$base_url = "/"; // Aangepast voor directe root-level toegang
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Metaal-handel.nl - Het platform voor het ophalen van oud ijzer en metalen. Particulieren plaatsen gratis een opdracht, handelaren nemen deze over voor de beste prijs.">
  <meta name="keywords" content="oud ijzer verkopen, metaalhandel, schroot verkopen, metaal recyclen, koper inleveren, oud ijzer ophalen, ijzerhandel, oud ijzer prijs, cv ketel recyclen, recycling platform">
  <meta name="author" content="Metaal-handel.nl">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">  
  <title>Metaal-handel.nl | <?php echo isset($page_title) ? $page_title : 'Het platform voor metaalrecycling'; ?></title>
  
  <!-- Preconnect en preload voor snellere laadtijden -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <!-- Favicon -->
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  
  <!-- Stylesheet -->
  <link rel="stylesheet" href="style-metaal-handel.css">
  
  <style>
    /* Deze inline stijlen zijn voor snelle fixes; verplaats ze later naar style-metaal-handel.css */
    body {
      background-color: #000;
      color: #fff;
    }
    
    #main-header {
      background-color: #000;
      border-bottom: 1px solid #333;
    }
    
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
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #111;
      min-width: 200px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);
      z-index: 1;
      border-radius: 4px;
    }
    
    .dropdown:hover .dropdown-content {
      display: block;
    }
    
    .dropdown-content a {
      color: #fff;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      border-bottom: 1px solid #333;
    }
    
    .dropdown-content a:last-child {
      border-bottom: none;
    }
    
    .dropdown-content a:hover {
      background-color: #222;
    }
    
    .dropdown .nav-link::after {
      content: '\f107';
      font-family: 'Font Awesome 6 Free';
      font-weight: 900;
      margin-left: 5px;
    }
    
    /* Mobile nav styling */
    .mobile-nav {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #000;
      z-index: 1000;
      overflow-y: auto;
    }
    
    .mobile-nav.active {
      display: block;
    }
    
    .mobile-nav-list {
      list-style-type: none;
      padding: 20px;
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
      top: 20px;
      right: 20px;
      background: none;
      border: none;
      color: #fff;
      font-size: 1.5rem;
      cursor: pointer;
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
    }
    
    .mobile-dropdown-content {
      display: none;
      padding-left: 20px;
    }
    
    .mobile-dropdown-content.active {
      display: block;
    }
  </style>
</head>
<body>
<header id="main-header">
  <div class="container">
    <div class="header-content">
    <a href="<?php echo $base_url; ?>index.php" class="logo" aria-label="Metaal-handel.nl Homepage">
      <i class="fas fa-recycle"></i> Metaal <span>-handel.nl</span>
    </a>

      
      <nav class="main-nav" aria-label="Hoofdnavigatie">
        <ul class="nav-list">
          <li><a href="index.php" class="<?php echo $current_page == 'index' ? 'active' : ''; ?>">Home</a></li>
          <li class="dropdown">
            <a href="particulieren" class="nav-link <?php echo $current_page == 'particulieren' ? 'active' : ''; ?>">Voor particulieren</a>
            <div class="dropdown-content">
              <a href="hoe-werkt-het">Hoe werkt het?</a>
              <a href="opdracht-plaatsen">Opdracht plaatsen</a>
              <a href="veelgestelde-vragen">Veelgestelde vragen</a>
            </div>
          </li>
          <li class="dropdown">
            <a href="handelaren" class="nav-link <?php echo $current_page == 'handelaren' ? 'active' : ''; ?>">Voor handelaren</a>
            <div class="dropdown-content">
              <a href="voordelen">Voordelen</a>
              <a href="aanmelden">Aanmelden als handelaar</a>
              <a href="dashboard">Dashboard</a>
            </div>
          </li>
          <li><a href="opdracht-plaatsen" class="<?php echo $current_page == 'opdracht-plaatsen' ? 'active' : ''; ?>">Opdracht plaatsen</a></li>
          <li><a href="prijzen" class="<?php echo $current_page == 'prijzen' ? 'active' : ''; ?>">Dagprijzen</a></li>
          <li><a href="contact" class="<?php echo $current_page == 'contact' ? 'active' : ''; ?>">Contact</a></li>
        </ul>
      </nav>
      
      <div class="contact-info">
        <a href="opdracht-plaatsen" class="contact-btn">
          <i class="fas fa-plus-circle"></i> Opdracht plaatsen
        </a>
        <a href="login" class="contact-btn btn-primary">
          <i class="fas fa-sign-in-alt"></i> Inloggen
        </a>
      </div>
      
      <button class="nav-toggle" aria-label="Menu openen" aria-expanded="false">
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </div>
</header>

<!-- Mobile Navigation -->
<nav class="mobile-nav" id="mobile-nav" aria-label="Mobiel menu">
  <button class="mobile-nav-close" aria-label="Menu sluiten">
    <i class="fas fa-times"></i>
  </button>
  <ul class="mobile-nav-list">
    <li><a href="index.php">Home</a></li>
    
    <li>
      <button class="mobile-dropdown-btn">
        Voor particulieren <i class="fas fa-chevron-down"></i>
      </button>
      <div class="mobile-dropdown-content">
        <a href="hoe-werkt-het">Hoe werkt het?</a>
        <a href="opdracht-plaatsen">Opdracht plaatsen</a>
        <a href="veelgestelde-vragen">Veelgestelde vragen</a>
      </div>
    </li>
    
    <li>
      <button class="mobile-dropdown-btn">
        Voor handelaren <i class="fas fa-chevron-down"></i>
      </button>
      <div class="mobile-dropdown-content">
        <a href="voordelen">Voordelen</a>
        <a href="aanmelden">Aanmelden als handelaar</a>
        <a href="dashboard">Dashboard</a>
      </div>
    </li>
    
    <li><a href="opdracht-plaatsen">Opdracht plaatsen</a></li>
    <li><a href="prijzen">Dagprijzen</a></li>
    <li><a href="contact">Contact</a></li>
    <li><a href="login">Inloggen</a></li>
  </ul>
</nav>

<script>
  // JavaScript voor de mobiele navigatie toggle
  document.addEventListener('DOMContentLoaded', function() {
    // Navigatie toggle
    const navToggle = document.querySelector('.nav-toggle');
    const mobileNav = document.getElementById('mobile-nav');
    const mobileNavClose = document.querySelector('.mobile-nav-close');
    
    navToggle.addEventListener('click', function() {
      mobileNav.classList.add('active');
      document.body.style.overflow = 'hidden'; // Voorkomt scrollen op de achtergrond
    });
    
    mobileNavClose.addEventListener('click', function() {
      mobileNav.classList.remove('active');
      document.body.style.overflow = ''; // Herstelt scrollen
    });
    
    // Mobiele dropdown menu's
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
  });
</script>
