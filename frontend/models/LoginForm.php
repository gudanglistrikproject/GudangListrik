<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use frontend\models\UserAdmin;

/**
 * Login form
 */
class LoginForm extends Model {

    public $username;
    public $password;
    public $rememberMe = true;
    private $_user;
    private $ret;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params) {
        $err = 'Incorrect username or password.';
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user) {
                $err = 'Incorrect username';
                $this->addError($attribute, 'Incorrect username or password.');
            } else {
                $userps = $this->getPassword();
                if (!$userps) {
                    $err = 'Incorrect password';
                    $this->addError($attribute, 'Incorrect username or password.');
                }
                else{
                    $err = 'done';
                }
            }
        }
        $this->ret=$err;
        return $err;
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return bool whether the user is logged in successfully
     */
    public function login() {
        $result = $this->validate();
        $result = $this->ret;
        if ($result=='done') {
            Yii::$app->user->login($this->getPassword(), $this->rememberMe ? 3600 * 24 * 30 : 0);
            return $result;
        } else {
            return $result;
        }
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser() {
        $model = UserAdmin::find()
                    ->where(['vUsername' => $this->username])->exists();
        return $model;
    }

    protected function getPassword() {
        if ($this->_user === null) {
            //$this->_user = User::findByUsername($this->username);
            $this->_user = UserAdmin::find()
                    ->where(['vUsername' => $this->username])
                    ->andWhere(['vPassword' => $this->password])
                    ->one();
        }

        return $this->_user;
    }

}
