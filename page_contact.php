<?php 
    include('add_comptes.php');
    include('test_session.php');
    if(isset($_POST['save']))
    {
        $contact=new Contact();
        
         session_start();
        $contact->set_email($_POST['email']);
        $contact->set_phone($_POST['phone']);
        $contact->set_name($_POST['name']);
        $contact->set_address($_POST['address']);
        $contact->set_id($_SESSION['id']);

        $contact->set_contact();
        
        
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
            <div class="justify-content-end">
            <a class="navbar-brand  " style="color:gray;" href="page_profil.php"> <?php  echo $_SESSION['name']; ?></a>
            <a class="navbar-brand " style="color:gray;" href="page_contact.php"> Contacts</a>
            <a class="navbar-brand " id="logout" style="color:gray;" onclick="return logout();" href="logout.php"> Logout</a>
            </div>
           

        </div>
    </nav>
   
 <div class="container" style="overflow-x:auto;">
 
 <table class="table table-dark table-hover mt-5">
 

  <?php
  
          class ViewContact extends User 
        {
            function showAllContact()
            {
                $datas=$this->getAllContact();
                // var_dump($datas);
                if($datas)
                {echo '
                  <thead>
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Name</th>
                      <th scope="col">Phone</th>
                      <th scope="col"> Email</th>
                      <th scope="col">address</th>
                      <th scope="col">operation</th>
                
                    </tr>
                  </thead>
                  <tbody>';
                  foreach($datas as $data)
                  {  echo'
                    <tr>
                   <th scope="row">'.$data['id'].'</th>
                   <td>'.$data['nom'].'</td>
                   <td>'.$data['phone'].'</td>
                   <td>'.$data['email'].'</td>
                   <td>'.$data['address'].'</td>
                   <td><a style="color: white; background-color:orange;" class="btn" href="page_edit.php?id='.$data['id'].'">edit</a> <a style="color: white; background-color:red;" class="btn" href="remove.php?id='.$data['id'].'">delete</a> </td>
                 </tr>
                 </tbody>'
                 ;
                   
                 }
                
                }
               
            }
        }
        $users=new ViewContact();
        $users->showAllContact();



  ?>
   
  
</table>
</div>
<div class="text-center">
      <!-- Button trigger modal -->
    <button type="button" class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#exampleModal">
      Add contact
    </button>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form  style="max-width:800px;" id="form" method="POST" class="container">
 <h1 class="text-start fs-3 mt-5">Add contact</h1>
    <div class=" row  g-3 ">
        <div class="col-md-6">
        <label for="name" class="form-label mt-2">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" >
        <span id="msg_nom">

       </span>  
      </div>
        
        <div class="col-md-6">
        <label for="phone" class="form-label mt-2">Phone</label>
        <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone">
        </div>
        <span id="msg_phone">

       </span> 
    </div>

    
    
    <div class="mt-2">
      <label for="email" class="form-label mt-2">Email</label>
      <input type="text" name="email" class="form-control" id="email" placeholder="email">
    </div>
     <span id="msg_email">

        </span>
    <div class="mt-2">
      <label for="address" class="form-label mt-2">Address </label>
      <textarea id="address" name="address" class="form-control" aria-label="With textarea"placeholder="Enter address" ></textarea>
    </div>
    
   
    
    <div class="mt-2">
      <button type="submit" id="button" name="save" style="background-color:#440DDC;" class="btn btn-primary">Save</button>
    </div>
  
  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

 
 
   
    
<script src="validation_add_contact.js" ></script>
<script src="https://kit.fontawesome.com/08babc9809.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
    
</body>
</html>