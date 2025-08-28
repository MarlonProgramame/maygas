document.getElementById("searchInput").addEventListener("keyup", function() {
    let input = this.value.toLowerCase();
    let products = document.querySelectorAll(".portfolio-item");

    products.forEach(function(product) {
      let name = product.querySelector(".product-name").textContent.toLowerCase();
      if (name.includes(input)) {
        product.style.display = "";
      } else {
        product.style.display = "none";
      }
    });
  });

  