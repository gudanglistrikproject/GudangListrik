<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MsProduk */

$this->title = 'Create Ms Produk';
$this->params['breadcrumbs'][] = ['label' => 'Ms Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ms-produk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
