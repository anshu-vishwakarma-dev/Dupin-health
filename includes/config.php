<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include Database functions
require_once dirname(__FILE__) . '/database.php';

/**
 * Redirect to a URL
 */
if (!function_exists('redirect')) {
    function redirect($url) {
        header("Location: $url");
        exit();
    }
}

/**
 * Get a site setting value
 */
if (!function_exists('get_setting')) {
    function get_setting($key, $default = '') {
        global $settings;
        return (isset($settings[$key]) && !empty($settings[$key])) ? $settings[$key] : $default;
    }
}

/**
 * Generate CSRF Token
 */
if (!function_exists('generate_csrf_token')) {
    function generate_csrf_token() {
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }
}

/**
 * Verify CSRF Token
 */
if (!function_exists('verify_csrf_token')) {
    function verify_csrf_token($token) {
        if (!isset($_SESSION['csrf_token']) || $token !== $_SESSION['csrf_token']) {
            return false;
        }
        return true;
    }
}

/**
 * Output CSRF Hidden Field
 */
if (!function_exists('csrf_field')) {
    function csrf_field() {
        $token = generate_csrf_token();
        echo '<input type="hidden" name="csrf_token" value="' . $token . '">';
    }
}
?>
