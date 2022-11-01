<?php 
require_once('conexion.php');
session_start();

$UserError = "<a><a style='color:red;'>Las contraseñas no coinciden</a></a>";
$documento = ($_SESSION['Documento']);

if (isset($_POST['correo'])){
    $edit = $_POST['correo'];
    $tabla = "correo";}

if (isset($_POST['pass'])){
    if ($_POST['pass'] != $_POST['cpass']) {
    header("Location: ../HTML/cambiar_contraseña.php?UserError=<?php echo $UserError", TRUE, 301);}
    else{$edit = md5($_POST['pass']);
    $tabla = "Passw";}}

if (isset($_POST['tel'])){
    $edit = $_POST['tel'];
    $tabla = "Telefono";}

$query = mysqli_query($conn,"UPDATE `usuarios` SET `$tabla` = '$edit' WHERE `usuarios`.`Documento` = $documento");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completado</title>
    <link rel="stylesheet" href="../CSS/formularios.css">
</head>
<body>
    <header>
        <a href="../index.php" class="a_jag"><img src="../IMAGES/JAG.PNG" class="img_jag"></a>
        <h1>Biblioteca Institucional</h1>
    </header>
    <main>
        <div class="cuadro_formulario">
            <h1>Completado</h1>
            <p>Cambio efectuado en <?php echo $tabla; ?></p>
            <span><a href="../index.php">Volver al incio</a></span>
        </div>
    </main>
    <script src="../JS/footer_in.js"></script>
</body>
</html>