<?php
	require_once "config/server.php";
	
	class consultainscripcionModelo{
		
		function consulta_inscripcion_modelo(){
			$mysqli = new mysqli(SERVER,USER,PASS,DB);
			$mysqli->set_charset("utf8");

			session_start();
			if (isset($_SESSION['dni'])) {
				$dni = $_SESSION['dni'];
				$sql="SELECT * FROM t_solicitante WHERE dni = '$dni'";
				$resultado=$mysqli->query($sql);
				$row=mysqli_fetch_array($resultado);
				session_destroy();
			}
			if (isset($_POST['dniConsulta'])) {
				$dni = $_POST['dniConsulta'];
				$sql="SELECT * FROM t_solicitante WHERE dni = '$dni'";
				$resultado=$mysqli->query($sql);
				$row=mysqli_fetch_array($resultado);
			}
			return $row;
		}
	}
$respuesta = consultainscripcionModelo::consulta_inscripcion_modelo();