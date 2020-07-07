<?php 
    $news=$this->news;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Noticias frescas de Tijuana y sus alrededores">
    <meta name="author" content="gixcode.com">
    
    <title>Jousin Palafox Noticias</title>
    
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?=URL?>public/resources/bootstrap-3.3.7/css/bootstrap.min.css"  type="text/css">
    
    <!-- Owl Carousel Assets -->
    <link href="<?=URL?>public/resources/owl-carousel-1.3.3/owl.carousel.css" rel="stylesheet">
    <!-- <link href="owl-carousel/owl.theme.css" rel="stylesheet"> -->
     <link rel="shortcut icon" href="<?=URL?>public/img/favicon.png" type="image/x-icon"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?=URL?>public/css/style.css">
     <link href="<?=URL?>public/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="<?=URL?>public/resources/font-awesome-4.7.0/css/font-awesome.min.css"  type="text/css">
    
    <!-- jQuery and Modernizr-->
    <script src="<?=URL?>public/resources/jquery/jquery-2.1.4.min.js"></script>
    
    <!-- Core JavaScript Files -->       
    <script src="<?=URL?>public/resources/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="index-page">
<header>
    <!--Top-->
    <nav id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?=URL?>"><img src="<?=URL?>public/img/logo_jousin_palafox_white.png" alt="jousin palafox logo" class="img-responsive"></a>
                </div>
                <div class="col-md-3">
                    <div id="TT_yvnArBYBdQKapB9KKfukk1kkE9aKcpn">El tiempo</div>
                    <script type="text/javascript" src="https://www.tutiempo.net/s-widget/l_yvnArBYBdQKapB9KKfukk1kkE9aKcpn"></script>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline top-link link">
                        <li><a href="<?=URL?>"><i class="fa fa-home"></i> INICIO</a></li>
                        <li><a href="#contacto"  onclick="contactForm()"><i class="fa fa-comments"></i> ANUNCIATE </a></li>
                        <li>
                            <?=(Session::exists()) ? '<a href="'.URL.'dashboard/"><i class="fa fa-user"></i> '.strtoupper(Session::getValue('name')).'</a> - <a href="#" id="endSession"><i class="fa fa-sign-out"></i> SALIR</a>' : '<a href="#login" onclick="loginForm()"><i class="fa fa-user"></i> Mi CUENTA</a>'?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
    
    <!--Navigation-->
    <nav id="menu" class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
 
        </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?=URL?>">Portada</a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Noticias <i class="fa fa-arrow-circle-o-down"></i></a>
                    <div class="dropdown-menu">
                        <div class="dropdown-inner">
                            <ul class="list-unstyled">
                                <li><a href="<?=URL?>index/noticias/0-local">Local</a></li>
                                <li><a href="<?=URL?>index/noticias/1-nacional">Nacional</a></li>
                                <li><a href="<?=URL?>index/noticias/2-internacional">Internacional</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="<?=URL?>index/deportes"> Deportes</a></li>
                <li><a href="<?=URL?>index/espectaculos"> Espectáculos</a></li>
                <li><a href="<?=URL?>index/novedades"> Novedades </a></li>
                <li><a href="<?=URL?>index/viral"> Negocios</a></li>
                <li><a href="<?=URL?>index/saber">  #SaberNoEstorba</a></li>
                <li><a href="<?=URL?>index/videos">  Videos</a></li>
            </ul>
            <div class="col-sm-3 col-md-3 navbar-right">
                <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar" name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
                </form>
            </div>
        </div><!-- /.navbar-collapse -->
    </nav>
    
    <!-- /////////////////////////////////////////Content -->
    <div id="page-content" class="index-page">
        <div class="clearfix no-gutter">
            <div id="main-content" class="col-md-9 fix-right">
                <div id="noticiasPrincipales">
                <?php

                    for ($i=0; $i < count($news); $i++) {
                        if (!empty($news[$i]['post_url'])) {
                            ?>
                            <div class="col-md-4 hid den">
                               <article>
                                    <div class="entry-header">
                                        <div class="grid-cat">
                                            <a href="<?=URL.'noticia/detalle/'.$news[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($news[$i]['post_title']))?>"><?=$news[$i]['sectionName']?></a>
                                        </div>
                                        <h3 class="entry-title">
                                            <a href="<?=URL.'noticia/detalle/'.$news[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($news[$i]['post_title']))?>"><?=html_entity_decode($news[$i]['post_title'])?></a>
                                        </h3>
                                        <span> 
                                            <i class="fa fa-calendar"></i> <?=$news[$i]['post_date']?>
                                        </span>
                                    </div>
                                    <div class="post-thumbnail-wrap">
                                        <a href="<?=URL.'noticia/detalle/'.$news[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($news[$i]['post_title']))?>">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="<?=str_replace('watch?v=', 'embed/', $news[$i]['post_url'])?>" allowfullscreen=""></iframe>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="entry-content">
                                        <p><?=substr($news[$i]['post_body'] , 0,150)?></p>
                                        <a href="<?=URL.'noticia/detalle/'.$news[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($news[$i]['post_title']))?>">ver detalles...</a>
                                    </div>
                                </article>
                            </div>
                            <?php
                        }
                        else{
                            ?>   
                            <div class="col-md-4">
                               <article>
                                     <div class="entry-header">
                                         <div class="grid-cat"><a href="<?=URL.'noticia/detalle/'.$news[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($news[$i]['post_title']))?>"><?=$news[$i]['sectionName']?></a></div>
                                         <h3 class="entry-title"><a href="<?=URL.'noticia/detalle/'.$news[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($news[$i]['post_title']))?>"><?=html_entity_decode($news[$i]['post_title'])?></a></h3>
                                         <span> <i class="fa fa-calendar"></i> <?=$news[$i]['post_date']?></span>
                                     </div>
                                     <div class="post-thumbnail-wrap">
                                        <a href="<?=URL.'noticia/detalle/'.$news[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($news[$i]['post_title']))?>">
                                            <img src="<?=URL?>public/img/news/<?=$news[$i]['post_image']?>" /></a></div>
                                     <div class="entry-content">
                                         <p><?=substr($news[$i]['post_body'] , 0,150)?></p>
                                         <a href="<?=URL.'noticia/detalle/'.$news[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($news[$i]['post_title']))?>">Más...</a>
                                     </div>
                                 </article>
                             </div>
                            <?php
                        }
                        if (($i+1) % 3 == 0) {
                            echo "<div class='col-xs-12'></div>";
                        }
                    }
                ?>
                </div>
                <div class="plus-sign text-center col-xs-12">
                    <a href="#ver-mas" onclick="cargarMas()"><i class="fa fa-plus-circle fa-5x" aria-hidden="true" style="color: #00afef;"></i></a>
                </div>
            </div>
            
            <div id="sidebar" class="col-md-3 fix-left">
                <!-- Start Widget -->
                <div class="widget wid-banner">
                    <div class="content">
                        <img src="<?=URL?>public/img/jousingpalafox.jpg" class="img-responsive" alt="jousing palafox noticias" />
                        <img src="<?=URL?>public/img/logo_jousin_palafox.png">
                        <h6 class="text-muted">Locutor de Los 40 107.7fm. Columnista del periódico @FronteraInfo</h6>
                    </div>
                </div>

                <!-- Start Widget -->
                <div class="widget wid-tags">
                    <div class="heading"><h4>Buscar</h4></div>
                    <div class="content">
                        <form role="form" class="form-horizontal" method="post" action="">
                            <input type="text" placeholder="Buscar noticia" value="" name="v_search" id="v_search" class="form-control">
                        </form>
                    </div>
                </div>

                <!-- Start Widget -->
                <div class="widget wid-tweet">

                    <div class="fb-page" data-href="https://www.facebook.com/jousinpalafoxnoticias/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/jousinpalafoxnoticias/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/jousinpalafoxnoticias/">Jousin Palafox Noticias</a></blockquote></div>
                </div>
            </div>
        </div>
    </div>

    <footer>

        <div class="copy-right">
            <p>Copyright 2017- <a href="gixcode.com" target="_blank" rel="nofollow"></a>Developed by <a href="http://gixdigital.com" target="_blank" rel="nofollow">Gixdigital.com</a></p>
            
        </div>
        
    </footer>
    <!-- Footer -->
    <div class="modal fade" id="modal-modal">
        <div class="modal-dialog">
            <div class="modal-content" id="modal-content">
                <div class="modal-body row">
                    <div class="col-xs-12 text-center">
                        <h5>Cargando <i class="fa fa-spinner fa-pulse fa-fw"></i>
                        <span class="sr-only">Cargando...</span></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JS -->

    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


    <script src="<?=URL?>public/resources/owl-carousel-1.3.3/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-slide").owlCarousel({
       autoPlay: 3000,
            items : 4,
            itemsDesktop : [1199,4],
            itemsDesktopSmall : [979,3],
            itemsTablet : [768, 2],
            itemsMobile : [479, 1],
            navigation: true,
            navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
            pagination: false
      });
    });
    function loginForm() {
        $('#modal-modal').modal('show');
        $.ajax({
            url: '<?=URL?>user/login',
            beforeSend:function(){
                $('#modal-content').html('<div class="modal-body row text-center"><h5>Cargando <i class="fa fa-spinner fa-pulse fa-fw"></i><span class="sr-only">Cargando...</span></h5></div>');
            },
            success:function(msg){
                $('#modal-content').html(msg);
            },
            error:function(){

            }
        });
    }
    function contactForm() {
        $('#modal-modal').modal('show');
        $.ajax({
            url: '<?=URL?>user/contacto',
            beforeSend:function(){
                $('#modal-content').html('<div class="modal-body row text-center"><h5>Cargando <i class="fa fa-spinner fa-pulse fa-fw"></i><span class="sr-only">Cargando...</span></h5></div>');
            },
            success:function(msg){
                $('#modal-content').html(msg);
            },
            error:function(){

            }
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

            }
        });
    });
    var bloqueNoticias=<?=count($news)?>;
    function cargarMas() {
        $.ajax({
            url: '<?=URL?>index/cargaMas',
            type: 'POST',
            data: {de: bloqueNoticias, a: 12, seccion:<?=$this->seccion?>},
            beforeSend:function(){
                //$('#modal-content').html('<div class="modal-body row text-center"><h5>Cargando <i class="fa fa-spinner fa-pulse fa-fw"></i><span class="sr-only">Cargando...</span></h5></div>');
            },
            success:function(msg){
                $( "<div class='row'>"+msg+"</div>" ).appendTo( $( "#noticiasPrincipales" ) );
            },
            error:function(){

            }
        });
       //$( "<div class='col-xs-12'>Cargando de: "+bloqueNoticias+" a la: "+(bloqueNoticias+12)+"</div>" ).appendTo( $( "#noticiasPrincipales" ) );
        //alert('Cargando de: '+bloqueNoticias+' a la: '+(bloqueNoticias+12));
        bloqueNoticias=bloqueNoticias+12;        
    }
    </script>
</body>
</html>
