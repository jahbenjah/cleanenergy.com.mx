<?php 
    $usuarios=$this->users; 
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=URL?>public/resources/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">

    <!-- fontAwesome -->
    <link href="<?=URL?>public/resources/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=URL?>public/resources/bootstrap-3.3.7/css/shop-homepage.css" rel="stylesheet">

    <!-- datatbles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-170731497-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-170731497-1');
</script>
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

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <?php
                        if (Session::exists()) {
                            echo '
                                <li>
                                    <a  data-toggle="modal" href="#modal-user" onclick="userProfile()">'.Session::getValue('name').'</a>
                                </li>
                                <li>
                                    <a href="#" onclick="endSession()">cerrar sesión</a>
                                </li>
                            ';
                            if (Session::getValue('type')==1) {
                                 echo '
                                    <li>
                                        <a  href="'.URL.'user/usuarios'.'">Usuarios</a>
                                    </li>
                                ';
                            }
                        }else{
                            echo '
                                <li>
                                    <a data-toggle="modal" href="#modal-user" onclick="userFormRegister()">Registro</a>
                                </li>
                                <li>
                                    <a data-toggle="modal" href="#modal-user" onclick="login()">Inciar sesión</a>
                                </li>
                            ';
                        }
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
        
            <div class="col-xs-12">
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>correo</th>
                            <th>nombre</th>
                            <th>tipo</th>
                            <th>log</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            for ($i=0; $i < count($usuarios); $i++) { 
                                echo "
                                    <tr>
                                        <td>".$usuarios[$i]['correo']."</td>
                                        <td id='nombre-".$usuarios[$i]['id']."' >".$usuarios[$i]['name']."</td>
                                        <td>".$usuarios[$i]['descRol']."</td>
                                        <td>".$usuarios[$i]['log']."</td>
                                        <td>".'<button type="button" class="btn btn-info"><i class="fa fa-pencil"></i></button>'."</td>
                                        <td>".'<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-user" onclick="delUser('.$usuarios[$i]['id'].')"><i class="fa fa-trash"></i></button>'."</td>
                                    </tr>
                                ";
                            }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- modal -->
    <div class="modal fade" id="modal-user">
        <div class="modal-dialog">
            <div class="modal-content" id="user-modal-content">
                Aqui se mostrara todo lo relacionado con el usuario
            </div>
        </div>
    </div>
    <!-- /modal -->

    <!-- jQuery -->
    <script src="<?=URL?>public/resources/jquery/jquery-2.1.4.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=URL?>public/resources/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="<?=URL?>public/js/users.js"></script>
    <script>
        var variables={
            controller: "<?=URL?>user/",
            view: "userFormRegister"
        };
    </script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();

        } );
        function delUser(id){
            var nombre=$('#nombre-'+id).text();
            $('#user-modal-content').html('<div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title">Eliminar Usuario</h4></div><div class="modal-body">Seguro que deseas eliminar la cuenta de: <strong>'+nombre+'</strong></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button><button type="button" class="btn btn-danger" onclick="confirmaElimina('+id+')">Eliminar</button></div>');            
        }
        function confirmaElimina(id) {
            $.ajax({
                url: '<?=URL?>user/delUser',
                type: 'POST',
                data:{id: id},
                beforeSend:function(){
                    //$('#user-modal-content').html('cargando <i class="fa fa-spinner fa-pulse fa-fw"></i>...');
                },
                success: function(msg){
                    alert(msg);
                    //$('#user-modal-content').html(msg);
                },
                error: function(){

                }
            }); 
        }
    </script>
    <script>
        $('#example_wrapper').removeClass("form-inline");
    </script>
</body>

</html>
