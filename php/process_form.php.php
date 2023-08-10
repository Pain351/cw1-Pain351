<?php
require '../php/config.php'; // Make sure to include your database configuration

// Retrieve the booking type and form data
$bookingType = $_POST['booking_type'];
$formData = $_POST;

// Define SQL queries for different booking types
$sqlQueries = [
    'appointment' => "INSERT INTO appointment_table (name, email, phone, preferred_date, message) VALUES (?, ?, ?, ?, ?)",
    'car_ride' => "INSERT INTO car_ride_table (name, email, phone, event_date, message) VALUES (?, ?, ?, ?, ?)",
    'drift_track' => "INSERT INTO drift_track_table (name, email, phone, preferred_date, car_model) VALUES (?, ?, ?, ?, ?)",
    'buy_car_parts' => "INSERT INTO buy_car_parts_table (part_name, quantity, address) VALUES (?, ?, ?)"
];

// Prepare and execute the appropriate query
$stmt = mysqli_prepare($conn, $sqlQueries[$bookingType]);
$params = array_values($formData);
mysqli_stmt_bind_param($stmt, str_repeat('s', count($params)), ...$params);
$result = mysqli_stmt_execute($stmt);

// Prepare the response data
$response = ['success' => false, 'message' => 'Failed to insert data.'];

if ($result) {
    $response['success'] = true;
    $response['message'] = 'Data inserted successfully.';
}

echo json_encode($response);
?>
