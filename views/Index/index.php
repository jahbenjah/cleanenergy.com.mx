<?php 

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Clean Energy </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
      <a href="<?=URL?>en" class="ml-md-auto"><img src="<?=URL?>public/img/us.png" alt="clean energy us"></a>
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
                          <a class="nav-link active" href="<?=URL?>">Inicio</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?=URL?>nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Productos
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="<?=URL?>interconexion">Interconexión</a>
                                <a class="dropdown-item" href="<?=URL?>autonomos">Autonomos</a>
                                <a class="dropdown-item" href="<?=URL?>luminarias">Luminarias</a>
                              </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?=URL?>contacto">Contacto</a>
                        </li>
                     </ul>
                </div>
              </nav>
              
            </div>
       </div>
       <div class="pt-3 " style="padding-left: 0px;padding-right: 0px;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?=URL?>public/img/banner1.jpg" alt="clean energy Slide 1">
              <div class="carousel-caption   d-md-block">
                <h1 class="font-size4">SOMOS</h1>
                <h1 class="font-size4">EL CENTRO DE</h1>
                <h1 class="font-size4 text-uppercase">distribución solar</h1>
                <h2 class="border font-size4">MAS COMPLETO DE MEXICO</h2>
                <div class="pt-2">
                  <a href="#formulario" class="btn btn-success btn-md rounded-0"> Cotiza Ahora !</a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?=URL?>public/img/banner2.jpg" alt="clean energy Slide 2">
              <div class="carousel-caption d-md-block">
                <h1 class="font-size4">SOMOS</h1>
                <h1 class="font-size4">EL CENTRO DE</h1>
                <h1 class="font-size4 text-uppercase">distribución solar</h1>
                <h2 class="border font-size4">MAS COMPLETO DE MEXICO</h2>
                <div class="pt-2">
                  <a href="#formulario" class="btn btn-success btn-md rounded-0"> Cotiza Ahora !</a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?=URL?>public/img/banner3.jpg" alt="clean energy Slide 3">
              <div class="carousel-caption   d-md-block">
                <h1 class="font-size4">SOMOS</h1>
                <h1 class="font-size4">EL CENTRO DE</h1>
                <h1 class="font-size4 text-uppercase">distribución solar</h1>
                <h2 class="border font-size4">MAS COMPLETO DE MEXICO</h2>
                <div class="pt-2">
                  <a href="#formulario" class="btn btn-success btn-md rounded-0"> Cotiza Ahora !</a>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
       </div>
       <div class="container pt-5 pb-5">
          <div class="row pt-5 pb-5">
             <div class="col-md-6">
                <img src="<?=URL?>public/img/install.jpg" alt="clean energy img" class="img-fluid">
             </div>
             <div class="col-md-6">
                 <div class="pt-5">
                   <h2 class="font-weight-normal text-center">TENEMOS LOS MEJORES PRODUCTOS</h2>
                   <p class="p-2 text-mute text-justify">En <span class="font-weight-bold text-clean">CLEAN ENERGY</span> sólo distribuimos productos de la <span class="font-weight-bold text-energy">más alta calidad</span>, contamos con las mejores marcas del mercado a un precio accesible. Podrás encontrar todo tipo de productos solares, desde Paneles y Calentadores hasta Inversores y Controladores para plantas solares.</p>
                 </div>
             </div>            

          </div>
      </div>
      <div class="container-fluid pt-5 bg-white">
         <div class="p-5">
           <h2 class="text-center font-weight-normal"><span style="border-bottom: 5px solid #f47825 !important;">MARCAS DISTRIBUIDAS</span> </h2>
           <div class="row pt-4 pb-3">
             <div class="col-6 col-md-2">
                 <img src="<?=URL?>public/img/marcas/Marcas_Distribuidas_Solar_Energy_BC.png" alt="clean energy marcas" class="img-fluid">
              </div>
              <div class="col-6 col-md-2">
                 <img src="<?=URL?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Ctrl_Sun.png" alt="clean energy marcas" class="img-fluid">
              </div>
              <div class="col-6 col-md-2">
                 <img src="<?=URL?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_DAH.png" alt="clean energy marcas" class="img-fluid">
              </div>
              <div class="col-6 col-md-2">
                 <img src="<?=URL?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Enphase.png" alt="clean energy marcas" class="img-fluid">
              </div>
              <div class="col-6 col-md-2">
                 <img src="<?=URL?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Fangpusun.png" alt="clean energy marcas" class="img-fluid">
              </div>
              <div class="col-6 col-md-2">
                 <img src="<?=URL?>public/img//marcas/Marcas_Distribuidas_Por_Solar_Center_Fronius.png" alt="clean energy marcas" class="img-fluid">
              </div>
              <div class="col-6 col-md-2">
                 <img src="<?=URL?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Go_Solar.png" alt="clean energy marcas" class="img-fluid">
              </div>
              <div class="col-6 col-md-2">
                 <img src="<?=URL?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Growatt.png" alt="clean energy marcas" class="img-fluid">
              </div>
              <div class="col-6 col-md-2">
                 <img src="<?=URL?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Hoymiles.png" alt="clean energy marcas" class="img-fluid">
              </div>
              <div class="col-6 col-md-2">
                 <img src="<?=URL?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Jntech.png" alt="clean energy marcas" class="img-fluid">
              </div>
              <div class="col-6 col-md-2">
                 <img src="<?=URL?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Marzo_2019_GCL.png" alt="clean energy marcas" class="img-fluid">
              </div>
              <div class="col-6 col-md-2">
                 <img src="<?=URL?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_NEP.png" alt="clean energy marcas" class="img-fluid">
              </div>
              <div class="col-6 col-md-2">
                 <img src="<?=URL?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Part_Master.png" alt="clean energy marcas" class="img-fluid">
              </div>
              <div class="col-6 col-md-2">
                 <img src="<?=URL?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_QXPV.png" alt="clean energy marcas" class="img-fluid">
              </div>
              <div class="col-6 col-md-2">
                 <img src="<?=URL?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Samlex.png" alt="clean energy marcas" class="img-fluid">
              </div>
              <div class="col-6 col-md-2">
                 <img src="<?=URL?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Seraphim.png" alt="clean energy marcas" class="img-fluid">
              </div>
              <div class="col-6 col-md-2">
                 <img src="<?=URL?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_SHURflo.png" alt="clean energy marcas" class="img-fluid">
              </div>
              <div class="col-6 col-md-2">
                 <img src="<?=URL?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Solis.png" alt="clean energy marcas" class="img-fluid">
              </div>
              <div class="col-6 col-md-2">
                 <img src="<?=URL?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_SRNE.png" alt="clean energy marcas" class="img-fluid">
              </div>
              <div class="col-6 col-md-2">
                 <img src="<?=URL?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Unirac.png" alt="clean energy marcas" class="img-fluid">
              </div>

              <div class="col-6 col-md-2">
                 <img src="<?=URL?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_Yassion.png" alt="clean energy marcas" class="img-fluid">
              </div>
              <div class="col-6 col-md-2">
                 <img src="<?=URL?>public/img/marcas/Marcas_Distribuidas_Por_Solar_Center_ZJ_Beny.png" alt="clean energy marcas" class="img-fluid">
              </div>

           </div> 
         </div>
      </div>
    </div>
    <section>
      <div class="container">
         <div class="row">
           <div class="p-5">
               <h2 class="text-center font-weight-normal"><span style="border-bottom: 5px solid #f47825 !important;">HAZ CONTACTO</span> </h2>
               <p class="pt-3 pl-5 pr-5">Estamos para servirte, si tienes alguna duda sobre nuestros productos por favor llena este formulario y en breve nos pondremos en contacto contigo.</p>
           </div>
           
           <div class="col-12 col-md-6 p-3">
              <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1192.0881562547693!2d-117.04827780819443!3d32.318986526649766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzLCsDE5JzA4LjQiTiAxMTfCsDAyJzUzLjgiVw!5e0!3m2!1ses!2smx!4v1570352676876!5m2!1ses!2smx" frameborder="0" style="border:0;" allowfullscreen="" ></iframe>
              </div>
 
           </div>
           <div class="col-12 col-md-6 pb-3" id="formulario">
              <div class="contact-form">
                <h3 class="text-center text-muted font-weight-normal">REGISTRATE </h3>
                <form  method="post" id="contactForm">
                  <div class="form-group">
                    <label for="inputname">Nombre </label>
                    <input type="text" class="form-control" id="inputname" name="inputname" placeholder="juan">
                  </div>
                  <div class="form-group">
                    <label for="inputemail">Correo Electrónico</label>
                    <input type="email" class="form-control" id="inputemail" name="inputemail" placeholder="juan@gmail.com">
                  </div>
                  <div class="form-group">
                    <label for="inputphone">Telefono</label>
                    <input type="text" class="form-control" id="inputphone" name="inputphone" placeholder="111 222 3333">
                  </div>
                  <div class="form-group">
                    <label for="inputmessage">¿Cuánto pagas de luz ?</label>
                    <input type="text" class="form-control" id="inputmessage" name="inputmessage" placeholder="15000">
                  </div>
                  <div class="text-center">
                     <button type="submit" class="btn btn-block bg-orange text-white rounded-0">Mandar</button>
                  </div>
                  
                </form>
                <div id="statusForm" ></div>
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
    <script src="<?=URL?>public/js/jquery.validate-1.11.1.js"></script>
  </body>
