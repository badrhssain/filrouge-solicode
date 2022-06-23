<?php include('dbconnect.php');
session_start();
// $idproduit = $_GET["id"];
// $selectData="SELECT *  FROM produit  WHERE idProduit=$idproduit";
// $selectData2="SELECT * FROM gallerie WHERE idProduit =$idproduit";
// $rel = mysqli_query($db,$selectData);
// $rel2 = mysqli_query($db,$selectData2);


  

        
        echo' 
        <div class="bigdiv">
        <div class="leftdiv">
        <img class="boot" src="assets/'.$_SESSION["image"].'"<br>
        </div>

        <div class="rightdiv">
        <h2 >'.$_SESSION["libelle"].'</h2>
        <h5 class="libelleProduit txt">'.$_SESSION["prix"].' $</h5>
        <h2 >Telephone:'.$_SESSION["telephone"].'</h2>
        <h2 >Commande owner:'.$_SESSION["nomcomplete"].'</h2>
        <h2 >Email:'.$_SESSION["email"].'</h2>
        </div></div>';
        
        
        
        if(isset($_POST['submit'])){
          $AdressLivraision = $_POST["AdressLivraision"];
          $Datedecommande = $_POST["Datedecommande"];
  
            //take the clientid with session
          $IdClient=$_SESSION["IdClient"];
  
          $detailCommande = "INSERT INTO `commande` (`idCommande`, `idClient`, `dateDeLivraision`, `adresseLivraison`) VALUES ('', '$IdClient', '$Datedecommande', '$AdressLivraision');
          ";
  
          mysqli_query($db,$detailCommande);
          echo "<script type='text/javascript'>alert('votre commande a été envoyée');</script>";
          }?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <title>checkout</title>
    <link href="checkout.css" rel="stylesheet">
</head>
<body>


<form action="" method="POST">
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="AdressLivraision" placeholder="1234 Main St">
  </div>
  <div class="col-md-12">
    <label for="inputCity" class="form-label">Date</label>
    <input type="date" class="form-control" id="inputCity"  name="Datedecommande">
  </div><br>
  <button type="submit" class="btn19" name="submit" class="btn">Submit</button>
        </form>
</body>
</body>
</html>