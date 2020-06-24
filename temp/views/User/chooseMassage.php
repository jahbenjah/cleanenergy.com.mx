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
				<script src="<?= URL ?>public/js/app/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
					<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								  <ul class="resp-tabs-list">
									  
									  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><img class="img-responsive" src="<?= URL ?>public/img/app/icon2.png" alt=""></span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><img class="img-responsive" src="<?= URL ?>public/img/app/icon4.png" alt=""></span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><img class="img-responsive" src="<?= URL ?>public/img/app/icon3.png" alt=""></span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-4" role="tab" onclick="myMassages()"><span><img class="img-responsive" src="<?= URL ?>public/img/app/icon3.png" alt=""></span></li>
									  <a href="<?=URL?>app" class="resp-tab-item"><span><img class="img-responsive" src="<?= URL ?>public/img/app/icon-home.png" alt=""></span></a>
									  <div class="clearfix"></div>
								  </ul>				  	 
								<div class="resp-tabs-container">

									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="tab_img">
											<div class="accordion">
												<div class="accordion-section">
													<a class="accordion-section-title" href="#accordion-7">Swedish massage <i class="fa fa-chevron-down"></i><div class="clearfix"></div>
													</a>
													<div id="accordion-7" class="accordion-section-content">
														<form id="swedish-form">
														    <div class="row">
														    	<div class="col-xs-12">
														    	    <p class="text-muted">Choose your preference for therapist gender.</p>
														    	    <br>
														    	    <input type="number" name="inputid" value="1" class="hidden">
														    		<div class="col-xs-4 col-xs-offset-2">
																	     <p><strong>Therapist: </strong> <input type="text" value="either" id="swedish-gender" class="input-lg" name="gender" readonly> </p>
																	     <br>
																		
														    		</div>
														    		<div class="col-xs-2 pull-right">
														    			<a href="#" data-toggle="modal" data-target="#modalTherapist"><h4 class="text-muted"><span class="glyphicon glyphicon-pencil" aria-hidden="true" onclick="gender('swedish-gender')"></span></h4></a>
														    		</div>
														    	</div>		
														    </div>

														     <hr>
														     <div class="row">
														    	<div class="col-xs-12">
														    	    <p class="text-muted">Choose your preference for Duration.</p>
														    	    <br>
														    		<div class="col-xs-4 col-xs-offset-2">
																	     <p><strong>Duration: </strong><input type="number" value="60" id="swedish-duration" class="input-lg" name="duration" readonly></p>
																	     <br>
																		
														    		</div>
														    		<div class="col-xs-2 pull-right">
														    			<a href="#" data-toggle="modal" data-target="#modalDuration"><h4 class="text-muted"><span class="glyphicon glyphicon-pencil" aria-hidden="true" onclick="duration('swedish-duration')"></span></h4></a>
														    		</div>
														    	</div>		
														    </div>
														    <hr>
														    <div class="row">
														    	<div class="col-xs-12">
														    	    <p class="text-muted">Choose your preference for date.</p>
														    	    <br>
														    	    <div class="col-xs-4 col-xs-offset-2">
																	     <p><strong>Date & time: </strong><input type="datetime-local" 
																	     	value="<?=date('Y-m-').(date('d')+1).'T09:00'?>" id="swedish-date" class="input-lg" name="mdate"></p>
														    		</div>
														    	</div>		
														    </div>
														    <hr>
														     <div class="row">
														    	<div class="col-xs-12">
														    	    <p class="text-muted">Address where massage will take place</p>
														    	    <br>
														    		<div class="col-xs-4 col-xs-offset-2">
																	     <p><strong>Location</strong></p>
																	     <br>

																		<input type="text" name="address" class="col-xs-8 holo" placeholder="Address" required>
																		<br>
																		<br>
																		<input type="text" name="apt" class="col-xs-5 holo" placeholder="Apt. or Room #" required>	
																		<br>
																		<br>
																		<input type="text" name="zip" class="col-xs-2 holo" placeholder="Zip" > 
														    		</div>
														    		<div class="col-xs-2 pull-right">
														    			 
														    		</div>
														    	</div>		
														    </div>
														    <br>
														    <button type="submit" class="btn btn-success btn-lg btn-block text-uppercase">book now</button>
														</form>
													</div>
												</div>

												<div class="accordion-section">
													<a class="accordion-section-title" href="#accordion-8">Deep tissue massage <i class="fa fa-chevron-down"></i><div class="clearfix"></div>
													</a>
													<div id="accordion-8" class="accordion-section-content">
													<form id="deep-form">
														<div class="row">
													    	<div class="col-xs-12">
													    	    <p class="text-muted">Choose your preference for therapist gender.</p>
													    	    <br>
													    	    <input type="number" name="inputid" value="2" class="hidden">
													    		<div class="col-xs-4 col-xs-offset-2">
																     <p><strong>Therapist</strong><input type="text" value="either" id="deep-gender" class="input-lg" name="gender" readonly></p>
																     <br>
																	
													    		</div>
													    		<div class="col-xs-2 pull-right">
													    			<a href="#" data-toggle="modal" data-target="#modalTherapist"><h4 class="text-muted"><span class="glyphicon glyphicon-pencil" aria-hidden="true" onclick="gender('deep-gender')"></span></h4></a>
													    		</div>
													    	</div>		
													    </div>

													     <hr>
													     <div class="row">
													    	<div class="col-xs-12">
													    	    <p class="text-muted">Choose your preference for Duration.</p>
													    	    <br>
													    		<div class="col-xs-4 col-xs-offset-2">
																     <p><strong>Duration</strong><input type="number" value="60" id="deep-duration" class="input-lg" name="duration" readonly></p>
																     <br>
																	
													    		</div>
													    		<div class="col-xs-2 pull-right">
													    			<a href="#" data-toggle="modal" data-target="#modalDuration"><h4 class="text-muted"><span class="glyphicon glyphicon-pencil" aria-hidden="true" onclick="duration('deep-duration')"></span></h4></a>
													    		</div>
													    	</div>		
													    </div>
													    <hr>
														    <div class="row">
														    	<div class="col-xs-12">
														    	    <p class="text-muted">Choose your preference for date.</p>
														    	    <br>
														    	    <div class="col-xs-4 col-xs-offset-2">
																	     <p><strong>Date & time: </strong><input type="datetime-local" 
																	     	value="<?=date('Y-m-').(date('d')+1).'T09:00'?>" id="swedish-date" class="input-lg" name="mdate"></p>
														    		</div>
														    	</div>		
														    </div>
														    <hr>
													     <div class="row">
													    	<div class="col-xs-12">
													    	    <p class="text-muted">Address where massage will take place</p>
													    	    <br>
													    		<div class="col-xs-4 col-xs-offset-2">
																     <p><strong>Location</strong></p>
																     <br>

																	<input type="text" name="address" class="col-xs-8 holo" placeholder="Address" required>
																	<br>
																	<br>
																	<input type="text" name="apt" class="col-xs-5 holo" placeholder="Apt. or Room #" required>	
																	<br>
																	<br>
																	<input type="text" name="zip" class="col-xs-2 holo" placeholder="Zip" > 
													    		</div>
													    		<div class="col-xs-2 pull-right">
													    			 
													    		</div>
													    	</div>		
													    </div>
													    <button type="submit" class="btn btn-success btn-lg btn-block text-uppercase">book now</button>
														</form>
													</div>
												</div>

												<div class="accordion-section">
													<a class="accordion-section-title" href="#accordion-9">Sports massage <i class="fa fa-chevron-down"></i><div class="clearfix"></div>
													</a>
													<div id="accordion-9" class="accordion-section-content">
													<form id="sport-form">
														<div class="row">
													    	<div class="col-xs-12">
													    	    <p class="text-muted">Choose your preference for therapist gender.</p>
													    	    <br>
													    	    <input type="number" name="inputid" value="3" class="hidden">
													    		<div class="col-xs-4 col-xs-offset-2">
																     <p><strong>Therapist</strong><input type="text" value="either" id="sport-gender" class="input-lg" name="gender" readonly></p>
																     <br>
																	
													    		</div>
													    		<div class="col-xs-2 pull-right">
													    			<a href="#" data-toggle="modal" data-target="#modalTherapist"><h4 class="text-muted"><span class="glyphicon glyphicon-pencil" aria-hidden="true" onclick="gender('sport-gender')"></span></h4></a>
													    		</div>
													    	</div>		
													    </div>

													     <hr>
													     <div class="row">
													    	<div class="col-xs-12">
													    	    <p class="text-muted">Choose your preference for Duration.</p>
													    	    <br>
													    		<div class="col-xs-4 col-xs-offset-2">
																     <p><strong>Duration</strong><input type="number" value="60" id="sport-duration" class="input-lg" name="duration" readonly></p>
																     <br>
																	
													    		</div>
													    		<div class="col-xs-2 pull-right">
													    			<a href="#" data-toggle="modal" data-target="#modalDuration"><h4 class="text-muted"><span class="glyphicon glyphicon-pencil" aria-hidden="true" onclick="duration('sport-duration')"></span></h4></a>
													    		</div>
													    	</div>		
													    </div>
													    <hr>
														    <div class="row">
														    	<div class="col-xs-12">
														    	    <p class="text-muted">Choose your preference for date.</p>
														    	    <br>
														    	    <div class="col-xs-4 col-xs-offset-2">
																	     <p><strong>Date & time: </strong><input type="datetime-local" 
																	     	value="<?=date('Y-m-').(date('d')+1).'T09:00'?>" id="swedish-date" class="input-lg" name="mdate"></p>
														    		</div>
														    	</div>		
														    </div>
														    <hr>
													     <div class="row">
													    	<div class="col-xs-12">
													    	    <p class="text-muted">Address where massage will take place</p>
													    	    <br>
													    		<div class="col-xs-4 col-xs-offset-2">
																     <p><strong>Location</strong></p>
																     <br>

																	<input type="text" name="address" class="col-xs-8 holo" placeholder="Address" required>
																		<br>
																		<br>
																		<input type="text" name="apt" class="col-xs-5 holo" placeholder="Apt. or Room #" required>	
																		<br>
																		<br>
																		<input type="text" name="zip" class="col-xs-2 holo" placeholder="Zip" > 
													    		</div>
													    		<div class="col-xs-2 pull-right">
													    			 
													    		</div>
													    	</div>		
													    </div>
													    <button type="submit" class="btn btn-success btn-lg btn-block text-uppercase">book now</button>
														</form>
													</div>
												</div>
												<div class="accordion-section">
													<a class="accordion-section-title" href="#accordion-10">Reflexology massage <i class="fa fa-chevron-down"></i><div class="clearfix"></div>
													</a>
													<div id="accordion-10" class="accordion-section-content">
													<form id="refelexology-form">
														<div class="row">
													    	<div class="col-xs-12">
													    	    <p class="text-muted">Choose your preference for therapist gender.</p>
													    	    <br>
													    	    <input type="number" name="inputid" value="4" class="hidden">
													    		<div class="col-xs-4 col-xs-offset-2">
																     <p><strong>Therapist</strong><input type="text" value="either" id="reflexology-gender" class="input-lg" name="gender" readonly></p>
																     <br>
																	
													    		</div>
													    		<div class="col-xs-2 pull-right">
													    			<a href="#" data-toggle="modal" data-target="#modalTherapist"><h4 class="text-muted"><span class="glyphicon glyphicon-pencil" aria-hidden="true" onclick="gender('reflexology-gender')"></span></h4></a>
													    		</div>
													    	</div>		
													    </div>

													     <hr>
													     <div class="row">
													    	<div class="col-xs-12">
													    	    <p class="text-muted">Choose your preference for Duration.</p>
													    	    <br>
													    		<div class="col-xs-4 col-xs-offset-2">
																     <p><strong>Duration</strong><input type="number" value="60" id="reflexology-duration" class="input-lg" name="duration" readonly></p>
																     <br>
																	
													    		</div>
													    		<div class="col-xs-2 pull-right">
													    			<a href="#" data-toggle="modal" data-target="#modalDuration"><h4 class="text-muted"><span class="glyphicon glyphicon-pencil" aria-hidden="true" onclick="duration('reflexology-duration')"></span></h4></a>
													    		</div>
													    	</div>		
													    </div>
													    <hr>
														    <div class="row">
														    	<div class="col-xs-12">
														    	    <p class="text-muted">Choose your preference for date.</p>
														    	    <br>
														    	    <div class="col-xs-4 col-xs-offset-2">
																	     <p><strong>Date & time: </strong><input type="datetime-local" 
																	     	value="<?=date('Y-m-').(date('d')+1).'T09:00'?>" id="swedish-date" class="input-lg" name="mdate"></p>
														    		</div>
														    	</div>		
														    </div>
														    <hr>
													     <div class="row">
													    	<div class="col-xs-12">
													    	    <p class="text-muted">Address where massage will take place</p>
													    	    <br>
													    		<div class="col-xs-4 col-xs-offset-2">
																     <p><strong>Location</strong></p>
																     <br>

																	<input type="text" name="address" class="col-xs-8 holo" placeholder="Address" required>
																		<br>
																		<br>
																		<input type="text" name="apt" class="col-xs-5 holo" placeholder="Apt. or Room #" required>	
																		<br>
																		<br>
																		<input type="text" name="zip" class="col-xs-2 holo" placeholder="Zip" >  
													    		</div>
													    		<div class="col-xs-2 pull-right">
													    			 
													    		</div>
													    	</div>		
													    </div>
													    <button type="submit" class="btn btn-success btn-lg btn-block text-uppercase">book now</button>
														</form>
													</div>
												</div>
												
											</div>
										</div>
									</div>
									<script>
							jQuery(document).ready(function() {
								function close_accordion_section() {
									jQuery('.accordion .accordion-section-title').removeClass('active');
									jQuery('.accordion .accordion-section-content').slideUp(300).removeClass('open');
								}

								jQuery('.accordion-section-title').click(function(e) {
									// Grab current anchor value
									var currentAttrValue = jQuery(this).attr('href');

									if(jQuery(e.target).is('.active')) {
										close_accordion_section();
									}else {
										close_accordion_section();

										// Add active class to section title
										jQuery(this).addClass('active');
										// Open up the hidden content panel
										jQuery('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
									}

									e.preventDefault();
								});
							});
				</script>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="tab_img">
											<div class="col-md-6 price-gds">
												<div class="price-col1">
													<ul class="pack-left">
														<li><a href="#">Carrot mask</a></li>
														<li><a href="#">Avocado mask</a></li>
														<li><a href="#">potato mask</a></li>
														<li><a href="#">oatmeal mask</a></li>
														<li><a href="#">tomato mask</a></li>
													</ul>
													<ul class="pack-right">
														<li>$10.00</li>
														<li>$15.00</li>
														<li>$18.00</li>
														<li>$20.00</li>
														<li>$22.00</li>
													</ul>
													<div class="clearfix"></div>
												</div>
											</div>
											<div class="col-md-6 price-gds">
												<div class="price-col1">
													<ul class="pack-left">
														<li><a href="#">wheat germ mask</a></li>
														<li><a href="#">cooling mask</a></li>
														<li><a href="#">yeast mask</a></li>
														<li><a href="#">winter mask</a></li>
														<li><a href="#">olive oil mask</a></li>
													</ul>
													<ul class="pack-right">
														<li>$10.00</li>
														<li>$15.00</li>
														<li>$18.00</li>
														<li>$20.00</li>
														<li>$22.00</li>
													</ul>
													<div class="clearfix"></div>
												</div>
											</div>

											<div class="clearfix"></div>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
										<div class="tab_img">
											<div class="col-md-6 people">
												<div class="col-sm-5 people-left">
													<img class="img-responsive" src="<?= URL ?>public/img/app/team1.jpg" alt=" " />
												</div>
												<div class="col-sm-7 people-right">
													<h4>Victoria</h4>
													<h5>Mexico</h5>
													<span class="starRating">
														<input id="rating5" type="radio" name="rating" value="5">
														<label for="rating5">5</label>
														<input id="rating4" type="radio" name="rating" value="4">
														<label for="rating4">4</label>
														<input id="rating3" type="radio" name="rating" value="3" >
														<label for="rating3">3</label>
														<input id="rating2" type="radio" name="rating" value="2" checked>
														<label for="rating2">2</label>
														<input id="rating1" type="radio" name="rating" value="1">
														<label for="rating1">1</label>
													</span>
													<p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices.</p>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="col-md-6 people">
												<div class="col-sm-5 people-left">
													<img class="img-responsive" src="<?= URL ?>public/img/app/team2.jpg" alt=" " />
												</div>
												<div class="col-sm-7 people-right">
													<h4>Jessy</h4>
													<h5>USA</h5>
													<span class="starRating1">
														<input id="rating10" type="radio" name="rating" value="10">
														<label for="rating10">10</label>
														<input id="rating9" type="radio" name="rating" value="9">
														<label for="rating9">9</label>
														<input id="rating8" type="radio" name="rating" value="8" >
														<label for="rating8">8</label>
														<input id="rating7" type="radio" name="rating" value="7" checked>
														<label for="rating7">7</label>
														<input id="rating6" type="radio" name="rating" value="6">
														<label for="rating6">6</label>
													</span>
													<p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices.</p>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="col-md-6 people">
												<div class="col-sm-5 people-left">
													<img class="img-responsive" src="<?= URL ?>public/img/app/team3.jpg" alt=" " />
												</div>
												<div class="col-sm-7 people-right">
													<h4>Patricia</h4>
													<h5>Mexico</h5>
													<span class="starRating2">
														<input id="rating15" type="radio" name="rating" value="15">
														<label for="rating15">15</label>
														<input id="rating14" type="radio" name="rating" value="14">
														<label for="rating14">14</label>
														<input id="rating13" type="radio" name="rating" value="13" >
														<label for="rating13">13</label>
														<input id="rating12" type="radio" name="rating" value="12" checked>
														<label for="rating12">12</label>
														<input id="rating11" type="radio" name="rating" value="11">
														<label for="rating11">11</label>
													</span>
													<p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices.</p>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="col-md-6 people">
												<div class="col-sm-5 people-left">
													<img class="img-responsive" src="<?= URL ?>public/img/app/team4.jpg" alt=" " />
												</div>
												<div class="col-sm-7 people-right">
													<h4>Tina</h4>
													<h5>USA</h5>
													<span class="starRating3">
														<input id="rating20" type="radio" name="rating" value="20">
														<label for="rating20">20</label>
														<input id="rating19" type="radio" name="rating" value="19">
														<label for="rating19">19</label>
														<input id="rating18" type="radio" name="rating" value="18" >
														<label for="rating18">18</label>
														<input id="rating17" type="radio" name="rating" value="17" checked>
														<label for="rating17">17</label>
														<input id="rating16" type="radio" name="rating" value="16">
														<label for="rating16">16</label>
													</span>
													<p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices.</p>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
										<div class="row">
											<div class="col-xs-12 col-md-10 col-md-offset-1">
												<div class="table-responsive">
													<table class="table table-hover table-striped">
														<thead>
															<tr>
																<th>Massage</th>
																<th>therapist</th>
																<th>duration(mins)</th>
																<th>date</th>
																<th>status</th>
																<th colspan="2" class="text-center">options</th>
															</tr>
														</thead>
														<tbody id="myMassages-content">
															<tr>
																<td colspan="6" class="text-center">Loading</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
					</div>
			</div>
			

		</div>
	</div>
</div>
<script src="<?= URL ?>public/js/app/jquery.nicescroll.js"></script>
<script src="<?= URL ?>public/js/app/scripts.js"></script>
<script src="<?= URL ?>public/js/jquery.validate-1.11.1.js"></script>
<script src="<?= URL ?>public/js/app/bookMassage.js"></script>
<!---start-date-piker-->
	<script src="<?= URL ?>public/js/app/jquery-ui.js"></script>
	<script>
		  $(function() {
			$( "#datepicker,#datepicker1" ).datepicker();
		  });
	</script>
<!---/End-date-piker-->
<!-- Modal -->
<div class="modal fade" id="modalTherapist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
       
      <div class="modal-body text-center">
           <h3>Therapist</h3>
          <p>Choose your preference for therapist gender.</p>
			<input type="text" class="hidden" id="massageType">
         <input  class="text-left choose-gender" type="radio" name="gender" value="female" data-dismiss="modal" onclick="assignType()">Female Only <br>

		 <input  class="text-left choose-gender" type="radio" name="gender" value="either" data-dismiss="modal" onclick="assignType()">Either gender <br>

		 <input  class="text-left choose-gender" type="radio" name="gender" value="male" data-dismiss="modal" onclick="assignType()">Male only <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
		<button type="button" class="btn btn-primary btn-sm" onclick="assign()">Choose</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalDuration" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
       
      <div class="modal-body text-center">
           <h3>Duration</h3>
          <p>Choose your duration.</p>
			<input type="text" class="hidden" id="massageDuration">			
         <input  class="text-left" type="radio" name="gender" value="30" data-dismiss="modal" onclick="assignDuration(30)">30 Min <br>
		 <input  class="text-left" type="radio" name="gender" value="60" data-dismiss="modal" onclick="assignDuration(60)">60 Min <br>
		 <input  class="text-left" type="radio" name="gender" value="90" data-dismiss="modal" onclick="assignDuration(90)">90 Min <br>
		 <input class="text-left" type="radio" name="gender" value="120" data-dismiss="modal" onclick="assignDuration(120)">120 Min <br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-order">
	<div class="modal-dialog">
		<div class="modal-content" id="modal-content-order">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<script>
	function gender(massage){
		$('#massageType').val(massage);
	}
	function assignType(){
		var inpt=$('#massageType').val();
		$('#'+inpt).val($('input[name="gender"]:checked').val())
	}
	function duration(massage){
		$('#massageDuration').val(massage);
	}
	function assignDuration(t){
		var inpt=$('#massageDuration').val();
		$('#'+inpt).val(t)
	}
	$(document).ready(function() {
        $("#swedish-form").validate({
          rules: {
          	address: "required",
            apt: "required"
        },
        messages: {
          	address: "<span class='text-danger'>por favor ingresa la dirección</span>",
            apt: "<span class='text-danger'>por favor ingresa el apt/#</span>"
        }, 
          submitHandler: function(){
          	bookSwendish();
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
          errorClass: 'small',
          errorPlacement: function(error, element) {
              if(element.length) {
                  error.insertAfter(element);
              } else {
              error.insertAfter(element);
              }
          }
        });
        function bookSwendish(){
        	$.ajax({        
		        url: '<?=URL?>user/bookMassage/',
		        type: 'POST',
		        data: $("#swedish-form").serialize(),
		        beforeSend:function(){
          			$("#swedish-form").find('button[type="submit"]').html('requesting...').prop('disabled', '');
		        },
		        success: function(msg){
		            if ($.isNumeric(msg)){
		                $("#swedish-form").find('button[type="submit"]').html('<i class="fa fa-check"></i> done, book another?').removeProp('disabled');
		            }else{
		                $("#swedish-form").find('button[type="submit"]').html('<i class="fa fa-times"></i> Error, retry?').removeProp('disabled');
		            }
		        },
		        error: function(){
		          erroFindingURL();
		        }
		    });
        }
        $("#deep-form").validate({
          rules: {
          	address: "required",
            apt: "required"
        },
        messages: {
          	address: "<span class='text-danger'>por favor ingresa la dirección</span>",
            apt: "<span class='text-danger'>por favor ingresa el apt/#</span>"
        }, 
          submitHandler: function(){
          	bookDeep();
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
          errorClass: 'small',
          errorPlacement: function(error, element) {
              if(element.length) {
                  error.insertAfter(element);
              } else {
              error.insertAfter(element);
              }
          }
        });
        function bookDeep(){
        	$.ajax({        
		        url: '<?=URL?>user/bookMassage/',
		        type: 'POST',
		        data: $("#deep-form").serialize(),
		        beforeSend:function(){
          			$("#deep-form").find('button[type="submit"]').html('requesting...').prop('disabled', '');
		        },
		        success: function(msg){
		            if ($.isNumeric(msg)){
		                $("#deep-form").find('button[type="submit"]').html('<i class="fa fa-check"></i> done, book another?').removeProp('disabled');
		            }else{
		                $("#deep-form").find('button[type="submit"]').html('<i class="fa fa-times"></i> Error, retry?').removeProp('disabled');
		            }
		        },
		        error: function(){
		          erroFindingURL();
		        }
		    });
        }
        $("#sport-form").validate({
          rules: {
          	address: "required",
            apt: "required"
        },
        messages: {
          	address: "<span class='text-danger'>por favor ingresa la dirección</span>",
            apt: "<span class='text-danger'>por favor ingresa el apt/#</span>"
        }, 
          submitHandler: function(){
          	bookSport();
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
          errorClass: 'small',
          errorPlacement: function(error, element) {
              if(element.length) {
                  error.insertAfter(element);
              } else {
              error.insertAfter(element);
              }
          }
        });
        function bookSport(){
        	$.ajax({        
		        url: '<?=URL?>user/bookMassage/',
		        type: 'POST',
		        data: $("#sport-form").serialize(),
		        beforeSend:function(){
          			$("#sport-form").find('button[type="submit"]').html('requesting...').prop('disabled', '');
		        },
		        success: function(msg){
		            if ($.isNumeric(msg)){
		                $("#sport-form").find('button[type="submit"]').html('<i class="fa fa-check"></i> done, book another?').removeProp('disabled');
		            }else{
		                $("#sport-form").find('button[type="submit"]').html('<i class="fa fa-times"></i> Error, retry?').removeProp('disabled');
		            }
		        },
		        error: function(){
		          erroFindingURL();
		        }
		    });
        }
        $("#refelexology-form").validate({
          rules: {
          	address: "required",
            apt: "required"
        },
        messages: {
          	address: "<span class='text-danger'>por favor ingresa la dirección</span>",
            apt: "<span class='text-danger'>por favor ingresa el apt/#</span>"
        }, 
          submitHandler: function(){
          	bookReflexology();
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
          errorClass: 'small',
          errorPlacement: function(error, element) {
              if(element.length) {
                  error.insertAfter(element);
              } else {
              error.insertAfter(element);
              }
          }
        });
        function bookReflexology(){
        	$.ajax({        
		        url: '<?=URL?>user/bookMassage/',
		        type: 'POST',
		        data: $("#refelexology-form").serialize(),
		        beforeSend:function(){
          			$("#refelexology-form").find('button[type="submit"]').html('requesting...').prop('disabled', '');
		        },
		        success: function(msg){
		            if ($.isNumeric(msg)){
		                $("#refelexology-form").find('button[type="submit"]').html('<i class="fa fa-check"></i> done, book another?').removeProp('disabled');
		            }else{
		                $("#refelexology-form").find('button[type="submit"]').html('<i class="fa fa-times"></i> Error, retry?').removeProp('disabled');
		            }
		        },
		        error: function(){
		          erroFindingURL();
		        }
		    });
        }
    });
	function myMassages(){
		$.ajax({        
		        url: '<?=URL?>user/myMassages/',
		        success: function(msg){
		            $('#myMassages-content').html(msg);
		        },
		        error: function(){
		          erroFindingURL();
		        }
		    });
	}
</script>

</body>
</html>