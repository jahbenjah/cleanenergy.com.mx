<?php 
    $business=$this->userData[0];
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
   <!--  <link rel="icon" href="img/favicon.ico"> -->

    <title>Clean Energy | Dashboard</title>
     
    <!-- Bootstrap core CSS -->
    <link href="<?=URL?>public/resources/bootstrap-4.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=URL?>public/resources/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?=URL?>public/css/style.css" rel="stylesheet">
    <link rel="icon" href="<?=URL?>public/img/favicon.png">
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
        <form class="form-horizontal w-100" id="businessUpdate" method="post" accept-charset="utf-8" role="form" enctype="multipart/form-data">
           <div class="row">
              <div class="col-md-3 form-actions">
                  <button type="submit" class="btn btn-outline-info"><i class="fa fa-plus pr-1 text-info"></i> Actualizar</button>
                  <div class="mt-2">
                    <a href="<?=URL?>dashboard" class="btn btn-link text-dark "><u>Volver</u></a>
                  </div>
                  <div id="statusForm"></div>
                  <div class="img">
                    <img src="<?=URL?>public/img/<?=($business['image'] == "" ? "clubdecochis.jpg" : $business['image'])  ?>" alt="<?=$business['nombre']?>" class="img-fluid img-thumbnail">
                  </div>
                </div>
                <div class="col-md-9">
                     <input type="hidden" name="inputid" value="<?=$business['id']?>">
                     <div class="form-group">
                      <label for="formGroupExampleInput">Nombre </label>
                      <input type="text" class="form-control" id="inputnombre" name="inputnombre" value="<?=$business['nombre']?>">
                    </div>
                    <div class="form-group  ">
                      <label for="inputTipo" class="col-sm-2 control-label">Categoria</label>
                      <div class="col-sm-10">
                        <select name="inputcategoria" class="form-control">
                          <option value="Paneles Solares" <?= ($business['categoria']=='Paneles Solares') ? "selected" : "" ; ?> >Paneles Solares</option>
                          <option value="Inversores de Cadena" <?= ($business['categoria']=='Inversores de Cadena') ? "selected" : "" ; ?> >Inversores de Cadena</option>
                          <option value="Microinversores" <?= ($business['categoria']=='Microinversores') ? "selected" : "" ; ?> >Microinversores</option>
                          <option value="Sistemas de Montaje" <?= ($business['categoria']=='Sistema de NMontaje') ? "selected" : "" ; ?> >Sistemas de Montaje</option>
                          <option value="Accesorios" <?= ($business['categoria']=='Accesorios') ? "selected" : "" ; ?> >Accesorios</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Fabricante/Marca</label>
                      <input class="form-control"  name="inputfabricante" value="<?=$business['fabricante']?>"> </input>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Caracteristicas</label>
                      <textarea class="form-control" id="summernote" name="inputcaracteristicas" value="<?=$business['caracteristicas']?>"><?=$business['caracteristicas']?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput"> Ficha Tecnica (Nombre del pdf) </label>
                      <input type="text" class="form-control" id="inputurlfichatecnica" name="inputurlfichatecnica"  value="<?=$business['urlfichatecnica']?>" >
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Imagen</label>
                      <input type="hidden" name="oldlogo" value="<?=$business['image']?>">
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
        $('#summernote').summernote();
        $('.note-popover').addClass('d-none');
        $("#businessUpdate").validate({
            submitHandler: function(){
                updatingBusinessForm();
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
          function updatingBusinessForm(){
            var form = $('form')[0];
            var formData = new FormData(form);
            //formData.append('logo', $('input[type=file]')[0].files[0]);
            $.ajax({
            url: "<?=URL?>dashboard/updatingBusiness",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            //data: $('#businessUpdate').serialize(),

            beforeSend: function(){
              //$('#statusForm').html('creando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
              $("#businessUpdate").find('button[type="submit"]').html('Espere, actualizando ... <i class="fa fa-spinner fa-pulse fa-fw"></i>');
            },
            success: function(msg){
              if ($.isNumeric(msg)) {
                $('#statusForm').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Se ha actualizado con éxito</strong> </div>');
                setTimeout(function() {location.reload()}, 1500);
              }else{
                $('#statusForm').html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>ERROR: </strong>'+msg+'</div>');
              }
              $("#businessUpdate").find('button[type="submit"]').html('Actualizar');
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