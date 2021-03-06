<?php
use yii\helpers\Html;
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
<header class="main main-color">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <!-- MAIN NAVIGATION -->
                <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>

                <nav>

                    <?php
                    $menuItems = [['label' => 'Главная', 'url' => ['/'],
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
                        ['label' => 'Менеджер', 'url' => ['/manager']/*, 'visible' => Yii::$app->user->isGuest*/]];

                    ?>


                    <?= Menu::widget([
                        'items' => $menuItems,
                        'options' => [
                            "class" => "nav nav-pills flexnav",
                            "id" => 'flexnav'
                        ],
                        'activateItems' => true,
                        'activateParents' => true,

                    ]); ?>

                </nav>
                <!-- END MAIN NAVIGATION -->
            </div>
            <div class="col-md-6">
                <!-- LOGIN REGISTER LINKS -->
                <ul class="login-register">

                    <?php if (Yii::$app->user->isGuest) { ?>

                        <li><?= Html::a('Signup', '/register') ?></li>
                        <li><?= Html::a('Login', '/login') ?></li>

                    <?php } else { ?>
                        <li>
                            <?= Html::a('Выйти (' . Yii::$app->user->identity->email . ')', '/site/logout', ['data' => ['method' => 'post',]]) ?>
                        </li>
                    <?php } ?>

                    <!--<li><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top"><i
                                class="fa fa-sign-in"></i>Sign in</a>
                    </li>
                    <li><a class="popup-text" href="#register-dialog" data-effect="mfp-move-from-top"><i
                                class="fa fa-edit"></i>Sign up</a>
                    </li>-->
                </ul>
            </div>
        </div>
        <ul class="nav nav-pills flexnav flexnav-icons flexnav-center lg-screen" id="flexnav">
            <li><a href="#"><i class="fa fa-cutlery"></i>Food &amp; Drink</a>
            </li>
            <li><a href="#"><i class="fa fa-calendar"></i>Events</a>
            </li>
            <li><a href="#"><i class="fa fa-female"></i>Beauty</a>
            </li>
            <li><a href="#"><i class="fa fa-bolt"></i>Fitness</a>
            </li>
            <li><a href="#"><i class="fa fa-headphones"></i>Electronics</a>
            </li>
            <li><a href="#"><i class="fa fa-image"></i>Furniture</a>
            </li>
            <li><a href="#"><i class="fa fa-umbrella"></i>Fashion</a>
            </li>
            <li><a href="#"><i class="fa fa-shopping-cart"></i>Shopping</a>
            </li>
            <li><a href="#"><i class="fa fa-home"></i>Home &amp; Graden</a>
            </li>
        </ul>
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


<div class="gap"></div>