<?php
// db.php — Database connection file

// Replace these with your actual InfinityFree MySQL credentials
$host = 'sqlXXX.infinityfree.com';     // e.g., sql304.infinityfree.com
$db   = 'epiz_XXXXXXX_database';       // your actual DB name
$user = 'epiz_XXXXXXX';                // your DB username
$pass = 'your_password';               // your DB password

$conn = new mysqli($host, $user, $pass, $db);

// Check for connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
