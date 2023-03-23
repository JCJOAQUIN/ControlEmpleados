<!DOCTYPE html>
<?php 
	session_start();
	if(!isset($_SESSION['usuario'])){
		header('Location: ../../controlempleados/login.php');
	}else{
		if($_SESSION['usuario'] == "ok"){
			$nombreUsuario=$_SESSION["nombreUsuario"];
		}
	}
?>
<html lang="es">
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../../css/style.css">
		<link rel="shortcut icon" href="../images/gpmLogo.ico">
		<link rel="shortcut icon" href="../../images/gpmLogo.ico">	
		<link rel="stylesheet" href="../../css/all.min.css">
		
		<title>Control de empleados</title>
</head>
<body>
	<?php $url="http://".$_SERVER['HTTP_HOST']."/controlempleados"?>
		<div class="d-flex">
			<!-- Sección del menu de administrador-->
			<div id="menuAdmin">      
				<div class="itemsMenu mb-3 mt-2 text-center">
				<img id="imgestacion" style="width:100px; border-radius:5px;" src="../../images/playa.jpg" alt="">
				</div>
				<div class="itemsMenu text-center" id="nombreAdmin">
					<h4>Estación minatitlán</h4>
				</div>				
				<div class="itemsMenu text-center" id="menuTitle">
					<h5>Menú administrador</h5>
					<hr id="separadorMenu">
				</div>
				<div id="menu">
					<div class="accordion" id="accordionExample">
						<div class="card menuOption">
							<div class="card-header heading">
								<h2 class="mb-0 ">
									<a class="btn title" data-toggle="collapse" data-target="#collapseinicio" aria-expanded="false" aria-controls="collapseinicio">
										Inicio
									</a>
								</h2>
							</div>
					
							<div id="collapseinicio" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">                
									<ul>
										<li><a class="subMenu" href="<?php echo $url;?>../admin/sections/asistenciaslist.php">Lista de asistencia</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card menuOption">
							<div class="card-header heading">
								<h2 class="mb-0 ">
									<a class="btn title" data-toggle="collapse" data-target="#collapseDepartamentos" aria-expanded="false" aria-controls="collapseDepartamentos">
										Departamentos
									</a>
								</h2>
							</div>
							<div id="collapseDepartamentos" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">                
									<ul>
										<li><a class="subMenu" href="<?php echo $url;?>../admin/sections/departamentoslist.php">Lista de departamentos</a></li>
										<li><a class="subMenu" href="<?php echo $url;?>../admin/sections/departamentosalta.php">Crear departamento</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card menuOption">
							<div class="card-header heading">
								<h2 class="mb-0 ">
									<a class="btn title" data-toggle="collapse" data-target="#collapseEmpleados" aria-expanded="false" aria-controls="collapseEmpleados">
											Empleados
									</a>
								</h2>
							</div>
							<div id="collapseEmpleados" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">                
									<ul>
										<li><a class="subMenu" href="<?php echo $url;?>../admin/sections/empleadoslist.php">Lista de empleados</a></li>
										<li><a class="subMenu" href="<?php echo $url;?>../admin/sections/empleadosalta.php">Alta de empleados</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card menuOption">
							<div class="card-header heading">
								<h2 class="mb-0 ">
									<a class="btn title" data-toggle="collapse" data-target="#collapseTusuarios" aria-expanded="false" aria-controls="collapseDepartamentos">
										Tipo de usarios
									</a>
								</h2>
							</div>
							<div id="collapseTusuarios" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">                
									<ul>
										<li><a class="subMenu" href="<?php echo $url;?>../admin/sections/tipousuariolist.php">Lista tipo usuarios</a></li>
										<li><a class="subMenu" href="<?php echo $url;?>../admin/sections/tipoUsuarios.php">Crear tipo usuario</a></li>									</ul>
								</div>
							</div>
						</div>
						<div class="card menuOption">
							<div class="card-header heading">
								<h2 class="mb-0 ">
									<a class="btn title" data-toggle="collapse" data-target="#collapseHorarios" aria-expanded="false" aria-controls="collapseHorarios">
										Horarios
									</a>
								</h2>
							</div>
							<div id="collapseHorarios" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">                
									<ul>
										<li><a class="subMenu" href="<?php echo $url;?>../admin/sections/horarioslist.php">Lista de horarios</a></li>
										<li><a class="subMenu" href="<?php echo $url;?>../admin/sections/horariosalta.php">Crear horario</a></li>
										<li><a class="subMenu" href="<?php echo $url;?>../admin/sections/asignarhorarios_list.php">Horarios asignados</a></li>
										<li><a class="subMenu" href="<?php echo $url;?>../admin/sections/asignarhorario.php">Asignar horario</a></li>
									</ul>
								</div>
							</div>	
						</div>  
						<div class="card menuOption">
							<div class="card-header heading">
								<h2 class="mb-0 ">
									<a class="btn title" href="<?php echo $url;?>../admin/sections/reportesempleados.php">
										Reportes de empleados
									</a>
								</h2>
							</div>        
						</div>

						<div class="card menuOption">
							<div class="card-header heading">
								<h2 class="mb-0 ">
									<a class="btn title" href="<?php echo $url;?>../admin/sections/ayuda.php">
										Ayuda
									</a>
								</h2>
							</div>        
						</div>  
						<div class="card menuOption">
							<div class="card-header heading">
								<h2 class="mb-0 ">
									<a href="<?php echo $url;?>../admin/sections/acercade.php" class="btn title">
										A cerca de
									</a>
								</h2>
							</div>        
						</div> 
						<div class="card menuOption">
							<div class="card-header heading">
								<h2 class="mb-0 ">
									<a class="btn title" href="../models/cerrarsesion.php">
										Cerrar sesión
									</a>
								</h2>
							</div>        
						</div> 
					</div>
				</div>
			</div>
			<div class="container main">
				<div class="row">        
					<div id="barTitle">
						<nav aria-label="breadcrumb bg-primary">
							<ol class="breadcrumb justify-content-center mt-4" id="title">
								<li class="breadcrumb-item h1" aria-current="page">Grupo Playa del Mar estación Minatitlán</li>
							</ol>
						</nav>  
					</div>
					
			
		
		
		
