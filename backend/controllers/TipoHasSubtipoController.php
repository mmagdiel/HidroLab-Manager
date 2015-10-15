<?php

namespace backend\controllers;

use Yii;
use common\models\TipoHasSubtipo;
use common\models\search\TipoHasSubtipoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TipoHasSubtipoController implements the CRUD actions for TipoHasSubtipo model.
 */
class TipoHasSubtipoController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all TipoHasSubtipo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TipoHasSubtipoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TipoHasSubtipo model.
     * @param integer $Tipo_id
     * @param integer $SubTipo_id
     * @return mixed
     */
    public function actionView($Tipo_id, $SubTipo_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($Tipo_id, $SubTipo_id),
        ]);
    }

    /**
     * Creates a new TipoHasSubtipo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TipoHasSubtipo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Tipo_id' => $model->Tipo_id, 'SubTipo_id' => $model->SubTipo_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing TipoHasSubtipo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Tipo_id
     * @param integer $SubTipo_id
     * @return mixed
     */
    public function actionUpdate($Tipo_id, $SubTipo_id)
    {
        $model = $this->findModel($Tipo_id, $SubTipo_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Tipo_id' => $model->Tipo_id, 'SubTipo_id' => $model->SubTipo_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing TipoHasSubtipo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Tipo_id
     * @param integer $SubTipo_id
     * @return mixed
     */
    public function actionDelete($Tipo_id, $SubTipo_id)
    {
        $this->findModel($Tipo_id, $SubTipo_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TipoHasSubtipo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Tipo_id
     * @param integer $SubTipo_id
     * @return TipoHasSubtipo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Tipo_id, $SubTipo_id)
    {
        if (($model = TipoHasSubtipo::findOne(['Tipo_id' => $Tipo_id, 'SubTipo_id' => $SubTipo_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}