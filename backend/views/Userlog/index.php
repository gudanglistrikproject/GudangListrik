<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-log-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User Log', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nID_userlog',
            'nIDuser',
            'vNama',
            'vDeskripsi',
            'dTgl_log',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
