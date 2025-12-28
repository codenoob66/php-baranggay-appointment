<?php
$servername = "localhost";
$dbname = "baranggay_scheduling";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $error) {
    header('Content-Type: application/json');
    http_response_code(500);
    echo json_encode(["error" => "Connection failed: " . $error->getMessage()]);
    exit;
}
