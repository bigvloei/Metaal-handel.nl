<?php
/**
 * Basis functies voor de website
 */

// Beveilig tegen XSS
function escape($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

// Genereer een veilige CSRF token
function generate_csrf_token() {
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

// Controleer CSRF token
function check_csrf_token($token) {
    if (!isset($_SESSION['csrf_token']) || $token !== $_SESSION['csrf_token']) {
        die('Ongeldige beveiligingstoken. Probeer de pagina te vernieuwen.');
    }
    return true;
}

// Log fouten
function log_error($message, $severity = 'ERROR') {
    $log_file = PRIVATE_PATH . '/logs/error.log';
    $timestamp = date('Y-m-d H:i:s');
    $log_message = "[$timestamp] [$severity] $message" . PHP_EOL;
    error_log($log_message, 3, $log_file);
}
