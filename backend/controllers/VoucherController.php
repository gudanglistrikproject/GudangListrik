<?php

namespace backend\controllers;

use Yii;
use backend\models\Voucher;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VoucherController implements the CRUD actions for Voucher model.
 */
class VoucherController extends Controller
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
     * Lists all Voucher models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Voucher::find(),
        ]);
            if($dataProvider != null)
            {
                $dataProvider = new ActiveDataProvider([
                'query' => Voucher::find()->where(['nRowStatus'=>'N']),
                ]);
            }
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Voucher model.
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
     * Creates a new Voucher model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Voucher();

        if ($model->load(Yii::$app->request->post())) {
			$model->nRowStatus='N';
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

    /**
     * Updates an existing Voucher model.
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
     * Deletes an existing Voucher model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->nRowStatus='Y';
        $model->save();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Voucher model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Voucher the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Voucher::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
