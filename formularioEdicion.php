<?php
require "conexion.php";

// Recibe el ID digitado en buscarActualizacionProducto.html
$ide = $_GET["ide"];
$ides = mysqli_real_escape_string($con, $ide);

// Busca los datos actuales del producto
$sql = "SELECT * FROM Producto WHERE idProducto = '$ides' LIMIT 1";
$respuesta = mysqli_query($con, $sql);

if ($respuesta && mysqli_num_rows($respuesta) > 0) {
    $producto = mysqli_fetch_assoc($respuesta);
} else {
    die("<h2>Producto no encontrado en el sistema.</h2>
         <br><a href='buscarActualizacionProducto.html'>Volver a buscar</a>");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modificar producto</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>

  <div class="contenedor">
    <h2>Modificar producto</h2>
    <p class="subtitulo">Actualiza los datos del producto seleccionado</p>

    <form action="actualizarProducto.php" method="POST">

      <!-- ID oculto: identifica el producto que se actualizará -->
      <input type="hidden" name="id" value="<?php echo $producto['idProducto']; ?>">

      <div class="campo">
        <label>Nombre del producto</label>
        <input
          type="text"
          name="nombre"
          value="<?php echo $producto['nombreProducto']; ?>"
          required
        >
      </div>

      <div class="campo">
        <label>Descripción</label>
        <textarea name="descripcion" required><?php echo $producto['descripcionProducto']; ?></textarea>
      </div>

      <div class="campo">
        <label>Precio</label>
        <input
          type="number"
          name="precio"
          step="0.01"
          min="0"
          value="<?php echo $producto['precioProducto']; ?>"
          required
        >
      </div>

      <div class="campo">
        <label>Cantidad disponible</label>
        <input
          type="number"
          name="stock"
          min="0"
          value="<?php echo $producto['stockProducto']; ?>"
          required
        >
      </div>

      <button type="submit">Guardar cambios</button>
    </form>
  </div>

</body>
</html>