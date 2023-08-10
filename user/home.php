<?php
require '../php/config.php';
if (!isset($_COOKIE['id'])) {
  // Redirect to the login page
  header("Location: login.php");
  exit();
}
?>
<!--html code-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velocity Motors</title>
    <link rel="stylesheet" href="../style/styles.css">
    <link rel="stylesheet" href="style/styles.css">
</head>
<body>
    <header>
        <a href="index.html"><div class="logo">
            <img id="pnglogo" src="assets/logo.png" alt="logo"> </div></a>
        <div class="login"><a href="user/login.php">Logout</a></div>
    </header>
    <main class="content">
        <div class="container">
            <section class="one">
                <video autoplay loop muted plays-inline class="back-vid">
                    <source src="assets/speed.mp4" type="video/mp4">
                </video>
               <div class="company">
                   <h1 class="name">Velocity Motors</h1>
                   <h5 class="moto">Accelarte your Drive</h5>
               </div>
               <div>
                   <p class="intro">At Velocity Motors, we understand that your car is more than just a means of transportation; 
                       it's an expression of your individuality and style. 
                       As the premier car modifier, we are passionate about transforming ordinary 
                       vehicles into extraordinary masterpieces that turn heads and leave a 
                       lasting impression.</p>
               </div>
           </section>
            <div class="wrapper">
                <section class="two">
                    <div class="title_home">
                            <h3>Book appointment</h3>
                        </div>
                       <div class="text-cont">
                        <form action="../php/appointment.php" method="post">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" required>

                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" required>

                        <label for="phone">Phone:</label>
                        <input type="tel" name="phone" id="phone" required>

                        <label for="date">Preferred Date:</label>
                        <input type="date" name="date" id="date" required>

                        <label for="message">Message (Optional):</label>
                        <textarea name="message" id="message" rows="4"></textarea>
                        <input type="submit" value="Proceed">
                        </form>
                       </div>
                  </section>
                   <section class="three">
                        <div class="title_home">
                            <h3>Car Meetups Registration</h3>
                        </div>
                        <div class="text-cont">
                        <form action="../php/meetup.php" method="post">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" required>

                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" required>

                        <label for="phone">Phone:</label>
                        <input type="tel" name="phone" id="phone" required>

                        <label for="date">Preferred Date:</label>
                        <input type="date" name="date" id="date" required>
                        </select>

                        <label for="message">Message (Optional):</label>
                        <textarea name="message" id="message" rows="4"></textarea>
                        <input type="submit" value="Proceed">
                          </form>
                        </div>
                   </section>
                    <section class="four">
                        <div class="title_home">
                                <h3>Drift Track Booking</h3>
                            </div>
                            
                            <div class="text-cont">
                            <form action="../php/track.php" method="post">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" required>

                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" required>

                            <label for="phone">Phone:</label>
                            <input type="tel" name="phone" id="phone" required>

                            <label for="date">Preferred Date:</label>
                        <input type="date" name="date" id="date" required>
                        

                            <label for="car_model">Car Model:</label>
                            <input type="text" name="car_model" id="car_model" required>
                            <input type="submit" value="Proceed">
                          </form>
                            </div>
                    </section>
                   <section class="five">
                    <div class="title_home">
                            <h3>Car Parts</h3>
                        </div>

                        <div class="text-cont">
                        <form action="../php/parts.php" method="post">
                        <label for="part_name">Part Name:</label>
                        <input type="text" name="part_name" id="part_name" required>

                        <label for="quantity">Quantity:</label>
                        <input type="number" name="quantity" id="quantity" required>

                        <label for="address">Shipping Address:</label>
                        <textarea name="address" id="address" rows="4" required></textarea>
                        <input type="submit" value="Proceed">
                          </form>
                        </div>
                   </section>
            </div>
        </div>
    </main>
</body>
</html>