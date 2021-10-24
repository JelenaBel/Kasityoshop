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
	<a  href="index.php">
	Etusivu
</a>

<a  href="CatalogKasityoshop.php">
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
echo "<a  href='Logout.php'> Logout </a>";
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

	<h2 class = "headerCatalog">Myyjalle</h2>

	
	<div class= "tietoaMeistaFrontPage">
	<div class = "tietoaMeistaImage">
		<img class = "display-imgtietoa" src="ForSellers.jpg"  >
	</div>
	
	
	 <div class = "tietoaBody">
	
	<h2 class= "titleTietoa">  A community doing good
		Etsy is a global online marketplace, where people come together to make, sell, buy, and collect unique items. We’re also a community pushing for positive change for small businesses, people, and the planet. </h2>
	<br>
	<h2 class= "titleTietoa">  Support independent creators
		There’s no Etsy warehouse – just millions of people selling the things they love. We make the whole process easy, helping you connect directly with makers to find something extraordinary.</h2>
	<br>

	<h2 class= "titleTietoa"> 
		Your privacy is the highest priority of our dedicated team. And if you ever need assistance, we are always ready to step in for support. </h2>
	<br>
	<h2 class= "titleTietoa">   Osaava ja puutarhanhoidosta innostunut henkilökuntamme on aina valmiina auttamaan sinua valitsemaan juuri sinulle sopivimmat tuotteet. </h2>
    <br>
    <span  class= "myyjalleLink"> <a href="RekisteroiduMyyjalle.php"> Rekisteroidu myyjaksi</a></span>
	</div>
	
</div>



	</body>
</html>
