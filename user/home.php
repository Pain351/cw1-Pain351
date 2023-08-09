<?php
require '../php/config.php';
if (!isset($_SESSION['user_id'])) {
  // Redirect to the login page
  header("Location: login.php");
  exit();
}
?>
<!--html code-->
<!DOCTYPE html>
<html>
<head>
  <title>Welcome to Car Modification Center</title>
  <link rel="stylesheet" type="text/css" href="style/styles.css">
</head>
<body>
  <header>
    <div class="logo">
      <img id="pnglogo" src="assets/logo.png" alt="logo">
  </div>    
    <h1>Welcome to Car Velocity Motors</h1>
  </header>


  <main class="home">
    <div class="overlay">
      <section class="booking-form">
        <h2>Choose Your Booking Type</h2>
        <form action="#" method="post">
          <label>
            <input type="radio" name="booking_type" value="appointment" required>
            Book an Appointment
          </label>
          <label>
            <input type="radio" name="booking_type" value="car_ride" required>
            Book a Car Ride Event
          </label>
          <label>
            <input type="radio" name="booking_type" value="drift_track" required>
            Book a Drift Track
          </label>
          <label>
            <input type="radio" name="booking_type" value="buy_car_parts" required>
            Buy Car Parts
          </label>

          <div id="form-container">
            <!-- Dynamic form fields will be inserted here -->
          </div>

          <input type="submit" value="Proceed">
        </form>
      </section>
    </div>
    <video autoplay loop muted plays-inline class="back-vid">
      <source src="assets/video.mp4" type="video/mp4">
  </video>
  </main>

  <footer>
    <p>&copy; 2023 Velocity Motors. All rights reserved.</p>
  </footer>

  <script src="script/app.js"></script>
</body>
</html>
