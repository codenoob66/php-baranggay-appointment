<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Collect and sanitize form data
    $first_name = htmlspecialchars(strip_tags(trim($_POST['first_name'])));
    $last_name  = htmlspecialchars(strip_tags(trim($_POST['last_name'])));
    $email      = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject_topic = htmlspecialchars(strip_tags(trim($_POST['subject'])));
    $message    = htmlspecialchars(strip_tags(trim($_POST['message'])));

    // 2. Set recipient email (Change this to your actual email if needed)
    $to = "info@barangaylahug.gov.ph"; 
    
    // 3. Create email headers
    $subject = "New Contact Form Submission: $subject_topic";
    $headers = "From: " . $email . "\r\n" . 
               "Reply-To: " . $email . "\r\n" . 
               "X-Mailer: PHP/" . phpversion();

    // 4. Compose email body
    $email_body = "You have received a new message from your website contact form.\n\n".
                  "Name: $first_name $last_name\n".
                  "Email: $email\n".
                  "Topic: $subject_topic\n\n".
                  "Message:\n$message";

    // 5. Send email and redirect back with status
    if (mail($to, $subject, $email_body, $headers)) {
        // Success
        header("Location: contact.php?status=success");
    } else {
        // Error
        header("Location: contact.php?status=error");
    }
} else {
    // Redirect if accessed directly without POST
    header("Location: contact.php");
}
exit;
?>
