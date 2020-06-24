<?php 
    $products=$this->products;
    $categories=$this->allcategory;
    if (!Session::exists()) {
      header('Location: '.URL.'');
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   <!--  <link rel="icon" href="img/favicon.ico"> -->

    <title>CleanEnergy | Dashboard</title>
     
    <!-- Bootstrap core CSS -->
    <link href="<?=URL?>public/resources/bootstrap-4.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=URL?>public/resources/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?=URL?>public/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-info flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Clean Energy</a>
      <form  action="<?=URL?>dashboard/result" method="POST" style="width:100%;">
          <div class="input-group pull-left" >
            <input type="text" class="form-control"  name="searchProduct" placeholder="Buscar Producto" aria-label="Buscar Producto" aria-describedby="basic-addon2" style="background-color: #17a2b8;">
            <div class="input-group-append">
              <span class="input-group-text" style="background-color: #17a2b8;border: none;"> <input class="btn btn-outline-light" type="submit" value="Buscar"></span>
            </div>
          </div>
      </form>   
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?=URL?>dashboard/destroySession">Salir</a>
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
                <a class="nav-link" href="<?=URL?>categories/">
                  <span data-feather="filter"></span>
                  Categorias
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="package"></span>
                  Productos <span class="sr-only">(current)</span>
                </a>
              </li>
              
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h3 class="text-muted">Productos</h3>
            <div class="btn-toolbar mb-2 mb-md-0">
              <a href="<?=URL?>dashboard/addProductForm" class="btn btn-sm btn-outline-info"><span data-feather="plus"></span> Agregar Productos</a>
            </div>
          </div>
          <div class="">
            <?php
            for ($i=0; $i < count($categories); $i++) {         
                    ?> 
                <a href="#" onclick="showFilter(<?=$categories[$i]['id']?>);" class="btn btn-outline-info"> <?=html_entity_decode($categories[$i]['name'])?></a>   
                    <?php
            }
            ?>
          </div>
             <div id="showCategoryFilter">
                <div class="album py-5 bg-light">
                  <div class="container">
                    <div class="row">
                    <?php
                      for ($i=0; $i < count($products); $i++) {
                      ?>
                      <div class="col-xl-2 col-lg-3  col-md-4 col-sm-6 ">
                        <div class="card mb-4 box-shadow">
                          <img class="card-img-top > img-fluid" src="<?=URL?>public/img/products/<?=$products[$i]['image1']?>" alt="Card image cap">
                          <div class="card-body">
                            <h6 class="card-text" style="color:#de70a3;font-size: .9em;"><?=html_entity_decode($products[$i]['name'])?></h6>
                            <h6><small class="text-muted"><?=html_entity_decode($products[$i]['category'])?></small></h6>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <a href="<?=URL?>dashboard/updateProduct/1-<?=$products[$i]['id']?>" class="btn btn-sm btn-info" ><i class="fa fa-edit"></i></a><a href="<?=URL?>dashboard/updateGallery/1-<?=$products[$i]['id']?>" class="btn btn-sm btn-outline-secondary" ><i class="fa fa-image"></i></a>
                                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-prod" onclick="delUser(<?=$products[$i]['id']?>);"> <i class="fa fa-trash"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><?php
                      }
                      ?>
                    </div>
                  </div>
                </div>
              </div><!-- showCategoryFilter -->
        </main>
      </div>
    </div>

    <div class="modal fade" id="modal-view">
        <div class="modal-dialog">
            <div class="modal-content" id="view-modal-content">

        </main>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-post">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" id="modal-content-post">
        <br>
          <p class="text-center">Cargando <i class="fa fa-spinner fa-pulse fa-fw"></i>
          <span class="sr-only">Cargando...</span>...</p>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modal-prod">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" id="prod-modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Modal title</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <!--   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <!-- <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
    <script src="<?=URL?>public/resources/jquery/jquery-2.1.4.min.js"></script>
    <script src="<?=URL?>public/resources/vendor/popper.min.js"></script>
    <script src="<?=URL?>public/resources/bootstrap-4.0/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script src="<?=URL?>public/resources/holder.min.js"></script>
    <script>
      feather.replace()
    </script>
    <script>
      function viewproduct(id){
        $.ajax({            
                  url: "<?=URL?>dashboard/viewproduct",
                  type: 'POST',
                  data: {id:id},
                  async: false,
                  beforeSend: function(){
                    
                  },
                  success: function(msg){
                    
                  },
                  error: function(){
                    alert('');
                  },
                        cache: false,
                        contentType: false,
                        processData: false
                  });
      }
    </script>
    <script>
    function delUser(id){
            var nombre=$('#nombre-'+id).text();
            $('#prod-modal-content').html('<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3 class="modal-title">Eliminar Producto</h3></div><div class="modal-body">Seguro que deseas eliminar este producto: <strong>'+nombre+'</strong></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button><button type="button" class="btn btn-danger" onclick="confirmaElimina('+id+')">Eliminar</button></div>');            
        }
        function confirmaElimina(id) {
          var nombre=$('#nombre-'+id).text();
            $.ajax({
                url: '<?=URL?>dashboard/delProd',
                type: 'POST',
                data:{id: id},
                beforeSend:function(){
                    //$('#user-modal-content').html('cargando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
                },
                success: function(msg){
                    if (msg==1) {
                      $('#prod-modal-content').html('<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3 class="modal-title">Eliminar Producto</h3></div><div class="modal-body">El Producto : <strong>'+nombre+'</strong> Se ha borrado con éxito. <span class="text-danger"> Presiona el botón Cerrar </span></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal" onclick="reloadscreen();">Cerrar</button></div>');
                    }
                    else{
                      $('#prod-modal-content').html('<h2>'+msg+'<h2>');
                    }
                },
                error: function(){

                }
            }); 
        }
    </script>
    <script>
        var variables={
            controller: "<?=URL?>dashboard/",
            view: "viewproductform"
        };
        function reloadscreen(){
        location.reload();
      }
      function showFilter(id){
        $.ajax({
        url: '<?=URL?>dashboard/CategoryFilter ',
        type: 'POST',
        data: {id: id},
        beforeSend: function() {
           
        },
        success: function(msg) {
          $('#showCategoryFilter').html(msg);
        },
        error: function() {
        }
      });
      }
    </script>
  </body>
</html>