<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Otoritas Admins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otoritas-admin-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Otoritas Admin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nID_otoritas_admin',
            'vOtoritas',
            'vDeskripsi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
