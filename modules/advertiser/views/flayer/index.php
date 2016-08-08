<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchFlayer */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Flayers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flayer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Flayer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'_id',*/
            //'image',
            [
                'attribute' => 'image',
                'format' => 'html',
                'label' => 'Изображение флаера',
                'value' => function ($data) {
                    return Html::img($data['image'],
                        ['style' => [
                            'width' => '250px'
                        ]
                        ]);
                },
            ],
            'name',
            'type',
            'discount',
            // 'data_end',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
