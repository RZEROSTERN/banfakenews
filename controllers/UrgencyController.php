<?php

namespace app\controllers;

use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Zones;
use app\models\Urgencies;
use app\models\UrgenciesSearch;

/**
 * UrgencyController implements the CRUD actions for Urgencies model.
 */
class UrgencyController extends Controller
{
    /**
     * @inheritdoc
     */
     public function behaviors()
     {
         return [
             'access' => [
                 'class' => \yii\filters\AccessControl::className(),
                 'only' => ['create', 'update', 'delete'],
                 'rules' => [
                     [
                         'allow' => true,
                         'actions' => ['login', 'signup', 'index'],
                         'roles' => ['?'],
                     ],
                     // allow authenticated users
                     [
                         'allow' => true,
                         'roles' => ['@'],
                     ],
                     // everything else is denied
                 ],
             ],
         ];
     }

    /**
     * Lists all Urgencies models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UrgenciesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'zones' => $this->getZones()
        ]);
    }

    /**
     * Displays a single Urgencies model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id)
        ]);
    }

    /**
     * Creates a new Urgencies model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Urgencies();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->urgency_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'zones' => $this->getZones()
            ]);
        }
    }

    /**
     * Updates an existing Urgencies model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->urgency_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'zones' => $this->getZones()
            ]);
        }
    }

    /**
     * Deletes an existing Urgencies model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Urgencies model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Urgencies the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        $model = $model = Urgencies::find()->with('zone')->where(['urgency_id' => $id])->one();
        if ($model !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Devuelve las Zonas
     *
     * @return array
     * @author Raúl Cruz Carmona <cruzcraul@gmail.com>
     */
    public function getZones()
    {
        $zones = Zones::find()->orderBy('name', SORT_ASC)->all();
        return ArrayHelper::map($zones, 'zone_id', 'name');
    }
}
