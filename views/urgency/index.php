<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UrgenciesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Urgencias/Solicitudes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urgencies-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Agregar Urgencia/Solicitud', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'urgency_id',
            [
                'attribute' => 'zone_id',
                'value' => 'zone.name',
                'filter' => $zones
            ],
            [
                'attribute' => 'level',
                'filter' => $searchModel::getLevels()
            ],
            [
                'attribute' => 'need_brigade',
                'filter' => $searchModel::getNeedBrigadeValues()
            ],
            'supplies_required:ntext',
            'address',
            'detail_source',
            'last_updated:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
