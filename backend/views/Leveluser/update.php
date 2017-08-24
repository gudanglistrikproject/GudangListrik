<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\LevelUser */

$this->title = 'Update Level User: ' . $model->nID_level;
$this->params['breadcrumbs'][] = ['label' => 'Level Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nID_level, 'url' => ['view', 'id' => $model->nID_level]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="level-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
