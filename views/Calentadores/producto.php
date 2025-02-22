<?php 
   $productDetails=$this->productDetails[0];
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
    <div class="d-flex flex-column flex-md-row align-items-center px-md-4  border-bottom shadow-sm top_bg fixed-top sticky-top">
      <p class="my-0  font-weight-normal bg-orange  pl-5 pr-5"><a href="tel:6611042808"><small class="text-white"><i class="fa fa-phone"></i>  (661) 104 2808 </a></small></p>
      <span class="text-white ml-5 "><i class="fa fa-envelope"></i> contacto@cleanenergy.com.mx</span>
      <a href="#" class="ml-md-auto"><img src="<?=URL?>public/img/us.png" alt="clean energy us"></a>
      <?php
        if (isset($_SESSION['name'])) {
          ?>
          <span class="pr-3 pl-3 text-white"><?=$_SESSION['name']?></span>
          <a href="<?=URL?>index/destroySession" class="text-light pl-md-5 ">Salir</span></a>
          <?php
        }
      ?>
      
    </div>
    <div class="container-fluid">
       <div class="row">
            <div class="col-7 col-md-4 pt-2">
              <div class="float-left">
                <img src="<?=URL?>public/img/logo.png" alt="clean Energy logo" class="img-fluid" style="width: 60%;">
              </div>
            </div>
            <div class="col-4 col-md-7">
              <nav class="navbar navbar-expand-lg navbar-light bg-light pt-3 float-right">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                      <ul class="nav float-right">
                        <li class="nav-item">
                          <a class="nav-link " href="<?=URL?>">Inicio</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?=URL?>nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link active dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Productos
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="<?=URL?>interconexion">Interconexión</a>
                                <a class="dropdown-item" href="<?=URL?>autonomos">Autonomos</a>
                                <a class="dropdown-item" href="<?=URL?>calentadores">Calentadores</a>
                              </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="<?=URL?>contacto">Contacto</a>
                        </li>
                     </ul>
                </div>
              </nav>
              
            </div>
       </div>
    </div>
    
    <main class="container-fluid pt-4 bg-white">
        <div class="row bg-white">
          <div class="col-md-3">
             <div class="p-2">
                <h4 class="text-dark font-weight-normal text-uppercase text-center"><span style="border-bottom: 5px solid #f47825 !important;">Categorías</span></h4>
                <div id="accordion">
                  <div class=" ">
                    <div class=" " id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link text-clean" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           Productos Fotovoltaicos para Interconexión 
                        </button>
                      </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="">
                        <ul class="nav flex-column pl-4">
                          <li class="nav-item ">
                            <a class="nav-link-category font-weight-normal" href="<?=URL?>interconexion" > <i class="fa  fa-chevron-circle-right"></i> Paneles Solares</a>
                          </li>
                          <li class="nav-item ">
                            <a class="nav-link-category font-weight-normal" href="#" > <i class="fa  fa-chevron-circle-right"></i> Inversores de Cadena</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link-category font-weight-normal" href="#" ><i class="fa  fa-chevron-circle-right"></i> Microinversores</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link-category font-weight-normal" href="#" ><i class="fa  fa-chevron-circle-right"></i> Sistemas de Montaje</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link-category font-weight-normal" href="#" > <i class="fa  fa-chevron-circle-right"></i> Accesorios</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=" ">
                    <div class=" " id="headingTwo">
                      <h5 class="mb-0">
                        <button class="btn btn-link  text-clean collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Productos Fotovoltaicos Autónomos
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="">
                        <ul class="nav flex-column pl-4">
                          <li class="nav-item ">
                            <a class="nav-link-category font-weight-normal" href="#" ><i class="fa  fa-chevron-circle-right"></i> Paneles Autónomos</a>
                          </li>
                          <li class="nav-item ">
                            <a class="nav-link-category font-weight-normal" href="#" ><i class="fa  fa-chevron-circle-right"></i> Inversores de Plantas Solares</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link-category font-weight-normal" href="#" ><i class="fa  fa-chevron-circle-right"></i> Controladores</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link-category font-weight-normal" href="#" ><i class="fa  fa-chevron-circle-right"></i> Baterías</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link-category font-weight-normal" href="#" ><i class="fa  fa-chevron-circle-right"></i> Bombas</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link-category font-weight-normal" href="#" ><i class="fa  fa-chevron-circle-right"></i> Luminaria Solar</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link-category font-weight-normal" href="#" ><i class="fa  fa-chevron-circle-right"></i> Refrigeradores</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=" ">
                    <div class=" " id="headingThree">
                      <h5 class="mb-0">
                        <button class="btn btn-link  text-clean collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Calentadores Solares
                        </button>
                      </h5>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="">
                        <ul class="nav flex-column pl-4">
                          <li class="nav-item ">
                            <a class="nav-link-category font-weight-normal" href="<?=URL?>calentadores"><i class="fa  fa-chevron-circle-right"></i> Gravedad</a>
                          </li>
                          <li class="nav-item ">
                            <a class="nav-link-category font-weight-normal" href="#"><i class="fa  fa-chevron-circle-right"></i> Presión</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link-category font-weight-normal" href="#"><i class="fa  fa-chevron-circle-right"></i> Alberca</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

             </div>
          </div>
          <div class="col-md-8">
            <div class="p-2 bg-white">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=URL?>calentadores" class="text-clean">Calentadores</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?=$productDetails['categoria'] ?></li>
                  </ol>
                </nav>
                <div class="row">
                    <div class="col-12 col-md-7">
                       <h2><?=$productDetails['nombre'] ?></h2>
                       <p class="mb-0 pb-0 text-muted">Fabricante: <span class="text-energy"><?=html_entity_decode($productDetails['fabricante'])?></p></span>
                       <p class="mb-0 pb-0 text-muted">Categoría: <span class="text-clean"><?=html_entity_decode($productDetails['categoria'])?></span></p>
                       <h4 class="pt-2 text-muted font-weight-normal"><?=html_entity_decode($productDetails['caracteristicas'])?></h4>
                       <div class="pt-3 pb-2">
                          <a href="<?=URL?>public/img/<?=$productDetails['urlfichatecnica'] ?>" class="btn btn-energy" target="_blank">Ficha Técnica</a>
                       </div>
                    </div>
                    <div class="col-12 col-md-5">
                       <img src="<?=URL?>public/img/<?=$productDetails['image'] ?>" alt="<?=$productDetails['nombre'] ?>" class="img-fluid">
                    </div>

               </div>
            </div>
          </div>
        </div>
    </main>
    <section class="pt-5 pb-5 top_bg">
        <div class="container">
          <div class="row">
              <div class="col-6 col-md-4 m-auto pl-5">
                <img src="<?=URL?>public/img/logo-white.png" alt="clean energy logo" class="img-fluid">
              </div>
              <div class="col-6 col-md-4 text-center  ">
                 <p><a href="<?=URL?>" class="text-white">Inicio</a></p>
                 <p><a href="<?=URL?>nosotros" class="text-white">Nosotros</a></p>
                 <p><a href="<?=URL?>" class="text-white">Productos</a></p>
                 <p><a href="<?=URL?>contacto" class="text-white">Contacto</a></p>
              </div>
              <div class="col-12 col-md-4 text-white"> 
                <h5 class="text-white font-weight-normal "><small class="text-energy"><i class="fa  fa-map"></i>  Dirección:</small></h5>
                <p class="font-weight-normal mb-0">Blvd. Popotla 3125 L1 , Col. Cuenca Diaz</p>
                <p  class="font-weight-normal">Rosarito, B.c. 22710</p>
                <h5 class="text-white font-weight-normal text-energy"><small  class="text-energy"><i class="fa  fa-phone"></i>  Teléfonos:</small></h5>
                <p  class="font-weight-normal mb-0">(661) 104 2828</p>
                <p  class="font-weight-normal">(661) 640 4105</p>
                <h5 class="text-white font-weight-normal text-energy"><small  class="text-energy"><i class="fa  fa-envelope"></i> Correo:</small></h5>
                <p  class="font-weight-normal mb-0">contacto@cleanenergy.com.mx</p>
              </div>
          </div>
          
        </div>
        
    </section>
    <footer class="pt-4 pb-2 pt-md-5 bg-dark-blue">
      <div class=" ">
        <div class="col-12 col-md"> 
          <small class="d-block  text-light text-center">&copy; 2019 Clean Energy</small>
        </div>
      </div>
    </footer>
    <script src="<?=URL?>public/resources/jquery/jquery-2.1.4.min.js"></script>
    <script src="<?=URL?>public/resources/bootstrap-4.0/js/bootstrap.min.js"></script>
    <script src="<?=URL?>public/js/popper.min.js"></script>
    <!-- <script src="<?=URL?>public/js/bootstrap.min.js"></script> -->
</body>
</html>