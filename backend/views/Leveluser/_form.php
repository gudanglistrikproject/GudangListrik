<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\LevelUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="level-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vLevel_user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vDeskripsi')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'vOtoritastype')->dropDownList([ 'Admin' => 'Admin', 'User' => 'User', ], ['prompt' => '---Select Action---']) ?>

    <div class="modal-footer">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
    </div>

    <?php ActiveForm::end(); ?>

</div>
