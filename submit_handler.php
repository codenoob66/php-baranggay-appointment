<?php

require_once "db.php";
include "util/randomId.php";
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// Set the content type to ensure the response is treated as plain text or JSON
header('Content-Type: application/json');

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "setAppointment.php";
} else if ($_SERVER['REQUEST_METHOD'] == "GET") {
    require "getAppointment.php";
} else {
    // Handle non-POST requests
    http_response_code(405); // Method Not Allowed
    echo "Error: Invalid request method.";
}
