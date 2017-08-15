<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MsPromo */

$this->title = 'Create Ms Promo';
$this->params['breadcrumbs'][] = ['label' => 'Ms Promos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ms-promo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
