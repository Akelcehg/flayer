<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FlayerGroup */

$this->title = 'Create Flayer Group';
$this->params['breadcrumbs'][] = ['label' => 'Flayer Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flayer-group-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
