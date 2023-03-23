<!DOCTYPE html>
<?php 
include_once("../controlempleados/admin/config/db.php");
session_start();
if($_POST){
    if(($_POST['usuario']=="Estacion mina") && ($_POST['contrasena']=="gpdm281121mina")){
        $_SESSION['usuario']="ok";
        $_SESSION['nombreUsuario']="adminstrador";

        header('Location: ../../controlempleados/admin/index.php');
    }else{
        $mensaje="Error Usuario y/o contraseña inconrrecto";
    }
    $_SESSION['usuario'];    
    }
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="./images/gpmLogo.ico">

    <title>Control de empleados</title>
</head>
<body id="loginBody">
    <?php $url="http://".$_SERVER['HTTP_HOST']."/controlempleados"?>
    <section class="d-flex flex-column justity-content-center aling-items-center d-inline-block" id="login">
        <h1 class="mb-2 mt-3 text-center" id="titleLogin">Grupo Playa del Mar estación Minatitlán</h1>
        <h2 class="mb-2 mt-4 text-center" id="subTitleLogin">Sistema de Control de Asistencia</h2>
        <div class="row mt-5" id="form">
            <div class="col-2 col-lg-2"></div>
            <div class="col-8 col-lg-8" id="singSpace">
                <div class="row" >
                    <div class="col-6 col-lg-6 loginSide" id="loginSing">
                        <div class="container">
                        <div class="cabeceraLogin">                                                       
                            <h4 class="mb-5" id="tituloFirmar">Iniciar se sesión como administrador</h4>
                        </div>
                        </div>
                        <div class="container" id="adminLogin">
                            <?php if(isset($mensaje)) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $mensaje; ?>
                                </div>
                            <?php } ?>
                            <form method="POST" action="../../controlempleados/login.php">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="userLoginInput" name="usuario" placeholder="Usuario">
                                    <label for="userLoginInput">Usuario</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword" name="contrasena" placeholder="Contraseña">
                                    <label for="floatingPassword">Contraseña</label>
                                </div>
                                <button class="btn btn-success mb-3 me-5">Iniciar Sesión</button>
                                <a id="volverinicio" class="ms-5" href="index.php">Regresar</a>                            
                            </form>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6 loginSide" id="signInformation">
                        <div  class="text-center mt-5" id="imgLoginBox">
                            <img src="./images/Authentication_Monochromatic.svg" id="imgLogin" alt="Imagen de login adminstrador">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 col-lg-2"></div>
        </div>
    </section>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
</body>
</html>