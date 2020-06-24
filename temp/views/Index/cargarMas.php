<div class="row">
<?php
                    $news=$this->news;
                    for ($i=0; $i < count($news); $i++) {
                        if (!empty($news[$i]['post_url'])) {
                            ?>
                            <div class="col-md-4 hid den">
                               <article>
                                    <div class="entry-header">
                                        <div class="grid-cat">
                                            <a href="<?=URL.'noticia/detalle/'.$news[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($news[$i]['post_title']))?>"><?=$news[$i]['sectionName']?></a>
                                        </div>
                                        <h3 class="entry-title">
                                            <a href="<?=URL.'noticia/detalle/'.$news[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($news[$i]['post_title']))?>"><?=html_entity_decode($news[$i]['post_title'])?></a>
                                        </h3>
                                        <span> 
                                            <i class="fa fa-calendar"></i> <?=$news[$i]['post_date']?>
                                        </span>
                                    </div>
                                    <div class="post-thumbnail-wrap">
                                        <a href="<?=URL.'noticia/detalle/'.$news[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($news[$i]['post_title']))?>">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="<?=str_replace('watch?v=', 'embed/', $news[$i]['post_url'])?>" allowfullscreen=""></iframe>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="entry-content">
                                        <p><?= html_entity_decode(substr($news[$i]['post_body'] , 0,150)) ?></p>
                                        <a href="<?=URL.'noticia/detalle/'.$news[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($news[$i]['post_title']))?>">ver detalles...</a>
                                    </div>
                                </article>
                            </div>
                            <?php
                        }
                        else{
                            ?>   
                            <div class="col-md-4">
                               <article>
                                     <div class="entry-header">
                                         <div class="grid-cat"><a href="<?=URL.'noticia/detalle/'.$news[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($news[$i]['post_title']))?>"><?=$news[$i]['sectionName']?></a></div>
                                         <h3 class="entry-title"><a href="<?=URL.'noticia/detalle/'.$news[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($news[$i]['post_title']))?>"><?=html_entity_decode($news[$i]['post_title'])?></a></h3>
                                         <span> <i class="fa fa-calendar"></i> <?=$news[$i]['post_date']?></span>
                                     </div>
                                     <div class="post-thumbnail-wrap">
                                        <a href="<?=URL.'noticia/detalle/'.$news[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($news[$i]['post_title']))?>">
                                            <img src="<?=URL?>public/img/news/<?=$news[$i]['post_image']?>" /></a></div>
                                     <div class="entry-content">
                                         <p><?= html_entity_decode(substr($news[$i]['post_body'] , 0,150)) ?></p>
                                         <a href="<?=URL.'noticia/detalle/'.$news[$i]['id'].'/'.str_replace(" ", '-', html_entity_decode($news[$i]['post_title']))?>">Más...</a>
                                     </div>
                                 </article>
                             </div>
                            <?php
                        }
                        if (($i+1) % 3 == 0) {
                            echo "<div class='col-xs-12'></div>";
                        }
                    }
                ?></div>