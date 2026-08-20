<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Datos necesarios para conectarse a MySQL.
$servidor = "127.0.0.1";             // Servidor donde esta MySQL.(por que estoy usando MAC)
$usuario = "root";                   // Usuario de MySQL.
$password = "123456";                // Contrasena de MySQL.
$nombrebd = "tienda_ropa_clasica";   // Nombre de la base de datos.

// Se crea la conexion a MySQL usando los datos anteriores.
// La variable $con guardara el resultado de la conexion.
$con = mysqli_connect($servidor, $usuario, $password, $nombrebd);

// Se verifica si la conexion fallo.
if (!$con) {
    // Detiene la ejecucion y muestra el motivo del error.
    die("Error de conexion: " . mysqli_connect_error());
} else {
    // Si no hubo errores, muestra que la conexion fue exitosa.
    echo "Conexion exitosa";
}
?>