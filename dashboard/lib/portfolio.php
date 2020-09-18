<?php

function addNewPro($img, $desc, $user_id){

    $con = mysqli_connect("localhost", "root", "", "fs8_proj1");

    $sql = "INSERT INTO `portfolio` (`img`, `description`, `user_id`) VALUES ('$img', '$desc', '$user_id')";
    mysqli_query($con, $sql);

    $res = mysqli_affected_rows($con);
    if($res==1){
        return true;
    }else{
        return false;
    }
}



function getPortfolios(){
    $con = mysqli_connect("localhost", "root", "", "fs8_proj1");

    $sql = "SELECT * FROM `userportfolio` ";
    $q =  mysqli_query($con, $sql);

    $projects = [];
    while($res = mysqli_fetch_assoc($q)){
        $projects[] = $res;
    }
    return $projects;
}

function deletePro($pro_id){

    $con = mysqli_connect("localhost", "root", "", "fs8_proj1");

    $sql = "DELETE FROM `portfolio` WHERE `id` = $pro_id";
    mysqli_query($con, $sql);

    $res = mysqli_affected_rows($con);
    if($res==1){
        return true;
    }else{
        return false;
    }
}


function getPortfolioById($id){
    $con = mysqli_connect("localhost", "root", "", "fs8_proj1");

    $sql = "SELECT * FROM `userportfolio` WHERE `id` = $id ";
    $q =  mysqli_query($con, $sql);

   
    $res = mysqli_fetch_assoc($q);
      
    return $res;
}

function updatePro($id, $desc, $img){

    $con = mysqli_connect("localhost", "root", "", "fs8_proj1");

    $sql = "UPDATE `portfolio` SET `description` = '$desc'";
    if(!empty($img)){
        $sql .= ",`img` = '$img'";
    }
    $sql .= "WHERE `id` = $id";
 
    mysqli_query($con, $sql);

    $res = mysqli_affected_rows($con);
    if($res==1){
        return true;
    }else{
        return false;
    }
}