<?php
$host = 'localhost';
$dbname = 'Usuarios';
$username = 'root';
$passwd = '';            
$connection = mysqli_connect($host, $username, $passwd, $dbname);
$PName = filter_var($_POST['Name'],FILTER_SANITIZE_STRING);
$PSName = filter_var($_POST['SName'],FILTER_SANITIZE_STRING);
$PEmail = filter_var($_POST['EMail'],FILTER_VALIDATE_EMAIL);
$PCountry = filter_var($_POST['Country'],FILTER_SANITIZE_STRING);
$user = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
$clave = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
$clave = sha1($clave);
$ID = null;
$query = "INSERT INTO `Usuario` (`id_user`, `usuario`, `password`, `pais`, `nombre`, `apellido`, `correo_electronico`) VALUES (?, ?, ?, ?, ?, ?, ?)";
if ($insert =  mysqli_prepare($connection,$query)){
    mysqli_stmt_bind_param($insert,'issssss',$ID,$user,$clave,$PCountry,$PName,$PSName,$PEmail);
    mysqli_stmt_execute($insert);
}else{
    echo 'Error al hacer la insercion ('.mysqli_error($connection).'):';         
}
mysqli_stmt_close($insert);
header("location:Home.php");

?>