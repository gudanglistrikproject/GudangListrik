<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MsProduk */

$this->title = 'Update Ms Produk: ' . $model->nID_ms_produk;
$this->params['breadcrumbs'][] = ['label' => 'Ms Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nID_ms_produk, 'url' => ['view', 'id' => $model->nID_ms_produk]];
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
