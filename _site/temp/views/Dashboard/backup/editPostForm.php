<?php
  $details=$this->descPost[0];

  $permissions=$this->permissions;
  switch ($this->tipoPost) {
    case 1:
      $complement='noticias';
      break;
    case 2:
      $complement='deportes';
      break;
    case 3:
      $complement='espectaculos';
      break;
    case 4:
      $complement='novedades';
      break;
    case 5:
      $complement='viral';
      break;
    case 6:
      $complement='saber';
      break;
    case 7:
      $complement='videos';
      break;
    default:
      header('location: /dashboard');
      break;
  }
  if (!is_numeric(array_search($this->tipoPost, $permissions))) {
    header('location: /dashboard');
  }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>MM App :: Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="<?=URL?>public/resources/metro-3.2.0.1/css/metro-bootstrap.min.css">
    <link rel="stylesheet" href="<?=URL?>public/resources/font-awesome-4.7.0/css/font-awesome.min.css"  type="text/css">
    <!-- documentation styles -->
    <link rel="stylesheet" type="text/css" href="<?=URL?>public/resources/metro-3.2.0.1/css/docs.css">
    <link rel="stylesheet" type="text/css" href="<?=URL?>public/resources/WYSIWYG/css/bootstrap3-wysihtml5.min.css"></link>
    <!-- documentation styles -->
    
    

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>  
  <body data-spy="scroll" data-target=".subnav" data-offset="50" screen_capture_injected="true">
   <style>
     .navbar-amethyst{
      background-color: #9b59b6;
     }
     .btn-therapists{
      color: white;
      background-color: #9b59b6;
     }
     .awhite{
      color: white;
     }
   </style>

    <!-- Static navbar -->
    <nav class="navbar navbar-amethyst" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" >
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand awhite" href="<?=URL?>dashboard/">MM App :: Admin</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="<?=URL?>dashboard/" class="dropdown-toggle awhite" data-toggle="dropdown">Admin <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Settings</a></li>
              <li><a href="<?=URL?>dashboard/destroySession">Salir</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-md-10"> 
            <div class="page-header">
              <a href="<?=URL?>dashboard/<?=$complement?>" class="btn btn-therapists btn-lg" ><i class="fa fa-long-arrow-left" aria-hidden="true" ></i> Regresar a <?=$complement?></a>
            </div>
            <div id="addn">
              <form class="form-horizontal" id="editPost">  
    <div class="form-group hidden">
        <label for="inputId" class="col-sm-2 control-label">Id</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="inputid" value="<?=$details['id']?>" required readonly>
        </div>
      </div>  
    <div class="form-group">
            <label for="inputDate" class="col-sm-2 control-label">Fecha</label>
            <div class="col-sm-4">
                 <input type="date" id="inputDate" name="inputpost_date" value="<?=$details['post_date']?>" class="form-control">
            </div>
            <div <?= ($details['post_section']==1) ? '' : 'class="hidden"' ; ?>>
                          <label for="inputDate" class="col-sm-2 control-label">Noticia</label>
                          <div class="col-sm-4">
                               <select name="inputpost_subsection" class="form-control" required>
                                 <option value="0" <?= ($details['post_subsection']==0) ? 'selected' : '' ; ?>>Local</option>
                                 <option value="1" <?= ($details['post_subsection']==1) ? 'selected' : '' ; ?>>Nacional</option>
                                 <option value="2" <?= ($details['post_subsection']==2) ? 'selected' : '' ; ?>>Internacional</option>
                               </select>
                          </div>
                        </div>
        </div>
      <div class="form-group">
        <label for="inputTitulo" class="col-sm-2 control-label">Título</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="inputpost_title" placeholder="Título de la noticia" value="<?=$details['post_title']?>" required>
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Cuerpo</label>
        <div class="col-sm-10">
            <textarea class="form-control " id="textarea" name="inputpost_body" placeholder="Contenido de la noticia" required> <?=$details['post_body']?></textarea>
        </div>
      </div>
      <?php
        if (!empty($details['post_url'])) {
          ?>
          <div class="form-group">
                <label for="file" class="col-sm-2 control-label">Link video</label>
                <div class="col-sm-10">
                     <input type="url" id="file" name="inputpost_url" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 text-center">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
                    <a href="#" class="thumbnail">
                        <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="<?=str_replace('watch?v=', 'embed/', $details['post_url'])?>" allowfullscreen=""></iframe>
                            </div>
                    </a>
                </div>  
            </div>
            <?php
        }else{
          ?>
          <div class="form-group">
                <label for="file" class="col-sm-2 control-label">Imagen</label>
                <div class="col-sm-10">
                     <input type="file" id="file" name="inputpost_image" class="form-control" accept="image/*">
                </div>
            </div>
            <div class="form-group">
                    <label for="inputTitulo" class="col-sm-2 control-label">Credito</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="inputpost_credito_img" placeholder="Credito"  value="<?=$details['post_credito_img']?>">
                    </div>
                  </div>
            <div class="form-group hidden">
            <label for="inputTitulo" class="col-sm-2 control-label">Nombre Imagen</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="inputimgName" value="<?=$details['post_image']?>">
            </div>
          </div>
            <div class="col-xs-12 text-center">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
                    <a href="#" class="thumbnail">
                        <img src="<?=URL?>public/img/news/<?=$details['post_image']?>" alt="">
                    </a>
                </div>  
            </div>
          <?php
        }
      ?>
      
      <div class="modal-footer">
      <a href="<?=URL?>dashboard/<?=$complement?>" class="btn btn-default">Cancelar</a>
      <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </div>
    <div id="statusForm"></div>
  </form>
            </div>
        </div>
      </div>    
      <hr>
    </div> <!-- /container -->
    <!-- Site footer -->
    <footer>
      <div class="footer" style="padding-top: 150px;">    
        <p>  Jousin Palafox 2017 :: Admin</p>
      </div>
    </footer>
    <!-- Modal -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    
    <script src="<?=URL?>public/resources/WYSIWYG/js/wysihtml5x-toolbar.min.js"></script>
    <script src="<?=URL?>public/resources/jquery/jquery-2.1.4.min.js"></script>
    <script src="<?=URL?>public/resources/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="<?=URL?>public/resources/WYSIWYG/js/handlebars.runtime.min.js"></script>
    <script src="<?=URL?>public/resources/WYSIWYG/js/bootstrap3-wysihtml5.min.js"></script>
    <script src="<?=URL?>public/resources/jquery/jquery.validate.js"></script>
    


    

  </body>
  <script>
  $(document).ready(function() {
    $('#textarea').wysihtml5();
    $("#editPost").validate({
          rules: {
              inputcorreo: "required",
              inputcontrasena: "required"
          },
          messages: {
              inputcorreo: "<span class='text-danger'>ingresa un correo valido</span>",
              inputcontrasena: "<span class='text-danger'>ingresa una contraseña</span>"
          }, 
          submitHandler: function(){
              editPost();
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
        function editPost(){
          var formData = new FormData($('form#editPost')[0]);
          $.ajax({            
              url: "<?=URL?>dashboard/editPost",
              type: 'POST',
              data: formData,
              async: false,
              beforeSend: function(){
          //$('#statusForm').html('creando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
          $("#editPost").find('button[type="submit"]').html('Cargando.. <i class="fa fa-spinner fa-pulse fa-fw"></i>');
          $("#modal-content-post").find('button').attr('disabled', 'disabled')
        },
        success: function(msg){
          if ($.isNumeric(msg)) {
            $('#statusForm').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Registro actualizado exitosamente</strong> </div>');
            setTimeout(function() {window.location.href='<?=URL?>dashboard/<?=$complement?>'}, 1000);
          }else{
            $('#statusForm').html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>ERROR: </strong>'+msg+'</div>');
          }
          $("#editPost").find('button[type="submit"]').html('Guardar');
          $("#modal-content-post").find('button').removeAttr('disabled');
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
</html>