<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="../CSS/formularios.css" rel="stylesheet"></link>
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
    <header>
        <a href="../index.php" class="a_jag"><img src="../IMAGES/JAG.PNG" class="img_jag"></a> 
        <h1>Biblioteca Institucional</h1>
    </header>
    <main>
        <div class="cuadro_formulario">

            <h1>Iniciar Sesión</h1>
            <p>Ingresa desde tu cuenta de la Biblioteca JAG</p>
            <form action="../../MDL/PHP/login.php" method="POST">
                <input class="caja_texto" name="usuario" type="text" required placeholder="&nbsp;Nombre Completo" onkeyup="javascript:this.value=this.value.toUpperCase();">
                <input class="caja_texto" name="contra" type="text" required placeholder="&nbsp;Constraseña">
                <input class="boton" type="submit" value="Iniciar Sesión">
            </form>
            <?php 
            if (isset($_GET['UserError'])){
            echo ($UserError = $_GET['UserError']);}
            ?>
            <br>
            <a href="recuperar_contraseña.html">¿Olvidaste tu Constraseña?</a>
        </div>
    </main>
    <script src="../JS/footer_in.js"></script>
</body>
</html>