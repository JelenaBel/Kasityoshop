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
  echo "<a href='OmaProfiliiniMyyja.php'>Oma Profiliini</a>";

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


<span  class = "msgcurretnUserName"> 
            <?php 
            if (isset($_SESSION['currentUserNameMyyjat'])) {

                  echo $_SESSION['currentUserNameMyyjat']; 
                  
                }    
            
            ?>

</span>

<br><br>



	<h2 class = "headerCatalog">Online-shop</h2>

<section class = "sectionTuotteetCategories">
	<article class = "catalogArt">
		<h2 class = 'tuotteeth2'><a class ="buttonmenu" href = "ProductsList.php">Kynttilät</a></h2></h2>
		<img class = "display-img" src="candle.jpg"  >
		
	 </article>
	
	

	<article class = "catalogArt">
		<h2 class = 'tuotteeth2'><a class ="buttonmenu" href = "Saippua.php">Saippua</a></h2>
		<img class = "display-img" src="mylo-ruchnoj-raboty.jpg"  >
		
		</article>
	


    <article class = "catalogArt">
    	<h2 class = 'tuotteeth2'><a class ="buttonmenu" href = "Saippua.php">Jewelery</a></h2>
    	<img class = "display-img" src="Jewelry.jpg" >
    	
    	 </article>
	
	

	<article class = "catalogArt">
		<h2 class = 'tuotteeth2'><a class ="buttonmenu" href = "Saippua.php">Wood</a></h2>
		<img class = "display-img" src="Madeofwood2.jpg">
	    
	    </article>
        <article class = "catalogArt">
            <h2 class = 'tuotteeth2'><a class ="buttonmenu" href = "Kyntiloita.php">Virkattu</a></h2></h2>
            <img class = "display-img" src="Knitted2.jpg"  >
            
         </article>
        
        
    
        <article class = "catalogArt">
            <h2 class = 'tuotteeth2'><a class ="buttonmenu" href = "Saippua.php">Home decor</a></h2>
            <img class = "display-img" src="HomeDecor.jpg"  >
            
            </article>
        
    
    
        <article class = "catalogArt">
            <h2 class = 'tuotteeth2'><a class ="buttonmenu" href = "Ulkokasvit.php">Lapsille</a></h2>
            <img class = "display-img" src="Knitted toys.jpg" >
            
             </article>
        
        
    
        <article class = "catalogArt">
            <h2 class = 'tuotteeth2'><a class ="buttonmenu" href = "Ulkokasvit.php">Tilda</a></h2>
            <img class = "display-img" src="Tilda1.jpg">
            
            </article>
            <article class = "catalogArt">
                <h2 class = 'tuotteeth2'><a class ="buttonmenu" href = "Kyntiloita.php">Furniture</a></h2></h2>
                <img class = "display-img" src="Furniture.jpg"  >
                
             </article>
            
            
        
            <article class = "catalogArt">
                <h2 class = 'tuotteeth2'><a class ="buttonmenu" href = "Saippua.php">Pictures</a></h2>
                <img class = "display-img" src="Maalakset.jpg"  >
                
                </article>
            
        
        
            <article class = "catalogArt">
                <h2 class = 'tuotteeth2'><a class ="buttonmenu" href = "Ulkokasvit.php">Patchwork</a></h2>
                <img class = "display-img" src="Pyechvork.jpg" >
                
                 </article>
            
            
        
            <article class = "catalogArt">
                <h2 class = 'tuotteeth2'><a class ="buttonmenu" href = "Ulkokasvit.php">Lasi</a></h2>
                <img class = "display-img" src="Glass2.jpg">
                
                </article>
	
</section>

</body>
</html>