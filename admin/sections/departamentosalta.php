<?php include("../vistas/header.php"); ?>

    <form action="../models/guardar_departamentos.php" id="departCrearFrorm" method="POST">
        <div class="row">
        <div class="col-12 headings">Creación de departamentos</div>
        </div>
        <div class="form-floating mt-4 mb-3">
            <input type="text" class="form-control" name="txtNombre" id="floatingInput" required placeholder="Nombre del departamento">
            <label for="floatingInput">Nombre</label>
        </div>
        <div class="form-floating mb-4">
            <input type="text" class="form-control" name="txtDescripcion" id="floatingInput" placeholder="Descripción del departamento">
            <label for="floatingInput">Descripción</label>
        </div>
        <button type="submit" name="action" value="Crear departamento" class="btn btn-success">Crear departamento</button>
    </form>
<?php include("../vistas/footer.php"); ?>