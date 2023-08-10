<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $success = false;
  require '../php/config.php';
  $name = $_POST["name"];
  $email = $_POST["email"];
  if($_POST["message"]==0){
    $message="no message";
  }
  else{
    $message=$_POST["message"];
  }
  $exists = false;

  if ($exists == false) {
      $sql = "INSERT INTO `contactus_table` (`name`, `email`, `message`) VALUES ('$name', '$email','$message')";
      $result = mysqli_query($conn, $sql);
  }
}
?>