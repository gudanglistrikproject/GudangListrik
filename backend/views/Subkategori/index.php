<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sub Kategoris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-kategori-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sub Kategori', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nID_kategori',
            'vNama_subkategori',
            'sub_kategori_seo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
