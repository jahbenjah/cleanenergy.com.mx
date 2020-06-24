<?php
	$newsDet=$this->newsDetails[0];
	$newsRel=$this->news;
	$banner=$this->banner;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="Cache-Control" content="max-age=1296000">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Noticias frescas de Tijuana y sus alrededores">
    <meta name="author" content="palafoxnoticias.com">


    <!-- Schema.org markup for Google+ -->
	<meta itemprop="name" content="<?=$newsDet['post_title']?>">
	<meta itemprop="description" content="Noticias frescas de Tijuana y sus alrededores">
	<meta itemprop="image" content="<?=URL?>public/img/news/<?= $newsDet['post_image'] ?>">

	<!-- Open Graph data -->
	<meta property="og:title" content="<?=$newsDet['post_title']?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?= URL.'noticia/detalle/'.$newsDet['id'].'/'.str_replace(' ', '-', $newsDet['post_title']);?>" />
	<meta property="og:image" content="<?=URL?>public/img/news/<?= $newsDet['post_image'] ?>" />
	<meta property="og:description" content="Noticias frescas de Tijuana y sus alrededores" />
	<meta property="og:site_name" content="palafoxnoticias.com" />
	<meta property="fb:app_id" content="1769988496350813">
 
	
    <title>Jousin Palafox Noticias &middot; <?=$newsDet['post_title']?></title>
	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?=URL?>public/resources/bootstrap-3.3.7/css/bootstrap.min.css"  type="text/css">
    
    <!-- Owl Carousel Assets -->
    <link href="<?=URL?>public/resources/owl-carousel-1.3.3/owl.carousel.css" rel="stylesheet">
    <link href="<?=URL?>public/resources/owl-carousel-1.3.3/owl.theme.css" rel="stylesheet">

    <link rel="shortcut icon" href="<?=URL?>public/img/favicon.png" type="image/x-icon"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?=URL?>public/css/style.css">
    
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
    <style>
    	.widget .heading{background: url(<?=URL.'public/img/'?>title.png) repeat-x center center;margin-bottom: 10px;}
    </style>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-101728137-1', 'auto');
  ga('send', 'pageview');
</script>
</head>

