<link rel="stylesheet" href="http://nsa.mx/admin/css/bootstrap-wysihtml5.css">
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
	      		<textarea class="form-control textarea" name="inputpost_body" placeholder="Contenido de la noticia" required></textarea>
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
<script src="<?=URL?>public/resources/jquery/jquery-2.1.4.min.js"></script>
<script src="http://nsa.mx/admin/js/wysihtml5-0.3.0.js"></script>
<script src="http://nsa.mx/admin/js/bootstrap-wysihtml5.js"></script>
<script src="<?=URL?>public/resources/jquery/jquery.validate.js"></script>
<script>
	$(document).ready(function() {
		$('.textarea').wysihtml5();
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