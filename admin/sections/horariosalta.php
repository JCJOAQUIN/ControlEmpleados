<?php include("../vistas/header.php"); ?>
<div class="container">
    <div class="row">
        <form action="../models/guardar_horarios.php" class="horariosFrorm" method="POST">
                <div class="row">
                    <div class="col-12 mb-4 headings">Creación de horarios</div>
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
                            <input type="time" class="form-control" name="txtHoraEntrada" id="floatingInput" required placeholder="Hora de entrada">
                            <label for="floatingInput">Hora de entrada</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating">
                            <input type="time" class="form-control" name="txtHoraSalida" id="floatingInput" required placeholder="Hora de salida">
                            <label for="floatingInput">Hora de salida</label>
                        </div>
                    </div>
                </div>
                <button type="submit" name="action" value="Registrar horario" class="btn btn-success w-20">Registrar horario</button>
            </form>
    </div>
</div>
<?php include("../vistas/footer.php"); ?>