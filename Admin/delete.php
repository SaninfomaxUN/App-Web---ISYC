<?php
// Process delete operation after confirmation
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Include config file
    require_once "config.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM contacts WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: index.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter
    if(empty(trim($_GET["id"]))){
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, charset="UTF-8"/>
    <title>Borrar Registro</title>
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
                                    <h2 class="text-center">Eliminar registro</h2>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center readCard">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                                    <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                                    <p>Está seguro que deseas borrar el registro?</p><br>
                                    <small class="form-text text-danger">Esta accion NO se puede deshacer!</small>
                                </div>
                                
                                <div class="card-footer text-muted text-center">
                                    <input type="submit" value="Si, Estoy Seguro" class="btn btn-danger">
                                    <a href="index.php" class="btn btn-default">No, regresar.</a>
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