<?php
require_once('conexion.php');

$nombre = $_POST ['nombre'];
$email = $_POST ['email'];
$telefono = $_POST ['tel'];
$Documento = $_POST ['Docu'];
$password = md5($_POST ['passw']);

$sql= ("INSERT INTO `usuarios` (`Documento`, `Nombre`, `correo`, `Tusuario`, `Passw`, `Telefono`)
VALUES ('$Documento', '$nombre', '$email', 'US', '$password', '$telefono')");

if (mysqli_query($conn, $sql)) {

    echo ("Exito en la insercion");
    (header("Location: ../index.php", TRUE, 301));
    exit();
    mysqli_close($conn);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>

