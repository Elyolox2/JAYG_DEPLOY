<!DOCTYPE html>
<html lang="es">    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Digital Library</title>
    <link href="../CSS/styles.css" rel="stylesheet "type="text/css"></link>
            <!-- Smartsupp Live Chat script -->
            <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '32e2b689e4156e29cb7d828eb11494f2145635a1';
        window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
        })(document);
        </script>
</head>


<body>

    <!-- cabecera -->
    <?php 
    require_once('../PHP/conexion.php');

        if(isset($_POST['botonbuscar'])){
            $buscar = strval($_POST['cajabuscar']);
            $queryusuarios = mysqli_query($conn, "SELECT Nombre,Editorial,Autor,Genero,ID_libro,Dsr,Img FROM libros where Nombre like '%$buscar%'");
            }else{
               echo("<script>window.location = '../index.php'</script>");
            }
    include_once('../Recursos/header_in.php') ?>

    <!-- Parte central y básica de la página -->
    <main>
        <!-- buscar -->
        <section class="div_buscar">
            <div class="cuadro_busqueda" style="padding: 25px 50px">
                <table>

                <?php
                $color = "background-color: rgba(135, 157, 251, 0.7);";
                $bgcolor = "border: solid 1px rgba(135, 157, 251, 0.7);";
                while($mostrar = mysqli_fetch_array($queryusuarios)){
                    echo  "<tr style='max-height:200px;".$color."'>";
                    echo "<td style='padding:15px; width:10vw; vertical-align:top;".$bgcolor."'><a href=../HTML/Libro.php?Libro=".$mostrar['ID_libro']."><img style='height:30vh; width:10vw' src=".$mostrar['Img']." ></img><a></td>";
                    echo "<td style='padding:15px; width:10vw; vertical-align:top;".$bgcolor."'>".utf8_encode($mostrar['Nombre'])."</td>";
                    echo "<td style='padding:15px; width:10vw; vertical-align:top;".$bgcolor."'>".utf8_encode($mostrar['Autor'])."</td>";
                    echo "<td style='padding:15px; width:40vw; vertical-align:top; overflow:hidden;".$bgcolor."'>".utf8_encode($mostrar['Dsr'])."</td>";

                }
                $result = mysqli_num_rows($queryusuarios);
                if($result == 0){echo "<img style='width: 15vw; display: flex; margin: 0 auto;' src='../ICONS/investigacion.png'></img><br><p style='text-align: center;'>No hay resultados, Intentalo de nuevo</p>";}
             ?>
            </table>

            </div>
        </section>
    </main>
    <!-- footer -->
    <footer>
        <img src="../IMAGES/JAG.PNG">
        <p>
            I. E. Jose Acevedo y Gomez - Medellin<br>
            Imaginary Strokes - Grado 11° 2022<br>
            Docente: Jorge Luis Rojas<br>
            Correo: imaginaryacount@gmail.com
        </p>
    </footer>

    <!-- script -->
    <script src="../JS/function.js"></script>
</body>
</html>