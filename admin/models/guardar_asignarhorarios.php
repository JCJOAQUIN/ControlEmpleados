<?php
    include_once("../config/db.php");
    if(isset($_POST['action']))
    {
        $nameEmpleado = $_POST['selectempleado'];
        $namehorario = $_POST['selecthorario'];
        $finicio = $_POST['fechainicio'];
        $ftermino = $_POST['fechatermino'];
        $query = "INSERT INTO asignacion_horarios(id_horario, id_empleado, fecha_inicio, fecha_terminacion) VALUES ('$namehorario','$nameEmpleado',  '$finicio', '$ftermino')";
        $result = mysqli_query($conexion, $query);
        if(!$result)
        {
            die('Query failed');
        }
        header('Location: ../sections/asignarhorario.php');
    }
?>