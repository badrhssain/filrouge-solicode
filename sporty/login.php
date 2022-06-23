
<?php
session_start();
require('dbconnect.php');

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pwd = sha1($_POST ['Motdepasse']);
    $sql = "SELECT * FROM client WHERE email='$email' AND Motdepasse='$pwd'";
    
    $result = mysqli_query($db, $sql);
    if(mysqli_num_rows($result) > 0)
    {
        foreach($result as $resulte){
            $_SESSION["nomcomplete"]=$resulte["nom"] ." " . $resulte["prenom"];
            $_SESSION["IdClient"]=$resulte["idClient"];
            $_SESSION["email"]=$resulte["email"];
            $_SESSION["telephone"]=$resulte["telephone"];
        }
        
    echo '<div class="alert alert-warning" role="alert">
    COMMANDE IS INSERT SUCCESSFULLY ✔. CHECK THE DATABASE !
    </div>';
    header("location:index.php");
    
    
    }else{
             echo 'incorrect password or email!';
    }
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sporty</title>
    <link rel="icon" type="image/png" href="assets/logo.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link href="loginstyle.css" rel="stylesheet">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="littlelogin">
        <img class="logo" src="assets/logo.png">
        <h1>Welcome Back!</h1>
        <form method="POST" action="">
        <input type ="text" name="email" class="email" placeholder="Username:" required><br>
        <input type ="password" name="Motdepasse" class="password" placeholder="Password:" required><br>
        <button class="btn" type="submit" name="submit">Login</button><br>
        <p class="p">Dont  have and account?<a href="signup.php">Register</a></p>
    </div>
</body>