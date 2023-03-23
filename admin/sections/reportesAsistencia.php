<?php 
ob_start();
include("../config/db.php"); 

session_start();
	if(!isset($_SESSION['usuario'])){
		header('Location: ../../controlempleados/login.php');
	}else{
		if($_SESSION['usuario'] == "ok"){
			$nombreUsuario=$_SESSION["nombreUsuario"];
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2{
            text-align: center;
        }
        #estacion{
            color: #595959;
            text-align: center;
        }
        
        #title-asistencia{
            font-size:1.3rem;
            color: #595959;
            font-weight: 500;
        }
        table{
            width:100%;
            text-align: center;
        }
        thead{
            border-bottom: 2px solid grey;
        }

        tbody{
            margin-top:30px;
        }
        #key{
            width: 15%;
        }
        #name{
            width: 30%;
            
        }
        #key{
            width: 15%;
        }
        #key{
            width: 15%;
        }
        #key{
            width: 15%;
        }
        #key{
            width: 15%;
        }
    </style>
</head>
<body>
    <div>
        <h2>Grupo Playa del Mar</h2>
        <h2 id="estacion">Estación Minatitlán</h2>   
        <div id="title-asistencia">Asistencias</div> <br>
    <table>
        <thead>
            <tr>
                <th id="key">Clave</th>
                <th id="name">Nombre</th>
                <th id="dep">Departamento</th>
                <th id="date">Fecha</th>
                <th id="time">Hora de entrada</th>
                <th id="sign">Firmó</th>
                <br>
            </tr>
        </thead>
        <tbody>
        <?php
            $query = "SELECT * FROM asistencias ";
            $result_asistencias = mysqli_query($conexion,$query);
            while($row = mysqli_fetch_array($result_asistencias)){
                
                $qemp = mysqli_query($conexion,"SELECT * FROM empleados WHERE (id = $row[id_empleado])");
                $empleado = mysqli_fetch_array($qemp);
                $qdep = mysqli_query($conexion,"SELECT * FROM departamentos WHERE (id = $row[id_departamento])");
                $depa = mysqli_fetch_array($qdep);
                $tipo = 0;
                if($row['tipo_marcado'] == 1){
                    $tipo = "Entrada";
                }
                elseif($row['tipo_marcado'] == 2){
                    $tipo = "Salida";
                }
                if($empleado['id'] > 1){
            ?>
            <tr>
                <td><?php echo $empleado['clave_empleado'] ?></td>
                <td><?php echo $empleado['nombre'] ?> <?php echo $empleado['apaterno'] ?> <?php echo $empleado['amaterno'] ?></td>
                <td><?php echo $depa['nombre'] ?></td>
                <td><?php 
            $date_format = date('d/m/Y', strtotime($row['fecha']));
            echo $date_format; ?></td>
                <td><?php
                    $date_format = date('H:m: A', strtotime($row['fecha']));
                    echo $date_format; ?>
                </td>
                <td><?php echo $tipo?></td>
            </tr>
            <?php }}?>             
        </tbody>
    </table>
</body>
</html>
<?php 
    $html = ob_get_clean();
  require_once'../../admin/libreries/dompdf/autoload.inc.php';
  use Dompdf\Dompdf;
  $dompdf =new Dompdf();
  $dompdf->loadHtml($html);
  $dompdf->setPaper('letter');
  $dompdf->render();
  $dompdf->stream("Asistencias.pdf", array("Attachment" => false));
?>