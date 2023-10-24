<?php 

    include "pdo.php";

    function user_login($username, $pw){
        $sql = "Select * from user where username = $username and pw = $pw";
        return  pdo_query($sql);
    }

    function user_signUp($username, $email, $tel, $pw){
        $sql = "INSERT INTO `user`( `user_name`, `user_email`, `user_pw`,  `user_tel`) VALUES ('$username','$email','$pw','$tel')";
        pdo_execute($sql);
    }
