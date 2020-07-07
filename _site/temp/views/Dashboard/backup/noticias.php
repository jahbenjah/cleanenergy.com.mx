<?php
  $rows=$this->noticias;
  $permissions=$this->permissions;
  if (!is_numeric(array_search(1, $permissions))) {
    header('location: /dashboard');
  }
?>
<!DOCTYPE html>
<html lang="en">
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
    <link href="<?=URL?>public/resources/datatables-1.10.15/css/responsive-2.1.0/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?=URL?>public/resources/datatables-1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet" media="screen">

    

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
        <div class="col-md-2">
            <div class="">
                <div class="row col-md-12">
                    <a href="<?=URL?>dashboard/">
                        <div class="tile tile-clouds col-xs-12"  >
                          <div class="tile-content">
                            <div class="tile-icon-large">
                              <i class="fa fa-cog fa-spin fa-1x fa-fw"></i>
                            </div>
                          </div>
                          <span class="tile-label">Admin</span>
                        </div>
                    </a>
                    <a href="<?=URL?>dashboard/noticias/" <?= (!is_numeric(array_search(1, $permissions))) ? "class='hidden'" : "" ?>>
                        <div class="tile tile-amethyst col-xs-12">
                          <div class="tile-content">
                            <div class="tile-icon-large">
                              <i class="fa fa-newspaper-o  " aria-hidden="true"></i>
                            </div>
                          </div>
                          <span class="tile-label">Noticias</span>
                        </div>
                    </a>
                    <a href="<?=URL?>dashboard/deportes/"  <?= (!is_numeric(array_search(2, $permissions))) ? "class='hidden'" : "" ?>>
                        <div class="tile tile-alizarin col-xs-12">
                          <div class="tile-content">
                            <div class="tile-icon-large">
                              <i class="fa fa-bicycle  " aria-hidden="true"></i>
                            </div>
                          </div>
                          <span class="tile-label">Deportes</span>
                        </div>
                    </a>
                    <a href="<?=URL?>dashboard/espectaculos/"  <?= (!is_numeric(array_search(3, $permissions))) ? "class='hidden'" : "" ?>>
                        <div class="tile tile-carrot col-xs-12">
                          <div class="tile-content">
                            <div class="tile-icon-large">
                              <i class="fa fa-star-o  " aria-hidden="true"></i>
                            </div>
                          </div>
                          <span class="tile-label">Espectáculos</span>
                        </div> 
                    </a>
                    <a href="<?=URL?>dashboard/novedades/"  <?= (!is_numeric(array_search(4, $permissions))) ? "class='hidden'" : "" ?>>
                        <div class="tile tile-pink col-xs-12">
                          <div class="tile-content">
                            <div class="tile-icon-large">
                              <i class="fa fa-sign-language  " aria-hidden="true"></i>
                            </div>
                          </div>
                          <span class="tile-label">Novedades</span>
                        </div>
                    </a>
                    <a href="<?=URL?>dashboard/viral/"  <?= (!is_numeric(array_search(5, $permissions))) ? "class='hidden'" : "" ?>>
                        <div class="tile tile-turquoise col-xs-12">
                           <div class="tile-content">
                            <div class="tile-icon-large">
                              <i class="fa fa-bug  " aria-hidden="true"></i>
                            </div>
                           </div>
                          <span class="tile-label">Viral</span>
                        </div>
                    </a>
                    <a href="<?=URL?>dashboard/saber/"  <?= (!is_numeric(array_search(6, $permissions))) ? "class='hidden'" : "" ?>>
                        <div class="tile tile-sun-flower col-xs-12">
                           <div class="tile-content">
                            <div class="tile-icon-large">
                              <i class="fa fa-flask" aria-hidden="true"></i>
                            </div>
                           </div>
                          <span class="tile-label">#SaberNoEstorba</span>
                        </div>
                    </a>
                    <a href="<?=URL?>dashboard/videos/"  <?= (!is_numeric(array_search(7, $permissions))) ? "class='hidden'" : "" ?>>
                        <div class="tile tile-emerald col-xs-12"  >
                           <div class="tile-content">
                            <div class="tile-icon-large">
                              <i class="fa fa-video-camera" aria-hidden="true"></i>
                            </div>
                           </div>
                          <span class="tile-label">Videos</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-10"> 
            <div class="page-header">
            <a href="<?=URL?>dashboard/addNoticia/1" class="btn btn-therapists btn-lg" ><i class="fa fa-newspaper-o" aria-hidden="true" ></i> Agregar Noticias</a>
              <!-- <a href="#" class="btn btn-therapists btn-lg" onclick="addNoticiasform()"><i class="fa fa-newspaper-o" aria-hidden="true" ></i> Agregar Noticias</a> -->
            </div>
            <table id="noticiasTable" class="datatable table table-striped primary" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Titulo</th>
                  <th>Cuerpo</th>
                  <th>Date</th>
                  <th>Acciones</th>
                </tr>
              </thead>
                <tbody class="cont-noticias">
                  <?php
                    for ($i=0; $i < count($rows); $i++) { 
                      ?>
                        <tr>
                          <td id="id-row"><?=$rows[$i]['id']?></td>
                          <td id="title-row"><?=$rows[$i]['post_title']?></td>
                          <td><?=$rows[$i]['post_body']?></td>
                          <td><?=$rows[$i]['post_date']?></td>
                          <td>
                            <a href="<?=URL?>dashboard/updateNoticia/1-<?=$rows[$i]['id']?>" class="btn btn-info"  ><i class="fa fa-pencil"></i></a>
                            <button type="button" class="btn btn-danger" onclick="delThis(this)"><i class="fa fa-trash"></i></button>
                          </td>
                        </tr>
                      <?php
                    }
                  ?>
                </tbody>
            </table>
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
    <div class="modal fade" id="modal-post">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" id="modal-content-post">
        <br>
          <p class="text-center">Cargando <i class="fa fa-spinner fa-pulse fa-fw"></i>
                        <span class="sr-only">Cargando...</span>...</p>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=URL?>public/resources/jquery/jquery-2.1.4.min.js"></script>
    <script src="<?=URL?>public/resources/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=URL?>public/resources/metro-3.2.0.1/js/metro-docs.js"></script>
    <script src="<?=URL?>public/resources/datatables-1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="<?=URL?>public/resources/datatables-1.10.15/js/responsive-2.1.0/dataTables.responsive.min.js"></script>
    <script src="<?=URL?>public/resources/datatables-1.10.15/js/dataTables.bootstrap.min.js"></script>
    


    

  </body>
  <script>
    $(document).ready(function(){
    $('#noticiasTable').DataTable();
    $('.dataTables_length').hide();
    });
    $('#noticiasTable').dataTable( {
      "pageLength": 10,
      "order": [[ 0, "desc" ]]
    });
    function  delThis(e) {
      var txt=$(e).parent().parent().find('#title-row').text();
      var id=$(e).parent().parent().find('#id-row').text();
      //alert(txt);
      $('#modal-post').modal({
        show:true,
        keyboard: false,
        backdrop: false
      });
      $.ajax({
        url: '<?=URL?>dashboard/delNoticia',
        type: 'POST',
        data: {noticia: id, txt:txt},
        beforeSend: function() {
          $('#modal-content-post').html('<p class="text-center">Cargando <i class="fa fa-spinner fa-pulse fa-fw"></i><span class="sr-only">Cargando...</span>...</p>');
        },
        success: function(msg) {
          $('#modal-content-post').html(msg);
        },
        error: function() {
        }
      });  
    }
  </script>
</html>