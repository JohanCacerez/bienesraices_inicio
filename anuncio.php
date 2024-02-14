<?php
include './includes/templates/header.php'
?>

<main class="contenedor seccion contenido-centrado">
  <h1>Casa en venta frente al bosque</h1>

  <picture>
    <source src="build/img/destacada.webp" type="image/webp" />
    <source src="build/img/destacada.jpg" type="image/jpeg" />
    <img src="build/img/destacada.jpg" alt="imagen de la propiedad" loading="lazy" />
  </picture>

  <div class="resumen-propiedad">
    <p class="precio">$3,000,000</p>
    <ul class="iconos-caracteristicas">
      <li>
        <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy" />
        <p>3</p>
      </li>
      <li>
        <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy" />
        <p>3</p>
      </li>
      <li>
        <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy" />
        <p>4</p>
      </li>
    </ul>

    <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi
      repellendus sunt natus quo corporis ducimus deleniti expedita
      recusandae rem quas voluptas vitae ex a, ratione quidem alias deserunt
      libero hic. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      Quibusdam repudiandae nemo asperiores natus obcaecati, distinctio
      quasi voluptatum facere laboriosam ea porro odio, eius pariatur!
      Cumque ullam inventore eum beatae eaque. Lorem ipsum, dolor sit amet
      consectetur adipisicing elit. Dolorem quaerat doloremque minima, earum
      minus maxime adipisci vero consequuntur ea facere dolore illo alias
      animi, velit dolor natus atque ducimus ab.
    </p>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Non sit
      commodi magni ducimus labore sed quos id libero placeat, modi a quae,
      doloremque soluta, quibusdam error accusantium voluptate doloribus
      neque.
    </p>
  </div>
</main>

<?php
include './includes/templates/footer.php'
?>