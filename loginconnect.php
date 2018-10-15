<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myemail = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM signup WHERE email = '$myemail' and password = '$mypassword'"; /*selects from table 'sigup' of database 'phothub' */
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
    
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
       
         $sql = "INSERT INTO login(email , Password , logindate) values ('$myemail','$mypassword' , CURRENT_TIMESTAMP)"; /*inserts into table 'login' of database 'phothub' */
         if ($db->query($sql)){
          ?>
    <script>
        alert('You have successfully logged in');
        window.location = "home.html"; //  directed to the next page once successfully logged in 
    </script>
    <?php
      }
         
      }else {
         $error = "Your Login Name or Password is invalid";
         //echo "Your Login Name or Password is invalid";
          ?>
    <script>
        alert('invalid user credentials');
        window.location = "loginpg.html";  // directs to or remains in the login page if user detials are invalid. 
    </script>
    <?php
      }
   }
?>