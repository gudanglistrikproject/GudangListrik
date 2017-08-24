<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\LevelUser */

$this->title = $model->nID_level;
$this->params['breadcrumbs'][] = ['label' => 'Level Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="level-user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nID_level], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nID_level], [
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
            'nID_level',
            'vLevel_user',
            'vDeskripsi',
        ],
    ]) ?>

</div>
