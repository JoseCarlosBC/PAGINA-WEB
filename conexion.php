<?php
	class Conexion extends mysqli
	{
		

		public function __construct()
		{
			$servidor="localhost";
			$basedatos="sistemadeventas";
			$usuario="root";
			$password="";

			parent::__construct($servidor,$usuario,$password,$basedatos);
			$this->query("SET NAMES 'utf8';");
			$this->connect_errno ? die('Error en la conexion') : $error="Conectado a ".$basedatos;
			//echo $error;
			unset($error);
		}
	}
?>
