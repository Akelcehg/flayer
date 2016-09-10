<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \app\models\FlayerGroup;

/* @var $this yii\web\View */
/* @var $model app\models\Flayer */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="gap"></div>

<div class="container">
    <div class="row">

        <div class="row">
            <div class="col-md-12" style="background-color: white;">

                <div class="flayer-form">

                    <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'image') ?>

                    <?= $form->field($model, 'name') ?>

                    <?= $form->field($model, 'type') ?>

                    <?= $form->field($model, 'category')->dropDownList(
                        ArrayHelper::map(FlayerGroup::find()->all(), 'name', 'name'), ['prompt' => 'Категория флаера']); ?>

                    <?= $form->field($model, 'discount') ?>

                    <?= $form->field($model, 'description') ?>

                    <?= $form->field($model, 'data_end') ?>

                    <div class="form-group">
                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>

            </div>
        </div>
        <div class="gap"></div>

    </div>

</div>
