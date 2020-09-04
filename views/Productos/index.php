<?php
$productos = $this->productos;
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Clean Energy Rosarito B. C.</title>
  <meta 
    content="Somos El Centro de Distribución Solar más completo de México. Nuestro compromiso con el medio ambiente. Reduce tu gasto de electricidad en un 95%."
    name="description">
  <meta content="" name="keywords">
  <meta property="og:title" content="Clean Energy Rosarito" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://cleanenergy.com.mx/" />
  <meta property="og:description" content="Somos El Centro de Distribución Solar más completo de México. Nuestro compromiso con el medio ambiente. Reduce tu gasto de electricidad en un 95%. Ofrecemos la más amplia variedad de sistemas Fotovoltaicos y térmicos. Con las mejores marcas damos la oportunidad a nuestros clientes de que puedan encontrar todo en un mismo lugar." />
  <meta property="og:image" content="https://cleanenergy.com.mx/public/assets/img/og.png" />
  <meta property="og:image:width" content="512" />
  <meta property="og:image:height" content="512" />

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">  
  <meta name="theme-color" content="#ffffff">
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  <link href="<?= URL ?>public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= URL ?>public/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= URL ?>public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= URL ?>public/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= URL ?>public/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= URL ?>public/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= URL ?>public/assets/vendor/aos/aos.css" rel="stylesheet">
  
  <link href="<?= URL ?>public/assets/css/style.css" rel="stylesheet">
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-170731497-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-170731497-1');
  </script> 
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "image": [
         "https://cleanenergy.com.mx/favicon-32x32.png"
        ],
      "@id": "https://cleanenergy.com.mx/",
      "name": "Clean Energy",
      "sameAs" : [
        "https://www.facebook.com/CleanEnergyRosarito",
        "https://www.instagram.com/cleanenergymx/"
        ],
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Km29 Carrt. Tijuana Ensenada 3125",
        "addressLocality": "Playas de Rosarito",
        "addressRegion": "Baja California",
        "postalCode": "22710",
        "addressCountry": "MX"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 32.319045,
        "longitude": -117.048154
      },
      "url": "https://cleanenergy.com.mx/contacto",
      "telephone": "+52661142828",
      "priceRange": "$$"
      ,"openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "Monday",
            "Tuesday"
          ],
          "opens": "09:00",
          "closes": "18:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "Wednesday",
            "Thursday",
            "Friday"
          ],
          "opens": "09:00",
          "closes": "18:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": "Saturday",
          "opens": "09:00",
          "closes": "14:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": "Sunday",
          "opens": "closed",
          "closes": "closed"
        }
       ]
    },
 </script>


