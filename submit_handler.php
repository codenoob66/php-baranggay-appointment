<?php
// Set the content type to ensure the response is treated as plain text or JSON
header('Content-Type: text/plain');

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the 'name' and 'email' fields are set
    if (isset($_POST['user-name']) && isset($_POST['appointment-type']) && isset($_POST['appointment-time']) ) {
        // 1. Sanitize the incoming data (Crucial for security!)
        $name = htmlspecialchars($_POST['user-name']);
        $appType = htmlspecialchars($_POST['appointment-type']);
        $appointment_schedule = htmlspecialchars($_POST['appointment-time']);

        // 2. Perform server-side actions (e.g., save to a database, send an email)
        
        // Example: Log the received data
        $log_message = "New submission received - Name: $name, Email: $email\n";
        file_put_contents('submissions.log', $log_message, FILE_APPEND);
        // 3. Send a response back to the JavaScript (AJAX success function)
        echo json_encode(array(
            "message" => "Thank you, $name! Your form data was processed successfully on the server."
        ));
    } else {
        // Handle missing fields error
        http_response_code(400); // Bad Request
        echo json_encode(array(
            "error" => "fuck you",
        ));
    }
} else {
    // Handle non-POST requests
    http_response_code(405); // Method Not Allowed
    echo "Error: Invalid request method.";
}

?>