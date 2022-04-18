<?php




class Database{
 private $servername="localhost";
 private $username="root";
 private $password="";
 private $dbname="contact";

public function connect()
{
 
  $conn =new mysqli($this->servername,
                    $this->username,
                    $this->password,
                    $this->dbname);

     
   return $conn;          
}
 
  
}
$con=new Database();
$con->connect();
?>
