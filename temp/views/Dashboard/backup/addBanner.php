<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">Agregar Banner</h4>
</div>
<div class="modal-body">
	<form class="form-horizontal" id="addPost">	
		<div class="form-group">
            <label for="inputDate" class="col-sm-2 control-label">Fecha</label>
            <div class="col-sm-4">
                 <input type="date" id="inputDate" name="inputcdate" class="form-control">
            </div>
        </div>
        <div class="form-group">
	    	<label for="inputTitulo" class="col-sm-2 control-label">Empresa</label>
	    	<div class="col-sm-10">
	      		<input type="text" class="form-control" name="inputcompany" placeholder="Nombre de la empresa" required autofocus>
	    	</div>
	  	</div>
	  	<div class="form-group">
	    	<label for="inputTitulo" class="col-sm-2 control-label">Título</label>
	    	<div class="col-sm-10">
	      		<input type="text" class="form-control" name="inputtitle" placeholder="Título de la noticia" required>
	    	</div>
	  	</div>
	  	<div class="form-group">
            <label for="file" class="col-sm-2 control-label">Imagen</label>
            <div class="col-sm-10">
                 <input type="file" id="file" name="inputimg" required class="form-control" accept="image/*">
            </div>
        </div>
		<div class="col-xs-12 text-center">
		            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
		                <a href="#" class="thumbnail">
		                    <img src="<?=URL?>public/img/banner-detalle-noticia.jpg" alt="">
		                </a>
		            </div>  
		        </div>
	  	<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary">Agregar</button>
		</div>
		<div id="statusForm"></div>
	</form>
</div>
<script src="<?=URL?>public/resources/jquery/jquery.validate.js"></script>
<script>
	$(document).ready(function() {
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
	            url: "<?=URL?>dashboard/addingBanner",
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