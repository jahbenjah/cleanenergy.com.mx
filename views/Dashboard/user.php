<?php 
    $usuarios=$this->users;
    if (!Session::exists()) {
      header('Location: '.URL.' ');
      
    }
    if ( $_SESSION['type']==2 || $_SESSION['type']==3) { 
        header('Location: '.URL.'/dashboard');
      }
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   <!--  <link rel="icon" href="img/favicon.ico"> -->

    <title>Clean Energy | Dashboard</title>
     
    <!-- Bootstrap core CSS -->
    <link href="<?=URL?>public/resources/bootstrap-4.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=URL?>public/resources/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?=URL?>public/css/style.css" rel="stylesheet">
    <link rel="icon" href="<?=URL?>public/img/favicon.png">
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
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal">Clean Energy</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <span class="border-bottom"><a class="p-2 text-info" href="<?=URL?>dashboard/user">Usuarios</a></span>
        <a class="p-2  text-dark" href="<?=URL?>dashboard/">Interconexion</a>
        <a class="p-2  text-dark" href="<?=URL?>dashboard/autonomos">Autonomos</a> 
        <a class="p-2  text-dark" href="<?=URL?>dashboard/luminarias">Luminarias</a> 

      </nav>
      <a class="btn btn-outline-primary" href="<?=URL?>dashboard/destroySession">Salir</a>
    </div>

    <div class="container">
      <div class="row"><span class="border-right">
        <div class="col-md-3">
          <a href="<?=URL?>dashboard/addUsers" class="btn btn-outline-info"><i class="fa fa-plus pr-1 text-info"></i> Agregar Usuario</a>
        </div>
        </span>
        <div class="col-md-9">
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th><small class="text-info">Nombre</small></th>
                    <th><small class="text-info">Tipo</small></th>
                    <th><small class="text-info">Acciones</small></th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        for ($i=0; $i < count($usuarios); $i++) { 
                          $linka= URL.'dashboard/editUser/'.$usuarios[$i]["id"];
                          $linka.="/".str_replace(" ", '-', html_entity_decode($usuarios[$i]['name']));
                            echo "
                                <tr>
                                  <td id='nombre-".$usuarios[$i]['id']."' >".$usuarios[$i]['name']."</td>
                                   <td>".$usuarios[$i]['descRol']."</td>
                                   <td>".'<button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modal-user" onclick="delUser('.$usuarios[$i]['id'].')"><i class="fa fa-trash"></i></button>'."</td>
                                  <td>".'<a href="'.$linka.'" class="btn btn-sm btn-outline-info" ><i class="fa fa-pencil"></i></button>'."</td>
                                  
                                </tr>
                            ";
                        }
                    ?>

                </tbody>
              </table>
            </div>
        </div>
        
      </div>
    <script src="<?=URL?>public/resources/jquery/jquery-2.1.4.min.js"></script>
    <script src="<?=URL?>public/resources/vendor/popper.min.js"></script>
    <script src="<?=URL?>public/resources/bootstrap-4.0/js/bootstrap.min.js"></script>
    </div>
    <script>
       function delUser(id){
            var nombre=$('#nombre-'+id).text();
            $('#user-modal-content').html('<div class="bg-danger p-2"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h5 class="modal-title text-white">Eliminar Usuario</h5></div><div class="modal-body">Seguro que deseas eliminar la cuenta de: <strong>'+nombre+'</strong></div><div class="modal-footer"><button type="button" class="btn btn-link text-muted" data-dismiss="modal">Cerrar</button><button type="button" class="btn btn-outline-danger" onclick="confirmaElimina('+id+')">Eliminar</button></div>');      
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
                      $('#user-modal-content').html('<div class="bg-danger p-2"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h5 class="modal-title">Eliminar Usuario</h5></div><div class="modal-body">El usuario : <strong>'+nombre+'</strong> Se ha borrado con éxito</div><div class="modal-footer"><button type="button" class="btn btn-outline-secondary" data-dismiss="modal" onclick="reloadscreen();">Cerrar</button></div>');
                    }
                    else{
                      $('#user-modal-content').html('<h2>'+msg+'<h2>');
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