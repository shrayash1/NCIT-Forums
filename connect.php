<?php 
    $database = array(); 
    $database['host'] = "localhost";
    $database['port'] = '3306';
    $database['name'] = "forum";
    $database['username']  = "root";
    $database['password'] = "";
 
    $link = mysqli_connect($database['host'], $database['username'], $database['password']);
 
    if($link){
        
        echo "Succesfully connected:".$database['name']."</br>";
    }
    else{
        echo " You Have Entered Incorrect Password";
    
    }
?>