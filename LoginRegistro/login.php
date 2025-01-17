<?php 

include("login_registrar.php");

?>

<!DOCTYPE html>
<html>
    
<head>
	<title>Iniciar Sesión - Percent</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login_estilos.css">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="../Images/logo_login_blanco.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="login_registrar.php" method="POST">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-envelope"></i></span>
							</div>
							<input type="text" name="email" class="form-control input_user" value="" placeholder="Correo electronico" required>
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="passw" class="form-control input_pass" value="" placeholder="Contraseña" required>
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label color_blanco" for="customControlInline">Recordarme</label>
							</div>
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" name="btningresar" class="btn login_btn">Ingresar</button>
                        </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links color_blanco">
						No tienes una cuenta? <a href="registro.html" class="ml-2 color_amarilloQ blanco">Registrate</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a class="color_amarilloQ blanco" href="#">Olvidaste tu contraseña?</a>
					</div>
					<br>
					<div class="d-flex justify-content-center links color_blanco">
						Eres Administrador? <a href="../LoginRegistro_Admin/login_admin.html" class="ml-2 color_amarilloQ blanco">Ingresa</a>
					</div> 
				</div>
			</div>
		</div>
	</div>
</body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</html>