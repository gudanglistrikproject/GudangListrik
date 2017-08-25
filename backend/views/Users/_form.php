<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\LevelUser;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vUsername')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vPassword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vNama_lengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vEmail')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?=
        Html::activeLabel($model, 'vLevel' ); 
        ?>
        <?=
            Html::activeDropDownList($model, 'vLevel',
            ArrayHelper::map(LevelUser::find()->all(), 'nID_level','vLevel_user'),['prompt'=>'---Select---','class'=>'form-control']);
        ?>
        <div class="help-block"></div>
    </div>

    <?= $form->field($model, 'vBlokir')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '---Select---']) ?>

    <?= $form->field($model, 'vNo_telp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vID_session')->textInput(['maxlength' => true]) ?>

    <div class="modal-footer">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
    </div>

    <?php ActiveForm::end(); ?>

</div>
