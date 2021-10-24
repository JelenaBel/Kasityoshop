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

<h2 class = "headerCatalog">Rekisterointi</h2>


	<section class = "sectionMyymälät">

	<form  method="post"  action="<?php echo $_SERVER['PHP_SELF']?>">
	<fieldset class = "sectionMyymälät">
    <legend>Rekisteröitymislomake</legend>
		
		
		Etunimi:*
		

		<td><input type = "text" class="registerLomake" name = "etunimi" required></td></tr>
		<tr>
		<td class="tabledata">Sukunimi:* </td>
		
		<td class="tabledata"><input type = "text" class="registerLomake" name = "sukunimi" required ></td></tr>
		
        <tr>
 		<td class="registerLomake">E-mail:*</td> 

        <td class="registerLomake"><input type = "text" class="registerLomake" name ="email" required></td></tr>
        
        <tr>
        <td class="registerLomake">Salasana:* </td>
		
		
        <td class="registerLomake"><input type="password" class="registerLomake"  name="salasana" required></td></tr>
	
    
    <tr>
    <td class="registerLomake">Puhelinnumero: </td>
		
    <td><input type = "text" class="registerLomake" name ="puhelinnumero"></td></tr>
        
        <tr>
        <td class="registerLomake">Katuosoitte:</td>
        <td><input type = "text" class="registerLomake" name ="katuosoitte"></td></tr>
        

        <tr> 

        <td class="registerLomake">Postinumero: </td>
		
        <td><input type = "text" class="registerLomake" name ="postinumero"></td></tr>
        
        <tr>
        <td class="registerLomake">Postitoimituspaikka: </td>
		
        <td><input type = "text" class="registerLomake" name ="postitoimituspaikka"></td></tr>
        
       <br><br>
        <tr>
        <td>  </td><td> <input type = "submit" class= "myyjalleLink"   name = "Submit" value = "Submit"></td></tr>
        <tr>   
          <td> </td> <td><span  class = "msg"> 
            <?php 
			if(isset($_SESSION['message_register'])){
		    echo $_SESSION['message_register']; 
            unset ($_SESSION['message_register']);
			}

            ?>

</span></td>  
</table>
       </fieldset>
       </form>
	   <span  class= "myyjalleLink"> <a href="RekisteroiduMyyjalle.php"> Rekisteroidu myyjaksi</a></span>
	   <span  class= "myyjalleLink"> <a href="KirjauduMyyjalle.php"> Kirjaudu myyjaksi</a></span>
</section>



</body>
<?php
require_once 'RekisteroiduCode.php';

?>   