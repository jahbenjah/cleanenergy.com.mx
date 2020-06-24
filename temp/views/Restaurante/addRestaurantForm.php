<?php 
    //$restaurants=$this->restaurants;
    //$usuarios=$this->user; 
if (Session::getValue('type')!=3) {
      header('Location: '.URL.'');
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Cochi Advisor</title>
<!-- for-mobile-apps -->
 <meta charset="utf-8">
<link rel="shortcut icon" href="<?=URL?>public/img/images/arr.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="cochi advisor" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?=URL?>public/resources/bootstrap-3.3.7/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link rel="stylesheet" href="<?=URL?>public/css/style.css">
<!-- js -->
<script src="<?=URL?>public/resources/jquery/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?=URL?>public/js/move-top.js"></script>
<script type="text/javascript" src="<?=URL?>public/js/easing.js"></script>
<!-- <script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script> -->
<!-- start-smoth-scrolling --> 
<link href="<?=URL?>public/resources/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!-- start-rate-->
<script src="<?=URL?>public/js/jstarbox.js"></script>
    <link rel="stylesheet" href="<?=URL?>public/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
        <script type="text/javascript">
            jQuery(function() {
            jQuery('.starbox').each(function() {
                var starbox = jQuery(this);
                    starbox.starbox({
                    average: starbox.attr('data-start-value'),
                    changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                    ghosting: starbox.hasClass('ghosting'),
                    autoUpdateAverage: starbox.hasClass('autoupdate'),
                    buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                    stars: starbox.attr('data-star-count') || 5
                    }).bind('starbox-value-changed', function(event, value) {
                    if(starbox.hasClass('random')) {
                    var val = Math.random();
                    starbox.next().text(' '+val);
                    return val;
                    } 
                })
            });
        });
        </script>
<!--//End-rate-->
</head>
<body>
<div style="background-color: #eae9e9;" >
        <div class="container" >
            <div class="nav-top">
                <div class="logo text-center">
                    <h1 ><a href="<?=URL?>"><span>Cochi Advisor </span></a></h1>
                </div>
                <nav class="navbar navbar-default navbar-inverse pull-right">
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    
                    <ul class="nav navbar-nav ">
                         <?php
                            if (Session::exists()) {
                                echo '
                                    <li class="active">
                                        <a  class="hyper" href="'.URL.'/restaurante/addRestaurantForm/" ><span>SUBIR RESTAURANT </span> </a>
                                    </li>
                                    <li>
                                        <a  class="hyper"  data-toggle="modal" href="#modal-user" onclick="userProfile()"><span>'.Session::getValue('name').'</span></a>
                                    </li>
                                    <li>
                                        <a  class="hyper" href="#" onclick="endSession()"><span>cerrar sesión</span></a>
                                    </li>
                                ';
                                if (Session::getValue('type')==1) {
                                    echo '<script>window.location.href ="'.URL.'dashboard/'.'"</script>';
                                    // echo '<script>alert("estoy dentro del type 1")</script>';
                                      
                                }
                            }else{
                                echo '
                                    <li>
                                        <a  class="hyper"  data-toggle="modal" href="#modal-user" onclick="userFormRegister()"><span>Registro</span></a>
                                    </li>
                                    <li>
                                        <a  class="hyper" data-toggle="modal" href="#modal-user" onclick="login()"><span>Inciar sesión</span></a>
                                    </li>
                                ';
                            }
                        ?>
                        <!-- <li class=" active"><a href="index.html" class="hyper "><span>Restaurantes</span></a></li>  
                        <li><a href="#" class="hyper" data-toggle="modal" data-target="#modal-user"> <span>Unete</span></a></li>
                        <li><a href="" class="hyper" data-toggle="modal" data-target="#modal-user" onclick="login();"><span> Entra </span></a></li> -->
                        <!-- <li><a href="#" class="hyper"><span>Contacto</span></a></li> -->
                    </ul>
                </div>
                </nav>
                <div class="clearfix"></div>
            </div>
        </div>          
</div>



        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4" style="padding-top: 3em;">
          <div class="album py-5 bg-light">
              <div class="container">
                  <form class="form-horizontal" id="addPost" method="post" accept-charset="utf-8" role="form" enctype="multipart/form-data">
                  <div class="row addrestaurantformrow1">
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
                          <div class="form-group">

                              <div class="col-sm-8">
                                  <a href="#" data-toggle="modal" data-target="#modal-image1" class="btn btn-info">Image 1</a>
                                  <a href="#" data-toggle="modal" data-target="#modal-image2" class="btn btn-info">Image 2</a>
                                  <a href="#" data-toggle="modal" data-target="#modal-image3" class="btn btn-info">Image 3</a>
                                  <a href="#" data-toggle="modal" data-target="#modal-image4" class="btn btn-info">Image 4</a>
                                   <!-- <input type="file" id="file" name="inputpost_image" required class="form-control" accept="image/*"> -->
                              </div>
                          </div>

                      </div><!-- col-md-7 -->
                      <div class="col-md-5 " >
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
                      </div><!-- col-md-5 -->
                  </div>
                      <div class="row addrestaurantformrow2" >
                        <div class="col-md-11 col-md-offset-1">
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
                      
                      
                      
                        
                     </form>
                  </div>
              </div><!--container -->
          </div><!--album py- bg-light -->
        </main>

        </div>
    </div>

</div>
<div class="clearfix"></div>
  <!--footer-->
<div class="footer">
    <div class="container">

        <div class="clearfix"></div>
            <div class="footer-bottom">
                
                <p class="fo-para">No hay amor más sincero, que el amor a la comida</p>
                <ul class="social-fo">
                    <li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    
                </ul>
                
            </div>
        <div class="copy-right">
            <p> &copy; 2018 CochiAdvisor. Todos los derechos reservados | Desarrollado por <a href="https://gixdigital.com/" target="_blank"> GixDigital</a></p>
        </div>
    </div>
</div>
<!-- //footer--> 

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
                    <input type="button" class="btn btn-warning btn-sm" id="btnCrop3" data-dismiss="modal" value="Choose Image" >
                </div>
                <div class="cropped">
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
                <div class="cropped2"> 
                </div>
            </div>  
        </div>
    </div>
</div>
<div class="modal fade" id="modal-image3">
    <div class="modal-dialog" style="max-width: 600px;">
        <div class="modal-content" id="modal-image3-content">
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
                    <input type="button" class="btn btn-warning btn-sm" id="btnCrop3" data-dismiss="modal" value="Choose Image" >
                </div>
                <div >
                    
                </div>
            </div>  
        </div>
    </div>
</div>
<div class="modal fade" id="modal-image4">
    <div class="modal-dialog" style="max-width: 600px;">
        <div class="modal-content" id="modal-image4-content">
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
                    <input type="button" class="btn btn-warning btn-sm" id="btnCrop3" data-dismiss="modal" value="Choose Image" >
                </div>
                <div >
                    
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
    <script src="<?=URL?>public/resources/yui/yui-min.js"></script>
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
        })
        Y.one('#btnCrop').on('click', function(){
            var img = cropper.getAvatar()
             Y.one('.cropped').append('<input type="hidden" id="file" name="inputimage1" value="'+img+'">');
        })
        Y.one('#btnZoomIn').on('click', function(){
            cropper.zoomIn();
        })
        Y.one('#btnZoomOut').on('click', function(){
            cropper.zoomOut();
        })
    })
    </script>
     <!-- file 2 -->
     <script type="text/javascript">
      YUI().use('node', 'crop-box', function(Y){
        var options =
        {
            imageBox: '.imageBox2',
            thumbBox: '.thumbBox2',
            spinner: '.spinner2',
            imgSrc: ''
        }
        var cropper2;
        Y.one('#file2').on('change', function(){
            var reader = new FileReader();
            reader.onload = function(e) {
                options.imgSrc = e.target.result;
                cropper2 = new Y.CropBox(options);
            }
            reader.readAsDataURL(this.get('files')._nodes[0]);
            this.get('files')._nodes = [];
        })
        Y.one('#btnCrop2').on('click', function(){
            var img = cropper2.getAvatar()
             Y.one('.cropped2').append('<input type="hidden" id="file2" name="inputimage2" value="'+img+'">');
        })
        Y.one('#btnZoomIn').on('click', function(){
            cropper2.zoomIn();
        })
        Y.one('#btnZoomOut').on('click', function(){
            cropper2.zoomOut();
        })
    })
    </script>
    <!-- // file2  -->
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
    <script>
      $('#endSession').click(function(event) {
        /* Act on the event */
        $.ajax({
            url: '<?=URL?>user/destroySession',
            beforeSend:function(){
                //$('#modal-content').html('<div class="modal-body row text-center"><h5>Cargando <i class="fa fa-spinner fa-pulse fa-fw"></i><span class="sr-only">Cargando...</span></h5></div>');
            },
            success:function(){
                location.reload()
            },
            error:function(){

            },
        });
    });
    </script>
    <script src="<?=URL?>public/js/users.js"></script>
<script>
        var variables={
            controller: "<?=URL?>user/",
            view: "userFormRegister"
        };
    </script>
  </body>
</html>