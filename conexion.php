<?php
	class conexion extends mysqli
	{
		public function __construct()
		{
			parent::__construct('localhost','root','','Usuarios');
            $this->query("SET NAMES 'utf8';");
            $this->connect_errno ? die('Error en la conexion de la base de datos.') : $error="<br><br> Conectado con la base de datos: ";
            //echo $error;
            unset($error);
		}
	}
?>