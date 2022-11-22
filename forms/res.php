<?php
$servername = "localhost";
$database = "resume";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO resume (name, email, phone, subject, message) VALUES ('$name', '$email', '$phone', '$subject', '$message')";
if (mysqli_query($conn, $sql)) {
    header('Location:./thanks.html');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>