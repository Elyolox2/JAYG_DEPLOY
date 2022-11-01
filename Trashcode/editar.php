<?php
include_once("conexion.php");
include_once("index.php");

$codigo = $_GET['Documento'];
$querybuscar = mysqli_query($conn, "SELECT * FROM usuarios WHERE Documento=$codigo");

while($mostrar = mysqli_fetch_array($querybuscar))
{
    $codigo = $mostrar['Documento'];
    $nombre = $mostrar['Nombre'];
    $correo = $mostrar['correo'];
    $telefono = $mostrar['Telefono'];
    $Tusuario = $mostrar['Tusuario'];
}
?>
<html>
    <head>
        <title>Imaginary</title>
        <meta charset="UTF-8">
        <link rel="Stylesheet" href="style.css">
    </head>
    <body>
        <div class="caja_popup2" id="formmodificar">
            <form method="POST" class="contenedor_popud">
                <table>
                    <tr><th colspan="2">modificar usuario</th></tr>
                    <tr>
                        <td>Codigo</td>
                        <td><input type="text" name="txtcodigo" value="<?php echo $codigo;?>" required ></td>
                    </tr>
                    <tr>
                        <td>Nombre</td>
                        <td><input type="text" name="txtnombre" value="<?php echo $nombre;?>" required></td>
                    </tr>
                    <tr>
                    <td>correo</td>
                        <td><input type="text" name="txtcorreo" value="<?php echo $correo;?>" required></td>
                    </tr>
                    <tr>
                    <td>telefono</td>
                        <td><input type="text" name="txttelefono" value="<?php echo $telefono;?>" required></td>
                    </tr>
                    <td>tusuario</td>
                        <td><input type="text" name="txttusuario" value="<?php echo $Tusuario;?>" required></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="index.php">Cancelar</a>
                            <input type="submit" name="btnmodificar" value="Modificar" onclick="javascript: return confirm('¿desea modificar a este usuario?');">
                        </td>
                    </tr>
                </table>
            </form>
        </div>

    </body>
</html>

<?php

if(isset($_POST['btnmodificar']))
{
    $codigo1 = $_POST['txtcodigo'];
    $nombre1 = $_POST['txtnombre'];
    $correo1 = $_POST['txtcorreo'];
    $telefono1 = $_POST['txttelefono'];
    $Tusuario1 = $_POST['txttusuario'];

    $querymodificar = mysqli_query($conn,"UPDATE usuarios SET Nombre='$nombre1',correo='$correo1',Telefono='$telefono1',Tusuario='$Tusuario1' WHERE Documento=$codigo1");
    echo "<script>window.location= 'index.php' </script>";

}
?>