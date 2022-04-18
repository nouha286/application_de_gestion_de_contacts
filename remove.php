<?php

include('add_comptes.php');
   class ShowUser_id_remove extends Edit
   { public $contact_e;
       function get_data()
       {
        $edit=new Edit();
        $edit->set_id($_GET['id']);
        $getid=$edit-> get_id();
     
        $sql="DELETE FROM add_contact WHERE id=  $getid";
        $result=$this->connect()->query($sql);
      if($result)  header('location: page_contact.php');
       }
    
   }
   $remove=new ShowUser_id_remove();
   $remove->get_data();
   ?>