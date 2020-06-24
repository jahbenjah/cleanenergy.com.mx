function userFormRegister(){
	$.ajax({
		url: variables.controller+variables.view,// http://localhost/user/  (+) userFormRegister
		beforeSend:function(){
			$('#user-modal-content').html('cargando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
		},
		success: function(msg){
			$('#user-modal-content').html(msg);
		},
		error: function(){

		}
	});	
}
function login(){
	$.ajax({
		url: variables.controller+'login',// http://localhost/user/  (+) userFormRegister
		beforeSend:function(){
			$('#user-modal-content').html('cargando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
		},
		success: function(msg){
			$('#user-modal-content').html(msg);
		},
		error: function(){

		}
	});	
}
function userProfile(){
	$.ajax({
		url: variables.controller+'profile',// http://localhost/user/  (+) userFormRegister
		beforeSend:function(){
			$('#user-modal-content').html('cargando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
		},
		success: function(msg){
			$('#user-modal-content').html(msg);
		},
		error: function(){

		}
	});	
}
function endSession(){
	$.ajax({
		url: variables.controller+'destroySession',
		success: function(){
			location.reload();
		},
		error: function(){

		}
	});	
}