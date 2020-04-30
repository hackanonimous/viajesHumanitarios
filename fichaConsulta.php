<?php
	//session_start();
	//if (isset($_SESSION['dni'])) {
	//	echo $_SESSION['dni'];
	//	session_destroy();
	//}
	include "modelos/consultainscripcionModelo.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />      
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">  
    <link rel="stylesheet" href="estilos.css">
    <script src="https://kit.fontawesome.com/6eb2dceae6.js" crossorigin="anonymous"></script>
    <title>Ficha Consulta Viaje Humanitario</title>  
  </head>
  <body>
     <header style="height: 70px">
     </header> 
    <div style="height: 30px;"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-md-2">
          <div class="card shadow-lg p-3 mb-5 bg-white ">
          	<div class="card-header">
          		<?php 
          			if (isset($_SESSION['dni'])) {
          				echo "<h3>Su registro de realizo con Exito</h3>";
          			}else{
          				echo "<h3>Consulta realizada</h3>";
          			}
          		 ?>
          	</div>
            <div class="card-body text-center">
            	<div class="card-header">DATOS DE REGISTRO</div>
            	<div class="espacio form-row">
                	<div class="col-md-12">
                		<h4>Nombres y Apellidos: <span class="badge badge-secondary"><?php echo $respuesta['apenom']?></span></h4>
                		<h4>Fecha de Registro: <span class="badge badge-secondary"><?php echo $respuesta['fecha_inscripcion']?></span></h4>
                		<h4>Hora de Registro: <span class="badge badge-secondary"><?php echo $respuesta['hora_inscripcion']?></span></h4>
                		<h4>Estado de Registro: <span class="badge badge-secondary"><?php if($respuesta['estado_tramite']==0){echo 'En Proceso';}if($respuesta['estado_tramite']==1){echo 'En Programacion';}if($respuesta['estado_tramite']==2){echo 'Programado';}?></span></h4>
                	</div>
                </div>
                <button class="btn btn-success" type="submit" hidden>Descargar Declaracion Jurada</button>
            </div> 
          </div>
        </div>       
      </div>                  
    </div> 
    <script src="jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="popper/popper.min.js"></script>	 	 	
    <script src="bootstrap4/js/bootstrap.min.js"></script>   	
    <script src="codigo.js"></script>
    <script src="ajax/addcom.js"></script>
  </body>
</html>
	