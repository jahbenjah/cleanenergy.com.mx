<?php
	if (session::exists()) {
		header('location:'.URL.'app');
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <title>Masaje Milagroso: App</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Masaje en Tijuana" />
		<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<meta charset utf="8">
        <!--font-awsome-css-->
           <link rel="stylesheet" href="<?= URL ?>public/resources/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--bootstrap-->
			<link href="<?= URL ?>public/resources/bootstrap-3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<!--custom css-->
			<link href="<?= URL ?>public/css/app/jquery-ui.css"  rel="stylesheet"/>
			<link href="<?= URL ?>public/css/app/style.css" rel="stylesheet" type="text/css"/>
			
        <!--component-css-->
			<script src="<?= URL ?>public/resources/jquery/jquery-2.1.4.min.js"></script>
			<script src="<?= URL ?>public/resources/bootstrap-3.0.0/js/bootstrap.min.js"></script>
			 
			 <!--script-->
			
		
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="<?= URL ?>public/js/app/move-top.js"></script>
		<script type="text/javascript" src="<?= URL ?>public/js/app/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->
		
		<!--script-->
		<link href='//fonts.googleapis.com/css?family=Rajdhani:400,300,500,600,700' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    </head>
<body>
<div class="body-back">
	<div class="masthead pdng-stn1">

		<div class="phone-box wrap push">
			<div id="home" class="menu-notify">
				<div class="Profile-mid logo">
					<h1>
						<a class="link link--yaku" href="#">
							<span>M</span><span>a</span><span>s</span><span>a</span><span>j</span><span>e</span> <span>M</span><span>i</span><span>l</span><span>a</span><span>g</span><span>r</span><span>o</span><span>s</span><span>o</span>					
						</a>
					</h1>
				</div>
				<div class="Profile-right">

				</div>
				<div class="clearfix"></div>
			</div> 



			<div class="treatments">
				 <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="well">
                                <form id="loginForm">
                                    <div class="form-group">
                                        <label for="username" class="control-label">Usssuario</label>
                                        <input type="email" class="form-control" id="username" name="username" placeholder="usuario">
                                        <span class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="control-label">Contraseña</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="contraseña">
                                        <span class="help-block"></span>
                                    </div>
                                    <div id="loginErrorMsg"></div>
                                    
                                    <button type="submit" class="btn btn-lg btn-sm sharp btn-success btn-block">log in</button>

                                 
                                </form>
                                <a href="<?=URL?>app" class="btn btn-sm sharp btn-primary btn-block">back</a>
                            </div>
                        </div>
			</div>
			

		</div>
	</div>
</div>
<script src="<?= URL ?>public/js/app/jquery.nicescroll.js"></script>
<script src="<?= URL ?>public/js/app/scripts.js"></script>
<script src="<?= URL ?>public/js/jquery.validate-1.11.1.js"></script>
    <script src="<?= URL ?>public/js/jquery.login.js"></script>
    <script>
    	var variables = {
          controller  : "<?= URL ?>user/",
          view : "login"
        };
    </script>
 </body>
</html>