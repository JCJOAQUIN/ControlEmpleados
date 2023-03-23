<?php 
    include("../config/db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM empleados WHERE id = $id";
        $result = mysqli_query($conexion, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $idem = $row['id'];
            $clave = $row['clave_empleado'];
            $name = $row['nombre'];
            $mail = $row['email'];
            $dep = $row['id_departamento'];
            $phone = $row['telefono'];
            $tipousr = $row['tipo_usuario'];
            $alta = $row['alta'];
        }
        $depa = "SELECT * FROM departamentos WHERE id = $dep";
        $depquery = mysqli_query($conexion, $depa);
        $nombredepa = mysqli_fetch_array($depa);
        $depaname = $nombredepa['nombre'];

        $asist = "SELECT * FROM asistencia WHERE id_empleado = $idem";
        $asistquery = mysqli_query($conexion, $asist);
        $nombreasist = mysqli_fetch_array($asistquery);
        $isasit = $nombredepa['fecha'];
    }
?>