<?php
//get product from db
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
$spl = "select * from users";
$result = $conn->query($spl);
$users = [];
if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        $users[] = $row;
    }
}

?>
<!doctype html>
<html lang="en">
<head>
   <?php include("head.php") ?>
</head>
<body>
    <a href="create.php" class="btn btn-primary">Create a new user</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Full Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
<th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
<?php foreach ($users as $item) : ?>
    <tr>
    <td><?php echo $item["id"] ?></td>
    <td><?php echo $item["fullname"] ?></td>
    <td><?php echo $item["email"] ?></td>
    <td><?php echo $item["pass"] ?></td>
    <td>
        <a href="edit.php?id=<?php echo $item["id"]?>" class="btn btn-warning">Update</a>
        </td>
    </tr>
<?php endforeach; ?>

    </tbody>
</table>
</body>
</html>
