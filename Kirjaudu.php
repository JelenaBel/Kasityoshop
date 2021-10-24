<?php


session_start();


@include('Kirjaudusisään.php');

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

<a  href="Tietoa-meista.html">
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
  echo "<a  href='Logout.php'> Logout </a>";
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
            if (isset($_SESSION['currentUserName'])) {

                  echo $_SESSION['currentUserName']; 
                }    
            
            ?>

</span>

<br><br>

<h2 class = "headerCatalog">Kirjaudu</h2>

    <section class = "sectionMyymälät">

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">

<fieldset class="sectionMyymälät">
<legend>Kirjaudu sisään</legend>
    
Login (e-mail):*
<input type = "text" class="registerLomake" name = "email" required>
  
Salasana:*

<input type="password" class="registerLomake"  name="salasana"  required>

<label>
      <input type="checkbox"  checked="checked" name="remember"> Remember me
    </label>   
    <span class="psw"> <a href="#"> Forgot password?</a></span>
    
    <input type = "submit" class= "myyjalleLink"   name = "Submit" value = "Submit"></input> 
    <br>
    <button type="button" class= "myyjalleLink">Cancel</button> 

    <span class="psw"> Don't have an account?  <a href="Rekisteroidu.php"> Register here</a></span>
    <span  class= "myyjalleLink"> <a href="KirjauduMyyjalle.php"> Kirjautuminen myyjalle</a></span>

        
        
     <span  class = "msg"> 
            <?php 
            if (isset ($_SESSION['message'])){
            echo $_SESSION['message']; 
            unset ($_SESSION['message']);
            }

            ?>

</span>

   </fieldset>
   
   </form>
</section>

	</div>

</body>



