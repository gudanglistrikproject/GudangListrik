<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "slide_show".
 *
 * @property integer $nID
 * @property string $vPath_image
 * @property string $vNama_image
 * @property string $vType_image
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
            [['vPath_image', 'vNama_image', 'vType_image', 'vStatus'], 'required'],
            [['nRowStatus'], 'string'],
            [['vPath_image'], 'string', 'max' => 255],
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
            'vPath_image' => 'V Path Image',
            'vNama_image' => 'V Nama Image',
            'vType_image' => 'V Type Image',
            'vStatus' => 'V Status',
            'nRowStatus' => 'N Row Status',
        ];
    }
}
