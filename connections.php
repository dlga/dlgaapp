<?php

	function openBDConnection() {
		$host="mysql:host=localhost;dbname=dbdelegacion";
		$usuario="root";
		$password="";

		try{
			$conexion=new PDO($host,$usuario,$password,array(PDO::ATTR_PERSISTENT => true));
			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $conexion;
		}catch(PDOException $e){
			$_SESSION["errores"] = $e->getMessage();
			header("Location: index.php");
		}
	}

	function closeBDConnection($conexion) {
		$conexion=null;
	}

?>
