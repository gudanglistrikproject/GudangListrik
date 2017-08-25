<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "webinfo".
 *
 * @property integer $nID
 * @property string $vNama
 * @property string $vDiv1
 * @property string $vDiv2
 * @property string $vDiv3
 * @property string $nRowstatus
 */
class Webinfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'webinfo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vNama', 'vDiv1', 'vDiv2', 'vDiv3'], 'required'],
            [['vDiv1', 'vDiv2', 'vDiv3', 'nRowstatus'], 'string'],
            [['vNama'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nID' => 'N ID',
            'vNama' => 'V Nama',
            'vDiv1' => 'V Div1',
            'vDiv2' => 'V Div2',
            'vDiv3' => 'V Div3',
            'nRowstatus' => 'N Rowstatus',
        ];
    }
}
