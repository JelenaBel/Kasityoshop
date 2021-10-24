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
  echo "<a href='OmaProfiliini.php'>Oma profiilini</a>";
} else
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
<br><br>

<h2 class = "headerCatalog">Oma profiliini</h2>

<?php
if (isset ($_SESSION['asiakasID'])){
    $asiakasID = $_SESSION['asiakasID'];
    $conn = new mysqli("localhost","root","","kasityoshop");


    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }

      $check_user = "SELECT * FROM customers WHERE id_asiakkaat ="."'$asiakasID'";
       $resultForUserInfo = $conn->query($check_user);

       if  ($resultForUserInfo->num_rows > 0) {
         
            
            while($row_user =  $resultForUserInfo->fetch_assoc()){
                $userEtunimi = $row_user['etunimi_asiakkaat'];               
                $userSukunimi = $row_user['sukunimi_asiakkaat'];
                $userId = $row_user['id_asiakkaat'];
                $email = $row_user['email_asiakkaat'];
                $Asalasana= $row_user['salasana_asiakkaat'];
                $apuhelin=$row_user['puhelinNumero_asiakkaat'];
               $Akatu =$row_user['katuosoitte_asiakkaat'];
                $Aposti=$row_user['postinumero_asiakkaat'];
                $Apaikka= $row_user['postitoimituspaikka_asiakkaat'];
                
              echo"  
                
                
                
              <section class = 'sectionOmaProfiilini'>
              <form>
<fieldset class='sectionOmaProfiilini'>
                <legend>Oma profiliini</legend>
                <span class='registerLomake' >Etunimi:*	 ".$userEtunimi."</span>
                <br>
                <span class='registerLomake' >Sukunimi:  ".$userSukunimi."</span>
                <br>
                <span class='registerLomake' >E-mail:  ".$email." </span>
                <br>             
                <span class='registerLomake' >Salasana:  ".$Asalasana."</span>
                <br>   
	              <span class='registerLomake' >Puhelinnumero: ".$apuhelin." </span>
                <br>   
        
    <span class='registerLomake' > Katuosoitte:".$Akatu."</span>
    <br>   
        

       

    <span class='registerLomake' >Postinumero:   ".$Aposti."</span>
    <br>     
        
    <span class='registerLomake' > Postitoimituspaikka: ".$Apaikka."</span></fieldset></form></section>";

            }
      

}
       }
?>