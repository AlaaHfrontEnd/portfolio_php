<?php

class user{

    function connection(){
        return  mysqli_connect("localhost", "root", "", "fs8_proj1");
    }

    function addNewUser($name, $email, $password){

    
        $sql = "INSERT INTO `user` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
        mysqli_query($this->connection(), $sql);
    
        $res = mysqli_affected_rows($this->connection());
        if($res==1){
            return true;
        }else{
            return false;
        }
    }

    
    function login($email, $password){
        
        
        $sql = "SELECT * FROM `user` WHERE `email`='$email' && `password`='$password'";
    
        $q = mysqli_query($this->connection(), $sql);

    $res = mysqli_fetch_assoc($q);

    return $res;


    
    
    }

}

$add_new_user = new user();
$login = new user();


