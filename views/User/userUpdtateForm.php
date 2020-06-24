<?php 
	$user=$this->userData[0]; 
	 
?>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">Actualiza Usuario</h4>
</div>
<div class="modal-body">
	<form class="form-horizontal" id="userUpdate">

	  <div class="form-group hidden d-none">
	    <label for="inputNombre" class="col-sm-2 control-label">Id</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="inputid" placeholder="Nombre" value="<?=$user['id']?>" required>
	    </div>
	  </div>
	  <div class="form-group hid den">
	    <label for="inputTipo" class="col-sm-2 control-label">Tipo</label>
	    <div class="col-sm-10">
	      <select name="inputtype" class="form-control">
	      	<!-- <option value="2" <?= ($user['type']==2) ? "selected" : "" ; ?> >Colaborador</option> -->
	      	<option value="1" <?= ($user['type']==1) ? "selected" : "" ; ?> >Admin</option>
	      </select>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputEmail" class="col-sm-2 control-label">Correo</label>
	    <div class="col-sm-10">
	      <input type="email" class="form-control" name="inputcorreo" placeholder="juanperez@gmail.com" value="<?=$user['correo']?>" required>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword3" class="col-sm-2 control-label">Contraseña</label>
	    <div class="col-sm-10">
	      <input type="password" class="form-control" name="inputpwd" placeholder="Contraseña">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputNombre" class="col-sm-2 control-label">Nombre</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="inputname" placeholder="Nombre" value="<?=$user['name']?>" required>
	    </div>
	  </div>
	  <!-- <div class="form-group">
	    <label for="inputApellidos" class="col-sm-2 control-label">Apellidos</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="inputlastname" placeholder="apellidos"  value="<?=$user['lastname']?>">
	    </div>
	  </div> -->
	  <div class="form-group <?= ($user['type']==1) ? "hidden" : "" ; ?>" id="permisos" <?= ($user['type']==1) ? "selected" : "" ; ?>>
	  <hr>
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
		$("#userUpdate").validate({
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
          		updatingUser();
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
        function updatingUser(){
        	$.ajax({
				url: "<?=URL?>user/updatingUser",
				type: 'POST',
				data: $('#userUpdate').serialize(),
				beforeSend: function(){
					//$('#statusForm').html('creando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
					$("#userUpdate").find('button[type="submit"]').html('creando <i class="fa fa-spinner fa-pulse fa-fw"></i>');
				},
				success: function(msg){
					if ($.isNumeric(msg)) {
						$('#statusForm').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Cuentra creada correctamentre</strong> </div>');
						setTimeout(function() {location.reload()}, 400);
					}else{
						$('#statusForm').html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>ERROR: </strong>'+msg+'</div>');
					}
					$("#userUpdate").find('button[type="submit"]').html('Actualizar');
				},
				error: function(){
					alert('');
				}
			});
        }
	});
</script>
