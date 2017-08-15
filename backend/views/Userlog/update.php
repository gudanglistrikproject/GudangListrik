<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UserLog */

$this->title = 'Update User Log: ' . $model->nID_userlog;
$this->params['breadcrumbs'][] = ['label' => 'User Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nID_userlog, 'url' => ['view', 'id' => $model->nID_userlog]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-log-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
