<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\MsPromo */

$this->title = $model->nID;
$this->params['breadcrumbs'][] = ['label' => 'Ms Promos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ms-promo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nID], [
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
            'vType_diskon',
            'vUser_level',
            'vJumlah_harga_total',
        ],
    ]) ?>

</div>
