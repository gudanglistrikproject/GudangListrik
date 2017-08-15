<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user_log".
 *
 * @property integer $nID_userlog
 * @property integer $nIDuser
 * @property string $vNama
 * @property string $vDeskripsi
 * @property string $dTgl_log
 */
class UserLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nIDuser', 'vNama', 'dTgl_log'], 'required'],
            [['nIDuser'], 'integer'],
            [['dTgl_log'], 'safe'],
            [['vNama'], 'string', 'max' => 250],
            [['vDeskripsi'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nID_userlog' => 'N Id Userlog',
            'nIDuser' => 'N Iduser',
            'vNama' => 'V Nama',
            'vDeskripsi' => 'V Deskripsi',
            'dTgl_log' => 'D Tgl Log',
        ];
    }
}
