<?php

namespace backend\models;

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
class UserAdmin extends \yii\db\ActiveRecord
{
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
            [['vUsername', 'vPassword', 'vNama', 'vOtoritas_admin'], 'required'],
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
}
