<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="global-wrap">


    <!-- //////////////////////////////////
//////////////MAIN HEADER/////////////
////////////////////////////////////-->
    <div class="top-main-area text-center">
        <div class="container">
            <a href="index.html" class="logo mt5">
                <img src="img/logo-small-dark.png" alt="Image Alternative text" title="Image Title"/>
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
                        <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                            <li class="active"><a href="index.html">Home</a>
                                <ul>
                                    <li><a href="index-shop-layout-1.html">Shop Layout</a>
                                        <ul>
                                            <li><a href="index-shop-layout-1.html">Layout 1</a>
                                            </li>
                                            <li><a href="index-shop-layout-2.html">Layout 2</a>
                                            </li>
                                            <li><a href="index-shop-layout-3.html">Layout 3</a>
                                            </li>
                                            <li><a href="index-shop-layout-4.html">Layout 4</a>
                                            </li>
                                            <li><a href="index-shop-layout-5.html">Layout 5</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="active"><a href="index-coupon-layout-1.html">Coupon Layout</a>
                                        <ul>
                                            <li><a href="index-coupon-layout-1.html">Layout 1</a>
                                            </li>
                                            <li><a href="index-coupon-layout-2.html">Layout 2</a>
                                            </li>
                                            <li><a href="index-coupon-layout-3.html">Layout 3</a>
                                            </li>
                                            <li><a href="index.html">Layout 4</a>
                                            </li>
                                            <li><a href="index-coupon-layout-5.html">Layout 5</a>
                                            </li>
                                            <li class="active"><a href="index-coupon-layout-6.html">Layout 6</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="index-header-layout-1.html">Headers</a>
                                        <ul>
                                            <li><a href="index-header-layout-1.html">Layout 1</a>
                                            </li>
                                            <li><a href="index-header-layout-2.html">Layout 2</a>
                                            </li>
                                            <li><a href="index-header-layout-3.html">Layout 3</a>
                                            </li>
                                            <li><a href="index-header-layout-4.html">Layout 4</a>
                                            </li>
                                            <li><a href="index-header-layout-5.html">Layout 5</a>
                                            </li>
                                            <li><a href="index-header-logged-user.html">Logged User</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="category-page-shop.html">Category</a>
                                <ul>
                                    <li><a href="category-page-shop.html">Shop</a>
                                    </li>
                                    <li><a href="category-page-coupon.html">Coupon</a>
                                    </li>
                                    <li><a href="category-page-thumbnails-shop-layout-1.html">Thumbnails</a>
                                        <ul>
                                            <li><a href="category-page-thumbnails-shop-layout-1.html">Shop</a>
                                                <ul>
                                                    <li><a href="category-page-thumbnails-shop-layout-1.html">Layout
                                                            1</a>
                                                    </li>
                                                    <li><a href="category-page-thumbnails-shop-layout-2.html">Layout
                                                            2</a>
                                                    </li>
                                                    <li><a href="category-page-thumbnails-shop-layout-3.html">Layout
                                                            3</a>
                                                    </li>
                                                    <li><a href="category-page-thumbnails-shop-layout-4.html">layout
                                                            4</a>
                                                    </li>
                                                    <li><a href="category-page-thumbnails-shop-layout-5.html">Layout
                                                            5</a>
                                                    </li>
                                                    <li><a href="category-page-thumbnails-shop-layout-6.html">Layout
                                                            6</a>
                                                    </li>
                                                    <li><a href="category-page-thumbnails-shop-horizontal.html">Horizontal</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="category-page-thumbnails-coupon-layout-1.html">Coupon</a>
                                                <ul>
                                                    <li><a href="category-page-thumbnails-coupon-layout-1.html">Layout
                                                            1</a>
                                                    </li>
                                                    <li><a href="category-page-thumbnails-coupon-layout-2.html">Layout
                                                            2</a>
                                                    </li>
                                                    <li><a href="category-page-thumbnails-coupon-layout-3.html">Layout
                                                            3</a>
                                                    </li>
                                                    <li><a href="category-page-thumbnails-coupon-layout-4.html">Layout
                                                            4</a>
                                                    </li>
                                                    <li><a href="category-page-thumbnails-coupon-layout-5.html">Layout
                                                            5</a>
                                                    </li>
                                                    <li><a href="category-page-thumbnails-coupon-layout-6.html">Layout
                                                            6</a>
                                                    </li>
                                                    <li><a href="category-page-thumbnails-coupon-layout-7.html">Layout
                                                            7</a>
                                                    </li>
                                                    <li><a href="category-page-thumbnails-coupon-layout-8.html">Layout
                                                            8</a>
                                                    </li>
                                                    <li><a href="category-page-thumbnails-coupon-horizontal.html">Horizontal</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="category-page-thumbnails-breadcrumbs.html">Breadcrumbs</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="product-shop-sidebar.html">Product </a>
                                <ul>
                                    <li><a href="product-shop-sidebar.html">Shop</a>
                                        <ul>
                                            <li><a href="product-shop-sidebar.html">Sidebar</a>
                                            </li>
                                            <li><a href="product-shop-sidebar-left.html">Sidebar Left</a>
                                            </li>
                                            <li><a href="product-shop-centered.html">Centered</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="product-coupon-default.html">Coupon</a>
                                        <ul>
                                            <li><a href="product-coupon-default.html">Default</a>
                                            </li>
                                            <li><a href="product-coupon-meta-right.html">Meta right</a>
                                            </li>
                                            <li><a href="product-coupon-gallery.html">Gallery</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="features-typography.html">Features</a>
                                <ul>
                                    <li><a href="features-typography.html">Typography</a>
                                    </li>
                                    <li><a href="features-elements.html">Elements</a>
                                    </li>
                                    <li><a href="features-grid.html">Grid</a>
                                    </li>
                                    <li><a href="features-icons.html">Icons</a>
                                    </li>
                                    <li><a href="features-image-hover.html">Image Hovers</a>
                                    </li>
                                    <li><a href="features-sliders.html">Sliders</a>
                                    </li>
                                    <li><a href="features-media.html">Media</a>
                                    </li>
                                    <li><a href="features-lightbox.html">Lightbox</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="blog-sidebar-right.html">Blog</a>
                                <ul>
                                    <li><a href="blog-sidebar-right.html">Sidebar Right</a>
                                    </li>
                                    <li><a href="blog-sidebar-left.html">Sidebar Left</a>
                                    </li>
                                    <li><a href="blog-full-width.html">Full Width</a>
                                    </li>
                                    <li><a href="post-sidebar-right.html">Post</a>
                                        <ul>
                                            <li><a href="post-sidebar-right.html">Sidebar Right</a>
                                            </li>
                                            <li><a href="post-sidebar-left.html">Sidebar Left</a>
                                            </li>
                                            <li><a href="post-full-width.html">Full Width</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="page-full-width.html">Pages</a>
                                <ul>
                                    <li><a href="page-my-account-settings.html">My Account</a>
                                        <ul>
                                            <li><a href="page-my-account-settings.html">Settings</a>
                                            </li>
                                            <li><a href="page-my-account-addresses.html">Address Book</a>
                                            </li>
                                            <li><a href="page-my-account-orders.html">Orders History</a>
                                            </li>
                                            <li><a href="page-my-account-wishlist.html">Wishlist</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="page-full-width.html">Full Width</a>
                                    </li>
                                    <li><a href="page-sidebar-right.html">Sidebar Right</a>
                                    </li>
                                    <li><a href="page-sidebar-left.html">Sidebar Left</a>
                                    </li>
                                    <li><a href="page-faq.html">Faq</a>
                                    </li>
                                    <li><a href="page-about-us.html">About us</a>
                                    </li>
                                    <li><a href="page-team.html">Team</a>
                                    </li>
                                    <li><a href="page-cart.html">Shopping Cart</a>
                                    </li>
                                    <li><a href="page-checkout.html">Checkout</a>
                                    </li>
                                    <li><a href="page-404.html">404</a>
                                    </li>
                                    <li><a href="page-search.html">Search</a>
                                        <ul>
                                            <li><a href="page-search-black.html">Black</a>
                                            </li>
                                            <li><a href="page-search-white.html">White</a>
                                            </li>
                                            <li><a href="page-search-sticky.html">Sticky</a>
                                            </li>
                                            <li><a href="page-search-no-search.html">No Search</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="page-contact.html">Contact</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
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
                                            <img src="img/70x70.png" alt="Image Alternative text" title="AMaze"/>
                                            <h5>New Glass Collection</h5><span
                                                class="shopping-cart-item-price">$150</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product-shop-sidebar.html">
                                            <img src="img/70x70.png" alt="Image Alternative text" title="Gamer Chick"/>
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
                    <img src="img/1200x480.png" alt="Image Alternative text" title="Bridge"/>
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
                    <img src="img/1200x480.png" alt="Image Alternative text" title="4 Strokes of Fun"/>
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
                    <img src="img/1200x480.png" alt="Image Alternative text"
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


    <!-- //////////////////////////////////
