<?php

if (isset($_POST['first-name']) && isset($_POST['last-name']) && isset($_POST['appointment-type']) && isset($_POST['appointment-time'])) {
    // 1. Sanitize the incoming data (Crucial for security!)
    $first_name = htmlspecialchars($_POST['first-name']);
    $last_name = htmlspecialchars($_POST['last-name']);
    $appType = htmlspecialchars($_POST['appointment-type']);
    $appointment_schedule = htmlspecialchars($_POST['appointment-time']);
    $confirmationNumber = generateRandom();
    // 2. Perform server-side actions (e.g., save to a database, send an email)


    // $service_map = [
    //     "Health" => 1,
    //     "Document-Services" => 2,
    //     "Public Affairs" => 3
    // ];

    // Example: Log the received data
    // $data = ["message" => $name, "appointment" => $appointment_schedule, "Appointment Type" => $appType];
    $log_message = "New appointment for $first_name $last_name, on $appointment_schedule for $appType\n";
    file_put_contents('submissions.log', $log_message, FILE_APPEND);
    // 3. Send a response back to the JavaScript (AJAX success function)

    try {
        $conn->beginTransaction();

        $sql = "INSERT INTO clients(Client_FirstName, Client_LastName) VALUES (?,?)";
        $stmt1 = $conn->prepare($sql);
        $stmt1->bindParam(1, $first_name);
        $stmt1->bindParam(2, $last_name);

        $stmt1->execute();

        $client_id = $conn->lastInsertId();

        $sql_service = "SELECT id FROM services WHERE Service_type = ? LIMIT 1";
        $stmt_service = $conn->prepare($sql_service);
        $stmt_service->bindParam(1, $appType);
        $stmt_service->execute();

        $service = $stmt_service->fetch();
        $service_id = $service['id'];

        $sql_setData = "INSERT INTO appointments(ConfirmationNo, Client_id, Service_id) VALUES (?, ?, ?)";
        $stmt_setData  = $conn->prepare($sql_setData);
        $stmt_setData->bindParam(1, $confirmationNumber);
        $stmt_setData->bindParam(2, $client_id);
        $stmt_setData->bindParam(3, $service_id);

        $stmt_setData->execute();

        $conn->commit();
    } catch (\PDOException $e) {
        echo "Database Error: " . $e->getMessage();
        $conn->rollBack();
    }
    $stmt1 = null;
    $stmt2 = null;
    echo json_encode($confirmationNumber);
} else {
    // Handle missing fields error
    http_response_code(400); // Bad Request
    // echo json_encode(array(
    //     "error" => "fuck you",
    // ));
}
