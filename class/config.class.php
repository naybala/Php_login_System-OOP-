<?php
class Database {
        public $connection;
           public function db_connect(){
             $this->connection = mysqli_connect('localhost', 'root','','login_oop');//db _name should be login_oop
             if(mysqli_connect_error()){
              die(" Connect Failed ");
            }
            
       }
       
       public function check($conn){
           $test= mysqli_real_escape_string($this->connection,$conn);
                 return $test;
          }

}

$db = new Database();
echo $db->db_connect();

// Check Error (http://localhost/php/Php_login_System(OOP)/config/config.php)