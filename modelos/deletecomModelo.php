<?php
	require_once "../config/server.php";

	$mysqli = new mysqli(SERVER,USER,PASS,DB);
	$mysqli->set_charset("utf8");

	if (isset($_POST['id'])) {
		$id=$_POST['id'];
		$query = "DELETE FROM t_acompañante WHERE id=$id";
		$query2 = "SELECT * FROM t_acompañante";
		$mysqli->query($query);
		$resultado=$mysqli->query($query2);

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
	