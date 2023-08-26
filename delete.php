<?php
$id = $_GET["id"];
$host = "127.0.0.1";
$dbname = "t2210a";
$dbuser = "root";
$dbpass = ""; // Xampp
$conn = new  mysqli($host,$dbuser,$dbpass,$dbname);
if ($conn->connect_error){
    die("Connection refused");
}

// success
//query db
$spl = "delete from products where id = $id"; // 0 or 1
$result = $conn->query($spl);
header("Location: product.php");



?>