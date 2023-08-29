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
$user = null;
if ($result->num_rows>0){
    $user = $result->fetch_assoc();
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

<div class="container mt-5">
    <h2>Update user</h2>
    <form action="update.php?id=<?php echo $id?>" method="post">
        <div class="mb-3">
            <label for="Fullname" class="form-label">Full Name</label>
            <input name="fullname" value="<?php echo $user["fullname"]?>" type="text" class="form-control" id="fullame" placeholder="Enter name">
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input name="email" value="<?php echo $user["email"]?>" type="email" class="form-control" id="email" placeholder="Enter email">
        </div>
        <div class="mb-3">
            <label for="Pass" class="form-label">Password</label>
            <input name="pass" value="<?php echo $user["pass"]?>" type="password" class="form-control" id="pass" placeholder="Enter password">
        </div>

        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
</div>
</body>
</html>


