<?php
	include('ValidarUser.php');

	$validar = new ValidarUsuario;

	$nombre=$_POST['nombre'];
	$password=$_POST['pass'];

	$resultado=$validar->ValidarUser($nombre, $password);

	var_dump($resultado);

	if($resultado->num_rows == 1) 
	{
		header("location:ventas.php");
	}
	else
	{
		header("location:index.html");
	}
?>