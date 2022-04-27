
<?php include('add_comptes.php');
      include('test_session.php');
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
            <a class="navbar-brand  " style="color:gray;" href="#"> <?php  echo $_SESSION['name']; ?></a>
            <a class="navbar-brand " style="color:gray;" href="page_contact.php"> Contacts</a>
            <a class="navbar-brand " style="color:gray;" onclick="return logout();" href="logout.php"> Logout</a>
            </div>
           

        </div>
    </nav>
   
 <div class="container" style="overflow-x:auto;">
 
 <table class="table table-dark table-hover mt-5"  >
 <thead>
    <tr>
      <th scope="col">username</th>
      <th scope="col">Signup date</th>
      <th scope="col">Last login</th>
    </tr>
  </thead>
  <tbody>

  <?php


              $contact=new Database();
            
                $id=$_SESSION['id'];
                $sql="SELECT date_inscription FROM compte_utilisateurs WHERE id='$id'";
                $result=$contact->connect()->query($sql);
               
                $r= $result->fetch_assoc(); 
               
  
                
                  echo'<tr>
                  <td>'.$_SESSION['name'].'</td>
                  <td>'.$r['date_inscription'].'</td>
                  <td>'.$_SESSION['date'].'</td>
                 </tr>';
 

  ?>
   
  </tbody>
</table>
</div>





 
 
   
    
<script src="validation_add_contact.js" ></script>
<script src="https://kit.fontawesome.com/08babc9809.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
    
</body>
</html>