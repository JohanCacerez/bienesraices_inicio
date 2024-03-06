<?php
//Base de datos
require '../../includes/config/database.php';
$db = conectarDB();

//array mensajes de error
$errores = [];

$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedores_id = '';

//ejecutar el codigo despues de enviar formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  //echo "<pre>";
  //var_dump($_POST);
  //echo "</pre>";



  if (!$titulo) {
    $errores[] = "Debes añadir un titulo";
  }
  if (!$precio) {
    $errores[] = "Debes añadir un precio";
  }
  if (!$descripcion) {
    $errores[] = "Debes añadir una descripcion";
  }
  if (!$habitaciones) {
    $errores[] = "Debes añadir la cantidad de habitaciones";
  }
  if (!$wc) {
    $errores[] = "Debes añadir la cantidad de baños";
  }
  if (!$habitaciones) {
    $errores[] = "Debes añadir la cantidad de estacionamientos";
  }
  if (!$vendedores_id) {
    $errores[] = "Debes elejir a un vendedor";
  }

  //revisar que el array de errores este vacio
  if (empty($errores)) {
    //Insertar en BD
    $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedores_id) VALUES ( '$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedores_id' ) ";

    $resultado = mysqli_query($db, $query);

    if ($resultado) {
      echo 'insertado correctamente';
    }
  }
}

require '../../includes/funciones.php';
incluirTemplate('header')
?>

<main class="contenedor">
  <h1>Crear</h1>

  <a href="/admin" class="boton boton-verde">Volver</a>

  <?php foreach ($errores as $error) : ?>
    <div class="alerta error">
      <?php echo $error ?>
    </div>
  <?php endforeach; ?>

  <form action="" class="formulario" method="POST" action="/admin/propiedades/crear.php">
    <fieldset>
      <legend>Informacion general</legend>

      <label for="titulo">Titulo:</label>
      <input type="text" id="titulo" name="titulo" placeholder="titulo propiedad" value="<?php echo $titulo; ?>">

      <label for="precio">Precio:</label>
      <input type="number" id="precio" name="precio" placeholder="precio propiedad" value="<?php echo $precio; ?>">

      <label for="imagen">Imagen:</label>
      <input type="file" id="imagen" accept="image/jpeg, image/png">

      <label for="descripcion">Descripcion:</label>
      <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
    </fieldset>

    <fieldset>
      <legend>Informacion propiedad</legend>

      <label for="habitaciones">Habitaciones:</label>
      <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" value="<?php echo $habitaciones; ?>">

      <label for="wc">Baños:</label>
      <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" value="<?php echo $wc; ?>">

      <label for="estacionamiento">Estacionamiento:</label>
      <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" value="<?php echo $estacionamiento; ?>">
    </fieldset>

    <fieldset>
      <legend>Vendedor</legend>

      <select name="vendedor">
        <option value="">-- Selecione --</option>
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