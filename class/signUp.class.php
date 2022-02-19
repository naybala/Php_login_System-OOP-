<?php
include "config.class.php";
class SignUp extends DataBase{

 

     protected function setUser($name,$email,$password){
        $hashPassword = password_hash($password,PASSWORD_DEFAULT);
        global $db;
        $query = "INSERT INTO user_table (user_name,user_email,user_password) VALUES ('$name','$email','$hashPassword')";
        // $insertData = mysqli_query($db->connection,$query);
        mysqli_query($db->connection,$query);
        // $dtrowUser = mysqli_fetch_assoc($insertData);

      
      
       
}
    protected function checkUserSame($email){
        global $db;
        $query = "SELECT * FROM user_table WHERE user_email = '$email';";
        $checkSame = mysqli_query($db->connection,$query);
        $duplicate = mysqli_num_rows($checkSame);
    
       $resultcheck = null;
       if($duplicate > 0) {
        $resultcheck = false;
          }else {
        $resultcheck = true;
        }
        return $resultcheck;
    }
}