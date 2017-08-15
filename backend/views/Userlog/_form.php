<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\UserLog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-log-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nIDuser')->textInput() ?>

    <?= $form->field($model, 'vNama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vDeskripsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dTgl_log')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
