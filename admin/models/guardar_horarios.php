<?php

    include_once("../config/db.php");
    if(isset($_POST['action']))
    {
        $name = $_POST['txtNombre'];
        $timein = $_POST['txtHoraEntrada'];
        $timeout = $_POST['txtHoraSalida'];
       $query = "INSERT INTO horarios(nombre, hora_entrada, hora_salida) VALUES ('$name', '$timein', '$timeout')";
        $result = mysqli_query($conexion, $query);
        if(!$result)
        {
            die('Query failed');
        }
        header('Location: ../sections/horariosalta.php');
    }
?>