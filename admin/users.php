<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>

<style>
    nav {
        font-family: 'Segoe UI', Tahoma, sans-serif;
        font-weight: 500;
    }
</style>


<body>



    <?php
    include 'mystore.php';
    include '../admin/product/config.php';

    $record = mysqli_query($con, "SELECT * FROM `tbluser`");

    ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Sr No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

            <?php

           $i=1;

            while ($row = mysqli_fetch_array($record)) {
                echo "
                <tr>
                    <td>";?>
                    <?php echo $i++; ?><?php echo" </td>
                    <td>$row[uname]</td>
                    <td>$row[uemail]</td>
                    <td>$row[umobile]</td>
                    <td> <a class='text-decoration-none btn btn-danger' href='delete.php?ID=$row[id]'>Delete</a></td>
                </tr>
            ";
            }

            ?>
        </tbody>
    </table>

    <h1>Total : <?php echo mysqli_num_rows($record); ?></h1>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/28ebd31583.js" crossorigin="anonymous"></script>
</body>

</html>