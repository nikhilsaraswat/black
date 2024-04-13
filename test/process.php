<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
  $message = $_POST['message'];

  // Basic validation (replace with more robust validation)
  if (empty($name) || empty($email) || empty($message)) {
    echo "Please fill out all required fields.";
    exit;
  }

  // Send email or handle data (replace with your logic)
  $to = "your_email@example.com";
  $subject = "Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

  if (mail($to, $subject, $body)) {
    echo "Thank you for your message! We will get back to you soon.";
  } else {
    echo "There was an error sending your message. Please try again later.";
  }

} else {
  // Not a POST request, redirect or display error
  header("Location: index.html");
  exit;
}

?>