<!-- <script src="<?=URL?>public/js/bootstrap.min.js"></script> -->
 <script> 
      $(document).ready(function() {
        $("#contactForm").validate({
              rules: {
                  inputname:"required",
                  inputphone: "required" ,
                  inputemail: {
                    required:true,
                    email:true,
                  },
              },
              messages: {
                  inputname:"<span class='text-danger'>ingresa tu nombre</span>",
                  inputphone: "<span class='text-danger'>ingresa tu telefono</span>",
                  inputemail:{
                    required:"<span class='text-danger'>ingresa un email</span>",
                    email:"<span class='text-danger'>ingresa un correo valido</span>"
                  } ,
              }, 

              submitHandler: function(){
                   waiting();
                  sendContactForm();
                  
                },
                highlight: function(element) {
                  var id_attr = "#" + $( element ).attr("id") + "1";
                    $(element).closest('.form-group')./*removeClass('has-success').*/addClass('has-error');        
                },
                unhighlight: function(element) {
                  var id_attr = "#" + $( element ).attr("id") + "1";
                    $(element).closest('.form-group').removeClass('has-error')/*.addClass('has-success')*/;       
                },
                errorElement: 'span',
                errorClass: 'hidden',
                errorPlacement: function(error, element) {
                    if(element.length) {
                      error.insertAfter(element);
                    } else {
                      error.insertAfter(element);
                    }
              }
            });
            function sendContactForm(){
              var formData = new FormData($('form#contactForm')[0]);
              $.ajax({           
                  url: "<?=URL?>index/contactform",
                  type: 'POST',
                  data: formData,
                  beforeSend: function(){
 
                    $('#statusForm').removeClass('d-none');
                    $("#facturaForm").find('button[type="submit"]').html('Enviando..');
                    $("#facturaForm").find('button').removeAttr('disabled');
                  },
                  success: function(msg){
                    if ($.isNumeric(msg)) {
                      $('#statusForm').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Gracias por tu registro, en breve un representante le atendera...</strong> </div>');
                      setTimeout(function() {location.reload()}, 2500);
                    }else{
                      $('#statusForm').html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>ERROR:'+msg+'</strong></div>');
                    }
                  },
                  error: function(){
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
      function waiting(){
        $('#statusForm').removeClass('d-none');
      }
    </script>

</body>
</html>