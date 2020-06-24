<?php 
    $products=$this->category;
    //$usuarios=$this->user; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Compubrother</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Computadoras y accesorios en tijuana" />
    <link href="<?=URL?>public/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="<?=URL?>public/css/styles.css">
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
        <!-- <a class="navbar-brand" href="index.html">CompuBrother</a> -->
        <img src="<?=URL?>public/img/logo.png" alt="" style="max-width: 25%;height: auto;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Preguntas frecuentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Buscar...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</nav>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Ve nuestras selección de productos</h1>
        <p class="lead text-muted mb-0">Encuentra con nosotros las soluciones que estás buscando.</p>
        <p>Garantía en soporte técnico en todos nuestros productos.</p>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3">
            <div class="mb-3">
                <div class="text-black text-uppercase text-center" style="font-size: 1.5em;"> Categorías</div>
                <ul class="category_block">
                    <?php
                    for ($i=0; $i < count($products); $i++) {
                                     
                            ?>    
                            <li class="" style="display: block;padding:.5em;"><a class="text-muted" href="<?=URL.'products/category/'.$products[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($products[$i]['name']))?>"><?=html_entity_decode($products[$i]['name'])?></a></li>
                             

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
                        <a href="<?=URL.'products/detalles/'.$products[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($products[$i]['name']))?>"><img class="card-img-top" src="<?=URL?>public/img/images/<?=html_entity_decode($products[$i]['image1'])?>" alt="Card image cap"></a>
                        <div class="card-body">
                            <h4 class="card-title"><a style="color: black;text-decoration: none;font-weight: 100;" href="<?=URL.'products/detalles/'.$products[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($products[$i]['name']))?>" title="Ver Producto"><?=html_entity_decode($products[$i]['name'])?></a></h4>
                             
                        </div>
                    </div>
                </div>

                <?php
        }

        ?>
                <div class="col-12">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previo</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Siguiente</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Footer -->
<footer class="text-light">
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
                <p class="text-right text-muted">created with <i class="fa fa-heart"></i> by GixCode 2018</p>
            </div>
        </div>
    </div>
</footer>
<script src="<?=URL?>public/js/bootstrap.min.js"></script>
<script src="<?=URL?>public/js/jquery-3.2.1.min.js"></script>

<script src="<?=URL?>public/js/users.js"></script>
<script>
        var variables={
            controller: "<?=URL?>user/",
            view: "userFormRegister"
        };
    </script>
</body>
</html>
