<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Mainmenu */

$this->title = $model->nID;
$this->params['breadcrumbs'][] = ['label' => 'Mainmenus', 'url' => ['index']];
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
            'vNama_menu',
            'vLink',
            'nAktif',
        ],
    ]) ?>

</div>
<div class="modal-footer">
	<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>