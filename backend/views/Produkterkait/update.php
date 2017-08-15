<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ProdukTerkait */

$this->title = 'Update Produk Terkait: ' . $model->nID_produk_terkait;
$this->params['breadcrumbs'][] = ['label' => 'Produk Terkaits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nID_produk_terkait, 'url' => ['view', 'id' => $model->nID_produk_terkait]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="produk-terkait-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
