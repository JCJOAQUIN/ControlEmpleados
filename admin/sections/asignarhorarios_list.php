<?php include("../vistas/header.php"); ?>
<?php include("../config/db.php"); ?>

<div class="row">
        <div class="col-12 headings">Horarios asignados</div>    
        <div class="table tablas">
            <div class="thead-dark text-center tablasHead">
                <div class="row">
                    <div class="col-1 col-lg-1">Turno</div>
                    <div class="col-3 col-lg-3">Empleado</div>
                    <div class="col-3 col-lg-3">De</div>
                    <div class="col-3 col-lg-3">Hasta</div>
                    <div class="col-2 col-lg-2">Acciones</div>
                </div>
            </div>
            <div>
                <div class="row text-center tablasBody">
                    <?php
                        $query = "SELECT * FROM asignacion_horarios";
                        $result_horarios = mysqli_query($conexion,$query);
                        
                        while($row = mysqli_fetch_array($result_horarios)){?>
                            <div class="col-1 col-lg-1">
                                <?php
                                    $queryhorario = mysqli_query($conexion, "SELECT * FROM horarios WHERE (id = $row[id_horario])");
                                    $horario = mysqli_fetch_array($queryhorario); ?>
                                <?php echo $horario['nombre']?>
                            </div>
                            <div class="col-3 col-lg-3">
                                <?php
                                    $queryempleado = mysqli_query($conexion, "SELECT * FROM empleados WHERE (id = $row[id_empleado])");
                                    $empleado = mysqli_fetch_array($queryempleado); ?>
                                <?php echo $empleado['nombre']?> <?php echo $empleado['apaterno']?> <?php echo $empleado['amaterno']?>
                            </div>
                            <div class="col-3 col-lg-3"><?php echo $row['fecha_inicio']?></div>
                            <div class="col-3 col-lg-3"><?php echo $row['fecha_terminacion']?></div>
                            <div class="col-2 col-lg-2">
                                <a class="btn btn-primary" href="editarasighorario.php?id=<?php echo $row['id']?>">Editar</a>
                                <a class="btn btn-danger" href="../models/eliminar_asighorarios.php?id=<?php echo $row['id']?>">Eliminar</a>
                            </div>
                    <?php }?>
                </div>          
            </div>            
        </div>
    </div>
<?php include("../vistas/footer.php"); ?>