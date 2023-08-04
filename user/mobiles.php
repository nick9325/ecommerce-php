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
        <div class="row">

                <h1 class="text-center my-3">Mobiles</h1>
                
       
                <?php
                include 'config.php';

                $record = mysqli_query($con, 'SELECT * FROM `tblproduct` WHERE pcategory="Mobile" ');

                while ($row = mysqli_fetch_array($record)) {

                    echo "
                    <div class='col-md-6 col-lg-4 mb-3'>
                    <form action='Insertcart.php' method='POST'>
                    <div class='card m-auto' style='width: 18rem;'>
                        <img src='../admin/product/$row[pimage]' class='card-img-top'>
                        <div class='card-body text-center'>
                        <h5 class='card-title fs-4 fw-bold'>$row[pname]</h5>
                        <p class='card-text fs-4 fw-bold'>₹"?> <?php echo number_format($row['pprice'],2)?> <?php echo "</p>
                        <input type='hidden' name='pname' value='$row[pname]'>
                        <input type='hidden' name='pprice' value='$row[pprice]'>
                        <input type='number' name='pquantity' value='min='1' max='20'' placeholder='Quantity'><br><br>
                        <input type='submit' name='addCart' class='btn btn-dark text-white' w-100 value='Add to Cart'>
                        <input type='hidden' name='pcategory' value='$row[pcategory]'></input>
                        </div>
                    </div>
                    </form>
                    </div>
                ";
                }

                ?>
                </div>
            </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/28ebd31583.js" crossorigin="anonymous"></script>
</body>

<?php include 'footer.php'; ?>

</html>