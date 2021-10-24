
<?php 



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
 
    $conn = new mysqli("localhost","root","","kasityoshop");

    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }
      
       $emailForCheck = $info['email'];
       $passwordForCheck =  $info['salasana'];  
      
      
       $sql = "SELECT salasana_asiakkaat FROM customers WHERE email_asiakkaat ="."'$emailForCheck'";
       $result = $conn->query($sql);

       $check_user = "SELECT id_asiakkaat, tunimi_asiakkaat, sukunimi_asiakkaat FROM asiakkaat WHERE email_asiakkaat ="."'$emailForCheck'";
       $resultForUserInfo = $conn->query($check_user);
      
         

       if ($result->num_rows > 0) {
         
       
        
        while($row = $result->fetch_assoc()) {
          if ($row["salasana_asiakkaat"]== $passwordForCheck){
          
            $check_user = "SELECT * FROM customers WHERE email_asiakkaat ="."'$emailForCheck'";
            $resultForUserInfo = $conn->query($check_user);

            while ($row_user =  $resultForUserInfo->fetch_assoc()){
            $userEtunimi = $row_user['etunimi_asiakkaat'];

            
          $userSukunimi = $row_user['sukunimi_asiakkaat'];
          $userId = $row_user['id_asiakkaat'];
          $userNimi = $userEtunimi." ".$userSukunimi;
            

            $_SESSION['currentUserName']= "Tervettuloa ".$userEtunimi."  ".$userSukunimi;
            
            $_SESSION['asiakasID'] = $userId;
            $_SESSION['message'] ="LOGIN successfull";
            
            }

            }
            else {
              $_SESSION['message'] ="wronggggggggg passssssword";
              
            
            }
        }
      } else {
        $_SESSION['message'] ="E-mail not found";
        
      }
      $conn->close();
      

    
}
 

 ?>

