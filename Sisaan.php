<?php
session_start();

$info = array('email' => '', 'salasana' => '');
$handled = false;



if (form_sent()) {
    echo "fetch_info";
  fetch_info($info);
  $errors = errorcheck($info);
  if (!$errors) {
    
      
    // corresponds to handling the form for now
    $handled = true;
  }
}

if ($handled == true){
        
        
       
       

}

function form_sent() {
    echo "Проверяеь фугкцию проверки отправки формы";
        return isset($_POST['Submit']);
   
  }

  function fetch_info(&$info) {
    
    if (isset($_POST['email'])) {
      $info['email'] = strip_tags(htmlspecialchars($_POST['email']));
      echo $info['email']."<br>";
    }
    
    if (isset($_POST['salasana'])) {
        $info['salasana'] = strip_tags(htmlspecialchars($_POST['salasana']));
      }

      
      
  }
 
   
function errorcheck($info) {
 
    $conn = new mysqli("localhost","root","","puutarhanelikka");

    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }
      
       $emailForCheck = $info['email'];
       $passwordForCheck =  $info['salasana'];  
      
      
       $sql = "SELECT salasana_asiakkaat FROM asiakkaat WHERE email_asiakkaat ="."'$emailForCheck'";
       $result = $conn->query($sql);
         

       if ($result->num_rows > 0) {
      
        
        while($row = $result->fetch_assoc()) {
          if ($row["salasana_asiakkaat"]== $passwordForCheck){
              echo 'Tervettuloa';
            }
            else {
                $_SESSION (['msg_psw']) ='Wrong password';
                header('Location: Kirjaudu.php');
            }
        }
      } else {
        die ("0 results");
      }
      $conn->close();
      

    
}
 

 ?>


?>