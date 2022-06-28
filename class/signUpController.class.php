<?php
include "signUp.class.php";

class SignUpController extends SignUp{
    
    private $name,
            $email,
            $password,
            $confirmPassword;

    public function __construct($name,$email,$password,$confirmPassword)
    {
        $this->name =$name;
        $this->email =$email;
        $this->password =$password;
        $this->confirmPassword =$confirmPassword;
    }
    
    public function signupUser() {
       if($this->userNameEmailTaken()==false){
            //echo "User Name Or Password Already Taken
            echo '<div class="alert alert-danger"> Failed....Same Email </div>';
          
            exit();
        }
        if($this->passwordLength()==false){
            //echo "User passwrord must be the same
            echo '<div class="alert alert-danger"> Password Length Too Short! </div>';
          
            exit();
        }
        if($this->passwordMatch()==false){
            //echo "User passwrord must be the same
            echo '<div class="alert alert-danger"> Failed....Ps </div>';
          
            exit();
        }
        $this->setUser($this->name,$this->email,$this->password);
       
    }

      //User Password Invaild Check
      private function passwordLength(){
        $result = '';
        if(strlen($this->password) >7 && strlen($this->confirmPassword) >7){
            $result = true;
        }else{
            $result = false;
        }
        return $result;


        ///admin@gmail.com
        ///12345678
    }

    //User Password Invaild Check
    private function passwordMatch(){
        $result = '';
        if($this->password !== $this->confirmPassword){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

     //User Name Same And Email Invaild Check
     private function userNameEmailTaken(){
        $result = '';
        if(!$this->checkUserSame($this->email)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    
            
}








// include "operation.class.php";

// class OperationController extends Operation{
    
//     private $name,
//             $email,
//             $password,
//             $confirmPassword;

//     public function __construct($name,$email,$password,$confirmPassword)
//     {
//         $this->name =$name;
//         $this->email =$email;
//         $this->password =$password;
//         $this->confirmPassword =$confirmPassword;
//     }
    
//     public function signupUser() {
//         // if($this->invalidName()==false){
//         //     //echo "User Name Must Be Human Name
//         //     echo '<div class="alert alert-danger"> Failed....Name </div>';
//         //     exit();
//         // }
//         // if($this->invalidEmail()==false){
//         //     //echo "User Email Must Be Standard Format
//         //     echo '<div class="alert alert-danger"> Failed....Email </div>';
//         //     exit();
//         // }
//         if($this->passwordMatch()==false){
//             //echo "User passwrord must be the same
//             echo '<div class="alert alert-danger"> Failed....Ps </div>';
//             exit();
//         }
//         if($this->userNameEmailTaken()==false){
//             //echo "User Name Or Password Already Taken
//             echo '<div class="alert alert-danger"> Failed....Same </div>';
//             exit();
//         }
//         $this->setUser($this->name,$this->email,$this->password);
//     }

//     //User Name Invaild Check
//     // private function emptyInput(){
//     //     $result = '';
//     //     if(empty($this->name) || empty($this->email) || empty($this->password) || empty($this->confirmPassword)){
//     //         $result=false;
//     //     }else{
//     //         $result=true;
//     //     }
//     //     return $result;
//     // }

//     //User Name Invaild Check
//     private function invalidName(){
//         $result = '';
//         if(!preg_match("/^[a-zA-Z0-9]*$/",$this->name)){
//             $result = false;
//         }else{
//             $result = true;
//         }
//         return $result;
//     }
    
//     //User Mail Invaild Check
//      private function invalidEmail(){
//         $result = '';
//         if(!filter_var($this->emial,FILTER_VALIDATE_EMAIL)){
//             $result = false;
//         }else{
//             $result = true;
//         }
//         return $result;
//     }

//     //User Password Invaild Check
//     private function passwordMatch(){
//         $result = '';
//         if($this->password !== $this->confirmPassword){
//             $result = false;
//         }else{
//             $result = true;
//         }
//         return $result;
//     }

//      //User Name Same And Email Invaild Check
//      private function userNameEmailTaken(){
//         $result = '';
//         if(!$this->checkUserSame($this->email)){
//             $result = false;
//         }else{
//             $result = true;
//         }
//         return $result;
//     }

    
            
// }