<?php
//Base de datos
require '../../includes/config/database.php';
$db = conectarDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  echo "<pre>";
  var_dump($_POST);
  echo "</pre>";

  $titulo = $_POST['titulo'];
  $precio = $_POST['precio'];
  $descripcion = $_POST['descripcion'];
  $habitaciones = $_POST['habitaciones'];
  $wc = $_POST['wc'];
  $estacionamiento = $_POST['estacionamiento'];
  $vendedores_id = $_POST['vendedor'];

  //Insertar en BD
  $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedores_id) VALUES ( '$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedores_id' ) ";

  $resultado = mysqli_query($db, $query);

  if($resultado) {
    echo 'insertado correctamente';
  }
}

require '../../includes/funciones.php';
incluirTemplate('header')
?>

<main class="contenedor">
  <h1>Crear</h1>

  <a href="/admin" class="boton boton-verde">Volver</a>

  <form action="" class="formulario" method="POST" action="/admin/propiedades/crear.php">
    <fieldset>
      <legend>Informacion general</legend>

      <label for="titulo">Titulo:</label>
      <input type="text" id="titulo" name="titulo" placeholder="titulo propiedad">

      <label for="precio">Precio:</label>
      <input type="number" id="precio" name="precio" placeholder="precio propiedad">

      <label for="imagen">Imagen:</label>
      <input type="file" id="imagen" accept="image/jpeg, image/png">

      <label for="descripcion">Descripcion:</label>
      <textarea id="descripcion" name="descripcion"></textarea>
    </fieldset>

    <fieldset>
      <legend>Informacion propiedad</legend>

      <label for="habitaciones">Habitaciones:</label>
      <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1">

      <label for="wc">Baños:</label>
      <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1">

      <label for="estacionamiento">Estacionamiento:</label>
      <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1">
    </fieldset>

    <fieldset>
      <legend>Vendedor</legend>

      <select name="vendedor">
        <option value="1">Johan</option>
        <option value="2">Ines</option>
      </select>
    </fieldset>

    <input type="submit" value="Crear Propiedad" class="boton boton-verde">
  </form>

</main>
<?php
incluirTemplate('footer');
?>