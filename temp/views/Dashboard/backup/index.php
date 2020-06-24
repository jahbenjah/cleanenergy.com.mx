<?php $permissions=$this->permissions;?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Jousin Palafox :: Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="<?=URL?>public/resources/metro-3.2.0.1/css/metro-bootstrap.min.css">
    <link rel="stylesheet" href="<?=URL?>public/resources/font-awesome-4.7.0/css/font-awesome.min.css"  type="text/css">
    <!-- documentation styles -->
    <link rel="stylesheet" type="text/css" href="<?=URL?>public/resources/metro-3.2.0.1/css/docs.css">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>  
  <body data-spy="scroll" data-target=".subnav" data-offset="50" screen_capture_injected="true">
   

    <!-- Static navbar -->
    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">JP Noticias :: Admin</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Settings</a></li>
              <li><a href="<?=URL?>dashboard/destroySession">Salir</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>

    <div class="container">
      <div class="grid">
        <div class="row col-md-12">
          <a href="<?=URL?>dashboard/banner/" <?= (Session::getValue('type')==1) ? "" : 'class="hidden"' ; ?>>
            <div class="tile tile-clouds col-md-3 col-xs-12"  >
              <div class="tile-content">
                <div class="tile-icon-large">
                  <i class="fa fa-picture-o fa-5x" aria-hidden="true"></i>
                </div>
                <span class="tile-label">Banner</span>
              </div>
            </div>
          </a>
          <a href="<?=URL?>dashboard/videos/" <?= (!is_numeric(array_search(7, $permissions))) ? "class='hidden'" : ""; ?>>
            <div class="tile tile-emerald col-md-3 col-xs-12"  >
                  <div class="tile-content">
                        <div class="tile-icon-large">
                          <i class="fa fa-video-camera fa-5x" aria-hidden="true"></i>
                        </div>
                    </div>
                    <span class="tile-label">Videos</span>
            </div>
          </a>
          <a href="<?=URL?>dashboard/saber/" <?= (!is_numeric(array_search(6, $permissions))) ? "class='hidden'" : "" ?> >
            <div class="tile tile-sun-flower col-md-3 col-xs-12">
               <div class="tile-content">
                    <div class="tile-icon-large">
                      <i class="fa fa-flask fa-5x" aria-hidden="true"></i>
                    </div>
                </div>
                <span class="tile-label">#SaberNoEstorba</span>

            </div>
          </a>
          <a href="<?=URL?>dashboard/usuarios/" <?= (Session::getValue('type')==1) ? "" : 'class="hidden"' ; ?>>
            <div class="tile tile-turquoise col-md-3 col-xs-12" >
                <div class="tile-content">
                  <div class="tile-icon-large">
                    <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                  </div>
                </div>
                <span class="tile-label">Usuarios</span>
            </div>
          </a>
        </div>
        <div class="row col-md-12">
        </div>
        <div class="row col-md-12">
        </div>
        <div class="row col-md-12">
          <a href="<?=URL?>dashboard/viral/" <?= (!is_numeric(array_search(5, $permissions))) ? "class='hidden'" : "" ?>>
              <div class="tile  tile-turquoise col-md-3 col-xs-12"  >
                  
                  <div class="tile-content">
                      <div class="tile-icon-large">
                        <i class="fa fa-bug fa-5x" aria-hidden="true"></i>
                      </div>
                  </div>
                  <span class="tile-label">Viral</span>
              </div>
          </a>
          <a href="<?=URL?>dashboard/novedades/" <?= (!is_numeric(array_search(4, $permissions))) ? "class='hidden'" : "" ?>>
              <div class="tile tile-pink col-md-3 col-xs-12"  >
              <div class="tile-content">
                  <div class="tile-icon-large">
                    <i class="fa fa-sign-language fa-5x" aria-hidden="true"></i>
                  </div>
                </div>
                <span class="tile-label">Novedades</span>
              </div>
          </a>
          <a href="<?=URL?>dashboard/espectaculos/" <?= (!is_numeric(array_search(3, $permissions))) ? "class='hidden'" : "" ?>>
              <div class="tile tile-carrot col-md-6 col-xs-12">
              <div class="tile-content">
                  <div class="tile-icon-large">
                    <i class="fa fa-star-o fa-5x" aria-hidden="true"></i>
                  </div>
                </div>
                <span class="tile-label">Espectáculos</span>
              </div>
          </a>
        </div>
        <div class="row col-md-12"></div>
        <div class="row col-md-12"></div>
        <div class="row col-md-12">
          <a href="<?=URL?>dashboard/deportes/" <?= (!is_numeric(array_search(2, $permissions))) ? "class='hidden'" : "" ?>>
              <div class="tile tile-alizarin col-md-3 col-xs-12"  >
                <div class="tile-content">
                  <div class="tile-icon-large">
                    <i class="fa fa-bicycle fa-5x" aria-hidden="true"></i>
                  </div>
                </div>
                <span class="tile-label">Deportes</span>
              </div>
          </a>
          <a href="<?=URL?>dashboard/noticias/" <?= (!is_numeric(array_search(1, $permissions))) ? "class='hidden'" : "" ?>>
              <div class="tile tile-amethyst col-md-3 col-xs-12"  >
                 <div class="tile-content">
                  <div class="tile-icon-large">
                    <i class="fa fa-newspaper-o fa-5x" aria-hidden="true"></i>
                  </div>
                </div>
                <span class="tile-label">Noticias</span>
              </div>
          </a>
        </div>
      </div>
      <hr>
    </div> <!-- /container -->
    <!-- Site footer -->
    <footer>
      <div class="footer" style="padding-top: 150px;">    
        <p>  Palafox Noticias 2017 :: Admin</p>
      </div>
    </footer>
      
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=URL?>public/resources/jquery/jquery-2.1.4.min.js"></script>
    <script src="<?=URL?>public/resources/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=URL?>public/resources/metro-3.2.0.1/js/metro-docs.js"></script>
  </body>
</html>
