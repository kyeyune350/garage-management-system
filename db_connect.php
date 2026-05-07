<?php
// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'auto_service_system');

// Create connection with error handling
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conn) {
    error_log("Database Connection Error: " . mysqli_connect_error());
    header('HTTP/1.1 500 Internal Server Error');
    die('Database connection error. Please try again later.');
}

// Set charset to utf8mb4
mysqli_set_charset($conn, "utf8mb4");

// Function to safely execute queries
function executeQuery($conn, $query) {
    $result = mysqli_query($conn, $query);
    if (!$result) {
        error_log("Query Error: " . mysqli_error($conn) . " - Query: " . $query);
        return null;
    }
    return $result;
}

// Function to get row count safely
function getRowCount($conn, $table) {
    $query = "SELECT COUNT(*) as count FROM " . mysqli_real_escape_string($conn, $table);
    $result = executeQuery($conn, $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['count'] ?? 0;
    }
    return 0;
}
?>
