<?php
// Debug mode inschakelen
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h1>Database Verbindingstest</h1>";

// Constanten definiëren zonder het echte configuratiebestand te laden
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'metaal_user');
define('DB_PASSWORD', 'Metaal@User123!'); // Gebruik hier je wachtwoord
define('DB_NAME', 'metaal_handel_db');

echo "<h2>Instellingen:</h2>";
echo "<ul>";
echo "<li>Server: " . DB_SERVER . "</li>";
echo "<li>Gebruiker: " . DB_USERNAME . "</li>";
echo "<li>Database: " . DB_NAME . "</li>";
echo "</ul>";

// Test 1: Controleer of MySQL extensie geladen is
echo "<h2>Test 1: PHP MySQL Extensie</h2>";
if (function_exists('mysqli_connect')) {
    echo "<p style='color:green'>✓ MySQLi extensie is beschikbaar</p>";
} else {
    echo "<p style='color:red'>✗ MySQLi extensie is NIET beschikbaar. Installeer php-mysql.</p>";
    echo "<code>sudo apt install php-mysql</code>";
    echo "<code>sudo systemctl restart apache2</code>";
    die();
}

// Test 2: Verbinding maken met MySQL server (zonder database te selecteren)
echo "<h2>Test 2: Verbinding met MySQL Server</h2>";
try {
    $test_conn = @mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
    
    if (!$test_conn) {
        echo "<p style='color:red'>✗ Kan geen verbinding maken met MySQL server.</p>";
        echo "<p>Error: " . mysqli_connect_error() . "</p>";
        echo "<p>Mogelijke oplossingen:</p>";
        echo "<ul>";
        echo "<li>Controleer of gebruikersnaam en wachtwoord correct zijn</li>";
        echo "<li>Controleer of de gebruiker bestaat in MySQL</li>";
        echo "</ul>";
        echo "<p>MySQL gebruiker aanmaken:</p>";
        echo "<pre>
CREATE USER 'metaal_user'@'localhost' IDENTIFIED BY 'Jouw_Wachtwoord';
GRANT ALL PRIVILEGES ON metaal_handel_db.* TO 'metaal_user'@'localhost';
FLUSH PRIVILEGES;
        </pre>";
    } else {
        echo "<p style='color:green'>✓ Verbinding met MySQL Server succesvol!</p>";
        
        // Test 3: Controleren of database bestaat
        echo "<h2>Test 3: Database Selecteren</h2>";
        $db_select = mysqli_select_db($test_conn, DB_NAME);
        
        if (!$db_select) {
            echo "<p style='color:red'>✗ Database '" . DB_NAME . "' bestaat niet.</p>";
            echo "<p>Error: " . mysqli_error($test_conn) . "</p>";
            echo "<p>Database aanmaken:</p>";
            echo "<pre>
CREATE DATABASE metaal_handel_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
            </pre>";
        } else {
            echo "<p style='color:green'>✓ Database '" . DB_NAME . "' geselecteerd!</p>";
            
            // Test 4: Controleer of essentiële tabellen bestaan
            echo "<h2>Test 4: Database Tabellen</h2>";
            $tables_to_check = ['products', 'categories', 'page_content', 'contact_messages'];
            $tables_ok = true;
            
            echo "<ul>";
            foreach ($tables_to_check as $table) {
                $result = mysqli_query($test_conn, "SHOW TABLES LIKE '$table'");
                if (mysqli_num_rows($result) == 0) {
                    echo "<li style='color:red'>✗ Tabel '$table' ontbreekt</li>";
                    $tables_ok = false;
                } else {
                    echo "<li style='color:green'>✓ Tabel '$table' gevonden</li>";
                }
            }
            echo "</ul>";
            
            if (!$tables_ok) {
                echo "<p>Je moet de benodigde tabellen aanmaken. SQL-voorbeeld:</p>";
                echo "<pre>
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    image_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    image_url VARCHAR(255),
    stock INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE SET NULL
);

CREATE TABLE page_content (
    id INT AUTO_INCREMENT PRIMARY KEY,
    page_name VARCHAR(50) NOT NULL,
    title VARCHAR(100) NOT NULL,
    content TEXT,
    last_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE KEY (page_name)
);

CREATE TABLE contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(200) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    is_read BOOLEAN DEFAULT FALSE
);
                </pre>";
            }
        }
        
        mysqli_close($test_conn);
    }
} catch (Exception $e) {
    echo "<p style='color:red'>✗ Exception: " . $e->getMessage() . "</p>";
}

echo "<h2>PHP Informatie:</h2>";
echo "<ul>";
echo "<li>PHP Versie: " . phpversion() . "</li>";
echo "<li>Loaded Extensions: " . implode(', ', get_loaded_extensions()) . "</li>";
echo "</ul>";
?>

