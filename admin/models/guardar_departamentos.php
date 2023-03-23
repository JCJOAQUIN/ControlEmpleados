<?php
    include_once("../config/db.php");
    if(isset($_POST['action']))
    {
        $name = $_POST['txtNombre'];
        $description = $_POST['txtDescripcion'];
        $query = "INSERT INTO departamentos(nombre, descripcion) VALUES ('$name', '$description')";
        $result = mysqli_query($conexion, $query);
        if(!$result)
        {
            die('Query failed');
        }
        header('Location: ../sections/departamentosalta.php');
    }
?>