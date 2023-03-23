<?php include("../vistas/header.php"); ?>
<?php include("../models/generar_reportes.php"); ?>

<div class="row">  
    <div class="col-12 mb-4 headings">Generación de reportes</div>
    <div class="col-12 mb-4 headings">Información del empleado</div>         

        <div class="reporte-emp">
            <div class="thead-dark ">
                <div class="row">
                    <div class="col-2 col-lg-2" name="id"> <h5>ID: <br><?php echo $idem ?></h5> </div>
                    <div class="col-4 col-lg-4" name="nombre"><h5>Nombre: <br><?php echo $name ?></h5></div>
                    <div class="col-3 col-lg-3" name="depa"><h5>Departamento: <br>
                    <?php
                        $query = "SELECT * FROM departamentos WHERE id = $dep";
                        $resultDep = mysqli_query($conexion, $query);
                        $departament = mysqli_fetch_array($resultDep);
                        echo $name = $departament[1];
                    ?>
                    </h5></div>
                    <div class="col-3 col-lg-3" name="mail"><h5>Email: <?php echo $mail ?></h5></div>
                </div>                
            </div><br>
            <div class="reporte-emp">
                <div class="row">
                    <div class="col-2 col-lg-2" name="telefono"><h5>Teléfono: <br><?php echo $phone ?></h5></div>
                    <div class="col-4 col-lg-4" name="tipousr"><h5>Tipo de usuario: <br>
                    <?php 
                        $query = "SELECT * FROM tipo_usuario WHERE id = $tipousr";
                        $tusrResult = mysqli_query($conexion, $query);
                        $tUser = mysqli_fetch_array($tusrResult);
                        echo $usuario = $tUser[1];
                    ?>
                    </h5></div>
                    <div class="col-3 col-lg-3" name="fechaalta"><h5>Fecha de alta: <br>
                    <?php
                    $date_format = date('d/m/Y', strtotime($alta));
                    echo $date_format; 
                    ?></h5></div>               
                </div>                
            </div>
        </div>
<?php include("../vistas/footer.php"); ?>