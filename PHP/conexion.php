<?php

$servername = "localhost";
$database ="biblos";
$username ="root";
$password ="";

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn) {
    die("Conection failed" .mysqli_connect_error());
}
console_log("conetion exitosa");

function console_log ($data){
    echo '<script>';
    echo 'console.log('.json_encode($data).')';
    echo '</script>';
}
?>  