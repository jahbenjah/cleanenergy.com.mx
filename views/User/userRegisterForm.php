<div class="modal-header">
	<h4 class="modal-title">Registro</h4>
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	
</div>
<div class="modal-body">
	<form class="form-horizontal" id="userRegister">
	  <div class="form-group hiddden">
	  	<input type="hidden" name="inputtype" value="1">
	  </div>
	  <!-- <input type="hidden" name="inputtype" value="3"> -->
	  <div class="form-group">
	    <label for="inputEmail" class="col-sm-2 control-label">Correo</label>
	    <div class="col-sm-10">
	      <input type="email" class="form-control" name="inputcorreo" placeholder="juanperez@gmail.com" required>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">Contraseña</label>
	    <div class="col-sm-10">
	      <input type="password" class="form-control" name="inputcontrasena" placeholder="Contraseña" required>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputNombre" class="col-sm-2 control-label">Nombre</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="inputname" placeholder="Nombre" required>
	    </div>
	  </div>
	  
	  <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		<button type="submit" class="btn btn-primary">Registrar</button>
	</div>
	<div id="statusForm"></div>
	</form>
</div>
<script src="<?=URL?>public/resources/jquery/jquery.validate.js"></script>
<script>
	$(document).ready(function() {
		$("#userRegister").validate({
         	rules: {
	          	inputcorreo: "required",
	            inputcontrasena: "required",
	            inputnombre: "required"
	        },
	        messages: {
	          	inputcorreo: "<span class='text-danger'>ingresa un correo valido</span>",
	            inputcontrasena: "<span class='text-danger'>ingresa una contraseña</span>",
	            inputnombre: "<span class='text-danger'>ingresa tu Nombre</span>"
	        }, 
         	submitHandler: function(){
          		registeringUser();
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
        function registeringUser(){
        	$.ajax({
				url: "<?=URL?>user/registeringUser",
				type: 'POST',
				data: $('#userRegister').serialize(),
				beforeSend: function(){
					//$('#statusForm').html('creando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
					$("#userRegister").find('button[type="submit"]').html('creando <i class="fa fa-spinner fa-pulse fa-fw"></i>');
				},
				success: function(msg){
					if ($.isNumeric(msg)) {
						$('#statusForm').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Cuentra creada correctamentre</strong> </div>');
						setTimeout(function() {location.reload()}, 400);
					}else{
						$('#statusForm').html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>ERROR: </strong>'+msg+'</div>');
					}
					$("#userRegister").find('button[type="submit"]').html('Registrar');
				},
				error: function(){
					alert('');
				}
			});
        }
	});
</script>
<script>
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
