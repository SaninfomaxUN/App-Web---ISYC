<?php 

include("conexion.php");


//Login
if(isset($_POST["btningresar"]))
{
	$email   = $_POST["email"];
	$passw   = $_POST["passw"];
	$query = mysqli_query($conn,"SELECT * FROM contacts WHERE email = '$email' AND passw ='$passw'");
	$nr = mysqli_num_rows($query);
	if($nr==1)
	{
		$NombreRec = mysqli_query($conn,"SELECT fullname, id FROM contacts WHERE email = '$email' AND passw ='$passw'");
		$nombre = mysqli_fetch_array($NombreRec);
		session_start();
		$_SESSION['id_usuario'] = $nombre['id'];
		echo "<script> alert('Bienvenid@ $nombre[fullname] !!'); window.location='../index.php' </script>";
	}else
	{
		echo "<script> alert('Usuario y/o Contraseña incorrectos. Por favor intente de nuevo.'); window.location='login.php' </script>";
	}
}

//Registrar
if(isset($_POST["btnregistrar"]))
{	
	$nombre = $_POST["usuario"];
	$email   = $_POST["email"];
	$passw   = $_POST["passw"];
	$sqlgrabar = "INSERT INTO contacts(fullname,passw,email) values ('$nombre','$passw','$email')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='login.php' </script>";
	}else 
	{
		echo "Error: ".$sql."<br>".mysql_error($conn);
	}
}


?>