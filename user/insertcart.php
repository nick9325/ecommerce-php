
<?php


    session_start();

    if(isset($_SESSION['user'])){


    $check_product=0;

    if(isset($_POST['addCart'])){

        $product_name=$_POST['pname'];
        $product_price=$_POST['pprice'];
        $product_quantity=$_POST['pquantity'];
        $product_category=$_POST['pcategory'];
       
        if(!empty($_SESSION['cart'])){
            $check_product = array_column($_SESSION['cart'],'productName');
        }

        if(!empty($_SESSION['cart']) and in_array($product_name,$check_product)){
            echo"
            <script>
                alert('product already added');
                window.location.href='index.php';
            </script>
            
            ";

        }
        else{
  
        $_SESSION['cart'][]=array('productName'=>$product_name,'productPrice'=>$product_price,'productQuantity'=>$product_quantity);


        }
        if($product_category=='Home'){
            header('location:index.php');
        }
        else if($product_category=='Mobile'){
            header('location:mobiles.php');
        }
        else if($product_category=='Laptop'){
            header('location:laptops.php');
        }
        else if($product_category=='Bag'){
            header('location:bags.php');
        }



    }


    if(isset($_POST['remove'])){

        foreach($_SESSION['cart'] as $key => $value){

            if($value['productName']===$_POST['item']){
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']); //to arrange value again from zeors
                header('location:viewcart.php');
            }

        }

    }
}

else{
    header('location:form/login.php');
}



?>