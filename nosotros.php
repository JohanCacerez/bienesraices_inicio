<?php
  include './includes/templates/header.php'
?>

    <main class="contenedor">
      <h1>Conoce sobre nosotros</h1>

      <div class="contenido-nosotros">
        <div class="imagen">
          <picture>
            <source srcset="build/img/nosotros.webp" type="image/webp" />
            <source srcset="build/img/nosotros.jpg" type="image/jpeg" />
            <img
              src="build/img/nosotros.jpg"
              alt="sobre nosotros"
              loading="lazy"
            />
          </picture>
        </div>

        <div class="texto nosotros">
          <blockquote>25 años de experiencia</blockquote>

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quod
            modi laudantium dicta rem quos. Expedita, nobis libero. Omnis vitae
            nostrum dolorem quis quo magni. Quia doloremque exercitationem ab
            nostrum. Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Ducimus pariatur odio incidunt cupiditate accusantium atque alias
            sunt, eveniet rem explicabo, esse perspiciatis totam suscipit
            corporis quod nihil saepe, molestias ut?
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora
            voluptatum libero nostrum eum corporis, quo at amet quaerat quod
            voluptates rerum provident eius reprehenderit mollitia nam,
            explicabo repellat animi aspernatur.
          </p>
        </div>
      </div>
    </main>

    <section class="contenedor seccion">
      <h1>Más sobre nosotros</h1>
      <div class="iconos-nosotros">
        <div class="icono">
          <img
            src="build/img/icono1.svg"
            alt="icono seguridad"
            loading="lazy"
          />
          <h3>Seguridad</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident,
            non excepturi? Nemo accusantium error facere aperiam eligendi
            deserunt natus tempore repellat libero ea nostrum adipisci rem
            magnam, ipsum iure architecto.
          </p>
        </div>
        <div class="icono">
          <img src="build/img/icono2.svg" alt="icono precio" loading="lazy" />
          <h3>Precio</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident,
            non excepturi? Nemo accusantium error facere aperiam eligendi
            deserunt natus tempore repellat libero ea nostrum adipisci rem
            magnam, ipsum iure architecto.
          </p>
        </div>
        <div class="icono">
          <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy" />
          <h3>A tiempo</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident,
            non excepturi? Nemo accusantium error facere aperiam eligendi
            deserunt natus tempore repellat libero ea nostrum adipisci rem
            magnam, ipsum iure architecto.
          </p>
        </div>
      </div>
    </section>

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
