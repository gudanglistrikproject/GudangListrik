<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user_admin".
 *
 * @property integer $nID_admin
 * @property string $vUsername
 * @property string $vPassword
 * @property string $vNama
 * @property string $vOtoritas_admin
 * @property string $nRow_status
 */
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
/**
 * Login form
 */
class UserAdmin extends ActiveRecord implements IdentityInterface
{
    public $authKey;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nID_admin', 'vUsername', 'vPassword', 'vNama', 'vOtoritas_admin'], 'required'],
            [['nID_admin'], 'integer'],
            [['nRow_status'], 'string'],
            [['vUsername', 'vOtoritas_admin'], 'string', 'max' => 100],
            [['vPassword', 'vNama'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nID_admin' => 'N Id Admin',
            'vUsername' => 'V Username',
            'vPassword' => 'V Password',
            'vNama' => 'V Nama',
            'vOtoritas_admin' => 'V Otoritas Admin',
            'nRow_status' => 'N Row Status',
        ];
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->nID_admin;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }
}
