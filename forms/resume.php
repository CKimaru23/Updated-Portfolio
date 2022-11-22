<?php
//connecting to the database whose name is 'resume'
//Servername=localhost
//username=root
//password=empty
//database name=resume

    $conn = mysqli_connect("localhost", "root","","resume");

//Checking connection
    if($conn===false){
        die("Error: Could not connect. ".mysqli_connect_error());
    }

//Taking the inputs
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];

//Performing insert query execution
//Our table name is called 'resume'
    $sql="INSERT INTO resume VALUES ('$name', '$email', '$phone', '$subject', '$message')";

//Return message


//Close connection
    mysqli_close($conn);

?>

