<?php

include ('../../config/database.php');
$fname    =$_POST['f_name'];
$lname    =$_POST['l_name'];
$email    =$_POST['e_mail'];
$password =$_POST['passw'];
$enc_pass = md5($password);

$sql_validate_email = "SELECT COUNT (email) as total FROM users WHERE email = '$email' LIMIT 1";
$res = pg_query ($conn, $sql_validate_email );

if($res){   
    $row = pg_fetch_assoc($res);
    if($row ['total']> 0){
        echo "Email already exist";
    }else{
       $sql = "INSERT INTO users (firstname, lastname,email, password)
            VALUES ('$fname','$lname','$email','$enc_pass') 

            ";

            $res = pg_query ($conn, $sql);

            if ($res){
                echo "<script>alert('user has been created. Go to login!')</script>";
                header ('refresh:0; url =http://localhost/schoolar2/src/login.html');
            }else{
                echo "error";
            }
        }
    }
?>