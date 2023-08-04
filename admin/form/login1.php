
<?php

$con=mysqli_connect('localhost','root','','ecommerce');

$a_username=$_POST['username'];
$a_password=$_POST['userpass'];


$result=mysqli_query($con,"SELECT * FROM `admin` WHERE username='$a_username' AND userpass='$a_password' ");

session_start();

if(mysqli_num_rows($result)){


  $_SESSION['admin'] =  $a_username;



    echo"

    <script>
        alert('Login Successfully!');
        window.location.href='../mystore.php';
    </script>
    ";
}
else{
    echo"
    <script>
        alert('Invalid username or password');
        window.location.href='login.php';
    </script>
    ";
}

?>