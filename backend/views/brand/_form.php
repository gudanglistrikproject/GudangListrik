<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Kategori;

//use backend\assets\AppAsset;

//AppAsset::register($this);

/* @var $this yii\web\View */
/* @var $model backend\models\Brand */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="brand-form">

    <?php $form = ActiveForm::begin([
            'id' => 'login-form'		
	]);
    ?>
        
    <?=
        Html::activeDropDownList($model, 'nID_kategori', 
        ArrayHelper::map(Kategori::find()->all(), 'nID_kategori','vNama_kategori'),['prompt'=>'---Select---','class'=>'form-control test']);
    ?>

    <?= $form->field($model, 'vBrand_seo')->textInput(['maxlength' => true,'id'=>'vBrand_seo']) ?>

    <?= $form->field($model, 'vInisial_brand')->textInput(['maxlength' => true,'id'=>'vInisial_brand']) ?>

    <?= $form->field($model, 'vNama_brand')->textInput(['maxlength' => true,'id'=>'vNama_brand']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>
    $(document).ready(function(){
        
        $('#login-form').on('submit',function(){
            var dropdown = $(".test");
            var vNama_brand = $("#vNama_brand").val();
            var selectedText = dropdown.find("option:selected").text();
            var nIDkategoriValue = dropdown.val();
            $.ajax({
            type: 'POST',
            url: "brand/brandcheckjson",
            async:false,
            data: {vNama_brand: vNama_brand ,nIDkategoriValue: nIDkategoriValue},
            success: function(data, status){
                    toastr.success('We do have the Kapua suite available.', 'Turtle Bay Resort', {timeOut: 5000})
                    if(data === 'Done')
                    {
                        isLogin = true;
                    }
                    //alert("Data: " + data + "\nStatus: " + status);
                }
            });
            return false;
        });
        //toastr.success('Login success', 'Success', {timeOut: 5000});  
        //return false;
    });
</script>