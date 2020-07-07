<?php
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?=URL?>public/img/favicon.png">

    <title>Clean Energy </title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
     <link href="https://fonts.googleapis.com/css?family=Poppins|Quicksand" rel="stylesheet">
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-170731497-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-170731497-1');
</script>

  </head>
  <style>
    :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: 0.75rem;
}

.login,
.image {
  min-height: 100vh;
}

.bg-image {
  background-image: url('https://source.unsplash.com/WEQbe2jBg40/600x1200');
  background-size: cover;
  background-position: center;
}

.login-heading {
  font-weight: 300;
}

.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
  border-radius: 2rem;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
  height: auto;
  border-radius: 2rem;
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  cursor: text;
  /* Match the input under the label */
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}
  </style>

  <body>

    <div class="container-fluid">
      <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6">
          <div class="login d-flex align-items-center py-5">
            <div class="container">
              <div class="row">
                <div class="col-md-9 col-lg-8 mx-auto">
                  <a href="<?=URL?>"><img src="<?=URL?>public/img/logo.png" alt="Clean Energy logo" class="img-fluid"></a>
                  <h3 class="login-heading mb-4">Bienvenido de Vuelta!</h3>
                  <form  id="userLogin">
                    <div class="form-label-group">
                      <input type="email" id="inputEmail" name="inputcorreo" class="form-control" placeholder="Email address" required autofocus>
                      <label for="inputEmail">Correo</label>
                    </div>

                    <div class="form-label-group">
                      <input type="password" id="inputPassword" name="inputcontrasena"  class="form-control" placeholder="Password" required>
                      <label for="inputPassword">Password</label>
                    </div>

                    <div class="custom-control custom-checkbox mb-3 d-none">
                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label" for="customCheck1">Recordar Contraseña</label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Entrar</button>
                    <div class="text-center">
                      <div id="statusForm"></div>
                      <a class="small" href="<?=URL?>">Volver atras!</a></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?=URL?>public/js/jquery-3.2.1.min.js"></script>
<script src="<?=URL?>public/js/jquery.validate-1.11.1.js"></script>
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
            window.location.href = '<?=URL?>dashboard';
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
  </body>

</html>
