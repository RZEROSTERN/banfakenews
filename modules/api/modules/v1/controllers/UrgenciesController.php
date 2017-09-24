<?php
namespace app\modules\api\modules\v1\controllers;

use Yii;
use app\models\Urgencies;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class UrgenciesController extends Controller
{
    public function behaviors(){
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'index' => ['get'],
                    'view' => ['get'],
                    'create' => ['post'],
                    'update' => ['post'],
                    'delete' => ['delete'],
                    'hashtags' => ['get'],
                ],
            ]
        ];
    }

    public function beforeAction($event)
    {
        $action = $event->id;
        if (isset($this->actions[$action])) {
            $verbs = $this->actions[$action];
        } elseif (isset($this->actions['*'])) {
            $verbs = $this->actions['*'];
        } else {
            return $event->isValid;
        }
        $verb = Yii::$app->getRequest()->getMethod();
        $allowed = array_map('strtoupper', $verbs);
        if (!in_array($verb, $allowed)) {
            $this->getHeader(403);
            echo (['status' => 0, 'error_code' => 400, 'message' => 'Method not allowed']);
            exit;
        }
        return true;
    }

    public function actionIndex(){
        $this->getHeader(200);
        $model = Urgencies::find()->asArray()->all();
        return ($model);
    }

    public function actionView($id){
        if(Yii::$app->request->get('id')) {
            $model = Urgencies::find()->andWhere(['urgency_id' => $id])->asArray()->one();
            $this->getHeader(200);
            return ($model);
        } else {
            $this->getHeader(400);
            echo (['status' => 0, 'error_code' => 400, 'message' => 'Please send me a valid ID.']);
        }
    }

    public function actionCreate(){
        $model = new Urgencies();
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $this->getHeader(200);
            return (['status' => 200, 'message' => 'Inserción correcta']);
        } else {
            $this->getHeader(400);
            return ($model->getErrors());
        }
    }

    public function actionUpdate($id){
        $model = $this->findModel($id);
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $this->getHeader(200);
            return (['status' => 200, 'message' => 'Actualizacion correcta']);
        } else {
            $this->getHeader(400);
            return ($model->getErrors());
        }
    }

    private function getHeader($status)
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $status_header = 'HTTP/1.1 ' . $status . ' ' . $this->getStatusCodeMessage($status);
    }
    private function getStatusCodeMessage($status)
    {
        $codes = [
            200 => 'OK',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            402 => 'Payment Required',
            403 => 'Forbidden',
            404 => 'Not Found',
            500 => 'Internal Server Error',
            501 => 'Not Implemented',
        ];
        return (isset($codes[$status])) ? $codes[$status] : '';
    }

    /**
     * Finds the Reports model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Reports the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
     protected function findModel($id)
     {
         if (($model = Urgencies::findOne($id)) !== null) {
             return $model;
         } else {
             throw new NotFoundHttpException('The requested page does not exist.');
         }
     }
}