<?php
	require_once "mainModel.php";
	class agregarsolicitudModelo extends mainModel{
		
		protected static function agregar_solicitud_modelo($datos){
			$conectar=mainModel::conectar();
			$sql="INSERT INTO t_solicitante(
				dni,apenom,fecha_nacimiento,edad,sexo,celular,correo,direccion_origen,departamento_origen,provincia_origen,distrito_origen,contacto_covid,sintomas,dias_sintomas,no_vulnerable,enfermedad_cronica,nombre_enfermedad,gestante,padre_hijos,menor_edad,financia_viaje,direccion_destino,distrito_destino,acepta_dj,acepta_tdatos,codigo_solicitud,fecha_inscripcion,hora_inscripcion,estado_tramite) VALUES('".$datos["dni"]."','".$datos["apenom"]."','".$datos["fecha_nacimiento"]."','".$datos["edad"]."','".$datos["sexo"]."','".$datos["celular"]."','".$datos["correo"]."','".$datos["direccion_origen"]."','".$datos["departamento_origen"]."','".$datos["provincia_origen"]."','".$datos["distrito_origen"]."','".$datos["contacto_covid"]."','".$datos["sintomas"]."','".$datos["dias_sintomas"]."','".$datos["no_vulnerable"]."','".$datos["enfermedad_cronica"]."','".$datos["nombre_enfermedad"]."','".$datos["gestante"]."','".$datos["padre_hijos"]."','".$datos["menor_edad"]."','".$datos["financia_viaje"]."','".$datos["direccion_destino"]."','".$datos["distrito_destino"]."','".$datos["acepta_dj"]."','".$datos["acepta_tdatos"]."','".$datos["codigo_solicitud"]."','".$datos["fecha_inscripcion"]."','".$datos["hora_inscripcion"]."','".$datos["estado_tramite"]."')";
			$conectar->query($sql);
			return $conectar;
		}
	}
