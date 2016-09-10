<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FlayerGroup */

$this->title = 'Update Flayer Group: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Flayer Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => (string)$model->_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="flayer-group-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
