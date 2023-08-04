<?php

    //signup

    if(isset($_POST['signin'])){


        $user_name=$_POST['username'];
        $user_email=$_POST['email'];
        $user_mobile=$_POST['mobile'];
        $user_pass=$_POST['password'];


        include '../config.php';


        $dub_name=mysqli_query($con,"SELECT * FROM `tbluser` WHERE uname='$user_name'");
        $dub_email=mysqli_query($con,"SELECT * FROM `tbluser` WHERE uemail='$user_email'");

        if(mysqli_num_rows($dub_name)){

            echo"

                <script>

                    alert('Username already taken');
                    window.location.href='register.php';

                </script>
            
            ";

        }
        if(mysqli_num_rows($dub_email)){

            echo"

                <script>

                    alert('Email already taken');
                    window.location.href='register.php';

                </script>
            
            ";

        }
        else{

            mysqli_query($con,"INSERT INTO `tbluser`(`uname`, `uemail`, `umobile`, `upassword`) VALUES ('$user_name','$user_email','$user_mobile','$user_pass')");

                        echo "
                        <script>
                            alert('Registered Successfully!');
                            window.location.href='login.php';
                        </script>
                    ";

        }


   


    }


    // login










?>