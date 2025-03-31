<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "clothingshop";

$conn = new mysqli($host, $username, $password, $database);


if ($conn){
    mysqli_query($conn, "SET NAMES 'utf8' ");
    echo 'da ket noi thanh cong';
} else {
    echo 'ket noi that bai';
}

?>