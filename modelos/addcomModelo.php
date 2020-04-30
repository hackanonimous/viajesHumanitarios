<?php
	require_once "../config/server.php";

	$mysqli = new mysqli(SERVER,USER,PASS,DB);
	$mysqli->set_charset("utf8");

	if(isset($_POST['dni'])){
		$dni = $_POST['dni'];
		$apenom = $_POST['apenom'];
		$fecha_nacimiento = $_POST['fecha_nacimiento'];
		$sexo = $_POST['sexo'];
		$parentesco = $_POST['parentesco'];
		$edad = $_POST['edad'];
		$codigo_solicitud = $_POST['codigo_solicitud'];
		$sql = "INSERT INTO t_acompañante  (dni,apenom,fecha_nacimiento,sexo,edad,parentesco,codigo_solicitud)VALUES('$dni','$apenom','$fecha_nacimiento','$sexo','$edad','$parentesco','$codigo_solicitud')";
		$sql2 = "SELECT * FROM t_acompañante WHERE codigo_solicitud = '$codigo_solicitud'";
		$mysqli->query($sql);
		$resultado=$mysqli->query($sql2);

		$json=array();
		while ($row=mysqli_fetch_array($resultado)) {
			$json[]=array(
				'id'=>$row['id'],
				'dni'=>$row['dni'],
				'apenom'=>$row['apenom'],
				'fecha_nacimiento'=>$row['fecha_nacimiento'],
				'sexo'=>$row['sexo'],
				'parentesco'=>$row['parentesco']
			);
		}

		$jsonstring=json_encode($json);
		echo $jsonstring; 
	}
