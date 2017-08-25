<?php

namespace backend\controllers;

use Yii;
use backend\models\Brand;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BrandController implements the CRUD actions for Brand model.
 */
class BrandController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Brand models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Brand::find(),
        ]);
        if($dataProvider != null)
        {
            $dataProvider = new ActiveDataProvider([
            'query' => Brand::find()->where(['vRowStatus'=>'N']),
            ]);
        }
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Brand model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        if(Yii::$app->request->isAjax)
        {
                return $this->renderAjax('view', [
                        'model' => $model
                ]);
        }

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Brand model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Brand();

        if ($model->load(Yii::$app->request->post())) {
            $model->vRowStatus='N';
            $model->save();
            return $this->redirect(['index']);
        } else {
            if(Yii::$app->request->isAjax)
            {
                    return $this->renderAjax('create', [
                            'model' => $model
                    ]);
            }
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    
    public function actionBrandcheckjson() {
        $status = 'No';
        if (Yii::$app->request->post()) {
            $data = Yii::$app->request->post();
            $vNama_brand = $data['vNama_brand'];
            $nIDkategoriValue = $data['nIDkategoriValue'];
            
            $dataProvider = new ActiveDataProvider([
                'query' => Brand::find()->where(['vRowStatus'=>'N']),
            ]);
            if($dataProvider != null)
            {
                $status = 'Yes';
            }
            else
            {
                $status = 'No';
            }
        }
        return $status;
    }

    /**
     * Updates an existing Brand model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            if(Yii::$app->request->isAjax)
            {
                return $this->renderAjax('update', [
                        'model' => $model
                ]);
            }
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Brand model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->vRowStatus='Y';
        $model->save();
        
        return $this->redirect(['index']);
    }

    /**
     * Finds the Brand model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Brand the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Brand::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
