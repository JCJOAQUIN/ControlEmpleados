<?php include("../vistas/header.php"); ?>
<?php include("../config/db.php"); ?>

<div class="container">
    <div class="row">
        <form action="../models/guardar_empleados.php" class="horariosFrorm" method="POST">
                <div class="row">
                    <div class="col-12 mb-4 headings">Alta de empleados</div>
                </div>
                <div class="row mb-4">
                    <div class="col-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="txtNombre" id="floatingInput" required placeholder="Nombre" autofocus>
                            <label for="floatingInput">Nombre</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="txtApaterno" id="floatingInput" required placeholder="Apellido paterno">
                            <label for="floatingInput">Apellido paterno</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="txtAmaterno" id="floatingInput" required placeholder="Apellido materno">
                            <label for="floatingInput">Apellido materno</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="txtEmail" id="floatingInput" required placeholder="Email" autofocus>
                            <label for="floatingInput">Email</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="txtCempleado" id="floatingInput" required placeholder="Clave de empleado">
                            <label for="floatingInput">Clave de empleado</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating">
                            <input type="number" class="form-control" name="txtTelefono" id="floatingInput" required placeholder="Teléfono">
                            <label for="floatingInput">Teléfono</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">                    
                    <div class="col-4">
                        <select class="form-select" name="selectDepartamento" aria-label="Default select example">
                            <option >Seleccionar departamento</option>
                            <?php
                                $query = "SELECT * FROM departamentos";
                                $result_departamentos = mysqli_query($conexion,$query);
                                while($row = mysqli_fetch_array($result_departamentos)){?>
                                <option value="<?php echo $row['0']?>"><?php echo $row['nombre']?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="col-4">
                        <select class="form-select" name="selectTusuario" aria-label="Default select example">
                            <option >Seleccionar tipo de usuario</option>                            
                            <?php
                                $query = "SELECT * FROM tipo_usuario";
                                $result_tusuario = mysqli_query($conexion,$query);
                                while($row = mysqli_fetch_array($result_tusuario)){?>                            
                            <option value="<?php echo $row['0']?>"><?php echo $row['nombre']?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <button type="submit" name="action" value="Registrar empleado" class="btn btn-success w-20">Registrar empleado</button>
            </form>
    </div>
</div>
<?php include("../vistas/footer.php"); ?>