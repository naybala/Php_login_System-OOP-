<?php
include "signUpController.class.php";
  if(isset($_POST['btnSignUp'])){

    // Get The Data Form The Input
    $name = $_POST['fName'] .' '. $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword =$_POST['confirmPassword'];
    
  
    
    $obj = new SignUpController($name, $email, $password, $confirmPassword);
    // echo $obj->$this->name , $obj->$this->email;
    $obj->signupUser();
    if($obj != " "){
        header("location: ../login-ui/login.php");
    }else{
        echo '<div class="alert alert-danger"> Failed....Operation </div>';
     }


    //Route To The Back Page
   
}