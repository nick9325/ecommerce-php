
<?php
$user_name=$_POST['username'];
$user_pass=$_POST['userpass'];

include '../config.php';

$result=mysqli_query($con,"SELECT * from `tbluser` WHERE uname='$user_name' AND upassword='$user_pass'");

session_start();
if(mysqli_num_rows($result)){

    $_SESSION['user']=$user_name;
    
    echo "
    <script>
        alert('Login Successfully!');
        window.location.href='../index.php';

    </script>
    ";

}
else{

    echo"
        <script>
            alert('Incorrect username or password!');
            window.location.href='';
         </script>
    ";

}



?>