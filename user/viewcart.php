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

<?php
include 'header.php';
?>

<body>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-lg-12 text-center bg-light rounded m-3">
                <h1>My Kart</h1>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="co-sm-12 col-md-6 col-lg-9">
                <table class="table table-bordered text-center">
                    <thead class="bg-dark text-white fs-5">
                        <th>Index No.</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th> 
                        <th>Delete</th>

                    </thead>


                    <tbody>
                        <?php

                        // session_start();
                        $ptotal=0;
                        $total=0;

                        if (isset($_SESSION['cart'])) {
                            $idx=0;
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $ptotal=(int)$value['productPrice'] * (int) $value['productQuantity'];
                                $total+=(int)$value['productPrice'] * (int) $value['productQuantity'];
                                $idx=$key+1;
                                echo "
                                    <form action='insertcart.php' method='POST'>
                                        <tr>

                                        <td>$idx</td>
                                        <td>$value[productName]</td>
                                        <td>$value[productPrice]</td>
                                        <td>$value[productQuantity]</td>
                                        <td>$ptotal</td>
                                        <td ><button name='remove' class='btn btn-danger'>Delete</button></td>
                                        
                                        <div> <input type='hidden' name='item' value='$value[productName]'></div>
                                        </tr>
                                        </form>
                                        ";
                            }
                        }

                        ?>



                    </tbody>

                </table>
            </div>
            
            <div class="col-lg-3 text-center">
                <h3>Total </h3>
                <h1>₹ <?php echo number_format($total,2); ?></h1>
            </div>

        </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/28ebd31583.js" crossorigin="anonymous"></script>
</body>

<?php include 'footer.php'; ?>

</html>