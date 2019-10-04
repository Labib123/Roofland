<?php
define("host", "localhost"); // The host you want to connect to.
define("user", "root"); // The database username.
define("password", ""); // The database password.
define("database", "roofland"); // The database name.

define("CAN_REGISTER", "any");
define("DEFAULT_ROLE", "user");


// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
