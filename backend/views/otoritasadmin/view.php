<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\OtoritasAdmin */

$this->title = $model->nID_otoritas_admin;
$this->params['breadcrumbs'][] = ['label' => 'Otoritas Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otoritas-admin-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nID_otoritas_admin], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nID_otoritas_admin], [
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
            'nID_otoritas_admin',
            'vOtoritas',
            'vDeskripsi',
        ],
    ]) ?>

</div>
