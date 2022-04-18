<?php 
    include('add_comptes.php');
    
   class ShowUser_id extends Edit
   { public $contact_e;
       function get_data()
       {
        $edit=new Edit();
        $edit->set_id($_GET['id']);
        $getid=$edit-> get_id();
     
        $sql="SELECT * FROM add_contact WHERE id= $getid";
        $result=$this->connect()->query($sql);
        return $result->fetch_assoc();
       }
   
   }
 
    if(isset($_POST['save']))
    {
        $contact=new Edit();
        $contact->set_id($_GET['id']);
       
        $contact->set_email($_POST['email']);
        $contact->set_phone($_POST['phone']);
        $contact->set_name($_POST['name']);
        $contact->set_address($_POST['address']);
        $contact->set_contact_edit();
        
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Page des contacts</title>
</head>
<body>
    <nav class="navbar navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand " style="color:white;" href="#">Contact list</a>
            <a class="navbar-brand " style="color:gray;" href="#"> Login</a>

        </div>
    </nav>
   
 <div class="container">
 <form  style="max-width:800px;" id="form" method="POST" class="container">
 <h1 class="text-start fs-3 mt-5">Add contact</h1>
    <div class=" row  g-3 ">
        <div class="col-md-6">
        <label for="name" class="form-label mt-2">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="<?php $name=new ShowUser_id(); $name->get_data(); $test=$name->get_data(); echo  $test['nom'];?>" placeholder="Enter name" >
        <span id="msg_nom">

       </span>  
      </div>
        
        <div class="col-md-6">
        <label for="phone" class="form-label mt-2">Phone</label>
        <input type="text" name="phone" class="form-control" value="<?php $name=new ShowUser_id(); $name->get_data(); $test=$name->get_data(); echo  $test['phone'];?>" id="phone" placeholder="Enter phone">
        </div>
        <span id="msg_phone">

       </span> 
    </div>

    
    
    <div class="mt-2">
      <label for="email" class="form-label mt-2">Email</label>
      <input type="text" name="email" class="form-control" value="<?php $name=new ShowUser_id(); $name->get_data(); $test=$name->get_data(); echo  $test['email'];?>" id="email" placeholder="email">
    </div>
     <span id="msg_email">

        </span>
    <div class="mt-2">
      <label for="address" class="form-label mt-2">Address </label>
      <input id="address" name="address" class="form-control" value="<?php $name=new ShowUser_id(); $name->get_data(); $test=$name->get_data(); echo  $test['address'];?>" aria-label="With textarea"placeholder="Enter address" ></input>
    </div>
    
   
    
    <div class="mt-2">
      <button type="submit" id="button" name="save" style="background-color:#440DDC;" class="btn btn-primary">Save</button>
    </div>
  
  </form>
 </div>
      
     
<?php 
  
  

?>
 
 
   
    
<script src="validation_add_contact.js" ></script>
<script src="https://kit.fontawesome.com/08babc9809.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
    
</body>
</html>