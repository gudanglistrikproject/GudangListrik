<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ms Produks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ms-produk-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ms Produk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'vNama_produk',
            'nID_kategori',
            'nID_subkategori',
            'nID_brand',
            // 'vProduk_seo',
            // 'vDeskripsi:ntext',
            // 'vHarga',
            // 'vStok',
            // 'dTgl_masuk',
            // 'qty_min',
            // 'deBerat',
            // 'vPromo',
            // 'nID_warna',
            // 'nAktif',
            // 'nRow_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
