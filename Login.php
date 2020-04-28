<!DOCTYPE html>
<!--
Integrantes: Carlos Chango, Fernando Vasconez, Juan Negrete
Proyecto: Final (ejercicios PHP)
Archivo: index.php
Descripción: contiene la página principal
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>Welcome, CoVid-19 LogIn</title>
    <title>Ejemplo de Bootstrap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!—- Versión mas reciente compilada y comprimida de CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Libreria jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Versión mas reciente compilada de JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="LoginCss.css" rel="stylesheet" type="text/css" />
    <!-- Iconos FontAwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script>
        $(document).ready(function() {
            $("#Err").hide();
        });
    </script>
</head>

<body>
    <?php 
                $host = 'localhost';
                $dbname = 'Usuarios';
                $username = 'root';
                $passwd = '';            
                $connection = mysqli_connect($host, $username, $passwd, $dbname);
                $user = htmlspecialchars(filter_var($_POST['username'],FILTER_SANITIZE_STRING));
                $clave = htmlspecialchars(filter_var($_POST['password'],FILTER_SANITIZE_STRING));
                $clave = sha1($clave);
                $query = "SELECT * FROM Usuario WHERE usuario='$user' and password='$clave'";
                $result = mysqli_query($connection, $query);
                $filas = mysqli_num_rows($result);
                if ($result){
                    if($filas != 0){
                        header("location:Home.php");
                    }
                    if($filas == 0){
                        echo '<script>
                        $(document).ready(function() { 
                           $("#Err").show();
                       });
                   </script>';
                    }
                }else{
                    echo 'Error al hacer la consulta ('.mysqli_sqlstate($connection).'):'.mysqli_error($connection);         
                }
                mysqli_free_result($result);
                mysqli_close($connection);
            ?>
    <div class="modal-dialog text-centered">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="IMG/information.png" alt="Information Symbol" />
                </div>
                <form class="col-12 was-validated" action="Login.php" method="post" autocomplete="on">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="username" required/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contrasena" name="password" required/>
                    </div>
                    <a href="Registro.php">Registrarse</a>
                    <br>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                </form>
            </div>
        </div>
    </div>
    <!--
            <div id="Err"class="alert alert-danger alert-dismissable fade show">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Error!</strong> Clave Incorrecta
            </div>-->
</body>

</html>