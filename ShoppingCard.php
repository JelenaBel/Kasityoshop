<?php
session_start();

$basket = $_SESSION['products_basket'];

?>

<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="CSSFlexBox1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Puutarha Nelikka</title>

</head>
<body>
	<section class="sectionMenu">
	<div class = "mainHeader">
	
<h1>Puutarha Neilikka</h1>
</div>

<div  class="topnav" id="myTopnav">
	<a  href="Neilikka-front-page.html">
	Etusivu
</a>

<a  href="Tuotteet.html">
	Tuotteet
</a>

<a  href="Myymälät.html">
	Myymälät
</a>

<a  href="Tietoa-meista.html">
	Tietoa meistä
</a>

<a href="Ota-yhteytä.html">
	Ota yhteyttä
</a>
<a id = "rekisteroidu" href="Kirjaudu.php">
	Kirjaudu 
	</a>
   
    
    
	<a href="javascript:void(0);" class="icon" onclick="myFunction()">
		<i class="fa fa-bars"></i>
	  </a>
	
	
      <a class = "iLoveMyBasket" href = "ShoppingCard.php"><i class="fa fa-shopping-basket" style="font-size:25px;color:black; position: relative; padding-top: 0px; padding-left: 0px;" ></i></a>

      <?php
    if(!$_SESSION['currentUserName']='' && !$_SESSION['currentUserName']=NULL){
        echo '<a id = "rekisteroidu" href="AddProduct.php">
        Add Product 
        </a>';
                    echo '<a id = "rekisteroidu" href="OmaProfiliini.php">
                    Oma Profiliini 
            </a>';
        }
        ?>
</div>
<script>
	function myFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
		x.className += " responsive";
	  } else {
		x.className = "topnav";
	  }
	}
	</script>

</section>
<h2 class = "headerMyymälät">Shopping card</h2>
<section class = "sectionMyymälät">

<table class="registerLomake">
    <tr>
        <td class="registerLomake">Product name</td> 
        <td class="registerLomake"> Picture </td> 
        <td class="registerLomake"> Hinta</td>
        <td class="registerLomake"> Delivery costs</td>
        <td class="registerLomake"> KPL</td>
        <td class="registerLomake"> Total Price</td></tr>
        <?php
        $mysqli = new mysqli("localhost","root","","puutarhanelikka");
        foreach ($_SESSION['products_basket'] as $row){

        
$query = "SELECT `id_tuotteet`, `name_tuotteet`, `image_tuotteet`, `description_tuotteet`, 
`category_tuotteet`, `price`, `deliveryCosts`, `deliveryTime` FROM `tuotteet` WHERE `id_tuotteet` = '$row'";
$result = $mysqli->query($query);
 
   if ( $mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
   }

   if (!$mysqli -> query($query)) {
    echo("Error description: " . $mysqli -> error);
    }

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
    echo  '<tr>
    <td class="registerLomake">'.$row["name_tuotteet"].'</td> 
    <td class="registerLomake"><img class = "display-img" width= "100px" src="Upload/'.$row["image_tuotteet"].'"></td> 
    <td class="registerLomake">'.$row["deliveryCosts"].'</td>
    <td class="registerLomake">'.$row["deliveryTime"].'</td></tr>';
    
}
}
        }
        ?>
        </table>
        </section>