<?php
//Base de datos
require '../../includes/config/database.php';
$db = conectarDB();

var_dump($db);

require '../../includes/funciones.php';
incluirTemplate('header')
?>

<main class="contenedor">
  <h1>Crear</h1>

  <a href="/admin" class="boton boton-verde">Volver</a>

  <form action="" class="formulario">
    <fieldset>
      <legend>Informacion general</legend>

      <label for="titulo">Titulo:</label>
      <input type="text" id="titulo" placeholder="titulo propiedad">

      <label for="precio">Precio:</label>
      <input type="number" id="precio" placeholder="precio propiedad">

      <label for="imagen">Imagen:</label>
      <input type="file" id="imagen" accept="image/jpeg, image/png">

      <label for="descripcion">Descripcion:</label>
      <textarea id="descripcion"></textarea>
    </fieldset>

    <fieldset>
      <legend>Informacion propiedad</legend>

      <label for="habitaciones">Habitaciones:</label>
      <input type="number" id="habitaciones" placeholder="Ej: 3" min="1">

      <label for="wc">Baños:</label>
      <input type="number" id="wc" placeholder="Ej: 3" min="1">

      <label for="estacionamiento">Estacionamiento:</label>
      <input type="number" id="estacionamiento" placeholder="Ej: 3" min="1">
    </fieldset>

    <fieldset>
      <legend>Vendedor</legend>

      <select>
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