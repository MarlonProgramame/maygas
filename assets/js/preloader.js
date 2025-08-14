document.addEventListener("DOMContentLoaded", function () {
      // Espera 5 segundos antes de ocultar el preloader
      setTimeout(function () {
        document.getElementById("preloader1").classList.add("oculto");

        // Espera el tiempo de la transición antes de quitarlo del DOM
        setTimeout(function () {
          document.getElementById("preloader1").style.display = "none";
        }, 500); // coincide con transition: opacity 0.50s
      }, 3000); // tiempo que se muestra: 5 segundos
    });