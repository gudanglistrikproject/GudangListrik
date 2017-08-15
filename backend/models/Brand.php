<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "brand".
 *
 * @property integer $nID_brand
 * @property integer $nID_kategori
 * @property string $vBrand_seo
 * @property string $vInisial_brand
 * @property string $vNama_brand
 * @property string $vRowStatus
 */
class Brand extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'brand';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nID_kategori'], 'required'],
            [['nID_kategori'], 'integer'],
            [['vRowStatus'], 'string'],
            [['vBrand_seo', 'vNama_brand'], 'string', 'max' => 200],
            [['vInisial_brand'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nID_brand' => 'N Id Brand',
            'nID_kategori' => 'N Id Kategori',
            'vBrand_seo' => 'V Brand Seo',
            'vInisial_brand' => 'V Inisial Brand',
            'vNama_brand' => 'V Nama Brand',
            'vRowStatus' => 'V Row Status',
        ];
    }
}
