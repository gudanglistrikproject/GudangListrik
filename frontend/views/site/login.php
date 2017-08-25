<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="modal-header pad-bottom">
    <ul class="cd-switcher">
        <li><a class="selected" href="#">Login</a></li>
        <li><a href="#" onclick="loginState('daftar')">Daftar</a></li>
    </ul>
</div>
<div class="modal-body">
    <?php
    $form = ActiveForm::begin(['id' => 'login-form',
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
            ->textInput(['autofocus' => true, 'id' => 'signin-email',
                'placeholder' => 'username',
                'class' => 'full-width has-padding has-border'])
            ->label('username', ['class' => 'image-replace cd-email'])
    ?>

    <?=
            $form->field($model, 'password')
            ->passwordInput(['id' => 'signin-password',
                'placeholder' => 'password',
                'class' => 'full-width has-padding has-border'])
            ->label('Password', ['class' => 'image-replace cd-password'])
    ?>

    <?=
            $form->field($model, 'rememberMe')
            ->checkbox()
            ->label('Remember Me', ['style' => 'margin-left: 20px'])
    ?>

    <p class="fieldset">
        <?= Html::input('submit', 'login-button', 'Login', ['class' => 'full-width']) ?>
    </p>

    <?php ActiveForm::end(); ?>

    <p class="cd-form-bottom-message"><a href="#0" style="font-weight: 700; background-color: black">Lupa Password ?</a></p>
    <!-- <a href="#0" class="cd-close-form">Close</a> -->

</div>
<style>
    .has-error{
        border: 2px solid #d76666 !important;
    }
</style>
<script>
    $(document).ready(function () {
        $("#signin-email").bind('focus blur select change click dblclick keypress keydown keyup', function () {
            $("#signin-email").removeClass('has-error');
        });
        $("#signin-password").bind('focus blur select change click dblclick keypress keydown keyup', function () {
            $("#signin-password").removeClass('has-error');
        });
        $('#login-form').on('submit', function () {
            var isLogin = false;
            if ($("#signin-email").val() == '')
            {
                toastr.error('username cannot blank', 'Fail', {timeOut: 5000});
                $("#signin-email").addClass('has-error');
            } 
            else if ($("#signin-password").val() == '')
            {
                toastr.error('password cannot blank', 'Fail', {timeOut: 5000});
                $("#signin-password").addClass('has-error');
            } 
            else
            {
                $.ajax({
                    type: 'POST',
                    url: "site/loginjson",
                    async: false,
                    data: {username: $("#signin-email").val(), password: $("#signin-password").val()},
                    success: function (data, status) {
                        if (data === 'Done')
                        {
                            toastr.success('Login Success', 'Success', {timeOut: 5000});
                            isLogin = true;
                        } else
                        {
                            if(data=='Incorrect username')
                            {
                                $("#signin-email").addClass('has-error');
                            }
                            else if(data=='Incorrect password')
                            {
                                $("#signin-password").addClass('has-error');
                            }
                            toastr.error('Login Fail: ' + data, 'Fail', {timeOut: 5000});
                        }
                    }
                });
            }
            return isLogin;
        });
    });
</script>