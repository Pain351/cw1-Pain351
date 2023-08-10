<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $success = false;
  require '../php/config.php';
  $username = $_POST["username"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $exists = false;

  if ($exists == false) {
      $sql = "INSERT INTO `user` (`username`, `name`, `email`, `password`) VALUES ('$username', '$name', '$email', '$password')";
      $result = mysqli_query($conn, $sql);
      
      if ($result) {
          $success = true;
          header("Location: ../user/sucess.html");
      }
  }
}
?>