<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $success = false;
  require '../php/config.php';
  $part_name = $_POST["part_name"];
  $quantity = $_POST["quantity"];
  $address= $_POST["address"];
  $exists = false;

  if ($exists == false) {
      $sql = "INSERT INTO `buy_car_parts_table` (`part_name`, `quantity`, `address`) VALUES ('$part_name', '$quantity', '$address')";
      $result = mysqli_query($conn, $sql);
      
      if ($result) {
          $success = true;
          header("Location: ../user/sucess.html");
      }
  }
}
?>