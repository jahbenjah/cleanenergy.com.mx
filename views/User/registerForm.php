<?php
	/*if (session::exists()) {
		header('location:'.URL.'app');
	}*/
?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <title>Masaje Milagroso: App</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Masaje en Tijuana" />
		<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<meta charset utf="8">
        <!--font-awsome-css-->
           <link rel="stylesheet" href="<?= URL ?>public/resources/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--bootstrap-->
			<link href="<?= URL ?>public/resources/bootstrap-3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<!--custom css-->
			<link href="<?= URL ?>public/css/app/jquery-ui.css"  rel="stylesheet"/>
			<link href="<?= URL ?>public/css/app/style.css" rel="stylesheet" type="text/css"/>
			
        <!--component-css-->
			<script src="<?= URL ?>public/resources/jquery/jquery-2.1.4.min.js"></script>
			<script src="<?= URL ?>public/resources/bootstrap-3.0.0/js/bootstrap.min.js"></script>
			 
			 <!--script-->
			
		
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="<?= URL ?>public/js/app/move-top.js"></script>
		<script type="text/javascript" src="<?= URL ?>public/js/app/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->
		
		<!--script-->
		<link href='//fonts.googleapis.com/css?family=Rajdhani:400,300,500,600,700' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-170731497-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-170731497-1');
</script>

    </head>
<body>
<div class="body-back">
	<div class="masthead pdng-stn1">

		<div class="phone-box wrap push">
			<div id="home" class="menu-notify">
				<div class="Profile-mid logo">
					<h1>
						<a class="link link--yaku" href="#">
							<span>M</span><span>a</span><span>s</span><span>a</span><span>j</span><span>e</span> <span>M</span><span>i</span><span>l</span><span>a</span><span>g</span><span>r</span><span>o</span><span>s</span><span>o</span>					
						</a>
					</h1>
				</div>
				<div class="Profile-right">

				</div>
				<div class="clearfix"></div>
			</div> 



			<div class="treatments">
				 <div class="row">

   <form class="form-horizontal" id="addNewUserForm">
        <div class="form-group">
            <label for="inputEmail" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-4">
                 <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="myEmail@email.com" required autofocus="">
            </div>
        </div>
        <div class="form-group">
            <label for="inputContrasenia" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-4">
                <input type="password" id="password" name="inputPassword" class="form-control" placeholder="Password" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputConfContra" class="col-sm-3 control-label">Confirm Password</label>
            <div class="col-sm-4">
                <input type="password" id="inputConfContra" name="inputConfPass" class="form-control" placeholder="Confirm Password" required>
            </div>
        </div>
        <br>
        <hr>
        <div class="form-group">
            <label for="inputNombre" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-6">
                 <input type="text" id="inputNombre" name="inputName" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPhone" class="col-sm-3 control-label">Phone</label>
            <div class="col-sm-6">
                 <input type="text" id="inputPhone" name="inputPhone" class="form-control" placeholder="Phone">
            </div>
        </div>
        <div id="statusUserForm"></div>
        <div class="modal-footer">
        	<a href="<?=URL?>app"  class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-success" id="btnAddUser">Add User</button>
        </div>
   </form>
</div>
			</div>
			

		</div>
	</div>
</div>
<script src="<?= URL ?>public/js/app/jquery.nicescroll.js"></script>
<script src="<?= URL ?>public/js/app/scripts.js"></script>
<script src="<?= URL ?>public/js/jquery.validate-1.11.1.js"></script>
    <script>
    $(document).ready(function() {
        $("#addNewUserForm").validate({
          rules: {
            inputName: "required",
            inputPassword: {
                required: true,
                minlength: 6
            },
            inputConfPass: {
                required: true,
                minlength: 6,
                equalTo: "#password"
            },
            inputEmail: {
                required: true,
                email: true
            },
            inputTipoUsuario: "required"
        },
        messages: {
            inputName: "<span class='text-danger'>Enter a Name</span>",
            inputPassword: {
                required: "<span class='text-danger'>Enter a Password</span>",
                minlength: "<span class='text-danger'>The password must be at least 6 characters</span>"
            },
            inputConfPass: {
                required: "<span class='text-danger'>Enter a password</span>",
                minlength: "<span class='text-danger'>The password must be at least 6 characters</span>",
                equalTo: "<span class='text-danger'>Passwords must be the same</span>"
            },
            inputEmail: "<span class='text-danger'>Enter a valid email</span>",
            inputTipoUsuario: "<span class='text-danger'>Por favor selecciona el tipo de usuario</span>"
        }, 
          submitHandler: function(){
            addingUser();
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
          errorClass: 'small',
          errorPlacement: function(error, element) {
              if(element.length) {
                  error.insertAfter(element);
              } else {
              error.insertAfter(element);
              }
          }
        });
    });
    function addingUser(e){

    $.ajax({        
        url: '<?=URL?>user/registerUser',
        type: 'POST',
        data: $("#addNewUserForm").serialize(),
        beforeSend:function(){
            //$('#addUserModal').html('<p class="text-info">processing...</p>');
            //$('button').addClass('disabled').prop('disabled', true);
        },
        success: function(msg){
           // $('button').removeProp('disabled').removeClass('disabled');
            if ($.isNumeric(msg)){
                $("#statusUserForm").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Account created</strong></div>');
                $('#btnAddUser').hide();
                setTimeout(function() {window.location.href = "<?=URL?>app/";}, 300);
            }else{
                $("#statusUserForm").html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Error: </strong>'+msg+'</div>');
            }                      
        },
        error: function(){
          erroFindingURL();
        }
    });
}
</script>
 </body>
</html>