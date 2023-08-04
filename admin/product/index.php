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

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-dark mt-5">
                <form class="m-2" action="insert.php" method="POST" enctype="multipart/form-data">
                    <h2 class="m-3 text-center fw-bold">Product Details</h2>
                    <div class="mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" name="pname" class="form-control" placeholder="Enter Product Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Price</label>
                        <input type="text" name="pprice" class="form-control" placeholder="Enter Product Price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Add Product Image</label>
                        <input type="file" name="pimage" class="form-control">
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

                    <button name="submit" class="btn btn-primary fs-4 fw-bold my-3 form-control">Upload</button>

                </form>
            </div>
        </div>


        <div class="m-3 mt-5 mb-5">

            <table class="table border border-dark text-center">
                <thead class="fs-5">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
            
                <tbody>

                    <?php
                    include 'config.php';

                    $record = mysqli_query($con, "SELECT * FROM `tblproduct`");


                    while ($row = mysqli_fetch_array($record))

                        echo "
                        <tr>
                        <td>$row[id]</td>
                        <td>$row[pname]</td>
                        <td>$row[pprice]</td>
                        <td><img src='$row[pimage]' height='50px'></td>
                        <td>$row[pcategory]</td>
                        <td> <a class='text-decoration-none btn btn-danger' href='delete.php?ID=$row[id]'>Delete</a></td>
                        <td> <a class='text-decoration-none btn btn-primary' href='update.php?ID=$row[id]'>Update</a></td>
                        </tr>
                        ";
                    ?>

                </tbody>
            </table>

        </div>




</body>


</html>