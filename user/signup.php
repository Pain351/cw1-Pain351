<!DOCTYPE html>
<html>
<head>
  <title>Signup</title>
  <link rel="stylesheet" type="text/css" href="style/styles.css">
</head>
<body>
  
  <div class="sucess" role="alert">
    <strong>Sucess
  </div>
    <a href="../index.html"><div class="logo">
        <img id="pnglogo" src="assets/logo.png" alt="logo"> </div></a>
  <div class="overlay">
    <div class="signup-container">
        <form action="../php/signup_process.php" method="post">
          <h1>Signup</h1>
          <label for="username">Username:</label>
          <input type="text" name="username" id="username" required>

          <label for="name">Name:</label>
          <input type="text" name="name" id="name" required>
    
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" required>
    
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" required>
    
          <input type="submit" value="Signup">
        </form>
        <div class="hyperlink">
            <a href="login.html" class="logina">Sign In?</a>
          </div>
      </div>
  </div>
  <div class="video-wrap">
    <video autoplay loop muted plays-inline class="back-vid">
        <source src="assets/video.mp4" type="video/mp4">
    </video>
</body>
</html>
