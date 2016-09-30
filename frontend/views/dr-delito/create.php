<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PrecDrDelito */

$this->title = 'Create Prec Dr Delito';
$this->params['breadcrumbs'][] = ['label' => 'Prec Dr Delitos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prec-dr-delito-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
