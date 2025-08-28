<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MAYGAS®</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/Pagina_principal/Favicon_maygas.webp" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Main CSS File -->
  <link href="main.css" rel="stylesheet">

</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/Pagina_principal/MAYGAS.webp" width="77%" height="auto" alt="">
                <!--<h1 class="sitename">Selecao</h1>-->
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.php" class="active">Inicio</a></li>
                    <li><a href="productos.php">Productos</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!-- Botón flotante de WhatsApp a la izquierda -->
        <a href="https://api.whatsapp.com/send/?phone=573108194951&text&type=phone_number&app_absent=0"
            class="whatsapp-float" target="_blank" title="Escríbenos por WhatsApp">
            <i class="fa fa-whatsapp"></i>
        </a>
    </header>
    <!-- CODIFICACION DE LOS PRODUCTOS ESTABLECIDOS CON SU NOMBRE Y BOTON PARA COTIZAR EL PRODUCTO Y SE REDIRECCIONAMIENTO A LA PAGINA PRINCIPAL DE LA EMPRESA-->

    <main class="main">
        <section id="portfolio" class="portfolio section">
            <div class="container section-title" data-aos="fade-up">
                <p>Encuentra lo que Necesitas</p>
            </div>

            <!-- Barra de búsqueda -->
            <div class="container mb-4">
                <form method="GET" action="#portfolio">
                <div class="row justify-content-center g-2"> <!-- centra la fila -->
                
                <!-- Input -->
                <div class="col-md-6 col-10">
                    <input type="text" name="search" id="searchInput" 
                        class="form-control text-center"
                        placeholder="Buscar producto..."
                        value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                </div>
                
                <!-- Botón -->
                <div class="col-md-2 col-6 d-flex justify-content-center">
                <button type="submit" class="btn-buscar">Buscar</button>
                </div>
            </div>
  </form>
