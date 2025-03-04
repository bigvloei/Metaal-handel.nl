<?php
define('PRIVATE_PATH', '/www/metaal-handel.nl/private_html');
define('CONFIG_PATH', PRIVATE_PATH . '/config');
define('INCLUDES_PATH', PRIVATE_PATH . '/includes');
define('CLASSES_PATH', PRIVATE_PATH . '/classes');
define('TEMPLATES_PATH', PRIVATE_PATH . '/templates');
define('LANGUAGES_PATH', PRIVATE_PATH . '/languages');

// Laad configuratie als het bestand bestaat
if (file_exists(CONFIG_PATH . '/db_config.php')) {
    require_once CONFIG_PATH . '/db_config.php';
}

// Laad algemene functies als het bestand bestaat
if (file_exists(INCLUDES_PATH . '/functions.php')) {
    require_once INCLUDES_PATH . '/functions.php';
}

$page_title = "Opdracht Plaatsen - Metaal-handel.nl";
include('header.php');
?>

<section class="section section-light">
  <div class="container">
    <div class="section-title">
      <h1>Opdracht Plaatsen</h1>
      <p>Deze pagina wordt nog ontwikkeld.</p>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>
