<?php
session_start();
require ("dbconnect.php");

if(isset($_POST['submit'])){

  $email = $_POST["email"];
  $sql = "SELECT email FROM client WHERE email ='$email'";
  $result= mysqli_query($db,$sql);
  if(mysqli_num_rows($result)>0){
    echo '<div class="alert alert-danger" role="alert">
    Cet compte est existe!
  </div>';
  } else
       {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $number = $_POST["telephone"];
        $email = $_POST["email"];
        $password = sha1($_POST["Motdepasse"]);
        $_SESSION["nomcomplete"]=$nom ." " . $prenom;
        $_SESSION["email"]=$email;
        $_SESSION["telephone"]=$number;

       $detailClient = "INSERT INTO client (nom, prenom, telephone, email, Motdepasse)
            VALUES ( '$nom','$prenom','$number','$email','$password');";
            mysqli_query($db,$detailClient);
            header ("location: index.php");


       }}
       ?>
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
    <link href="signupStyle.css" rel="stylesheet">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>

    <div class="littlelogin">
        <div class="leftside">
        <h1>Please Fill out form to Register!</h1>
        <form method="POST" action="">
        <label>First name</label><br>
        <input type ="text" name="nom" class="email" required><br>
        <label>Last name</label><br>
        <input type ="text" name="prenom" class="password" required><br>
        <label>Telephone</label><br>
        <input type ="number" name="telephone" class="email" required><br>
        <label>Email</label><br>     
        <input type ="email" name="email" class="password" required><br>
        <label>Password</label><br>     
        <input type ="password" name="Motdepasse" class="password" required><br>
        <button class="btn" name="submit" type="submit">Register</button><br>
        <p class="p">Yes i have an account?<a href="login.php"> Login </a></p>
    </div>
    <div class="rightside">
        <img class="boot" src="assets/unscreen.gif">
    </div>
    </div>

</body>