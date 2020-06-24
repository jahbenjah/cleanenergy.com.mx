<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   <!--  <link rel="icon" href="img/favicon.ico"> -->

    <title>Compubrother | Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=URL?>public/resources/bootstrap-4.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?=URL?>public/css/cropper.css">
    <!-- <link rel="stylesheet" type="text/html" href="<?=URL?>public/css/bootstrap3-wysihtml5.min.css"> -->

    <!-- Custom styles for this template -->
    <link href="<?=URL?>public/css/dashboard.css" rel="stylesheet">
    <style>
    .label {
      cursor: pointer;
    }
    .progress {
      display: none;
      margin-bottom: 1rem;
    }
    .alert {
      display: none;
    }
    .img-container img {
      max-width: 100%;
    }
  </style>
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-info flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Compubrother</a>
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
                <a class="nav-link" href="#">
                  <span data-feather="home"></span>
                  Categoría
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?=URL?>dashboard/">
                  <span data-feather="award"></span>
                  Productos <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=URL?>user/">
                  <span data-feather="users"></span>
                  Usuarios
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="album py-5 ">
              <div class="container">
                  <form class="form-horizontal" id="addPost" method="post" accept-charset="utf-8" role="form" enctype="multipart/form-data">
                  <div class="row">
                      <div class="col-md-7 bg-light">
                          <div class="form-group">
                            <label for=inputCategory class="col-sm-2 control-label">Categoría</label>
                            <div class="col-sm-5">
                                  <select name="inputcategory" class="form-control">
                                  <option value="1">Laptops</option>
                                  <option value="2">Teclados</option>
                                  <option value="3">Computadoras</option>
                                  <option value="4">Mouses</option>
                                  <option value="5">Monitores</option>
                                  <option value="6">Gaming</option>
                                  <option value="7">Cargadores de Laptops</option>
                                  <option value="8">Cables</option>
                                  <option value="9">Remates</option>
                                  <option value="10">Promociones</option>
                                  <option value="11">CPUs</option>

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
                            <label for="input_description" class="col-sm-2 control-label">Descripcion</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="inputdescription" placeholder="Descripcion">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="input_price" class="col-sm-2 control-label">Precio</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="inputprice" placeholder="Precio">
                            </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-8">
                                  <label class="label" data-toggle="tooltip" title="Change your Image">
                                  <img class="rounded" id="avatar"  src="<?=URL?>public/img/products/pc.jpg" alt="avatar">
                                  <input type="file" class="sr-only" id="input" name="image1" accept="image/*">
                                </label>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                </div>
                                <div class="alert" role="alert"></div>
                              </div>


                              <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel">Crop the image</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="img-container">
                                      <img id="image" src="<?=URL?>public/img/products/">
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary" id="crop">Crop</button>
                                  </div>
                                </div>
                              </div>
                            </div>


                          </div>
                        
                      </div><!-- col-md-7 -->
                      <div class="col-md-5">
                          
                      </div><!-- col-md-5 -->
                  </div>
  
                      <div class="row" style="padding-top: 2em;">
                          <div class="col-sm-12">
                              <div class="form-actions">
                                  <div id="statusForm"></div>
                                  <button type="submit" class="btn btn-primary btn-large">Grabar Producto</button>
                                  <button type="reset" class="btn btn-large">Cancelar</button>
                              </div>
                          </div>
                          <hr>
                          
                      </div>  
                      <div class="cropped">
                      </div>
                      <div class="cropped2">
                      </div>
                     </form>
                  </div>
              </div><!--container -->
          </div><!--album py- bg-light -->
        </main>

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
    <!--  <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
   <!--  <script src="<?=URL?>public/js/yui-min.js"></script> -->
    <script src="<?=URL?>public/js/cropper.js"></script>
    <!-- <script src="<?=URL?>public/js/popper.js"></script>
    <script src="<?=URL?>public/js/tooltip.js"></script> -->
    <script src="<?=URL?>public/resources/holder.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="<?=URL?>/public/resources/WYSIWYG/js/wysihtml5x-toolbar.min.js"></script> -->
    <!-- <script src="http://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/components/jquery/dist/jquery.min.js"></script> -->
    <!-- <script src="<?=URL?>/public/resources/WYSIWYG/js/handlebars.runtime.min.js"></script>
    <script src="<?=URL?>public/resources/WYSIWYG/js/bootstrap3-wysihtml5.min.js"></script> -->
    <script src="<?=URL?>public/resources/jquery/jquery.validate.js"></script>
    <script>
      feather.replace()
    </script>
    <script>
    window.addEventListener('DOMContentLoaded', function () {
      var avatar = document.getElementById('avatar');
      var image = document.getElementById('image');
      var input = document.getElementById('input');
      var $progress = $('.progress');
      var $progressBar = $('.progress-bar');
      var $alert = $('.alert');
      var $modal = $('#modal');
      var cropper;
      $('[data-toggle="tooltip"]').tooltip();
      input.addEventListener('change', function (e) {
        var files = e.target.files;
        var done = function (url) {
          input.value = '';
          image.src = url;
          $alert.hide();
          $modal.modal('show');
        };
        var reader;
        var file;
        var url;
        if (files && files.length > 0) {
          file = files[0];
          if (URL) {
            done(URL.createObjectURL(file));
          } else if (FileReader) {
            reader = new FileReader();
            reader.onload = function (e) {
              done(reader.result);
            };

            reader.readAsDataURL(file);
          }
        }
      });
      $modal.on('shown.bs.modal', function () {
        cropper = new Cropper(image, {
          aspectRatio: 1,
          viewMode: 3,
        });
      }).on('hidden.bs.modal', function () {
        cropper.destroy();
        cropper = null;
      });
      document.getElementById('crop').addEventListener('click', function () {
        var initialAvatarURL;
        var canvas;
        $modal.modal('hide');
        if (cropper) {
          canvas = cropper.getCroppedCanvas({
            width: 450,
            height: 350,
          });
          // alert(avatar.value);
          initialAvatarURL = avatar.src;
          avatar.src = canvas.toDataURL();
          $progress.show();
          $alert.removeClass('alert-success alert-warning');
          canvas.toBlob(function (blob) {
            var formData = new FormData();
            formData.append('avatar', blob);
            
            $.ajax('<?=URL?>public/img/products', {
              method: 'POST',
              data: formData,
              processData: false,
              contentType: false,
              xhr: function () {
                var xhr = new XMLHttpRequest();
                xhr.upload.onprogress = function (e) {
                  var percent = '0';
                  var percentage = '0%';
                  if (e.lengthComputable) {
                    percent = Math.round((e.loaded / e.total) * 100);
                    percentage = percent + '%';
                    $progressBar.width(percentage).attr('aria-valuenow', percent).text(percentage);
                  }
                };
                return xhr;
              },
              success: function () {
                $alert.show().addClass('alert-success').text('Upload success');
              },
              error: function () {
                avatar.src = initialAvatarURL;
                $alert.show().addClass('alert-warning').text('Upload error');
              },
              complete: function () {
                $progress.hide();
              },
            });
          });
        }
      });
    });
  </script>

    <script>
      $(document).ready(function() {
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
                    alert(msg);
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
  </body>
</html>