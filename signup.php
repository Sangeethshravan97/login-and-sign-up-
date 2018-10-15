<?php
 $uname = filter_input(INPUT_POST, 'uname');
 $email = filter_input(INPUT_POST, 'email');
 $password = filter_input(INPUT_POST, 'password');
 $phonenumber = filter_input(INPUT_POST, 'phonenumber');
 $dob = filter_input(INPUT_POST, 'dob');
 
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "photohub";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO signup (name,email,password,phonenumber,dob)
  values ('$uname' , '$email', '$password', '$phonenumber', '$dob')";
  if ($conn->query($sql)){
    //echo "New record is inserted sucessfully";
        ?>
    <script>
        alert('Successfully Registered');
    </script>
    <?php
    ?>
    <script type="text/javascript">
    window.location = "loginpg.html";
    </script>      
    <?php
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}

?>