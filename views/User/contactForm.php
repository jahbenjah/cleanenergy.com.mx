<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">Contacto</h4>
</div>
<div class="modal-body">
	<form class="form-horizontal" id="userLogin">
	  <div class="form-group">
	    <label for="inputNombre" class="col-sm-2 control-label">Nombre</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="inputNombre" placeholder="Juan Pérez" autofocus>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputTelefono" class="col-sm-2 control-label">Teléfono</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="inputTelefono" placeholder="664 123 4566" required>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputCorreo" class="col-sm-2 control-label">Correo</label>
	    <div class="col-sm-10">
	      <input type="email" class="form-control" name="inputCorreo" placeholder="juanperez@email.com">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputCorreo" class="col-sm-2 control-label">Asunto</label>
	    <div class="col-sm-10">
	      <textarea name="inputasunto" class="form-control" rows="3" placeholder="Descripción del asunto" ></textarea>
	    </div>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
	<div id="statusForm"></div>
	</form>
</div>
<script src="<?=URL?>public/resources/jquery/jquery.validate.js"></script>
<script>
	$(document).ready(function() {
		$("#userLogin").validate({
         	rules: {
	          	inputemail: "required",
	            inputpwd: "required"
	        },
	        messages: {
	          	inputemail: "<span class='text-danger'>ingresa un correo valido</span>",
	            inputpwd: "<span class='text-danger'>ingresa una contraseña</span>"
	        }, 
         	submitHandler: function(){
          		userLogin();
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
        function userLogin(){
        	$.ajax({
				url: "<?=URL?>user/tryContact",
				type: 'POST',
				data: $('#userLogin').serialize(),
				beforeSend: function(){
					//$('#statusForm').html('creando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
					$("#userLogin").find('button[type="submit"]').html('Enviando mensaje <i class="fa fa-spinner fa-pulse fa-fw"></i>');
				},
				success: function(msg){
					if ($.isNumeric(msg)) {
						$('#statusForm').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Mensaje Enviado</strong> </div>');
							setTimeout(function() {$('#modal-modal').modal('hide');}, 1000);
					}else{
						$('#statusForm').html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>ERROR: </strong>'+msg+'</div>');
					}
					$("#userLogin").find('button[type="submit"]').html('Enviar');
				},
				error: function(){
					alert('');
				}
			});
        }
	});
</script>
