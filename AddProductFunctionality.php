<?php

$server = 'localhost';
$username = 'root';


$info = array('id_tuotteet' => '', 'productName' => '', 'image_name' =>'',  
'shortDescription' => '', 'category' => '', 'price' => '', 
'deliveryCosts' => '','deliveryTime' => '');
$handled = false;

echo "This is ID myyjat before adding to databas!!!!!!!!!!!!!!!!!!!!!!!!!!!!".$_SESSION['Myyjat'];


if (form_sent()) {
  fetch_info($info);
 // $image_name = fetch_image();


     $handled = true;
  
}

if ($handled == true){
        addingToDtabase($info);
        
       
       

}

function form_sent() {
    // if the form's submit button has been pressed
    return isset($_POST['Submit']);
   
  }

  function fetch_info(&$info) {
    if (isset($_POST['productName'])) {
      $info['productName'] = strip_tags(htmlspecialchars($_POST['productName']));
      echo $info['productName']."<br>";
    }
   
    if ($_FILES && $_FILES["filename"]["error"]== UPLOAD_ERR_OK)
    {
        $name = "upload/" . $_FILES["filename"]["name"];
        move_uploaded_file($_FILES["filename"]["tmp_name"], $name);
        $image_name = $_FILES["filename"]["name"];
        echo $image_name;
        $info['image_name'] = $image_name;
    }


    if (isset($_POST['shortDescription'])) {
      $info['shortDescription'] = strip_tags(htmlspecialchars($_POST['shortDescription']));
      echo $info['shortDescription']."<br>";
    }
    if (isset($_POST['category'])) {
      $info['category'] = strip_tags(htmlspecialchars($_POST['category']));
      echo $info['category']."<br>";
    }
    
    if (isset($_POST['price'])) {
        $info['price'] = strip_tags(htmlspecialchars($_POST['price']));
      }

      if (isset($_POST['deliveryCosts'])) {
        $info['deliveryCosts'] = strip_tags(htmlspecialchars($_POST['deliveryCosts']));
      } 
      
      if (isset($_POST['deliveryTime'])) {
        $info['deliveryTime'] = strip_tags(htmlspecialchars($_POST['deliveryTime']));
      }
      
      
  }
 
   
 //function fetch_image(){
  //if ($_FILES && $_FILES["filename"]["error"]== UPLOAD_ERR_OK)
  //{
    //  $name = "upload/" . $_FILES["filename"]["name"];
      //move_uploaded_file($_FILES["filename"]["tmp_name"], $name);
      //$image_name = $_FILES["filename"]["name"];
      //echo $image_name;
      //echo "Файл загружен";
      //return $image_name;
  //}
//}

 
function addingToDtabase ($info){

    $id = rand(10000, 99999);
    $fproductName = $info['productName'];
    $simage = $info['image_name'];
   

    $sshortDescription = $info['shortDescription'];
    $category = $info['category'];
    $sprice = $info['price'];
    $sdeliveryCosts = $info['deliveryCosts'];
    $sdeliveryTime = $info['deliveryTime'];
   
    $idMyyja= $_SESSION['Myyjat'];    


echo "This is ID myyjat before adding to database!". $idMyyja;
    $mysqli = new mysqli("localhost","root","","kasityoshop");

    

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

    $query = "INSERT INTO products (id_tuotteet, name_tuotteet, image_tuotteet, description_tuotteet, category_tuotteet, 
    price, deliveryCosts, deliveryTime, id_myyja_tuotteet) 
    VALUES ('$id', '$fproductName', '$simage', '$sshortDescription', '$category', 
    '$sprice', '$sdeliveryCosts', '$sdeliveryTime', '$idMyyja')";
    //echo $query;

    if (!$mysqli -> query($query)) {
        echo("Error description: " . $mysqli -> error);
      } else {
        $_SESSION['messageProductRegister'] = "Product added successfully!";
        
      }

    // $result = mysqli_query($db, $query)
    //     or die ('Error in query to database');
        //while($row = $result->fetch_assoc()){
          //  echo  '<br>';
            //echo  '<br>';
           // echo  $row['Total'];
           // echo  '<br>';
         //}
       
       


        // mysqli_close($db); 
        
        $mysqli -> close();
        // echo $result;  
}


     
 
 ?>