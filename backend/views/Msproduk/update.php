<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MsProduk */

$this->title = 'Update Ms Produk: ' . $model->nID_ms_produk;
$this->params['breadcrumbs'][] = ['label' => 'Ms Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nID_ms_produk, 'url' => ['view', 'id' => $model->nID_ms_produk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ms-produk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
