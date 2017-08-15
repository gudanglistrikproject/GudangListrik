<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ms_promo".
 *
 * @property integer $nID
 * @property string $vType_diskon
 * @property string $vUser_level
 * @property string $vJumlah_harga_total
 * @property string $nRowStatus
 */
class MsPromo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ms_promo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vType_diskon', 'vUser_level'], 'required'],
            [['nRowStatus'], 'string'],
            [['vType_diskon'], 'string', 'max' => 200],
            [['vUser_level', 'vJumlah_harga_total'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nID' => 'N ID',
            'vType_diskon' => 'V Type Diskon',
            'vUser_level' => 'V User Level',
            'vJumlah_harga_total' => 'V Jumlah Harga Total',
            'nRowStatus' => 'N Row Status',
        ];
    }
}
