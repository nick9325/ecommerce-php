 <?php
    
    if(isset($_POST['submit'])){
            include 'config.php';
        $product_name=$_POST['pname'];
        $product_price=$_POST['pprice'];
        $product_image=$_FILES['pimage'];
        $image_loc=$_FILES['pimage']['tmp_name'];
        $image_name=$_FILES['pimage']['name'];
            $img_dest="Uploadimage/".$image_name;
         move_uploaded_file($image_loc,"Uploadimage/".$image_name);
        $product_category=$_POST['pages'];
    }


    mysqli_query($con,"INSERT INTO `tblproduct`(`pname`,`pprice`,`pimage`,`pcategory`) VALUES ('$product_name','$product_price','$img_dest','$product_category') ");

 ?>