<?php
require 'includes/funciones.php';
incluirTemplate('header')
?>

<main class="contenedor">
  <h1>Contacto</h1>

  <picture>
    <source srcset="build/img/destacada3.webp" type="image/webp" />
    <source srcset="build/img/destacada3.jpg" type="image/jpeg" />
    <img src="build/img/destacada3.jpg" alt="imagen contacto" loading="lazy" />
  </picture>

  <h2>Llene el formulario de contacto</h2>

  <form class="formulario">
    <fieldset>
      <legend>Informacion personal</legend>

      <label for="nombre">Nombre</label>
      <input type="text" placeholder="Tu nombre" id="nombre" />

      <label for="email">E-mail</label>
      <input type="email" placeholder="Tu email" id="email" />

      <label for="telefono">Telefono</label>
      <input type="tel" placeholder="Tu telefono" id="telefono" />

      <label for="mensaje">Mensaje:</label>
      <textarea id="mensaje"></textarea>
    </fieldset>

    <fieldset>
      <legend>Informacion sobre la propiedad</legend>

      <label for="opciones">Vende o compra:</label>
      <select id="opciones">
        <option value="" disabled selected>-- seleccione --</option>
        <option value="compra">Compra</option>
        <option value="vende">Vende</option>
      </select>

      <label for="presupuesto">Presupuesto o precio</label>
      <input type="number" placeholder="Tu presupuesto o precio" id="presupuesto" />
    </fieldset>

    <fieldset>
      <legend>Contacto</legend>

      <p>Como desea ser contactado:</p>

      <div class="forma-contacto">
        <label for="contactar-telefono">Telefono</label>
        <input name="contacto" type="radio" id="contactar-telefono" />

        <label for="contactar-email">E-mail</label>
        <input name="contacto" type="radio" id="contactar-email" />
      </div>

      <p>Si eligio telefono, elija la fecha y la hora</p>

      <label for="fecha">Fecha</label>
      <input type="date" id="fecha" />

      <label for="hora">Hora:</label>
      <input type="time" id="hora" min="09:00" max="18:00" />
    </fieldset>

    <input type="submit" value="enviar" class="boton-verde" />
  </form>
</main>
<?php
incluirTemplate('footer');
?>