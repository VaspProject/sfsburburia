<?php
// Prevent direct access
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /contact.php');
    exit();
}

// Configuration
$admin_email = 'sfsburburia@gmail.com'; // school's email
$site_name = 'St. Francis De Sales School';

// Sanitize and validate input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Get and sanitize form data
$first_name = sanitize_input($_POST['first-name'] ?? '');
$last_name = sanitize_input($_POST['last-name'] ?? '');
$email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
$website = sanitize_input($_POST['url'] ?? '');
$message = sanitize_input($_POST['message'] ?? '');

// Validate required fields
$errors = [];
if (empty($first_name)) $errors[] = "First name is required";
if (empty($last_name)) $errors[] = "Last name is required";
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email is required";
if (empty($message)) $errors[] = "Message is required";

// If there are errors, return them
if (!empty($errors)) {
    session_start();
    $_SESSION['form_errors'] = $errors;
    $_SESSION['form_data'] = $_POST;
    header('Location: ../contact.php?status=error');
    exit();
}

// Prepare email content
$subject = "New Contact Form Submission from $site_name";
$email_content = "Name: $first_name $last_name\n";
$email_content .= "Email: $email\n";
if (!empty($website)) $email_content .= "Website: $website\n";
$email_content .= "\nMessage:\n$message\n";

// Email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send email
$mail_sent = mail($admin_email, $subject, $email_content, $headers);

// Handle the response
session_start();
if ($mail_sent) {
    $_SESSION['form_success'] = "Thank you for your message. We will get back to you soon.";
    header('Location: ./contact.php?status=success');
} else {
    $_SESSION['form_errors'] = ["Sorry, there was an error sending your message. Please try again later."];
    $_SESSION['form_data'] = $_POST;
    header('Location: ./contact.php?status=error');
}
exit();
?>