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
  <!-- Preloader -->
  <div id="preloader1">
    <img src="assets/img/Pagina_principal/Preload_maygas.gif" alt="Cargando...">
  </div>

  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/Pagina_principal/MAYGAS.webp" width="77%" height="auto" alt="">
        <!--<h1 class="sitename">Selecao</h1>-->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Inicio</a></li>
          <li><a href="productos.php">Productos</a></li>
          <li><a href="#about">Nosotros</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#contact">Contacto</a></li>
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

  <!--APARTADO PARA EL CARRUSEL DE IMAGENES Y FUNCION DE MOVIMIENTO -->
  <section id="carousel-section" class="py-0">
    <div class="container-fluid px-0">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"></button>
        </div>

        <!-- Imágenes del carrusel -->
        <div class="carousel-inner">
          <!-- Slide 1 -->
          <div class="carousel-item active">
            <!-- Escritorio -->
            <img src="assets/img/Pagina_principal/Banner1_Maygas.webp" class="d-none d-md-block w-100 carousel-img"
              alt="Banner1_Maygas_Escritorio">
            <!-- Móvil -->
            <img src="assets/img/Pagina_principal/Banner-1-Maygas.jpg" class="d-block d-md-none w-100 carousel-img"
              alt="Banner-1-Maygas_Movil">
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <!-- Escritorio -->
            <img src="assets/img/Pagina_principal/Banner2_Maygas.webp" class="d-none d-md-block w-100 carousel-img"
              alt="Banner2_Maygas_Escritorio">
            <!-- Móvil -->
            <img src="assets/img/Pagina_principal/Banner-2-Maygas.jpg" class="d-block d-md-none w-100 carousel-img"
              alt="Banner-2-Maygas_Movil">
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item">
            <!-- Escritorio -->
            <img src="assets/img/Pagina_principal/Banner3_Maygas.webp" class="d-none d-md-block w-100 carousel-img"
              alt="Banner3_Maygas_Escritorio">
            <!-- Móvil -->
            <img src="assets/img/Pagina_principal/Banner-3-Maygas.jpg" class="d-block d-md-none w-100 carousel-img"
              alt="Banner-3-Maygas_Movil">
          </div>

          <!-- Slide 4 -->
          <div class="carousel-item">
            <!-- Escritorio -->
            <img src="assets/img/Pagina_principal/Banner4_Maygas.webp" class="d-none d-md-block w-100 carousel-img"
              alt="Banner4_Maygas_Escritorio">
            <!-- Móvil -->
            <img src="assets/img/Pagina_principal/Banner-2-Maygas.jpg" class="d-block d-md-none w-100 carousel-img"
              alt="Banner-4-Maygas_Movil">
          </div>
        </div>

        <!-- Botones de navegación -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
  </section>

  <!-- APARTADO DEL PIE DE CARRUSEL CON MOVIMIENTO  -->
  <section id="heros" class="hero section dark-background mt-0 pt-0">
    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 24 150 28" preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3"></use>
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0"></use>
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9"></use>
      </g>
    </svg>
  </section>

  <main class="main">
    <section id="portfolio" class="portfolio section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Portafolio</h2>
        <p>Nuestros Productos</p>
      </div>

      <div class="container">
        <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
            <?php
            include 'conexion_maygas.php';

            // Número de productos a mostrar en el index
            $productos_index = 8;

            // Consulta para obtener productos aleatorios (solo 8)
            $sql_index = "SELECT ItemCode, ItemName, grupo, imagen 
                          FROM productos 
                          WHERE ValidComm = 'MTS'
                          ORDER BY RAND() 
                          LIMIT $productos_index";

            $result_index = $conn->query($sql_index);

            if ($result_index && $result_index->num_rows > 0) {
                while ($row = $result_index->fetch_assoc()) {
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
    </div>
    </section>

    <div class="container-fluid">
      <div class="row">
        <div class="col text-center">
          <a href="Productos.php"
            target="_blank">
            <button class="btn bs-danger">Todos los productos</button>
          </a>
        </div>
      </div>
    </div>
    <!-- APARTADO DE SOBRE NOSTROS DESCRICIPCION DEL MAYGAS -->
    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sobre</h2>
        <p>Nosotros</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              En <strong>NURUEÑA</strong>, nos enorgullece ser distribuidores oficiales de MAYGAS®, marca líder en el
              desarrollo de soluciones para instalaciones de gas con tecnología multicapa de última generación.
            </p>
            <p>
              MAYGAS® es un producto de Industrias Saladillo SA, con sede en Buenos Aires, Argentina, y presencia
              internacional en más de 20 países. Reconocida por su excelencia y compromiso con la innovación, la marca
              cuenta con:
            </p>

            <ul>
              <li><i class="bi bi-check2-circle"></i> Liderazgo en el mercado argentino de tubos.</li>
              <li><i class="bi bi-check2-circle"></i> Posición número 1 en tubería multicapa a nivel mundial.</li>
              <li><i class="bi bi-check2-circle"></i> Dos líneas de fabricación con tecnología suiza láser.</li>
              <li><i class="bi bi-check2-circle"></i> Producción superior a 18 millones de metros de tubería al año.
              </li>
              <li><i class="bi bi-check2-circle"></i> Sistema de calidad certificado bajo norma ISO 9001.</li>
            </ul>
            <hr>
            <p>
              En Brasil, <strong>MAYGAS®</strong> es pionera en el sistema multicapa para gas desde 2009, con más de
              cinco millones de metros instalados en todo el país y garantía de hasta 50 años en sus productos.
            </p>
            <p>
              <strong>Calidad internacional, ahora en Colombia con NURUEÑA.</strong>
            </p>
          </div>

          <!-- APARTADO SOBRE NOSOTROS Y EL CARRUCEL DE IMAGENES CON SELECCION DE LA IMAGEN  -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <!-- Carrusel -->
            <div id="mainCarousel" class="carousel slide mb-3" data-bs-ride="false">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="assets/img/Pagina_principal/imagen1.png" class="d-block w-100" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                  <img src="assets/img/Pagina_principal/imagen2.png" class="d-block w-100" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                  <img src="assets/img/Pagina_principal/imagen3.png" class="d-block w-100" alt="Imagen 3">
                </div>
              </div>

              <!-- Controles del carrusel -->
              <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
              </button>
            </div>

            <!-- Miniaturas centradas y pegadas -->
            <div class="miniaturas">
              <img src="assets/img/Pagina_principal/imagen1.png" class="img-fluid thumb" data-bs-target="#mainCarousel"
                data-bs-slide-to="0">
              <img src="assets/img/Pagina_principal/imagen2.png" class="img-fluid thumb" data-bs-target="#mainCarousel"
                data-bs-slide-to="1">
              <img src="assets/img/Pagina_principal/imagen3.png" class="img-fluid thumb" data-bs-target="#mainCarousel"
                data-bs-slide-to="2">
            </div>
          </div>
        </div>
    </section><!-- /About Section -->

    <!-- APARTADO DE LOS SERVICIOS QUE SE OFRECEN Y LOS TIPOS DE PRODUCTOS QUE SE MANEJAN EN LA EMPRESA -->
    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Nuestros</h2>
        <p>Servicios</p>
      </div><!-- End Section Title -->

      <div class="container">

        <p>
          Ofrecemos una amplia gama de soluciones MAYGAS® para instalaciones seguras y eficientes de gas. Nuestros
          servicios incluyen: suministro e instalación de sistemas de tuberías, accesorios, válvulas y
          complementos especializados. Brindamos asesoría técnica para la correcta selección de equipos y componentes,
          garantizando el cumplimiento de normativas y altos estándares de calidad.
        </p>
      </div>

    </section><!-- /Services Section -->

    <!--OPCION DEL APARTADO DONDE SE SELECCIONAN LOS SERVICIOS QUE OFRECEN-->
    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <ul class="nav nav-tabs row d-flex" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item col-6 col-md-3">
            <a class="nav-link active show d-flex flex-column align-items-center" data-bs-toggle="tab"
              data-bs-target="#features-tab-1">
              <div class=""></div>
              <h4 class="mb-0 text-center">Tubería</h4>
            </a>
          </li>

          <li class="nav-item col-6 col-md-3">
            <a class="nav-link d-flex flex-column align-items-center" data-bs-toggle="tab"
              data-bs-target="#features-tab-2">
              <div class=""></div>
              <h4 class="mb-0 text-center">Conexiones</h4>
            </a>
          </li>

          <li class="nav-item col-6 col-md-3">
            <a class="nav-link d-flex flex-column align-items-center" data-bs-toggle="tab"
              data-bs-target="#features-tab-3">
              <div class=""></div>
              <h4 class="mb-0 text-center">Válvulas</h4>
            </a>
          </li>

          <li class="nav-item col-6 col-md-3">
            <a class="nav-link d-flex flex-column align-items-center" data-bs-toggle="tab"
              data-bs-target="#features-tab-4">
              <div class=" "></div>
              <h4 class="mb-0 text-center">Herramientas</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Tubería</h3>
                <p class="fst-italic">
                  Algunos de nuestros sistemas de tubería MAYGAS® son:
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Rollo de tubería 16 mm, 20 mm, 26 mm y 32 mm.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Tubo recto multicapa para instalaciones visibles.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Tubería certificada NTC.</span></li>
                </ul>
                <p>
                  Conozca más de nuestra línea de tuberías MAYGAS® para instalaciones seguras y duraderas.
                </p>
                <a href="productos.php"
                  class="custom-btn" target="_blank" rel="noopener noreferrer">
                  Más Productos <i class="bi bi-arrow-right"></i>
                </a>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/Pagina_principal/banner20240620100649.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="features-tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Conexiones</h3>
                <p>
                  Algunas de nuestras conexiones MAYGAS® son:
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Codo y Semicodos.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Uniones.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Tee.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Adaptadores.</span></li>
                </ul>
                <p>
                  Conozca más de nuestra gama de conexiones de MAYGAS® para uniones seguras y herméticas.
                </p>
                <a href="productos.php"
                  class="custom-btn" target="_blank" rel="noopener noreferrer">
                  Más Productos <i class="bi bi-arrow-right"></i>
                </a>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/Pagina_principal/banner20240620100649.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="features-tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Válvulas</h3>
                <p>
                  Algunas de nuestras válvulas para sistemas de gas MAYGAS® son:
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Válvula de 16mm, 20 mm, 25mm .</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Válvula de lujo.</span></li>
                </ul>
                <p>

                  Conozca más de nuestra línea de válvulas de gas MAYGAS® para control seguro del suministro.
                </p>
                <a href="productos.php"
                  class="custom-btn" target="_blank" rel="noopener noreferrer">
                  Más Productos <i class="bi bi-arrow-right"></i>
                </a>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/Pagina_principal/banner20240620100649.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="features-tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Herramientas</h3>
                <p>
                  Algunas de nuestras herramientas MAYGAS® son:
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Termofusor.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Expasor, Mordazas y Cabezales.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>CortaTubos.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>KitTermofusor.</span></li>
                </ul>
                <p>
                  Conozca más de nuestra línea de herramientas de MAYGAS® para instalaciones precisas y
                  ordenadas.
                </p>
                <a href="productos.php"
                  class="custom-btn" target="_blank" rel="noopener noreferrer">
                  Más Productos <i class="bi bi-arrow-right"></i>
                </a>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/Pagina_principal/banner20240620100649.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Features Section -->

    <!--APARTADO DE LA INFORMACION DE LA EMPRESA -->
    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contacto</h2>
        <p>Contactenos</p>
      </div><!-- End Section Title -->

      <div class="container py-4" data-aos="fade" data-aos-delay="100">
        <div class="row gy-4 justify-content-center align-items-center">

          <!-- Columna de Información -->
          <div class="col-lg-4 col-md-6">
            <!-- Punto de Venta -->
            <div class="info-item d-flex mb-4" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt-fill text-amarillo me-3 fs-4"></i>
              <div>
                <h4 class="fw-bold text-amarillo">PUNTO DE VENTA:</h4>
                <p class="mb-1">Cra. 25 N.º 13 – 40, Paloquemao <br> Bogotá D.C.</p>
                <p class="mb-0"><strong>Horario:</strong><br>
                  Lunes a Viernes: 8:00 AM a 5:30 PM<br>
                  Sábado: 8:00 AM a 12:30 PM
                </p>
              </div>
            </div>

            <!-- Centro de Distribución -->
            <div class="info-item d-flex mb-4" data-aos="fade-up" data-aos-delay="250">
              <i class="bi bi-geo-alt-fill text-amarillo me-3 fs-4"></i>
              <div>
                <h4 class="fw-bold text-amarillo">CENTRO DE DISTRIBUCIÓN:</h4>
                <p class="mb-0">Avenida Troncal de Occidente N. 18 – 76 <br> Parque Industrial Santo Domingo, <br>
                  Bodega J2 Mosquera, Cundinamarca.</p>
              </div>
            </div>

            <!-- Email -->
            <div class="info-item d-flex mb-4" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-envelope-fill text-amarillo me-3 fs-4"></i>
              <div>
                <h4 class="fw-bold text-amarillo">EMAIL:</h4>
                <p class="mb-1">
                  <a href="mailto:coordinador.servicio@nuruena.com.co" style="color: inherit; text-decoration: none;">
                    coordinador.servicio@nuruena.com.co
                  </a>
                </p>
                <p class="mb-0">
                  <a href="mailto:nuruena@nuruena.com.co" style="color: inherit; text-decoration: none;">
                    nuruena@nuruena.com.co
                  </a>
                </p>
              </div>
            </div>

            <!-- Teléfonos -->
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone-fill text-amarillo me-3 fs-4"></i>
              <div>
                <h4 class="fw-bold text-amarillo">VENTAS:</h4>
                <p class="mb-1 numero-telefono">
                  <a href="tel:+5739066666" style="color: inherit; text-decoration: none;">
                    390 66 66 Opc. 1
                  </a>
                </p>
                <p class="mb-0 numero-telefono">
                  <a href="https://wa.me/573108194951" target="_blank" style="color: inherit; text-decoration: none;">
                    310 819 4951
                  </a>
                </p>
              </div>
            </div>
          </div>

          <!-- Columna del Mapa -->
          <div class="col-lg-8 col-md-10 text-center">
            <div class="map-container">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.9037589697386!2d-74.09005342636065!3d4.611244142429345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f997216f2ccc7%3A0x991c568608ef9247!2sNurue%C3%B1a%20S.A.S!5e0!3m2!1ses!2sco!4v1727451597295!5m2!1ses!2sco"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <p class="mt-2">
              <a href="https://www.google.com/maps/place/Nurue%C3%B1a+S.A.S/@4.6112441,-74.0900534,17z" target="_blank"
                class="text-amarillo fw-bold">
                Ver en Google Maps
              </a>
            </p>
          </div>
        </div>
      </div>
    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">
    <div class="#">
      <img src="assets/img/Pagina_principal/" width="100%" alt="">

      <div class="container">
        <div class="copyright">

          <div class="footer-wrapper">
            <!-- Contenedor Izquierdo -->
            <div class="footer-left">
              <img src="assets/img/Pagina_principal/maigas.webp" alt="Logo Izquierdo" class="footer-logo">
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
                <img src="assets/img/Pagina_principal/nuruenaLogo.webp" alt="Logo Derecho" class="footer-logo">
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

</body>

</html>