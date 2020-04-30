<?php
	require_once "../modelos/agregarsolicitudModelo.php";
	
	class agregarsolicitudControlador extends agregarsolicitudModelo{
		public function agregar_solicitud_controlador(){

			$dni=mainModel::limpiar_cadena($_POST['dnis']);
			$apenom=mainModel::limpiar_cadena($_POST['apenomS']);
			$fecha_nacimiento=mainModel::limpiar_cadena($_POST['fecha_nacimientoS']);
			$edad=mainModel::limpiar_cadena($_POST['edad']);
			$sexo=mainModel::limpiar_cadena($_POST['sexo']);
			$celular=mainModel::limpiar_cadena($_POST['celular']);
			$correo=mainModel::limpiar_cadena($_POST['correo']);
			$direccion_origen=mainModel::limpiar_cadena($_POST['direccion_origen']);
			$departamento_origen=mainModel::limpiar_cadena($_POST['departamento_origen']);
			$provincia_origen=mainModel::limpiar_cadena($_POST['provincia_origen']);
			$distrito_origen=mainModel::limpiar_cadena($_POST['distrito_origen']);
			$contacto_covid=mainModel::limpiar_cadena($_POST['contacto_covid']);
			$sintomas=mainModel::limpiar_cadena($_POST['sintomas']);
			$dias_sintomas=mainModel::limpiar_cadena($_POST['dias_sintomas']);
			$no_vulnerable=mainModel::limpiar_cadena($_POST['no_vulnerable']);
			$enfermedad_cronica=mainModel::limpiar_cadena($_POST['enfermedad_cronica']);
			$nombre_enfermedad=mainModel::limpiar_cadena($_POST['nombre_enfermedad']);
			if (isset($_POST['gestante'])) {
				$gestante=$_POST['gestante'];
			}else{
				$gestante=0;
			}

			if (isset($_POST['padre_hijos'])) {
				$padre_hijos=$_POST['padre_hijos'];
			}else{
				$padre_hijos=0;
			}

			if (isset($_POST['menor_edad'])) {
				$menor_edad=$_POST['menor_edad'];
			}else{
				$menor_edad=0;
			}

			$financia_viaje=mainModel::limpiar_cadena($_POST['financia_viaje']);
			$direccion_destino=mainModel::limpiar_cadena($_POST['direccion_destino']);
			$distrito_destino=mainModel::limpiar_cadena($_POST['distrito_destino']);
			$acepta_dj=mainModel::limpiar_cadena($_POST['acepta_dj']);
			$acepta_tdatos=mainModel::limpiar_cadena($_POST['acepta_tdatos']);
			$codigo_solicitud=mainModel::limpiar_cadena($_POST['codigo_solicitud']);

			$fecha_inscripcion=date('Y-m-d');
			$hora_inscripcion=date('H:m:s');
			$estado_tramite=0;

			$datos=[
				"dni"=>$dni,
				"apenom"=>$apenom,
				"fecha_nacimiento"=>$fecha_nacimiento,
				"edad"=>$edad,
				"sexo"=>$sexo,
				"celular"=>$celular,
				"correo"=>$correo,
				"direccion_origen"=>$direccion_origen,
				"departamento_origen"=>$departamento_origen,
				"provincia_origen"=>$provincia_origen,
				"distrito_origen"=>$distrito_origen,
				"contacto_covid"=>$contacto_covid,
				"sintomas"=>$sintomas,
				"dias_sintomas"=>$dias_sintomas,
				"no_vulnerable"=>$no_vulnerable,
				"enfermedad_cronica"=>$enfermedad_cronica,
				"nombre_enfermedad"=>$nombre_enfermedad,
				"gestante"=>$gestante,
				"padre_hijos"=>$padre_hijos,
				"menor_edad"=>$menor_edad,
				"financia_viaje"=>$financia_viaje,
				"direccion_destino"=>$direccion_destino,
				"distrito_destino"=>$distrito_destino,
				"acepta_dj"=>$acepta_dj,
				"acepta_tdatos"=>$acepta_tdatos,
				"codigo_solicitud"=>$codigo_solicitud,

				"fecha_inscripcion"=>$fecha_inscripcion,
				"hora_inscripcion"=>$hora_inscripcion,
				"estado_tramite"=>$estado_tramite
			];

			$agregar_solicitud=agregarsolicitudModelo::agregar_solicitud_modelo($datos);
			if($agregar_solicitud){
				session_start();
				$_SESSION['dni']=$dni;
				echo $_SESSION['dni'];
				return header("Location: http://localhost/inscripcionTraslado/fichaConsulta.php");
			}else{
				echo "no se registro";
			}
		}
	}
	$respuesta=agregarsolicitudControlador::agregar_solicitud_controlador();