<?php 
    $usuarios=$this->users;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   <!--  <link rel="icon" href="img/favicon.ico"> -->

    <title>Revista tu Casa | Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=URL?>public/resources/bootstrap-4.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=URL?>public/resources/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=URL?>public/css/dashboard.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-170731497-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-170731497-1');
</script>

  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-info flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Revista tu Casa</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
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
                <a class="nav-link active" href="<?=URL?>user/">
                 <i class="fa fa-users pr-1 text-secondary"></i>
                  Usuarios
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=URL?>">
                  <i class="fa fa-home pr-1 text-secondary"></i>
                  Inmuebles <span class="sr-only">(current)</span>
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="<?=URL?>dashboard/publish">
                  <i class="fa fa-file pr-1 text-secondary"></i>
                  Publicaciones
                </a>
              </li>
              
            </ul>
            <hr>
            <ul class="nav flex-column pl-4">
              <li><h6 class="text-dark">Usuario</h6></li>
              <li><h6><small><a href="#" class="text-secondary">Admin</a></small></h6></li>
              <li><h6><small><a href="#" class="text-secondary">Desarrolladora</a></small></h6></li>
              <li><h6><small><a href="#" class="text-secondary">Particulares</a></small></h6></li>
            </ul>
 
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h3 class="text-muted">Usuarios</h3>
            <div class="btn-toolbar mb-2 mb-md-0">
              <a href="<?=URL?>user/addUserForm" class="btn btn-sm btn-outline-info"><span data-feather="plus"></span> Agregar Usuario</a>
               
            </div>
          </div>
                <div class="album py-5 bg-light">
                  <div class="container">
                    <div class="row">
                    <div class="col-12">
                      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                          <thead>
                              <tr>
                                  <th>Email</th>
                                  <th>Nombre</th>
                                  <th>Tipo</th>
                                  <th>Editar</th>
                                  <th>Borrar</th>
                              </tr>
                          </thead>  

                          <tbody>
                              <?php
                                  for ($i=0; $i < count($usuarios); $i++) { 
                                    $linka= URL.'user/editUser/'.$usuarios[$i]["id"];
                                    $linka.="/".str_replace(" ", '-', html_entity_decode($usuarios[$i]['name']));
                                      echo "
                                          <tr>
                                              <td>".$usuarios[$i]['correo']."</td>
                                              <td id='nombre-".$usuarios[$i]['id']."' >".$usuarios[$i]['name']."</td>
                                               <td>".$usuarios[$i]['descRol']."</td>
                                              <td>".'<a href="'.$linka.'" class="btn btn-outline-info" ><i class="fa fa-pencil"></i></button>'."</td>
                                              <td>".'<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-user" onclick="delUser('.$usuarios[$i]['id'].')"><i class="fa fa-trash"></i></button>'."</td>
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
            controller: "<?=URL?>user/",
            view: "userFormRegister"
        };
    </script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
             $('#example_wrapper').removeClass('form-inline');
        } );
        function delUser(id){
            var nombre=$('#nombre-'+id).text();
            $('#user-modal-content').html('<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3 class="modal-title">Eliminar Usuario</h3></div><div class="modal-body">Seguro que deseas eliminar la cuenta de: <strong>'+nombre+'</strong></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button><button type="button" class="btn btn-danger" onclick="confirmaElimina('+id+')">Eliminar</button></div>');            
        }
        function confirmaElimina(id) {
          var nombre=$('#nombre-'+id).text();
            $.ajax({
                url: '<?=URL?>user/delUser',
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
                      $('#user-modal-content').html('<h2>'+msg+'<h2>');
                    }
                },
                error: function(){

                }
            }); 
        }
        function editUser (id){
           $.ajax({
                url: '<?=URL?>user/editUserForm',
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