<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SubKategori */

$this->title = 'Update Sub Kategori: ' . $model->nID_subkategori;
$this->params['breadcrumbs'][] = ['label' => 'Sub Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nID_subkategori, 'url' => ['view', 'id' => $model->nID_subkategori]];
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
