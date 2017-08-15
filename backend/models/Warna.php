<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "warna".
 *
 * @property integer $nID_warna
 * @property string $vKode_warna
 * @property string $vNama_warna
 * @property string $vDeskripsi
 * @property string $nRow_status
 */
class Warna extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'warna';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vKode_warna', 'vNama_warna', 'nRow_status'], 'required'],
            [['vDeskripsi', 'nRow_status'], 'string'],
            [['vKode_warna'], 'string', 'max' => 20],
            [['vNama_warna'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nID_warna' => 'N Id Warna',
            'vKode_warna' => 'V Kode Warna',
            'vNama_warna' => 'V Nama Warna',
            'vDeskripsi' => 'V Deskripsi',
            'nRow_status' => 'N Row Status',
        ];
    }
}
