<?php
header("Content-Type: application/json");
// Step 3.1: Connect to the MySQL database
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'shniyd_sms';

$db = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($db->connect_error) {
    die("Connection failed: " .$db->connect_error);
}

if (isset($_GET['name'])) {
    $userId = $_GET['name'];

    // Fetch user data based on user ID
    $result = $db->query("SELECT * FROM users WHERE name LIKE '%$userId%'");
    // Convert result to JSON
    $data = $result->fetch_assoc();

    echo json_encode($data);
} else {
    // If no user ID is provided, fetch all users
    $result = $db->query("SELECT * FROM users");

    // Convert result to JSON
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    echo json_encode($data);
}

// Close database connection
$db->close();

?>