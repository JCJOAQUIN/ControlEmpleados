<?php 
    include("../config/db.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM departamentos WHERE id = $id";
        $result = mysqli_query($conexion, $query);
        if(!$result){
            die('Error al eliminar el departamento');
        }
        header('Location: ../sections/departamentoslist.php');
    }
?>