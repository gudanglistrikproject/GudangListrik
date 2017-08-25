<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SubKategori */

$this->title = $model->nID_subkategori;
$this->params['breadcrumbs'][] = ['label' => 'Sub Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">×</span></button>
	<h4 class="modal-title"><?= Html::encode($this->title) ?></h4>
</div>

<div class="modal-body">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nID_kategori',
            'vNama_subkategori',
            'sub_kategori_seo',
        ],
    ]) ?>

</div>
<div class="modal-footer">
	<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
