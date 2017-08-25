<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\LevelUser */

$this->title = 'Update Level User: ' . $model->nID_level;
$this->params['breadcrumbs'][] = ['label' => 'Level Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nID_level, 'url' => ['view', 'id' => $model->nID_level]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">×</span></button>
	<h4 class="modal-title"><?= Html::encode($this->title) ?></h4>
</div>
<div class="modal-body">
	<?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
