<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "level_user".
 *
 * @property integer $nID_level
 * @property string $vLevel_user
 * @property string $vDeskripsi
 * @property string $vOtoritastype
 * @property string $nRow_status
 */
class LevelUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'level_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vLevel_user'], 'required'],
            [['vOtoritastype', 'nRow_status'], 'string'],
            [['vLevel_user', 'vDeskripsi'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nID_level' => 'Id Level',
            'vLevel_user' => 'Level User',
            'vDeskripsi' => 'Deskripsi',
            'vOtoritastype' => 'Otoritastype',
            'nRow_status' => 'Row Status',
        ];
    }
}
