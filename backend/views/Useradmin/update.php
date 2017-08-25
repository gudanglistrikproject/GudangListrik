<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UserAdmin */

$this->title = 'Update User Admin: ' . $model->nID_admin;
$this->params['breadcrumbs'][] = ['label' => 'User Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nID_admin, 'url' => ['view', 'id' => $model->nID_admin]];
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
