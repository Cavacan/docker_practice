<?php
$to = 'user@example.com';
$subject = 'Test Email from PHP';
$message = 'This is a test email sent from PHP app.';
$headers = 'From: service@d-prac.test';

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>
