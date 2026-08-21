<?php
//se copia el codigo de consultarProducto pero se modifica
header ("Content-Type: application/json");//respuesta en JSON
header ("Acces-Control-Allow-Origin *"); //comparta con todos los origenes
header ("Acces-Control-Allow-Methods: DELETE, PUT, POST, GET"); //metodos HTTP permitidos 
header ("Acces-Control-Allow-Headers: Origin, x-Requested-With, Content-Type, Accept ");//encabezados HTTP que pueden ser usados

require "conexion.php";
//luego de adicionar a la sentencia se declara una variable $ide con el metodo GET para luego pasarla a la varibale abierta de idProducto
$ide=$_GET["ide"];
//esta linea es para evitar que el usuario digite elementos que pueda dañar mi sentencia
$ides=mysqli_real_escape_string($con, $ide);
//se le da la sentencia de buscar especificamente algo por idProducto, este se deja abierto para que reciba de otro lado
$sql="SELECT * FROM Producto WHERE idProducto='$ides'";

$respuesta= mysqli_query($con, $sql);

if(!$respuesta){
    die("Error de consulta y/o conexion");
}else{
   //recuperacion de la variable por ser un solo registro 
   $r=mysqli_fetch_assoc ($respuesta);
}
//en este caso nos va a mostrar la r
echo json_encode($r); 

mysqli_close($con);
?>
