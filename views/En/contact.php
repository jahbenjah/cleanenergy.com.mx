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
      <a href="<?=URL?>contacto" class="ml-md-auto"><img src="<?=URL?>public/img/mx.png" alt="clean energy español"></a>
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
                          <a class="nav-link active" href="<?=URL?>us">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?=URL?>en/about">About us</a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Products
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="<?=URL?>interconexion">Interconexion</a>
                                <a class="dropdown-item" href="<?=URL?>autonomos">Autonomos</a>
                                <a class="dropdown-item" href="<?=URL?>calentadores">Calentadores</a>
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
    </div>
    <section>
      <div class="container">
         <div class="row">
           <div class="p-5">
               <h2 class="text-center font-weight-normal"><span style="border-bottom: 5px solid #f47825 !important;">WE'RE HERE TO SERVE YOU</span> </h2>
               <p class="pt-3 pl-5 pr-5">We are here to serve you, if you have any questions about our products, please fill out this form and we will contact you shortly.</p>
           </div>
           
           <div class="col-12 col-md-6 p-3">
              <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1192.0881562547693!2d-117.04827780819443!3d32.318986526649766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzLCsDE5JzA4LjQiTiAxMTfCsDAyJzUzLjgiVw!5e0!3m2!1ses!2smx!4v1570352676876!5m2!1ses!2smx" frameborder="0" style="border:0;" allowfullscreen="" ></iframe>
              </div>
 
           </div>
            <div class="col-12 col-md-6 pb-3">
              <div class="contact-form">
                <h3 class="text-center text-muted font-weight-normal">Contact Form</h3>
                <form  method="post" id="sendMessageForm">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Name </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="john">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput2">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="john@gmail.com">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput3">Phone</label>
                    <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="111 222 3333">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput4">Message</label>
                    <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="Your message">
                  </div>
                  <div class="text-center">
                     <button type="submit" class="btn btn-block btn-energy">Send </button>
                  </div>
                  
                </form>
                <div id="statusSendMessageForm" ></div>
              </div>
           </div>
         </div>
      </div>
    </section>
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
    <!-- <script src="<?=URL?>public/js/bootstrap.min.js"></script> -->
</body>
</html>