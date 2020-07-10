<?php

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Inicio - Clean Energy</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
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

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="contacto@cleanenergy.com.mx">contacto@cleanenergy.com.mx</a>
        <i class="icofont-phone"></i> (661) 104 2828
      </div>
      <div class="social-links">
        <a href="https://www.facebook.com/CleanEnergyRosarito/" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/cleanenergymx/" class="instagram"><i class="icofont-instagram"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">Clean Energy</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="<?= URL ?>public/assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?= URL ?>">Inicio</a></li>
          <li><a href="<?= URL ?>nosotros">Nosotros</a></li>
          <li class="drop-down"><a href="">Productos</a>
            <ul>
              <li><a href="<?= URL ?>interconexion">Interconexión</a></li>
              <li><a href="<?= URL ?>autonomos">Autonomos</a></li>
              <li><a href="<?= URL ?>luminarias">Luminarias</a></li>
            </ul>
          </li>
          <li><a href="<?= URL ?>contacto">Contacto</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Welcome to <span>Flattern</span></h2>
              <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Lorem Ipsum Dolor</h2>
              <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Sequi ea ut et est quaerat</h2>
              <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->



  <main id="main">


    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Marcas <strong>Distribuidas</strong></h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Solar_Energy_BC.png" alt="clean energy marcas" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Ctrl_Sun.png" alt="clean energy marcas" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Enphase.png" alt="clean energy marcas" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Fangpusun.png" alt="clean energy marcas" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= URL ?>public/img//marcas/Marcas_Distribuidas_Por_Solar_Center_Fronius.png" alt="clean energy marcas" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Go_Solar.png" alt="clean energy marcas" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Growatt.png" alt="clean energy marcas" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Hoymiles.png" alt="clean energy marcas" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Jntech.png" alt="clean energy marcas" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Marzo_2019_GCL.png" alt="clean energy marcas" class="img-fluid"> </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_NEP.png" alt="clean energy marcas" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Part_Master.png" alt="clean energy marcas" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_QXPV.png" alt="clean energy marcas" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Samlex.png" alt="clean energy marcas" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Seraphim.png" alt="clean energy marcas" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_SHURflo.png" alt="clean energy marcas" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Solis.png" alt="clean energy marcas" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_SRNE.png" alt="clean energy marcas" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Unirac.png" alt="clean energy marcas" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Yassion.png" alt="clean energy marcas" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="<?= URL ?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_ZJ_Beny.png" alt="clean energy marcas" class="img-fluid">
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
              Blvd. Popotla 3125 L1 , Col. Cuenca Diaz <br>
              Rosarito, B.C. 22710<br>
              México <br><br>
              <strong>Teléfono:</strong> (661) 104 2828<br>
              <strong>Teléfono:</strong> (661) 640 4105<br>
              <strong>Correo:</strong> contacto@cleanenergy.com.mx<br>
            </p>
          </div>

          <!-- <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div> -->

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
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
  <script>
    $(document).ready(function() {
      $("#contactForm").validate({
        rules: {
          inputname: "required",
          inputphone: "required",
          inputemail: {
            required: true,
            email: true,
          },
        },
        messages: {
          inputname: "<span class='text-danger'>ingresa tu nombre</span>",
          inputphone: "<span class='text-danger'>ingresa tu telefono</span>",
          inputemail: {
            required: "<span class='text-danger'>ingresa un email</span>",
            email: "<span class='text-danger'>ingresa un correo valido</span>"
          },
        },

        submitHandler: function() {
          waiting();
          sendContactForm();

        },
        highlight: function(element) {
          var id_attr = "#" + $(element).attr("id") + "1";
          $(element).closest('.form-group'). /*removeClass('has-success').*/ addClass('has-error');
        },
        unhighlight: function(element) {
          var id_attr = "#" + $(element).attr("id") + "1";
          $(element).closest('.form-group').removeClass('has-error') /*.addClass('has-success')*/ ;
        },
        errorElement: 'span',
        errorClass: 'hidden',
        errorPlacement: function(error, element) {
          if (element.length) {
            error.insertAfter(element);
          } else {
            error.insertAfter(element);
          }
        }
      });

      function sendContactForm() {
        var formData = new FormData($('form#contactForm')[0]);
        $.ajax({
          url: "<?= URL ?>index/contactform",
          type: 'POST',
          data: formData,
          beforeSend: function() {

            $('#statusForm').removeClass('d-none');
            $("#facturaForm").find('button[type="submit"]').html('Enviando..');
            $("#facturaForm").find('button').removeAttr('disabled');
          },
          success: function(msg) {
            if ($.isNumeric(msg)) {
              $('#statusForm').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Gracias por tu registro, en breve un representante le atendera...</strong> </div>');
              setTimeout(function() {
                location.reload()
              }, 2500);
            } else {
              $('#statusForm').html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>ERROR:' + msg + '</strong></div>');
            }
          },
          error: function() {
            alert('');
          },
          cache: false,
          contentType: false,
          processData: false
        });
        return false;
      }
    });
  </script>
  <script>
    function waiting() {
      $('#statusForm').removeClass('d-none');
    }
  </script>

</body>
</html>