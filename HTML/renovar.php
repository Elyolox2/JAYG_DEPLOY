<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/styles.css" rel="stylesheet "type="text/css"></link>
    <title>Libros</title>
</head>
<body>
    <!-- cabecera -->
    <?php include_once('../Recursos/header_in.php') ?>
        <!-- Parte central y básica de la página -->
        <main>
        <!-- buscar -->
        <section class="div_buscar">
            <div class="cuadro_busqueda" style="padding: 25px 50px">
                

                <?php


                if(isset($_SESSION['Documento'])){
                $Documento = $_SESSION['Documento'];
                $queryprestamo = mysqli_query($conn, "SELECT * FROM `prestamo` WHERE `Documento` = $Documento");
                }else{
                    header("Location: ../index.php", TRUE, 301);
                }

                while($mostrar = mysqli_fetch_array($queryprestamo)){
                    $idlibro = $mostrar["IdLibro"];
                    $FechaDev = $mostrar["FechaDev"];
                $querylibro = mysqli_query($conn, "SELECT Nombre,Editorial,Autor,Genero,ID_libro,Dsr,Img FROM libros where ID_libro like '$idlibro'");


                
                echo "<table style=>";
                while($mostrar = mysqli_fetch_array($querylibro)){

                    $color = "background-color: rgba(135, 157, 251, 0.7);";
                    $bgcolor = "border: solid 1px rgba(135, 157, 251, 0.7);";
                    $msg="<b style='text-decoration:underline;'><br><b>"; 
                    if (date("Y-m-d") > $FechaDev){$msg="<b style='text-decoration:underline;'><br><br>Plazo vencido<b>";
                        $color = "background-color: rgba(255, 0, 0, 0.6);";
                        $bgcolor = "border: solid 1px rgba(255, 0, 0, 0.6);"; }

                 echo "<tr style='max-height:200px;".$color."'>";
                 echo "<td style='padding:15px; width:10vw; vertical-align:top;".$bgcolor."'><a href=../HTML/Libro.php?Libro=".utf8_encode($mostrar['ID_libro'])."><img style='width:10vw' src=".$mostrar['Img']." ></img><a></td>";
                 echo "<td style='padding:15px; width:10vw; vertical-align:top;".$bgcolor."'>".utf8_encode($mostrar['Nombre'])."</td>";
                 echo "<td style='padding:15px; width:10vw; vertical-align:top;".$bgcolor."'>".utf8_encode($mostrar['Autor'])."</td>";
                 echo "<td style='padding:15px; width:40vw; vertical-align:top; overflow:hidden;".$bgcolor."'>".utf8_encode($mostrar['Dsr'])."</td>";
                 echo "<td style='padding:15px; width:10vw; vertical-align:top;".$bgcolor."'>".$FechaDev.$msg."</td>";

                }}
                $result = mysqli_num_rows($queryprestamo);
                if($result == 0){echo "<img style='width: 15vw; display: flex; margin: 0 auto;' src='../ICONS/investigacion.png'></img><br><p style='text-align: center;'>Aun no has reservado nada</p>";}
             ?>
            </table>

            </div>
        </section>
    </main>
    <!-- footer -->
    <script src="../JS/footer_in.js"></script>
</body>
</html>