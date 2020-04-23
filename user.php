<?php
	$user=array("jose","cesar","jhon");
	$pass=array(111,222,333);

	$estado=false;

	$nombre=$_POST['nombre'];
	$password=$_POST['pass'];

	$tam=count($user);

	for($x=0; $x<$tam;$x++)
	{
		if($user[$x]==$nombre && $pass[$x]==$password)
		{
			$estado=true;
		}
	}

	if($estado)
	{
		header("location:ventas.html");
	}
	else
	{
		header("location:index.html");
	}
?>