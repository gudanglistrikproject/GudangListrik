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
    
    <?=
            $form->field($model, 'dTgl_awal')
            ->textInput(['id' => 'dtgl1',
                'class' => 'form-control form_datetime'])
            ->label('Taggal Awal')
    ?>
    <?= $form->field($model, 'dTgl_awal')->textInput() ?>

    <?= $form->field($model, 'dTgl_akhir')->textInput() ?>
    
    <?= $form->field($model, 'vType')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nAktif')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '---Select Action---']) ?>
    
    <div class="modal-footer">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>
    
    $(document).ready(function () {
        $(".form_datetime").datetimepicker({
            format: "dd-mm-yyyy - hh:ii",
            autoclose: true,
            todayBtn: true,
            pickerPosition: "bottom-right"
        });
    });
</script>