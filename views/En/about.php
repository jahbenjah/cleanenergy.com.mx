<?php 

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Clean Energy </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <meta name="keywords" content="" />
    <link href="<?=URL?>public/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="<?=URL?>public/css/style.css" rel='stylesheet' type='text/css' />
    <link href="<?=URL?>public/css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link rel="icon" href="<?=URL?>public/img/favicon.png">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-170731497-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-170731497-1');
</script>

</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center px-md-4  border-bottom shadow-sm top_bg fixed-top sticky-top">
      <p class="my-0  font-weight-normal bg-orange  pl-5 pr-5"><a href="tel:6611042808"><small class="text-white"><i class="fa fa-phone"></i>  (661) 104 2808 </a></small></p>
      <span class="text-white ml-5 "><i class="fa fa-envelope"></i> contacto@cleanenergy.com.mx</span>
      <a href="<?=URL?>nosotros" class="ml-md-auto"><img src="<?=URL?>public/img/mx.png" alt="clean energy español"></a>
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
                <a href="<?=URL?>"><img src="<?=URL?>public/img/logo.png" alt="clean Energy logo" class="img-fluid" style="width: 60%;"></a>
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
                          <a class="nav-link " href="<?=URL?>en">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" href="<?=URL?>en/about">About us</a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Products
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="<?=URL?>en/interconexion">Interconexión</a>
                                <a class="dropdown-item" href="<?=URL?>en/autonomos">Autonomos</a>
                                <a class="dropdown-item" href="<?=URL?>en/calentadores">Calentadores</a>
                              </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?=URL?>en/contact">Contact</a>
                        </li>
                     </ul>
                </div>
              </nav>
              
            </div>
       </div>
       <div class="container">
           <img src="<?=URL?>public/img/cleanenergy-video.png" alt="clean energy video" class="img-fluid">
            <!--<div class="embed-responsive embed-responsive-16by9">

               <iframe class="embed-responsive-item" src="https://www.solar-center.mx/images/SC-Video-SPM-HDweb.mp4" allowfullscreen></iframe> 
            </div>-->
       </div>
       <div class="pt-3 " style="padding-left: 0px;padding-right: 0px;">
 
       </div>
       <div class="container pt-5 pb-5">
          <div class="pt-2">
              <h2 class="font-weight-normal text-center"><span style="border-bottom: 5px solid #f47825 !important;">About Us</span></h2>
           </div>
          <div class="row pt-5 pb-5">
             <div class="col-md-6">
                 <div class="pt-5 p-3 bg-white">
                   <h4>WE ARE THE MOST COMPLETE SOLAR <span class="text-energy">DISTRIBUTION CENTER IN MEXICO  </span>.</h4>
                   <p class="pt-3 pb-4">TRANSFORMANDO A MÉXICO A TRAVÉS DE LA ENERGÍA SOLAR, 28 AÑOS DE EXPERIENCIA RESPALDAN TODO LO QUE HACEMOS.</p>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="pt-5 p-3 bg-white">
                   <h4 class="text-center pb-2">WHAT DO WE DO?</h4>
                   <p class="text-justify">TRANSFORMING MEXICO THROUGH SOLAR ENERGY, 28 YEARS OF EXPERIENCE SUPPORT EVERYTHING WE DO.</p>
                 </div>
             </div>            

          </div>
      </div>
      <div class="container">
        <div class="row pt-5 pb-5">
          <div class="col-12 col-md-6">
             <div>
                <img src="<?=URL?>public/img/cleanenergy-nosotros.jpg" alt="clean energy nosotros" class="img-fluid">
             </div>
          </div>
          <div class="col-12 col-md-6 pt-3">
             <div>
                <h2 class="text-energy text-center">VALUES</h2>
                <ul>
                  <li>Service</li>
                  <li>Sustainability</li>
                  <li>Reliability</li>
                  <li>Passion</li>
                  <li>Perseverance</li>
                  <li>Creativity</li>
                </ul>
             </div>
          </div>
        </div>
      </div>

    </div>

    <section class="pt-5 pb-5 top_bg">
        <div class="container">
          <div class="row">
              <div class="col-6 col-md-4 m-auto pl-5">
                <img src="<?=URL?>public/img/logo-white.png" alt="clean energy logo" class="img-fluid">
              </div>
              <div class="col-6 col-md-4 text-center  ">
                 <p><a href="<?=URL?>en" class="text-white">Home</a></p>
                 <p><a href="<?=URL?>en/about" class="text-white">About us</a></p>
                 <p><a href="<?=URL?>" class="text-white">Products</a></p>
                 <p><a href="<?=URL?>en/contact" class="text-white">Contact</a></p>
              </div>
              <div class="col-12 col-md-4 text-white"> 
                <h5 class="text-white font-weight-normal "><small class="text-energy"><i class="fa  fa-map"></i>  Address:</small></h5>
                <p class="font-weight-normal mb-0">Blvd. Popotla 3125 L1 , Col. Cuenca Diaz</p>
                <p  class="font-weight-normal">Rosarito, B.c. 22710</p>
                <h5 class="text-white font-weight-normal text-energy"><small  class="text-energy"><i class="fa  fa-phone"></i>  Phones:</small></h5>
                <p  class="font-weight-normal mb-0">(661) 104 2828</p>
                <p  class="font-weight-normal">(661) 640 4105</p>
                <h5 class="text-white font-weight-normal text-energy"><small  class="text-energy"><i class="fa  fa-envelope"></i> Email:</small></h5>
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
  </body>
<!-- <script src="<?=URL?>public/js/bootstrap.min.js"></script> -->

</body>
</html>