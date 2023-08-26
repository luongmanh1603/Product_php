<?php
   //get product from db
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
$spl = "select * from products";
$result = $conn->query($spl);
$product= [];
if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        $product[] = $row;
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <?php include("head.php") ?>
</head>
<body>
<?php include("nav.php") ?>
<a href="form.php" class="btn btn-primary">Create a new product</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Product</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
        <th scope="col">Qty</th>
        <th scope="col">Operations</th>
    </tr>
    </thead>
    <tbody>
<?php foreach ($product as $item) : ?>
    <tr>
        <td><?php echo $item["id"] ?></td>
        <td><?php echo $item["name"] ?></td>
        <td><?php echo $item["price"] ?></td>
        <td><?php echo $item["description"] ?></td>
        <td><?php echo $item["qty"] ?></td>
        <td>
            <a href="edit.php?id=<?php echo $item["id"]?>" class="btn btn-warning">Update</a>
            <a href="edit.php?id=<?php echo $item["id"]?>" class="btn btn-danger">Delete</a>

        </td>
    </tr>
<?php endforeach; ?>

    </tbody>
</table>
</body>
</html>
