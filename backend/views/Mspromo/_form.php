<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MsPromo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ms-promo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vType_diskon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vUser_level')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vJumlah_harga_total')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
