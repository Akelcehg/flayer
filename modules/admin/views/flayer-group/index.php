<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchFlayerGroup */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Flayer Groups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flayer-group-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Flayer Group', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'options' => ['data-pjax' => true ],
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            '_id',
            'icon',
            'name',
            'count',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
