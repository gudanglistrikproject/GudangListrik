<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Warna */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="warna-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vKode_warna')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vNama_warna')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vDeskripsi')->textarea(['rows' => 6]) ?>

    <div class="modal-footer">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
    </div>

    <?php ActiveForm::end(); ?>

</div>
