<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "otoritas_admin".
 *
 * @property integer $nID_otoritas_admin
 * @property string $vOtoritas
 * @property string $vDeskripsi
 * @property string $nRow_status
 */
class OtoritasAdmin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'otoritas_admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vOtoritas'], 'required'],
            [['nRow_status'], 'string'],
            [['vOtoritas', 'vDeskripsi'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nID_otoritas_admin' => 'N Id Otoritas Admin',
            'vOtoritas' => 'V Otoritas',
            'vDeskripsi' => 'V Deskripsi',
            'nRow_status' => 'N Row Status',
        ];
    }
}
