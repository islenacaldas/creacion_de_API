<?php
// Se copia el código de consultarProducto.php.
header("Content-Type: application/json");

require "conexion.php";

$ide = $_POST["ide"];

$ides = mysqli_real_escape_string($con, $ide);


$sql = "DELETE FROM Producto WHERE idProducto='$ides'";
$respuesta = mysqli_query($con, $sql);

if (!$respuesta) {
    die("Error de consulta y/o conexión");
} else {
    echo "Producto eliminado exitosamente";
}

mysqli_close($con);
?>