</div>
            <div class="container">
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">     
                    <?php
                            include 'conexion_maygas.php';

                            // Número de productos por página
                            $productos_por_pagina = 16;

                            // Página actual
                            $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
                            if ($pagina < 1) $pagina = 1;

                            // Calcular el OFFSET
                            $offset = ($pagina - 1) * $productos_por_pagina;

                            // Consulta con búsqueda
                            if (isset($_GET['search']) && !empty($_GET['search'])) {
                                $search = $conn->real_escape_string($_GET['search']);
                                $sql = "SELECT SQL_CALC_FOUND_ROWS ItemCode, ItemName, grupo, imagen 
                                        FROM productos 
                                        WHERE ValidComm = 'MTS' 
                                        AND (ItemName LIKE '%$search%' OR grupo LIKE '%$search%')
                                        ORDER BY ItemName
                                        LIMIT $productos_por_pagina OFFSET $offset";
                            } else {
                                $sql = "SELECT SQL_CALC_FOUND_ROWS ItemCode, ItemName, grupo, imagen 
                                        FROM productos 
                                        WHERE ValidComm = 'MTS'
                                        ORDER BY ItemName
                                        LIMIT $productos_por_pagina OFFSET $offset";
                            }

                            $result = $conn->query($sql);

                            // Total productos
                            $total_result = $conn->query("SELECT FOUND_ROWS() as total");
                            $total_productos = $total_result->fetch_assoc()['total'];

                            // Total de páginas
                            $total_paginas = ceil($total_productos / $productos_por_pagina);
                            ?>

                            <!-- ================== PRODUCTOS ================== -->
                            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                            <?php
                            if ($result && $result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <div class="col-lg-3 col-md-4 col-6 portfolio-item isotope-item">
                                        <div class="product-card">
                                            <div class="image-container">
                                                <img src="assets/img/IMAGENES MAYGAS/<?php echo $row['imagen']; ?>"
                                                    class="img-fluid product-image" 
                                                    alt="<?php echo $row['ItemName']; ?>"
                                                    onclick="openModal('modal-<?php echo $row['ItemCode']; ?>')">
                                                <a href="producto.php?id=<?php echo $row['ItemCode']; ?>" target="_blank">
                                                    <button class="quote-button">Cotizar</button>
                                                </a>
                                            </div>
                                            <h4 class="product-name"><?php echo $row['ItemName']; ?></h4>
                                        </div>
                                    </div>
                                    <?php
                                }
                            } else {
                                echo "<p>No se encontraron productos.</p>";
                            }
                            ?>
                            </div> 
                        </section>
                        <!-- ================== PAGINACIÓN ================== -->
                        <div class="container mt-3 mb-4"> <!-- 👈 mt=arriba, mb=abajo (20px aprox) -->
                        <div class="d-flex justify-content-end"> 
                            <nav>
                            <ul class="pagination custom-pagination mb-0">
                                <!-- Botón Anterior -->
                                <li class="page-item <?php echo ($pagina <= 1) ? 'disabled' : ''; ?>">
                                <a class="page-link" href="?pagina=<?php echo $pagina-1; ?><?php echo isset($_GET['search']) ? '&search='.$_GET['search'] : ''; ?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                                </li>

                                <!-- Números -->
                                <?php for ($i = 1; $i <= $total_paginas; $i++): ?>
                                <li class="page-item <?php echo ($pagina == $i) ? 'active' : ''; ?>">
                                    <a class="page-link" href="?pagina=<?php echo $i; ?><?php echo isset($_GET['search']) ? '&search='.$_GET['search'] : ''; ?>">
                                    <?php echo $i; ?>
                                    </a>
                                </li>
                                <?php endfor; ?>

                                <!-- Botón Siguiente -->
                                <li class="page-item <?php echo ($pagina >= $total_paginas) ? 'disabled' : ''; ?>">
                                <a class="page-link" href="?pagina=<?php echo $pagina+1; ?><?php echo isset($_GET['search']) ? '&search='.$_GET['search'] : ''; ?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                                </li>
                            </ul>
                            </nav>
                        </div>
                        </div>
    </main>

    <footer id="footer" class="footer dark-background">
    <div class="#">
      <img src="assets/img/Pagina_principal/" width="100%" alt="">

      <div class="container">
        <div class="copyright">

          <div class="footer-wrapper">
            <!-- Contenedor Izquierdo -->
            <div class="footer-left">
              <img src="assets/img/Pagina_principal/maigas.webp" alt="Maygas" class="footer-logo">
            </div>

            <!-- Contenedor Central (Redes Sociales) -->
            <div class="footer-center">
              <div class="social-links">
                <a href="https://www.facebook.com/Nuruena.sas/" target="_blank">
                  <img src="assets/img/Pagina_principal/facebook.webp" alt="">
                </a>
                <a href="https://www.instagram.com/nuruena.sas" target="_blank">
                  <img src="assets/img/Pagina_principal/instagram.webp" alt="">
                </a>
                <a href="https://www.youtube.com/@nuruenamedia2497" target="_blank">
                  <img src="assets/img/Pagina_principal/youtube.webp" alt="">
                </a>
                <a href="https://www.tiktok.com/@nuruenaoficial" target="_blank">
                  <img src="assets/img/Pagina_principal/tiktok.webp" alt="">
                </a>
                <a href="https://www.linkedin.com/company/nuruena/" target="_blank">
                  <img src="assets/img/Pagina_principal/linkedin.webp" alt="">
                </a>
              </div>
            </div>

            <!-- Contenedor Derecho -->
            <div class="footer-right">
              <a href="https://nuruena.com.co" target="_blank" rel="noopener noreferrer">
                <img src="assets/img/Pagina_principal/nuruenaLogo.webp" alt="Nuruena" class="footer-logo">
              </a>
            </div>
          </div>

          <span>Copyright</span>
          <strong class="px-1 sitename">2025 Nurueña. Todos los derechos reservados.</strong>
          <span><br>Diseño y desarrollo por <strong>Nurueña</strong></span>
        </div>
      </div>
    </div>
  </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11009029057">
    </script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/banner.js"></script>
    <script src="assets/js/preloader.js"></script>
    <script src="assets/js/modal.js"></script>
    <script src="assets/js/busqueda.js"></script>

</body>

</html>