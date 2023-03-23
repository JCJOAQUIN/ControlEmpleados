<?php 
    include("../config/db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM empleados WHERE id = $id";
        $result = mysqli_query($conexion, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $id = $row['id'];
            $name = $row['nombre'];
            $lname = $row['apaterno'];
            $slname = $row['amaterno'];
            $email = $row['email'];
            $cemploye = $row['clave_empleado'];
            $user = $row['usuario'];
            $password = $row['contrasena'];
        }
    }

    if(isset($_POST['edit'])){
        $id = $_GET['id'];
        $name = $_POST['txtNombre'];
        $lname = $_POST['txtApaterno'];
        $slname = $_POST['txtAmaterno'];
        $email = $_POST['txtEmail'];
        $cemploye = $_POST['txtCempleado'];
        $user = $_POST['txtUsuario'];
        $password = $_POST['txtContraseña'];
        $departament = $_POST['selectDepartamento'];
        $typeusr = $_POST['selectTusuario'];

        $query = "UPDATE empleados set nombre='$name', apaterno='$lname', amaterno='$slname', email='$email', clave_empleado='$cemploye', usuario='$user', contrasena='$password', id_departamento='$departament', tipo_usuario='$typeusr' WHERE id = $id";
        mysqli_query($conexion, $query);
        header("Location: ../sections/empleadoslist.php");
    }
        ?>