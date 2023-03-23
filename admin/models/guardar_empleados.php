<?php

    include("../config/db.php");
    
    if(isset($_POST['action']))
    {
        $name = $_POST['txtNombre'];
        $lname = $_POST['txtApaterno'];
        $slname = $_POST['txtAmaterno'];
        $email = $_POST['txtEmail'];
        $cemploye = $_POST['txtCempleado'];
        $phone = $_POST['txtTelefono'];
        $departament = $_POST['selectDepartamento'];
        $typeuser = $_POST['selectTusuario'];
        $query = "INSERT INTO empleados (nombre, apaterno, amaterno, email, clave_empleado, telefono, id_departamento, tipo_usuario) VALUES ('$name', '$lname', '$slname', '$email', '$cemploye', '$phone', '$departament', '$typeuser')";
        $result = mysqli_query($conexion, $query);
        if(!$result)
        {
            die('Query failed');
        }
        header('Location: ../sections/empleadosalta.php');
    }
?>