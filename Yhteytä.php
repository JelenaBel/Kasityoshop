
<?php 
session_start();
?>
<!DOCTYPE html>


<html>
<head>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="CSSKasityoshop.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Handy shop</title>

</head>
<body>
    <div class = "mainHeader">
	
        <h1>Handy shop</h1>
        
        </div>
	
	<section class="sectionMenu">
	

<div  class="topnav" id="myTopnav">
	<a  href="KasityoshopFrontPage.html">
	Etusivu
</a>

<a  href="CatalogKasityoshop.html">
	Online-shop
</a>



<a  href="Myyjalle.php">
	Myyjälle
</a>

<a  href="Tietoa-meista.php">
	Meistä
</a>

<a href="Yhteytä.php">
	Yhteyttä
</a>
<a id = "rekisteroidu" href="Kirjaudu.php">
	Kirjaudu 
	</a>
	<a href="javascript:void(0);" class="icon" onclick="myFunction()">
		<i class="fa fa-bars"></i>
	  </a>
	
	
	  <a class = "iLoveMyBasket" href = "ShoppingCard.php"><i class="fa fa-shopping-basket" style="font-size:25px;color:black; position: relative; padding-top: 0px; padding-left: 0px;" ></i></a>
	  <?php
     if (isset($_SESSION['currentUserNameMyyjat'])) {
  echo "<a  href='AddProduct.php'>Add Product</a>";
  echo "<a href='OmaProfiliini.php'>Oma Profiliini</a>";

}else
if (isset ($_SESSION['currentUserName'])){
echo "<a href='OmaProfiliini.php'>Oma profiilini</a>";
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

<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>


<br><br>
	<h2 class = "headerCatalog">Yhteyttä</h2>
    <div class= "tietoaMeistaFrontPage">
	<div class = "tietoaMeistaImage">
		<img class = "display-imgtietoa" src="Yhteytta.jpg"  >
	</div>

	
	
	
	 <div class = "tietoaBody">
	
	<h2 class= "titleTietoa">  Voit ottaa meihin yhteyttä </h2><br>
	
	<h2 class= "titleTietoa">  * puhelimitse +(358)401775601.</h2><br>
	
	<h2 class= "titleTietoa">  * sähköpostitse: obyelousova@gmail.com</h2><br>
	
	<h2 class= "titleTietoa">   * alla olevalla lomakkeella </h2>
    <br>
        <h2 class= "titleTietoa">Anna palautetta: </h2>
        <br>
        
        <input type = "text" class="registerLomake" placeholder = "Nimi" name ="Nimi" required>
       <br>   
       <br>   
       <input type = "text" class="registerLomake" placeholder = "E-mail" name ="Sähköpostiosoite" required>
       <br>
       <br>
       <textarea class="registerLomake" placeholder = "Anna palaute" name = "annapalautetta" rows = "3" cols = "60" required></textarea>
       
       <br>

       <input type = "button" class = "buttonmenulaheta" name = "Lähetä" value = "Lähetä">
	
</div>



	</body>