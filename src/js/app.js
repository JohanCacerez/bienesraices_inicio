//se Inicia para poder manejar el DOM
document.addEventListener("DOMContentLoaded", function () {
  //funcion
  eventListeners();
});

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
