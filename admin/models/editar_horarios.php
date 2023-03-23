<?php 
    include("../config/db.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM horarios WHERE id = $id";
        $result = mysqli_query($conexion, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $id = $row['id'];
            $name = $row['nombre'];
            $timein = $row['hora_entrada'];
            $timeout = $row['hora_salida'];
        }
    }
    if(isset($_POST['edit'])){
        $id = $_GET['id'];
        $name = $_POST['txtNombre'];
        $timein = $_POST['txtHoraEntrada'];        
        $timeout = $_POST['txtHoraSalida'];

        $query = "UPDATE horarios set nombre='$name', hora_entrada='$timein', hora_salida='$timeout' WHERE id = $id";
        mysqli_query($conexion, $query);
        header("Location: ../sections/horarioslist.php");
    }
?>