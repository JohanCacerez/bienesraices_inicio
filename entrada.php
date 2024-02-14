<?php
  include './includes/templates/header.php'
?>

    <main class="contenedor seccion contenido-centrado">
      <h1>Guia para la decoracion de tu hogar</h1>

      <picture>
        <source src="build/img/destacada2.webp" type="image/webp" />
        <source src="build/img/destacada2.jpg" type="image/jpeg" />
        <img
          src="build/img/destacada2.jpg"
          alt="imagen de la propiedad"
          loading="lazy"
        />
      </picture>

      <p class="informacion-meta">
        Escrito el: <span>20/10/2023</span> por: <span>Johan Cacerez</span>
      </p>

      <div class="resumen-propiedad">
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

    <footer class="footer seccion">
      <div class="contenedor contenedor-footer">
        <nav class="navegacion">
          <a href="nosotros.html">Nosotros</a>
          <a href="anuncios.html">Anuncios</a>
          <a href="blog.html">Blog</a>
          <a href="contacto.html">Contacto</a>
        </nav>
      </div>
      <p class="copyright">Todos los derechos reservados 2024 &copy;</p>
    </footer>

    <script src="build/js/bundle.min.js"></script>
  </body>
</html>