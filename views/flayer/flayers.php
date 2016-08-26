<?php
use yii\widgets\ListView;

?>

<div class="gap"></div>

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

            <div class="owl-carousel owl-slider owl-theme" id="owl-carousel-slider" data-pagination="false"
                 data-nav="top-right" style="opacity: 1; display: block;">
                <div class="owl-wrapper-outer">
                    <div class="owl-wrapper" style="width: 5088px; left: 0px; display: block;">
                        <div class="owl-item" style="width: 848px;">
                            <div>
                                <div class="bg-holder">
                                    <img src="img/bridge_900x500.jpg" alt="Image Alternative text" title="Bridge">
                                    <div class="text-white text-center slider-caption slider-caption-bottom">
                                        <h2 class="text-uc">London Weekends</h2>
                                        <div class="countdown countdown-big" data-countdown="1472684707124">
                                            <div class="days"><span class="count">05</span><span
                                                    class="title">Days</span></div>
                                            <div class="hours"><span class="count">09</span><span
                                                    class="title">Hours</span></div>
                                            <div class="minutes"><span class="count">44</span><span class="title">Minutes</span>
                                            </div>
                                            <div class="seconds"><span class="count">11</span><span class="title">Seconds</span>
                                            </div>
                                        </div>
                                        <a class="btn btn-lg btn-ghost btn-white" href="#">Save 50% Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 848px;">
                            <div>
                                <div class="bg-holder">
                                    <img src="img/4_strokes_of_fun_900x500.jpg" alt="Image Alternative text"
                                         title="4 Strokes of Fun">
                                    <div class="text-white text-center slider-caption slider-caption-bottom">
                                        <h2 class="text-uc">Adrenaline Madness</h2>
                                        <div class="countdown countdown-big" data-countdown="1472684707125">
                                            <div class="days"><span class="count">05</span><span
                                                    class="title">Days</span></div>
                                            <div class="hours"><span class="count">09</span><span
                                                    class="title">Hours</span></div>
                                            <div class="minutes"><span class="count">44</span><span class="title">Minutes</span>
                                            </div>
                                            <div class="seconds"><span class="count">11</span><span class="title">Seconds</span>
                                            </div>
                                        </div>
                                        <a class="btn btn-lg btn-ghost btn-white" href="#">Save 90% Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 848px;">
                            <div>
                                <div class="bg-holder">
                                    <img src="img/lhotel_porto_bay_sao_paulo_luxury_suite_900x500.jpg"
                                         alt="Image Alternative text" title="LHOTEL PORTO BAY SAO PAULO luxury suite">
                                    <div class="text-white text-center slider-caption slider-caption-bottom">
                                        <h2 class="text-uc">Premium Apartments</h2>
                                        <div class="countdown countdown-big" data-countdown="1472684707125">
                                            <div class="days"><span class="count">05</span><span
                                                    class="title">Days</span></div>
                                            <div class="hours"><span class="count">09</span><span
                                                    class="title">Hours</span></div>
                                            <div class="minutes"><span class="count">44</span><span class="title">Minutes</span>
                                            </div>
                                            <div class="seconds"><span class="count">11</span><span class="title">Seconds</span>
                                            </div>
                                        </div>
                                        <a class="btn btn-lg btn-ghost btn-white" href="#">Save 90% Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="owl-controls clickable">
                    <div class="owl-buttons">
                        <div class="owl-prev"></div>
                        <div class="owl-next"></div>
                    </div>
                </div>
            </div>

            <div class="gap"></div>

            <div class="row row-wrap">
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="/img/cup_on_red_800x600.jpg" alt="Image Alternative text" title="Cup on red">
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="4.6/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-half-empty"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">Fancy Coffe Cup</h5>
                            <p class="product-desciption">Faucibus molestie fusce augue netus pretium molestie cum</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$129</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="/img/green_furniture_800x600.jpg" alt="Image Alternative text"
                                 title="Green Furniture">
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="3/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-o"></i>
                                </li>
                                <li><i class="fa fa-star-o"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">Green Furniture Pack</h5>
                            <p class="product-desciption">Faucibus molestie fusce augue netus pretium molestie cum</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$227</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="/img/waipio_valley_800x600.jpg" alt="Image Alternative text"
                                 title="waipio valley">
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">Awesome Vacation</h5>
                            <p class="product-desciption">Faucibus molestie fusce augue netus pretium molestie cum</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$50</span>
                                    </li>
                                    <li><span class="product-old-price">$112</span>
                                    </li>
                                    <li><span class="product-save">Save 45%</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="/img/cascada_800x600.jpg" alt="Image Alternative text" title="cascada">
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="4.2/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-half-empty"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">Adventure in Woods</h5>
                            <p class="product-desciption">Faucibus molestie fusce augue netus pretium molestie cum</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$80</span>
                                    </li>
                                    <li><span class="product-old-price">$131</span>
                                    </li>
                                    <li><span class="product-save">Save 61%</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="/img/the_violin_800x600.jpg" alt="Image Alternative text" title="The Violin">
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="3.4/5 rating">
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
                            </ul>
                            <h5 class="product-title">Violin Lessons</h5>
                            <p class="product-desciption">Faucibus molestie fusce augue netus pretium molestie cum</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$147</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="/img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick">
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="4.2/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-half-empty"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">Playstation Accessories</h5>
                            <p class="product-desciption">Faucibus molestie fusce augue netus pretium molestie cum</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$284</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="/img/my_ice_cream_and_your_ice_cream_spoons_800x600.jpg"
                                 alt="Image Alternative text" title="My Ice Cream and Your Ice Cream Spoons">
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="3.1/5 rating">
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
                            </ul>
                            <h5 class="product-title">Lovely Ice Cream Spoons</h5>
                            <p class="product-desciption">Faucibus molestie fusce augue netus pretium molestie cum</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$179</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="/img/the_hidden_power_of_the_heart_800x600.jpg" alt="Image Alternative text"
                                 title="The Hidden Power of the Heart">
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="3.6/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-o"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">Beach Holidays</h5>
                            <p class="product-desciption">Faucibus molestie fusce augue netus pretium molestie cum</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$297</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="/img/hot_mixer_800x600.jpg" alt="Image Alternative text" title="Hot mixer">
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="4.2/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-half-empty"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">Modern DJ Set</h5>
                            <p class="product-desciption">Faucibus molestie fusce augue netus pretium molestie cum</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$131</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="/img/food_is_pride_800x600.jpg" alt="Image Alternative text"
                                 title="Food is Pride">
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="4.5/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-half-empty"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">Best Pasta</h5>
                            <p class="product-desciption">Faucibus molestie fusce augue netus pretium molestie cum</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$293</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="/img/iphone_5_ipad_mini_ipad_3_800x600.jpg" alt="Image Alternative text"
                                 title="iPhone 5 iPad mini iPad 3">
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="3.2/5 rating">
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
                            </ul>
                            <h5 class="product-title">Electronics Big Deal</h5>
                            <p class="product-desciption">Faucibus molestie fusce augue netus pretium molestie cum</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$143</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="/img/amaze_800x600.jpg" alt="Image Alternative text" title="AMaze">
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">New Glass Collection</h5>
                            <p class="product-desciption">Faucibus molestie fusce augue netus pretium molestie cum</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$284</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="/img/the_best_mode_of_transport_here_in_maldives_800x600.jpg"
                                 alt="Image Alternative text" title="the best mode of transport here in maldives">
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">Finshing in Maldives</h5>
                            <p class="product-desciption">Faucibus molestie fusce augue netus pretium molestie cum</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$105</span>
                                    </li>
                                    <li><span class="product-old-price">$299</span>
                                    </li>
                                    <li><span class="product-save">Save 35%</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="/img/our_coffee_miss_u_800x600.jpg" alt="Image Alternative text"
                                 title="Our Coffee miss u">
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="4.6/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-half-empty"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">Coffe Shop Discount</h5>
                            <p class="product-desciption">Faucibus molestie fusce augue netus pretium molestie cum</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$106</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="/img/nikon_prime_love_800x600.jpg" alt="Image Alternative text"
                                 title="Nikon Prime love">
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">Best Camera Lenthes</h5>
                            <p class="product-desciption">Faucibus molestie fusce augue netus pretium molestie cum</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$102</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="/img/ana_29_800x600.jpg" alt="Image Alternative text" title="Ana 29">
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="3.3/5 rating">
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
                            </ul>
                            <h5 class="product-title">Hot Summer Collection</h5>
                            <p class="product-desciption">Faucibus molestie fusce augue netus pretium molestie cum</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$121</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="/img/aspen_lounge_chair_800x600.jpg" alt="Image Alternative text"
                                 title="Aspen Lounge Chair">
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="4.9/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">Aspen Lounge Chair</h5>
                            <p class="product-desciption">Faucibus molestie fusce augue netus pretium molestie cum</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$235</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="/img/a_turn_800x600.jpg" alt="Image Alternative text" title="a turn">
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="3.5/5 rating">
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
                            </ul>
                            <h5 class="product-title">Diving with Sharks</h5>
                            <p class="product-desciption">Faucibus molestie fusce augue netus pretium molestie cum</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$243</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="pagination">
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
            </ul>
            <div class="gap"></div>
        </div>
    </div>
</div>