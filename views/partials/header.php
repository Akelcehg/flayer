<?php
use yii\helpers\Url;
use yii\widgets\Menu;

?>
<div class="top-main-area text-center">
    <div class="container">
        <a href="index.html" class="logo mt5">
            <img src="/img/logo-small-dark.png" alt="Image Alternative text" title="Image Title"/>
        </a>
    </div>
</div>
<header class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- MAIN NAVIGATION -->
                <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>

                <nav>

                    <?= Menu::widget([
                        'items' => [
                            ['label' => 'Главная', 'url' => ['/'],
                                'active' => Yii::$app->request->getUrl() == Url::toRoute(['/']),
                            ],
                            ['label' => 'Админка', 'url' => ['/admin'],
                                'active' => Yii::$app->request->getUrl() == Url::toRoute(['/admin'])],
                            ['label' => 'Рекламодатель', 'url' => ['/advertiser'],
                                //'active' => Yii::$app->request->getUrl() == Url::toRoute(['/advertiser']),
                                'items' => [
                                    ['label' => 'Мои флаера', 'url' => ['/advertiser/flayer'],
                                        'active' => Yii::$app->request->getUrl() == Url::toRoute(['/advertiser/flayer'])
                                    ],
                                    ['label' => 'Создать флаер', 'url' => ['/advertiser/flayer/create'],
                                        'active' => Yii::$app->request->getUrl() == Url::toRoute(['/advertiser/flayer/create'])
                                    ],
                                ],
                                'options' => [
                                    "class" => "item-with-ul",
                                ],
                            ],
                            ['label' => 'Менеджер', 'url' => ['/manager']/*, 'visible' => Yii::$app->user->isGuest*/],
                        ],
                        'options' => [
                            "class" => "nav nav-pills flexnav",
                            "id" => 'flexnav'
                        ],
                        'activateItems' => true,
                        'activateParents' => true,

                    ]); ?>


                    <!--                    <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                                            <li class=""><a href="blog-sidebar-right.html">Главная</a>
                                            </li>
                                            <li class=""><a href="blog-sidebar-right.html">Админка</a>
                                            </li>
                                            <li class=""><a href="blog-sidebar-right.html">Рекламодатель</a>
                                            </li>
                                            <li class=""><a href="blog-sidebar-right.html">Менеджер</a>
                                            </li>
                                        </ul>-->
                </nav>
                <!-- END MAIN NAVIGATION -->
            </div>
            <div class="col-md-6">
                <!-- LOGIN REGISTER LINKS -->
                <ul class="login-register">
                    <li class="shopping-cart"><a href="page-cart.html"><i class="fa fa-shopping-cart"></i>My
                            Cart</a>
                        <div class="shopping-cart-box">
                            <ul class="shopping-cart-items">
                                <li>
                                    <a href="product-shop-sidebar.html">
                                        <img src="/img/70x70.png" alt="Image Alternative text" title="AMaze"/>
                                        <h5>New Glass Collection</h5><span
                                            class="shopping-cart-item-price">$150</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="product-shop-sidebar.html">
                                        <img src="/img/70x70.png" alt="Image Alternative text" title="Gamer Chick"/>
                                        <h5>Playstation Accessories</h5><span
                                            class="shopping-cart-item-price">$170</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="list-inline text-center">
                                <li><a href="page-cart.html"><i class="fa fa-shopping-cart"></i> View Cart</a>
                                </li>
                                <li><a href="page-checkout.html"><i class="fa fa-check-square"></i> Checkout</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top"><i
                                class="fa fa-sign-in"></i>Sign in</a>
                    </li>
                    <li><a class="popup-text" href="#register-dialog" data-effect="mfp-move-from-top"><i
                                class="fa fa-edit"></i>Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<!-- LOGIN REGISTER LINKS CONTENT -->
<div id="login-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
    <i class="fa fa-sign-in dialog-icon"></i>
    <h3>Member Login</h3>
    <h5>Welcome back, friend. Login to get started</h5>
    <form class="dialog-form">
        <div class="form-group">
            <label>E-mail</label>
            <input type="text" placeholder="email@domain.com" class="form-control">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" placeholder="My secret password" class="form-control">
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox">Remember me
            </label>
        </div>
        <input type="submit" value="Sign in" class="btn btn-primary">
    </form>
    <ul class="dialog-alt-links">
        <li><a class="popup-text" href="#register-dialog" data-effect="mfp-zoom-out">Not member yet</a>
        </li>
        <li><a class="popup-text" href="#password-recover-dialog" data-effect="mfp-zoom-out">Forgot password</a>
        </li>
    </ul>
