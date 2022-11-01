<?php

    require_once('conexion.php');
    if (isset($_POST['usuario']) and isset($_POST['contra'])){

    $usuario = $_POST['usuario'];
    $contra = md5($_POST['contra']);
    $querylogin =mysqli_query($conn, "SELECT * FROM `usuarios` WHERE `Nombre`LIKE '$usuario' and `Passw` LIKE '$contra'");
    $query = "SELECT * FROM `usuarios` WHERE `Nombre` LIKE '$usuario' and `Passw` LIKE '$contra'";
    
    if ($result = $conn->query($query)) {
        while ($row = $result->fetch_assoc()) {
            $Tusuario = $row["Tusuario"];
            $Documento = $row["Documento"];}
        $result->free();
    }
    
    $resultados = mysqli_num_rows($querylogin);
    if ($resultados == 1 ){
        

        if (!isset($_SESSION['usuario']) && $Tusuario=="US"){
            session_start();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['Documento'] = $Documento;
            echo "<script> window.location= '../index.php'</script>";
            exit();

        }else if ($Tusuario=="BK"){
            echo "<script> alert('Su cuenta fue bloqueada por el administrador');window.location= '../HTML/iniciar_sesion.php' </script>";}
            else if ($Tusuario=="AD"){
                echo "<script> window.location= '../Trashcode/index.php'</script>";}
                exit();}

        else{
            $UserError = "<a><a style='color:red;'>Contraseña Incorrecta</a></a>";
            if (isset($UserError)){
                header("Location: ../HTML/iniciar_sesion.php?UserError=<?php echo $UserError", TRUE, 301);
               $_POST['UserError'] = $UserError;
               exit();

            }
        }
    }

?>