<?php 
if (!Session::exists()) {
      header('Location: '.URL.'');
    }
    $category=$this->allcategory;
    $product=$this->descPost[0];
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

    <title>Compubrother | Dashboard</title>

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
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Compubrother</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?=URL?>dashboard/destroySession" >Sign out</a>
        </li>
      </ul>
    </nav>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h3 class="text-muted">Editar Galería de <?=$product['name']?></h3>
            <div class="btn-toolbar mb-2 mb-md-0">
              <a href="<?=URL?>dashboard/" class="btn btn-sm btn-outline-info"><span data-feather="arrow-left"></span> Volver a Productos</a>
               
            </div>
       </div>
    </main>
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
                <a class="nav-link" href="<?=URL?>categories/">
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
          <div class="album py-5 ">
              <div class="container">   
                  <div class="row"> 
                      <div class="col-md-12 bg-light">
                           
                          <div class="row">
                            
                                <div class="col-4 text-center">
                                   <div class="card">
                                          <div class="card-heading">
                                            <div class="card-title">
                                               <h4 class="text-info text-center">Imagen 1</h4>
                                            </div>
                                          </div>
                                        <div class="card-body">  
                                            <br>
                                            <form id="formfile2" method="post" accept-charset="utf-8" role="form" enctype="multipart/form-data">

                                              <div class="show-image">
                                               <img src="<?=URL?>public/img/products/<?=$product['image2']?>" alt="" id="blah" class="img-responsive" style="max-width:200px;">
                                            </div>
                                                <div class="pt-4">
                                                  <div class="form-group" style="display:none;">
                                                     
                                                     <input type="file" name="inputimagefile2" id="inputfile2"  >
                                                     <input type="hidden" name="inputimage2" id="inputimage2">
                                                     <input type="text" class="form-control" name="inputid" value="<?=$product['id']?>">
                                                  </div>
                                                  
                                                  <div class="card-footer">
                                                    <div id="statusForm"></div>
                                                      <button class="btn btn-info btn-outline-info" id="btncambiar2">Cambiar</button>
                                                      <input class="btn btn-success btn-outline-success d-none" id="btnchange2" type="submit" value="Actualizar">
                                                      <a href="" id="btncancel2" class="btn btn-danger btn-outline-danger d-none"><span data-feather="x-circle"></span> cancelar</a>
                                                  </div>
                                                </div>
                                            </form>
                                        </div>
                                   </div> 
                              </div><!-- col4  -->
                              <div class="col-4 text-center">
                                   <div class="card">
                                          <div class="card-heading">
                                            <div class="card-title">
                                               <h4 class="text-info text-center">Imagen 2</h4>
                                            </div>
                                          </div>
                                        <div class="card-body">  
                                            <br>
                                            <form id="formfile3" method="post" accept-charset="utf-8" role="form" enctype="multipart/form-data">

                                              <div class="show-image3">
                                               <img src="<?=URL?>public/img/products/<?=$product['image3']?>" alt="" id="blah3" class="img-responsive" style="max-width:200px;">
                                            </div>
                                                <div class="pt-4">
                                                  <div class="form-group" style="display:none;">
                                                     
                                                     <input type="file" name="inputimagefile3" id="inputfile3"  >
                                                     <input type="hidden" name="inputimage3" id="inputimage3">
                                                     <input type="text" class="form-control" name="inputid" value="<?=$product['id']?>">
                                                  </div>
                                                  
                                                  <div class="card-footer">
                                                    <div id="statusForm3"></div>
                                                      <button class="btn btn-info btn-outline-info" id="btncambiar3">Cambiar</button>
                                                      <input class="btn btn-success btn-outline-success d-none" id="btnchange3" type="submit" value="Actualizar">
                                                      <a href="" id="btncancel3" class="btn btn-danger btn-outline-danger d-none"><span data-feather="x-circle"></span> cancelar</a>
                                                  </div>
                                                </div>
                                            </form>
                                        </div>
                                   </div>  
                              </div><!-- col4  -->
                              <div class="col-4 text-center">
                                    <div class="card">
                                          <div class="card-heading">
                                            <div class="card-title">
                                               <h4 class="text-info text-center">Imagen 3</h4>
                                            </div>
                                          </div>
                                        <div class="card-body">  
                                            <br>
                                            <form id="formfile4" method="post" accept-charset="utf-8" role="form" enctype="multipart/form-data">

                                              <div class="show-image4">
                                               <img src="<?=URL?>public/img/products/<?=$product['image4']?>" alt="" id="blah4" class="img-responsive" style="max-width:200px;">
                                            </div>
                                                <div class="pt-4">
                                                  <div class="form-group" style="display:none;">
                                                     
                                                     <input type="file" name="inputimagefile4" id="inputfile4"  >
                                                     <input type="hidden" name="inputimage4" id="inputimage4">
                                                     <input type="text" class="form-control" name="inputid" value="<?=$product['id']?>">
                                                  </div>
                                                  
                                                  <div class="card-footer">
                                                    <div id="statusForm4"></div>
                                                      <button class="btn btn-info btn-outline-info" id="btncambiar4">Cambiar</button>
                                                      <input class="btn btn-success btn-outline-success d-none" id="btnchange4" type="submit" value="Actualizar">
                                                      <a href="" id="btncancel4" class="btn btn-danger btn-outline-danger d-none"><span data-feather="x-circle"></span> cancelar</a>
                                                  </div>
                                                </div>
                                            </form>
                                        </div>
                                   </div>
                              </div><!-- col4  -->
                              <div class="col-4 text-center">
                                   <div class="card">
                                          <div class="card-heading">
                                            <div class="card-title">
                                               <h4 class="text-info text-center">Imagen 4</h4>
                                            </div>
                                          </div>
                                        <div class="card-body">  
                                            <br>
                                            <form id="formfile5" method="post" accept-charset="utf-8" role="form" enctype="multipart/form-data">

                                              <div class="show-image5">
                                               <img src="<?=URL?>public/img/products/<?=$product['image5']?>" alt="" id="blah5" class="img-responsive" style="max-width:200px;">
                                            </div>
                                                <div class="pt-4">
                                                  <div class="form-group" style="display:none;">
                                                     <input type="file" name="inputimagefile5" id="inputfile5"  >
                                                     <input type="hidden" name="inputimage5" id="inputimage5">
                                                     <input type="text" class="form-control" name="inputid" value="<?=$product['id']?>">
                                                  </div>
                                                  
                                                  <div class="card-footer">
                                                    <div id="statusForm5"></div>
                                                      <button class="btn btn-info btn-outline-info" id="btncambiar5">Cambiar</button>
                                                      <input class="btn btn-success btn-outline-success d-none" id="btnchange5" type="submit" value="Actualizar">
                                                      <a href="" id="btncancel5" class="btn btn-danger btn-outline-danger d-none"><span data-feather="x-circle"></span> cancelar</a>
                                                  </div>
                                                </div>
                                            </form>
                                        </div>
                                   </div>
                              </div><!-- col4  -->
                              
                          </div><!--row -->
                      </div><!-- col-md-12 -->
                  </div><!--row -->
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
   
    <!-- <script src="<?=URL?>public/resources/popper.min.js"></script> -->
    <script src="<?=URL?>public/resources/bootstrap-4.0/js/bootstrap.min.js"></script>
    <!--  <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
   <!--  <script src="<?=URL?>public/js/yui-min.js"></script> -->
    
    <script src="<?=URL?>public/js/fileupload.js"></script>
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
      $(document).ready(function() {

        function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(e) {
                $('.show-image').removeClass('d-none');
              $('#blah').attr('src', e.target.result);
               
              $("#inputimage2").val(e.target.result);
              }
              mostrarProgressBar=1;
              reader.readAsDataURL(input.files[0]);
            }else{
              mostrarProgressBar=1;
              $('.show-image').addClass('d-none');
            }
        }
        $("#inputfile2").change(function() {
          readURL(this);
          $("#inputimage2").val(readURL(this));
        });


        //$('.textarea').wysihtml5();
            //document.getElementById('inputDate').valueAsDate = new Date();
        $("#formfile2").validate({
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
              //alert('llegue aqui');
              var formData = new FormData($('form#formfile2')[0]);
              $.ajax({            
                  url: "<?=URL?>dashboard/editGallery",
                  type: 'POST',
                  data: formData,
                  async: false,
                  beforeSend: function(){
                    //$('#statusForm').html('creando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
                    $("#editPost").find('button[type="submit"]').html('Cargando.. <span data-feather="loader"></span>');
                    $(".form-actions").find('button').attr('disabled', 'disabled')
                  },
                  success: function(msg){
                    //alert(msg);
                    if ($.isNumeric(msg)) {
                      $('#statusForm').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>La imagen se subió exitosamente</strong> </div>');
                      setTimeout(function() {location.reload()}, 2000);
                    }else{
                      $('#statusForm').html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>ERROR:'+msg+'</strong></div>');
                    }
                    $("#editPost").find('button[type="submit"]').html('Producto Editado');
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
    <!-- imagen2 -->
    <script>
      $(document).ready(function() {

        function readURL3(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(e) {
                $('.show-image3').removeClass('d-none');
              $('#blah3').attr('src', e.target.result);
               
              $("#inputimage3").val(e.target.result);
              }
              mostrarProgressBar=1;
              reader.readAsDataURL(input.files[0]);
            }else{
              mostrarProgressBar=1;
              $('.show-image3').addClass('d-none');
            }
        }
        $("#inputfile3").change(function() {
          readURL3(this);
          $("#inputimage3").val(readURL3(this));
        });

        $("#formfile3").validate({
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
                  editPost3();
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
            function editPost3(){
              var formData = new FormData($('form#formfile3')[0]);
              $.ajax({            
                  url: "<?=URL?>dashboard/editGallery",
                  type: 'POST',
                  data: formData,
                  async: false,
                  beforeSend: function(){
                    //$('#statusForm').html('creando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
                    $("#editPost3").find('button[type="submit"]').html('Cargando.. <span data-feather="loader"></span>');
                    $(".form-actions").find('button').attr('disabled', 'disabled')
                  },
                  success: function(msg){
                    //alert(msg);
                    if ($.isNumeric(msg)) {
                      $('#statusForm3').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>La imagen se subió exitosamente</strong> </div>');
                      setTimeout(function() {location.reload()}, 2000);
                    }else{
                      $('#statusForm3').html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>ERROR:'+msg+'</strong></div>');
                    }
                    $("#editPost3").find('button[type="submit"]').html('Producto Editado');
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
    <!-- imagen2 -->
    <!-- imagen3 -->
        <script>
      $(document).ready(function() {

        function readURL4(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(e) {
                $('.show-image4').removeClass('d-none');
              $('#blah4').attr('src', e.target.result);
               
              $("#inputimage4").val(e.target.result);
              }
              mostrarProgressBar=1;
              reader.readAsDataURL(input.files[0]);
            }else{
              mostrarProgressBar=1;
              $('.show-image4').addClass('d-none');
            }
        }
        $("#inputfile4").change(function() {
          readURL4(this);
          $("#inputimage4").val(readURL4(this));
        });

        $("#formfile4").validate({
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
                  editPost4();
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
            function editPost4(){
              var formData = new FormData($('form#formfile4')[0]);
              $.ajax({            
                  url: "<?=URL?>dashboard/editGallery",
                  type: 'POST',
                  data: formData,
                  async: false,
                  beforeSend: function(){
                    //$('#statusForm').html('creando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
                    $("#editPost4").find('button[type="submit"]').html('Cargando.. <span data-feather="loader"></span>');
                    $(".form-actions").find('button').attr('disabled', 'disabled')
                  },
                  success: function(msg){
                    //alert(msg);
                    if ($.isNumeric(msg)) {
                      $('#statusForm4').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>La imagen se subió exitosamente</strong> </div>');
                      setTimeout(function() {location.reload()}, 2000);
                    }else{
                      $('#statusForm4').html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>ERROR:'+msg+'</strong></div>');
                    }
                    $("#editPost4").find('button[type="submit"]').html('Producto Editado');
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
    <!-- imagen3 -->
    <!-- imagen4 -->
        <script>
      $(document).ready(function() {

        function readURL5(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(e) {
                $('.show-image5').removeClass('d-none');
              $('#blah5').attr('src', e.target.result);
               
              $("#inputimage5").val(e.target.result);
              }
              mostrarProgressBar=1;
              reader.readAsDataURL(input.files[0]);
            }else{
              mostrarProgressBar=1;
              $('.show-image5').addClass('d-none');
            }
        }
        $("#inputfile5").change(function() {
          readURL5(this);
          $("#inputimage5").val(readURL5(this));
        });

        $("#formfile5").validate({
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
                  editPost5();
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
            function editPost5(){
              var formData = new FormData($('form#formfile5')[0]);
              $.ajax({            
                  url: "<?=URL?>dashboard/editGallery",
                  type: 'POST',
                  data: formData,
                  async: false,
                  beforeSend: function(){
                    //$('#statusForm').html('creando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
                    $("#editPost5").find('button[type="submit"]').html('Cargando.. <span data-feather="loader"></span>');
                    $(".form-actions").find('button').attr('disabled', 'disabled')
                  },
                  success: function(msg){
                    //alert(msg);
                    if ($.isNumeric(msg)) {
                      $('#statusForm5').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>La imagen se subió exitosamente</strong> </div>');
                      setTimeout(function() {location.reload()}, 2000);
                    }else{
                      $('#statusForm5').html('<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>ERROR:'+msg+'</strong></div>');
                    }
                    $("#editPost5").find('button[type="submit"]').html('Producto Editado');
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
    <!-- imagen4 -->
  
  </body>
</html>