<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   <!--  <link rel="icon" href="img/favicon.ico"> -->

    <title>CleanEnergy | Categories</title>

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
      max-width:200px;
    }

    #preview img {width:200px;display:block;}
  </style>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-info flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">CleanEnergy</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?=URL?>dashboard/destroySession" >Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2  d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="<?=URL?>user/">
                  <span data-feather="users"></span>
                  Usuarios
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?=URL?>categories/">
                  <span data-feather="filter"></span>
                  Categorias
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=URL?>/dashboard/">
                  <span data-feather="package"></span>
                  Productos <span class="sr-only">(current)</span>
                </a>
              </li>
              
            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h3 class="text-muted">Agregar Categorias</h3>
            <div class="btn-toolbar mb-2 mb-md-0">
              <a href="<?=URL?>Categories/" class="btn btn-sm btn-outline-info"><span data-feather="arrow-left"></span> Volver a Categorias</a>
               
            </div>
          </div>
          <div class="album py-5 bg-light">
              <div class="container">
                <form class="form-horizontal" id="addNewCatForm"  method="post" accept-charset="utf-8" role="form" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="inputNombre" class="col-sm-3 control-label">Name</label>
                            <div class="col-12">
                                 <input type="text" id="inputNombre" name="inputname" class="form-control" placeholder="Name">
                            </div>
                        </div> 
                        <div class="form-group pt-4">
                           <label for="inputorden" class="col-sm-3 control-label">Orden</label>
                            <div class="col-2 ">
                                <input type="text" class="form-control" name="inputorden" placeholder="99">
                            </div>
                                
                            </div>  
                        </div>
                        <div class="col-md-5" style="box-shadow: inset 1px 0 0 rgba(0, 0, 0, .1);left: 12px;">
                          <div class="form-group pt-4">
                              <div class="col-sm-8 bg-light">
                                  <div class="col-md-2">
                                    <div id="preview"></div>
                                  </div>
                                  <label class="label" data-toggle="tooltip" title="Change your Image">
                                  <a href="#" data-toggle="modal" data-target="#modal-image1" class="btn btn-outline-info"><span data-feather="image"></span> Imagen Principal</a>
                                </label>
                              </div>
                          </div>
                      </div><!-- col-md-5 -->
                      <div id="statusCatForm"></div>
                      <div class="form-actions">
                          <a type="button" class="btn btn-default" href="<?=URL?>Categories/"> Close</a>
                          <button type="submit" class="btn btn-success" id="btnAddCat">Add Categories</button>
                      </div>
                  </div>
                  <div class="cropped"></div>
                  </form>
                </div>
                  
                
            </div><!--container -->
          </div><!--album py- bg-light -->
        </main>

        </div>
    </div>

 <!-- modal -->
<div class="modal fade" id="modal-image1">
    <div class="modal-dialog" style="max-width: 600px;">
        <div class="modal-content" id="modal-image1-content">
            <div class="modal-body">
                <div class="showimage col-xs-3">
                    
                </div>
                <div class="imageBox">
                    <div class="thumbBox"></div>
                    <div class="spinner" style="display: none">Loading...</div>
                </div>
                <div class="action">
                    <input type="file" id="file" style="width: 250px">
                    <input type="button" class="btn btn-default" id="btnZoomIn" value="+" >
                    <input type="button" class="btn btn-default" id="btnZoomOut" value="-" ><br>
                    <a href="#" class="btn btn-danger" data-dismiss="modal">Cancel</a>
                    <input type="button" class="btn btn-warning btn-sm" id="btnCrop" data-dismiss="modal" value="Choose Image" >
                </div>
                
            </div>  
        </div>
    </div>
</div>
<!-- /modal -->
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="<?=URL?>public/resources/jquery/jquery-2.1.4.min.js"></script>
   
    <!-- <script src="<?=URL?>public/resources/popper.min.js"></script> -->
    <script src="<?=URL?>public/resources/bootstrap-4.0/js/bootstrap.min.js"></script>
    <script src="http://yui.yahooapis.com/3.17.2/build/yui/yui-min.js"></script>
    <script src="<?=URL?>public/js/cropBox.js"></script>
    <!--  <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script src="<?=URL?>public/resources/holder.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
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
        $("#addNewCatForm").validate({
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
            addingCat();
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
        function addingCat(){
              var formData = new FormData($('form#addNewCatForm')[0]);
              $.ajax({            
                  url: "<?=URL?>categories/registeringCat",
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
                      $('#statusCatForm').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Registro creado exitosamente</strong> </div>');
                      setTimeout(function() {location.reload()}, 400);
                    }else{
                      $('#statusCatForm').html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>ERROR:'+msg+'</strong></div>');
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
  <script type="text/javascript">
      YUI().use('node', 'crop-box', function(Y){
        var options =
        {
            imageBox: '.imageBox',
            thumbBox: '.thumbBox',
            spinner: '.spinner',
            imgSrc: ''
        }
        var cropper;
        Y.one('#file').on('change', function(){
            var reader = new FileReader();
            reader.onload = function(e) {
                options.imgSrc = e.target.result;
                cropper = new Y.CropBox(options);
            }
            reader.readAsDataURL(this.get('files')._nodes[0]);
            this.get('files')._nodes = [];
        });
        Y.one('#btnCrop').on('click', function(){
            var img = cropper.getAvatar()
             Y.one('.cropped').append('<input type="hidden" id="file" name="inputimage1" value="'+img+'">');
        });

        Y.one('#btnZoomIn').on('click', function(){
            cropper.zoomIn();
        });
        Y.one('#btnZoomOut').on('click', function(){
            cropper.zoomOut();
        });
    }) 
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



<!-- /******************************************************************************************************************/ -->

