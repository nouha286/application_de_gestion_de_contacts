<?php 
    include('connexion_Mysql.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Page d'acceuil</title>
</head>
<body>
    <nav class="navbar navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand " style="color:white;" href="#">Contact list</a>
            <a class="navbar-brand " style="color:gray;" href="page_connexion.php"> Login</a>

        </div>
    </nav>

    
<div class="bg-light container" style="height: 300px ;">
<pre class="fs-1 ms-4 fw-bolder">
    
Hello!</pre>
<p class="ms-4 fs-5"><a style="text-decoration: none; " href="page_inscription.php">Sign up</a> to start creating your contacts list.</p>
<p class="ms-4 fs-5">Already have an account? <a style="text-decoration: none;" href="page_connexion.php">Login here.</a></p>
</div>
    
</body>
</html>