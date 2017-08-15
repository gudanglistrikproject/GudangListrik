<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\MsProduk */

$this->title = $model->nID_ms_produk;
$this->params['breadcrumbs'][] = ['label' => 'Ms Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ms-produk-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nID_ms_produk], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nID_ms_produk], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'vNama_produk',
            'nID_kategori',
            'nID_subkategori',
            'nID_brand',
            'vProduk_seo',
            'vDeskripsi:ntext',
            'vHarga',
            'vStok',
            'dTgl_masuk',
            'qty_min',
            'deBerat',
            'vPromo',
            'nID_warna',
            'nAktif',
        ],
    ]) ?>

</div>
