<?php


if (isset($_GET['appointment-no'])) {

    // 1. Input Sanitization
    $confirmationNo = htmlspecialchars($_GET['appointment-no']);

    $service_map = [
        "Health" => 1,
        "Document-Services" => 2,
        "Public Affairs" => 3
    ];

    //output

    $z = [
        "Service Type" => "health"
    ];

    try {
        // --- 2. EXECUTE THE SECURE QUERY ---
        $sql = "SELECT 1 FROM appointments WHERE ConfirmationNo = ? LIMIT 1";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $confirmationNo);
        $stmt->execute();

        // --- 3. CHECK THE RESULT AND RESPOND ---
        if ($stmt->fetch()) {
            // SCENARIO A: FOUND (200 OK)
            $stmt->closeCursor();

            //RETRIVE THE CLIENT ID FROM DATABASE USING CONFIRMATION NO.
            $sql_retrieve = "SELECT Client_id, Service_id FROM appointments WHERE ConfirmationNo = ? LIMIT 1";
            $stmt_retrieve = $conn->prepare($sql_retrieve);
            $stmt_retrieve->bindParam(1, $confirmationNo);
            $stmt_retrieve->execute();
            $result_client_id = $stmt_retrieve->fetchAll(PDO::FETCH_ASSOC);
            $client_id = $result_client_id[0]['Client_id'];
            // $service_id = $result_client_id[1]['Service_id'];
            $stmt_retrieve->closeCursor();

            //GETTING CLIENT DATA FROM DATABASE USING THE CLIENT ID

            $sql_getClient_data = "SELECT Client_FirstName, Client_LastName From clients WHERE Client_id = ? LIMIT 1";
            $stmt_client_data = $conn->prepare($sql_getClient_data);
            $stmt_client_data->bindParam(1, $client_id);
            $stmt_client_data->execute();

            $restult_client_data = $stmt_client_data->fetchAll(PDO::FETCH_ASSOC);
            $stmt_client_data->closeCursor();
            

            $mergedShit = array_merge($result_client_id, $restult_client_data);
            echo json_encode($mergedShit);
            // GET APPOINTMENT TYPE / SCHEDULE


            // Default 200 OK is used. No need to set http_response_code explicitly.
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
