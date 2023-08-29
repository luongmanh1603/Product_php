<?php
$p_name = $_POST["name"];
$p_price = $_POST["price"];
$p_description = $_POST["description"];
$p_qty = $_POST["qty"];

// connect db
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
$spl = "insert into products(name,price,description,qty) values('$p_name','$p_price','$p_description','$p_qty')";
$conn->query($spl);
header("Location: product.php");

