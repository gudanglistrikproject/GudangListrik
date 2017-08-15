<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kategori".
 *
 * @property integer $nID_kategori
 * @property string $vNama_kategori
 * @property string $kategori_seo
 * @property string $vLink
 * @property integer $parent_id
 * @property string $nRowStatus
 */
class Kategori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kategori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vNama_kategori'], 'required'],
            [['parent_id'], 'integer'],
            [['nRowStatus'], 'string'],
            [['vNama_kategori', 'kategori_seo'], 'string', 'max' => 150],
            [['vLink'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nID_kategori' => 'N Id Kategori',
            'vNama_kategori' => 'V Nama Kategori',
            'kategori_seo' => 'Kategori Seo',
            'vLink' => 'V Link',
            'parent_id' => 'Parent ID',
            'nRowStatus' => 'N Row Status',
        ];
    }
}
