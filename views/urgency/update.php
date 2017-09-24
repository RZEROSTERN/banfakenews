<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Urgencies */

$this->title = 'Actualizar Urgencia/Solicitud: ' . $model->urgency_id;
$this->params['breadcrumbs'][] = ['label' => 'Urgencias/Solicitudes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->urgency_id, 'url' => ['view', 'id' => $model->urgency_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="urgencies-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'zones' => $zones
    ]) ?>

</div>
