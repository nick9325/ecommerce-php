<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Product-page</title>
</head>

<style>
    .container {
        font-family: 'Segoe UI', Tahoma, sans-serif;
        font-weight: 500;
    }
</style>


<?php

    if(isset($_GET['ID'])){
        $iid = $_GET['ID'];
        
        include 'config.php';

        $Record = mysqli_query($con, "SELECT * FROM `tblproduct` WHERE id=$iid");
        $data = mysqli_fetch_array($Record); 
    }

    ?>


<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-dark mt-5">
                <form class="m-2" action="update.php" method="POST" enctype="multipart/form-data">
                    <h2 class="m-3 text-center fw-bold">Update Details</h2>
                    <div class="mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" value="<?php echo $data['pname']; ?>" name="pname" class="form-control" placeholder="Enter Product Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Price</label>
                        <input type="text" value="<?php echo $data['pprice']; ?>" name="pprice" class="form-control" placeholder="Enter Product Price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Product Image</label>
                        <input type="file" name="pimage" class="form-control"> <br />
                        <img src="<?php echo $data['pimage']; ?>" alt="" style='height: 100px;'>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Page Category</label>
                        <select class="form-select" name="pages">
                            <option value="Home">Home</option>
                            <option value="Laptop">Laptop</option>
                            <option value="Bag">Bag</option>
                            <option value="Mobile">Mobile</option>
                        </select>
                    </div>

                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

                    <button name="update" class="btn btn-primary fs-4 fw-bold my-3 form-control">Update</button>

                </form>
            </div>
        </div>
    </div>


    <?php

    if (isset($_POST['update'])) {
        include 'config.php';
        $id = $_POST['id'];
        $product_name = $_POST['pname'];
        $product_price = $_POST['pprice'];
        $product_image = $_FILES['pimage'];
        $image_loc = $_FILES['pimage']['tmp_name'];
        $image_name = $_FILES['pimage']['name'];
        $img_dest = "Uploadimage/" . $image_name;
        move_uploaded_file($image_loc, "Uploadimage/" . $image_name);
        $product_category = $_POST['pages'];


        mysqli_query(
            $con,
            "UPDATE `tblproduct` SET `pname`='$product_name',`pprice`='$product_price',`pimage`='$img_dest',`pcategory`='$product_category' WHERE `id`='$id'"
        );
        header('location:index.php');
    }
    ?>





</body>

</html>