<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="CSSFlexBox1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Puutarha Nelikka</title>

</head>
<body>
	<section class="sectionMenu">
	<div class = "mainHeader">
	
<h1>Puutarha Neilikka</h1>
</div>

<div  class="topnav" id="myTopnav">
	<a  href="Neilikka-front-page.html">
	Etusivu
</a>

<a  href="Tuotteet.html">
	Tuotteet
</a>

<a  href="Myymälät.html">
	Myymälät
</a>

<a  href="Tietoa-meista.html">
	Tietoa meistä
</a>

<a href="Ota-yhteytä.html">
	Ota yhteyttä
</a>
<a id = "rekisteroidu" href="Kirjaudu.php">
	Kirjaudu 
	</a>
	<a href="javascript:void(0);" class="icon" onclick="myFunction()">
		<i class="fa fa-bars"></i>
	  </a>
	
	
	<i class="fa fa-shopping-basket" style="font-size:30px;color:lightpink; position: relative; padding-top: 10px; padding-left: 15px;" onclick = ></i>


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


	<h2 class = "headerMyymälät">Tuotteet</h2>

<section class = "sectionTuotteetCategories">
	<article class = "tuotteetArt">
		<h2 class = 'tuotteeth2'><a class ="buttonmenu" href = "Ulkokasvit.html">Sisäkasvit</a></h2></h2>
		<img class = "display-img" src="photoeditorsdk-export (2).png"  >
		
	 </article>
	
	

	<article class = "tuotteetArt">
		<h2 class = 'tuotteeth2'><a class ="buttonmenu" href = "Ulkokasvit.html">Ulkokasvit</a></h2>
		<img class = "display-img" src="ulkokasvit.png"  >
		
		</article>
	


    <article class = "tuotteetArt">
    	<h2 class = 'tuotteeth2'><a class ="buttonmenu" href = "Ulkokasvit.html">Työkalut</a></h2>
    	<img class = "display-img" src="Kienot.png" >
    	
    	 </article>
	
	

	<article class = "tuotteetArt">
		<h2 class = 'tuotteeth2'><a class ="buttonmenu" href = "Ulkokasvit.html">Kasvien hoito</a></h2>
		<img class = "display-img" src="kasvien-hoito.png">
	    
	    </article>
	
	
</section>

</body>
</html>