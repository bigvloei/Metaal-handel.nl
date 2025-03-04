<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($page_title) ? $page_title : 'Metaal-handel.nl - Het platform voor oud ijzer en metalen'; ?></title>
  
  <!-- CSS -->
  <link rel="stylesheet" href="/assets/css/style.css">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
  <!-- Favicon -->
  <link rel="icon" href="/assets/images/favicon.ico">
</head>
<body>
  <header class="site-header">
    <div class="container">
      <div class="header-content">
        <div class="logo">
          <a href="index.php">
            <img src="/assets/images/logo.png" alt="Metaal-handel.nl Logo">
          </a>
        </div>
        <nav class="main-nav">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="particulieren.php">Voor particulieren</a></li>
            <li><a href="handelaren.php">Voor handelaren</a></li>
            <li><a href="prijzen.php">Dagprijzen</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
        <div class="header-buttons">
          <a href="login.php" class="btn btn-sm btn-outline">Inloggen</a>
          <a href="registreren.php" class="btn btn-sm">Registreren</a>
        </div>
        <button class="mobile-menu-toggle">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </button>
      </div>
    </div>
  </header>
  <main>
