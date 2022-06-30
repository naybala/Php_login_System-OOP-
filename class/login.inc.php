<?php
include "loginController.class.php";
  if(isset($_POST['btnLogin'])){

    // Get The Data Form The Input
    $email = $_POST['email'];
    $password = $_POST['password'];  
    $obj = new LoginController( $email, $password);
    $obj->loginUser();
    if($obj){
      echo '<div class="alert alert-success">
            Login Success.. 
            <button class="btn btn-primary"><a href="../../../home_page.php" class="text-white">Back</a></button>
            </div>';
    }else{
        echo '<div class="alert alert-danger"> Failed....Operation </div>';
     }


    //Route To The Back Page
   
}