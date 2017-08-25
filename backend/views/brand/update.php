<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Brand */

$this->title = 'Update Brand: ' . $model->nID_brand;
$this->params['breadcrumbs'][] = ['label' => 'Brands', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nID_brand, 'url' => ['view', 'id' => $model->nID_brand]];
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

<!--<div class="modal-footer">
	<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
</div>-->
