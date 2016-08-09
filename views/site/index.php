<?php
use yii\widgets\ListView;

?>
<div class="row">
    <div class="col-md-3">
        <aside class="sidebar-left">
            <h3 class="mb20">Поиск по категории</h3>
            <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">
                <li><a href="/category/Food & Drink"><i class="fa fa-cutlery"></i>Food &amp; Drink<span>50</span></a>
                </li>
                <li><a href="/category/Events"><i class="fa fa-calendar"></i>Events<span>49</span></a>
                </li>
                <li><a href="/category/Beauty"><i class="fa fa-female"></i>Beauty<span>37</span></a>
                </li>
                <li><a href="/category/Fitness"><i class="fa fa-bolt"></i>Fitness<span>36</span></a>
                </li>
                <li><a href="/category/Electronics"><i class="fa fa-headphones"></i>Electronics<span>48</span></a>
                </li>
                <li><a href="/category/Furniture"><i class="fa fa-image"></i>Furniture<span>31</span></a>
                </li>
                <li><a href="/category/Fashion"><i class="fa fa-umbrella"></i>Fashion<span>40</span></a>
                </li>
                <li><a href="/category/Shopping"><i class="fa fa-shopping-cart"></i>Shopping<span>33</span></a>
                </li>
                <li><a href="/category/Home & Garden"><i class="fa fa-home"></i>Home &amp; Garden<span>44</span></a>
                </li>
                <li><a href="/category/Travel"><i class="fa fa-plane"></i>Travel<span>38</span></a>
                </li>
            </ul>
        </aside>
    </div>
    <div class="col-md-9">
        <h1 class="mb20">Weekly Featured
            <small><a href="#">View All</a></small>
        </h1>
        <div class="row row-wrap">

            <?php $widget = ListView::begin([
                'dataProvider' => $dataProvider,
                'summary' => '',
                'itemOptions' => ['class' => 'item'],
                'itemView' => function ($model, $key, $index, $widget) {
                    return '<a class="col-md-4" href="#">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="'.$model['image'].'" alt="Image Alternative text"
                                 title="the best mode of transport here in maldives">
                        </header>
                        <div class="product-inner">
                            <h5 class="product-title">'.$model['name'].'</h5>
                            <p class="product-desciption">'.$model['description'].'</p>
                            <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 4 days 32 h remaining</span>
                                <ul class="product-price-list">
                                    <li><span class="product-save">Save '.$model['discount'].' %</span>
                                    </li>
                                </ul>
                            </div>
                            <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
                        </div>
                    </div>
                </a>';
                },
            ]) ?>

            <?php echo $widget->renderItems(); ?>


            <!--<a class="col-md-4" href="#">
                <div class="product-thumb">
                    <header class="product-header">
                        <img src="img/800x600.png" alt="Image Alternative text" title="Green Furniture">
                    </header>
                    <div class="product-inner">
                        <h5 class="product-title">Green Furniture Pack</h5>
                        <p class="product-desciption">Habitant class blandit arcu parturient at litora per</p>
                        <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 6 days 8 h remaining</span>
                            <ul class="product-price-list">
                                <li><span class="product-price">$128</span>
                                </li>
                                <li><span class="product-old-price">$279</span>
                                </li>
                                <li><span class="product-save">Save 46%</span>
                                </li>
                            </ul>
                        </div>
                        <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
                    </div>
                </div>
            </a>
            <a class="col-md-4" href="#">
                <div class="product-thumb">
                    <header class="product-header">
                        <img src="img/800x600.png" alt="Image Alternative text" title="Our Coffee miss u">
                    </header>
                    <div class="product-inner">
                        <h5 class="product-title">Coffe Shop Discount</h5>
                        <p class="product-desciption">Habitant class blandit arcu parturient at litora per</p>
                        <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i>  33 h remaining</span>
                            <ul class="product-price-list">
                                <li><span class="product-price">$83</span>
                                </li>
                                <li><span class="product-old-price">$130</span>
                                </li>
                                <li><span class="product-save">Save 64%</span>
                                </li>
                            </ul>
                        </div>
                        <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
                    </div>
                </div>
            </a>-->
        </div>
    </div>
