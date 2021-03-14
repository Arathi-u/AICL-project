<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AICLformDB";
// get the post records
$firstName = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$contact = $_POST['Contact'];
$messagetxt = $_POST['Message'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//inserting data into table created from the form
$sql = "INSERT INTO AICLTable (firstname, lastname, email, contact, messagetext)
VALUES ('$firstName','$lastname','$email','$contact','$messagetxt')";

if ($conn->query($sql) === TRUE) {
  echo "New record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>