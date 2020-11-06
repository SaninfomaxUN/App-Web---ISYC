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

include("conexion.php");

$email   = $_POST["email"];
$passw   = $_POST["passw"];

//Login
if(isset($_POST["btningresar"]))
{
	$query = mysqli_query($conn,"SELECT * FROM contacts WHERE email = '$email' AND passw ='$passw'");
	$nr = mysqli_num_rows($query);
	if($nr==1)
	{
		$NombreRec = mysqli_query($conn,"SELECT fullname FROM contacts WHERE email = '$email' AND passw ='$passw'");
		$nombre = mysqli_fetch_array($NombreRec);
		echo "<script> alert('Bienvenid@ $nombre[fullname] !!'); window.location='../index.html' </script>";
	}else
	{
		echo "<script> alert('Usuario y/o Contraseña incorrectos. Por favor intente de nuevo.'); window.location='login.html' </script>";
	}
}

//Registrar
if(isset($_POST["btnregistrar"]))
{	
	$nombre = $_POST["usuario"];
	$sqlgrabar = "INSERT INTO contacts(fullname,passw,email) values ('$nombre','$passw','$email')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='login.html' </script>";
	}else 
	{
		echo "Error: ".$sql."<br>".mysql_error($conn);
	}
}


?>