<body class="single-page">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
						<li><a href="#"><i class="fa fa-comments"></i> CONTACTO</a></li>
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
								<li><a href="#">Local</a></li>
								<li><a href="#">Nacional</a></li>
								<li><a href="#">Internacional</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li><a href="<?=URL?>index/deportes"> Deportes</a></li>
				<li><a href="<?=URL?>index/espectaculos"> Espectáculos</a></li>
				<li><a href="<?=URL?>index/novedades"> Novedades </a></li>
				<li><a href="<?=URL?>index/viral"> Viral</a></li>
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
	<!-- Header -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="single-page container">
		<div class="gutter-7px">
			<div id="main-content" class="col-md-8 fix-right">
				<article class="single-post">
					<div class="entry-header">
						<h1 class="entry-title"><a href="#"><?= $newsDet['post_title'] ?> </a></h1>
						<span> <i class="fa fa-calendar"></i> <?= $newsDet['post_date'] ?></span>
					</div>
					<div class="post-thumbnail-wrap">
						<?php
							if (!empty($newsDet['post_url'])) {
								?>
									<div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="<?=str_replace('watch?v=', 'embed/', $newsDet['post_url'])?>" allowfullscreen=""></iframe>
                                    </div>
								<?php
							}
							else{
								?>
									<img src="<?=URL?>public/img/news/<?= $newsDet['post_image'] ?>" />
								<?php
							}
						?>
					</div>
					<div class="l-share" style="padding: 20px 0;">
						<ul class="list-inline center">
							<li><a href="#" class="btn btn-facebook"><i class="fa fa-facebook"></i> Share</a></li>
							<li><a href="#" class="btn btn-twitter"><i class="fa fa-twitter"></i> Tweet</a></li>
							<li><a href="#" class="btn btn-google"><i class="fa fa-youtube"></i> Youtube</a></li>
							 
						</ul>
					</div>
					<hr class="line">
					<div class="entry-content">
						<p class="text-justify"><?= $newsDet['post_body'] ?></p>
						 
						<div class="line"></div>
						<div class="comment">
							<div class="fb-comments" data-href="<?= URL.'noticia/detalle/'.$newsDet['id'].'/'.str_replace(' ', '-', $newsDet['post_title']);?>" data-numposts="5"></div>
						</div>
					</div>
				</article>
				
				<div class="box">
					<div class="box-header header-natural">
						<h2>Noticias relacionadas</h2>
					</div>
					<div class="box-content">
						<div class="row">
							<?php
								$ocho = (count($newsRel)>3) ? 3 : count($newsRel);
								for ($i=0; $i < $ocho; $i++) { 
									/*echo '<span>'.substr($newsRel[$i]['post_title'], 0,30).' <a href="'.URL.'noticia/detalle/'.$newsRel[$i]['id'].'/'.str_replace(' ', '-', $newsRel[$i]['post_title']).'">ver más...</a></span>';*/
									?>
									<div class="col-md-4">
										<div class="wrap-vid">
											<div class="zoom-container">
												<div class="zoom-caption">
													<a href="<?=URL?>noticia/detalle/<?= $newsRel[$i]['id'].'/'.str_replace(' ', '-', $newsRel[$i]['post_title'])?>"></a>
												</div>
												<img src="<?=URL?>public/img/news/<?=$newsRel[$i]['post_image']?>" />
											</div>
											<h3 class="vid-name"><a href="<?=URL?>noticia/detalle/<?= $newsRel[$i]['id'].'/'.str_replace(' ', '-', $newsRel[$i]['post_title'])?>"><?=$newsRel[$i]['post_title']?></a></h3>
											<div class="info">
												 
												<span><i class="fa fa-calendar"></i><?=$newsRel[$i]['post_date']?></span> 
												<!-- <span><i class="fa fa-heart"></i>1,200</span> -->
											</div>
										</div>
									</div>
									<?php
								}
							?>
						</div>
					</div>
				</div>
			</div>
			<div id="sidebar" class="col-md-4 fix-left">
				<!---- Start Widget ---->
				<div class="widget wid-follow">
					<div class="heading"><h4>Sigueme</h4></div>
					<div class="content">
						<ul class="list-inline">
							<li>
								<a href="https://www.facebook.com/jousinpalafoxnoticias/" target="_blank">
									<div class="box-facebook">
										<span class="fa fa-facebook fa-2x"></span>
										<span>Sígueme</span>
									</div>
								</a>
							</li>
							<li>
								<a href="https://twitter.com/JousinPalafox" target="_blank">
									<div class="box-twitter">
										<span class="fa fa-twitter fa-2x"></span>
										<span>Sígueme</span>
									</div>
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/channel/UCodwjKqFk-M6nicuXlxQC7g/feed" target="_blank">
									<div class="box-google">
										<span class="fa fa-youtube fa-2x"></span>
										<span>Suscríbete</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!---- Start Widget ---->
				<div class="widget wid-post hidden">
					<div class="heading"><h4>Videos Recientes</h4></div>
					<div class="content">
						<div class="post wrap-vid">
							<div class="zoom-container">
								<div class="zoom-caption">
									<a href="#"></a>
								</div>
								<img src="<?=URL?>public/img/news/13.jpg" />
							</div>
							<div class="wrapper">
								<h5 class="vid-name"><a href="#">TEDxTijuana</a></h5>
								<div class="info">
									 
									<span><i class="fa fa-calendar"></i>25/3/2017</span> 
									<span><i class="fa fa-heart"></i>1,200</span>
								</div>
							</div>
						</div>
						<div class="post wrap-vid">
							<div class="zoom-container">
								<div class="zoom-caption">
									<a href="#"></a>
								</div>
								<img src="<?=URL?>public/img/news/4.jpg" />
							</div>
							<div class="wrapper">
								<h5 class="vid-name"><a href="#">#SaberNoEstorba</a></h5>
								<div class="info">
									 
									<span><i class="fa fa-calendar"></i>25/3/2017</span> 
									<span><i class="fa fa-heart"></i>1,200</span>
								</div>
							</div>
						</div>
						<div class="post wrap-vid">
							<div class="zoom-container">
								<div class="zoom-caption">
									<a href="#"></a>
								</div>
								<img src="<?=URL?>public/img/news/6.jpg" />
							</div>
							<div class="wrapper">
								<h5 class="vid-name"><a href="#">Video's Name</a></h5>
								<div class="info">
								 
									<span><i class="fa fa-calendar"></i>25/3/2017</span> 
									<span><i class="fa fa-heart"></i>1,200</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				 
				<!---- Start Widget ---->
				<div class="widget wid-banner">
					<div class="content">
						<?php
							if (count($banner)==1) {
								?>
									<img src="<?=URL?>public/img/banners/<?=$banner[0]['img']?>" class="img-responsive"/>
								<?php
							}
						?>
					</div>
				</div>
				<!---- Start Widget ---->
				<div class="widget wid-recent-post">
					<div class="heading"><h4>Ultimas Noticias</h4></div>
					<div class="content">
						<?php
							$ocho = (count($newsRel)>8) ? 8 : count($newsRel);
							for ($i=0; $i < $ocho; $i++) { 
								echo '<span>'.substr($newsRel[$i]['post_title'], 0,30).' <a href="'.URL.'noticia/detalle/'.$newsRel[$i]['id'].'/'.str_replace(' ', '-', $newsRel[$i]['post_title']).'">ver más...</a></span>';
							}
						?>						
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="copy-right">
			<p>Copyright 2017- <a href="gixcode.com" target="_blank" rel="nofollow"></a>Developed by <a href="http://alexsus.com.mx" target="_blank" rel="nofollow">Alexsus.com.mx</a></p>
			
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
</body>
<script>
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
</html>
