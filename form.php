<!doctype html>
<html lang="en">
<head>
    <?php include("head.php") ?>
</head>
<body>
<?php include("nav.php") ?>

<div class="container mt-5">
    <h2>Add Product1</h2>
    <form action="post.php" method="post">
        <div class="mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <input name="name" type="text" class="form-control" id="productName" placeholder="Enter product name">
        </div>
        <div class="mb-3">
            <label for="productPrice" class="form-label">Price</label>
            <input name="price" type="number" class="form-control" id="productPrice" placeholder="Enter price">
        </div>
        <div class="mb-3">
            <label for="productDescription" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="productDescription" rows="3" placeholder="Enter product description"></textarea>
        </div>
        <div class="mb-3">
            <label for="productQuantity" class="form-label">Quantity</label>
            <input name="qty" type="number" class="form-control" id="productQuantity" placeholder="Enter quantity">
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>
</body>
</html>
