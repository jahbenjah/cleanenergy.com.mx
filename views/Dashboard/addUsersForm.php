<?php 
    //$products=$this->products;
    if (!Session::exists()) {
      header('Location: '.URL.'');
    }
    if ( $_SESSION['type']==2 || $_SESSION['type']==3) { 
        header('Location: '.URL.'/dashboard');
      }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?=URL?>public/img/favicon.png">

    <title>Clean Energy | Dashboard</title>
     
    <!-- Bootstrap core CSS -->
    <link href="<?=URL?>public/resources/bootstrap-4.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=URL?>public/resources/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?=URL?>public/css/style.css" rel="stylesheet">
    <link rel="icon" href="<?=URL?>public/img/favicon.png">
  </head>

  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal">Clean Energy</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <span class="border-bottom"><a class="p-2 text-info" href="<?=URL?>dashboard/user">Usuarios</a></span>
        <a class="p-2  text-dark" href="<?=URL?>dashboard/">Interconexion</a>
        <a class="p-2  text-dark" href="<?=URL?>dashboard/autonomos">Autonomos</a> 
        <a class="p-2  text-dark" href="<?=URL?>dashboard/luminarias">Luminarias</a> 

      </nav>
      <a class="btn btn-outline-primary" href="<?=URL?>dashboard/destroySession">Salir</a>
    </div>

    <div class="container">
      <div class="row">
        <form class="form-horizontal w-100" id="addUsersForm" method="post" accept-charset="utf-8" role="form" enctype="multipart/form-data">
           <div class="row">
              <div class="col-md-3">
                <div id="statusUserForm"></div>
                  <button type="submit" class="btn btn-outline-info"><i class="fa fa-plus pr-1 text-info"></i> Grabar</button>
                  <div class="mt-2">
                    <a href="<?=URL?>dashboard/user" class="btn btn-link text-dark "><u>Volver</u></a>
                  </div>
                </div>
                <div class="col-md-9">
                     <div class="form-group  ">
                      <label for="inputTipo" class="col-sm-2 control-label">Tipo</label>
                      <div class="col-sm-10">
                        <select name="inputtype" class="form-control">
                          <option value="3">Cliente</option>
                          <option value="2">Cochi</option>
                          <option value="1">Admin</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="inputcorreo" class="col-3 control-label">Email</label>
                        <div class="col-12">
                             <input type="email" id="inputcorreo" name="inputcorreo" class="form-control" placeholder="Email@email.com" required autofocus="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputContrasenia" class="col-sm-3 control-label">Password</label>
                        <div class="col-12">
                            <input type="password" id="password" name="inputcontrasena" autocomplete class="form-control" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputNombre" class="col-sm-3 control-label">Nombre</label>
                        <div class="col-12">
                             <input type="text" id="inputNombre" name="inputname" class="form-control" placeholder="Nombre">
                        </div>
                    </div>
                </div>



           </div>
             
            
             
        </form>

      </div>
      
    </div>
    <script src="<?=URL?>public/resources/jquery/jquery-2.1.4.min.js"></script>
    <script src="<?=URL?>public/resources/popper.min.js"></script>
    <script src="<?=URL?>public/resources/bootstrap-4.0/js/bootstrap.min.js"></script>
    <script src="<?=URL?>public/resources/jquery/jquery.validate.js"></script>
    <script>
    $(document).ready(function() {
        $("#addUsersForm").validate({
          rules: {
            inputname: "required",
            inputcontrasena: {
                required: true,
                minlength: 6
            },
            inputcorreo: {
                required: true,
                email: true
            },
        },
        messages: {
            inputname: "<span class='text-danger'>Enter a Name</span>",
            inputcontrasena: {
                required: "<span class='text-danger'>Enter a Password</span>",
                minlength: "<span class='text-danger'>The password must be at least 6 characters</span>"
            },
            inputConfPass: {
                required: "<span class='text-danger'>Enter a password</span>",
                minlength: "<span class='text-danger'>The password must be at least 6 characters</span>",
                equalTo: "<span class='text-danger'>Passwords must be the same</span>",
            },
            inputcorreo: "<span class='text-danger'>Enter a valid email</span>",
        }, 
          submitHandler: function(){
            addingUser();
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
    function addingUser(){
       $.ajax({
          url: '<?=URL?>dashboard/registeringUser',
          type: 'POST',
          data: $("#addUsersForm").serialize(),
          success: function(msg){
          if ($.isNumeric(msg)) {
              $('#statusUserForm').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Se ha creado el Usuario con éxito</strong> </div>');
              setTimeout(function() {location.reload()}, 1500);
            }else{
              $('#statusUserForm').html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>ERROR: </strong>'+msg+'</div>');
            }
            $("#userUpdate").find('button[type="submit"]').html('Actualizar');
          },
            error: function(){
              erroFindingURL();
            }
        });

    }
    </script>
  </body>
</html>