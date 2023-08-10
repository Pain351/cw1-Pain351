<?php
require '../php/config.php';

// Check if user is already logged in
if (isset($_COOKIE['id'])) {
  header("Location: home.php");
  exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Retrieve user info from database
    $sql = "SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        // Login successful, set cookie with user ID and redirect to homepage
        $row = mysqli_fetch_assoc($result);
        setcookie('id', $row['username'], time() + (86400 * 30), "/"); // Set cookie for 30 days
        header("Location: home.php");
        exit();
    } else {
        // Login failed, display error message
        $error_message = "Invalid username or password.";
    }
}
?>
<!--html code-->
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style/styles.css">
</head>
<body>
  <a href="../index.html"><div class="logo">
        <img id="pnglogo" src="assets/logo.png" alt="logo"> </div></a>
</div>
  <div class="overlay">
    <div class="login-container">
      <form method="post">
        <h1>Login</h1>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
  
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
  
        <input type="submit" value="Login">
      </form>
      <div class="hyperlink">
        <a href="reset_password.html" class="forgeta">Forgot Password?</a>
        <a href="signup.php" class="signupa">Signup</a>
      </div>
    </div>
  </div>
  <div class="video-wrap">
    <video autoplay loop muted plays-inline class="back-vid">
        <source src="assets/video.mp4" type="video/mp4">
    </video>
</body>
</html>


<?php
mysqli_close($conn);
?>
