<?php
//se le puede dar un titulo que muestre en pantalla
header ("Content-Type: application/json");
//este archivo se vincula a conexion
require "conexion.php";
//ejecutar una sentencia sql
$sql="SELECT * FROM Producto";
//para ejecutar la sentencia, se crea una variable que me guarde la respuesta;
//se le pasa las dos variables, la de la conexion y la de la sentencia
$respuesta= mysqli_query($con, $sql);
//se crea este arreglo para que se muestre la info de forma estructurada
$resulJson=array();
if(!$respuesta){
    die("Error de consulta y/o conexion");
}else{
    //si hubo conexion entonces le voy a decir que me recorra con un while
    //mysqli_fetch_assoc devuelve una fila de datos de un conjunto de datos y lo devuelve como un array asociativo
    while ($r=mysqli_fetch_assoc($respuesta)){
    //aqui se carga el array y la r que es donde esta el primer registro, asi se van guardando todos los registros en el resultJson
    array_push($resulJson, $r);
    }
}
// para que imprima el array entonces se coloca 
echo json_encode($resulJson); 
//aqui se cierra la conexion
mysqli_close($con);
?>