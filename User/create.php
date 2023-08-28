<!doctype html>
<html lang="en">
<head>
    <?php include("head.php") ?>
</head>
<body>

<div class="container mt-5">
    <h2>Add new user</h2>
    <form action="post.php" method="post">
        <div class="mb-3">
            <label for="Fullname" class="form-label">Full Name</label>
            <input name="fullname" type="text" class="form-control" id="fullame" placeholder="Enter name">
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
        </div>
        <div class="mb-3">
            <label for="Pass" class="form-label">Password</label>
            <input name="pass" type="password" class="form-control" id="pass" placeholder="Enter password">
        </div>

        <button type="submit" class="btn btn-primary">Add User</button>
    </form>
</div>
</body>
</html>

