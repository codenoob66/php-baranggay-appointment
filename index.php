<?php

// require "util/nav_function.php";
// Get the path (e.g., /submit_handler)
$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// Normalize the URI (remove leading/trailing slashes)
$path = trim($uri, '/');

if ($path === "" || $path === "home") {
    require "home.php";
} elseif ($path === "contact") {
    require "contact.php";
} elseif ($path === "appointment") {
    require "appointment.php";
} elseif ($path === "submit_handler") { // THIS IS THE KEY
    require "submit_handler.php";
} else {
    http_response_code(404);
    echo "404 Not Found";
}
