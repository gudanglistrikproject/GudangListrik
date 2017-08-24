<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\LevelUser */

$this->title = 'Create Level User';
$this->params['breadcrumbs'][] = ['label' => 'Level Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="level-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
