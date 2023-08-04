<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User home-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>


<style>
    nav {
        font-family: 'Segoe UI', Tahoma, sans-serif;
    }
</style>


<?php
session_start();
$count = 0;
if (isset($_SESSION['cart'])) {
    $count = count($_SESSION['cart']);
}

?>

<body>

    <nav class="navbar bg-dark text-white">
        <div class="container-fluid">
            <a href="" class="navbar-brand text-white"><img src="logo.png" height="80px" width="100px"></img> </a>

            <div class="d-flex ">
                <a class="pe-2 text-decoration-none" href="index.php">
                    <i class="fas fa-home"></i> Home
                </a>
                <a class="pe-2 text-decoration-none" href="viewcart.php">
                    <i class="fas fa-shopping-cart"></i> Cart (<?php echo $count; ?>)
                </a>
                <span class="pe-2">
                    <i class="fas fa-user-shield pe-2"></i> Hello,

                    <?php


                    if (isset($_SESSION['user'])) {
                        echo $_SESSION['user'];
                        echo " |
                                <a class='text-decoration-none pe-2' href='form/logout.php'><i class='fas fa-sign-in-alt'></i> Logout |</a>
                            ";
                    } else {
                        echo "<a class='text-decoration-none pe-2' href='form/login.php'><i class='fas fa-sign-in-alt'></i> Logout |</a> ";
                    }

                    ?>

                    <a class="text-decoration-none" href="../admin/form/login.php">Admin</a>
                </span>
            </div>
        </div>
    </nav>
    <div class="text-center sticky-top bg-primary">
        <div data-toggle="buttons">
            <a href="laptops.php" class="btn btn-primary px-5">
                Laptops
            </a>
            <a href="mobiles.php" class="btn btn-primary px-5">
                Mobiles
            </a>
            <a href="bags.php" class="btn btn-primary px-5">
                Bags
            </a>
        </div>
    </div>







    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/28ebd31583.js" crossorigin="anonymous"></script>
</body>

</html>