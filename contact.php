<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validate input (simple validation example)
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Recipient email address
        $to = "your-email@example.com"; // Replace with your email address
        $subject = "New contact form submission from $name";
        $body = "Name: $name\nEmail: $email\nMessage:\n$message";
        $headers = "From: $email";

        // Send email
        if (mail($to, $subject, $body, $headers)) {
            echo "Thank you for your message. We will get back to you soon.";
        } else {
            echo "Sorry, something went wrong. Please try again later.";
        }
    } else {
        echo "Please fill in all required fields.";
    }
}
?>
