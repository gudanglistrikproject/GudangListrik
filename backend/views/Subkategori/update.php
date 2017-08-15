<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SubKategori */

$this->title = 'Update Sub Kategori: ' . $model->nID_subkategori;
$this->params['breadcrumbs'][] = ['label' => 'Sub Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nID_subkategori, 'url' => ['view', 'id' => $model->nID_subkategori]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sub-kategori-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
