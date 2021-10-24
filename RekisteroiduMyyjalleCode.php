<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$_SESSION['message_register']= " ";
$info = array('id' => '', 'etunimi' => '', 'sukunimi' => '', 
'email' => '', 'salasana' => '', 'puhelinnumero' => '', 'katuosoitte' => '',
'postinumero' => '','postitoimituspaikka' => '',);
$handled = false;


if (form_sent()) {
  fetch_info($info);
  $errors = errorcheck($info);
  if (!$errors) {
    
      
    // corresponds to handling the form for now
    $handled = true;
  }
}

if ($handled == true){
        addingToDtabase($info);
        sendLetter($info);
        
       
       

}

function form_sent() {
    // if the form's submit button has been pressed
    return isset($_POST['Submit']);
   
  }

  function fetch_info(&$info) {
    if (isset($_POST['etunimi'])) {
      $info['etunimi'] = strip_tags(htmlspecialchars($_POST['etunimi']));
      echo $info['etunimi']."<br>";
    }
    if (isset($_POST['sukunimi'])) {
      $info['sukunimi'] = strip_tags(htmlspecialchars($_POST['sukunimi']));
      echo $info['sukunimi']."<br>";
    }
    if (isset($_POST['email'])) {
      $info['email'] = strip_tags(htmlspecialchars($_POST['email']));
      echo $info['email']."<br>";
    }
    
    if (isset($_POST['salasana'])) {
        $info['salasana'] = strip_tags(htmlspecialchars($_POST['salasana']));
      }

      if (isset($_POST['puhelinnumero'])) {
        $info['puhelinnumero'] = strip_tags(htmlspecialchars($_POST['puhelinnumero']));
      } 
      
      if (isset($_POST['katuosoitte'])) {
        $info['katuosoitte'] = strip_tags(htmlspecialchars($_POST['katuosoitte']));
      }
      if (isset($_POST['postinumero'])) {
        $info['postinumero'] = strip_tags(htmlspecialchars($_POST['postinumero']));
      }
      if (isset($_POST['postitoimituspaikka'])) {
        $info['postitoimituspaikka'] = strip_tags(htmlspecialchars($_POST['postitoimituspaikka']));
      }
      
  }
 
   
function errorcheck($info) {
  $uppercase = preg_match('@[A-Z]@', $info['salasana']);
  $lowercase = preg_match('@[a-z]@', $info['salasana']);
  $number    = preg_match('@[0-9]@', $info['salasana']);
  $numberPosti = preg_match("@[0-9]*@",$info['postinumero']);
  $numberPuhelin = preg_match("@[0-9]*@",$info['puhelinnumero']);
  echo 'Does errorchek works?';
  
    if ($info["etunimi"]== ""){
        $_SESSION['message_register'] ="Etunimi on pakkolinen";
        header('Location:Rekisteroidu.php');
    } elseif ($info["sukunimi"] = ""){
        $_SESSION['message_register'] = "Sukunimi on pakkollinen.";
        header('Location:Rekisteroidu.php');
    } elseif ($info["e-mail"] = "") {
        echo "Virhe ilmoitus:  Sahkoposti on pakkollinen.";
    } elseif ($info["salasana"]==""){
        echo "Virhe ilmoitus:  Salasana on pakkollinen.";
    } elseif (!$uppercase || !$lowercase || !$number || strlen($info['salasana']) < 8) {
        echo "Virhe ilmoitus:  Salasana on väärin.";
    } elseif (!$numberPosti || strlen($info['postinumero'])< 5 || strlen($info['postinumero'])>5 ) {
        echo "Postinumero in väärin  " .$info['postinumero'] . "\n";
    } elseif (!$numberPuhelin || strlen($info['puhelinnumero'])< 10 || strlen($info['puhelinnumero'])>12 ){
        echo "Puhelinnumero in väärin  " .$info['puhelinnumero'] . "\n";
    }
        

    
}
 
function addingToDtabase ($info){

    $id = rand(1000000, 9999999);
    $fname = $info['etunimi'];
    $sname = $info['sukunimi'];
    $email = $info['email'];
    $password = $info['salasana'];
    $mobile = $info['puhelinnumero'];
    $streetad = $info['katuosoitte'];
    $postinro = $info['postinumero'];
    $ptpaikka = $info['postitoimituspaikka'];
    //$db = mysqli_connect('localhost', 'root', '', 
    //'lemmikkin omistajat');
   //or die('Error in established MySQL-server connect');
    //$db->autocommit(true);
    
    $mysqli = new mysqli("localhost","root","","kasityoshop");
    
    

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

    $query = "INSERT INTO myyjat (id_myyjat, etunimi_myyjat, sukunimi_myyjat, email_myyjat, 
    salasana_myyjat, puhelinNumero_myyjat, katuosoitte_myyjat,	postinumero_myyjat,	postitoimituspaikka_myyjat) 
    VALUES ('$id', '$fname', '$sname', '$email', 
    '$password', '$mobile', '$streetad', '$postinro', '$ptpaikka')";
    //echo $query;
    

    if (!$mysqli -> query($query)) {
        echo("Error description: " . $mysqli -> error);
      } else {
        $_SESSION['message_register'] ="Rekisterointi onnistunut!";
        echo $_SESSION['message_register'];
              header('Location:Rekisteroidu.php');
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
 <?php
 function sendLetter($info){
 
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
    $fname = $info['etunimi'];
    $sname = $info['sukunimi'];
    $email = $info['email'];

try {
    $mail = new PHPMailer();

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    
    //Enable SMTP debugging
    //SMTP::DEBUG_OFF = off (for production use)
    //SMTP::DEBUG_CLIENT = client messages
    //SMTP::DEBUG_SERVER = client and server messages
    
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    
    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    //Use `$mail->Host = gethostbyname('smtp.gmail.com');`
    //if your network does not support SMTP over IPv6,
    //though this may cause issues with TLS
    
    //Set the SMTP port number:
    // - 465 for SMTP with implicit TLS, a.k.a. RFC8314 SMTPS or
    // - 587 for SMTP+STARTTLS
    $mail->Port = 465;
    
    //Set the encryption mechanism to use:
    // - SMTPS (implicit TLS on port 465) or
    // - STARTTLS (explicit TLS on port 587)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    
    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = 'obyelousova@gmail.com';
    
    //Password to use for SMTP authentication
    $mail->Password = 'Kokoshnik45';

    //Recipients
    $mail->setFrom('obyelousova@gmail.com', 'Puutarha Neilikka');
    $mail->addAddress($email, $fname);     //Add a recipient

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Puutarha Neilikka! Rekisterointi onnustunut!';
    $mail->Body    = 'Terve, '.$fname.'<br>  Sinun rekisterointi Puutarha Neilikka web-sivustossa on onnistunut. Käyttää loginiksi sinun e-mail, joka te käytätte rekisteroitymisessa.';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}