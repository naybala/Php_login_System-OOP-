<?php
include "config.class.php";
class Login extends DataBase{
    protected function getUser($email , $password){
         global $db;
        $query = "SELECT * FROM user_table WHERE user_email = '$email';";
        $checkSame = mysqli_query($db->connection,$query);
        $duplicate = mysqli_num_rows($checkSame);
        $fetch = mysqli_fetch_assoc($checkSame);
        $checkPs = password_verify($password,$fetch['user_password']);
       $resultcheck = null;
       if($duplicate > 0 && $checkPs == true) {
        $resultcheck = true;
          }else {
        $resultcheck = false;
        }
        return $resultcheck;
    }

   
}