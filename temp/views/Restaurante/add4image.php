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
    <script src="http://yui.yahooapis.com/3.17.2/build/yui/yui-min.js"></script>
    <script src="<?=URL?>public/js/cropBox.js"></script>
      
        <!-- <script src="../jquery.picture.cut/jquery.picture.cut.js"></script> -->
        <style type="text/css">
        .imageBox {
            position: relative;
            height: 400px;
            width: 550px;
            border:1px solid #aaa;
            background: #fff;
            overflow: hidden;
            background-repeat: no-repeat;
            cursor:move;
        }

        .imageBox .thumbBox {
            position: absolute;
            top: 30%;
            left: 30%;
            width: 450px;
            height: 350px;
            margin-top: -100px;
            margin-left: -100px;
            box-sizing: border-box;
            border: 1px solid rgb(102, 102, 102);
            box-shadow: 0 0 0 1000px rgba(0, 0, 0, 0.5);
            background: none repeat scroll 0% 0% transparent;
        }

        .imageBox .spinner {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            text-align: center;
            line-height: 300px;
            background: rgba(0,0,0,0.7);
        }
        .imageBox2 {
            position: relative;
            height: 400px;
            width: 550px;
            border:1px solid #aaa;
            background: #fff;
            overflow: hidden;
            background-repeat: no-repeat;
            cursor:move;
        }

        .imageBox2 .thumbBox2 {
            position: absolute;
            top: 30%;
            left: 30%;
            width: 450px;
            height: 350px;
            margin-top: -100px;
            margin-left: -100px;
            box-sizing: border-box;
            border: 1px solid rgb(102, 102, 102);
            box-shadow: 0 0 0 1000px rgba(0, 0, 0, 0.5);
            background: none repeat scroll 0% 0% transparent;
        }

        .imageBox2 .spinner2 {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            text-align: center;
            line-height: 300px;
            background: rgba(0,0,0,0.7);
        }
        .imageBox3 {
            position: relative;
            height: 400px;
            width: 550px;
            border:1px solid #aaa;
            background: #fff;
            overflow: hidden;
            background-repeat: no-repeat;
            cursor:move;
        }

        .imageBox3 .thumbBox3 {
            position: absolute;
            top: 30%;
            left: 30%;
            width: 450px;
            height: 350px;
            margin-top: -100px;
            margin-left: -100px;
            box-sizing: border-box;
            border: 1px solid rgb(102, 102, 102);
            box-shadow: 0 0 0 1000px rgba(0, 0, 0, 0.5);
            background: none repeat scroll 0% 0% transparent;
        }

        .imageBox3 .spinner3 {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            text-align: center;
            line-height: 300px;
            background: rgba(0,0,0,0.7);
        }
        .imageBox4 {
            position: relative;
            height: 400px;
            width: 550px;
            border:1px solid #aaa;
            background: #fff;
            overflow: hidden;
            background-repeat: no-repeat;
            cursor:move;
        }

        .imageBox4 .thumbBox4 {
            position: absolute;
            top: 30%;
            left: 30%;
            width: 450px;
            height: 350px;
            margin-top: -100px;
            margin-left: -100px;
            box-sizing: border-box;
            border: 1px solid rgb(102, 102, 102);
            box-shadow: 0 0 0 1000px rgba(0, 0, 0, 0.5);
            background: none repeat scroll 0% 0% transparent;
        }

        .imageBox4 .spinner4 {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            text-align: center;
            line-height: 300px;
            background: rgba(0,0,0,0.7);
        }
      </style>
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
            <div class="">
                <form class="form-vertical" method="POST"  id="add4imageForm" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="">
                            <div class="showimage col-xs-3">
                                <!--  <img src="../<?php echo $image1;?>" class="img-responsive"> -->
                            </div>
                            <div class="imageBox">
                                <div class="thumbBox"></div>
                                <div class="spinner" style="display: none">Loading...</div>
                            </div>
                            <div class="action">
                                <input type="file" id="file" style="width: 250px">
                                <input type="button" class="btn btn-warning btn-sm" id="btnCrop" value="Terminar Imagen" >
                                <input type="button" id="btnZoomIn" value="+" >
                                <input type="button" id="btnZoomOut" value="-" >
                            </div>
                            <div class="cropped">

                            </div>
                        </div>  
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <div class="showimage col-xs-3">
                                 <!-- <img src="../<?php echo $image2;?>" class="img-responsive"> -->
                            </div>
                            <div class="imageBox2">
                                <div class="thumbBox2"></div>
                                <div class="spinner2" style="display: none">Loading...</div>
                            </div>
                            <div class="action">
                                <input type="file" id="file2" style="width: 250px">
                                <input type="button" class="btn btn-warning btn-sm" id="btnCrop2" value="Terminar Imagen" >
                                <input type="button" id="btnZoomIn2" value="+" >
                                <input type="button" id="btnZoomOut2" value="-" >
                            </div>
                            <div class="cropped2">

                            </div>
                        </div>  
                    </div>
                </div><!--row 1 -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="">
                            <div class="showimage col-xs-3">
                                 <!-- <img src="../<?php echo $image3;?>" class="img-responsive"> -->
                            </div>
                            <div class="imageBox3">
                                <div class="thumbBox3"></div>
                                <div class="spinner3" style="display: none">Loading...</div>
                            </div>
                            <div class="action">
                                <input type="file" id="file3" style="width: 250px">
                                <input type="button" class="btn btn-warning btn-sm" id="btnCrop3" value="Terminar Imagen" >
                                <input type="button" id="btnZoomIn3" value="+" >
                                <input type="button" id="btnZoomOut3" value="-" >
                            </div>
                            <div class="cropped3">

                            </div>
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <div class="showimage col-xs-3">
                                <!--  <img src="../<?php echo $image4;?>" class="img-responsive"> -->
                            </div>
                            <div class="imageBox4">
                                <div class="thumbBox4"></div>
                                <div class="spinner4" style="display: none">Loading...</div>
                            </div>
                            <div class="action">
                                <input type="file" id="file4" style="width: 250px">
                                <input type="button" class="btn btn-warning btn-sm" id="btnCrop4" value="Terminar Imagen" >
                                <input type="button" id="btnZoomIn4" value="+" >
                                <input type="button" id="btnZoomOut4" value="-" >
                            </div>
                            <div class="cropped4">

                            </div>
                        </div>
                    </div>
                </div><!-- row 2-->
                <div id="statusProdForm"></div>                             
                <div class="form-group">                                    
                    <div class="col-sm-offset-2 col-sm-6">  
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                                        
                        <button type="submit" id="submitAddProd" s class="btn btn-primary btn-lg"><span></span><span class="glyphicon glyphicon-plus"></span> Subir Imagenes</button>
                    </div>                              
                </div>                              
                </form>
            </div>
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
    <script src="<?=URL?>public/resources/holder.min.js"></script>
    <!-- <script src="<?=URL?>/public/resources/WYSIWYG/js/wysihtml5x-toolbar.min.js"></script> -->
    <!-- <script src="http://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/components/jquery/dist/jquery.min.js"></script> -->
    <!-- <script src="<?=URL?>/public/resources/WYSIWYG/js/handlebars.runtime.min.js"></script>
    <script src="<?=URL?>public/resources/WYSIWYG/js/bootstrap3-wysihtml5.min.js"></script> -->
    <script src="<?=URL?>public/resources/jquery/jquery.validate.js"></script>

    <script src="js/custom.js"></script>    
    <script src="<?=URL?>public/js/dashproducts.js"></script>    
    <script src="<?=URL?>public/js/validateAdd4image.js" ></script> 


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
            Y.one('.cropped').append('<input type="hidden" name="fileToUpload" value="'+img+'">');
        })
        Y.one('#btnZoomIn').on('click', function(){
            cropper.zoomIn();
        })
        Y.one('#btnZoomOut').on('click', function(){
            cropper.zoomOut();
        })
    })
    </script>
    <script type="text/javascript">
    YUI().use('node', 'crop-box', function(Y){
        var options =
        {
            imageBox: '.imageBox2',
            thumbBox: '.thumbBox2',
            spinner: '.spinner2',
            imgSrc: ''
        }
        var cropper;
        Y.one('#file2').on('change', function(){
            var reader = new FileReader();
            reader.onload = function(e) {
                options.imgSrc = e.target.result;
                cropper = new Y.CropBox(options);
            }
            reader.readAsDataURL(this.get('files')._nodes[0]);
            this.get('files')._nodes = [];
        })
        Y.one('#btnCrop2').on('click', function(){
            var img = cropper.getAvatar()
            Y.one('.cropped2').append('<input type="hidden" name="fileToUpload2" value="'+img+'">');
        })
        Y.one('#btnZoomIn2').on('click', function(){
            cropper.zoomIn();
        })
        Y.one('#btnZoomOut2').on('click', function(){
            cropper.zoomOut();
        })
    })
    </script>
    <script type="text/javascript">
    YUI().use('node', 'crop-box', function(Y){
        var options =
        {
            imageBox: '.imageBox3',
            thumbBox: '.thumbBox3',
            spinner: '.spinner3',
            imgSrc: ''
        }
        var cropper;
        Y.one('#file3').on('change', function(){
            var reader = new FileReader();
            reader.onload = function(e) {
                options.imgSrc = e.target.result;
                cropper = new Y.CropBox(options);
            }
            reader.readAsDataURL(this.get('files')._nodes[0]);
            this.get('files')._nodes = [];
        })
        Y.one('#btnCrop3').on('click', function(){
            var img = cropper.getAvatar()
            Y.one('.cropped3').append('<input type="hidden" name="fileToUpload3" value="'+img+'">');
        })
        Y.one('#btnZoomIn3').on('click', function(){
            cropper.zoomIn();
        })
        Y.one('#btnZoomOut3').on('click', function(){
            cropper.zoomOut();
        })
    })
    </script>
    <script type="text/javascript">
    YUI().use('node', 'crop-box', function(Y){
        var options =
        {
            imageBox: '.imageBox4',
            thumbBox: '.thumbBox4',
            spinner: '.spinner4',
            imgSrc: ''
        }
        var cropper;
        Y.one('#file4').on('change', function(){
            var reader = new FileReader();
            reader.onload = function(e) {
                options.imgSrc = e.target.result;
                cropper = new Y.CropBox(options);
            }
            reader.readAsDataURL(this.get('files')._nodes[0]);
            this.get('files')._nodes = [];
        })
        Y.one('#btnCrop4').on('click', function(){
            var img = cropper.getAvatar()
            Y.one('.cropped4').append('<input type="hidden" name="fileToUpload4" value="'+img+'">');
        })
        Y.one('#btnZoomIn4').on('click', function(){
            cropper.zoomIn();
        })
        Y.one('#btnZoomOut4').on('click', function(){
            cropper.zoomOut();
        })
    })
    </script>

  </body>
</html>
   