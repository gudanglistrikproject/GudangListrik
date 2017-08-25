<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Webinfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="webinfo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vNama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vDiv1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'vDiv2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'vDiv3')->textarea(['rows' => 6]) ?>

    <div class="modal-footer">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
    </div>

    <?php ActiveForm::end(); ?>

</div>
