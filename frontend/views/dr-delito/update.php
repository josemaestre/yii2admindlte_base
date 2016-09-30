<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PrecDrDelito */

$this->title = 'Update Prec Dr Delito: ' . $model->id_delito;
$this->params['breadcrumbs'][] = ['label' => 'Prec Dr Delitos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_delito, 'url' => ['view', 'id' => $model->id_delito]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prec-dr-delito-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
