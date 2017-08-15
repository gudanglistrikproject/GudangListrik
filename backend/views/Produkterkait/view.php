<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ProdukTerkait */

$this->title = $model->nID_produk_terkait;
$this->params['breadcrumbs'][] = ['label' => 'Produk Terkaits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produk-terkait-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nID_produk_terkait], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nID_produk_terkait], [
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
            'nID_produk',
            'vTingkatan',
            'vDeskripsi:ntext',
        ],
    ]) ?>

</div>
