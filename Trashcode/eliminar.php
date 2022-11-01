<?php
include_once("conexion.php");
$cod = $_GET['Documento'];
mysqli_query($conn, "DELETE FROM usuarios WHERE Documento=$cod");
header ("location:index.php");
?>
