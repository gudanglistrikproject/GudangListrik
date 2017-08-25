<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\LevelUser;

/* @var $this yii\web\View */
/* @var $model backend\models\UserAdmin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-admin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vUsername')->textInput(['maxlength' => true,'id'=>'vUsername']) ?>

    <?= $form->field($model, 'vPassword')->textInput(['maxlength' => true,'id'=>'vUsername']) ?>

    <?= $form->field($model, 'vNama')->textInput(['maxlength' => true,'id'=>'vNama']) ?>
    
    <div class="form-group">
        <?=
        Html::activeLabel($model, 'vOtoritas_admin' ); 
        ?>
        <?=
            Html::activeDropDownList($model, 'vOtoritas_admin',
            ArrayHelper::map(LevelUser::find()->all(), 'nID_level','vLevel_user'),['prompt'=>'---Select---','class'=>'form-control userAdmin']);
        ?>
        <div class="help-block"></div>
    </div>
    
	
    <div class="modal-footer">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
    </div>

    <?php ActiveForm::end(); ?>

</div>
