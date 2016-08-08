<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Flayer */

$this->title = 'Update Flayer: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Flayers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => (string)$model->_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="flayer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
