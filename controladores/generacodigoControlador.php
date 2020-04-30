<?php
	require_once "config/server.php";

	class generacodigoControlador{
		public function genera_codigo(){
			$conexion = new mysqli(SERVER,USER,PASS,DB);
			$conexion->set_charset("utf8");
			if ($conexion) {
				$sql=$conexion->query("SELECT id FROM t_solicitante");
				$respuesta=$sql->num_rows;
				if ($respuesta) {
					$letra = "VH";
					$respuesta++;
					for ($i=0; $i <= 8; $i++) { 
						$aleatorio=rand(0,9);
						$letra.=$aleatorio;
					}
					$codigo=$letra."-".$respuesta;
				}
			}
			return $codigo;
		}
		/*
			public function ejecutar_consulta_simple($consulta){
			$sql=generacodigoControlador::conectar()->query($consulta);
			$respuesta = $sql->num_rows;
			return $respuesta;
		}
		public function generar_codigo_aleatorio($letra,$longitud,$numero){
			for ($i=1; $i <= $longitud; $i++) { 
				$aleatorio=rand(0,9);
				$letra.=$aleatorio;
			}
			return $letra."-".$numero;
		}

		public function calcular_codigo_colicitud(){
			$consulta = mainModel::ejecutar_consulta_simple("SELECT id FROM t_acompañante");
			$numero = $consulta+1;
			$codigo=mainModel::generar_codigo_aleatorio("VH",8,$numero);
			return $codigo;
		}
		*/
	}
	$mostrar=generacodigoControlador::genera_codigo();