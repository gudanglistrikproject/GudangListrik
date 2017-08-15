<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sub_kategori".
 *
 * @property integer $nID_subkategori
 * @property integer $nID_kategori
 * @property string $vNama_subkategori
 * @property string $sub_kategori_seo
 * @property string $nRowStatus
 */
class SubKategori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sub_kategori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nID_kategori', 'nRowStatus'], 'required'],
            [['nID_kategori'], 'integer'],
            [['nRowStatus'], 'string'],
            [['vNama_subkategori', 'sub_kategori_seo'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nID_subkategori' => 'N Id Subkategori',
            'nID_kategori' => 'N Id Kategori',
            'vNama_subkategori' => 'V Nama Subkategori',
            'sub_kategori_seo' => 'Sub Kategori Seo',
            'nRowStatus' => 'N Row Status',
        ];
    }
}
