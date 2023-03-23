<?php 
    include("../config/db.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM empleados WHERE id = $id";
        $result = mysqli_query($conexion, $query);
        if(!$result){
            die('Error al eliminar el empleado');
        }
        header('Location: ../sections/empleadoslist.php');
    }
?>