</div>
<div class="gap gap-small"></div>
<h1 class="mb20">New Deals
    <small><a href="#">View All</a></small>
</h1>
<div class="row row-wrap">
    <a class="col-md-4" href="#">
        <div class="product-thumb">
            <header class="product-header">
                <img src="img/800x600.png" alt="Image Alternative text" title="AMaze">
            </header>
            <div class="product-inner">
                <h5 class="product-title">New Glass Collection</h5>
                <p class="product-desciption">Nulla egestas nam posuere habitant hac lacinia cubilia</p>
                <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 10 days 23 h remaining</span>
                    <ul class="product-price-list">
                        <li><span class="product-price">$62</span>
                        </li>
                        <li><span class="product-old-price">$140</span>
                        </li>
                        <li><span class="product-save">Save 44%</span>
                        </li>
                    </ul>
                </div>
                <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
            </div>
        </div>
    </a>
    <a class="col-md-4" href="#">
        <div class="product-thumb">
            <header class="product-header">
                <img src="img/800x600.png" alt="Image Alternative text" title="Gamer Chick">
            </header>
            <div class="product-inner">
                <h5 class="product-title">Playstation Accessories</h5>
                <p class="product-desciption">Nulla egestas nam posuere habitant hac lacinia cubilia</p>
                <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 6 days 27 h remaining</span>
                    <ul class="product-price-list">
                        <li><span class="product-price">$61</span>
                        </li>
                        <li><span class="product-old-price">$127</span>
                        </li>
                        <li><span class="product-save">Save 48%</span>
                        </li>
                    </ul>
                </div>
                <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
            </div>
        </div>
    </a>
    <a class="col-md-4" href="#">
        <div class="product-thumb">
            <header class="product-header">
                <img src="img/800x600.png" alt="Image Alternative text" title="The Violin">
            </header>
            <div class="product-inner">
                <h5 class="product-title">Violin Lessons</h5>
                <p class="product-desciption">Nulla egestas nam posuere habitant hac lacinia cubilia</p>
                <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 2 days 36 h remaining</span>
                    <ul class="product-price-list">
                        <li><span class="product-price">$182</span>
                        </li>
                        <li><span class="product-old-price">$264</span>
                        </li>
                        <li><span class="product-save">Save 69%</span>
                        </li>
                    </ul>
                </div>
                <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
            </div>
        </div>
    </a>
