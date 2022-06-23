<?php include('dbconnect.php');
session_start();
$idProduit =$_GET['id'];
$selectData="SELECT *  FROM produit  WHERE idProduit ='$idProduit'";
$selectData2="SELECT * FROM gallerie WHERE idProduit ='$idProduit'";
$rel = mysqli_query($db,$selectData);
$rel2 = mysqli_query($db,$selectData2);
if($rel -> num_rows>0){};
if($rel2 ->num_rows>0){}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sporty</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="detailstyle.css" rel="stylesheet">
</head>
<body>
<main>

    <div class="bigdiv shadow-lg ">
      <?php 
      while($row2=$rel2 ->fetch_assoc()){
        $_SESSION["image"]=$row2["photo_1"];

        echo' 
        <div class="leftdiv">
        <img class="boot" src="assets/'.$_SESSION["image"].'"<br>';

    
        }
         while($row =$rel -> fetch_assoc()){
          $_SESSION["IdProduit"]=$row["idProduit"];
          $_SESSION["libelle"]=$row["libelle"];
          $_SESSION["prix"]=$row["prix"];
          
          echo'   
        <p>'.$row["description"].'</p></div>
        <div class="rightdiv">
            <h2 >'.$row["libelle"].'</h2>
            <h5 class="libelleProduit txt">'.$row["prix"].' $</h5>
              
              
              <h5 class="txt">Select Size</h5>
              <div>
                <a class="btn size">38</a>
                <a class="btn size">39</a>
                <a class="btn size">40</a><br>
                <a class="btn size">41</a>
                <a class="btn size">42</a>
                <a class="btn size">43</a>
              </div>  
            <h5 class="quantite txt">Select QUANTITE</h5>
              <div class="wrapper">
                <span class="minus">-</span>
                <span class="num">01</span>
                <span class="plus">+</span>
              </div>
              <p class="delivery"><a class="deliveryicon"><img src="assets/truckicon.svg"></a>   Free delivery all over Morocco</p>
              <a href="checkout.php?id='.$row["idProduit"].'" name="addToCard" class="btn btn1">Add to card</a>
              </div>'; }?>     
    </div>

    </div>
  </div>
</div>
</div>
</main>
    <script>
        const plus = document.querySelector(".plus"),
         minus = document.querySelector(".minus"),
         num = document.querySelector(".num");
         let a = 1;
         plus.addEventListener("click", ()=>{
           a++;
           a = (a < 10) ? "0" + a : a;
           num.innerText = a;
         });

         minus.addEventListener("click", ()=>{
           if(a > 1){
             a--;
             a = (a < 10) ? "0" + a : a;
             num.innerText = a;
           }
         });

       </script> 
       <!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>