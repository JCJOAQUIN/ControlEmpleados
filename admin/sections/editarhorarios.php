<?php include("../vistas/header.php"); ?>
<?php include("../models/editar_horarios.php"); ?>

    <form action="../models/editar_horarios.php?id=<?php echo $_GET['id'];?>" method="POST" class="horariosFrorm">
        <div class="row">
            <div class="col-12 mb-4 headings">Edición de horarios</div>
        </div>
        <div class="row">
            <div class="col-2">
            <fieldset disabled class="mb-3">
                <label for="disabledTextInput">ID horario</label>
                <div class="form-group">
                    <input type="text" id="disabledTextInput" name="txtID" class="form-control" placeholder="<?php echo $id ?>">
                </div>
            </fieldset>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-4">
                <div class="">
                    <label for="floatingInput">Nombre del horario</label>
                    <input type="text" class="form-control" name="txtNombre" id="floatingInput" required value="<?php echo $name ?>"  placeholder="Nombre del horario" autofocus>
                </div>
            </div>
            <div class="col-4">
                <div>
                    <label for="floatingInput">Hora de entrada</label>
                    <input type="time" class="form-control" name="txtHoraEntrada" id="floatingInput" required value="<?php echo $timein ?>">
                </div>
            </div>
            <div class="col-4">
                <div >
                    <label for="floatingInput">Hora de salida</label>
                    <input type="time" class="form-control" name="txtHoraSalida" id="floatingInput" required value="<?php echo $timeout ?>">
                </div>
            </div>
        </div>
        <button type="submit" name="edit" value="Editar horario"  class="btn btn-success w-20">Editar horario</button>
        <a  class="btn btn-warning w-20" href="horarioslist.php">Cancelar</a>
    </form>

<?php include("../vistas/footer.php"); ?>