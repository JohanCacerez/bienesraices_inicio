<?php
$inicio = true;
include './includes/templates/header.php'
?>

<main class="contenedor seccion">
  <h1>Más sobre nosotros</h1>
  <div class="iconos-nosotros">
    <div class="icono">
      <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy" />
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
</main>

<section class="seccion contenedor">
  <h2>Casas y Depas en venta</h2>
  <div class="contenedor-anuncios">
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio1.webp" type="image/webp" />
        <source srcset="build/img/anuncio1.jpg" type="image/jpg" />
        <img src="build/img/anuncio1.jpg" alt="anuncio" loading="lazy" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa de lujo en el lago</h3>
        <p>
          Casa e el lago con excelente vista, acabados de lujo a un exelente
          precio
        </p>
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

        <a href="anuncio.html" class="boton-amarillo-block">
          Ver propiedad
        </a>
      </div>
      <!-- .contenido-anuncio-->
    </div>
    <!-- .anuncio-->
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio2.webp" type="image/webp" />
        <source srcset="build/img/anuncio2.jpg" type="image/jpg" />
        <img src="build/img/anuncio2.jpg" alt="anuncio" loading="lazy" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa terminados de lujo</h3>
        <p>
          Casa con diseño moderno, asi como tecnologia inteligente y
          amueblada
        </p>
        <p class="precio">$2,000,000</p>
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

        <a href="anuncio.html" class="boton-amarillo-block">
          Ver propiedad
        </a>
      </div>
      <!-- .contenido-anuncio-->
    </div>
    <!-- .anuncio-->
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio3.webp" type="image/webp" />
        <source srcset="build/img/anuncio3.jpg" type="image/jpg" />
        <img src="build/img/anuncio3.jpg" alt="anuncio" loading="lazy" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa con alberca</h3>
        <p>
          Casa con alberca y acabados de lujo en la ciudad, exelente
          oportunidad
        </p>
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

        <a href="anuncio.html" class="boton-amarillo-block">
          Ver propiedad
        </a>
      </div>
      <!-- .contenido-anuncio-->
    </div>
    <!-- .anuncio-->
  </div>
  <!-- .contenedor-anuncio-->
  <div class="alinear-derecha">
    <a href="anuncios.html" class="boton-verde">Ver todas</a>
  </div>
</section>

<section class="imagen-contacto">
  <h2>Encuentra la casa de tus sueños</h2>
  <p>
    Llena el formulario de contacto y un asesor se pondra en contacto
    contigo a la brevedad
  </p>
  <a href="contacto.html" class="boton-amarillo">Contactanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
  <section class="blog">
    <h3>Nuestro blog</h3>
    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source src="build/img/blog1.webp" type="iamge/webp" />
          <source src="build/img/blog1.jpg" type="iamge/jpeg" />
          <img src="build/img/blog1.jpg" alt="entrada blog" loading="lazy" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.html">
          <h4>Terraza en el techo de tu casa</h4>
          <p class="informacion-meta">
            Escrito el: <span>20/10/2023</span> por: <span>Admin</span>
          </p>
          <p>
            Consejos para construir una terraza en el techo de tu casa con
            los mejores materiales y ahorrando dinero
          </p>
        </a>
      </div>
    </article>
    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source src="build/img/blog2.webp" type="iamge/webp" />
          <source src="build/img/blog2.jpg" type="iamge/jpeg" />
          <img src="build/img/blog2.jpg" alt="entrada blog" loading="lazy" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.html">
          <h4>Guia para la decoracion de tu hogar</h4>
          <p class="informacion-meta">
            Escrito el: <span>20/10/2023</span> por: <span>Admin</span>
          </p>
          <p>
            Mximiza el espacio en tu hogar con esta guia, aprende a combinar
            muebles y colores para darle vida a tu espacio
          </p>
        </a>
      </div>
    </article>
  </section>
  <section class="testimoniales">
    <h3>Testimoniales</h3>
    <div class="testimonial">
      <blockquote>
        El personal se comporto de una exelente forma, muy buena atencion y
        la casa que me ofrecieron cumple con todas mis expectativas.
      </blockquote>
      <p>-Johan Cacerez</p>
    </div>
  </section>
</div>

<?php
include './includes/templates/footer.php'
?>