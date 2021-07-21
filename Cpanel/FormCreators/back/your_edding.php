<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //echo $_POST["Action"];
    if ($_POST["Action"] == "Insert") {
        $conn = new mysqli("localhost", "markerla_markerla", "oDkE9+H%_G1(", "markerla_Marker");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //   `ImageURL`,  `Title`,  LEFT(`Body`, 256) 
        $sql = "INSERT INTO `your_edding` ( `ImageURL`,  `Title`,`Body`) VALUES ('" . $_POST["ImageURL"] . "', '" . $_POST["Title"] . "', '" . $_POST["Body"] . "');";
        $conn->set_charset("utf8");
        if ($conn->query($sql) === true) {
            //echo "New record created successfully";
        } else {
            //echo "Error:   -" . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
    if ($_POST["Action"] == "Edit") {
    }
} else {
    $conn = new mysqli("localhost", "markerla_markerla", "oDkE9+H%_G1(", "markerla_Marker");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //  `ID`,  `ImageURL`,  `Title`,  LEFT(`Body`, 256),  `logo`
    $sql = "delete from `your_edding` where ID = " . $_GET["ID"] . " ;";
    $conn->set_charset("utf8");
    if ($conn->query($sql) === true) {
        //echo "New record created successfully";
    } else {
        //echo "Error:   -" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
ob_start();
$url = '../index.php?pages=your_edding';
while (ob_get_status()) {
    ob_end_clean();
}
header("Location: $url");
