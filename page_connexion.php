<?php 
    include('add_comptes.php');
    $alert='';
    if (isset($_POST['login']) && isset($_POST['user']) && isset($_POST['pass']) )
    {
        $connection=new Compte();
                
             
                $connection->set_users($_POST['user']);
                $connection->set_pass($_POST['pass']);  
               
                $sql="SELECT * FROM compte_utilisateurs WHERE username='$connection->user' AND password='$connection->password' ";
                $result=$connection->connect()->query($sql);
                $res= $result->fetch_assoc();
                $numRows=$result->num_rows;
                if($numRows!=0)
                {   header('location: page_contact.php');
                    session_start();
                    $_SESSION['date']=date('l j F Y, H:i');;
                    $_SESSION['name']=$connection->user;
                    $_SESSION['id']=$res['id'];
                    $alert='';
                }
                 
                
                else 
                {
                    
                    $alert= '<div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                        <div>
                         vos information sont incorrects veuillez vérifiez votre nom ou mot de passe!! 
                        </div>
                    </div>';
                    
                   
echo md5($_POST['pass']);
                }
               
    }
    
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Page de connexion</title>
</head>
<body>

    <nav class="navbar navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand " style="color:white;" href="#">Contact list</a>
            <a class="navbar-brand " style="color:gray;" href="page_connexion.php"> Login</a>

        </div>
    </nav>
    <h1 class="text-center fs-3 mt-5">Authenticate </h1>

    <form class="container" style="width:400px;"  id="formulaire_conn" method="POST">
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" name="user" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Username">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1"  class="form-label" >Password</label>
            <input type="text" name="pass" class="form-control"  placeholder="Password" id="exampleInputPassword1">
        </div>
        
       <div> <?php echo $alert; ?></div>

        <div class="d-grid gap-2">
            <button class="btn btn-primary" name="login" style="background-color:#440DDC;" id="button_conn" type="submit">Login</button>  
            <p class="mt-2">No account? <a href="page_inscription.php" style="color:#8F59FF; text-decoration:none;">Sign up</a> here.</p>
        </div>
</form>
    
<script src="validation_connexion.js">
    
</script>
    
</body>
</html>