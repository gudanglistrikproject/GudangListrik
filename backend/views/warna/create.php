<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Warna */

$this->title = 'Create Warna';
$this->params['breadcrumbs'][] = ['label' => 'Warnas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warna-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
