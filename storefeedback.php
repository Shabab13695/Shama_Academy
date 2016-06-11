<?php

      $name=  $_POST['contact-name'];
      $email=$_POST['contact-email'];
      $message=$_POST['contact-message'];

      echo $name.$email.$message;

                $servername = "localhost";
$username = "root";
$password = "";
$dbname = "shama_academy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO feed_back (Name, Email, Comment)
VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 







?>