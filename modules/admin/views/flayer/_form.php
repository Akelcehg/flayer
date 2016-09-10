<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Flayer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="flayer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'image') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'category') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'discount') ?>

    <?= $form->field($model, 'data_end') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
