<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\OtoritasAdmin;

/* @var $this yii\web\View */
/* @var $model backend\models\UserAdmin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-admin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vUsername')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vPassword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vNama')->textInput(['maxlength' => true]) ?>

	<?=
        Html::activeDropDownList($model, 'vOtoritas_admin', 
        ArrayHelper::map(OtoritasAdmin::find()->all(), 'nID_otoritas_admin','vOtoritas'),['prompt'=>'---Select---']);
    ?>
	
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
