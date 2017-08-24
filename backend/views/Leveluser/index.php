<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Level Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="level-user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Level User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nID_level',
            'vLevel_user',
            'vDeskripsi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
