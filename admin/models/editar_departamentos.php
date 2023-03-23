<?php 
    include("../config/db.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM departamentos WHERE id = $id";
        $result = mysqli_query($conexion, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $id = $row['id'];
            $name = $row['nombre'];
            $description = $row['descripcion'];
        }
    }
    if(isset($_POST['edit'])){
        $id = $_GET['id'];
        $name = $_POST['txtNombre'];
        $description = $_POST['txtDescripcion'];
        $query = "UPDATE departamentos set nombre='$name', descripcion='$description' WHERE id = $id";
        mysqli_query($conexion, $query);
        header("Location: ../sections/departamentoslist.php");
    }
?>