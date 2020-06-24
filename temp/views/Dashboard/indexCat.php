<?php 
    $products=$this->products;
    if (!Session::exists()) {
      header('Location: '.URL.'');
    }
?>
<div class="album py-5 bg-light">
  <div class="container">
    <div class="row">
    <?php
      for ($i=0; $i < count($products); $i++) {
      ?>
      <div class="col-md-4 col-sm-6">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top > img-fluid" src="<?=URL?>public/img/products/<?=$products[$i]['image1']?>" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-text" style="color:#de70a3;"><?=html_entity_decode($products[$i]['name'])?></h3>
            <p class="card-text"><?=html_entity_decode($products[$i]['description'])?></p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  
                <a href="<?=URL?>dashboard/updateProduct/1-<?=$products[$i]['id']?>" class="btn btn-sm btn-outline-secondary" >Edit Product</a><a href="<?=URL?>dashboard/updateGallery/1-<?=$products[$i]['id']?>" class="btn btn-sm btn-outline-secondary" >Gallery</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-prod" onclick="delUser(<?=$products[$i]['id']?>);"> Borrar</button>
              </div>
              <small class="text-muted"><?=html_entity_decode($products[$i]['category'])?></small>
            </div>
          </div>
        </div>
      </div><?php
      }
      ?>
    </div>
  </div>
</div>
             