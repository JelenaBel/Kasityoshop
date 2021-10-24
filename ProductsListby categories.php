<?php
session_start();
$result;
$product;
if(!isset($_SESSION['products_basket'])){
    $_SESSION['products_basket'] = array();
}

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

<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>


   
    
    
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




<br><br>
	<h2 class = "headerMyymälät">Ulkokasvit</h2>

<section class = "sectionUlkokasvit">

<?php
 $mysqli = new mysqli("localhost","root","","puutarhanelikka");

 $query = "SELECT `id_tuotteet`, `name_tuotteet`, `image_tuotteet`, `description_tuotteet`, `category_tuotteet`, `price`, `deliveryCosts`, `deliveryTime` FROM `tuotteet`" ;
 $result = $mysqli->query($query);



 
  
    if ( $mysqli -> connect_errno) {
     echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
     exit();
    }

    //  if (!$mysqli -> query($query)) {
     //   echo("Error description: " . $mysqli -> error);
     // }

if ($result->num_rows > 0) {
                       
    while($row = $result->fetch_assoc()) {
        $product_card = $row['id_tuotteet'];

        echo '
        <form class = "articleTuoteinLine" items-alight= "center" method="post">
		<h2 class = "productsInList"><a class ="buttonmenutuotebyName" href = "Tuote1.html">'.$row['name_tuotteet'].'</a></h2>
		<img class = "display-img" src="Upload/'.$row['image_tuotteet'].'">
		<p class = "hinta">'.$row['price'].' eur</p>
        
        <a class = "buttonAddToCard" href= "AddToShopingCard.php?product='.$product_card.'" >Add to card</a>
        </form>'; 
	 
   
     $product = $row['name_tuotteet'];
     
    
    }
}

    


   
?>

	<article class = "articleTuoteinLine">
		<h2 class = 'productsInList'><a class ="buttonmenutuotebyName" href = "Tuote1.html">Palsamipihta</a></h2>
		<img class = "display-img" src="photoeditorsdk-export (2).png"  >
		<p class = "hinta"> 19,99 eur</p>
		<input type = "button" class ="buttonAddToCard" name ="Add to card" value = "Add to card">
	 </article>
	
	

	<article class = "articleTuoteinLine">
		<h2 class = 'productsInList'><a class ="buttonmenutuotebyName" href = "Tuote1.html">Aitokanerva Garden Girls</a></h2>
		<img class = "display-img" src="ulkokasvit.png"  >
		<p class = "hinta"> 19,99 eur</p>
		<input type = "button" class ="buttonAddToCard" name ="Add to card" value = "Add to card">
		</article>
	


    <article class = "articleTuoteinLine">
    	<h2 class = 'productsInList'><a class ="buttonmenutuotebyName" href = "Tuote1.html">Kartiotuija Brabant</a></h2>
    	<img class = "display-img" src="Kienot.png" >
    	<p class = "hinta"> 19,99 eur</p>
		<input type = "button" class ="buttonAddToCard" name ="Add to card" value = "Add to card">
    	 </article>
	
	

	<article class = "articleTuoteinLine">
		<h2 class = 'productsInList'><a class ="buttonmenutuotebyName" href = "Tuote1.html">Metsäkuusen aitataimet</a></h2>
		<img class = "display-img" src="kasvien-hoito.png">
		<p class = "hinta"> 19,99 eur</p>
		<input type = "button" class ="buttonAddToCard" name ="Add to card" value = "Add to card">
	    
	    </article>

	    <article class = "articleTuoteinLine">
			<h2 class = 'productsInList'><a class ="buttonmenutuotebyName" href = "Tuote1.html">Palsamipihta</a></h2>
			<img class = "display-img" src="photoeditorsdk-export (2).png"  >
			<p class = "hinta"> 19,99 eur</p>
			<input type = "button" class ="buttonAddToCard" name ="Add to card" value = "Add to card">
		 </article>
		
		
	
		<article class = "articleTuoteinLine">
			<h2 class = 'productsInList'><a class ="buttonmenutuotebyName" href = "Tuote1.html">Aitokanerva Garden Girls</a></h2>
			<img class = "display-img" src="ulkokasvit.png"  >
			<p class = "hinta"> 19,99 eur</p>
			<input type = "button" class ="buttonAddToCard" name ="Add to card" value = "Add to card">
			</article>
		
	
	
		<article class = "articleTuoteinLine">
			<h2 class = 'productsInList'><a class ="buttonmenutuotebyName" href = "Tuote1.html">Kartiotuija Brabant</a></h2>
			<img class = "display-img" src="Kienot.png" >
			<p class = "hinta"> 19,99 eur</p>
			<input type = "button" class ="buttonAddToCard" name ="Add to card" value = "Add to card">
			 </article>
		
		
	
		<article class = "articleTuoteinLine">
			<h2 class = 'productsInList'><a class ="buttonmenutuotebyName" href = "Tuote1.html">Metsäkuusen aitataimet</a></h2>
			<img class = "display-img" src="kasvien-hoito.png">
			<p class = "hinta"> 19,99 eur</p>
			<input type = "button" class ="buttonAddToCard" name ="Add to card" value = "Add to card">
			
			</article>
			<article class = "articleTuoteinLine">
				<h2 class = 'productsInList'><a class ="buttonmenutuotebyName" href = "Tuote1.html">Palsamipihta</a></h2>
				<img class = "display-img" src="photoeditorsdk-export (2).png"  >
				<p class = "hinta"> 19,99 eur</p>
				<input type = "button" class ="buttonAddToCard" name ="Add to card" value = "Add to card">
			 </article>
			
			
		
			<article class = "articleTuoteinLine">
				<h2 class = 'productsInList'><a class ="buttonmenutuotebyName" href = "Tuote1.html">Aitokanerva Garden Girls</a></h2>
				<img class = "display-img" src="ulkokasvit.png"  >
				<p class = "hinta"> 19,99 eur</p>
				<input type = "button" class ="buttonAddToCard" name ="Add to card" value = "Add to card">
				</article>
			
		
		
			<article class = "articleTuoteinLine">
				<h2 class = 'productsInList'><a class ="buttonmenutuotebyName" href = "Tuote1.html">Kartiotuija Brabant</a></h2>
				<img class = "display-img" src="Kienot.png" >
				<p class = "hinta"> 19,99 eur</p>
				<input type = "button" class ="buttonAddToCard" name ="Add to card" value = "Add to card">
				 </article>
			
			
		
			<article class = "articleTuoteinLine">
				<h2 class = 'productsInList'><a class ="buttonmenutuotebyName" href = "Tuote1.html">Metsäkuusen aitataimet</a></h2>
				<img class = "display-img" src="kasvien-hoito.png">
				<p class = "hinta"> 19,99 eur</p>
				<input type = "button" class ="buttonAddToCard" name ="Add to card" value = "Add to card">
				
				</article>
	
	
</section>

</body>
</html>
