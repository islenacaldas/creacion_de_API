<?php
header ("Content-Type: application/json");

require "conexion.php";

$sql="SELECT * FROM Producto";

$respuesta= mysqli_query($con, $sql);

if(!$respuesta){
    die("Error de consulta y/o conexion");
}else{
    
    while ($r=mysqli_fetch_assoc($respuesta)){
    }
}

echo json_encode($resulJson); 

mysqli_close($con);
?>
