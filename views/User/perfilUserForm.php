<?php $perfil=$this->perfil[0]; ?>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">Perfil</h4>
</div>
<div class="modal-body">
	<form class="form-horizontal" id="userProfile">
	  <div class="form-group">
	    <label for="inputEmail" class="col-sm-2 control-label">Correo</label>
	    <div class="col-sm-10">
	      <input type="email" class="form-control" name="inputcorreo" placeholder="<?=$perfil['correo']?>" value="<?=$perfil['correo']?>" required>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">Contraseña</label>
	    <div class="col-sm-10">
	      <input type="password" class="form-control" name="inputcontrasena" placeholder="Contraseña">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputNombre" class="col-sm-2 control-label">Nombre</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="inputnombre"  placeholder="<?=$perfil['name']?>" value="<?=$perfil['name']?>" required>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputApellidos" class="col-sm-2 control-label">Apellidos</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="inputapellidos"  placeholder="<?=$perfil['lastname']?>" value="<?=$perfil['lastname']?>">
	    </div>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</div>
	<div id="statusForm"></div>
	</form>
</div>
<script src="<?=URL?>public/resources/jquery/jquery.validate.js"></script>
<script>
	$(document).ready(function() {
		$("#userProfile").validate({
         	rules: {
	          	inputcorreo: "required",
	            inputnombre: "required"
	        },
	        messages: {
	          	inputcorreo: "<span class='text-danger'>ingresa un correo valido</span>",
	            inputnombre: "<span class='text-danger'>ingresa tu Nombre</span>"
	        }, 
         	submitHandler: function(){
          		updateUser();
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
        function updateUser(){
        	$.ajax({
				url: "<?=URL?>user/updatingUser",
				type: 'POST',
				data: $('#userProfile').serialize(),
				beforeSend: function(){
					//$('#statusForm').html('creando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
					$("#userProfile").find('button[type="submit"]').html('creando <i class="fa fa-spinner fa-pulse fa-fw"></i>');
				},
				success: function(msg){
					if ($.isNumeric(msg)) {
						$('#statusForm').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Usuario actualizado correctamentre</strong> </div>');
					}else{
						$('#statusForm').html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>ERROR: </strong>'+msg+'</div>');
					}
					$("#userProfile").find('button[type="submit"]').html('Actualizar');
				},
				error: function(){
					alert('');
				}
			});
        }
	});
</script>
