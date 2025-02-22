<?php 
    //$products=$this->products;
    if (!Session::exists()) {
      header('Location: '.URL.'');
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

    <title>Club de Cochis | Dashboard</title>
     
    <!-- Bootstrap core CSS -->
    <link href="<?=URL?>public/resources/bootstrap-4.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=URL?>public/resources/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
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
      <h5 class="my-0 mr-md-auto font-weight-normal">Club de Cochis</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="<?=URL?>dashboard/user">Usuarios</a>
        <span class="border-bottom"><a class="p-2  text-info" href="<?=URL?>dashboard/">Interconexion</a></span>
        <a class="p-2  text-dark" href="<?=URL?>dashboard/autonomos">Autonomos</a> 
        <a class="p-2  text-dark" href="<?=URL?>dashboard/luminarias">Luminarias</a> 

      </nav>
      <a class="btn btn-outline-primary" href="<?=URL?>dashboard/destroySession">Salir</a>
    </div>

    <div class="container">
      <div class="row">
        <form class="form-horizontal w-100" id="addBusiness" method="post" accept-charset="utf-8" role="form" enctype="multipart/form-data">
           <div class="row">
              <div class="col-md-3 form-actions">
                  <button type="submit" class="btn btn-outline-info" onclick="waiting();" ><i class="fa fa-plus pr-1 text-info"></i> Grabar</button>
                  <div class="mt-2">
                    <a href="<?=URL?>dashboard" class="btn btn-link text-dark "><u>Volver</u></a>
                  </div>
                  <div id="statusForm" class="d-none">
                    <div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="Cargando..." aria-valuemin="0" aria-valuemax="100" style="width: 75%">Cargando...</div></div>
                  </div>
                </div>
                <div class="col-md-9">
                     <div class="form-group">
                      <label for="formGroupExampleInput">Nombre del Negocio</label>
                      <input type="text" class="form-control" id="inputbusiness_name" name="inputbusiness_name" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Tipo de Comida</label>
                      <input type="text" class="form-control" id="inputfoodtype" name="inputfoodtype" placeholder="ej. Pizza, Postre, etc.">
                    </div>
                    
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Ubicacion cochifest</label>
                      <input type="text" class="form-control" id="inputlocation" name="inputlocation" placeholder="ej. P100">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Logo</label>
                      <input type="file" class="form-control" name="inputlogo"  >
                    </div>
                    <div class="p-3 bg-white">
                      <h4 class="text-muted">Contacto</h4>
                      <div class="form-group">
                        <label for="formGroupExampleInput">Nombre del Responsable</label>
                        <input type="text" class="form-control" id="inputcontact_name" name="inputcontact_name" placeholder="Nombre">
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput">Tel/WhatsApp del Responsable</label>
                        <input type="text" class="form-control" id="inputcontact_phone" name="inputcontact_phone" placeholder="(xxx)xxx-xxxx">
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput">Correo del Responsable</label>
                        <input type="email" class="form-control" id="inputcontact_email" name="inputcontact_email" placeholder="ej. juan@perez.com">
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
         $("#statusForm").ajaxStart(function(){
           $(this).show();
         });

        //$('.textarea').wysihtml5();
            //document.getElementById('inputDate').valueAsDate = new Date();
        $("#addBusiness").validate({
              rules: {
                  inputbusiness_name:"required",
                  inputfoodtype: "required" 
              },
              messages: {
                  inputbusiness_name:"<span class='text-danger'>ingresa un nombre</span>",
                  inputfoodtype: "<span class='text-danger'>ingresa el tipo de comida</span>" 
              }, 

              submitHandler: function(){
                  waiting();
                  addPost();
                  waiting();
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
            function addPost(){
              var formData = new FormData($('form#addBusiness')[0]);
              $.ajax({           
                  url: "<?=URL?>dashboard/businessumit",
                  type: 'POST',
                  data: formData,

                  beforeSend: function(){
 
                    $('#statusForm').removeClass('d-none');
                    $("#addBusiness").find('button[type="submit"]').html('Grabando..');
                    $(".form-actions").find('button').removeAttr('disabled');
                  },
                  success: function(msg){
                    if ($.isNumeric(msg)) {
                      $('#statusForm').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Registro creado exitosamente</strong> </div>');
                      setTimeout(function() {location.reload()}, 1500);
                    }else{
                      $('#statusForm').html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>ERROR:'+msg+'</strong></div>');
                    }
                  },
                  error: function(){
                    alert('');
                  },
                        cache: false,
                        contentType: false,
                        processData: false
                  });
                    return false;
                }
            });
    </script>
    <script>
      function waiting(){
        $('#statusForm').removeClass('d-none');
      }
    </script>
  </body>
</html>