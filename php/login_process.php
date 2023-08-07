<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace the following with your database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "velocity_motors";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Sanitize and validate data here (optional)

    // Check the credentials against the database
    $sql = "SELECT id, username, password FROM user WHERE username = '$username'";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user["password"])) {
            // Login successful, store user data in session
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["username"] = $user["username"];

            // Redirect to a secure page after login (change "dashboard.php" to the desired page)
            header("Location: ../user/home.html");
            exit();
        } else {
            // Invalid password
            $_SESSION["login_error"] = "Invalid username or password.";
            header("Location: ../user/home.html");
            exit();
        }
    } else {
        // User not found
        $_SESSION["login_error"] = "Invalid username or password.";
        header("Location: ../user/home.html");
        exit();
    }

    // Close the database connection
    $conn->close();
} else {
    // Redirect to the login page if the form is not submitted
    header("Location: ../user/home.html");
    exit();
}
?>
