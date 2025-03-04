<?php
// Database configuratie
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'metaal_user');
define('DB_PASSWORD', 'Metaal@User123!'); // Gebruik hier jouw wachtwoord
define('DB_NAME', 'metaal_handel_db');

// Probeer verbinding te maken met de database
try {
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    // Controleer de verbinding
    if($conn === false){
        die("Er is een probleem met de database verbinding. " . mysqli_connect_error());
    }
    
    // Set character set
    mysqli_set_charset($conn, "utf8mb4");
    
} catch (Exception $e) {
    die("Er is een uitzondering opgetreden: " . $e->getMessage());
}
?>
