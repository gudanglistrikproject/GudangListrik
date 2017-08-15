<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Warna */

$this->title = 'Update Warna: ' . $model->nID_warna;
$this->params['breadcrumbs'][] = ['label' => 'Warnas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nID_warna, 'url' => ['view', 'id' => $model->nID_warna]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="warna-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
