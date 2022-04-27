<?php

include('add_comptes.php');
 
        $remove=new Contact();
        $remove->set_id($_GET['id']);
        $getid=$remove-> get_id();
     
        $sql="DELETE FROM add_contact WHERE id=$getid";
        $result=$remove->connect()->query($sql);
      if($result)  header('location: page_contact.php');
  
   ?>