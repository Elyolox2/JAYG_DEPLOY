<?php 
require_once('conexion.php');
session_start();
    date_default_timezone_set('America/Bogota');
    if(isset($_GET['Libro'])){
        
        $fecha_actual = date("Y-m-d");
        $FechaDev = (date("Y-m-d",strtotime($fecha_actual."+ 1 weeks"))); 
        $idlibro = $_GET['Libro'];
        $Documento = $_SESSION['Documento'];
        $sql = ("INSERT INTO `prestamo` (`Documento`, `ID_prestamo`, `IdLibro`, `FechaDev`) 
        VALUES ('$Documento', NULL, '$idlibro', '$FechaDev')");

        if (mysqli_query($conn, $sql)) {

            echo "<script> alert('Su prestamo fue exitoso');window.location= '../index.php' </script>";
            mysqli_close($conn);
        }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);}

    }else{
        header("Location: ../index.php", TRUE, 301);
        exit();}
        
?>