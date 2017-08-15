<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ProdukTerkait */

$this->title = 'Create Produk Terkait';
$this->params['breadcrumbs'][] = ['label' => 'Produk Terkaits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produk-terkait-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
