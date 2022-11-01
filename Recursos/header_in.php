<header>
        <section class="informacion_superior">
            <div class="jag">
                <p id="menu_hamburguesa">☰</p>     
                <a href="../index.php" class="a_jag"><img src="../IMAGES/JAG.PNG" class="img_jag"></a> 
                <h1>Biblioteca Institucional</h1>
            </div>
          
            <div class="usuarios">
                <?php
                    require_once ('../PHP/conexion.php');
                    if (isset($_POST['usuario']) && isset($_POST['contra'])){
                    include_once('../PHP/login.php');}else{session_start();} 
                if (isset($_SESSION['usuario'])){
                    echo '<a href="../PHP/Sesion/logout.php"><img src="../ICONS/user-login-button.png" height="20px" width="20px"></a>';
                    echo '<a href="#" id="boton_ventana_aviso_cambiar"><img src="../ICONS/login.png" height="20px" width="20px"></a>';
                }else{
                    echo '<a href="../HTML/registrarse.html">Registrate</a>';
                    echo '<a href="../HTML/iniciar_sesion.php">Iniciar Sesión</a>';
                }
                ?>
            </div> 
        </section>
        <section class="menu_principal">
            <ul id="menu_principal">
                <li><a href="../index.php">Inicio</a></li>
                <?php
                if (isset($_SESSION['usuario'])){
                    echo '<li><a href="../HTML/renovar.php">Renovar</a></li>';
                    echo '<li><a href="../HTML/Novedades.php">Novedades</a></li>';
                }else{
                    echo '<li><a href="#" id="boton_ventana_aviso_renovar">Renovar</a></li>';
                    echo '<li><a href="#" id="boton_ventana_aviso_novedades">Novedades</a></li>';
                }?>
                <li><a href="../HTML/Nosotros.php">Nosotros</a></li>
            </ul>
        </section>
    </header>



    <!-- POPUP -->
    <section class="ventana_aviso unactive" id="ventana_aviso_cambiar">
        <div class="ventana_opaca" id="ventana_opaca_cambiar"></div>
            <article class="popup" id="popup_cambiar">
                <header>
                    <h1>Hola,  <?php echo $_SESSION['usuario']; ?></h1> 
                    <span class="boton_cerrar_popup" id="boton_cerrar_popup_cambiar"><p class="icono_x">✖</p></span>
                </header>    
                <main>
                    <div>
                        <a href="../HTML/cambiar_correo.html">Cambiar Correo</a>
                        <a href="../HTML/cambiar_telefono.html">Cambiar Teléfono</a>
                        <a href="../HTML/cambiar_contraseña.php">Cambiar Contraseña</a>
                    </div>
                </main>
            </article>
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
                        <a href="../HTML/cambiar_correo.html">Cambiar Correo</a>
                        <a href="../HTML/cambiar_telefono.html">Cambiar Teléfono</a>
                        <a href="../HTML/cambiar_contraseña.php">Cambiar Contraseña</a>
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
                        <a href="../HTML/iniciar_sesion.php">Iniciar Sesión</a>
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
                        <a href="../HTML/iniciar_sesion.php">Iniciar Sesión</a>
                    </div>
                </main>
            </article>
    </section>
