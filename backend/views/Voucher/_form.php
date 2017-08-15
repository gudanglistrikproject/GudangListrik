<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Voucher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="voucher-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vKode_voucher')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dTgl_awal')->textInput() ?>

    <?= $form->field($model, 'dTgl_akhir')->textInput() ?>

    <?= $form->field($model, 'vType')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nAktif')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '---Select Action---']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
