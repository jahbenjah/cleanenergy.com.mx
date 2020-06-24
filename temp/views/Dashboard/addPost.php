<?php 
    $restaurants=$this->restaurants;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   <!--  <link rel="icon" href="img/favicon.ico"> -->

    <title>CochiAdvisor | Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=URL?>public/resources/bootstrap-4.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=URL?>public/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-info flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Cochi Advisor</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="home"></span>
                  Dashboard 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="award"></span>
                  Restaurants <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Users
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2 text-muted">Restaurants</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <button class="btn btn-sm btn-outline-info"><span data-feather="plus"></span> Add Restaurant</button>
               
            </div>
          </div>
          <div class="album py-5 bg-light">
              <div class="container">
                  <div class="row">
                      <div class="muted pull-left">Add Restaurant</div>
                         <form class="form-horizontal" id="addarticleForm" method="post" action="addarticle.php" accept-charset="utf-8" role="form" enctype="multipart/form-data">
                             <div class="control-group">
                              <label class="control-label" for="input_name">Name</label>
                              <div class="controls">
                                <input type="text" class="input-superlarge " id="title" name="input_name" required>
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="address">Address</label>
                              <div class="controls">
                                <input type="text" class="input-superlarge " id="input_address"  name="input_address">
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="city">City</label>
                              <div class="controls">
                                <input type="text" class="input-superlarge " id="input_city"  name="input_city">
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="phone">Phone</label>
                              <div class="controls">
                                <input type="text" class="input-large" id="input_phone"  name="input_phone">
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="email">Email</label>
                              <div class="controls">
                                <input type="text" class="input-large" id="email"  name="input_email">
                              </div>
                            </div>
                            <div class="control-group well">
                              <label class="control-label" for="logo">Logo </label>
                              <div class="controls">
                                <input class="input-file uniform_on" id="post_file" type="file" name="post_file" required>
                                <p class="text-info"> max. 800 kb</p>
                              </div>

                            </div>
                            <div class="control-group">
                              <label class="control-label" for="email">Website</label>
                              <div class="controls">
                                <input type="url" class="input-large" id="website"  name="input_website">
                              </div>
                            </div>

                            <div class="control-group">
                              <label class="control-label" for="textarea2">Description</label>
                              <div class="controls">
                                <textarea class="input-xlarge textarea" placeholder="Agrega texto aquí ..." style="width: 910px; height: 180px" name="input_description"></textarea>
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="textarea3">Promotion</label>
                              <div class="controls">
                                <textarea class="input-xlarge textarea" placeholder="Agrega texto aquí ..." style="width: 910px; height: 180px" name="input_promotion"></textarea>
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="textarea4">FAQ</label>
                              <div class="controls">
                                <textarea class="input-xlarge textarea" placeholder="Agrega texto aquí ..." style="width: 910px; height: 180px" name="input_faq"></textarea>
                              </div>
                            </div>
                            <hr>
                            <h3>Social</h3>
                            <div class="control-group">
                              <label class="control-label" for="">Facebook</label>
                              <div class="controls">
                                <input type="url" class="input-large" id="input_fb"  name="input_fb">
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="yt">Youtube</label>
                              <div class="controls">
                                <input type="url" class="input-large" id="input_yt"  name="input_yt">
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="inst">Instagram</label>
                              <div class="controls">
                                <input type="url" class="input-large" id="input_inst"  name="input_inst">
                              </div>
                            </div>
                            <div class="form-actions">
                              <button type="submit" class="btn btn-primary btn-large">Upload a Restaurant</button>
                              <button type="reset" class="btn btn-large">Cancel</button>
                            </div>
                         </form>
                  </div>
              </div><!--container -->
          </div><!--album py- bg-light -->
        </main>

        </div>
    </div>


<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
    <script>
      feather.replace()
    </script>
  </body>
</html>



<link rel="stylesheet" type="text/css" href="<?=URL?>public/resources/metro-3.2.0.1/css/metro-bootstrap.min.css">
    <link rel="stylesheet" href="<?=URL?>public/resources/font-awesome-4.7.0/css/font-awesome.min.css"  type="text/css">
    <!-- documentation styles -->
    <link rel="stylesheet" type="text/css" href="<?=URL?>public/resources/metro-3.2.0.1/css/docs.css">
    <link href="<?=URL?>public/resources/datatables-1.10.15/css/responsive-2.1.0/responsive.bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/dist/bootstrap3-wysihtml5.min.css"></link>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">Agregar publicación</h4>
