//se Inicia para poder manejar el DOM
document.addEventListener("DOMContentLoaded", function () {
  //funcion
  eventListeners();
  //funcion de modo oscuro
  darkMode();
});

//funcion de darkmode
function darkMode() {
  const prefDarkMode = window.matchMedia("(prefers-color-scheme: dark)");

  if (prefDarkMode.matches) {
    document.body.classList.add("dark-mode");
  } else {
    document.body.classList.remove("dark-mode");
  }

  //escucha el cambio del modo oscuro o claro
  prefDarkMode.addEventListener("change", function () {
    if (prefDarkMode.matches) {
      document.body.classList.add("dark-mode");
    } else {
      document.body.classList.remove("dark-mode");
    }
  });

  const botonDarkMode = document.querySelector(".dark-mode-boton");

  botonDarkMode.addEventListener("click", function () {
    document.body.classList.toggle("dark-mode");
  });
}

//funcion de click
function eventListeners() {
  //se selcciona el componente que tendra dicha funcion
  const mobileMenu = document.querySelector(".mobile-menu");

  //accion de la funcion al dar click
  mobileMenu.addEventListener("click", navegacionResponsiva);
}

//funcion
function navegacionResponsiva() {
  //manipular css
  const navegacion = document.querySelector(".navegacion");

  //evaluar si tiene o no la clase para agregarla o quitarla
  if (navegacion.classList.contains("mostrar")) {
    navegacion.classList.remove("mostrar");
  } else {
    navegacion.classList.add("mostrar");
  }

  /* Tambien se puede hacer de esta manera la comprobacion
    navegacion.classList.toggle('mostrar')
    */
}
