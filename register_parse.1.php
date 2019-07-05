<?php
     //include("connect.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $MIN_LENGTH = 8;
    
    
    
    global $link;
    //This conditions works
    function InvalidCharacter($text){
        return (bool) preg_match('/[!@#$%^&*()+=-_*|\;{},.~!`]/u',$text);
    }
    if( $username =="" || $password == ""){
        echo "Username and password Field must be filled in.";
    }else{
        if(InvalidCharacter($username)){
            echo "Username can only contain letters [a-z A-Z] and number from [0-9]";
        } else {
            if( strlen($password ) >= $MIN_LENGTH ){
                //insert user and password INTO DATABASE but doesn't work when pasted ??fix
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
            } else {
                echo "please enter password with minimum lenght of 8 character";
            }
        }
    }
    
    
    //This works without condition(remove from comment and put above condition in comment section )
    /*
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
        }*/
?>