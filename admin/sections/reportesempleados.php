<?php include("../vistas/header.php"); ?>
<?php include("../config/db.php"); ?>

<div class="row">  
    <div class="col-12 mb-4 headings">Reportes de empleados</div>         
        <div class="table tablas">
            <div class="thead-dark tablasHead">
                <div class="row  text-center">
                    <div class="col-1 col-lg-2">Clave</div>
                    <div class="col-3 col-lg-4">Nombre</div>
                    <div class="col-2 col-lg-2">Departamento</div>
                    <div class="col-2 col-lg-2">Tipo de usuario</div>
                    <div class="col-2 col-lg-2">Reporte</div>                    
                </div>                
            </div>
            <div class="row text-center tablasBody">
            <?php
                $query = "SELECT * FROM empleados";
                $result_empleados = mysqli_query($conexion,$query);
                while($row = mysqli_fetch_array($result_empleados)){
                    $qdep = mysqli_query($conexion,"SELECT * FROM departamentos WHERE (id = $row[id_departamento])");
                    $depa = mysqli_fetch_array($qdep);
                    $qtusr = mysqli_query($conexion,"SELECT * FROM tipo_usuario WHERE (id = $row[tipo_usuario])");
                    $user = mysqli_fetch_array($qtusr);
                    if($row['id'] > 1){?>
                    
                    <div class="col-1 col-lg-2"><?php echo $row['clave_empleado']?></div>
                    <div class="col-3 col-lg-4"><?php echo $row['nombre']?> <?php echo $row['apaterno']?> <?php echo $row['amaterno']?></div>
                    <div class="col-2 col-lg-2"><?php echo $depa['nombre']?></div>
                    <div class="col-2 col-lg-2"><?php echo $user['nombre']?></div>
                    <div class=" col-2 col-lg-2">
                        <div class="row">
                            <a href="generacionreportes.php?id=<?php echo $row['id']?>" class="btn btn-primary">Más información</a>
                        </div>
                    </div>
                <?php }}?>
            </div> 
        </div>
    </div>
<?php include("../vistas/footer.php"); ?>