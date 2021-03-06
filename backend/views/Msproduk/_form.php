<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Kategori;
use backend\models\SubKategori;
use backend\models\Brand;
/* @var $this yii\web\View */
/* @var $model backend\models\MsProduk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ms-produk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vNama_produk')->textInput() ?>
    <div class="form-group">
        <?=
            Html::activeLabel($model, 'nID_kategori' ); 
        ?>
        <?=
            Html::activeDropDownList($model, 'nID_kategori', 
            ArrayHelper::map(Kategori::find()->all(), 'nID_kategori','vNama_kategori'),['prompt'=>'---Select---','class'=>'form-control']);
        ?>
    </div>
    <div class="form-group">
        <?=
            Html::activeLabel($model, 'nID_subkategori' ); 
        ?>
        <?=
            Html::activeDropDownList($model, 'nID_subkategori', 
            ArrayHelper::map(SubKategori::find()->all(), 'nID_subkategori','vNama_subkategori'),['prompt'=>'---Select---','class'=>'form-control test']);
        ?>
    </div>
    <div class="form-group">
        <?=
            Html::activeLabel($model, 'nID_brand' ); 
        ?>
        <?= 
            Html::activeDropDownList($model, 'nID_brand', 
            ArrayHelper::map(Brand::find()->all(), 'nID_brand','vNama_brand'),['prompt'=>'---Select---','class'=>'form-control test']);
        ?>
    </div>

    <?= $form->field($model, 'vProduk_seo')->textInput() ?>

    <?= $form->field($model, 'vDeskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'vHarga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vStok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dTgl_masuk')->textInput() ?>

    <?= $form->field($model, 'qty_min')->textInput() ?>

    <?= $form->field($model, 'deBerat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vPromo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nID_warna')->textInput() ?>

    <?= $form->field($model, 'nAktif')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '--Select Action---']) ?>

    <div class="modal-footer">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
    </div>

    <?php ActiveForm::end(); ?>

</div>
