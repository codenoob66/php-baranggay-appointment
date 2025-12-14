<?php


if (isset($_GET['appointment-no'])) {

    // 1. Input Sanitization
    $confirmationNo = htmlspecialchars($_GET['appointment-no']);

    try {
        // --- 2. EXECUTE THE SECURE QUERY ---
        $sql = "SELECT 1 FROM appointments WHERE ConfirmationNo = ? LIMIT 1";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $confirmationNo);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // --- 3. CHECK THE RESULT AND RESPOND ---
        if ($stmt->fetch() && $row) {
            // SCENARIO A: FOUND (200 OK)
            // Default 200 OK is used. No need to set http_response_code explicitly.
            echo json_encode(["success" => true, "message" => "Confirmation found."]);
        } else {
            // SCENARIO B: NOT FOUND (404)
            http_response_code(404); // Resource not found
            echo json_encode(["success" => false, "message" => "Confirmation number not found."]);
        }
    } catch (\PDOException $e) {
        // SCENARIO C: DATABASE ERROR (500)
        http_response_code(500);
        echo json_encode(["success" => false, "message" => "A database error occurred."]);
    }

    // Clean up statement object regardless of success or failure
    $stmt = null;
} else {
    // SCENARIO D: MISSING INPUT (400)
    http_response_code(400); // Bad Request
    echo json_encode(["success" => false, "message" => "Appointment number is required."]);
}