</div>
<div class="modal-body">
	<form class="form-horizontal" id="addPost">	
		<div class="form-group hidden">
	    	<label for="inputTipo" class="col-sm-2 control-label">Tipo</label>
	    	<div class="col-sm-10">
	      		<input type="number" class="form-control" name="inputpost_section" value="<?= $this->tipoPost; ?>" required readonly>
	    	</div>
	  	</div>	
		<div class="form-group">
            <label for="inputDate" class="col-sm-2 control-label">Fecha</label>
            <div class="col-sm-4">
                 <input type="date" id="inputDate" name="inputpost_date" class="form-control">
            </div>
        </div>
	  	<div class="form-group">
	    	<label for="inputTitulo" class="col-sm-2 control-label">Título</label>
	    	<div class="col-sm-10">
	      		<input type="text" class="form-control" name="inputpost_title" placeholder="Título de la noticia" required autofocus>
	    	</div>
	  	</div>
	  	<div class="form-group">
	    	<label for="inputPassword3" class="col-sm-2 control-label textarea">Cuerpo</label>
	    	<div class="col-sm-10">
	      		<textarea class="form-control" id="#textarea" name="inputpost_body" placeholder="Contenido de la noticia" required></textarea>
	    	</div>
	  	</div>
	  	<?php
	  		if ($this->tipoPost==7) {
	  			?>
			  	<div class="form-group">
		            <label for="file" class="col-sm-2 control-label">Link video</label>
		            <div class="col-sm-10">
		                 <input type="url" id="file" name="inputpost_url" required class="form-control">
		            </div>
		        </div>
		        <?php
		    }else{
		    	?>
		    	<div class="form-group">
		            <label for="file" class="col-sm-2 control-label">Imagen</label>
		            <div class="col-sm-10">
		                 <input type="file" id="file" name="inputpost_image" required class="form-control" accept="image/*">
		            </div>
		        </div>
		        <?php
		    }
		?>
	  	<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary">Guardar</button>
		</div>
		<div id="statusForm"></div>
	</form>
</div>
<script src="http://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/components/wysihtml5x/dist/wysihtml5x-toolbar.min.js"></script>
<script src="http://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/components/jquery/dist/jquery.min.js"></script>
<script src="http://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="http://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/components/handlebars/handlebars.runtime.min.js"></script>
<script src="http://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/dist/bootstrap3-wysihtml5.min.js"></script>
<script src="<?=URL?>public/resources/jquery/jquery.validate.js"></script>
<script>
	$(document).ready(function() {
		$('#textarea').wysihtml5();
        document.getElementById('inputDate').valueAsDate = new Date();
		$("#addPost").validate({
         	rules: {
	          	inputcorreo: "required",
	            inputcontrasena: "required"
	        },
	        messages: {
	          	inputcorreo: "<span class='text-danger'>ingresa un correo valido</span>",
	            inputcontrasena: "<span class='text-danger'>ingresa una contraseña</span>"
	        }, 
         	submitHandler: function(){
          		addPost();
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
        function addPost(){
	        var formData = new FormData($('form#addPost')[0]);
	        $.ajax({            
	            url: "<?=URL?>dashboard/addPost",
	            type: 'POST',
	            data: formData,
	            async: false,
	            beforeSend: function(){
					//$('#statusForm').html('creando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
					$("#addPost").find('button[type="submit"]').html('Cargando.. <i class="fa fa-spinner fa-pulse fa-fw"></i>');
					$("#modal-content-post").find('button').attr('disabled', 'disabled')
				},
				success: function(msg){
					if ($.isNumeric(msg)) {
						$('#statusForm').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Registro creado exitosamente</strong> </div>');
						setTimeout(function() {location.reload()}, 400);
					}else{
						$('#statusForm').html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>ERROR: </strong>'+msg+'</div>');
					}
					$("#addPost").find('button[type="submit"]').html('Guardar');
					$("#modal-content-post").find('button').removeAttr('disabled');
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