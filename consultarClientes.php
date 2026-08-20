<?php
//este archivo se vincula a conexion
require "conexion.php";
//ejecutar una sentencia sql
$sql="SELECT * FROM CLIENTE";
//para ejecutar la sentencia, se crea una variable que me guarde la respuesta;
//se le pasa las dos variables, la de la conexion y la de la sentencia
$respuesta= mysqli_query($con, $sql);
if(!$respuesta){
    die("Error de consulta y/o conexion");
}else{
    //si hubo conexion entonces le voy a decir que me recorra con un while
    //mysqli_fetch_assoc devuelve una fila de datos de un conjunto de datos y lo devuelve como un array asociativo
    while ($r=mysqli_fetch_assoc($respuesta)){
    //aqui me muestra en pantalla la variable nombre de mi base de datos   
    echo $r["nombre"];
    }
}
//aqui se cierra la conexion
mysqli_close($con);
?>