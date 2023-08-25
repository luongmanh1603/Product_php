<?php
    $list = [
            [
                    "name"=>"Ao dai",
                    "price"=>10,
                "descrip"=>"daitay",
                "qty"=>5
            ],
        [
            "name"=>"Ao ngan",
            "price"=>7,
            "descrip"=>"ngantay",
            "qty"=>9
        ]
    ];
?>

<!doctype html>
<html lang="en">
<head>
    <?php include("head.php") ?>
</head>
<body>
<a href="" class="btn btn-primary">Create a new product</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Product</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
        <th scope="col">Qty</th>
        <th scope="col">Operations</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($list as $item) : ?>
    <tr>
        <td><?php echo $item["name"];?></td>
        <td><?php echo $item["price"];?></td>
        <td><?php echo $item["descrip"];?></td>
        <td><?php echo $item["qty"];?></td>
        <td>
            <button class="btn btn-primary">Update</button>
            <button class="btn btn-danger">Delete</button>
        </td>
    </tr>
    <?php endforeach; ?>

    </tbody>
</table>
</body>
</html>
