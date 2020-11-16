<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $address = $salary = "";
$name_err = $address_err = $salary_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Por favor ingrese el nombre del usuario.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Por favor ingrese un nombre válido.";
    } else{
        $name = $input_name;
    }
    
    // Validate address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Por favor ingrese una contraseña.";     
    } else{
        $address = $input_address;
    }
    
    // Validate salary
    $input_salary = trim($_POST["salary"]);
    if(empty($input_salary)){
        $salary_err = "Por favor ingrese el correo electronico del usuario.";     
    } else{
        $salary = $input_salary;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO contacts (fullname, passw, email) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_address, $param_salary);
            
            // Set parameters
            $param_name = $name;
            $param_address = $address;
            $param_salary = $salary;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, charset="UTF-8"/>
    <title>Ver Usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/heading.css">
    <link rel="stylesheet" href="css/body.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous"></script>
    <link rel="Shortcut Icon" href="Images/Logo_percent.ico" type="image/x-icon"/>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">PERCENT - Admin   <i class="far fa-id-card" style="color:#B39DDB;"></i></a>
            <img src="Images/Logo_percent Claro2.png" class="img-fluid" width="50px" alt="Hola">
            <a class="btn " style="background-color:#B39DDB;" href="../LoginRegistro/login.php" role="button">Cerrar Sesión</a>
        </div>
    </nav>
    

    <div class="wrapper">
        <div class="container-fluid containerread" >
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-info">
                        <div class="card-header ">
                            <div class="row justify-content-center align-items-center">
                                <div style="padding-top:15px;">
                                    <h2 class="text-center">Agregar Usuario</h2>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center readCard">
                        <p>Por favor completa el siguiente formulario, para agregar el usuario.</p>
                        <hr/>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                                    <label>Nombre</label>
                                    <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                                    <small id="emailHelp" class="form-text text-danger"><span class="help-block"><?php echo $name_err;?></span></small>
                                </div>
                                <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                                    <label>Contraseña</label>
                                    <input name="address" class="form-control"><?php echo $address; ?></input>
                                    <small id="emailHelp" class="form-text text-danger"><span class="help-block"><?php echo $address_err;?></span></small>
                                </div>
                                <div class="form-group <?php echo (!empty($salary_err)) ? 'has-error' : ''; ?>">
                                    <label>Correo electronico</label>
                                    <input type="text" name="salary" class="form-control" value="<?php echo $salary; ?>">
                                    <small id="emailHelp" class="form-text text-danger"><span class="help-block"><?php echo $salary_err;?></span></small>
                                </div>
                                <div class="card-footer text-muted text-center">
                                    <input type="submit" class="btn btn-primary" value="Agregar">
                                    <a href="index.php" class="btn btn-default">Cancelar</a>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>