//////////////END MAIN HEADER//////////
////////////////////////////////////-->


    <!-- //////////////////////////////////
//////////////PAGE CONTENT/////////////
////////////////////////////////////-->

    <div class="container">
        <?= $content ?>
    </div>


    <!-- //////////////////////////////////
//////////////END PAGE CONTENT/////////
////////////////////////////////////-->


    <!-- //////////////////////////////////
//////////////MAIN FOOTER//////////////
////////////////////////////////////-->

    <footer class="main">
        <div class="footer-top-area">
            <div class="container">
                <div class="row row-wrap">
                    <div class="col-md-3">
                        <a href="index.html">
                            <img src="img/logo.png" alt="logo" title="logo" class="logo">
                        </a>
                        <ul class="list list-social">
                            <li>
                                <a class="fa fa-facebook box-icon" href="#" data-toggle="tooltip" title="Facebook"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter box-icon" href="#" data-toggle="tooltip" title="Twitter"></a>
                            </li>
                            <li>
                                <a class="fa fa-flickr box-icon" href="#" data-toggle="tooltip" title="Flickr"></a>
                            </li>
                            <li>
                                <a class="fa fa-linkedin box-icon" href="#" data-toggle="tooltip" title="LinkedIn"></a>
                            </li>
                            <li>
                                <a class="fa fa-tumblr box-icon" href="#" data-toggle="tooltip" title="Tumblr"></a>
                            </li>
                        </ul>
                        <p>Posuere neque vivamus vestibulum neque commodo conubia phasellus sociosqu conubia eros
                            feugiat at imperdiet proin id hac commodo id sed</p>
                    </div>
                    <div class="col-md-3">
                        <h4>Sign Up to the Newsletter</h4>
                        <div class="box">
                            <form>
                                <div class="form-group mb10">
                                    <label>E-mail</label>
                                    <input type="text" class="form-control"/>
                                </div>
                                <p class="mb10">Aenean tempor dolor tempor neque at sem</p>
                                <input type="submit" class="btn btn-primary" value="Sign Up"/>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4>Couponia on Twitter</h4>
                        <!-- START TWITTER -->
                        <div class="twitter-ticker" id="twitter-ticker"></div>
                        <!-- END TWITTER -->
                    </div>
                    <div class="col-md-3">
                        <h4>Recent News</h4>
                        <ul class="thumb-list">
                            <li>
                                <a href="#">
                                    <img src="img/70x70.png" alt="Image Alternative text"
                                         title="Urbex Esch/Lux with Laney and Laaaaag"/>
                                </a>
                                <div class="thumb-list-item-caption">
                                    <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                    <h5 class="thumb-list-item-title"><a href="#">Semper dui</a></h5>
                                    <p class="thumb-list-item-desciption">Justo cum est felis suspendisse</p>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/70x70.png" alt="Image Alternative text" title="AMaze"/>
                                </a>
                                <div class="thumb-list-item-caption">
                                    <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                    <h5 class="thumb-list-item-title"><a href="#">Sapien eu</a></h5>
                                    <p class="thumb-list-item-desciption">Himenaeos vitae faucibus ligula commodo</p>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/70x70.png" alt="Image Alternative text"
                                         title="The Hidden Power of the Heart"/>
                                </a>
                                <div class="thumb-list-item-caption">
                                    <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                    <h5 class="thumb-list-item-title"><a href="#">Congue diam</a></h5>
                                    <p class="thumb-list-item-desciption">Torquent potenti consectetur gravida diam</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p>Copyright © 2014, Your Store, All Rights Reserved</p>
                    </div>
                    <div class="col-md-6 col-md-offset-2">
                        <div class="pull-right">
                            <ul class="list-inline list-payment">
                                <li>
                                    <img src="img/payment/american-express-curved-32px.png" alt="Image Alternative text"
                                         title="Image Title"/>
                                </li>
                                <li>
                                    <img src="img/payment/cirrus-curved-32px.png" alt="Image Alternative text"
                                         title="Image Title"/>
                                </li>
                                <li>
                                    <img src="img/payment/discover-curved-32px.png" alt="Image Alternative text"
                                         title="Image Title"/>
                                </li>
                                <li>
                                    <img src="img/payment/ebay-curved-32px.png" alt="Image Alternative text"
                                         title="Image Title"/>
                                </li>
                                <li>
                                    <img src="img/payment/maestro-curved-32px.png" alt="Image Alternative text"
                                         title="Image Title"/>
                                </li>
                                <li>
                                    <img src="img/payment/mastercard-curved-32px.png" alt="Image Alternative text"
                                         title="Image Title"/>
                                </li>
                                <li>
                                    <img src="img/payment/visa-curved-32px.png" alt="Image Alternative text"
                                         title="Image Title"/>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
