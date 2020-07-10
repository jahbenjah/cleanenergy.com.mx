<?php
$autonomos = $this->autonomos;
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Clean Energy Rosarito</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta property="og:title" content="Clean Energy Rosarito" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://cleanenergy.com.mx/" />
  <meta property="og:description" content="Distribución Solar más completo de México" />
  <meta property="og:image" content="" />
  <meta property="og:image:width" content="" />
  <meta property="og:image:height" content="" />

  <link href="<?= URL ?>public/assets/img/favicon.png" rel="icon">
  <link href="<?= URL ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="<?= URL ?>public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= URL ?>public/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= URL ?>public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= URL ?>public/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= URL ?>public/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= URL ?>public/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= URL ?>public/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= URL ?>public/assets/css/style.css" rel="stylesheet">
  <link rel="icon" href="<?= URL ?>public/img/favicon.png">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-170731497-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-170731497-1');
  </script>

</head>

<body>
  <div class="d-flex flex-column flex-md-row align-items-center px-md-4  border-bottom shadow-sm top_bg fixed-top sticky-top">
    <p class="my-0  font-weight-normal bg-orange  pl-5 pr-5"><a href="tel:6611042808"><small class="text-white"><i class="fa fa-phone"></i> (661) 104 2808 </a></small></p>
    <span class="text-white ml-5 "><i class="fa fa-envelope"></i> contacto@cleanenergy.com.mx</span>
    <a href="#" class="ml-md-auto"><img src="<?= URL ?>public/img/us.png" alt="clean energy us"></a>
    <?php
    if (isset($_SESSION['name'])) {
    ?>
      <span class="pr-3 pl-3 text-white"><?= $_SESSION['name'] ?></span>
      <a href="<?= URL ?>index/destroySession" class="text-light pl-md-5 ">Salir</span></a>
    <?php
    }
    ?>

  </div>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><a href="index.html"><img src="<?= URL ?>public/assets/img/logocleanenergy.jpeg" alt="" class="img-fluid"></a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="<?= URL ?>inicio">Inicio</a></li>
          <li><a href="<?= URL ?>nosotros">Nosotros</a></li>
          <li class="drop-down"><a href="">Productos</a>
            <ul>
              <li><a href="<?= URL ?>interconexion">Interconexión</a></li>
              <li class="active"><a href="<?= URL ?>autonomos">Autonomos</a></li>
              <li><a href="<?= URL ?>luminarias">Luminarias</a></li>
            </ul>
          </li>
          <li><a href="<?= URL ?>contacto">Contacto</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Productos</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Autonomos</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              <li data-filter=".filter-app">Paneles Solares</li>
              <li data-filter=".filter-card">Inversores de Cadena</li>
              <li data-filter=".filter-web">Microinversores</li>
              <li data-filter=".filter-web">Sistemas de Montaje</li>
              <li data-filter=".filter-web">Accesorios</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">
          <?php
          for ($i = 0; $i < count($autonomos); $i++) {
          ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img src="<?= URL ?>public/img/<?= html_entity_decode($autonomos[$i]['image']) ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?= html_entity_decode($autonomos[$i]['nombre']) ?></h4>
                <p><?= html_entity_decode($autonomos[$i]['fabricante']) ?></p>
                <a href="<?= URL ?>public/img/<?= html_entity_decode($autonomos[$i]['image']) ?>" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="<?= URL . 'autonomos/producto/' . $autonomos[$i]['id'] . '/' . str_replace(" ", '-', html_entity_decode($autonomos[$i]['nombre'])) ?>" class="details-link" title="Ver Producto"><i class="bx bx-link"></i></a>
              </div>
            </div>
          <?php
          }
          ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->


  <section class="pt-5 pb-5 top_bg">
    <div class="container">
      <div class="row">
        <div class="col-6 col-md-4 m-auto pl-5">
          <img src="<?= URL ?>public/img/logo-white.png" alt="clean energy logo" class="img-fluid">
        </div>
        <div class="col-6 col-md-4 text-center  ">
          <p><a href="<?= URL ?>" class="text-white">Inicio</a></p>
          <p><a href="<?= URL ?>nosotros" class="text-white">Nosotros</a></p>
          <p><a href="<?= URL ?>" class="text-white">Productos</a></p>
          <p><a href="<?= URL ?>contacto" class="text-white">Contacto</a></p>
        </div>
        <div class="col-12 col-md-4 text-white">
          <h5 class="text-white font-weight-normal "><small class="text-energy"><i class="fa  fa-map"></i> Dirección:</small></h5>
          <p class="font-weight-normal mb-0">Blvd. Popotla 3125 L1 , Col. Cuenca Diaz</p>
          <p class="font-weight-normal">Rosarito, B.c. 22710</p>
          <h5 class="text-white font-weight-normal text-energy"><small class="text-energy"><i class="fa  fa-phone"></i> Teléfonos:</small></h5>
          <p class="font-weight-normal mb-0">(661) 104 2828</p>
          <p class="font-weight-normal">(661) 640 4105</p>
          <h5 class="text-white font-weight-normal text-energy"><small class="text-energy"><i class="fa  fa-envelope"></i> Correo:</small></h5>
          <p class="font-weight-normal mb-0">contacto@cleanenergy.com.mx</p>
        </div>
      </div>

    </div>

  </section>
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Clean Energy</h3>
            <p>
              Blvd. Popotla 3125 L1 , Col. Cuenca Diaz <br>
              Rosarito, B.C. 22710<br>
              México <br><br>
              <strong>Teléfono:</strong> (661) 104 2828<br>
              <strong>Teléfono:</strong> (661) 640 4105<br>
              <strong>Correo:</strong> contacto@cleanenergy.com.mx<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Categorías</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= URL ?>interconexion">Interconexión</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= URL ?>autonomos">Autonomos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= URL ?>luminarias">Luminarias</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nuestros Productos</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= URL ?>interconexion/categoria/Paneles%20Solares">Paneles Solares</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= URL ?>autonomos/categoria/Controladores">Controladores</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= URL ?>autonomos/categoria/Luminaria%20Solar">Luminaria Solar</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Regístrate</h4>
            <p>Nuestros catálogos coporativos han sido actualizados tanto en español como en inglés.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

          <div class="container d-md-flex py-6">

            <div class="mr-md-auto text-center text-md-center">
              <div class="copyright">
                &copy; Copyright <strong><span>Clean Energy</span></strong>. All Rights Reserved
              </div>
              <div class="credits">
                Designed by <a href="rosaritocentro.com">rosaritocentro</a>
              </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
              <a href="https://www.facebook.com/CleanEnergyRosarito/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/cleanenergymx/" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <script src="<?= URL ?>public/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= URL ?>public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= URL ?>public/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= URL ?>public/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= URL ?>public/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="<?= URL ?>public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= URL ?>public/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?= URL ?>public/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= URL ?>public/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= URL ?>public/assets/vendor/aos/aos.js"></script>
  <script src="<?= URL ?>public/assets/js/main.js"></script>
</body>

</html>