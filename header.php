<?php
// Stel basispad in voor include bestanden
$base_path = $_SERVER['DOCUMENT_ROOT']; 
$current_page = basename($_SERVER['PHP_SELF']);
// Voeg deze regels bovenaan je header.php toe, samen met je andere variabelen
$base_url = "/"; // Pas dit aan als de mapstructuur wijzigt
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
  <link rel="stylesheet" href="style.css">
  
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
          <li><a href="index.php" class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Home</a></li>
          <li class="dropdown">
            <a href="particulieren.php" class="nav-link <?php echo $current_page == 'particulieren.php' ? 'active' : ''; ?>">Voor particulieren</a>
            <div class="dropdown-content">
              <a href="hoe-werkt-het.php">Hoe werkt het?</a>
              <a href="opdracht-plaatsen.php">Opdracht plaatsen</a>
              <a href="veelgestelde-vragen.php">Veelgestelde vragen</a>
            </div>
          </li>
          <li class="dropdown">
            <a href="handelaren.php" class="nav-link <?php echo $current_page == 'handelaren.php' ? 'active' : ''; ?>">Voor handelaren</a>
            <div class="dropdown-content">
              <a href="voordelen.php">Voordelen</a>
              <a href="aanmelden.php">Aanmelden als handelaar</a>
              <a href="dashboard.php">Dashboard</a>
            </div>
          </li>
          <li><a href="opdracht-plaatsen.php" class="<?php echo $current_page == 'opdracht-plaatsen.php' ? 'active' : ''; ?>">Opdracht plaatsen</a></li>
          <li><a href="prijzen.php" class="<?php echo $current_page == 'prijzen.php' ? 'active' : ''; ?>">Dagprijzen</a></li>
          <li><a href="contact.php" class="<?php echo $current_page == 'contact.php' ? 'active' : ''; ?>">Contact</a></li>
        </ul>
      </nav>
      
      <div class="contact-info">
        <a href="opdracht-plaatsen.php" class="contact-btn">
          <i class="fas fa-plus-circle"></i> Opdracht plaatsen
        </a>
        <a href="login.php" class="contact-btn btn-primary">
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
        <a href="hoe-werkt-het.php">Hoe werkt het?</a>
        <a href="opdracht-plaatsen.php">Opdracht plaatsen</a>
        <a href="veelgestelde-vragen.php">Veelgestelde vragen</a>
      </div>
    </li>
    
    <li>
      <button class="mobile-dropdown-btn">
        Voor handelaren <i class="fas fa-chevron-down"></i>
      </button>
      <div class="mobile-dropdown-content">
        <a href="voordelen.php">Voordelen</a>
        <a href="aanmelden.php">Aanmelden als handelaar</a>
        <a href="dashboard.php">Dashboard</a>
      </div>
    </li>
    
    <li><a href="opdracht-plaatsen.php">Opdracht plaatsen</a></li>
    <li><a href="prijzen.php">Dagprijzen</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="login.php">Inloggen</a></li>
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
