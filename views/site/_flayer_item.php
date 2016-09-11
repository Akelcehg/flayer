<?php
use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="col-md-3">
    <div class="product-thumb">
        <header class="product-header">
            <p class="coupon-category-icon"><?= $flayer['discount'] ?> %</p>
            <?= Html::img('/img/f/' . $flayer['image']) ?>
            <!--<img src="img/the_best_mode_of_transport_here_in_maldives_800x600.jpg"
                 alt="Image Alternative text" title="the best mode of transport here in maldives">-->
        </header>
        <div class="product-inner">
            <!--<ul class="icon-group icon-list-rating" title="3.5/5 rating">
                <li><i class="fa fa-star"></i>
                </li>
                <li><i class="fa fa-star"></i>
                </li>
                <li><i class="fa fa-star"></i>
                </li>
                <li><i class="fa fa-star-half-empty"></i>
                </li>
                <li><i class="fa fa-star-o"></i>
                </li>
            </ul>-->
            <h5 class="product-title"><?=$flayer['name']?></h5>
            <p class="product-desciption"><?=$flayer['description']?></p>
            <div class="product-meta">
                <!--<ul class="product-price-list">
                    <li><span class="product-price">$285</span>
                    </li>
                </ul>-->
                <ul class="product-actions-list">
                    <!--<li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                    </li>-->
                    <li><a href="<?=Url::to('flayer/'.$flayer['name'])?>" class="btn btn-sm"><i class="fa fa-bars"></i> Подробнее</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>