<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "main_menu".
 *
 * @property integer $nID
 * @property string $vNama_menu
 * @property string $vLink
 * @property string $nAktif
 * @property string $nRowStatus
 */
class Mainmenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'main_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vNama_menu', 'vLink'], 'required'],
            [['nAktif', 'nRowStatus'], 'string'],
            [['vNama_menu'], 'string', 'max' => 100],
            [['vLink'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nID' => 'N ID',
            'vNama_menu' => 'V Nama Menu',
            'vLink' => 'V Link',
            'nAktif' => 'N Aktif',
            'nRowStatus' => 'N Row Status',
        ];
    }
}
