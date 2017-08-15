<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Mainmenu */

$this->title = 'Update Mainmenu: ' . $model->nID;
$this->params['breadcrumbs'][] = ['label' => 'Mainmenus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nID, 'url' => ['view', 'id' => $model->nID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mainmenu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
