<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //echo $_POST["Action"];
    if ($_POST["Action"] == "Insert") {
        $conn = new mysqli("localhost", "markerla_markerla", "oDkE9+H%_G1(", "markerla_Marker");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //  `ID`,  `ImageURL`,  `Title`,  LEFT(`Body`, 256),  `logo`
        $sql = "INSERT INTO `writing_and_marking` ( `ImageURL`,  `Title`,`Body`,  `logo`) VALUES ('" . $_POST["ImageURL"] . "', '" . $_POST["Title"] . "', '" . $_POST["Body"] . "', '" . $_POST["logo"] . "');";
        $conn->set_charset("utf8");
        if ($conn->query($sql) === true) {
            //echo "New record created successfully";
        } else {
            //echo "Error:   -" . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
    if ($_POST["Action"] == "Edit") {
    } else if ($_POST["Action"] == "Delete") {
        $conn = new mysqli("localhost", "markerla_markerla", "oDkE9+H%_G1(", "markerla_Marker");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //  `ID`,  `ImageURL`,  `Title`,  LEFT(`Body`, 256),  `logo`
        $sql = "delete `writing_and_marking` where ID =  ;";
        $conn->set_charset("utf8");
        if ($conn->query($sql) === true) {
            //echo "New record created successfully";
        } else {
            //echo "Error:   -" . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
} else {
    $conn = new mysqli("localhost", "markerla_markerla", "oDkE9+H%_G1(", "markerla_Marker");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //  `ID`,  `ImageURL`,  `Title`,  LEFT(`Body`, 256),  `logo`
    $sql = "delete from `writing_and_marking` where ID = " . $_GET["ID"] . " ;";
    $conn->set_charset("utf8");
    if ($conn->query($sql) === true) {
        //echo "New record created successfully";
    } else {
        //echo "Error:   -" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
ob_start();
$url = '../index.php?pages=writing_and_marking';
while (ob_get_status()) {
    ob_end_clean();
}
header("Location: $url");
