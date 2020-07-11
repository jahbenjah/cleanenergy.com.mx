<?php
$productDetails = $this->productDetails[0];
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
        <h1 class="text-light"><a href="index.html"><a href="index.html"><img src="<?= URL ?>/public/img/logo.png" alt="" class="img-fluid"></a></h1>
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
          <h2>Productos Fotovoltaicos autonomos</h2>
          <ol>
            <li><a href="<?= URL ?>autonomos">Autonomos</a></li>
            <li><?= $productDetails['categoria'] ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <h2 class="portfolio-title">This is an example of portfolio detail</h2>
        <div class="row">

          <div class="col-lg-7" data-aos="fade-right">
            <div class="owl-carousel portfolio-details-carousel">
              <img src="<?= URL ?>public/img/<?= $productDetails['image'] ?>" alt="<?= $productDetails['nombre'] ?>" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-5 portfolio-info" data-aos="fade-left">
            <h3><?= $productDetails['nombre'] ?></h3>
            <ul>
              <li><strong>Fabricante</strong>: <?= html_entity_decode($productDetails['fabricante']) ?></li>
              <li><strong>Categoria</strong>: <?= html_entity_decode($productDetails['categoria']) ?></li>
              <li><strong>Ficha técnica</strong>: <a href="<?= URL ?>public/img/<?= $productDetails['urlfichatecnica'] ?>" target="_blank">www.example.com</a></li>
            </ul>

            <p>
              <?= html_entity_decode($productDetails['caracteristicas']) ?>
            </p>
          </div>
          ha
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Clean Energy</h3>
            <p>
              Km29 Carrt. Tijuana Ensenada 3125<br>Hermenegildo Cuenca Diaz<br>
              22710 Rosarito, B.C.<br>
              <strong>Teléfono:</strong> +52 661 104 2828<br>
              <strong>Teléfono:</strong> +52 661 640 4105<br>
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
            <form action="https://cleanenergy.us10.list-manage.com/subscribe/post?u=39ba0c8b4ede43bedc1ae898f&amp;id=81663c505f" method="post">
              <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Correo electrónico aquí " required>
              <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscríbete" class="button"></div>
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