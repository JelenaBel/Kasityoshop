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
  echo "<a href='OmaProfiliiniMyyja.php'>Oma profiilini</a>";
} else
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

<h2 class = "headerCatalog">Oma profiliini</h2>

<?php
if (isset ( $_SESSION['Myyjat'])){
    $asiakasID = $_SESSION['Myyjat'];
    $conn = new mysqli("localhost","root","","kasityoshop");
}

    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }

      $check_user = "SELECT * FROM myyjat WHERE id_myyjat ="."'$asiakasID'";
       $resultForUserInfo = $conn->query($check_user);

       if  ($resultForUserInfo->num_rows > 0) {
         
            
            while($row_user =  $resultForUserInfo->fetch_assoc()){
                $userEtunimi = $row_user['etunimi_myyjat'];               
                $userSukunimi = $row_user['sukunimi_myyjat'];
                $userId = $row_user['id_myyjat'];
                $email = $row_user['email_myyjat'];
                $Asalasana= $row_user['salasana_myyjat'];
                $apuhelin=$row_user['puhelinNumero_myyjat'];
               $Akatu =$row_user['katuosoitte_myyjat'];
                $Aposti=$row_user['postinumero_myyjat'];
                $Apaikka= $row_user['postitoimituspaikka_myyjat'];
                
              echo"  
                
                
                
              <fieldset class='registerLomake'>
                <legend>Oma profiliini</legend>
		<table>
		<tr>
		<td class='registerLomake'>Etunimi:*</td>
		

		<td class='registerLomake' >".$userEtunimi."</td></tr>
		<tr>
		<td class='registerLomake'>Sukunimi: </td>
		
		<td class='registerLomake'>".$userSukunimi."</td></tr>
		
        <tr>
 		<td class='registerLomake'>E-mail:</td> 

        <td class='registerLomake'>".$email." </td></tr>
        
        <tr>
        <td class='registerLomake'>Salasana: </td>
		
		
        <td class='registerLomake'>".$Asalasana."</td></tr>
	
    
    <tr>
    <td class='registerLomake'>Puhelinnumero: </td>
		
    <td class='registerLomake'>".$apuhelin." </td></tr>
        
        <tr>
        <td class='registerLomake'>Katuosoitte:</td>
        <td class='registerLomake' >".$Akatu."</td></tr>
        

        <tr> 

        <td class='registerLomake'>Postinumero: </td>
		
        <td class='registerLomake'>".$Aposti."</td></tr>
        
        <tr>
        <td class='registerLomake'>Postitoimituspaikka: </td>
		
        <td class='registerLomake' >".$Apaikka."</td></tr></table></fieldset>";


      

}
       }
?>