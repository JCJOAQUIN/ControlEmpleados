<?php include("../vistas/header.php"); ?>
<?php include("../config/db.php"); ?>

<div class="row">
        <div class="col-12 headings">Tipos de usuarios</div>    
        <div class="table tablas">
            <div class="thead-dark text-center tablasHead">
                <div class="row">
                    <div class="col-1 col-lg-1">ID</div>
                    <div class="col-3 col-lg-3">Nombre</div>
                    <div class="col-3 col-lg-6">Descripción</div>
                    <div class="col-2 col-lg-2">Acciones</div>
                </div>
            </div>
            <div>
                <div class="row text-center tablasBody">
                <?php
                        $query = "SELECT * FROM tipo_usuario";
                        $result_tusuario = mysqli_query($conexion,$query);
                        
                        while($row = mysqli_fetch_array($result_tusuario)){
                            if($row['id'] > 1){
                                ?>
                            <div class="col-1 col-lg-1"><?php echo $row['id']?></div>
                            <div class="col-3 col-lg-3"><?php echo $row['nombre']?></div>
                            <div class="col-3 col-lg-6"><?php echo $row['descripcion']?></div>                            
                            <div class="col-2 col-lg-2">
                                <a class="btn btn-primary" href="editartusuario.php?id=<?php echo $row['id']?>">Editar</a>
                                <a class="btn btn-danger" href="../models/eliminar_tusuario.php?id=<?php echo $row['id']?>">Eliminar</a>
                            </div>
                    <?php }}?>
                </div>          
            </div>            
        </div>
    </div>
<?php include("../vistas/footer.php"); ?>