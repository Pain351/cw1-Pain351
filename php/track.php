<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $success = false;
  require '../php/config.php';
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $date = $_POST["date"];
  $car_model= $_POST["car_model"]
  $exists=false;
  if ($exists == false) {
      $sql = "INSERT INTO `drift_track_table` (`name`, `email`, `phone`, `preferred_date`, `car_model`) VALUES ('$name', '$email', '$phone', '$date','$car_model')";
      $result = mysqli_query($conn, $sql);
      
      if ($result) {
          $success = true;
          header("Location: ../user/sucess.html");
      }
  }
}
?>