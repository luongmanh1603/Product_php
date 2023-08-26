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
$product = null;
if ($result->num_rows>0){
    $product = $result->fetch_assoc();
} else {
    die("404 not found");
}



?>

<!doctype html>
<html lang="en">
<head>
    <?php include("head.php") ?>
</head>
<body>
<?php include("nav.php") ?>

<div class="container mt-5">
    <h2>Add Product1</h2>
    <form action="update.php?id=<?php echo $id?>" method="post">
        <div class="mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <input name="name" value="<?php echo $product["name"] ?>" type="text" class="form-control" id="productName" placeholder="Enter product name">
        </div>
        <div class="mb-3">
            <label for="productPrice" class="form-label">Price</label>
            <input name="price" value="<?php echo $product["price"] ?>"  type="number" class="form-control" id="productPrice" placeholder="Enter price">
        </div>
        <div class="mb-3">
            <label for="productDescription" class="form-label">Description</label>
            <textarea name="description"  class="form-control" id="productDescription" rows="3" placeholder="Enter product description"><?php echo $product["description"] ?></textarea>
        </div>
        <div class="mb-3">
            <label for="productQuantity" class="form-label">Quantity</label>s
            <input name="qty" type="number" value="<?php echo $product["qty"] ?>"  class="form-control" id="productQuantity" placeholder="Enter quantity">
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>
</body>
</html>

