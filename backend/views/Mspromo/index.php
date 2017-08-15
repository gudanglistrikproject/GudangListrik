<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ms Promos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ms-promo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ms Promo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'vType_diskon',
            'vUser_level',
            'vJumlah_harga_total',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
