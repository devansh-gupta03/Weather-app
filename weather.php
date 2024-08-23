<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);




// Get city name from query parameter
$city = isset($_GET['city']) ? $_GET['city'] : 'London'; // Default to London if no city is provided

$apiKey = "ec42b1c4fef77541974273973160b776"; // Replace with your API key
$apiUrl = "http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric";

// Fetch data from the API
$weatherData = file_get_contents($apiUrl);

// Convert JSON data to PHP array
$weatherArray = json_decode($weatherData, true);

// Send the weather data back as JSON for JavaScript to use
header('Content-Type: application/json');
echo json_encode($weatherArray);

