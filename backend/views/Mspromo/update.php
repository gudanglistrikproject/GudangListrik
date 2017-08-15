<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MsPromo */

$this->title = 'Update Ms Promo: ' . $model->nID;
$this->params['breadcrumbs'][] = ['label' => 'Ms Promos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nID, 'url' => ['view', 'id' => $model->nID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ms-promo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
