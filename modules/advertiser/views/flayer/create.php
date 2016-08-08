<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Flayer */

$this->title = 'Create Flayer';
$this->params['breadcrumbs'][] = ['label' => 'Flayers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flayer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
