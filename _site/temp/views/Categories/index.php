<?php 
    $categories=$this->categories;
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
    <link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=URL?>public/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-info flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">CleanEnergy</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?=URL?>dashboard/destroySession">Sign out</a>
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
                <a class="nav-link active" href="#">
                  <span data-feather="filter"></span>
                  Categorias
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?=URL?>dashboard/">
                  <span data-feather="package"></span>
                  Productos <span class="sr-only">(current)</span>
                </a>
              </li>
              
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h3 class="text-muted">Categorias</h3>
            <div class="btn-toolbar mb-2 mb-md-0">
              <a href="<?=URL?>categories/addCategoriesForm" class="btn btn-sm btn-outline-info"><span data-feather="plus"></span> Agregar Categorias</a>
               
            </div>
          </div>
                <div class="album py-5 bg-light">
                  <div class="container">
                    <div class="row">
                    <div class="col-12">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th style="max-width: 150px;">id</th>
                            <th>Name</th>
                            <th>Edit</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            for ($i=0; $i < count($categories); $i++) { 
                                echo "
                                    <tr>
                                        <td style='max-width:70px;'><img style='max-width:70%;' src=".URL.'public/img/products/'.$categories[$i]['image1']."></td>
                                        <td id='nombre-".$categories[$i]['id']."' >".$categories[$i]['name']."</td>
                                        <td>".'<a href="'.URL.'categories/updateCategories/1-'.$categories[$i]['id'].'"" class="btn  btn-outline-info" ><i class="fa fa-pencil"></i> </a>'."</td>
                                        <td>".'<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-user" onclick="delUser('.$categories[$i]['id'].')"><i class="fa fa-trash"></i></button>'."</td>
                                    </tr>
                                ";
                            }
                        ?>

                    </tbody>
                </table> 
            </div>
                    </div>
                  </div>
                </div>
        </main>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=URL?>public/resources/jquery/jquery-2.1.4.min.js"></script>
    <script src="<?=URL?>public/resources/vendor/popper.min.js"></script>
    <script src="<?=URL?>public/resources/bootstrap-4.0/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script src="<?=URL?>public/resources/holder.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <!-- <script src="<?=URL?>public/js/users.js"></script> -->
    <script>
      feather.replace()
    </script>
    <script>
        var variables={
            controller: "<?=URL?>categories/",
            view: "categoriesFormRegister"
        };
    </script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
             $('#example_wrapper').removeClass('form-inline');
        } );
        function delUser(id){
            var nombre=$('#nombre-'+id).text();
            $('#user-modal-content').html('<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3 class="modal-title">Eliminar Categoria</h3></div><div class="modal-body">Seguro que deseas eliminar la Categoria : <strong>'+nombre+'</strong></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button><button type="button" class="btn btn-danger" onclick="confirmaElimina('+id+')">Eliminar</button></div>');            
        }
        function confirmaElimina(id) {
          var nombre=$('#nombre-'+id).text();
            $.ajax({
                url: '<?=URL?>categories/delCat',
                type: 'POST',
                data:{id: id},
                beforeSend:function(){
                    //$('#user-modal-content').html('cargando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
                },
                success: function(msg){
                    if (msg==1) {
                      $('#user-modal-content').html('<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3 class="modal-title">Eliminar Categoria</h3></div><div class="modal-body">La Categoria : <strong>'+nombre+'</strong> Se ha borrado con éxito</div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal" onclick="reloadscreen();">Cerrar</button></div>');
                    }
                    else{
                      $('#user-modal-content').html('<h2>'+msg+'<h2>');
                    }
                },
                error: function(){

                }
            }); 
        }
        function editUser (id){
           $.ajax({
                url: '<?=URL?>user/editCategoriesForm',
                type: 'POST',
                data:{id: id},
                beforeSend:function(){
                    //$('#user-modal-content').html('cargando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
                },
                success: function(msg){
                    if (msg==1) {
                      $('#user-modal-content').html('<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3 class="modal-title">Eliminar Usuario</h3></div><div class="modal-body">El usuario : <strong>'+nombre+'</strong> Se ha borrado con éxito</div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal" onclick="reloadscreen();">Cerrar</button></div>');
                    }
                    else{
                      $('#user-modal-content').html(msg);
                    }
                },
                error: function(){

                }
            }); 
        }
    </script>
         <!-- modal -->
    <div class="modal fade" id="modal-user">
        <div class="modal-dialog">
            <div class="modal-content" id="user-modal-content">
                Aqui se mostrara todo lo relacionado con el usuario
            </div>
        </div>
    </div>
    <!-- /modal -->
    <script>
      function reloadscreen(){
        location.reload();
      }
    </script>

  </body>
</html>