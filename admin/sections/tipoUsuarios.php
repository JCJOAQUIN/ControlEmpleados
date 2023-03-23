<?php include("../vistas/header.php"); ?>
<div class="container">
    <div class="row">
        <form action="../models/guardar_tusuarios.php" class="horariosFrorm" method="POST">
            <div class="row">
                <div class="col-12 mb-4 headings">Creación de Tipos de usuarios</div>
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
                        <input type="text" class="form-control" name="txtDescripcion" id="floatingInput" placeholder="Descripción">
                        <label for="floatingInput">Descripción</label>
                    </div>
                </div>
            </div>
            <button type="submit" name="action" value="Registrar tipo de usuario" class="btn btn-success w-20">Registrar tipo de usario</button>
        </form>
    </div>
</div>
<?php include("../vistas/footer.php"); ?>