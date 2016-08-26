<?php
use yii\helpers\Url;
use yii\widgets\Menu;

?>
<div class="top-main-area top-main-area-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="index.html" class="logo mt5">
                    <img src="/img/logo-small.png" alt="Image Alternative text" title="Image Title">
                </a>
            </div>
            <div class="col-md-10">
                <div class="pull-right">

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


                    <?php Menu::widget([
                        'items' => $menuItems,
                        'options' => [
                            "class" => "login-register",
                        ],
                        'activateItems' => true,
                        'activateParents' => true,

                    ]); ?>

                    <ul class="login-register">

                        <li><a href="/"><i
                                    class="fa fa-edit"></i>Главная</a>
                        </li>
                        <li><a href="/flayer"><i
                                    class="fa fa-edit"></i>Флаера</a>
                        </li>
                        <li><a href="/admin"><i
                                    class="fa fa-edit"></i>Админка</a>
                        </li>
                        <li><a href="/advertiser/statistics"><i
                                    class="fa fa-edit"></i>Рекламодатель</a>
                        </li>
                        <li><a href="/manager"><i
                                    class="fa fa-edit"></i>Менеджер</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>