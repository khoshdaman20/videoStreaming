<?php

$FormName = $_POST["FormName"];


$conn = new mysqli("localhost", "markerla_markerla", "oDkE9+H%_G1(", "markerla_Marker");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




$conn->close();

ob_start();
$url = '../index.php';
while (ob_get_status()) {
    ob_end_clean();
}
header("Location: $url");
