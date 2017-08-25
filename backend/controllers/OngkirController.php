<?php

namespace backend\controllers;

use backend\models\Ongkir;
use Yii;
use yii\data\ArrayDataProvider;
use yii\helpers\ArrayHelper;

class OngkirController extends \yii\web\Controller {

    public function actionIndex() {
        $modelOngkir = new Ongkir;
        $data = null;
        if (Yii::$app->request->post()) {
            $post = Yii::$app->request->post();
            if($post['txtweight']!='')
            {
                $data = $modelOngkir->getPrice($post['ddlCF'], $post['ddlCT'], $post['ddlCour'], $post['txtweight']);
            }
            else
            {
                $data = $modelOngkir->getPrice($post['ddlCF'], $post['ddlCT'], $post['ddlCour']);
            }
        }
        $provider = new ArrayDataProvider([
            'allModels' => $data,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        $cities = $modelOngkir->getAllCity();
        $cities = ArrayHelper::map($cities, 
                'city_id', 'city_name');  
        $cour = ['jne'=>'JNE', 'pos'=>'POS'];  
        
        return $this->render('index', [
                    'dataProvider' => $provider,
                    'ddlCity' => $cities,
                    'ddlCour' => $cour,
        ]);
    }

}
