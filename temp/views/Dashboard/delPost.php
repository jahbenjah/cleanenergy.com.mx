<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title">Eliminar Producto</h4>
</div>
<div class="modal-body">
	<p class="text-center" style="font-size: 18px">Seguro que deseas eliminar El producto <strong><?= $this->post['product'] ?></strong>?</p>
	<form class="form-horizontal" id="delProduct">	
		<div class="form-group hidden">
	    	<label for="inputTipo" class="col-sm-2 control-label">ID</label>
	    	<div class="col-sm-10">
	      		<input type="number" class="form-control" name="inputpost_section" value="<?= $this->post['id'] ?>" required reado nly>
	    	</div>
	  	</div>
	  	<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-danger">Eliminar</button>
		</div>
		<div id="statusForm"></div>
	</form>
</div>
<script src="<?=URL?>public/resources/jquery/jquery.validate.js"></script>
<script>
	$(document).ready(function() {
		$("#delproduct").validate({
         	rules: {
	          	inputpost_section: "required"
	        },
	        messages: {
	          	inputpost_section: "<span class='text-danger'>ingresa un correo valido</span>"
	        }, 
         	submitHandler: function(){
          		delPost();
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
        function delPost(){
	        $.ajax({            
	            url: "<?=URL?>dashboard/delproduct",
	            type: 'POST',
	            data: $('form#delProduct').serialize(),
	            beforeSend: function(){
					//$('#statusForm').html('creando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
					$("#delproduct").find('button[type="submit"]').html('Cargando.. <i class="fa fa-spinner fa-pulse fa-fw"></i>');
					$("#modal-content-post").find('button').attr('disabled', 'disabled')
				},
				success: function(msg){
					if ($.isNumeric(msg)) {
						$('#statusForm').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Registro eliminado exitosamente</strong> </div>');
						setTimeout(function() {location.reload()}, 400);
					}else{
						$('#statusForm').html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>ERROR: </strong>'+msg+'</div>');
					}
					$("#delproduct").find('button[type="submit"]').html('Eliminar');
					$("#modal-content-post").find('button').removeAttr('disabled');
				},
				error: function(){
					alert('');
				}
	    	});
	    }
	});
</script>