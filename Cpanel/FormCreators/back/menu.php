<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // echo $_POST["Action"];
    if ($_POST["Action"] == "Insert") {
        $conn = new mysqli("localhost", "markerla_markerla", "oDkE9+H%_G1(", "markerla_Marker");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO  `menu` (`Name`, `Parents`, `Rate`, `URL`) VALUES ('" . $_POST["Name"] . "', '" . $_POST["Parents"] . "', '" . $_POST["Rate"] . "', '" . $_POST["URL"] . "');";
        $conn->set_charset("utf8");
        if ($conn->query($sql) === true) {
            // echo "New record created successfully";
        } else {
            // echo "Error:   -" . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
    if ($_POST["Action"] == "Edit") {
    }
} else {
}
ob_start();
$url = '../index.php?pages=menu';
while (ob_get_status()) {
    ob_end_clean();
}
header("Location: $url");
