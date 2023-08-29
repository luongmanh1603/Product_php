<?php
//connnect db
$id = $_GET["id"];
$host = "127.0.0.1";
$dbname = "user_php";
$dbuser = "root";
$dbpass = ""; // Xampp
$conn = new  mysqli($host,$dbuser,$dbpass,$dbname);
if ($conn->connect_error){
    die("Connection refused");
}
//query db
$spl = "select * from users where id = $id"; // 0 or 1
$result = $conn->query($spl);
$product = null;
if ($result->num_rows>0){
    $new_fullname = $_POST["fullname"];
    $new_email = $_POST["email"];
    $new_pass = $_POST["pass"];
$update_sql="update users set fullname='$new_fullname',email ='$new_email',pass='$new_pass' where id = $id";
$conn ->query($update_sql);
header("Location: user.php");
} else {
    die("404 not found");
}
