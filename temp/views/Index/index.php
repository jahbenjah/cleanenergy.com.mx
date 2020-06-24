<?php 
    $allproducts=$this->allcategory;
    $products=$this->pbycategory;
    //$usuarios=$this->user; 
    error_reporting(1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>CleanEnergy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="lamparas solares" />
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
<body  style="background-color: #f3f3f3;">
    <header class="blog-header" style="    background-color: white;border-bottom-style: solid;border-color: #d4d4d4;">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-1 text-center">
             
          </div>
          <div class="col-6">
            <small>Hola! </small> <a data-toggle="modal" href="#modal-user" onclick="login()"><small class="mr-2"> Inicia Sesión</small> </a> <small class="text-muted mr-2">|</small> 
          </div>
          
          <div class="col-2 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
               <i class="fa fa-shopping-cart mr-2"></i>
            </a>
             
          </div>
          <div class="col-1 text-center">
             
          </div>
        </div>
      </header>
    <nav class="navbar navbar-expand-md navbar-light" style="padding: 0 0;background-color: #f3f3f3!important;">

    <div class="container">
        <a  href="<?=URL?>"><img src="<?=URL?>public/img/logo.png" alt="" style="max-width: 65%;height: auto;"></a>
        <div class="input-group py-2 mb-3">
          <input type="text" class="form-control" placeholder="Buscar artículo" aria-label="Buscar artículo" aria-describedby="button-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button" id="button-addon2">Buscar</button>
          </div>
        </div>

         
    </div>
    </nav>
    <div class="container">
        <div class="img">
            <img src="<?=URL?>public/img/slideup.jpg" alt="slider" class="img-fluid">
        </div>
    </div>
    <div class="container">
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
              <?php
                for ($i=0; $i < count($allproducts); $i++) {
                ?>  
                    <a class="p-2 text-muted" href="<?=URL.'products/category/'.$allproducts[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($allproducts[$i]['name']))?>"><?=html_entity_decode($allproducts[$i]['name'])?></a>
                <?php
                }
                ?>
            </nav>
          </div>
    </div>
    <div class="container">
        <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="#">
            <i class="fa fa-road" style="background-color: #a10938;color: white;padding: 20px;font-size: 2.5em;border-radius: 50px;"></i>
            <h5 class="text-center mt-2">Calles</h5>
          </a>
          <a class="p-2 text-muted" href="#">
            <i class="fa fa-industry" style="background-color: #3464f6;color: white;padding: 20px;font-size: 2.5em;border-radius: 50px;"></i>
             
            <h5 class="mt-2 text-center">Industrial</h5>
          </a>
          <a class="p-2 text-muted" href="#">
            <i class="fa fa-home" style="background-color: #ffa2b5;color: white;padding: 20px;font-size: 2.5em;border-radius: 50px;"></i>
            <h5 class="mt-2  text-center">Residencial</h5>
          </a>
          <a class="p-2 text-muted" href="#">
            <i class="fa fa-columns" style="background-color: #ecf47b;color: white;padding: 20px;font-size: 2.5em;border-radius: 50px;"></i>
            <h5 class="mt-2  text-center">Paneles</h5>
          </a>
          <a class="p-2 text-muted" href="#">
            <i class="fa fa-certificate" style="background-color: #00a2a7;color: white;padding: 20px;font-size: 2.5em;border-radius: 50px;"></i>
            <h5 class="mt-2  text-center">Todos</h5>
          </a>
        </nav>
      </div>
    </div>
<div class="container py-5">
    <div class="row">
        
        <div class="col">
            <div class="row">
                
                <?php
                for ($i=0; $i < count($products); $i++) {
                         
                ?>    
                 <div class="col-6 col-md-6 col-lg-3 mb-3">
                    <div class="card">
                        <a href="<?=URL.'products/detalles/'.$products[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($products[$i]['name']))?>"><img class="card-img-top" src="<?=URL?>public/img/products/<?=html_entity_decode($products[$i]['image1'])?>" alt="Card image cap"></a>
                        <div class="card-body">
                            <h6 class="card-title"><a style="color: black;text-decoration: none;font-weight: 100;" href="<?=URL.'products/detalles/'.$products[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($products[$i]['name']))?>" title="Ver Producto"><?=html_entity_decode($products[$i]['name'])?></a></h6>
                             
                        </div>
                    </div>
                </div>

                <?php
                }

                ?>
            </div>
        </div>

    </div>
    <div class="py-3" style="background-color: #a60d8a;border-color: #a60d8a;">
       <h2 class=" pt-2 pb-2 ml-2 text-white"> Deja que el Sol realice el trabajo</h2> 
    </div>
</div>
<!-- modal -->
<div class="modal animate" id="modal-user" data-backdrop="true">
    <div class="modal-dialog">
        <div class="modal-content" id="user-modal-content">
             
        </div>
    </div>
</div>
<!-- /modal -->
<!-- Footer -->
<footer class="text-muted" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-xl-4">
                <h5>Acerca de Nosotros</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <p class="mb-0">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui sit cum consequuntur animi accusantium officiis porro dolorem dignissimos culpa, nobis perferendis, nostrum inventore consequatur dolore molestias ex, possimus eius nemo.
                </p>
                
            </div>

            <div class="col-md-4 col-lg-4 col-xl-4 mx-auto">
                <h5>Contactanos</h5>
                <p class="mob-0">
                    Para contratar algunos de nuestros servicios o comprar algunos de nuestros productos, puedes hacerlo con los siguientes datos :

                </p>
                <p>
                    Plaza Universidad
                    Blvd. Universidad 292-B Col. Militar, Tecate BC. Tel. 664-900 1594
                </p>

            </div>

            <div class="col-md-4 col-lg-4 col-xl-4">
                <h5>Siguenos</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><i class="fa fa-home mr-2"></i> Clean Energy</li>
                    <li><i class="fa fa-envelope mr-2"></i>  info@cleanenergy.com</li>
                    <li><i class="fa fa-phone mr-2"></i>Tel. 664-900 1594</li>
                    
                </ul>
            </div>
            <div class="col-12 copyright mt-3">
                <p class="float-left text-muted">
                     created with <i class="fa fa-heart heart"></i> by GixCode 2019 
                </p>
                <div class="float-right">
                    <a style="color:#f47825!important;" href="#"><i class="fa fa-arrow-up fa-2x heart"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?=URL?>public/resources/jquery/jquery-2.1.4.min.js"></script>
<script src="<?=URL?>public/resources/bootstrap-4.0/js/bootstrap.min.js"></script>
<!-- <script src="<?=URL?>public/js/bootstrap.min.js"></script> -->

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
