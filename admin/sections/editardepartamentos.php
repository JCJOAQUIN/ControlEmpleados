<?php include("../vistas/header.php"); ?>
<?php include("../models/editar_departamentos.php"); ?>
    <form action="../models/editar_departamentos.php?id=<?php echo $_GET['id'];?>" method="POST" id="edicionDepartForm">        
        <div class="row">
            <div class="col-12 mb-4 headings">Edición de departamentos</div>
        </div>
        <div class="row">
            <div class="col-4">
                <fieldset disabled class="mb-3">
                    <div class="form-group">                        
                        <label for="disabledTextInput"  class="labelsDepa mb-2">ID departamento</label>
                        <input type="text" name="txtid" id="disabledTextInput" class="form-control" placeholder="<?php echo $id ?>">
                    </div>
                </fieldset>
            </div>
        </div>        
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="txtNombre" id="floatingInput" required value="<?php echo $name ?>" placeholder="Nombre">
            <label for="floatingInput">Nombre</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="txtDescripcion" id="floatingInput" value="<?php echo $description ?>" placeholder="Descripción"></input>
            <label for="floatingInput">Descripción</label>
        </div>
        <button type="submit" name="edit" value="Editar departamento" class="btn btn-success mt-4">Editar departamento</button>
    </form>
<?php include("../vistas/footer.php"); ?>
