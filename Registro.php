<!DOCTYPE html>
<!--
Integrantes: Carlos Chango, Fernando Vasconez, Juan Negrete
Proyecto: Final (ejercicios PHP)
Archivo: Registro.php
Descripción: Pagina para el registro de los nuevos
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>Welcome, CoVid-19 Register</title>
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

    <!-- Iconos FontAwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link href="Registro.css" rel="stylesheet" type="text/css" />
    <script>
        $(document).ready(function() {
            $("#Err").hide();
        });
    </script>
</head>

<body>
    <div class="modal-dialog text-centered">
        <div class="col-sm-8 Register-Zone">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <h2>Registrese</h2>
                    <br>
                </div>
                <form class="col-12 was-validated" action="InsertRegistro.php" method="post" autocomplete="on">
                    <div class="form-group" id="">
                        <input type="text" class="form-control" placeholder="Nombre" name="Name" required/>
                    </div>
                    <div class="form-group" id="">
                        <input type="text" class="form-control" placeholder="Apellido" name="SName" required/>
                    </div>
                    <div class="form-group" id="">
                        <input type="email" class="form-control" placeholder="E-Mail" name="EMail" required/>
                    </div>
                    <div class="form-group" id="">
                        <input type="text" class="form-control" placeholder="Pais" name="Country" required/>
                    </div>

                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="username" required/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contrasena" name="password" required/>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fab fa-angellist"></i>  Registrar </button>
                </form>
            </div>
        </div>
    </div>
    <div id="Err" class="alert alert-danger alert-dismissable fade show">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error!</strong> Clave Incorrecta
    </div>
</body>

</html>