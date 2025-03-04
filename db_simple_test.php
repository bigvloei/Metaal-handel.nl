<?php
// Debug mode inschakelen
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connectie poging
$host = 'localhost';
$user = 'metaal_user';
$pass = 'Metaal@User123!'; // Pas dit aan naar je werkelijke wachtwoord
$db = 'metaal_handel_db';

echo "<h2>MySQL Connectie Test</h2>";

// Verbinding maken
$conn = mysqli_connect($host, $user, $pass, $db);

// Verbinding controleren
if (!$conn) {
    echo "<p style='color:red'>FOUT: " . mysqli_connect_error() . "</p>";
    
    // Probeer zonder database te verbinden
    $conn2 = mysqli_connect($host, $user, $pass);
    if (!$conn2) {
        echo "<p style='color:red'>Kan zelfs niet verbinden met MySQL server: " . mysqli_connect_error() . "</p>";
    } else {
        echo "<p style='color:green'>Verbinding met MySQL server lukt, maar database '$db' is mogelijk het probleem</p>";
        echo "<p>Beschikbare databases:</p><ul>";
        $result = mysqli_query($conn2, "SHOW DATABASES");
        while ($row = mysqli_fetch_array($result)) {
            echo "<li>".$row[0]."</li>";
        }
        echo "</ul>";
        mysqli_close($conn2);
    }
} else {
    echo "<p style='color:green'>Verbinding succesvol!</p>";
    mysqli_close($conn);
}
?>
