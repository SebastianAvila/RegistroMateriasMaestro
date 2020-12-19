
<?php

$localhost = "localhost"; //nombre default de la base de datos
$root = "root"; //nombre default del adminstador 
$pass = ""; //contraseña (que no  exixste :v ) defaul de la base de datos
$bd = "registro_maes_mate";

$mysqli = new mysqli ($localhost, $root, $pass, $bd);


if(mysqli_connect_errno()){
    echo 'coneccion fallida : ', mysqli_connect_error();
    exit();
}

?>
