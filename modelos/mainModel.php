<?php
	require_once "../config/server.php";
	require_once "../config/app.php";

	class mainModel{
		
		/* funcion de conexion */
		protected static function conectar(){
			$conexion = new mysqli(SERVER,USER,PASS,DB);
			$conexion->set_charset("utf8");
			return $conexion;
		}

		/* funcion de consultas simples */
		protected static function ejecutar_consulta_simple($consulta){
			$sql=mainModel::conectar()->query($consulta);
			$respuesta = $sql->num_rows;
			return $respuesta;
		}

		/* funcion de encriptar*/
		public function encryption($string){
			$output=FALSE;
			$key=hash('sha256', SECRET_KEY);
			$iv=substr(hash('sha256', SECRET_IV), 0, 16);
			$output=openssl_encrypt($string, METHOD, $key, 0, $iv);
			$output=base64_encode($output);
			return $output;
		}
		/* funcion de desencriptar  */
		
		public function decryption($string){
			$key=hash('sha256', SECRET_KEY);
			$iv=substr(hash('sha256', SECRET_IV), 0, 16);
			$output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
			return $output;
		}

		/* funcion para generar codigos aleatorios */
		protected static function generar_codigo_aleatorio($letra,$longitud,$numero){
			for ($i=1; $i <= $longitud; $i++) { 
				$aleatorio=rand(0,9);
				$letra.=$aleatorio;
			}
			return $letra."-".$numero;
		}
		
		/* funcion limpiar cadena */
		protected static function limpiar_cadena($cadena){
			$cadena=trim($cadena);
			$cadena=stripslashes($cadena);
			$cadena=str_ireplace("<script>", "", $cadena);
			$cadena=str_ireplace("</script>", "", $cadena);
			$cadena=str_ireplace("<script src>", "", $cadena);
			$cadena=str_ireplace("<script type=>", "", $cadena);
			$cadena=str_ireplace("SELECT * FROM", "", $cadena);
			$cadena=str_ireplace("DELETE FROM", "", $cadena);
			$cadena=str_ireplace("INSERT INTO", "", $cadena);
			$cadena=str_ireplace("DROP TABLE", "", $cadena);
			$cadena=str_ireplace("DROP TABLE", "", $cadena);
			$cadena=str_ireplace("TRUNCATE TABLE", "", $cadena);
			$cadena=str_ireplace("SHOW TABLES", "", $cadena);
			$cadena=str_ireplace("SHOW DATABASES", "", $cadena);
			$cadena=str_ireplace("<?php", "", $cadena);
			$cadena=str_ireplace("?>", "", $cadena);
			$cadena=str_ireplace("--", "", $cadena);
			$cadena=str_ireplace(">", "", $cadena);
			$cadena=str_ireplace("<", "", $cadena);
			$cadena=str_ireplace("[", "", $cadena);
			$cadena=str_ireplace("]", "", $cadena);
			$cadena=str_ireplace("^", "", $cadena);
			$cadena=str_ireplace("==", "", $cadena);
			$cadena=str_ireplace(";", "", $cadena);
			$cadena=str_ireplace("::", "", $cadena);
			$cadena=stripslashes($cadena);
			$cadena=trim($cadena);
			return $cadena;
		}

		/* funcion verificar datos */
		protected static function verificar_datos($filtro,$cadena){
			if (preg_match("/^".$filtro."$/",$cadena)) {
				return false;
			} else {
				return true;
			}
		}

		/* funcion verificar fechas */
		protected static function verificar_fecha($fecha){
			$valores=explode('-', $fecha);
			if (count($valores)==3 && checkdate($valores[1], $valores[2], $valores[0])) {
				return false;
			} else {
				return true;
			}
		}
	}