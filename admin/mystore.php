<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>

<?php
    session_start();

    if(!$_SESSION['admin']){
        header("location:form/login.php");
    }
?>

<style>
    nav {
        font-family: 'Segoe UI', Tahoma, sans-serif;
        font-weight: 500;
    }
</style>

<body>

    <nav class="navbar bg-dark text-white">
        <div class="container-fluid">
            <a class="navbar-brand text-white">MyStore</a>
            <span class="px-3 py-3">
                <i class="fa fa-user-shield px-3"></i>
                Hello, <?php echo $_SESSION['admin']; ?>
                <i class="fa fa-sign-out-alt px-3"></i>
                <a class="text-decoration-none px-3" href="./form/logout.php">Logout</a>
                <a class="text-decoration-none px-3" href="../user/index.php">Userpanel</a>

            </span>
        </div>
    </nav>
    <div class="text-center">
        <h2>Dashboard</h2>
    </div>
    <div class="text-center sticky-top">
        <div data-toggle='buttons'>
        <a class="btn btn-primary px-5" href="./product/index.php">Add Post</a>
        <a class="btn btn-primary px-5" href="users.php">Users</a>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/28ebd31583.js" crossorigin="anonymous"></script>
</body>

</html>