</div>
<div class="row row-wrap">
    <a class="col-md-3" href="#">
        <div class="product-thumb">
            <header class="product-header">
                <img src="img/800x600.png" alt="Image Alternative text" title="Food is Pride">
            </header>
            <div class="product-inner">
                <h5 class="product-title">Best Pasta</h5>
                <p class="product-desciption">Montes parturient eget sodales elit justo senectus massa</p>
                <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 1 day 50 h remaining</span>
                    <ul class="product-price-list">
                        <li><span class="product-price">$108</span>
                        </li>
                        <li><span class="product-old-price">$235</span>
                        </li>
                        <li><span class="product-save">Save 46%</span>
                        </li>
                    </ul>
                </div>
                <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
            </div>
        </div>
    </a>
    <a class="col-md-3" href="#">
        <div class="product-thumb">
            <header class="product-header">
                <img src="img/800x600.png" alt="Image Alternative text" title="The Hidden Power of the Heart">
            </header>
            <div class="product-inner">
                <h5 class="product-title">Beach Holidays</h5>
                <p class="product-desciption">Montes parturient eget sodales elit justo senectus massa</p>
                <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 1 day 26 h remaining</span>
                    <ul class="product-price-list">
                        <li><span class="product-price">$163</span>
                        </li>
                        <li><span class="product-old-price">$251</span>
                        </li>
                        <li><span class="product-save">Save 65%</span>
                        </li>
                    </ul>
                </div>
                <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
            </div>
        </div>
    </a>
    <a class="col-md-3" href="#">
        <div class="product-thumb">
            <header class="product-header">
                <img src="img/800x600.png" alt="Image Alternative text" title="iPhone 5 iPad mini iPad 3">
            </header>
            <div class="product-inner">
                <h5 class="product-title">Electronics Big Deal</h5>
                <p class="product-desciption">Montes parturient eget sodales elit justo senectus massa</p>
                <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 2 days 27 h remaining</span>
                    <ul class="product-price-list">
                        <li><span class="product-price">$115</span>
                        </li>
                        <li><span class="product-old-price">$201</span>
                        </li>
                        <li><span class="product-save">Save 57%</span>
                        </li>
                    </ul>
                </div>
                <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
            </div>
        </div>
    </a>
    <a class="col-md-3" href="#">
        <div class="product-thumb">
            <header class="product-header">
                <img src="img/800x600.png" alt="Image Alternative text" title="Old No7">
            </header>
            <div class="product-inner">
                <h5 class="product-title">Jack Daniels Huge Pack</h5>
                <p class="product-desciption">Montes parturient eget sodales elit justo senectus massa</p>
                <div class="product-meta"><span class="product-time"><i
                            class="fa fa-clock-o"></i>  54 h remaining</span>
                    <ul class="product-price-list">
                        <li><span class="product-price">$96</span>
                        </li>
                        <li><span class="product-old-price">$139</span>
                        </li>
                        <li><span class="product-save">Save 69%</span>
                        </li>
                    </ul>
                </div>
                <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
            </div>
        </div>
    </a>
</div>
<div class="gap gap-small"></div>
<h1 class="mb20">Popular
    <small><a href="#">View All</a></small>
</h1>
<div class="row row-wrap">
    <a class="col-md-4" href="#">
        <div class="product-thumb">
            <header class="product-header">
                <img src="img/800x600.png" alt="Image Alternative text" title="Hot mixer">
            </header>
            <div class="product-inner">
                <h5 class="product-title">Modern DJ Set</h5>
                <p class="product-desciption">Ad himenaeos mus sed inceptos duis mauris magna</p>
                <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 9 days 6 h remaining</span>
                    <ul class="product-price-list">
                        <li><span class="product-price">$62</span>
                        </li>
                        <li><span class="product-old-price">$156</span>
                        </li>
                        <li><span class="product-save">Save 40%</span>
                        </li>
                    </ul>
                </div>
                <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
            </div>
        </div>
    </a>
    <a class="col-md-4" href="#">
        <div class="product-thumb">
            <header class="product-header">
                <img src="img/800x600.png" alt="Image Alternative text" title="My Ice Cream and Your Ice Cream Spoons">
            </header>
            <div class="product-inner">
                <h5 class="product-title">Lovely Ice Cream Spoons</h5>
                <p class="product-desciption">Ad himenaeos mus sed inceptos duis mauris magna</p>
                <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 1 day 48 h remaining</span>
                    <ul class="product-price-list">
                        <li><span class="product-price">$91</span>
                        </li>
                        <li><span class="product-old-price">$221</span>
                        </li>
                        <li><span class="product-save">Save 41%</span>
                        </li>
                    </ul>
                </div>
                <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
            </div>
        </div>
    </a>
    <a class="col-md-4" href="#">
        <div class="product-thumb">
            <header class="product-header">
                <img src="img/800x600.png" alt="Image Alternative text" title="waipio valley">
            </header>
            <div class="product-inner">
                <h5 class="product-title">Awesome Vacation</h5>
                <p class="product-desciption">Ad himenaeos mus sed inceptos duis mauris magna</p>
                <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 4 days 33 h remaining</span>
                    <ul class="product-price-list">
                        <li><span class="product-price">$73</span>
                        </li>
                        <li><span class="product-old-price">$235</span>
                        </li>
                        <li><span class="product-save">Save 31%</span>
                        </li>
                    </ul>
                </div>
                <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
            </div>
        </div>
    </a>
</div>
<div class="gap"></div>
