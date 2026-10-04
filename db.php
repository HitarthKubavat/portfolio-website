<?php
// Start the session
session_start();

// Database credentials
define('DB_SERVER', 'sql303.infinityfree.com');
define('DB_USERNAME', 'if0_40167294'); //  DB username
define('DB_PASSWORD', 'CyBfMz71VLhoO');     //  DB password
define('DB_NAME', 'if0_40167294_portfolio'); //  DB name

// Attempt to connect to MySQL database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>