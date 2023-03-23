<?php include("../vistas/header.php"); ?>
<?php include("../config/db.php"); ?>

<form action="../models/guardar_asignarhorarios.php" method="POST" class="horariosFrorm">
    <div class="row">
        <div class="col-12 headings mb-4">Asignación de horario</div>
    </div>
    <div class="row mb-5">
        <div class="col-6">
            <select class="form-select" name="selectempleado" required aria-label="Default select example">
                <option value="" selected>Seleccionar empleado</option>                            
                <?php
                    $query = "SELECT * FROM empleados";
                    $result_empleado = mysqli_query($conexion,$query);
                    while($row = mysqli_fetch_array($result_empleado)){
                        if($row['id'] > 1){                        
                ?>                            
                <option value="<?php echo $row['0']?>"> <?php echo $row['nombre']?> <?php echo $row['apaterno']?> <?php echo $row['amaterno']?></option>                
                <?php }}?>                
            </select>
            
        </div>
        <div class="col-6">
            <select class="form-select" name="selecthorario" required aria-label="Default select example">
                <option value=" " selected>Seleccionar Horario</option>                            
                <?php
                    $query = "SELECT * FROM horarios";
                    $result_horario = mysqli_query($conexion,$query);
                    while($row = mysqli_fetch_array($result_horario)){?>                            
                <option value="<?php echo $row['0']?>"><?php echo $row['nombre']?></option>
                <?php }?>
            </select>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-6">
            <div class="input-group">
                <input class="form-control" type="date" required name="fechainicio" placeholder="Recipient's text" aria-label="Recipient's " aria-describedby="my-addon">
                <div class="input-group-append">
                    <span class="input-group-text" id="my-addon">Fecha de inicio</span>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="input-group">
                <input class="form-control" type="date" required name="fechatermino" placeholder="Recipient's text" aria-label="Recipient's " aria-describedby="my-addon">
                <div class="input-group-append">
                    <span class="input-group-text" id="my-addon">Fecha de término</span>
                </div>
            </div>
        </div>

    </div>
    
    <div class="row">
        <div class="col-12 mt-4">
            
            </div>
        </div>
        <button type="submit" name="action" value="Asignar horario" class="btn btn-success w-20">Asignar horario</button>
    </form>
<?php include("../vistas/footer.php"); ?>