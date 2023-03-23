<?php include("../config/db.php"); ?>
<?php include("../vistas/header.php"); ?>

<div class="row">
    <div class="col-12 headings">
        Asistencias
        <div class="d-flex justify-content-end mb-4"> 
            <a href="../sections/reportesAsistencia.php" target="blank" class="btn btn-outline-secondary btn-sm">Descargar reporte pdf</a>
        </div>
    </div>
    <div class="table tablas">
        <div class="thead-dark tablasHead mb-2">
            <div class="row  text-center">
                <div class="col-1 col-lg-1">Clave</div>
                <div class="col-2 col-lg-3">Nombre</div>
                <div class="col-2 col-lg-2">Departamento</div>
                <div class="col-2 col-lg-2">Fecha</div>                    
                <div class="col-2 col-lg-2">Hora de entrada</div>
                <div class="col-2 col-lg-2">Firmó</div>
            </div>                
        </div>
        
        <div class="row text-center tablasBody">
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
            <div class="col-1 col-lg-1"><?php echo $empleado['clave_empleado'] ?></div>
            <div class="col-2 col-lg-3"><?php echo $empleado['nombre'] ?></div>
            <div class="col-2 col-lg-2"><?php echo $depa['nombre'] ?></div>
            <div class="col-2 col-lg-2"><?php 
            $date_format = date('d/m/Y', strtotime($row['fecha']));
            echo $date_format; ?></div>                    
            <div class="col-2 col-lg-2"><?php
            $date_format = date('H:m: A', strtotime($row['fecha']));
            echo $date_format; ?></div>
            <div class="col-2 col-lg-2"><?php echo $tipo?></div>  
            <?php }}?>              
        </div> 
    </div>
</div>
<?php include("../vistas/footer.php"); ?>