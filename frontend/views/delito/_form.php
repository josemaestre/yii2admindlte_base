<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PrecDrDelito */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prec-dr-delito-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tx_delito')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icon_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imagen')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
