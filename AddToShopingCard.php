<?php
session_start();

$basket = $_SESSION['products_basket'];
array_push($basket, $_GET['product']);
foreach ($basket as $row){
echo $row."<br><br>";
}
$_SESSION['products_basket'] =$basket;
header("Location: Ulkokasvit.php");
die();

?>
<!DOCTYPE html> 
<html>
    
<meta http-equiv="refresh" content="0;url=Ulkokasvit.php">
</html>