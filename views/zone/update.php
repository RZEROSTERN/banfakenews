<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Zones */

$this->title = 'Actualizar Zona: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Zonas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->zone_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="zones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
