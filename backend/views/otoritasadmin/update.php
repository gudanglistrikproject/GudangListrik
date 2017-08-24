<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OtoritasAdmin */

$this->title = 'Update Otoritas Admin: ' . $model->nID_otoritas_admin;
$this->params['breadcrumbs'][] = ['label' => 'Otoritas Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nID_otoritas_admin, 'url' => ['view', 'id' => $model->nID_otoritas_admin]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="otoritas-admin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
