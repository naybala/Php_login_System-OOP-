<?php
include "login.class.php";

class LoginController extends Login{
    private $email,
            $password;     
    public function __construct($email,$password,)
    {
        $this->email =$email;
        $this->password =$password;
    }
    
    public function loginUser() {
        if($this->checkUser()==false){
            //echo "User Name Or Password Already Taken
            echo '<div class="alert alert-danger"> Failed....User Not Found </div>';
            exit();
        }
    }

    private function checkUser(){
        $result = '';
        if(!$this->getUser($this->email,$this->password)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
}