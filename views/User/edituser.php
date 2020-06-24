<?php
$user=$this->userData[0];
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   <!--  <link rel="icon" href="img/favicon.ico"> -->

    <title>Revista tu Casa | Usuarios</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=URL?>public/resources/bootstrap-4.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?=URL?>public/resources/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/html" href="<?=URL?>public/css/bootstrap3-wysihtml5.min.css"> -->

    <!-- Custom styles for this template -->
    <link href="<?=URL?>public/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-info flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Revista tu Casa</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?=URL?>dashboard/destroySession" >Salir</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="<?=URL?>user/">
                 <i class="fa fa-users pr-1 text-secondary"></i>
                  Usuarios
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=URL?>">
                  <i class="fa fa-home pr-1 text-secondary"></i>
                  Inmuebles <span class="sr-only">(current)</span>
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="<?=URL?>dashboard/publish">
                  <i class="fa fa-file pr-1 text-secondary"></i>
                  Publicaciones
                </a>
              </li>
              
            </ul>
            <hr>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h3 class="text-muted">Usuarios</h3>
            <div class="btn-toolbar mb-2 mb-md-0">
              <a href="<?=URL?>user/" class="btn btn-sm btn-outline-info"><span data-feather="arrow-left"></span> Volver a Usuarios</a>
               
            </div>
          </div>
          <div class="album py-5 bg-light">
              <div class="container">
                  <div class="row">
                    <div class="col-6">
                           <form class="form-horizontal"  id="userUpdate">
                                <input type="hidden" name="inputid" value="<?=$user['id']?>">
                                <div class="form-group hid den">
                                  <label for="inputTipo" class="col-sm-2 control-label">Tipo</label>
                                  <div class="col-sm-10">
                                    <select name="inputtype" class="form-control">
                                      <option value="3" <?= ($user['type']==3) ? "selected" : "" ; ?> >Desarrolladoras</option>
                                      <option value="2" <?= ($user['type']==2) ? "selected" : "" ; ?> >Particulares</option> 
                                      <option value="1" <?= ($user['type']==1) ? "selected" : "" ; ?> >Admin</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputcorreo" class="col-3 control-label">Email</label>
                                    <div class="col-12">
                                         <input type="email" id="inputcorreo" name="inputcorreo" class="form-control" value="<?=$user['correo']?>">
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="inputContrasenia" class="col-sm-3 control-label">Password</label>
                                    <div class="col-12">
                                        <input type="password" id="password" name="inputcontrasena" autocomplete class="form-control" placeholder="Password" >
                                    </div>
                                </div> -->
                                <!-- <div class="form-group">
                                    <label for="inputConfContra" class="col-sm-3 control-label">Confirm Password</label>
                                    <div class="col-12">
                                        <input type="password" id="inputConfContra"  autocomplete class="form-control" placeholder="Confirm Password" required>
                                    </div>
                                </div> -->
                                
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="inputNombre" class="col-sm-3 control-label">Nombre</label>
                                    <div class="col-12">
                                         <input type="text" id="inputNombre" name="inputname" class="form-control"  value="<?=$user['name']?>" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone" class="col-sm-3 control-label">Telefono</label>
                                    <div class="col-12">
                                         <input type="text" id="inputPhone" name="inputphone" class="form-control" value="<?=$user['phone']?>">
                                    </div>
                                </div>
                                <div id="statusForm"></div>
                                <div id="statusUserForm"></div>
                                <div class="modal-footer">
                                    <a class="btn btn-outline-secondary" href="<?=URL?>user/"> Cerrar</a>
                                    <button type="submit" class="btn btn-lg btn-primary" id="btnAddUser">Actualizar</button>
                                </div>
                           </form>
                        </div>
                  </div>
                  </div>
              </div><!--container -->
          </div><!--album py- bg-light -->
        </main>

        </div>
    </div>


<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="<?=URL?>public/resources/jquery/jquery-2.1.4.min.js"></script>
   
    <!-- <script src="<?=URL?>public/resources/popper.min.js"></script> -->
    <script src="<?=URL?>public/resources/bootstrap-4.0/js/bootstrap.min.js"></script>
    <!--  <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script src="<?=URL?>public/resources/holder.min.js"></script>
    <!-- <script src="<?=URL?>/public/resources/WYSIWYG/js/wysihtml5x-toolbar.min.js"></script> -->
    <!-- <script src="http://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/components/jquery/dist/jquery.min.js"></script> -->
    <!-- <script src="<?=URL?>/public/resources/WYSIWYG/js/handlebars.runtime.min.js"></script>
    <script src="<?=URL?>public/resources/WYSIWYG/js/bootstrap3-wysihtml5.min.js"></script> -->
    <script src="<?=URL?>public/js/jquery.validate-1.11.1.js"></script>
    
    <script>
      feather.replace()
    </script>
    <script>
  $(document).ready(function() {
    $("#userUpdate").validate({
          rules: {
              inputcorreo2: "required",
              inputcontrasena2: "required",
              inputnombre2: "required"
          },
          messages: {
              inputcorreo2: "<span class='text-danger'>ingresa un correo valido</span>",
              inputcontrasena2: "<span class='text-danger'>ingresa una contraseña</span>",
              inputnombre2: "<span class='text-danger'>ingresa tu Nombre</span>"
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
        url: "<?=URL?>user/actualizarUser",
        type: 'POST',
        data: $('#userUpdate').serialize(),
        beforeSend: function(){
          //$('#statusForm').html('creando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
          $("#userUpdate").find('button[type="submit"]').html('creando <i class="fa fa-spinner fa-pulse fa-fw"></i>');
        },
        success: function(msg){
          if ($.isNumeric(msg)) {
            $('#statusForm').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Se actualizó correctamente</strong> </div>');
            setTimeout(function() {location.reload()}, 1500);
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
  </body>
</html>



<!-- /******************************************************************************************************************/ -->

