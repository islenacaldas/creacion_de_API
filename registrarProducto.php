<?php
// Se copia el código de consultarProducto.php.
header("Content-Type: application/json");

require "conexion.php";

// Se declaran las variables para recibir los datos del registro por POST.
//$ide = $_POST["ide"]; esta linea se comenta por que la base de datos este dato lo genera automaticamente
$nom = $_POST["nom"];
$descr = $_POST["descr"];
$precio = $_POST["precio"];
$stock = $_POST["stock"];

// Estas mismas variables se limpian para usarlas de forma segura.
//$ides = mysqli_real_escape_string($con, $ide); esto va de la mano con la linea de codigo anterior
$noms = mysqli_real_escape_string($con, $nom);
$descrs = mysqli_real_escape_string($con, $descr);
$precios = mysqli_real_escape_string($con, $precio);
$stocks = mysqli_real_escape_string($con, $stock);

// El profesor hizo esto para una contraseña; aquí no se requiere.
// $contra_encriptada = password_hash($contra, PASSWORD_BCRYPT);
// $contras = mysqli_real_escape_string($con, $contra_encriptada);

// Sentencia para registrar un nuevo producto.
$sql = "INSERT INTO Producto ( nombre, descripcion, precio, stock)
        VALUES ('$noms', '$descrs', '$precios', '$stocks')";

$respuesta = mysqli_query($con, $sql);

if (!$respuesta) {
    die("Error de consulta y/o conexión");
} else {
    echo "Producto registrado exitosamente";
}

mysqli_close($con);
?>