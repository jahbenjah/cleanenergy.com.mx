function dashprodTable(){
$.ajax({
	url: '../products/dashproduct.php',
	beforeSend: function(){
		$('.cont-prod').html('<p>Loading <img src="../resources/loading.gif" class="img-responsive" alt="Loading..."></p>');
	},
	success: function(msg){
		$('.cont-prod').html(msg);
		$('#products').dataTable( {
            "pagingType": "simple"
            } );
	},
	error:function(){
		erroFindingURL();
	}
});
}
function addproduct(){
	$.ajax({
		url: '../products/addProduct.php',
		 
		beforeSend: function(){
			$('#prod-title').html('Agregar Productos');
			$('#addprod-body').html('Cargando...');
			$('.btnProd').html('Agregar Producto');
			$('.btnProd').attr('id', 'btnAddProd');
		},
		success: function(msg){
			$('#addprod-body').html(msg);
		},
	    error: function(){
	      erroFindingURL();
	    }
	});
}
function adding4image(){

 	var formData = new FormData($('form#add4imageForm')[0]);
        $.ajax({            
            url: 'lib/add4image.php',
			type: 'POST',
            data: formData,
	        async: false,        // To send DOMDocument or non processed data file it is set to false	
		beforeSend:function(){
			$('#statusProdForm').html('validación en progreso...');
		},
		success: function(msg){
			if ($.isNumeric(msg)) {
                $("#statusProdForm").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Se han agregado las imagenes....</strong></div>');
                $('#submitAddProd').toggle(400);
	            setTimeout(function() {
	            	//location.reload();
	               	//window.location = 'http://activosrecuperados.com/admin/products';
	            }, 1600);
            }          
            else  $("#statusProdForm").html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><span class="glyphicon glyphicon-info-sign"></span><strong> Error: '+msg+'</strong></div>');
            $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
               $(".alert-success").alert('close');
            });
		},
	    error: function(){
	      erroFindingURL();
	    },
	    cache: false,
        contentType: false,
        processData: false
	});
}
function btnEditProduct2(){
	$.ajax({
		url: '../lib/products.php',
		type: 'POST',
		data: {toDo: 2},
		beforeSend: function(){
			$('#prod-title').html('Agregar Productos');
			$('#prod-body').html('Cargando...');
			$('.btnProd').html('Agregar Producto');
			$('.btnProd').attr('id', 'btnAddProd');
		},
		success: function(msg){
			$('#prod-body').html(msg);
		},
	    error: function(){
	      erroFindingURL();
	    }
	});
}

function editproduct(id){
	$.ajax({
		url: '../products/editproduct.php',
		type: 'POST',
		data: {id: id},
		beforeSend: function(){
			$('#prod-title').html('Editar Productos');
			$('#prod-body').html('Cargando...');
			$('.btnProd').attr('id', 'btnEditProd');
			$('#btnEditProd').html('Grabar Cambios');
		},
		success: function(msg){
			$('#prod-body').html(msg);
		},
	    error: function(){
	      erroFindingURL();
	    }
	});
}
$('#btnEditProd').on('click', function(event) {event.preventDefault();
	 var formData = new FormData($('form#editProdForm')[0]);
        $.ajax({            
            url: '../lib/editprod.php',
			type: 'POST',
            data: formData,
	        async: false,
			beforeSend:function(){
			$('#statusEditProdForm').html('validación en progreso...');
		},
		success: function(msg){
			if ($.isNumeric(msg)) {
                $("#statusEditProdForm").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Se ha Actualizado el Producto....</strong></div>');
                $('#submitAddProd').toggle(400);
	            setTimeout(function() {
	            	location.reload();
	               	//window.location = '../products';
	            }, 1600);
            }          
            else  $("#statusEditProdForm").html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><span class="glyphicon glyphicon-info-sign"></span><strong> Error: '+msg+'</strong></div>');
            $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
               $(".alert-success").alert('close');
            });
		},
	    error: function(){
	      erroFindingURL();
	    },
	    cache: false,
        contentType: false,
        processData: false
	});

});

function confirmdelete(id){
	var deleterow = id;
	$('#valitem').val(id);
}
function adelete(){
var id = $('#valitem').attr('value');
$.ajax({
	url: '../products/delproduct.php',
	type: 'POST',
	data: {id: id},
	beforeSend: function(){
		
	},
	success: function(msg){
		 $( "#btn-no" ).click();
		 location.reload();
	},
	error:function(){
		erroFindingURL();
	}
});
}

