<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="modal-header pad-bottom">
    <ul class="cd-switcher">
        <li><a href="#" onclick="loginState('login')">Login</a></li>
        <li><a class="selected" href="#">Daftar</a></li>
    </ul>
</div>
<div class="modal-body">
    <?php
    $form = ActiveForm::begin(['id' => 'form-signup',
                'options' => [
                    'class' => 'cd-form',
                ],
                'fieldConfig' => [
                    'options' => [
                        'class' => 'fieldset',
                        'tag' => 'p'
                    ]
                ]
    ]);
    ?>

    <?=
            $form->field($model, 'username')
            ->textInput(['autofocus' => true, 'id' => 'signup-email',
                'placeholder'=>'username',
                 'class' => 'full-width has-padding has-border'])
            ->label('username', ['class' => 'image-replace cd-email'])
    ?>
    
    <?=
            $form->field($model, 'name')
            ->textInput(['autofocus' => true, 'id' => 'signup-name',
                'placeholder'=>'nama',
                'class' => 'full-width has-padding has-border'])
            ->label('nama', ['class' => 'image-replace cd-username'])
    ?>

    <?=
            $form->field($model, 'password')
            ->passwordInput(['id' => 'signup-password',
                'placeholder'=>'password',
                'class' => 'full-width has-padding has-border'])
            ->label('Password', ['class' => 'image-replace cd-password'])
    ?>

     <?=
            $form->field($model, 'password')
            ->passwordInput(['id' => 'signup-confrim-password',
                'name' => 'signup-confrim-password',
                'placeholder'=>'confirm password',
                'class' => 'full-width has-padding has-border'])
            ->label('Password', ['class' => 'image-replace cd-password'])
    ?>
    
    <?=
            $form->field($model, 'phone')
            ->textInput(['autofocus' => true, 'id' => 'signup-tlp',
                'placeholder'=>'phone',
                'class' => 'full-width has-padding has-border'])
            ->label('phone', ['class' => 'image-replace cd-tlp'])
    ?>
    <p class="fieldset">
        <?= Html::input('submit', 'signup-button', 'Daftar', ['class' => 'full-width has-padding']) ?>
    </p>

    <?php ActiveForm::end(); ?>

</div>