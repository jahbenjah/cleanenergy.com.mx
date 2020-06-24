<?php
$newsDet= (isset($this->newsDetails[0])) ? $this->newsDetails[0] :  array('post_title' => 'Página no encontrada', 'post_image' => '', 'post_url' => '', 'post_date' => '', 'post_body' => 'Esta página no fue encontrada o fue eliminada.. <a href="'.URL.'">Ir al inicio</a>',);
// $newsRel=$this->news;
?>
<!DOCTYPE html>
<html>
<head>
<title>Cochi Advisor</title>
<link rel="shortcut icon" href="images/arr.png">
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="cochi advisor" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?=URL?>public/resources/bootstrap-3.3.7/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="<?=URL?>public/css/flipping_gallery.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?=URL?>public/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?=URL?>public/resources/owlcarousel/owl.carousel.min.css">
<!-- js -->
<script src="<?=URL?>public/resources/jquery/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?=URL?>public/js/move-top.js"></script>
<script type="text/javascript" src="<?=URL?>public/js/easing.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>
<!-- start-smoth-scrolling -->
<link href="<?=URL?>public/resources/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!-- start-rate-->
<script src="<?=URL?>public/js/jstarbox.js"></script>
  <link rel="stylesheet" href="<?=URL?>public/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
    <script type="text/javascript">
      jQuery(function() {
      jQuery('.starbox').each(function() {
        var starbox = jQuery(this);
          starbox.starbox({
          average: starbox.attr('data-start-value'),
          changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
          ghosting: starbox.hasClass('ghosting'),
          autoUpdateAverage: starbox.hasClass('autoupdate'),
          buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
          stars: starbox.attr('data-star-count') || 5
          }).bind('starbox-value-changed', function(event, value) {
          if(starbox.hasClass('random')) {
          var val = Math.random();
          starbox.next().text(' '+val);
          return val;
          } 
        })
      });
    });
    </script>
<!--//End-rate-->
</head>
<body>
<div style="background-color: #eae9e9;" >
        <div class="container" >
            <div class="nav-top">
                <div class="logo text-center">
                    <h1 ><a href="index.html"><span>Cochi Advisor </span></a></h1>
                </div>
                <nav class="navbar navbar-default navbar-inverse pull-right">
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    
                    <ul class="nav navbar-nav ">
                         <?php
                            if (Session::exists()) {
                                echo '
                                    <li>
                                        <a  class="hyper"  data-toggle="modal" href="#modal-user" onclick="userProfile()"><span>'.Session::getValue('name').'</span></a>
                                    </li>
                                    <li>
                                        <a  class="hyper"href="#" onclick="endSession()"><span>cerrar sesión</span></a>
                                    </li>
                                ';
                                if (Session::getValue('type')==1) {
                                    echo '<script>window.location.href ="'.URL.'dashboard/'.'"</script>';
                                    // echo '<script>alert("estoy dentro del type 1")</script>';
                                      
                                }
                            }else{
                                echo '
                                    <li>
                                        <a  class="hyper"  data-toggle="modal" href="#modal-user" onclick="userFormRegister()"><span>Registro</span></a>
                                    </li>
                                    <li>
                                        <a  class="hyper" data-toggle="modal" href="#modal-user" onclick="login()"><span>Inciar sesión</span></a>
                                    </li>
                                ';
                            }
                        ?>
                        <!-- <li class=" active"><a href="index.html" class="hyper "><span>Restaurantes</span></a></li>  
                        <li><a href="#" class="hyper" data-toggle="modal" data-target="#modal-user"> <span>Unete</span></a></li>
                        <li><a href="" class="hyper" data-toggle="modal" data-target="#modal-user" onclick="login();"><span> Entra </span></a></li> -->
                        <li><a href="#" class="hyper"><span>Contacto</span></a></li>
                    </ul>
                </div>
                </nav>
                <div class="clearfix"></div>
            </div>
        </div>          
</div>
  <!---->
  <!--content-->
