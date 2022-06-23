<?php include "navbar.php";?>
<?php
include ("dbconnect.php");
if(isset($_GET['prod'])){
  $selectdata ='SELECT * FROM produit INNER JOIN gallerie ON produit.idProduit=gallerie.idProduit  WHERE  produit.idCategorie = '.$_GET['prod'];
}else {
$selectdata ="SELECT * FROM produit INNER JOIN gallerie ON produit.idProduit=gallerie.idProduit";
}
$rel= mysqli_query($db,$selectdata);
if($rel->num_rows>0){

}
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
    <link href="stylepr.css" rel="stylesheet">
</head>
<body>
    <header>
      <div class="headerpic">
        <h1 class="headh1">discover</h1><br><h1 class="headh2">our cellection</h1>
    </div>
    </header>
    <main>
      <div class="filtrediv">
        <h1>chaussures de football</h1>

<input class="btn btnfiltre all" type="button" value="ALL" onclick="changeItems(i=0)">
<input class="btn btnfiltre"  type="button" value="NIKE" name="prodId" onclick="changeItems(i=2)">
<input type="hidden" id="hidden" value="" name="prodId">
<input class="btn btnfiltre"  type="button" value="ADDIDAS" name="prodId"  onclick="changeItems(i=1)">
<input class="btn btnfiltre" type="button" value="PUMA" name="prodId" onclick="changeItems(i=3)">
</div>
<script>
  function changeItems(elem){
    if (i === 0){
     url  = 'products.php';
    }else {url = "products.php?prod="+elem}
    window.location.replace(url);
  }
</script>
        <!-- firstrow -->
        <div class="row">
        <?php 
            while($row= $rel ->fetch_assoc()){
            
          echo '
          <div class="col-sm-3">
      <div class="card card-img-top" >
        <div class="card-body">
          <div class="d-flex" >
            <div class="vr"></div>
          </div>
            <div class="textcard">
          <h3 class="card-title">'.$row["libelle"].'</h3>
          <p class="card-text">'.$row["prix"].' DH</p>
            </div>
          <a href="detailProduit.php?id='.$row["idProduit"].'"><img class="boot" src="assets/'.$row["photo_1"].'"></a>
        </div>
      </div>
    </div>';
  }
    ?>
             <!-- firstad -->
             <div class="addiv"></div>
    </main>
    <script>



$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var brand = get_filter('brand');
        var ram = get_filter('ram');
        var storage = get_filter('storage');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, ram:ram, storage:storage},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:1000,
        max:65000,
        values:[1000, 65000],
        step:500,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>
<?php include "footer.php";?>
</body>
</html>