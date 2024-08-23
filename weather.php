<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);





$city = isset($_GET['city']) ? $_GET['city'] : 'London'; 

$apiKey = "ec42b1c4fef77541974273973160b776"; 
$apiUrl = "http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric";


$weatherData = file_get_contents($apiUrl);


$weatherArray = json_decode($weatherData, true);


header('Content-Type: application/json');
echo json_encode($weatherArray);

