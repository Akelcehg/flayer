<?php

use yii\helpers\Html;
use yii\grid\GridView;

?>


<div class="gap"></div>

<div class="container">
    <div class="row">


        <p>
            <?= Html::a('Добавить флаер', ['create'], ['class' => 'btn btn-primary']) ?>
        </p>
        <div class="row">
            <div class="col-md-12">

                <div class="table-responsive">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        /*'filterModel' => $searchModel,*/
                        'summary' => '',
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            /*'_id',*/
                            //'image',
                            [
                                'attribute' => 'image',
                                'contentOptions' => ['class' => 'table-order-img'],
                                'format' => 'html',
                                'label' => 'Изображение флаера',
                                'value' => function ($data) {
                                    return Html::img($data['image']/*,
                                        ['style' => [
                                            'width' => '250px'
                                        ]
                                        ]*/);
                                },
                            ],
                            'name',
                            'category',
                            'type',
                            'discount',
                            // 'data_end',

                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                        'tableOptions' => [
                            'class' => 'table table-order',
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="gap"></div>

    </div>

</div>


<!--<h1><? /*= Html::encode($this->title) */ ?></h1>-->
<?php // echo $this->render('_search', ['model' => $searchModel]); ?>




