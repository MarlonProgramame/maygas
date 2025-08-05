window.addEventListener("load", function () {
  const preloader = document.getElementById("preloader");
  const contenido = document.getElementById("contenido-principal");

  // Espera 5 segundos antes de ocultar el preloader
  setTimeout(() => {
    preloader.style.display = "none";
    contenido.style.display = "block";
  }, 4000); // 5000 milisegundos = 5 segundos
});
document.addEventListener('DOMContentLoaded', function () {
      const hamburger = document.getElementById('hamburger');
      const navMenu = document.getElementById('nav-menu');

      hamburger.addEventListener('click', function () {
        navMenu.classList.toggle('active');
      });
    });
