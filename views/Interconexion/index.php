<?php 
  $interconexion=$this->interconexion;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Clean Energy </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="alfareria michoacan" />
    <link href="<?=URL?>public/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="<?=URL?>public/css/style.css" rel='stylesheet' type='text/css' />
    <link href="<?=URL?>public/css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link rel="icon" href="<?=URL?>public/img/favicon.png">
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center px-md-4  border-bottom shadow-sm top_bg fixed-top sticky-top">
      <p class="my-0  font-weight-normal bg-orange  pl-5 pr-5"><a href="tel:6611042808"><small class="text-white"><i class="fa fa-phone"></i>  (661) 104 2808 </a></small></p>
      <span class="text-white ml-5 "><i class="fa fa-envelope"></i> contacto@cleanenergy.com.mx</span>
      <a href="#" class="ml-md-auto"><img src="<?=URL?>public/img/us.png" alt="clean energy us"></a>
      <?php
        if (isset($_SESSION['name'])) {
          ?>
          <span class="pr-3 pl-3 text-white"><?=$_SESSION['name']?></span>
          <a href="<?=URL?>index/destroySession" class="text-light pl-md-5 ">Salir</span></a>
          <?php
        }
      ?>
      
    </div>
    <div class="container-fluid">
       <div class="row">
            <div class="col-7 col-md-4 pt-2">
              <div class="float-left">
                <img src="<?=URL?>public/img/logo.png" alt="clean Energy logo" class="img-fluid" style="width: 60%;">
              </div>
            </div>
            <div class="col-4 col-md-7">
              <nav class="navbar navbar-expand-lg navbar-light bg-light pt-3 float-right">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                      <ul class="nav float-right">
                        <li class="nav-item">
                          <a class="nav-link " href="<?=URL?>">Inicio</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?=URL?>nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link active dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Productos
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="<?=URL?>interconexion">Interconexión</a>
                                <a class="dropdown-item" href="<?=URL?>autonomos">Autonomos</a>
                                <a class="dropdown-item" href="<?=URL?>luminarias">Luminarias</a>
                              </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="<?=URL?>contacto">Contacto</a>
                        </li>
                     </ul>
                </div>
              </nav>
              
            </div>
       </div>
    </div>
    
    <main class="container-fluid pt-4 bg-white">
        <h2 class="text-uppercase text-center font-weight-normal ">la más amplia variedad en un sólo lugar</h2>
        <div class="row bg-white">
          <div class="col-md-3">
             <div class="p-2">
                <h4 class="text-dark font-weight-normal text-uppercase text-center"><span style="border-bottom: 5px solid #f47825 !important;">Categorías</span></h4>
                <div id="accordion">
                  <div class=" ">
                    <div class=" " id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link text-clean" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           Productos Fotovoltaicos para Interconexión 
                        </button>
                      </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="">
                        <ul class="nav flex-column pl-4">
                          <li class="nav-item ">
                            <a class="nav-link-category font-weight-normal" href="<?=URL?>interconexion/categoria/Paneles Solares" > <i class="fa  fa-chevron-circle-right"></i> Paneles Solares</a>
                          </li>
                          <li class="nav-item ">
                            <a class="nav-link-category font-weight-normal" href="<?=URL?>interconexion/categoria/Inversores de Cadena" > <i class="fa  fa-chevron-circle-right"></i> Inversores de Cadena</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link-category font-weight-normal" href="<?=URL?>interconexion/categoria/Microinversores" ><i class="fa  fa-chevron-circle-right"></i> Microinversores</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link-category font-weight-normal" href="<?=URL?>interconexion/categoria/Sistemas de Montaje" ><i class="fa  fa-chevron-circle-right"></i> Sistemas de Montaje</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link-category font-weight-normal" href="<?=URL?>interconexion/categoria/Accesorios" > <i class="fa  fa-chevron-circle-right"></i> Accesorios</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=" ">
                    <div class=" " id="headingTwo">
                      <h5 class="mb-0">
                        <button class="btn btn-link  text-clean collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Productos Fotovoltaicos Autónomos
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="">
                        <ul class="nav flex-column pl-4">
                          <li class="nav-item ">
                            <a class="nav-link-category font-weight-normal" href="<?=URL?>autonomos" ><i class="fa  fa-chevron-circle-right"></i> Paneles Autónomos</a>
                          </li>
                          <li class="nav-item ">
                            <a class="nav-link-category font-weight-normal" href="<?=URL?>autonomos/categoria/Inversores de Plantas Solares" ><i class="fa  fa-chevron-circle-right"></i> Inversores de Plantas Solares</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link-category font-weight-normal" href="<?=URL?>autonomos/categoria/Controladores" ><i class="fa  fa-chevron-circle-right"></i> Controladores</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link-category font-weight-normal" href="<?=URL?>autonomos/categoria/Baterias" ><i class="fa  fa-chevron-circle-right"></i> Baterías</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link-category font-weight-normal" href="<?=URL?>autonomos/categoria/Bombas" ><i class="fa  fa-chevron-circle-right"></i> Bombas</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link-category font-weight-normal" href="<?=URL?>autonomos/categoria/Luminaria Solar" ><i class="fa  fa-chevron-circle-right"></i> Luminaria Solar</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link-category font-weight-normal" href="<?=URL?>autonomos/categoria/Refrigeradores" ><i class="fa  fa-chevron-circle-right"></i> Refrigeradores</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=" ">
                    <div class=" " id="headingThree">
                      <h5 class="mb-0">
                        <button class="btn btn-link  text-clean collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Luminarias
                        </button>
                      </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="">
                        <ul class="nav flex-column pl-4">
                          <li class="nav-item ">
                            <a class="nav-link-category font-weight-normal" href="<?=URL?>luminarias"><i class="fa  fa-chevron-circle-right"></i> Luminarias</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

             </div>
          </div>
          <div class="col-md-8">
            <div class="p-2 bg-white">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=URL?>interconexion" class="text-clean">Interconexion</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?=$interconexion[0]['categoria'] ?></li>
                  </ol>
                </nav>
                <div class="row">
                   <?php
                    for ($i=0; $i < count($interconexion); $i++) {
                                     
                            ?>    
                             <div class="col-6 col-md-6 col-lg-4 mb-1">
                                <div class="card">
                                    <a href="<?=URL.'interconexion/producto/'.$interconexion[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($interconexion[$i]['nombre']))?>"><img class="card-img-top" src="<?=URL?>public/img/<?=html_entity_decode($interconexion[$i]['image'])?>" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <h5 class="card-title"><a style="color: black;text-decoration: none;font-weight: 100;" href="<?=URL.'interconexion/producto/'.$interconexion[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($interconexion[$i]['nombre']))?>" title="Ver Producto"><?=html_entity_decode($interconexion[$i]['nombre'])?></a></h5>
                                        <p class="mb-0 pb-0 text-muted">Fabricante: <span class="text-energy"><?=html_entity_decode($interconexion[$i]['fabricante'])?></p></span>
                                        <p class="mb-0 pb-0 text-muted">Categoría: <span class="text-clean"><?=html_entity_decode($interconexion[$i]['categoria'])?></span></p>
                                         
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
    </main>
    <section class="pt-5 pb-5 top_bg">
        <div class="container">
          <div class="row">
              <div class="col-6 col-md-4 m-auto pl-5">
                <img src="<?=URL?>public/img/logo-white.png" alt="clean energy logo" class="img-fluid">
              </div>
              <div class="col-6 col-md-4 text-center  ">
                 <p><a href="<?=URL?>" class="text-white">Inicio</a></p>
                 <p><a href="<?=URL?>nosotros" class="text-white">Nosotros</a></p>
                 <p><a href="<?=URL?>" class="text-white">Productos</a></p>
                 <p><a href="<?=URL?>contacto" class="text-white">Contacto</a></p>
              </div>
              <div class="col-12 col-md-4 text-white"> 
                <h5 class="text-white font-weight-normal "><small class="text-energy"><i class="fa  fa-map"></i>  Dirección:</small></h5>
                <p class="font-weight-normal mb-0">Blvd. Popotla 3125 L1 , Col. Cuenca Diaz</p>
                <p  class="font-weight-normal">Rosarito, B.c. 22710</p>
                <h5 class="text-white font-weight-normal text-energy"><small  class="text-energy"><i class="fa  fa-phone"></i>  Teléfonos:</small></h5>
                <p  class="font-weight-normal mb-0">(661) 104 2828</p>
                <p  class="font-weight-normal">(661) 640 4105</p>
                <h5 class="text-white font-weight-normal text-energy"><small  class="text-energy"><i class="fa  fa-envelope"></i> Correo:</small></h5>
                <p  class="font-weight-normal mb-0">contacto@cleanenergy.com.mx</p>
              </div>
          </div>
          
        </div>
        
    </section>
    <footer class="pt-4 pb-2 pt-md-5 bg-dark-blue">
      <div class=" ">
        <div class="col-12 col-md"> 
          <small class="d-block  text-light text-center">&copy; 2019 Clean Energy</small>
        </div>
      </div>
    </footer>
    <script src="<?=URL?>public/resources/jquery/jquery-2.1.4.min.js"></script>
    <script src="<?=URL?>public/resources/bootstrap-4.0/js/bootstrap.min.js"></script>
    <script src="<?=URL?>public/js/popper.min.js"></script>
  </body>
<!-- <script src="<?=URL?>public/js/bootstrap.min.js"></script> -->

</body>
</html>