<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:contacto@cleanenergy.com.mx"> contacto@cleanenergy.com.mx</a>
        <i class="icofont-phone"></i> +52 661 104 2828
      </div>
      <div class="social-links">
        <a href="https://www.facebook.com/CleanEnergyRosarito/" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/cleanenergymx/" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="<?= URL ?>"><img src="<?= URL ?>/public/img/us.png" alt="clean energy us"></a>
      </div>
    </div>
  </section>
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
          <li class="drop-down"><a href="<?= URL ?>productos/categorias">Productos</a>
            <ul>
              <li><a href="<?= URL ?>productos/productos/4/Baterias">Baterías</a></li>
              <li><a href="<?= URL ?>productos/productos/1/Paneles-solares">Paneles Solares</a></li>
              <li><a href="<?= URL ?>productos/productos/2/Inversores">Inversores</a></li>
              <li><a href="<?= URL ?>productos/productos/3/Microinversores">Microinversores</a></li>
              <li><a href="<?= URL ?>productos/productos/5/Sistemas-de-Montaje">Sistemas de Montaje</a></li>
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
            <li><a href="index.html">Inicio</a></li>
            <li>Productos</li>
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
              <li data-filter=".filter-1"><a href="<?= URL ?>productos/productos/4/Baterias">Baterías</a></li>              
              <li data-filter=".filter-2"><a href="<?= URL ?>productos/productos/2/Inversores">Inversores</a></li>
              <li data-filter=".filter-3"><a href="<?= URL ?>productos/productos/3/Microinversores">Microinversores</a></li>
              <li data-filter=".filter-1"><a href="<?= URL ?>productos/productos/1/Paneles-solares">Paneles Solares</a></li>
              <li data-filter=".filter-5"><a href="<?= URL ?>productos/productos/5/Sistemas-de-Montaje">Sistemas de Montaje</a></li>
            </ul>
          </div>
        </div>

        <div class="container">
          <div class="row justify-content-center animatedParent animateOnce">
            <?php
              for ($i = 0; $i < count($productos); $i++) {
            ?>
            <div class="col-lg-3 animated slowest fadeInLeft delay-500">
              <div class="product-cuadro"><?= html_entity_decode($productos[$i]['categoria']) ?>
                 <div style="max-width:300px">      
                  <img loading="lazy"
                  src="<?= URL ?>public/imagenespdfs/<?= html_entity_decode($productos[$i]['Imagen']) ?>" 
                  class="img-fluid" alt="<?= html_entity_decode($productos[$i]['Nombre']) ?>">
                   <div class="portfolio-info">
                    <h4><?= html_entity_decode($productos[$i]['Nombre']) ?></h4>
                    <p><?= html_entity_decode($productos[$i]['Marca']) ?></p>
                    <a href="<?= URL ?>public/imagenespdfs/<?= html_entity_decode($productos[$i]['Imagen']) ?>" 
                   data-gall="portfolioGallery" 
                    class="" 
                    title="<?= html_entity_decode($productos[$i]['Nombre']) ?>">
                    <i class="bx bx-plus"></i></a>
                    <a href="<?= URL . 'productos/producto/' . $productos[$i]['id'] . '/' . str_replace(" ", '-', html_entity_decode($productos[$i]['Nombre'])) ?>" 
                    class="details-link" 
                   title="Ver Producto">
                    <i class=""></i></a>
                </div>    
               </div> 
              </div>
            </div>
          <?php
          }
          ?>
          </div>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

        <!-- ======= Our Clients Section ======= -->
        <section id="clients" class="clients">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
        <h2 class="text-center font-weight-normal"><span style="border-bottom: 5px solid #f47825 !important;">Nuestras Marcas</span> </h2>

          <p></p>
        </div>

              <div class="owl-carousel clients-carousel">
                <img src="<?= URL ?>public/img/marcas/cleanenergy.png" alt="clean energy marcas" class="img-fluid">
                <img src="<?= URL ?>public/img/marcas/apsystems.jpg" alt="clean energy marcas" class="img-fluid">
                <img src="<?= URL ?>public/img/marcas/jasolar.jpg" alt="clean energy marcas" class="img-fluid">
                <img src="<?= URL ?>public/img/marcas/solis.jpg" alt="clean energy marcas" class="img-fluid">
                <img src="<?= URL ?>public/img/marcas/znshinesolar.jpg" alt="clean energy marcas" class="img-fluid">
                <img src="<?= URL ?>public/img/marcas/nextpvrack.jpg" alt="clean energy marcas" class="img-fluid">  
                <img src="<?= URL ?>public/img/marcas/fimer.png" alt="clean energy marcas" class="img-fluid">               
                <img loading="lazy" src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Solar_Energy_BC.png" alt="clean energy marcas" class="img-fluid">      
                <img loading="lazy" src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Ctrl_Sun.png" alt="clean energy marcas" class="img-fluid">       
                <img loading="lazy" src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_DAH.png" alt="clean energy marcas" class="img-fluid">
                <img loading="lazy" src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Enphase.png" alt="clean energy marcas" class="img-fluid">
                <img loading="lazy" src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Fangpusun.png" alt="clean energy marcas" class="img-fluid">
                <img loading="lazy" src="<?= URL ?>public/img//marcas/Marcas_Distribuidas_Por_Solar_Center_Fronius.png" alt="clean energy marcas" class="img-fluid">
                <img loading="lazy" src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Go_Solar.png" alt="clean energy marcas" class="img-fluid">
                <img loading="lazy" src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Growatt.png" alt="clean energy marcas" class="img-fluid">    
                <img loading="lazy" src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Hoymiles.png" alt="clean energy marcas" class="img-fluid">
                <img loading="lazy" src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Jntech.png" alt="clean energy marcas" class="img-fluid">       
                <img loading="lazy" src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Marzo_2019_GCL.png" alt="clean energy marcas" class="img-fluid">       
                <img loading="lazy" src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_NEP.png" alt="clean energy marcas" class="img-fluid">    
                <img loading="lazy" src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Part_Master.png" alt="clean energy marcas" class="img-fluid">          
                <img loading="lazy" src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_QXPV.png" alt="clean energy marcas" class="img-fluid">
                <img loading="lazy" src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Samlex.png" alt="clean energy marcas" class="img-fluid">  
                <img loading="lazy" src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Seraphim.png" alt="clean energy marcas" class="img-fluid">         
                <img loading="lazy" src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_SHURflo.png" alt="clean energy marcas" class="img-fluid">       
                <img loading="lazy" src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Solis.png" alt="clean energy marcas" class="img-fluid">         
                <img loading="lazy" src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_SRNE.png" alt="clean energy marcas" class="img-fluid">          
                <img loading="lazy" src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Unirac.png" alt="clean energy marcas" class="img-fluid">     
                <img loading="lazy" src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Yassion.png" alt="clean energy marcas" class="img-fluid">    
                <img loading="lazy" src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_ZJ_Beny.png" alt="clean energy marcas" class="img-fluid">
              </div>   
            </div>
            
          </div>

        </div>

      </div>
    </section><!-- End Our Clients Section -->

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
              <strong>Correo:</strong><a href="mailto:contacto@cleanenergy.com.mx"> contacto@cleanenergy.com.mx</a>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
          <h4>Categorías</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= URL ?>inicio">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= URL ?>nosotros">Nosotros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= URL ?>productos/categorias">Productos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= URL ?>contacto">Contacto</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nuestros Productos</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= URL ?>productos/productos/4/Baterias">Baterías</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= URL ?>productos/productos/2/Inversores">Inversores</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= URL ?>productos/productos/3/Microinversores">Microinversores</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= URL ?>productos/productos/1/Paneles-solares">Paneles Solares</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= URL ?>productos/productos/5/Sistemas-de-Montaje">Sistemas de Montaje</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Regístrate</h4>
            <p>Nuestros productos corporativos han sido actualizados.</p>
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
                Designed by <a href="https://rosaritocentro.com/">Rosarito Centro</a>
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
  <script defer data-key="b032d26a-2ae3-48d6-87b0-36add9207b35" src="https://widget.tochat.be/bundle.js"></script>
  <script src="<?= URL ?>public/assets/js/main.js"></script>
</body>

</html>