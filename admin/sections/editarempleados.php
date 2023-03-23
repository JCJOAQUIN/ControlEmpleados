<?php include("../vistas/header.php"); ?>
<?php include("../models/editar_empleados.php"); ?>

<div class="container">
    <div class="row">
        <form action="../models/editar_empleados.php?id=<?php echo $_GET['id'];?>" class="horariosFrorm method="POST" method="POST">
                <div class="row">
                    <div class="col-12 mb-4 headings">Editar empleado</div>
                </div>
                <div class="row">
            <div class="col-4">
                <fieldset disabled class="mb-3">
                    <div class="form-group">                        
                        <label for="disabledTextInput"  class="labelsDepa mb-2">ID Empleado</label>
                        <input type="text" name="txtid" id="disabledTextInput" required class="form-control" placeholder="<?php echo $id ?>">
                    </div>
                </fieldset>
            </div>            
        </div> 
                <div class="row mb-4">
                    <div class="col-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="txtNombre" required id="floatingInput" value="<?php echo $name ?>" placeholder="Nombre" autofocus>
                            <label for="floatingInput">Nombre</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="txtApaterno" required id="floatingInput" value="<?php echo $lname ?>" placeholder="Apellido paterno">
                            <label for="floatingInput">Apellido paterno</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="txtAmaterno" required id="floatingInput" value="<?php echo $slname ?>" placeholder="Apellido materno">
                            <label for="floatingInput">Apellido materno</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="txtEmail" required id="floatingInput" value="<?php echo $email ?>" placeholder="Email" autofocus>
                            <label for="floatingInput">Email</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="txtCempleado" required id="floatingInput" value="<?php echo $cemploye ?>" placeholder="Clave de empleado">
                            <label for="floatingInput">Clave de empleado</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="txtUsuario" required id="floatingInput" value="<?php echo $user ?>" placeholder="Usuario">
                            <label for="floatingInput">telefono</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-4">
                        <select class="form-select" name="selectDepartamento" aria-label="Default select example">
                            <option selected >Seleccionar departamento</option>
                            <?php
                                $query = "SELECT * FROM departamentos";
                                $result_departamentos = mysqli_query($conexion,$query);
                                while($row = mysqli_fetch_array($result_departamentos)){?>
                                <option value="<?php echo $row['0']?>"><?php echo $row['nombre']?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="col-4">
                    <select class="form-select"name="selectTusuario"  aria-label="Default select example">
                            <option selected>Seleccionar tipo de usuario</option>                            
                            <?php
                                $query = "SELECT * FROM tipo_usuario";
                                $result_tusuario = mysqli_query($conexion,$query);
                                while($row = mysqli_fetch_array($result_tusuario)){?>
                                <option value="<?php echo $row['0']?>"><?php echo $row['nombre']?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <button type="submit" name="edit" value="Editar empleado" class="btn btn-success w-20">Editar empleado</button>
                <a  class="btn btn-warning w-20" href="empleadoslist.php">Cancelar</a>
            </form>
    </div>
</div>
<?php include("../vistas/footer.php"); ?>