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
	<a  href="KasityoshopFrontPage.html">
	Etusivu
</a>

<a  href="CatalogKasityoshop.html">
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

<fieldset class="registerLomake">
<legend>Kirjaudu sisään</legend>
    <table>
    <tr>
    <td class="registerLomake">Login (e-mail):*</td>
    

    <td><input type = "text" class="registerLomake" name = "email" required></td></tr>

    <tr>
    <td class="registerLomake">Salasana:* </td>
    
    
    <td class="registerLomake"><input type="password" class="registerLomake"  name="salasana"  required></td></tr>
    <tr>
        <td></td>
        <td> <label>
      <input type="checkbox"  checked="checked" name="remember"> Remember me
    </label>   </td> 



    <tr>
        <td></td> <td> <span class="psw"> <a href="#"> Forgot password?</a></span></td></tr>
        <tr>
    <td></td>
    <td> <input type = "submit" class= "myyjalleLink"   name = "Submit" value = "Submit"></input> <button type="button" class= "myyjalleLink">Cancel</button> </td></tr>

    <tr>
        <td> </td> <td>  <span class="psw"> Don't have an account?  <a href="Rekisteroidu.php"> Register here</a></span></td></tr>
        <tr>
        <td> </td> <td>  <span  class= "myyjalleLink"> <a href="KirjauduMyyjalle.php"> Kirjautuminen myyjalle</a></span></td></tr>

        
        
     <tr>   
          <td> </td> <td><span  class = "msg"> 
            <?php 
            if (isset ($_SESSION['message'])){
            echo $_SESSION['message']; 
            unset ($_SESSION['message']);
            }

            ?>

</span></td>  
</table>

   </fieldset>
   
   </form>
</section>

	</div>

</body>



