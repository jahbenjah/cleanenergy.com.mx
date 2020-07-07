<?php 
$category=$this->allcategory;
if (!Session::exists()) {
      header('Location: '.URL.'');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   <!--  <link rel="icon" href="img/favicon.ico"> -->

    <title>Clean Energy | Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=URL?>public/resources/bootstrap-4.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" type="text/html" href="<?=URL?>public/css/bootstrap3-wysihtml5.min.css"> -->
    <!-- Custom styles for this template -->
    <link href="<?=URL?>public/css/dashboard.css" rel="stylesheet">

  </head>
  <style>
    #preview {
      border:1px solid #ddd;
      padding:5px;
      border-radius:2px;
      background:#fff;
      height: 10rem;
    }

    #preview img {width:100%;display:block;}
  </style>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-info flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Clean Energy</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?=URL?>dashboard/destroySession" >Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="<?=URL?>user/">
                  <span data-feather="users"></span>
                  Usuarios
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=URL?>category/">
                  <span data-feather="filter"></span>
                  Categorias
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?=URL?>">
                  <span data-feather="package"></span>
                  Productos <span class="sr-only">(current)</span>
                </a>
              </li>
              
            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h3 class="text-muted">Agregar Producto</h3>
            <div class="btn-toolbar mb-2 mb-md-0">
              <a href="<?=URL?>dashboard/" class="btn btn-sm btn-outline-info"><span data-feather="arrow-left"></span> Volver a Productos</a>
               
            </div>
          </div>
          <div class="album py-5 ">
              <div class="container">
                  <form class="form-horizontal" id="addPost" method="post" accept-charset="utf-8" role="form" enctype="multipart/form-data">
                  <div class="row">
                      <div class="col-md-9 bg-light">
                          <div class="form-group">
                            <label for=inputCategory class="col-sm-2 control-label">Categoría</label>
                            <div class="col-sm-5">
                                  <select name="inputcategory" class="form-control">
                                  <?php
                                     for ($i=0; $i < count($category); $i++) {
                                         echo '<option value="'.$category[$i]["id"].'">'.$category[$i]["name"].'</option>';
                                     }
                                  ?>
                                </select>
                            </div>
                            
                          </div>
                          <div class="form-group">
                            <label for="input_name" class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="inputname" placeholder="Producto" required autofocus>
                            </div>
                          </div>
                          <div class="form-group">
                             
                            <label for="input_description" class="col-sm-2 control-label">Descripción</label>
                            <div class="col-sm-12">
                                <textarea id="summernote" name="inputdescription" placeholder="Descripcion.." ></textarea>
                                
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="input_price" class="col-sm-2 control-label">Precio</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="inputprice" placeholder="Precio">
                            </div>
                          </div>
                          <div class="form-group pt-4">  
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupFileAddon01">Imagen</span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input"  id="file" name="image1" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">Escoger archivo</label>
                                </div>
                            </div>
                          </div>
                      </div><!-- col-md-7 -->
                      <div class="col-md-3" style="box-shadow: inset 1px 0 0 rgba(0, 0, 0, .1);left: 12px;">
                            <div class="form-actions">
                                  <div id="statusForm"></div>
                                  <button type="submit" class="btn btn-primary btn-lg"><span data-feather="plus"></span>  Grabar Producto</button>
                                  <div class="mt-1">
                                      <button type="reset" class="btn btn-outline-secondary ">Cancelar</button>
                                  </div>
                                  <div id="preview" class="mt-2">
                                    
                                  </div>
                              </div>
                      </div><!-- col-md-5 -->
                  </div>
                      <div class="row" style="padding-top: 2em;">
                          <div class="col-sm-12">
                             
                          </div>
                          <hr>
                      </div>  
                      <div class="cropped">
                      </div>
                     </form>
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
   
    <script src="<?=URL?>public/resources/popper.min.js"></script>
    <script src="<?=URL?>public/resources/bootstrap-4.0/js/bootstrap.min.js"></script>
    <!--  <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
   <!--  <script src="<?=URL?>public/js/yui-min.js"></script> -->

    <!-- 
    <script src="<?=URL?>public/js/tooltip.js"></script> -->
    <script src="<?=URL?>public/js/popper.js"></script>
    <script src="<?=URL?>public/resources/holder.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <link href="<?=URL?>public/resources/summernote/summernote.css" rel="stylesheet">
    <script src="<?=URL?>public/resources/summernote/summernote.js"></script>
    <!-- <script src="<?=URL?>/public/resources/WYSIWYG/js/wysihtml5x-toolbar.min.js"></script> -->
    <!-- <script src="http://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/components/jquery/dist/jquery.min.js"></script> -->
    <!-- <script src="<?=URL?>/public/resources/WYSIWYG/js/handlebars.runtime.min.js"></script>
    <script src="<?=URL?>public/resources/WYSIWYG/js/bootstrap3-wysihtml5.min.js"></script> -->
    <script src="<?=URL?>public/resources/jquery/jquery.validate.js"></script>
    <script>
      feather.replace()
    </script>
    <script>
       
        $('#summernote').summernote({
        height: 200,                 // set editor height
        placeholder: 'Cuerpo del Post',
        tabsize: 2,
        lineHeight: 10,
        minHeight: null,             // set minimum height of editor
        maxHeight: null,             // set maximum height of editor
        focus: true                  // set focus to editable area after initializing summernote
      });
  
  $('#summernote').summernote('formatPara');
    </script>
    
    <script>
      $(document).ready(function() {

        function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(e) {
                $('.logoPreview').removeClass('d-none');
              $('#blah').attr('src', e.target.result);
              }
              mostrarProgressBar=1;
              reader.readAsDataURL(input.files[0]);
            }else{
              mostrarProgressBar=1;
              $('.logoPreview').addClass('d-none');
            }
        }
        $("#file").change(function() {
          readURL(this);
        });


        //$('.textarea').wysihtml5();
            //document.getElementById('inputDate').valueAsDate = new Date();
        $("#addPost").validate({
              rules: {
                  inputname:"required",
                  inputemail: "required",
                  inputcontrasena: "required"
              },
              messages: {
                inputname:"<span class='text-danger'>ingresa un Nombre</span>",
                  inputemail: "<span class='text-danger'>ingresa un correo valido</span>",
                  inputcontrasena: "<span class='text-danger'>ingresa una contraseña</span>"
              }, 
              submitHandler: function(){
                  addPost();
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
              var formData = new FormData($('form#addPost')[0]);
              $.ajax({            
                  url: "<?=URL?>dashboard/addPost",
                  type: 'POST',
                  data: formData,
                  async: false,
                  beforeSend: function(){
                    //$('#statusForm').html('creando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
                    $("#addPost").find('button[type="submit"]').html('Cargando.. <span data-feather="loader"></span>');
                    $(".form-actions").find('button').attr('disabled', 'disabled')
                  },
                  success: function(msg){
                    //alert(msg);
                    if ($.isNumeric(msg)) {
                      $('#statusForm').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Registro creado exitosamente</strong> </div>');
                      setTimeout(function() {location.reload()}, 400);
                    }else{
                      $('#statusForm').html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>ERROR:'+msg+'</strong></div>');
                    }
                    $("#addPost").find('button[type="submit"]').html('Save Restaurant');
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

    <script>
      $('#file').addClass('img-fluid');
    </script>
    <script>
      document.getElementById("file").onchange = function(e) {
          // Creamos el objeto de la clase FileReader
          let reader = new FileReader();

          // Leemos el archivo subido y se lo pasamos a nuestro fileReader
          reader.readAsDataURL(e.target.files[0]);
          
          // Le decimos que cuando este listo ejecute el código interno
          reader.onload = function(){
            let preview = document.getElementById('preview'),
                image = document.createElement('img');
                
            image.src = reader.result;
            
            preview.innerHTML = '';
            preview.append(image);
            
          };
        }
    </script>
  </body>
</html>