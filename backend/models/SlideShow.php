<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "slide_show".
 *
 * @property integer $nID
 * @property string $vJudul
 * @property string $vIsi
 * @property string $vPath_image
 * @property string $vNama_image
 * @property string $vType_image
 * @property string $vLink
 * @property string $vStatus
 * @property string $nRowStatus
 */
class SlideShow extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slide_show';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vJudul', 'vIsi', 'vPath_image', 'vNama_image', 'vType_image', 'vLink', 'vStatus'], 'required'],
            [['nRowStatus'], 'string'],
            [['vJudul', 'vIsi', 'vPath_image', 'vLink'], 'string', 'max' => 255],
            [['vNama_image'], 'string', 'max' => 200],
            [['vType_image'], 'string', 'max' => 30],
            [['vStatus'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nID' => 'N ID',
            'vJudul' => 'Judul',
            'vIsi' => 'Isi',
            'vPath_image' => 'Path Image',
            'vNama_image' => 'Nama Image',
            'vType_image' => 'Type Image',
            'vLink' => 'Link',
            'vStatus' => 'Status',
            'nRowStatus' => 'Row Status',
        ];
    }
}
