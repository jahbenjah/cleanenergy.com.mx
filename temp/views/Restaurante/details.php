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
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/flipping_gallery.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!-- start-rate-->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
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
<div class="header">
		<div class="container">
				<div class="logo" style="padding-bottom: 2em;">
					<h1 ><a href="./"><span><?php echo '<img src="'.$logo.'" class="img-responsive img-circle" style="max-width:  50%;margin: auto;">' ?></span></a></h1>
				</div>
				<div class="nav-top">
					<nav class="navbar navbar-default">
					
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
							<li class=" active"><a href="./" class="hyper "><span>Restaurantes</span></a></li>	
							<li><a href="#" class="hyper"> <span>Unete</span></a></li>
							<li><a href="#" class="hyper"><span>Contacto</span></a></li>
						</ul>
					</div>
					</nav>
					  
					<div class="clearfix"></div>
				</div>
					
		</div>	

</div>
  <!---->
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
	<!--content-->
<div class="single">
		<div class="container">
			<div class="single-top-main">
		   		<div class="col-md-7 single-top">
			   		<div class="">		
						<div id="picture-frame" style="display: block;min-height: 250px;">

							<div class="gallery">
								<?php 
								if ($image1){
                                   echo '<a href="#"><img src="'.$image1.'" class="img-responsive"></a>';
								}
								if ($image2){
                                   echo '<a href="#"><img src="'.$image2.'" class="img-responsive"></a>';
								}
								if ($image3){
                                   echo '<a href="#"><img src="'.$image3.'" class="img-responsive"></a>';
								}
								if ($image4){
                                   echo '<a href="#"><img src="'.$image4.'" class="img-responsive"></a>';
								}?>
							     
							  </ul>
							</div>
							<!-- <img src="<?php echo $logo ?>" data-src="<?php echo $logo ?>" alt="" class="img-responsive"/> -->
						</div>
						<script src="js/jquery.zoomtoo.js"></script>
						<script>
							$(function() {
								$("#picture-frame").zoomToo({
									magnify: 1
								});
							});
						</script>
					</div>
				</div>
				<div class="col-md-5 single-top-left ">
					<div class="single-right single-w3agile">
						<h3><?php echo $name ?></h3>
						<!-- <h5>"Nos busques más comida"</h5> -->
						<div class="pr-single">
					  		<h2 ><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $address ?></h2>
					  		<h5 class="text-muted" style="padding-top:  10px;"><?php echo $city ?></h5>
						</div>
						<div class="block block-w3">
							<div class="starbox small ghosting"> </div>
						</div>
						<p class="in-pa"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $phone ?> </p>
						<?php 
						if (!empty($website)){
								echo '<a href="'.$website .'" target="_blank"><p class="in-pa"><i class="fa fa-globe" aria-hidden="true"></i> '.$website .' </p></a>';
							}
						?>
						<ul class="social-top"><?php
							if (!empty($fb)){
								echo '<li><a href="'.$fb.'" target="_blank" class="icon facebook"><i class="fa fa-2x fa-facebook" aria-hidden="true"></i><span></span></a></li>';
							}
							
							if (!empty($yt)){
								echo '<li><a href="'.$yt.'" target="_blank" class="icon pinterest"><i class="fa fa-2x fa-youtube-play" aria-hidden="true"></i><span></span></a></li>';
							}
							if (!empty($instagram)){
								echo '<li><a href="'.$instagram.'" target="_blank" class="icon twitter"><i class="fa fa-2x fa-instagram" aria-hidden="true"></i><span></span></a></li>';
							}
							?>
						</ul>
						 
						<div class="clearfix"> </div>
					</div>
				</div>
			   <div class="clearfix"> </div>
				 <div class="panel-group" id="accordion">
				 <!-- First Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 <h4 class="panel-title" data-toggle="collapse" data-target="#collapseOne">
								 <span>|</span>Descripción General
							 </h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse">
							<div class="panel-body">
								<?php echo $description;?>
							</div>
						</div>
					</div>
					<!-- Third Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 <h4 class="panel-title" data-toggle="collapse" data-target="#collapseThree">
								<span>|</span> Promociones
							 </h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse">
							<div class="panel-body">
								<?php echo $promotion;?>
							</div>
						</div>
					</div>
					<!-- Fifth Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 <h4 class="panel-title" data-toggle="collapse" data-target="#collapseFive">
								<span>|</span> Preguntas y Respuestas
							 </h4>
						</div>
						<div id="collapseFive" class="panel-collapse collapse">
							<div class="panel-body">
								<?php echo $faq;?>
							</div>
						</div>
					</div>
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
<script src="js/jquery.flipping_gallery.min.js"></script>
<!-- smooth scrolling -->
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
	<script>
		$(".gallery").flipping_gallery({
    direction: "forward", // This is will set the flipping direction when the gallery is clicked. Options available are "forward", or "backward". The default value is forward.
    selector: "> a", // This will let you change the default selector which by default, will look for <a> tag and generate the gallery from it. This option accepts normal CSS selectors.
    spacing: 10, // You can set the spacing between each photo in the gallery here. The number represents the pixels between each photos. The default value is 10.
    showMaximum: 15, // This will let you limit the number of photos that will be in the viewport. In case you have a gazillion photos, this is perfect to hide all those photos and limit only a few in the viewport.
    enableScroll: true, // Set this to false if you don't want the plugin to override your scrolling behavior. The default value is true.
    flipDirection: "bottom", // You can now set which direction the picture will flip to. Available options are "left", "right", "top", and "bottom". The default value is bottom.
    autoplay: false // You can set the gallery to autoplay by defining the interval here. This option accepts value in milliseconds. The default value is false.
  });
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>