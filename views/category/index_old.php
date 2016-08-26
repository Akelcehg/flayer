<?php
use yii\widgets\ListView;

?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <aside class="sidebar-left">
                <ul class="nav nav-tabs nav-stacked nav-coupon-category">
                    <?php foreach ($flayerGroups as $group): ?>

                        <?php echo '<li><a href="/category/' . $group['name'] . '">
                                <i class="fa fa-cutlery"></i>' . $group['name'] . '<span>
                                ' . $group['count'] . '</span></a>
                    </li>'; ?>

                    <?php endforeach; ?>

                </ul>

                <div class="sidebar-box">
                    <h5>Recent Viewed</h5>
                    <ul class="thumb-list">

                        <li>
                            <a href="#">
                                <img src="/img/70x70.png" alt="Image Alternative text" title="AMaze"/>
                            </a>
                            <div class="thumb-list-item-caption">
                                <h5 class="thumb-list-item-title"><a href="#">New Glass Collection</a></h5>
                                <p class="thumb-list-item-price">$243</p>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/img/70x70.png" alt="Image Alternative text" title="waipio valley"/>
                            </a>
                            <div class="thumb-list-item-caption">
                                <h5 class="thumb-list-item-title"><a href="#">Awesome Vacation</a></h5>
                                <p class="thumb-list-item-price">$381</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-box">
                    <h5>Popular</h5>
                    <ul class="thumb-list">
                        <li>
                            <a href="#">
                                <img src="/img/70x70.png" alt="Image Alternative text" title="Food is Pride"/>
                            </a>
                            <div class="thumb-list-item-caption">
                                <h5 class="thumb-list-item-title"><a href="#">Best Pasta</a></h5>
                                <p class="thumb-list-item-price">$418</p>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/img/70x70.png" alt="Image Alternative text" title="Old No7"/>
                            </a>
                            <div class="thumb-list-item-caption">
                                <h5 class="thumb-list-item-title"><a href="#">Jack Daniels Huge Pack</a></h5>
                                <p class="thumb-list-item-price">$170</p>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/img/70x70.png" alt="Image Alternative text"
                                     title="The Hidden Power of the Heart"/>
                            </a>
                            <div class="thumb-list-item-caption">
                                <h5 class="thumb-list-item-title"><a href="#">Beach Holidays</a></h5>
                                <p class="thumb-list-item-price">$346</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-3">
                    <div class="product-sort">
                        <span class="product-sort-selected">sort by <b>Price</b></span>
                        <a href="#" class="product-sort-order fa fa-angle-down"></a>
                        <ul>
                            <li><a href="#">sort by Name</a>
                            </li>
                            <li><a href="#">sort by Date</a>
                            </li>
                            <li><a href="#">sort by Popularity</a>
                            </li>
                            <li><a href="#">sort by Rating</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-7">
                    <div class="product-view pull-right">
                        <a class="fa fa-th-large" href="category-page-shop.html"></a>
                        <a class="fa fa-list active" href="#"></a>
                    </div>
                </div>
            </div>

            <?php $widget = ListView::begin([
                'dataProvider' => $dataProvider,
                'summary' => '',
                'itemOptions' => ['class' => 'item'],
                'itemView' => function ($model, $key, $index, $widget) {
                    return '<div class="product-thumb product-thumb-horizontal">
            <header class="product-header">
                <img src="' . $model['image'] . '" alt="Image Alternative text" title="Old No7"/>
            </header>
            <div class="product-inner">
                <!-- <ul class="icon-group icon-list-rating" title="3.1/5 rating">
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
                </ul> -->
                <h5 class="product-title">' . $model['name'] . '</h5>
                <div class="product-desciption">' . $model['description'] . '</div>
                <div class="product-meta">
                    <ul class="product-price-list">
                        <li><span class="product-price">' . $model['discount'] . ' %</span>
                        </li>
                    </ul>
                    <ul class="product-actions-list">
                        <!-- <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                        </li> -->
                        <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Подробнее</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>';
                },
            ]) ?>

            <?php echo $widget->renderItems(); ?>

            <!--<ul class="pagination">
                <li class="prev disabled">
                    <a href="#"></a>
                </li>
                <li class="active"><a href="#">1</a>
                </li>
                <li><a href="#">2</a>
                </li>
                <li><a href="#">3</a>
                </li>
                <li><a href="#">4</a>
                </li>
                <li><a href="#">5</a>
                </li>
                <li class="next">
                    <a href="#"></a>
                </li>
            </ul>-->
            <div class="gap"></div>
        </div>
    </div>
</div>