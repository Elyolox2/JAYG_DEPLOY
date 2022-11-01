<?php
include_once("conexion.php");

?>

<html>
    <head>
        <title>Imaginary</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
     </head>
     <body>
         <table>
             <img src="imagen.png">
             <div id="barrabuscar">
                 <form method="POST">
                     <input type="submit" value="buscar" name="btnbuscar"><input type="text" name="txtbuscar" id="cajabuscar" placeholder="&#128270; ingresar nombre de usuario">
                 </form>
             </div>
             <tr><th colspan="6"><h1>lista usuarios</h1><th><a style="font-weight: normal; font-size: 14px;" onclick="abrirform()">agregar</a></th></tr>
             <tr>
                 <th>Nro</th>
                 <th>Tarjeta ID</th>
                 <th>Nombre</th>
                 <th>correo</th>
                 <th>telefono</th>
                 <th>cuenta</th>
                 <th>Accion</th>
             </tr>
             <?php
             if(isset($_POST['btnbuscar']))
             {
                 $buscar = $_POST['txtbuscar'];
                 $queryusuarios = mysqli_query($conn, "SELECT Documento,Nombre,correo,Telefono,Tusuario FROM usuarios where Nombre like '%$buscar%'");
             }
             else
             {
                 $queryusuarios = mysqli_query($conn,"SELECT * FROM  usuarios ORDER BY Documento asc");
             }
             $numerofila = 0;
             while($mostrar = mysqli_fetch_array($queryusuarios))
             {
                 $numerofila++;
                 echo"<tr>";
                 echo "<td>".$numerofila."</td>";
                 echo "<td>".$mostrar['Documento']."</td>";
                 echo "<td>".$mostrar['Nombre']."</td>";
                 echo "<td>".$mostrar['correo']."</td>";
                 echo "<td>".$mostrar['Telefono']."</td>";
                 echo "<td>".$mostrar['Tusuario']."</td>";
                 echo "<td style='width:26%'><a href=\"editar.php?Documento=$mostrar[Documento]\">modificar</a>
                 <a href=\"eliminar.php? Documento=$mostrar[Documento]\"onclick=\"return confirm('¿estas seguro de eliminar a $mostrar[Nombre]?')\">eliminar</a></td>";

             }
             ?>
         </table>
         <script>
             function abrirform(){
                 document.getElementById("formregistrar").style.display="block";
                 }
             function cancelarform(){
                 document.getElementById("formregistrar").style.display="none";
             }
             </script>
             <div class="caja_popup" id="formregistrar">
                 <form action="agregar.php" class="contenedor_popup" method="POST">
                     <table>
                         <tr><th colspan="2">nuevo usuario</th></tr>
                         <tr>
                        <td>Documento</td>
                        <td><input type="text" name="txtdocumento" value="<?php $Documento;?>" required ></td>
                    </tr>
                    <tr>
                        <td>Nombre</td>
                        <td><input type="text" name="txtnombre" value="<?php $nombre;?>" required></td>
                    </tr>
                    <tr>
                    <td>correo</td>
                        <td><input type="text" name="txtcorreo" value="<?php $correo;?>" required></td>
                    </tr>
                    <tr>
                    <td>telefono</td>
                        <td><input type="text" name="txttelefono" value="<?php $telefono;?>" required></td>
                    </tr>
                    <td>tusuario</td>
                        <td><input type="text" name="txttusuario" value="<?php $Tusuario;?>" required></td>
                    </tr>
                             <td colspan="2">
                             <button type="button" onclick="cancelarform()">cancelar</button>
                             <input type="submit" name="btnregistrar" value="registrar" onclick="javascript: return confirm('¿deseas registrar a este usuario?');">
                             </td>
                         </tr>
                     </table>
                 </form>
             </div>
            </body>
            </html>