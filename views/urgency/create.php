<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Urgencies */

$this->title = 'Agregar Urgencia/Solicitud';
$this->params['breadcrumbs'][] = ['label' => 'Urgencias/Solicitudes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="urgencies-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'zones' => $zones
    ]) ?>

</div>
