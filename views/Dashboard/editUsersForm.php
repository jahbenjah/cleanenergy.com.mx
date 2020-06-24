<?php 
    $user=$this->userData[0];
    if (!Session::exists()) {
      header('Location: '.URL.'');
      if ( $_SESSION['type']==2 || $_SESSION['type']==3) { 
        header('Location: '.URL.'/dashboard');
      }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   <!--  <link rel="icon" href="img/favicon.ico"> -->

    <title>Clean Energy | Dashboard</title>
     
    <!-- Bootstrap core CSS -->
    <link href="<?=URL?>public/resources/bootstrap-4.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=URL?>public/resources/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=URL?>public/resources/WYSIWYG/css/bootstrap3-wysihtml5.min.css"></link>
    <!-- Custom styles for this template -->
    <link href="<?=URL?>public/css/style.css" rel="stylesheet">
    <link rel="icon" href="<?=URL?>public/img/favicon.png">
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
        <form class="form-horizontal w-100" id="userUpdate" method="post" accept-charset="utf-8" role="form" enctype="multipart/form-data">
           <div class="row">
              <div class="col-md-3">
                <div id="statusForm"></div>
                  <button type="submit" class="btn btn-outline-info"><i class="fa fa-plus pr-1 text-info"></i> Actualizar</button>
                  <div class="mt-2">
                    <a href="<?=URL?>dashboard/user" class="btn btn-link text-dark "><u>Volver</u></a>
                  </div>
                </div>
                <input type="hidden" class="form-control" name="inputid" value="<?=$user['id']?>" >
                <div class="col-md-9">
                     <div class="form-group  ">
                      <label for="inputTipo" class="col-sm-2 control-label">Tipo</label>
                      <div class="col-sm-10">
                        <select name="inputtype" class="form-control">
                          <option value="3" <?= ($user['type']==3) ? "selected" : "" ; ?> >Cliente</option>
                          <option value="2" <?= ($user['type']==2) ? "selected" : "" ; ?> >Cochi</option>
                          <option value="1" <?= ($user['type']==1) ? "selected" : "" ; ?> >Admin</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="inputcorreo" class="col-3 control-label">Email</label>
                        <div class="col-12">
                             <input type="email" id="inputcorreo" name="inputcorreo" class="form-control" value="<?=$user['correo']?>" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputContrasenia" class="col-sm-3 control-label">Password</label>
                        <div class="col-12">
                            <input type="password" id="password" name="inputcontrasena" class="form-control" placeholder="******">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputNombre" class="col-sm-3 control-label">Nombre</label>
                        <div class="col-12">
                             <input type="text" id="inputNombre" name="inputname" class="form-control" value="<?=$user['name']?>">
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
    <script src="<?=URL?>public/resources/WYSIWYG/js/wysihtml5x-toolbar.min.js"></script>
    <script src="<?=URL?>public/resources/WYSIWYG/js/handlebars.runtime.min.js"></script>
    <script src="<?=URL?>public/resources/WYSIWYG/js/bootstrap3-wysihtml5.min.js"></script>
    <script src="<?=URL?>public/resources/jquery/jquery.validate.js"></script>
    <script>
    $(document).ready(function() {
       $('#textarea').wysihtml5();
      $("#userUpdate").validate({
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
            url: "<?=URL?>dashboard/updatingUser",
            type: 'POST',
            data: $('#userUpdate').serialize(),
            beforeSend: function(){
              //$('#statusForm').html('creando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
              $("#userUpdate").find('button[type="submit"]').html('creando <i class="fa fa-spinner fa-pulse fa-fw"></i>');
            },
            success: function(msg){
              if ($.isNumeric(msg)) {
                $('#statusForm').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Se ha actualizado con éxito</strong> </div>');
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