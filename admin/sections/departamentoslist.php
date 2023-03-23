<?php include("../vistas/header.php"); ?>
<?php include("../config/db.php"); ?>

<div class="row">
        <div class="col-12 headings">Departamentos</div>
    
        <div class="table tablaDepartamentos">
            <div class="thead-dark text-center mb-4 tablasHead">
                <div class="row">
                    <div class="col-2 col-lg-2">ID</div>
                    <div class="col-3 col-lg-2">Nombre</div>
                    <div class="col-5 col-lg-5">Descripción</div>
                    <div class="col-2 col-lg-3">Acciones</div>
                </div>
            </div>
            <div>
                <div class="row text-center mb-2 tablasBody">
                <?php
                        $query = "SELECT * FROM departamentos";
                        $result_departamentos = mysqli_query($conexion,$query);
                        while($row = mysqli_fetch_array($result_departamentos)){?>

                    <div class="col-1 col-lg-2"><?php echo $row['id']?></div>                    
                    <div class="col-2 col-lg-2"><?php echo $row['nombre']?></div>
                    <div class="col-3 col-lg-5"><?php echo $row['descripcion']?></div>
                    <div class="col-3 col-lg-3">
                        <a class="btn btn-primary" href="editardepartamentos.php?id=<?php echo $row['id']?>">Editar</a>
                        <a class="btn btn-danger" href="../models/eliminar_departamentos.php?id=<?php echo $row['id']?>">Eliminar</a>                        
                    </div>
                    <?php }?>
                </div>
                </div>          
            </div>        
        </div>
    </div>
<?php include("../vistas/footer.php"); ?>