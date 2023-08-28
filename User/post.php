<?php
$p_name = $_POST["fullname"];
$p_email = $_POST["email"];
$p_pass = $_POST["pass"];

// connect db
$host = "127.0.0.1";
$dbname = "user_php";
$dbuser = "root";
$dbpass = ""; // Xampp
$conn = new  mysqli($host,$dbuser,$dbpass,$dbname);
if ($conn->connect_error){
    die("Connection refused");
}

// success
//query db
$spl = "insert into users(fullname,email,pass) values('$p_name','$p_email','$p_pass')";
$conn->query($spl);
header("Location: user.php");
