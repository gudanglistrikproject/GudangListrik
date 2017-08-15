<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $nID
 * @property string $vUsername
 * @property string $vPassword
 * @property string $vNama_lengkap
 * @property string $vEmail
 * @property string $vLevel
 * @property string $vBlokir
 * @property string $vNo_telp
 * @property string $vID_session
 * @property string $nRowStatus
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vUsername', 'vPassword', 'vNama_lengkap', 'vEmail', 'vLevel', 'vNo_telp', 'vID_session'], 'required'],
            [['vBlokir', 'nRowStatus'], 'string'],
            [['vUsername'], 'string', 'max' => 100],
            [['vPassword'], 'string', 'max' => 255],
            [['vNama_lengkap', 'vEmail'], 'string', 'max' => 150],
            [['vLevel', 'vNo_telp'], 'string', 'max' => 20],
            [['vID_session'], 'string', 'max' => 21844],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nID' => 'N ID',
            'vUsername' => 'V Username',
            'vPassword' => 'V Password',
            'vNama_lengkap' => 'V Nama Lengkap',
            'vEmail' => 'V Email',
            'vLevel' => 'V Level',
            'vBlokir' => 'V Blokir',
            'vNo_telp' => 'V No Telp',
            'vID_session' => 'V Id Session',
            'nRowStatus' => 'N Row Status',
        ];
    }
}
