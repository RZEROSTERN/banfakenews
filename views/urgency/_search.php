<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UrgenciesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="urgencies-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'urgency_id') ?>

    <?= $form->field($model, 'zone_id') ?>

    <?= $form->field($model, 'level') ?>

    <?= $form->field($model, 'need_brigade') ?>

    <?= $form->field($model, 'supplies_required') ?>

    <?php // echo $form->field($model, 'supplies_accept') ?>

    <?php // echo $form->field($model, 'supplies_not_required') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'detail_source') ?>

    <?php // echo $form->field($model, 'last_updated') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
