<?php

if (isset($_POST['first-name']) && isset($_POST['last-name']) && isset($_POST['appointment-type']) && isset($_POST['appointment-time'])) {
    // 1. Sanitize the incoming data (Crucial for security!)
    $first_name = htmlspecialchars($_POST['first-name']);
    $last_name = htmlspecialchars($_POST['last-name']);
    $appType = htmlspecialchars($_POST['appointment-type']);
    $appointment_schedule = htmlspecialchars($_POST['appointment-time']);
    $confirmationNumber = generateRandom();
    // 2. Perform server-side actions (e.g., save to a database, send an email)

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

        $sql2 = "INSERT INTO appointments(ConfirmationNo, Client_id) VALUES (?,?)";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bindParam(1, $confirmationNumber);
        $stmt2->bindParam(2, $client_id);

        $stmt2->execute();
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
