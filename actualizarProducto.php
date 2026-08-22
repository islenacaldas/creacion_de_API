<?php
// Se copia el código de consultarProducto.php.
header("Content-Type: application/json");

require "conexion.php";


$id = $_POST["id"];
$nom = $_POST["nom"];
$descr = $_POST["descr"];
$precio = $_POST["precio"];
$stock = $_POST["stock"];


$ids = mysqli_real_escape_string($con, $id); 
$noms = mysqli_real_escape_string($con, $nom);
$descrs = mysqli_real_escape_string($con, $descr);
$precios = mysqli_real_escape_string($con, $precio);
$stocks = mysqli_real_escape_string($con, $stock);

// El profesor hizo esto para una contraseña; aquí no se requiere.
// $contra_encriptada = password_hash($contra, PASSWORD_BCRYPT);
// $contras = mysqli_real_escape_string($con, $contra_encriptada);

// Sentencia para actualizar un producto.
$sql = "UPDATE  Producto SET idProducto='$ids', nomProducto='$noms', descrsProducto= '$descrs', precioProducto='$precios', stockProducto='$stocks',
        WHERE idProducto= $ids";

$respuesta = mysqli_query($con, $sql);

if (!$respuesta) {
    die("Error de consulta y/o conexión");
} else {
    echo "Producto actualizado exitosamente";
}

mysqli_close($con);
?>
