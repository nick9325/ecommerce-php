<?php

    if(isset($_GET['ID'])){

        $Id=$_GET['ID'];

        include '../admin/product/config.php';

        mysqli_query($con,"DELETE FROM `tbluser` WHERE id=$Id");

        header('location:users.php');



    }

?>