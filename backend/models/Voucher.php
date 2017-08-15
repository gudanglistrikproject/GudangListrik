<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "voucher".
 *
 * @property integer $nID
 * @property string $vKode_voucher
 * @property string $dTgl_awal
 * @property string $dTgl_akhir
 * @property string $vType
 * @property string $nAktif
 * @property string $nRowStatus
 */
class Voucher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'voucher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vKode_voucher'], 'required'],
            [['dTgl_awal', 'dTgl_akhir'], 'safe'],
            [['nAktif', 'nRowStatus'], 'string'],
            [['vKode_voucher'], 'string', 'max' => 100],
            [['vType'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nID' => 'N ID',
            'vKode_voucher' => 'V Kode Voucher',
            'dTgl_awal' => 'D Tgl Awal',
            'dTgl_akhir' => 'D Tgl Akhir',
            'vType' => 'V Type',
            'nAktif' => 'N Aktif',
            'nRowStatus' => 'N Row Status',
        ];
    }
}
