<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\OtoritasAdmin */

$this->title = 'Create Otoritas Admin';
$this->params['breadcrumbs'][] = ['label' => 'Otoritas Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otoritas-admin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
