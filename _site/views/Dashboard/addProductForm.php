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

    <title>Clean Energy  | Dashboard</title>
     
    <!-- Bootstrap core CSS -->
    <link href="<?=URL?>public/resources/bootstrap-4.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=URL?>public/resources/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
     <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
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
                      <label for="formGroupExampleInput">Nombre </label>
                      <input type="text" class="form-control" id="inputnombre" name="inputnombre"  >
                    </div>
                    <div class="form-group  ">
                      <label for="inputTipo" class="col-sm-2 control-label">Categoria</label>
                      <div class="col-sm-10">
                        <select name="inputcategoria" class="form-control">
                          <option value="Paneles Solares" >Paneles Solares</option>
                          <option value="Inversores de Cadena" >Inversores de Cadena</option>
                          <option value="Microinversores" >Microinversores</option>
                          <option value="Sistemas de Montaje"  >Sistemas de Montaje</option>
                          <option value="Accesorios"  >Accesorios</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Fabricante/Marca</label>
                      <input class="form-control"  name="inputfabricante" ></input>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Caracteristicas</label>
                      <textarea class="form-control" id="summernote" name="inputcaracteristicas" ></textarea>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput"> Ficha Tecnica (Nombre del pdf) </label>
                      <input type="text" class="form-control" id="inputurlfichatecnica" name="inputurlfichatecnica" placeholder="fichatecnica.pdf" >
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Imagen</label>
                      <input type="file" class="form-control" id="inputimage" name="inputimage"  >
                    </div>
                </div>
           </div>
        </form>
      </div>
    </div>
    <script src="<?=URL?>public/resources/jquery/jquery-2.1.4.min.js"></script>
    <script src="<?=URL?>public/resources/popper.min.js"></script>
    <script src="<?=URL?>public/resources/bootstrap-4.0/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
    <script src="<?=URL?>public/resources/jquery/jquery.validate.js"></script>
    <script>
      $(document).ready(function() {
         $("#statusForm").ajaxStart(function(){
           $(this).show();
         });
         $('#summernote').summernote();
         $('.note-popover').addClass('d-none');
        //$('.textarea').wysihtml5();
            //document.getElementById('inputDate').valueAsDate = new Date();
        $("#addBusiness").validate({
              rules: {
                  inputnombre:"required",
                  inputimage: "required" 
              },
              messages: {
                  inputnombre:"<span class='text-danger'>ingresa un nombre</span>",
                  inputimage: "<span class='text-danger'>ingresa la imagen</span>" 
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
                  url: "<?=URL?>dashboard/addingProduct",
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