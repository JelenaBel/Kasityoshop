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
	<a  href="KasityoshopFrontPage.php">
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
  echo "<a href='OmaProfiliini.php'>Oma profiilini</a>";
}
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

<span  class = "msgcurretnUserName"> 
            <?php 
            if (isset( $_SESSION['messageProductRegister'])) {

                  echo  $_SESSION['messageProductRegister']; 
                }    
            
            ?>

</span>
<span  class = "msgcurretnUserName"> 
            <?php 
            if (isset($_SESSION['currentUserNameMyyjat'])) {

                  echo $_SESSION['currentUserNameMyyjat']; 
                  
                }    
            
            ?>

</span>

<br><br>

<h2 class = "headerCatalog">Add product</h2>


	<section class = "sectionMyymälät">

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>" enctype ="multipart/form-data">
	<fieldset class="registerLomake">
    <legend>Adding new product</legend>
		<table>
		<tr>
		<td class="registerLomake">Product name:*</td>
		

		<td><input type = "text" class="registerLomake" name = "productName" required></td></tr>
		
		<tr>
		<td class="registerLomake">Picture:*</td>
		

		<td class="registerLomake">
Выберите файл: <input type="file" name="filename" size="30" /><br /><br />
<input type="submit" value="Upload" >
</td></tr>
		
		
        
        <tr>
 		<td class="registerLomake">Short description:*</td> 

        <td class="registerLomake"><input type = "text" class="registerLomake" name ="shortDescription" required></td></tr>
        
        <tr>
        <td class="registerLomake">Choose category:* </td>
		
		
        <td class="registerLomake" >
        <select name="category" class="registerLomake" required>
        <option  value="Kyntilat">Kyntilat</option>
        <option value="Saippua">Saippua</option>
        <option value="Jewelery">Jewelery</option>
        <option value="Wood">Wood</option>
        <option  value="Virkattu">Virkattu</option>
        <option value="Home Decor">Home Decor</option>
        <option value="Lapsille<">Lapsille</option>
        <option value="Tilda">Tilda</option>
        <option  value="Furniture">Furniture</option>
        <option value="Pictures">Pictures</option>
        <option value="Patchwork">Patchwork</option>
        <option value="Lasi">Lasi</option>

           
            </select>
        </td></tr>
	
    
    <tr>
    <td class="registerLomake">Price: </td>
		
    <td><input type = "text" class="registerLomake" name ="price" required></td></tr>
        
        <tr>
        <td class="registerLomake">Delivery costs:</td>
        <td><input type = "text" class="registerLomake" name ="deliveryCosts" required></td></tr>
        

        <tr> 

        <td class="registerLomake">Delivery time (work days): </td>
		
        <td>
            <select name="deliveryTime" class="registerLomake" required>
  <option  value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
</select></td></tr>
        
        
        <td>  </td><td> <input type = "submit" class = "buttonmenu"   name = "Submit" value = "Submit"></td></tr>
        <tr>   
          <td> </td> <td><span  class = "msg"> 
            <?php 
            if (isset($_SESSION['messageProductRegister'])){
            echo $_SESSION['messageProductRegister']; 
            
            }
            ?>

</span></td>  
</table>
       </fieldset>
       </form>
</section>

<?php
require_once 'AddProductFunctionality.php';

?>   

</body>
