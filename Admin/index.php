<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, charset="UTF-8"/>
    <title>Percent - Admin</title>
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
        <div class="container ">
            <a class="navbar-brand js-scroll-trigger" href="index.php">PERCENT - Admin   <i class="far fa-id-card" style="color:#B39DDB;"></i></a>
            <img src="Images/Logo_percent Claro2.png" class="img-fluid" width="50px" alt="Hola">
            <a class="btn " style="background-color:#B39DDB;" href="../LoginRegistro/login.php" role="button">Cerrar Sesión</a>
        </div>
    </nav>
    <div class="container">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-info">
                            <div class="card-header ">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-md-8 col-sm-12 form-group mb-2 " style="padding-top:15px;">
                                        <h2 class="align-items-center">Base de Usuarios</h2>
                                    </div>
                                    <div class="col-md-3 col-sm-12 form-group mb-2" style="padding-top:15px;">
                                        <a href="create.php" class="btn btn-success pull-right">Agregar nuevo usuario</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                
                                <?php
                                // Include config file
                                require_once "config.php";
                                
                                // Attempt select query execution
                                $sql = "SELECT * FROM contacts";
                                if($result = mysqli_query($link, $sql)){
                                    if(mysqli_num_rows($result) > 0){
                                        echo "<table class='table table-bordered table-striped'>";
                                            echo "<thead>";
                                                echo "<tr>";
                                                    echo "<th>#</th>";
                                                    echo "<th>Nombre</th>";
                                                    echo "<th>Contraseña</th>";
                                                    echo "<th>Correo Electronico</th>";
                                                    echo "<th>Acción</th>";
                                                echo "</tr>";
                                            echo "</thead>";
                                            echo "<tbody>";
                                            while($row = mysqli_fetch_array($result)){
                                                echo "<tr>";
                                                    echo "<td>" . $row['id'] . "</td>";
                                                    echo "<td>" . $row['fullname'] . "</td>";
                                                    echo "<td>" . $row['passw'] . "</td>";
                                                    echo "<td>" . $row['email'] . "</td>";
                                                    echo "<td>";
                                                        echo "<a href='read.php?id=". $row['id'] ."' title='Ver' data-toggle='tooltip'><i class='fas fa-eye'></i></a>";
                                                        echo "<a href='update.php?id=". $row['id'] ."' title='Actualizar' data-toggle='tooltip'><i class='fas fa-user-edit'></i></a>";
                                                        echo "<a href='delete.php?id=". $row['id'] ."' title='Borrar' data-toggle='tooltip'><i class='fas fa-trash'></i></span></a>";
                                                    echo "</td>";
                                                echo "</tr>";
                                            }
                                            echo "</tbody>";                            
                                        echo "</table>";
                                        // Free result set
                                        mysqli_free_result($result);
                                    } else{
                                        echo "<p class='lead'><em>No records were found.</em></p>";
                                    }
                                } else{
                                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                }
            
                                // Close connection
                                mysqli_close($link);
                                ?>
                                    
                                </div>
                            </div>
                        </div>        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</body>


</html>