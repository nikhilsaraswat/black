<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
  $message = $_POST['message'];

  // Database connection details (replace with yours)
  $hostname = "127.0.0.1";
  $username = "root";
  $password = "";
  $database = "contactustableforblackmango";

  // Connect to database
  $conn = mysqli_connect($hostname, $username, $password, $database);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Create SQL statement (replace with your table name)
  $sql = "INSERT INTO your_table_name (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

  // Execute query
  if (mysqli_query($conn, $sql)) {
    echo "Thank you for your message! We will get back to you soon.";
  } else {
    echo "Error: " . mysqli_error($conn);
  }

  // Close connection
  mysqli_close($conn);

} else {
  // Not a POST request, redirect or display error
  header("Location: index.html");
  exit;
}

?>
