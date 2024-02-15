<?php
require 'includes/funciones.php';
incluirTemplate('header')
?>

<main class="contenedor contenido-centrado">
  <h1>Nuestro blog</h1>

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
        <p>Escrito el: <span>20/10/2023</span> por: <span>Admin</span></p>
        <p>
          Consejos para construir una terraza en el techo de tu casa con los
          mejores materiales y ahorrando dinero
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
        <p>Escrito el: <span>20/10/2023</span> por: <span>Admin</span></p>
        <p>
          Mximiza el espacio en tu hogar con esta guia, aprende a combinar
          muebles y colores para darle vida a tu espacio
        </p>
      </a>
    </div>
  </article>
  <article class="entrada-blog">
    <div class="imagen">
      <picture>
        <source src="build/img/blog3.webp" type="iamge/webp" />
        <source src="build/img/blog3.jpg" type="iamge/jpeg" />
        <img src="build/img/blog3.jpg" alt="entrada blog" loading="lazy" />
      </picture>
    </div>
    <div class="texto-entrada">
      <a href="entrada.html">
        <h4>Terraza en el techo de tu casa</h4>
        <p>Escrito el: <span>20/10/2023</span> por: <span>Admin</span></p>
        <p>
          Consejos para construir una terraza en el techo de tu casa con los
          mejores materiales y ahorrando dinero
        </p>
      </a>
    </div>
  </article>
  <article class="entrada-blog">
    <div class="imagen">
      <picture>
        <source src="build/img/blog4.webp" type="iamge/webp" />
        <source src="build/img/blog4.jpg" type="iamge/jpeg" />
        <img src="build/img/blog4.jpg" alt="entrada blog" loading="lazy" />
      </picture>
    </div>
    <div class="texto-entrada">
      <a href="entrada.html">
        <h4>Guia para la decoracion de tu hogar</h4>
        <p>Escrito el: <span>20/10/2023</span> por: <span>Admin</span></p>
        <p>
          Mximiza el espacio en tu hogar con esta guia, aprende a combinar
          muebles y colores para darle vida a tu espacio
        </p>
      </a>
    </div>
  </article>
</main>

<?php
incluirTemplate('footer');
?>