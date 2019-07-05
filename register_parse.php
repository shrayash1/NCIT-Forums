<?php
     include("connect.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO forum.users(user_name, user_pass)
            VALUES ('$username','$password');
            ";
    $res = mysqli_query($link,$sql);

    if($res){
        echo "Successfully registered as :".$username;
    }
    else{
        echo "Failed to register ,please try again";
        //echo "Mysql Error :".mysql_error();
    }
?>