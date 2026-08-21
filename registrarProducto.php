<?php
//se copia el codigo de consultarproducto.php
header ("Content-Type: application/json");
require "conexion.php";
//se declaran variables para recibir los datos que se necesitan del registro por post
$ide=$_POST["ide"];
$nom=$_POST["nom"];
$descr=$_POST["descr"];
$precio=$_POST["precio"];
$stock=$_POST["stock"]
// estas misma variables pero de forma segura: 
$ides= mysqli_real_escape_string($con,$ide);
$noms=mysqli_real_escape_string($con,$nom)
$descrs=mysqli_real_escape_string($con,$descr);
$precios=mysqli_real_escape_string($con,$precio);
$stocks=mysqli_real_escape_string($con,$stock);
//el profesor hizo esto para una contraseña, esto no se tiene en cuenta
//se va a encriptar usando la siguiente funcion: 
//crear una variable contraencriptada y usar pasword hash para encriptar
//$contra_encriptada=password_hash($contra, PASSWORD_BCRYPT);//se le pasa la variabe donde esta la contraseña y el metodo de encriptacion
//$contras = mysqli_real_escape_string($con, $contra_encriptada)//esto evita que coloquen caracteres extraños


//aqui se va a colocar la sentencia para el registro
$sql="INSERT INTO producto (ideProducto, nomProducto, descrProducto, precioProducto, stockProducto) VALUES ('$ides','$noms','$descrs','$precios', '$stocks')";
$respuesta= mysqli_query($con, $sql);

if(!$respuesta){
    die("Error de consulta y/o conexion");
}else{
    echo "Producto registrado exitosamente"
}

mysqli_close($con);
?>