
<!DOCTYPE html>
<html lang="es">    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Digital Library</title>
    <link href="CSS/styles.css" rel="stylesheet "type="text/css"></link>
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
    <header>

        <section class="informacion_superior">
            <div class="jag">
                <p id="menu_hamburguesa">☰</p>     
                <a href="index.php" class="a_jag"><img src="IMAGES/JAG.PNG" class="img_jag"></a> 
                <h1>Biblioteca Institucional</h1>
            </div>
          
            <div class="usuarios">
                <?php
                    require_once ('PHP/conexion.php');
                    if (isset($_POST['usuario']) && isset($_POST['contra'])){
                    include_once('PHP/login.php');}else{session_start();} 
                if (isset($_SESSION['usuario'])){
                    echo '<a href="../MDL/PHP/Sesion/logout.php"><img src="ICONS/user-login-button.png" height="20px" width="20px"></a>';
                    echo '<a href="#" id="boton_ventana_aviso_cambiar"><img src="ICONS/login.png" height="20px" width="20px"></a>';
                }else{
                    echo '<a href="HTML/registrarse.html">Registrate</a>';
                    echo '<a href="HTML/iniciar_sesion.php">Iniciar Sesión</a>';
                }
                ?>
            </div> 
        </section>
        <section class="menu_principal">
            <ul id="menu_principal">
                <li><a href="index.php">Inicio</a></li>
                <?php
                if (isset($_SESSION['usuario'])){
                    echo '<li><a href="HTML/renovar.php">Renovar</a></li>';
                    echo '<li><a href="HTML/Novedades.php">Novedades</a></li>';
                }else{
                    echo '<li><a href="#" id="boton_ventana_aviso_renovar">Renovar</a></li>';
                    echo '<li><a href="#" id="boton_ventana_aviso_novedades">Novedades</a></li>';
                }?>
                <li><a href="HTML/Nosotros.php">Nosotros</a></li>
            </ul>
        </section>
    </header>



    <!-- POPUP -->
    <!-- CAMBIAR -->
    <section class="ventana_aviso unactive" id="ventana_aviso_cambiar">
        <div class="ventana_opaca" id="ventana_opaca_cambiar"></div>
            <article class="popup" id="popup_cambiar">
                <header>
                    <h1>Bienvenid@ <?php echo $_SESSION['usuario']; ?></h1> 
                    <span class="boton_cerrar_popup" id="boton_cerrar_popup_cambiar"><p class="icono_x">✖</p></span>
                </header>    
                <main>
                    <div>
                        <a href="HTML/cambiar_correo.html">Cambiar Correo</a>
                        <a href="HTML/cambiar_telefono.html">Cambiar Teléfono</a>
                        <a href="HTML/cambiar_contraseña.php">Cambiar Contraseña</a>
                    </div>
                </main>
            </article>
    </section>
    <!-- RENOVAR -->
    <section class="ventana_aviso unactive" id="ventana_aviso_renovar">
        <div class="ventana_opaca" id="ventana_opaca_renovar"></div>
            <article class="popup" id="popup_renovar">
                <header>
                    <h1>Acceso Denegado</h1> 
                    <span class="boton_cerrar_popup" id="boton_cerrar_popup_renovar"><p class="icono_x">✖</p></span>
                </header>    
                <main>
                    <div>
                        <p>Para poder acceder a renovar es necesario que inicies sesión</p>
                        <a href="HTML/iniciar_sesion.php">Iniciar Sesión</a>
                    </div>
                </main>
            </article>
    </section>
    <!-- NOVEDADES -->
        <section class="ventana_aviso unactive" id="ventana_aviso_novedades">
        <div class="ventana_opaca" id="ventana_opaca_novedades"></div>
            <article class="popup" id="popup_novedades">
                <header>
                    <h1>Acceso Denegado</h1> 
                    <span class="boton_cerrar_popup" id="boton_cerrar_popup_novedades"><p class="icono_x">✖</p></span>
                </header>    
                <main>
                    <div>
                        <p>Para poder acceder a novedades es necesario que inicies sesión</p>
                        <a href="HTML/iniciar_sesion.php">Iniciar Sesión</a>
                    </div>
                </main>
            </article>
    </section>


    
<!-- 
    correo contraseña contraseña -->



    <!-- Parte central y básica de la página -->
    <main>
        <!-- buscar -->
        <section class="div_buscar">
            <div class="cuadro_buscar">
                <!-- Division de la parte de busqueda -->
                <form action="HTML/Buscar.php" class="form_buscar" method="post">
                    <input type="text" placeholder="&nbsp;¿Qué estás buscando?" name="cajabuscar" class="cajabuscar">
                    <input type="submit" value="Buscar  🔍︎" name="botonbuscar" class="botonbuscar">
                </form>
                
                <p> Esribe el titulo de la obra, nombre del autor o género literario y dale a buscar 
                    para encontrar un libro</p>
            </div>
        </section>
    </main>
    <!-- footer -->
    <footer>
        <img src="IMAGES/JAG.PNG">
        <p>
            I. E. Jose Acevedo y Gomez - Medellin<br>
            Imaginary Strokes - Grado 11° 2022<br>
            Docente: Jorge Luis Rojas<br>
            Correo: imaginaryacount@gmail.com
        </p>
    </footer>


    <!-- script -->
    <script src="JS/function.js"></script>

</body>
</html> 