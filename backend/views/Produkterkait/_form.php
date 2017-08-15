<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\MsProduk;

/* @var $this yii\web\View */
/* @var $model backend\models\ProdukTerkait */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produk-terkait-form">

    <?php $form = ActiveForm::begin(); ?>

	<?=
        Html::activeDropDownList($model, 'nID_produk', 
        ArrayHelper::map(MsProduk::find()->all(), 'nID_ms_produk','vNama_produk'),['prompt'=>'---Select---']);
    ?>

    <?= $form->field($model, 'vTingkatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vDeskripsi')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
