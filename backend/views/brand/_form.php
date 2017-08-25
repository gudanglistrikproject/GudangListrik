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
            'id' => 'created-form'		
	]);
    ?>
    <div class="form-group">
        <?=
        Html::activeLabel($model, 'nID_kategori' ); 
        ?>
        <?=
            Html::activeDropDownList($model, 'nID_kategori', 
            ArrayHelper::map(Kategori::find()->all(), 'nID_kategori','vNama_kategori'),['prompt'=>'---Select---','class'=>'form-control test']);
        ?>
    </div>
    <?= $form->field($model, 'vBrand_seo')->textInput(['maxlength' => true,'id'=>'vBrand_seo']) ?>

    <?= $form->field($model, 'vInisial_brand')->textInput(['maxlength' => true,'id'=>'vInisial_brand']) ?>

    <?= $form->field($model, 'vNama_brand')->textInput(['maxlength' => true,'id'=>'vNama_brand']) ?>

    <div class="modal-footer">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>
    $(document).ready(function(){
        
        $('#created-form').on('submit',function(){
            var AddBrand = false;
            var dropdown = $(".test");
            var vNama_brand = $("#vNama_brand").val();
            var selectedText = dropdown.find("option:selected").text();
            var nIDkategoriValue = dropdown.val();
            alert(vNama_brand);
            alert(nIDkategoriValue);
            $.ajax({
            type: 'POST',
            url: "brand/brandcheckjson",
            async:false,
            data: {vNama_brand: vNama_brand ,nIDkategoriValue: nIDkategoriValue},
            success: function(data){
                    
                    if(data === 'Yes')
                    {
                        alert(data);
                        alert(status);
                        toastr.error('Login Fail:'+ data, 'Fail', {timeOut: 5000});
                        AddBrand = false;
                    }
                    else{
                        toastr.success('Success', 'Success', {timeOut: 5000});
                        AddBrand = true;
                    }
                    
                }
            });
            return AddBrand;
;
        });
        //toastr.success('Login success', 'Success', {timeOut: 5000});  
        //return false;
    });
</script>