<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SlideShow */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slide-show-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'vJudul')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'vIsi')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'vPath_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vNama_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vType_image')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'vLink')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vStatus')->textInput(['maxlength' => true]) ?>

    <div class="modal-footer">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
    </div>

    <?php ActiveForm::end(); ?>

</div>
