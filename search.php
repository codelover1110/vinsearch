<?php
// Include the necessary files
require_once 'config.php';
require_once 'DatabaseConnection.php';
require_once 'VehicleListings.php';

// Establish a database connection
$db = new DatabaseConnection();

// Create a new instance of the VehicleListings class
$listings = new VehicleListings($db);

// Get the VIN from the user input (assuming it's stored in $_POST['vin'])
$vin = $_POST['vin'];

// Search for the vehicle by VIN
$result = $listings->search($vin);
echo json_encode($result);

// Close the database connection
$db->close();
exit;