<div class="single">
    <div class="container">
      <div class="single-top-main">
         <h2 class="text-left" style="color: #de70a3;" ><?=$newsDet['name']?></h2>
          <div class="block block-w3" style="padding-bottom: 2.5em;">
            <div class="starbox small ghosting"> </div>
          </div>
         <div class="col-md-6 single-top">
             <div class="single-right single-w3agile-back">
                
                <div class="">    
                    <div class="owl-carousel owl-theme" style="">
                      <div class="item">
                          <div class="img">
                            <img src="<?=URL?>public/img/images/<?=$newsDet['image1']?>" class="img-responsive">
                          </div>
                          
                      </div>
                      <div class="item">
                          <div class="img">
                            <img src="<?=URL?>public/img/images/<?=$newsDet['image2']?>" class="img-responsive">
                          </div>
                      </div>
                      <div class="item">
                          <div class="img">
                            <img src="<?=URL?>public/img/images/<?=$newsDet['image3']?>" class="img-responsive">
                          </div>

                      </div>
                      <div class="item">
                          <div class="img">
                            <img src="<?=URL?>public/img/images/<?=$newsDet['image4']?>" class="img-responsive">
                          </div>

                      </div>
                    </div>

                  </div>
                
                <div class="clearfix"> </div>
              </div>
              <div class="row text-center" style="padding: 2em;">
                <a href="https://maps.google.com"><i class="fa fa-map-marker" aria-hidden="true" style="color: #de70a3;font-size: 1.5em;"></i> Cómo llegar?</a>
                <a href="tel:+5266412345678"><i class="fa fa-phone" aria-hidden="true" style="color: #de70a3;font-size: 1.5em;"></i> Llamar</a>
                <a href="" class="btn btn-cochi"><i class="fa fa-address-book" aria-hidden="true" style="font-size: 1.5em;"></i> Reservar</a>
              </div>

        </div>
        <div class="col-md-6 single-top-left single-w3agile" style="padding-top:  1em;">
            <h3 style="color: black;padding-bottom: 1em;">Descripcion General</h3>
            <p ><?=$newsDet['description']?></p>
              <p style="padding-bottom: 1em;"><i class="fa fa-map-marker" aria-hidden="true" style="color: #de70a3;font-size: 1.5em;"></i> <?=$newsDet['address']?> <?=$newsDet['city']?></p>
              
           

             <div class="clearfix"> </div>
             <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4757.0418417012115!2d-117.0736479861772!3d32.53318265951593!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd52201fc7e8ac1b0!2sMariscos+Titos!5e0!3m2!1ses!2smx!4v1520305878698" width="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
             <div class="panel-group" id="accordion">
             
             <?php if ($newsDet['promotion']){
              echo '
                <div class="panel panel-default">
                <div class="panel-heading">
                   <h4 class="panel-title" data-toggle="collapse" data-target="#collapseThree">
                     <span>|</span> Promociones
                   </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body">
                    '.$newsDet['promotion'].'
                  </div>
                </div>
              </div>';
             }?>

             <?php if ($newsDet['faq']){
              echo '
                <div class="panel panel-default">
                <div class="panel-heading">
                   <h4 class="panel-title" data-toggle="collapse" data-target="#collapseFive">
                     <span>|</span> Preguntas y Respuestas
                   </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse">
                  <div class="panel-body">
                    '.$newsDet['faq'].'
                  </div>
                </div>
              </div>';
             }?>

            </div>
            <div>
              <?php 
                    if (!empty($newsDet['website'])){
                        echo '<a href="'.$newsDet['website'] .'" target="_blank"><p ><i class="fa fa-globe" aria-hidden="true"></i> Ir al Sitio Web </p></a>';
                      }
                    ?>
                    <ul class="social-top"><?php
                      if (!empty($newsDet['facebook'])){
                        echo '<li><a href="'.$newsDet['facebook'].'" target="_blank" class="icon facebook"><i class="fa fa-2x fa-facebook" aria-hidden="true"></i><span></span></a></li>';
                      }
                      
                      if (!empty($newsDet['youtube'])){
                        echo '<li><a href="'.$newsDet['youtube'].'" target="_blank" class="icon pinterest"><i class="fa fa-2x fa-youtube-play" aria-hidden="true"></i><span></span></a></li>';
                      }
                      if (!empty($newsDet['instagram'])){
                        echo '<li><a href="'.$newsDet['instagram'].'" target="_blank" class="icon twitter"><i class="fa fa-2x fa-instagram" aria-hidden="true"></i><span></span></a></li>';
                      }
                      ?>
            </div>
          </div>
          
        </div>

        
       </div>  
       <div class="container">
         <div class="row">
            <h3>Comentarios</h3>
          </div>
       </div> 


    </div>
    
  </div>
<!--content-->
<hr>
<!--footer-->
<div class="footer">
  <div class="container">
    <div class="clearfix"></div>
      <div class="footer-bottom">
        <p class="fo-para">No hay amor más sincero, que el amor a la comida</p>
        <ul class="social-fo">
          <li><a href="#" class="face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#" class="twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    <div class="copy-right">
      <p> &copy; 2018 CochiAdvisor. Todos los derechos reservados | Desarrollado por <a href="http://gixdigital.com/" target="_blank"> GixDigital</a></p>
    </div>
  </div>
</div>
<!-- //footer-->
<script type="text/javascript" src="<?=URL?>public/resources/owlcarousel/owl.carousel.min.js"></script>
<!-- smooth scrolling -->
<!-- modal -->
<div class="modal fade" id="modal-user">
    <div class="modal-dialog">
        <div class="modal-content" id="user-modal-content">
            Aqui se mostrara todo lo relacionado con el usuario
        </div>
    </div>
</div>
<!-- /modal -->
<script>
    function login() {
        $('#modal-user').modal('show');
        $.ajax({
            url: '<?=URL?>user/login',
            beforeSend:function(){
                $('#user-modal-content').html('<div class="modal-body row text-center"><h5>Cargando <i class="fa fa-spinner fa-pulse fa-fw"></i><span class="sr-only">Cargando...</span></h5></div>');
            },
            success:function(msg){
                $('#user-modal-content').html(msg);
            },
            error:function(){

            },
        });
    }
    $('#endSession').click(function(event) {
        /* Act on the event */
        $.ajax({
            url: '<?=URL?>user/destroySession',
            beforeSend:function(){
                //$('#modal-content').html('<div class="modal-body row text-center"><h5>Cargando <i class="fa fa-spinner fa-pulse fa-fw"></i><span class="sr-only">Cargando...</span></h5></div>');
            },
            success:function(){
                location.reload()
            },
            error:function(){

            },
        });
    });
</script>
  <script type="text/javascript">
    $(document).ready(function() {
    /*
      var defaults = {
      containerID: 'toTop', // fading element id
      containerHoverID: 'toTopHover', // fading element hover id
      scrollSpeed: 1200,
      easingType: 'linear' 
      };
    */                
    $().UItoTop({ easingType: 'easeOutQuart' });
    });
  </script>

  <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
<script src="<?=URL?>public/resources/bootstrap-3.3.7/js/bootstrap.min.js"></script>
<script>
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:true,
    autoplay:true,
    stagePadding: 30,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }

})
</script>
<!-- //for bootstrap working -->
<script src="<?=URL?>public/js/users.js"></script>
<script>
        var variables={
            controller: "<?=URL?>user/",
            view: "userFormRegister"
        };
    </script>
</body>
</html>