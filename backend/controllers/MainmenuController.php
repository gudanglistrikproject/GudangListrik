<?php

namespace backend\controllers;

use Yii;
use backend\models\Mainmenu;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MainmenuController implements the CRUD actions for Mainmenu model.
 */
class MainmenuController extends Controller
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
     * Lists all Mainmenu models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Mainmenu::find(),
        ]);
		
		if($dataProvider != null)
		{
			$dataProvider = new ActiveDataProvider([
                        'query' => Mainmenu::find()->where(['nRowStatus'=>'N']),
			]);
		}

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Mainmenu model.
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
     * Creates a new Mainmenu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Mainmenu();

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
     * Updates an existing Mainmenu model.
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
     * Deletes an existing Mainmenu model.
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
     * Finds the Mainmenu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Mainmenu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Mainmenu::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
