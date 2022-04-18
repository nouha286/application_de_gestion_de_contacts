<?php
//----------------------------------Classe pour création de compte-------------------------//
include('connexion_Mysql.php');

class Compte extends Database

{
    public $user;
    public $password;
    public $date;
   public function set_data()
   {
   
       $sql=" INSERT INTO compte_utilisateurs VALUES(NULL,'$this->user','$this->password ',sysdate())";
       $result=$this->connect()->query($sql);
       if($result)
       {
           header('location: page_connexion.php');
       }
       else
       {
           echo "l'ajout est échoué!";
       }
   }

   function set_users($user)
   {
       $this->user=$user;
   }
   function set_pass($password)
   {
       $this->password=$password;
   }
   function get_pass()
   {
       return $this->password;
   }
   function get_users()
   {
       return $this->user;
   }
  

   
}
//-------------------------------------------Classe pour création contact--------------------------------------------------//

class Contact extends Database

{
    public $name;
    public $email;
    public $phone;
    public $address;
    public $id;
   public function set_contact()
   {  session_start();
    $connection=new Compte();
        

       $sql=" INSERT INTO add_contact VALUES('$this->name','$this->phone','$this->email','$this->address',NULL,$this->id )";
       $result=$connection->connect()->query($sql);
       if($result)
       {
           header('location: page_contact.php');
       }
       else
       {
           echo "l'ajout est échoué!";
       }
   }

   function set_name($name)
   {
       $this->name=$name;
   }
   function set_phone($phone)
   {
       $this->phone=$phone;
   }
   function set_address($address)
   {
       $this->address=$address;
   }
   function set_email($email)
   {
       $this->email=$email;
   }
   function set_id($id)
   {
       $this->id=$id;
   }
  

}

//-------------------------Classe pour affichage des contacts--------------------------------------------------//
class User extends Database
{
    function getAllContact()
    {  
        $id_f=$_SESSION['id'];
        $sql="SELECT * FROM add_contact WHERE id_user='$id_f'";
        $result=$this->connect()->query($sql);
        $numRows=$result->num_rows;
        if($numRows!=0)
        {
            while ($row=$result->fetch_assoc())
            {
               $data[]=$row; 
               return $data;
            }
            
        }
        else
        {
            echo '<div class="card container  mb-3" style="width:400px; border:2px solid red;" >
            <img src="R.jpg" class="card-img-top " alt="..."  ">
            <div class="card-body"  >
              <h5 class="card-title">No contact founded!!</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>';
            
        } 

    }
}

////////////------------------------------Classe pour modification des donnée contacts--------------------------------------------////////////








class Edit extends Database 
{
    public $name;
    public $email;
    public $phone;
    public $address;
    public $id;
   public function set_contact_edit()
   {
   
       $sql=" UPDATE add_contact SET nom='$this->name',phone='$this->phone',email='$this->email',address='$this->address' WHERE id='$this->id' ";
       $result=$this->connect()->query($sql);
       if($result)
       {
           header('location: page_contact.php');
       }
       else
       {
           echo "l'ajout est échoué!";
       }
   }

   function set_name($name)
   {
       $this->name=$name;
   }
   function set_phone($phone)
   {
       $this->phone=$phone;
   }
   function set_address($address)
   {
       $this->address=$address;
   }
   function set_email($email)
   {
       $this->email=$email;
   }
   function set_id($id)
   {
       $this->id=$id;
   } 
   function get_id()
   {
       return $this->id;
   } 

}
?>