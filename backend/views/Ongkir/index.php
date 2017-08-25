<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Delivery Cost List';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brand-index">
    <div class="box">
        <div class="box-header with-border">
            <form action="/gudanglistrik/admin/ongkir" method="POST">
                <input id="form-token" type="hidden" name="<?=Yii::$app->request->csrfParam?>"
           value="<?=Yii::$app->request->csrfToken?>"/>
                <p class="pull-left">
                    <?= Html::label('City From', 'ddlCF', ['id' => 'lblCF']) ?>
                    <?= Html::dropDownList('ddlCF', null, $ddlCity, ['id' => 'ddlCF', 'class' => 'form-control'])
                    ?>
                </p>
                <p class="pull-left">
                    <?= Html::label('City To', 'ddlCT', ['id' => 'lblCT']) ?>
                    <?= Html::dropDownList('ddlCT', null, $ddlCity, ['id' => 'ddlCT', 'class' => 'form-control'])
                    ?>
                </p>
                <p class="pull-left">
                    <?= Html::label('Courier', 'ddlCour', ['id' => 'lblCour']) ?>
                    <?= Html::dropDownList('ddlCour', null, $ddlCour, ['id' => 'ddlCour', 'class' => 'form-control'])
                    ?>
                </p>
                <p class="pull-left">
                    <?= Html::label('Weight', 'txtweight', ['id' => 'lblweight']) ?>
                    <?=
                    Html::textInput('txtweight', null, ['id' => 'txtweight',
                        'placeholder' => 'Weight',
                        'class' => 'form-control'])
                    ?>
                </p>
                <p class="pull-right">
                    <?=
                    Html::submitInput('Refresh', ['id' => 'btnRefresh',
                        'class' => 'btn btn-success',
                        'style' => 'margin-top:25px'])
                    ?>
                </p>
            </form>
        </div>
        <!-- /.box-header -->
        <div class="box-body" style="overflow-x: auto">
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'city_name',
                    'province_name',
                    'postal_code',
                    'dest_name',
                    'dest_province_name',
                    'dest_postal_code',
                    'courier_name',
                    'service',
                    'weight',
                    'price',
                    ['class' => 'yii\grid\ActionColumn',
                    'visible' => false],
                ],
            ]);
            ?>
        </div>
    </div>
</div>