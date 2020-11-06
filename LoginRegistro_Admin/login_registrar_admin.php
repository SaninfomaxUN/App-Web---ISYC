<!--
Crear un login y una página para registrar a un nuevo usuario con los siguientes datos:
usuario y contraseña.


(index.html) Login 	  -> Si el usuario existe 	 -> principal.html
(index.html) Login    -> Si el usuario no existe -> (index.html) Login
 registrar.html       -> Nuevo usuario           -> (index.html) Login

El login tendrá la opción para registrar.
Usar "estilos.css" en el ejercicio.

-->

<?php

include("conexion_admin.php");

$numId_admin  = $_POST["numId_admin"];
$pass_admin   = $_POST["pass_admin"];

//Login 
if(isset($_POST["btningresar_admin"]))
{
	$query_admin = mysqli_query($conn_admin,"SELECT * FROM admin WHERE id = '$numId_admin' AND contraseña ='$pass_admin'");
	$nr_admin = mysqli_num_rows($query_admin);
	if($nr_admin==1)
	{
		$NombreRec_admin = mysqli_query($conn_admin,"SELECT Nombre FROM admin WHERE id = '$numId_admin' AND contraseña ='$pass_admin'");
		$nombre_admin = mysqli_fetch_array($NombreRec_admin);
		echo "<script> alert('Bienvenid@ Administrador/a: $nombre_admin[Nombre] !!'); window.location='redireccionar_admin_base.php' </script>";
	}else
	{
		echo "<script> alert('Usuario y/o Contraseña incorrectos. Por favor intente de nuevo.'); window.location='login_admin.html' </script>";
	}
}

/*Registrar
if(isset($_POST["btnregistrar_admin"]))
{	
	$nombre = $_POST["usuario"];
	$sqlgrabar = "INSERT INTO contacts(fullname,phone,email) values ('$nombre','$pass','$email')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='login_admin.html' </script>";
	}else 
	{
		echo "Error: ".$sql."<br>".mysql_error($conn);
	}
}*/


?>