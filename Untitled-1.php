<?php 
	 $file = 'grades.txt';
  if (!file_exists($file)) die('Product list not found!');
  $PRODUCTS = read_products($file);

 function read_products($file) {
    $productspart = array();
    
    $ref = fopen($file, 'r');
    $list = array();  
    while ($line = fgets($ref, 1024)) {
      $line = trim($line);
      if ($line == ' '){ continue;
    }
          $line = explode(' ', trim($line));
		foreach ($line as &$value) {
               
		array_push($productspart, $value)
        }
	}
 }
?>

while ($linesss = fgets($last_ref, 10)) {
	echo $linesss;
}