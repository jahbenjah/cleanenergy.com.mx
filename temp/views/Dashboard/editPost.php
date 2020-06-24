<?php $details=$this->viewproduct[0]; ?>




       <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="album py-5 ">
              <div class="container">
                 
                  <div class="row">
                      <div class="col-md-7 bg-light">
                          <div class="form-group">
                            <label for=inputCategory class="col-sm-2 control-label">Categoría</label>
                            <div class="col-sm-5">
                                  <select name="inputcategory" class="form-control">
                                  <option value="1">Laptops</option>
                                  <option value="2">Teclados</option>
                                  <option value="3">Computadoras</option>
                                  <option value="4">Mouses</option>
                                  <option value="5">Monitores</option>
                                  <option value="6">Gaming</option>
                                  <option value="7">Cargadores de Laptops</option>
                                  <option value="8">Cables</option>
                                  <option value="9">Remates</option>
                                  <option value="10">Promociones</option>
                                  <option value="11">CPUs</option>

                                </select>
                            </div>
                            
                          </div>
                          <div class="form-group">
                            <label for="input_name" class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="inputname"  value="<?=$details['name']?>" required readonly>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="input_description" class="col-sm-2 control-label">Descripcion</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="inputdescription" placeholder="Descripcion">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="input_price" class="col-sm-2 control-label">Precio</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="inputprice" placeholder="Precio">
                            </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-8">
                                  <label class="label" data-toggle="tooltip" title="Change your Image">
                                  <a href="#" data-toggle="modal" data-target="#modal-image1" class="btn btn-info">Subir Image</a>
                                </label>
                                
                              </div>

                          </div>

                          <div class="form-group d-none logoPreview">
                          <div class="col-sm-10">
                            <img id="blah" src="#" alt="Logotipo" class="img-responsive img-thumbnail" />
                          </div>
                        </div>

                        
                      </div><!-- col-md-7 -->
                      <div class="col-md-5">
                          
                      </div><!-- col-md-5 -->
                  </div>
  
                      <div class="row" style="padding-top: 2em;">
                          <div class="col-sm-12">
                              <div class="form-actions">
                                  <div id="statusForm"></div>
                                  
                                  <button type="reset" class="btn btn-large" data-dismiss="modal">Cerrar</button>
                              </div>
                          </div>
                          <hr>
                          
                      </div>  
                      <div class="cropped">
                      </div>
                    
                  </div>
              </div><!--container -->
          </div><!--album py- bg-light -->






<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">Editar publicación</h4>
</div>
<div class="modal-body">
	<form class="form-horizontal" id="editPost">	
		<div class="form-group hidden">
	    	<label for="inputId" class="col-sm-2 control-label">Id</label>
	    	<div class="col-sm-10">
	      		<input type="number" class="form-control" name="inputid" value="<?=$details['id']?>" required readonly>
	    	</div>
	  	</div>	
		<div class="form-group">
            <label for="inputDate" class="col-sm-2 control-label">Fecha</label>
            <div class="col-sm-4">
                 <input type="date" id="inputDate" name="inputpost_date" value="<?=$details['post_date']?>" class="form-control">
            </div>
        </div>
	  	<div class="form-group">
	    	<label for="inputTitulo" class="col-sm-2 control-label">Título</label>
	    	<div class="col-sm-10">
	      		<input type="text" class="form-control" name="inputpost_title" placeholder="Título de la noticia" value="<?=$details['post_title']?>" required>
	    	</div>
	  	</div>
	  	<div class="form-group">
	    	<label for="inputPassword3" class="col-sm-2 control-label">Cuerpo</label>
	    	<div class="col-sm-10">
	      		<textarea class="form-control textarea" name="inputpost_body" placeholder="Contenido de la noticia" required> <?=$details['post_body']?></textarea>
	    	</div>
	  	</div>
	  	<?php
	  		if (!empty($details['post_url'])) {
	  			?>
			  	<div class="form-group">
		            <label for="file" class="col-sm-2 control-label">Link video</label>
		            <div class="col-sm-10">
		                 <input type="url" id="file" name="inputpost_url" class="form-control">
		            </div>
		        </div>
		        <div class="col-xs-12 text-center">
		            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
		                <a href="#" class="thumbnail">
		                    <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="<?=str_replace('watch?v=', 'embed/', $details['post_url'])?>" allowfullscreen=""></iframe>
                            </div>
		                </a>
		            </div>  
		        </div>
		        <?php
	  		}else{
	  			?>
	  			<div class="form-group">
		            <label for="file" class="col-sm-2 control-label">Imagen</label>
		            <div class="col-sm-10">
		                 <input type="file" id="file" name="inputpost_image" class="form-control" accept="image/*">
		            </div>
		        </div>
		        <div class="form-group">
			    	<label for="inputTitulo" class="col-sm-2 control-label">Nombre Imagen</label>
			    	<div class="col-sm-10">
			      		<input type="text" class="form-control" name="inputimgName" value="<?=$details['post_image']?>">
			    	</div>
			  	</div>
		        <div class="col-xs-12 text-center">
		            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
		                <a href="#" class="thumbnail">
		                    <img src="<?=URL?>public/img/news/<?=$details['post_image']?>" alt="">
		                </a>
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
<script src="<?=URL?>public/resources/jquery/jquery.validate.js"></script>
<script>
	$(document).ready(function() {
		$("#editPost").validate({
         	rules: {
	          	inputcorreo: "required",
	            inputcontrasena: "required"
	        },
	        messages: {
	          	inputcorreo: "<span class='text-danger'>ingresa un correo valido</span>",
	            inputcontrasena: "<span class='text-danger'>ingresa una contraseña</span>"
	        }, 
         	submitHandler: function(){
          		editPost();
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
        function editPost(){
	        var formData = new FormData($('form#editPost')[0]);
	        $.ajax({            
	            url: "<?=URL?>dashboard/editPost",
	            type: 'POST',
	            data: formData,
	            async: false,
	            beforeSend: function(){
					//$('#statusForm').html('creando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
					$("#editPost").find('button[type="submit"]').html('Cargando.. <i class="fa fa-spinner fa-pulse fa-fw"></i>');
					$("#modal-content-post").find('button').attr('disabled', 'disabled')
				},
				success: function(msg){
					if ($.isNumeric(msg)) {
						$('#statusForm').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Registro creado exitosamente</strong> </div>');
						setTimeout(function() {location.reload()}, 400);
					}else{
						$('#statusForm').html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>ERROR: </strong>'+msg+'</div>');
					}
					$("#editPost").find('button[type="submit"]').html('Guardar');
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