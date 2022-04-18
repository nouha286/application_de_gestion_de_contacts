<?php 
    include('add_comptes.php');
    if(isset($_POST['save']))
            {
                $inscription=new Compte();
                

                $inscription->set_users($_POST['username']);
                $inscription->set_pass(md5($_POST['password']));
                $inscription->set_data();
               
            }
            
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Page d'inscription</title>
</head>
<body>
    <nav class="navbar navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand " style="color:white;" href="#">Contact list</a>
            <a class="navbar-brand " style="color:gray;" href="page_connexion.php"> Login</a>

        </div>
    </nav>
    <h1 class="text-center fs-3 mt-5">Sign up</h1>

    <form class="container" id="form" onsubmit="return valid();"  style="width:400px;" method="POST" >
        <div class="mb-3 ">
            <label for="exampleInputEmail1"  class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
        </div>
        <span id="user">

        </span>
        <div class="mb-3">
            <label for="exampleInputPassword1"  class="form-label" >Password</label>
            <input type="text" class="form-control" id="password" name="password"  placeholder="Password" id="exampleInputPassword1">
        </div>
        <span id="pass">

        </span>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" >Password verify</label>
            <input type="text" class="form-control" id="v_pass" name="v_pass"  placeholder="Password verify" id="exampleInputPassword1">
        </div>
        <span id="verify">

        </span>
        
        <div class="d-grid gap-2">
            <button class="btn btn-primary" name="save" id="boutton" style="background-color:#440DDC;" type="submit">Login</button>  
            <p class="mt-2">Already have an account? <a href="page_connexion.php" style="color:#8F59FF; text-decoration:none;">Login</a> here.</p>
        </div>
</form>


    <script src="validation.js" ></script>

    
</body>
</html>