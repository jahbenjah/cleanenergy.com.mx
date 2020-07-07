<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   <!--  <link rel="icon" href="img/favicon.ico"> -->

    <title>CochiAdvisor | Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=URL?>public/resources/bootstrap-4.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" type="text/html" href="<?=URL?>public/css/bootstrap3-wysihtml5.min.css"> -->

    <!-- Custom styles for this template -->
    <link href="<?=URL?>public/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-info flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Cochi Advisor</a>
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
                  Dashboard 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?=URL?>dashboard/">
                  <span data-feather="award"></span>
                  Restaurants <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=URL?>user/">
                  <span data-feather="users"></span>
                  Users
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              
            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="album py-5 bg-light">
              <div class="container">
                  <form class="form-horizontal" id="addPost" method="post" accept-charset="utf-8" role="form" enctype="multipart/form-data">
                  <div class="row">
                      <div class="col-md-7">
                          <div class="form-group">
                            <label for="input_name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="inputname" placeholder="Restaurant name" required autofocus>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="input_address" class="col-sm-2 control-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="inputaddress" placeholder="Address">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="input_city" class="col-sm-2 control-label">City</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="inputcity" placeholder="City">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="input_phone" class="col-sm-2 control-label">Phone</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="inputphone" placeholder="Phone">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="input_email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="inputemail" placeholder="Email">
                            </div>
                          </div>
                          

                      </div><!-- col-md-7 -->
                      <div class="col-md-5">
                          <div class="form-group">
                            <label for="input_fb" class="col-sm-2 control-label">Facebook</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="inputfacebook" placeholder="facebook URL">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="input_yt" class="col-sm-2 control-label">Youtube</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="inputyoutube" placeholder="Youtube URL">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="input_instagram" class="col-sm-2 control-label">Instagram</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="inputinstagram" placeholder="Instagram URL" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="input_website" class="col-sm-2 control-label">Website</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="inputwebsite" placeholder="Website URL">
                            </div>
                          </div>
                          <div class="form-group">

                              <div class="col-sm-8">
                                  <a href="#" data-toggle="modal" data-target="#modal-image1" class="btn btn-info">Image 1</a>
                                  <a href="#" data-toggle="modal" data-target="#modal-image2" class="btn btn-info">Image 2</a>
                                  <!-- 
                                  <a href="#" data-toggle="modal" data-target="#modal-image3" class="btn btn-info">Image 3</a>
                                  <a href="#" data-toggle="modal" data-target="#modal-image4" class="btn btn-info">Image 4</a> -->
                                   <!-- <input type="file" id="file" name="inputpost_image" required class="form-control" accept="image/*"> -->
                              </div>
                          </div>
                      </div><!-- col-md-5 -->
                  </div>
                      <div class="row">
                        <div class="col-md-12">
                           <div class="control-group">
                              <label class="control-label" for="textarea2">Description</label>
                              <div class="controls">
                                <input type="text" class="col-12" placeholder="Description  ..." name="inputdescription">
                                <!-- <textarea class="input-xlarge textarea" placeholder="Description  ..." style="width: 910px; height: 180px" name="inputdescription"></textarea> -->
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="textarea3">Promotion</label>
                              <div class="controls">
                                <input type="text" class="col-12"  placeholder="Promotion  ..." name="inputpromotion">
                                <!-- <textarea class="input-xlarge textarea" placeholder="Promotion ..." style="width: 910px; height: 180px" name="inputpromotion"></textarea> -->
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="textarea4">FAQ</label>
                              <div class="controls">
                                <input type="text" class="col-12" placeholder="F.A.Q.  ..." name="inputfaq">
                                <!-- <textarea class="input-xlarge textarea" placeholder="F.A.Q ..." style="width: 910px; height: 180px" name="inputfaq"></textarea> -->
                              </div>
                            </div>
                        </div>
                      </div>  
                      <div class="row" style="padding-top: 2em;">
                          <div class="col-sm-12">
                              <div class="form-actions">
                                  <div id="statusForm"></div>
                                  <button type="submit" class="btn btn-primary btn-large">Upload a Restaurant</button>
                                  <button type="reset" class="btn btn-large">Cancel</button>
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

 <!-- modal -->
<div class="modal fade" id="modal-image1">
    <div class="modal-dialog" style="max-width: 600px;">
        <div class="modal-content" id="modal-image1-content">
            <div class="modal-body">
                <div class="showimage col-xs-3">
                    <!--  <img src="../<?php echo $image1;?>" class="img-responsive"> -->
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
<div class="modal fade" id="modal-image2">
    <div class="modal-dialog" style="max-width: 600px;">
        <div class="modal-content" id="modal-image2-content">
            <div class="modal-body">
                <div class="showimage col-xs-3">
                    <!--  <img src="../<?php echo $image1;?>" class="img-responsive"> -->
                </div>
                <div class="imageBox">
                    <div class="thumbBox"></div>
                    <div class="spinner" style="display: none">Loading...</div>
                </div>
                <div class="action">
                    <input type="file" id="file2" style="width: 250px">
                    <input type="button" class="btn btn-default" id="btnZoomIn" value="+" >
                    <input type="button" class="btn btn-default" id="btnZoomOut" value="-" ><br>
                    <a href="#" class="btn btn-danger" data-dismiss="modal">Cancel</a>
                    <input type="button" class="btn btn-warning btn-sm" id="btnCrop2" data-dismiss="modal" value="Choose Image" >
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
    <!--  <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script src="http://yui.yahooapis.com/3.17.2/build/yui/yui-min.js"></script>
    <script src="<?=URL?>public/js/cropBox.js"></script>
    <script src="<?=URL?>public/resources/holder.min.js"></script>
    <!-- <script src="<?=URL?>/public/resources/WYSIWYG/js/wysihtml5x-toolbar.min.js"></script> -->
    <!-- <script src="http://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/components/jquery/dist/jquery.min.js"></script> -->
    <!-- <script src="<?=URL?>/public/resources/WYSIWYG/js/handlebars.runtime.min.js"></script>
    <script src="<?=URL?>public/resources/WYSIWYG/js/bootstrap3-wysihtml5.min.js"></script> -->
    <script src="<?=URL?>public/resources/jquery/jquery.validate.js"></script>
    <script>
      feather.replace()
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
    <!-- 2ndo file -->
        <script type="text/javascript">
      YUI().use('node', 'crop-box', function(Y){
        var options =
        {
            imageBox: '.imageBox2',
            thumbBox: '.thumbBox',
            spinner: '.spinner',
            imgSrc: ''
        }
        var cropper2;
        Y.one('#file2').on('change', function(){
            var reader = new FileReader();
            reader.onload = function(e) {
                options.imgSrc = e.target.result;
                cropper = new Y.CropBox(options);
            }
            reader.readAsDataURL(this.get('files')._nodes[0]);
            this.get('files')._nodes = [];
        });
        Y.one('#btnCrop2').on('click', function(){
            var img2 = cropper.getAvatar()
             Y.one('.cropped2').append('<input type="hidden" id="file2" name="inputimage2" value="'+img2+'">');
        });

        Y.one('#btnZoomIn').on('click', function(){
            cropper.zoomIn();
        });
        Y.one('#btnZoomOut').on('click', function(){
            cropper.zoomOut();
        });
    }) 
    </script>
    <!-- 2ndo file -->

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