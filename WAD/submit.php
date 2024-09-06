<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set your email address where you want to receive emails.
    $to = "21501a05a8@pvpsit.ac.in";

    // Set the subject of the email.
    $email_subject = "New Contact Form Submission: $subject";

    // Create the email headers.
    $headers = "From: $email";

    // Compose the email content.
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Message:\n$message";

    // Send the email.
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Email sent successfully.
        header("Location: thank-you.html"); // Redirect to a thank-you page.
    } else {
        // Email sending failed.
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // If the request method is not POST, do nothing or handle the error as needed.
    echo "Invalid request.";
}
?>
