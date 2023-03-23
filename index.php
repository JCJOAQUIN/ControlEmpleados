<!DOCTYPE html>
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
<body id="signBody">
    <?php $url="http://".$_SERVER['HTTP_HOST']."/controlempleados"?>
    <section class="d-flex flex-column justity-content-center aling-items-center d-inline-block" id="login">
        <h1 class="mb-2 mt-3 text-center" id="titleLogin">Grupo Playa del Mar estación Minatitlán</h1>
        <h2 class="mb-2 mt-2 text-center" id="subTitleLogin">Sistema de Control de Asistencia</h2>
        <div class="row">
            <div class="col-6 mt-4">
                <h3 class="text-end" id="bienvenida">¡Bienvenido!</h3>
            </div>
            <div class="col-6">
                <div id='reloj' class="text-center">
                    <div class='reloj-contenedor' id='contenedor'>
                        <div id='hora' Style="font-size:4rem; color:var(--primary);"></div>
                        <div id='fecha' name="fecha" Style="font-size:1.5rem; color:var(--primary);"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row " id="form">
            <div class="col-1 col-lg-1"></div>
            <div class="col-10 col-lg-10" id="singSpace">
                <div class="row">
                    <div class="col-5 col-lg-5 loginSide" id="loginSing">
                        <div class="cabecera">                                                       
                            <h5 class="mb-4" id="tituloFirmar">Ingrese su clave de empleado para firmar su entrada o salida</h5>
                        </div>
                        <form action="./admin/models/asistencia.php" method="POST">
                            <div class="form-group" id="sign">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" name="marcar" placeholder="Clave de empleado" required>
                                    <label for="floatingInput" id="lavelClaveEmp" >Clave de empleado</label>
                                  </div>
                                  <input class="btn btn-success mt-4 mb-4" name="action" value="Marcar entrada" type="submit">
                                  <input class="btn btn-warning mt-4 mb-4" name="action" value="Marcar salida" type="submit">
                            </div>
                        </form>
                        <div id="linkSesion">
                            <a href="<?php echo $url;?>/login.php"><h5>Iniciar sesión como administrador</h5></a>
                        </div>
                        <div class="mt-4 text-muted">
                            <p>Tel: 922-221-3887 <br>  
                            Email: serviciominatitlan@hotmail.com <br> 
                            Blvd. Instituto Tecnológico #2902 Col. la fuente Minatitlán, Veracruz, 96729</p> 
                        </div>
                    </div>
                    <div class="col-7 col-lg-7 loginSide mt-4" id="signInformation">
                        <img src="./images/mina.jpg" class="rounded float-end w-100" alt="...">
                    </div>
                </div>
            </div>
            <div class="col-1 col-lg-1"></div>
        </div>        
    </section>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/reloj.js"></script>
</body>
</html>