</div>


<div id="register-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
    <i class="fa fa-edit dialog-icon"></i>
    <h3>Member Register</h3>
    <h5>Ready to get best offers? Let's get started!</h5>
    <form class="dialog-form">
        <div class="form-group">
            <label>E-mail</label>
            <input type="text" placeholder="email@domain.com" class="form-control">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" placeholder="My secret password" class="form-control">
        </div>
        <div class="form-group">
            <label>Repeat Password</label>
            <input type="password" placeholder="Type your password again" class="form-control">
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label>Your Area</label>
                    <input type="password" placeholder="Boston" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Postal/Zip</label>
                    <input type="password" placeholder="12345" class="form-control">
                </div>
            </div>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox">Get hot offers via e-mail
            </label>
        </div>
        <input type="submit" value="Sign up" class="btn btn-primary">
    </form>
    <ul class="dialog-alt-links">
        <li><a class="popup-text" href="#login-dialog" data-effect="mfp-zoom-out">Already member</a>
        </li>
    </ul>
</div>


<div id="password-recover-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
    <i class="icon-retweet dialog-icon"></i>
    <h3>Password Recovery</h3>
    <h5>Fortgot your password? Don't worry we can deal with it</h5>
    <form class="dialog-form">
        <label>E-mail</label>
        <input type="text" placeholder="email@domain.com" class="span12">
        <input type="submit" value="Request new password" class="btn btn-primary">
    </form>
</div>
<!-- END LOGIN REGISTER LINKS CONTENT -->


<!-- TOP AREA -->
<div class="top-area">
    <div class="owl-carousel owl-slider" id="owl-carousel-slider" data-inner-pagination="true"
         data-white-pagination="true" data-nav="false">
        <div>
            <div class="bg-holder">
                <img src="/img/1200x480.png" alt="Image Alternative text" title="Bridge"/>
                <div class="bg-mask"></div>
                <div class="bg-front vert-center text-white text-center">
                    <h2 class="text-hero">London Weekends</h2>
                    <div class="countdown countdown-big" data-countdown="Jul 16, 2014 5:30:00"></div>
                    <a class="btn btn-lg btn-ghost btn-white" href="#">Save 90% Now</a>
                </div>
            </div>
        </div>
        <div>
            <div class="bg-holder">
                <img src="/img/1200x480.png" alt="Image Alternative text" title="4 Strokes of Fun"/>
                <div class="bg-mask"></div>
                <div class="bg-front vert-center text-white text-center">
                    <h2 class="text-hero">Adrenaline Madness</h2>
                    <div class="countdown countdown-big" data-countdown="Jul 12, 2014 5:30:00"></div>
                    <a class="btn btn-lg btn-ghost btn-white" href="#">Save 80% Now</a>
                </div>
            </div>
        </div>
        <div>
            <div class="bg-holder">
                <img src="/img/1200x480.png" alt="Image Alternative text"
                     title="LHOTEL PORTO BAY SAO PAULO luxury suite"/>
                <div class="bg-mask"></div>
                <div class="bg-front vert-center text-white text-center">
                    <h2 class="text-hero">Premium Apartments</h2>
                    <div class="countdown countdown-big" data-countdown="Jul 8, 2014 5:30:00"></div>
                    <a class="btn btn-lg btn-ghost btn-white" href="#">Save 50% Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END TOP AREA -->

<!-- SEARCH AREA -->
<form class="search-area form-group search-area-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-8 clearfix">
                <label><i class="fa fa-search"></i><span>I am searching for</span>
                </label>
                <div class="search-area-division search-area-division-input">
                    <input class="form-control" type="text" placeholder="Travel Vacation"/>
                </div>
            </div>
            <div class="col-md-3 clearfix">
                <label><i class="fa fa-map-marker"></i><span>In</span>
                </label>
                <div class="search-area-division search-area-division-location">
                    <input class="form-control" type="text" placeholder="Boston"/>
                </div>
            </div>
            <div class="col-md-1">
                <button class="btn btn-block btn-white search-btn" type="submit">Search</button>
            </div>
        </div>
    </div>
</form>
<!-- END SEARCH AREA -->

<div class="gap"></div>