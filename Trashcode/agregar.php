<?php include_once("conexion.php");

$documento=$_POST['txtdocumento'] ;
$nombre   =$_POST['txtnombre'] ;
$correo  =$_POST['txtcorreo'] ;
$telefono  =$_POST['txttelefono'] ;
$tusuario  =$_POST['txttusuario'] ;

mysqli_query($conn, "INSERT INTO usuarios(Documento,Nombre,correo,Telefono,Tusuario) VALUES ('$documento','$nombre','$correo','$telefono','$tusuario')");
header("location:index.php");

?>