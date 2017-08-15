<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Kategori;
/* @var $this yii\web\View */
/* @var $model backend\models\SubKategori */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sub-kategori-form">

    <?php $form = ActiveForm::begin(); ?>

     <?=
        Html::activeDropDownList($model, 'nID_kategori', 
        ArrayHelper::map(Kategori::find()->all(), 'nID_kategori','vNama_kategori'),['prompt'=>'---Select---']);
    ?>

    <?= $form->field($model, 'vNama_subkategori')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_kategori_seo')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
