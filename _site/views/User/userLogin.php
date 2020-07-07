<div class="modal-header">
	<h4 class="modal-title">Inicio de sesión</h4>
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	
</div>
<div class="modal-body">
	<div class="row">
		<div class="col-12">
			<form class="form-horizontal" id="userLogin">
			  <div class="form-group">
			    <label for="inputcorreo" class="col-2 control-label">Correo</label>
			    <div class="col-10">
			      <input type="email" class="form-control" name="inputcorreo" placeholder="juanperez@gmail.com" required autofocus>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-2 control-label">Contraseña</label>
			    <div class="col-10">
			      <input type="password" class="form-control" name="inputcontrasena" placeholder="Contraseña" required>
			    </div>
			  </div>
			  <div class="modal-footer pull-left">
				<button type="button" class="btn  btn-outline-secondary" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn  btn-outline-primary">Iniciar Sesión</button>
			</div>
			<div id="statusForm"></div>
			</form>

		</div>
		<div class="col-xs-4">
			<img src="<?=URL?>public/img/facebook_login.png" alt="" class="img-responsive">
		</div>
	</div>
	
</div>
<script src="<?=URL?>public/resources/jquery/jquery-2.1.4.min.js"></script>
<script src="<?=URL?>public/resources/jquery/jquery.validate.js"></script>
<script>
	$(document).ready(function() {
		$("#userLogin").validate({
         	rules: {
	          	inputcorreo: "required",
	            inputcontrasena: "required"
	        },
	        messages: {
	          	inputcorreo: "<span class='text-danger'>ingresa un correo valido</span>",
	            inputcontrasena: "<span class='text-danger'>ingresa una contraseña</span>"
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
				url: "<?=URL?>user/tryLogin",
				type: 'POST',
				data: $('#userLogin').serialize(),
				beforeSend: function(){
					//$('#statusForm').html('creando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
					$("#userLogin").find('button[type="submit"]').html('Inciando sesión <i class="fa fa-spinner fa-pulse fa-fw"></i>');
				},
				success: function(msg){
					if ($.isNumeric(msg)) {
						$('#statusForm').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Cargando perfil</strong> </div>');
						window.location.href = '<?=URL?>';
					}else{
						$('#statusForm').html('<div class="alert alert-warning pull-left"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>ERROR: </strong>'+msg+'</div>');
					}
					$("#userLogin").find('button[type="submit"]').html('Iniciar sesión');
				},
				error: function(){
					alert('');
				}
			});
        }
	});
</script>
