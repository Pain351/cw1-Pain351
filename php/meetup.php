<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $success = false;
  require '../php/config.php';
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $date = $_POST["date"];
  if($_POST["message"]==0){
    $message="no message";
  }
  else{
    $message=$_POST["message"];
  }
  $exists = false;

  if ($exists == false) {
      $sql = "INSERT INTO `car_ride_table` (`name`, `email`, `phone`, `event_date`, `message`) VALUES ('$name', '$email', '$phone', '$date','$message')";
      $result = mysqli_query($conn, $sql);
      
      if ($result) {
          $success = true;
          header("Location: ../user/sucess.html");
      }
  }
}
?>