<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/styles.css" rel="stylesheet "type="text/css"></link>
    <title>Libros</title>
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
    <?php include_once('../Recursos/header_in.php'); require_once('../PHP/conexion.php'); ?>
    <main class="main_libro">
        <section class="descripcion">
            <?php 

            if(isset($_GET['Libro'])){
                $idlibro = $_GET['Libro'];
                $querylibros = mysqli_query($conn, "SELECT * FROM `libros` where `ID_libro` = $idlibro");
                }else{
                    header("Location: ../index.php", TRUE, 301);
                }
                while($mostrar = mysqli_fetch_array($querylibros)){

                 echo "<h1 style='padding:20px; max-width:18vw vertical-align:initial; vertical-align:initial;'>".utf8_encode($mostrar['Nombre'])."</h1>";
                 echo "<p style='padding:20px; max-width:18vw vertical-align:initial; vertical-align:initial;'>".utf8_encode($mostrar['Dsr'])."</p>";
                 echo "<p style='padding:20px; max-width:18vw vertical-align:initial;'>Autor: ".utf8_encode($mostrar['Autor'])."</p>";
                 ?>
                 <!-- <?php echo "href=../PHP/Sprestamo.php?Libro=".$_GET['Libro']?> -->
            <div> 
            
            <?php if (isset($_SESSION['usuario'])){$href="./PHP/Sprestamo.php?Libro=".$_GET['Libro'];}else{$href = "#";}?>

            <span><a class="botoncitos" id="boton_ventana_aviso_reservar" <?php echo $href;?> >Reservar</a></span>


            </div>
        </section>
        <?php echo "<section class='imagen_libro'><img style='height:72vh;width:23vw;padding:20px;' src=".$mostrar['Img']."></img></section>"; }?>
    </main>

    <!-- RESERVAR -->
    <section class="ventana_aviso unactive" id="ventana_aviso_reservar">
        <div class="ventana_opaca" id="ventana_opaca_reservar"></div>
            <article class="popup" id="popup_reservar">
                <header>
                    <h1>Acceso Denegado</h1> 
                    <span class="boton_cerrar_popup" id="boton_cerrar_popup_reservar"><p class="icono_x">✖</p></span>
                </header>    
                <main>
                    <div>
                        <p>Para poder acceder a reservar es necesario que inicies sesión</p>
                        <a href="../HTML/iniciar_sesion.php">Iniciar Sesión</a>
                    </div>
                </main>
            </article>
    </section>

    <!-- footer -->
    <script src="../JS/footer_in.js"></script>
    <script src="../JS/function.js"></script>
</body>
</html>