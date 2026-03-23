<?php
// Database Configuration
if (!defined('DB_SERVER')) {
    define('DB_SERVER', 'localhost');
}
if (!defined('DB_USERNAME')) {
    define('DB_USERNAME', 'root');
}
if (!defined('DB_PASSWORD')) {
    define('DB_PASSWORD', 'root');
}
if (!defined('DB_NAME')) {
    define('DB_NAME', 'dupin_admin');
}

// Attempt to connect to MySQL database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($conn === false){
    die("ERROR: Could not connect to database. " . mysqli_connect_error());
}

/**
 * Perform a database query
 */
if (!function_exists('db_query')) {
    function db_query($sql) {
        global $conn;
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            die("Database Query Failed: " . mysqli_error($conn) . " | SQL: " . $sql);
        }
        return $result;
    }
}

/**
 * Fetch a single row from a query
 */
if (!function_exists('db_fetch')) {
    function db_fetch($sql) {
        $result = db_query($sql);
        return mysqli_fetch_assoc($result);
    }
}

/**
 * Fetch an associative array from a result object
 */
if (!function_exists('db_fetch_assoc')) {
    function db_fetch_assoc($result) {
        return mysqli_fetch_assoc($result);
    }
}

/**
 * Get number of rows in a result object
 */
if (!function_exists('db_num_rows')) {
    function db_num_rows($result) {
        return mysqli_num_rows($result);
    }
}

/**
 * Fetch all rows from a query
 */
if (!function_exists('db_fetch_all')) {
    function db_fetch_all($sql) {
        $result = db_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }
}

/**
 * Escape string for SQL
 */
if (!function_exists('db_escape')) {
    function db_escape($string) {
        global $conn;
        return mysqli_real_escape_string($conn, $string);
    }
}

/**
 * Get count of rows in a table
 */
if (!function_exists('getCount')) {
    function getCount($table, $condition = "") {
        global $conn;
        $query = "SELECT COUNT(*) as total FROM $table";
        if (!empty($condition)) {
            $query .= " WHERE $condition";
        }
        $result = db_query($query);
        $data = mysqli_fetch_assoc($result);
        return $data['total'];
    }
}

// Fetch Site Settings Globally
if (!isset($settings)) {
    $set_res = mysqli_query($conn, "SELECT * FROM site_settings WHERE id=1");
    if ($set_res) {
        $settings = mysqli_fetch_assoc($set_res);
    } else {
        $settings = [];
    }
}
?>
