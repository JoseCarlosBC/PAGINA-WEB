<?php
	include('conexion.php');

	$con=new Conexion();

	$user=$_POST['nombre'];
	$password=$_POST['pass'];

	$query="SELECT * FROM `usuarios` WHERE user='$user' AND contraseña='$password'";
	$usuario=$con->query($query);
	$con->close();

	if($resultado->num_rows==1) 
	{
		header("location:ventas.html");
	}
	else
	{
		header("location:index.html");
	}
?>