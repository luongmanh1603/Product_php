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
$spl = "select * from products where id = $id"; // 0 or 1
$result = $conn->query($spl);
if ($result->num_rows>0){
   $new_name = $_POST["name"];
   $new_price = $_POST["price"];
   $new_qty = $_POST["qty"];
   $new_description = $_POST["description"];
   $update_sql = "update products set name='$new_name',price='$new_price',description='$new_description',qty='$new_qty' where id = $id";
   $conn->query($update_sql);
   header("Location: product.php");
} else {
    die("404 not found");
}



?>