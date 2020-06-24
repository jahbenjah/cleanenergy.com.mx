$(document).ready(function() {
	$("#loginForm").validate({
      rules: {
        username: "required",
        password: "required"
      },
      messages: {
        username: "Usuario requerido",
        password: "nombre requerido"
      }, 
      submitHandler: function(){
        login();
        //alert (variables.controller); // alerts `#fff`
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

    function login(action=0){
      $.ajax({
        url: variables.controller+"/"+variables.view,
        type: 'POST',
        data: $("#loginForm").serialize(),
      })
      .done(function(v) {
        if ($.isNumeric(v)) {
          location.reload();
        }else{
          alert(v);
        }
      })
      .fail(function() {
        console.log("error");
      })
      .always(function() {
        console.log("complete");
      });      
    }
});
/*$.validator.setDefaults({
	submitHandler: function() {
		tryLogin();
	}
});
	// validate signup form on keyup and submit
	$("#loginForm").validate({
		rules: {
			username: "required",
			password: {
				required: true
			}
		},
		messages: {
			username: "<span style='color:red; font-size:12px'>Ingresa un nombre de usuario</span>",
			password: {
				required: "<span style='color:red; font-size:12px'>Ingresa un password</span>"
			}
		}
	});
function tryLogin(){
$('#username').val(RemoveBad($('#username').val()));
	$.ajax({
		url: 'lib/login.php',
		type: 'POST',
		data: $("#loginForm").serialize(),
		beforeSend:function(){
			$('#loginErrorMsg').html('<p> Cargando <img src="img/loading.gif" style="width:100%" alt="Cargando masaje milagroso..."></p>');
		},
		success: function(msg){
			if ($.isNumeric(msg)) {
                $("#loginErrorMsg").html('<div class="alert alert-success ><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong style="font-size:12px;">Validando acceso</strong></div>');
            }          
            else  $("#loginErrorMsg").html('<div class="alert alert-warning ><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><span class="fa fa-info-circle"></span><strong style="font-size:12px;"> Error: '+msg+'</strong></div>');
            $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
               $(".alert-success").alert('close');
               window.location.href = "/blog/admin/";

            });
		},
		error: function(){
			erroFindingURL()
		}
	});	
}
function RemoveBad(strTemp) { 
    strTemp = strTemp.replace(/\<|\>|\"|\'|\%|\;|\(|\)|\&|\+|\-/g,""); 
    return strTemp;
} 
$('#endSession').on('click',function(){
    $.ajax({
		url: '../lib/endSession.php',
		success: function(msg){
            location.reload();
		},
		error: function(){
			erroFindingURL()
		}
	});	
  });
function erroFindingURL(){
	alert('hubo un error, si el problema persiste enviar un correo a info@alexsus.com.mx');
}

 */