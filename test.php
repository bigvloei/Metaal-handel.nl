<?php
// Database configuratie inladen
require_once(__DIR__ . '/../private_html/config/db_config.php');

// Als we hier komen zonder foutmelding, werkt de verbinding!
echo "Database verbinding succesvol!";

// Informatie voor debugging
echo "<pre>";
echo "MySQL Server Info: " . mysqli_get_server_info($conn) . "\n";
echo "PHP Version: " . phpversion() . "\n";
echo "</pre>";
?>