function checkTypeUser(typeUser){
	if (typeUser==3 ) {
		$('#onlyCustomer').toggle(400, function() {
			$('#inputTypeCustomer').val('');
			$('#inputBusinessName').val('');
			$('#inputRfc').val('');
			$('#inputCurp').val('');
			$('#inputAddress').val('');
			$('#inputCity').val('');
			$('#inputPhone').val('');
			$('#inputZip').val('');
		});
	}
	else $('#onlyCustomer').hide(400);
}
function addingProd(){

 	var formData = new FormData($('form#addProdForm')[0]);
        $.ajax({            
            url: '../lib/addprod.php',
			type: 'POST',
            data: formData,
	        async: false,        // To send DOMDocument or non processed data file it is set to false	
		beforeSend:function(){
			$('#statusProdForm').html('validación en progreso...');
		},
		success: function(msg){
			if ($.isNumeric(msg)) {
                $("#statusProdForm").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Se ha agregado el Producto....</strong></div>');
                $('#submitAddProd').toggle(400);
	            setTimeout(function() {
	            	//location.reload();
	               	//window.location = 'http://activosrecuperados.com/admin/products';
	            }, 1600);
            }          
            else  $("#statusProdForm").html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><span class="glyphicon glyphicon-info-sign"></span><strong> Error: '+msg+'</strong></div>');
            $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
               $(".alert-success").alert('close');
            });
		},
	    error: function(){
	      erroFindingURL();
	    },
	    cache: false,
        contentType: false,
        processData: false
	});
}
function edit(id){
	$.ajax({
		url: '../lib/products.php',
		type: 'POST',
		data: {toDo: 2, id:id},
		beforeSend: function(){
			$('#prod-title').html('Editar Producto');
			/*$('#prod-body').html('Cargando...');*/
			$('.btnProd').html('Guardar Cambios');
			$('.btnProd').attr('id', 'btnEditUser');
		},
		success: function(msg){
			$('#prod-body').html(msg);
		},
	    error: function(){
	      erroFindingURL();
	    }
	});
}
function updatingUser(){
	$.ajax({
		url: '../lib/updateUser.php',
		type: 'POST',
		data: $("#editUserForm").serialize(),
		beforeSend:function(){
			$('#statusUserForm').html('validación en progreso...');
		},
		success: function(msg){
			if ($.isNumeric(msg)) {
                $("#statusUserForm").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Esta cuenta ha sido actualizada exitosamente....</strong></div>');
            }          
            else  $("#statusUserForm").html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><span class="glyphicon glyphicon-info-sign"></span><strong> Error: '+msg+'</strong></div>');
            $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
               $(".alert-success").alert('close');
               location.reload();
            });
		},
	    error: function(){
	      erroFindingURL();
	    }
	});
}
function changePass(id, name){
	$.ajax({
		url: '../lib/users.php',
		type: 'POST',
		data: {toDo: 3, id:id},
		beforeSend: function(){
			$('#user-title').html('Cambiar contraseña <small>a '+name+'</small>');
			$('#user-body').html('Cargando..');
			$('.btnUser').html('Guardar Cambios');
			$('.btnUser').attr('id', 'btnChangePass');
		},
		success: function(msg){
			$('#user-body').html(msg);
		},
	    error: function(){
	      erroFindingURL();
	    }
	});
}
function chanchingPass(){
	$.ajax({
		url: '../lib/updatePUser.php',
		type: 'POST',
		data: $("#changePassForm").serialize(),
		beforeSend:function(){
			$('#statusUserForm').html('validación en progreso...');
		},
		success: function(msg){
			if ($.isNumeric(msg)) {
                $("#statusUserForm").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>La contraseña ha sido actualizada exitosamente....</strong></div>');
            }          
            else  $("#statusUserForm").html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><span class="glyphicon glyphicon-info-sign"></span><strong> Error: '+msg+'</strong></div>');
            $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
               $(".alert-success").alert('close');
               location.reload();
            });
		},
	    error: function(){
	     erroFindingURL();
	    }
	});
}
function erroFindingURL(){
	alert("vaya!!!, parece que hubo un error, si el error persiste pongase en contacto con info@gixcode.com");
}