<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Urgencies */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="urgencies-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'zone_id')->dropDownList(
            $zones,
            ['prompt' => 'Seleccionar...']
        ) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'level')->dropDownList(
                $model::getLevels(),
                ['prompt' => 'Seleccionar...']
            ) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'need_brigade')->dropDownList(
                $model::getNeedBrigadeValues(),
                ['prompt' => 'Seleccionar...']
            ) ?>
            
        </div>
    </div>

    <?= $form->field($model, 'supplies_required')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'supplies_accept')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'supplies_not_required')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail_source')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Agregar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
