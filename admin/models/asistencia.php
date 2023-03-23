<?php
    include_once("../config/db.php");
    if(isset($_POST['action']))
    {
        $claveemp = $_POST['marcar'];
        $marca = $_POST['action'];
        if($marca == "Marcar entrada"){
            $marca = 1;
        }
        else if($marca == "Marcar salida"){
            $marca = 2;
        }
        $datos = "SELECT * FROM empleados WHERE clave_empleado = $claveemp";
        $datosemp = mysqli_query($conexion, $datos);
        $row = mysqli_fetch_array($datosemp);
        $idemp = $row['id'];
        $depart = $row['id_departamento'];    
        date_default_timezone_set('America/Mexico_City');        
        $fecha = date("d/m/Y");
        $hora = date("g:i"); 
        $query = "INSERT INTO asistencias(id_empleado, id_departamento, tipo_marcado) VALUES ('$idemp', '$depart', '$marca')";
        $result = mysqli_query($conexion, $query);
        if(!$result)
        {
            die('Query failed');
        }
        header('Location: ../../index.php');
    }
?>