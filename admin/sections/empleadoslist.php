<?php include("../vistas/header.php"); ?>
<?php include("../config/db.php"); ?>

<div class="row">
        <div class="col-12 headings">Empleados</div>    
        <div class="table tablas">
            <div class="thead-dark text-center tablasHead">
                <div class="row">
                    <div class="col-1 col-lg-1">Clave</div>
                    <div class="col-3 col-lg-3">Nombre</div>
                    <div class="col-2 col-lg-2">Departamento</div>
                    <div class="col-2 col-lg-2">Tipo de usuario</div>
                    <div class="col-2 col-lg-2">Telefono</div>
                    <div class="col-2 col-lg-2">Estatus</div> 
                </div>
            </div>
            <div>
                <div class="row text-center tablasBody">
                    <?php
                        $query = "SELECT * FROM empleados";
                        $result_empleados = mysqli_query($conexion,$query);
                        while($row = mysqli_fetch_array($result_empleados)){
                            if($row['id'] > 1){?>
                            <div class="col-1 col-lg-1"><?php echo $row['clave_empleado']?></div>
                            <div class="col-3 col-lg-3"><?php echo $row['nombre']?></div>
                            <?php $query = "SELECT * FROM departamentos WHERE id = $row[id_departamento]";
                            $result_departamentos = mysqli_query($conexion,$query); 
                            $depart = mysqli_fetch_array($result_departamentos);
                            $nomdepa = $depart['nombre'];
                            ?>
                            <div class="col-3 col-lg-2"><?php echo $nomdepa?>                            
                            </div>
                            <div class="col-3 col-lg-2">
                            <?php                            
                                $query = "SELECT * FROM tipo_usuario WHERE id = $row[tipo_usuario]";
                                $result_tipo = mysqli_query($conexion, $query);
                                $tipodat = mysqli_fetch_array($result_tipo);
                                $tipo = $tipodat['nombre'];
                            ?>    
                            <?php echo $tipo?></div>
                            <div class="col-3 col-lg-2"><?php echo $row['telefono']?></div>
                            <div class="col-2 col-lg-2">
                                <a class="btn btn-primary" href="editarempleados.php?id=<?php echo $row['id']?>">Editar</a>
                                <a class="btn btn-danger" href="../models/eliminar_empleados.php?id=<?php echo $row['id']?>">Eliminar</a>
                            </div>
                        <?php }}?>
                </div>          
            </div>            
        </div>
    </div>

<?php include("../vistas/footer.php"); ?>