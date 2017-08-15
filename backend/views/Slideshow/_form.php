<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SlideShow */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slide-show-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vPath_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vNama_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vType_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vStatus')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
