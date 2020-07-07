<?php 
    if (!$_POST){
        header('Location: '.URL.'');
    }
    $products=$this->searchProduct; 
    $category=$this->category;
    error_reporting(1);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Compubrother</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <meta name="keywords" content="Computadoras y accesorios en tijuana" />
    <link href="<?=URL?>public/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="<?=URL?>public/css/styles.css">
    <link rel="shortcut icon" href="<?=URL?>public/img/favicon.png"/>
    <link href="<?=URL?>public/resources/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-170731497-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-170731497-1');
</script>

</head>

<!-- <body style="background-image: url('img/imgbg.jpg');background-repeat: repeat-x, repeat, repeat;background-position: 0px 30px, 0px 0px, 0px 0px;"> -->
<body  style="background-color: #f8f9fa;">
    
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <a  href="<?=URL?>"><img src="<?=URL?>public/img/logo.png" alt="" style="max-width: 55%;height: auto;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?=URL?>">Inicio<span class="sr-only">(current)</span></a>
                </li>
                 
                <li class="nav-item">
                    <a class="nav-link" href="#footer">Contacto</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0"  action="<?=URL?>index/result" method="post">
              <input class="form-control mr-sm-2" type="text" placeholder="Buscar Producto" name="searchp" aria-label="Buscar">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>
<section class="jumbotron text-center">
    <div class="container">
        <h2 class="jumbotron-heading">Esto es lo que encontramos para tí</h2>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3">
            <div class="mb-3" style="position: -webkit-sticky; /* Safari */position: sticky;top: 0;">
                <div class="text-black text-uppercase text-center" style="font-size: 1.5em;"> Categorías</div>
                <ul class="category_block">
                    <?php
                    for ($i=0; $i < count($category); $i++) {
                                     
                            ?>    
                            <li class="" style="display: block;padding:.5em;"><a class="text-muted" href="<?=URL.'category/category/'.$category[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($category[$i]['name']))?>"><?=html_entity_decode($category[$i]['name'])?></a></li>
                             
                            <?php
                    }

                    ?>

                </ul>
            </div>

        </div>
        <div class="col">
            <div class="row">

                <?php
        for ($i=0; $i < count($products); $i++) {
                         
                ?>    
                 <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="card">
                        <a href="<?=URL.'products/detalles/'.$products[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($products[$i]['name']))?>"><img class="card-img-top" src="<?=URL?>public/img/products/<?=html_entity_decode($products[$i]['image1'])?>" alt="Card image cap"></a>
                        <div class="card-body">
                            <h4 class="card-title"><a style="color: black;text-decoration: none;font-weight: 100;" href="<?=URL.'products/category/'.$products[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($products[$i]['name']))?>" title="View Product"><?=html_entity_decode($products[$i]['name'])?></a></h4>
                             
                        </div>
                    </div>
                </div>

                <?php
        }

        ?>
            </div>
        </div>

    </div>
</div>
<!-- modal -->
<div class="modal animate" id="modal-user" data-backdrop="true">
    <div class="modal-dialog">
        <div class="modal-content" id="user-modal-content">
            Aqui se mostrara todo lo relacionado con el usuario
        </div>
    </div>
</div>
<!-- /modal -->
<!-- Footer -->
<footer class="text-light" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-xl-4">
                <h5>Acerca de Nosotros</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <p class="mb-0">
                    Somos una empresa con más de 8 años de experiencia prestando servicios de venta y soporte técnico a usuario final y a nivel empresarial, así como diversos servicios de consultoría informática.
                </p>
                <p class="mb-0">
                    Ofrecer servicios de nivel profesional para el excelente funcionamiento de sus equipos informáticos diarios en su casa o empresa es nuestro objetivo.
                </p>
            </div>

            <div class="col-md-4 col-lg-4 col-xl-4 mx-auto">
                <h5>Contactanos</h5>
                <p class="mob-0">
                    Para contratar algunos de nuestros servicios o comprar algunos de nuestros productos, puedes hacerlo con los siguientes datos :

                </p>
                <p>
                    <b>Calle:</b> Sancho Panza #75, Fracc. Los Españoles, Col. 20 de Noviembre, Tijuana, Baja California C.P. 22430
                </p>

            </div>

            <div class="col-md-4 col-lg-4 col-xl-4">
                <h5>Siguenos</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><i class="fa fa-home mr-2"></i> Compubrother.mx</li>
                    <li><i class="fa fa-envelope mr-2"></i>  compubrother1@hotmail.com</li>
                    <li><i class="fa fa-phone mr-2"></i>Benton: 664 448 3803</li>
                    <li><i class="fa fa-phone mr-2"></i> Benitez: 664 383 4086</li>
                </ul>
            </div>
            <div class="col-12 copyright mt-3">
                <p class="float-left">
                    <a style="color:yellow!important;" href="#">Volver Arriba </a>
                </p>
                <?php
                   if (Session::exists()) {
                    echo'<script>window.location.href ="'.URL.'dashboard/'.'"</script>';
                }else{
                    echo '<a data-toggle="modal" href="#modal-user" onclick="login()"><span>Iniciar sesión</span></a>';
                }
                ?>
                
                <p class="text-right text-muted">created with <i class="fa fa-heart"></i> by GixCode 2018</p>
            </div>
        </div>
    </div>
</footer>
<script src="<?=URL?>public/resources/jquery/jquery-2.1.4.min.js"></script>
<script src="<?=URL?>public/resources/bootstrap-4.0/js/bootstrap.min.js"></script>
<script src="<?=URL?>public/js/bootstrap.min.js"></script>

<script src="<?=URL?>public/js/users.js"></script>
<script>
    function login() {
        // $('#modal-user').modal('show');
        $.ajax({
            url: '<?=URL?>user/login',
            beforeSend:function(){
                $('#user-modal-content').html('<div class="modal-body row text-center"><h5>Cargando <i class="fa fa-spinner fa-pulse fa-fw"></i><span class="sr-only">Cargando...</span></h5></div>');
            },
            success:function(msg){
                $('#user-modal-content').html(msg);
            },
            error:function(){

            },
        });
    }
</script>
<script>
        var variables={
            controller: "<?=URL?>user/",
            view: "userFormRegister"
        };
    </script>
</body>
</html>
