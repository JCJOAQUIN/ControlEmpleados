<?php include("../vistas/header.php"); ?>
<?php include("../config/db.php"); ?>

<div class="row">
        <div class="col-12 headings">Horarios</div>    
        <div class="table tablas">
            <div class="thead-dark text-center tablasHead">
                <div class="row">
                    <div class="col-1 col-lg-1">ID</div>
                    <div class="col-3 col-lg-3">Nombre</div>
                    <div class="col-3 col-lg-3">Hora de entrada</div>
                    <div class="col-3 col-lg-3">Hora de salida</div>
                    <div class="col-2 col-lg-2">Acciones</div>
                </div>
            </div>
            <div>
                <div class="row text-center tablasBody">
                    <?php
                        $query = "SELECT * FROM horarios";
                        $result_horarios = mysqli_query($conexion,$query);
                        
                        while($row = mysqli_fetch_array($result_horarios)){?>
                            <div class="col-1 col-lg-1"><?php echo $row['id']?></div>
                            <div class="col-3 col-lg-3"><?php echo $row['nombre']?></div>
                            <div class="col-3 col-lg-3"><?php echo $row['hora_entrada']?></div>
                            <div class="col-3 col-lg-3"><?php echo $row['hora_salida']?></div>
                            <div class="col-2 col-lg-2">
                                <a class="btn btn-primary" href="editarHorarios.php?id=<?php echo $row['id']?>">Editar</a>
                                <a class="btn btn-danger" href="../models/eliminar_horarios.php?id=<?php echo $row['id']?>">Eliminar</a>
                            </div>
                    <?php }?>
                </div>          
            </div>            
        </div>
    </div>
<?php include("../vistas/footer.php"); ?>