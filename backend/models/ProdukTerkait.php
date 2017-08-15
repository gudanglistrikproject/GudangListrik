<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "produk_terkait".
 *
 * @property integer $nID_produk_terkait
 * @property integer $nID_produk
 * @property string $vTingkatan
 * @property string $vDeskripsi
 * @property integer $nRowStatus
 */
class ProdukTerkait extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'produk_terkait';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nID_produk', 'nRowStatus'], 'required'],
            [['nID_produk', 'nRowStatus'], 'integer'],
            [['vDeskripsi'], 'string'],
            [['vTingkatan'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nID_produk_terkait' => 'N Id Produk Terkait',
            'nID_produk' => 'N Id Produk',
            'vTingkatan' => 'V Tingkatan',
            'vDeskripsi' => 'V Deskripsi',
            'nRowStatus' => 'N Row Status',
        ];
    }
}
