
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
      
      
       $sql = "SELECT salasana_myyjat FROM myyjat WHERE email_myyjat ="."'$emailForCheck'";
       $result = $conn->query($sql);
       echo "ну может тут хоть что-то напишешт";
    

       
         

       if ($result->num_rows > 0) {
         
       echo "a nen&&&&&&&&&&";
        
        while($row = $result->fetch_assoc()) {
          echo $row["salasana_myyjat"]."<br><br>";
          
          echo $passwordForCheck;

          if ($row["salasana_myyjat"]== $passwordForCheck){
            
          
            $check_user = "SELECT 	* FROM myyjat WHERE email_myyjat ="."'$emailForCheck'";
            $resultForUserInfo = $conn->query($check_user);
      

            while($row_user =  $resultForUserInfo->fetch_assoc()){
              $userId = $row_user['id_myyjat'];
              $userEtunimi = $row_user['etunimi_myyjat'];

            
          $userSukunimi = $row_user['sukunimi_myyjat'];
          
          $userNimi = $userEtunimi." ".$userSukunimi." ".$userID;
          echo $userId;
          echo $userEtunimi." ".$userSukunimi." ".$userId;
          
            

            $_SESSION['currentUserNameMyyjat']= "Tervettuloa ".$userEtunimi."  ".$userSukunimi." ".$userId;
            $_SESSION['Myyjat'] = $userId;
            $_SESSION['message'] ="LOGIN successfull";


            echo $_SESSION['currentIDMyyjat'];
            echo "это вот та переменная в сессии в айди продаца";
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

