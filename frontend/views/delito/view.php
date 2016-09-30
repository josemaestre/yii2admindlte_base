<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PrecDrDelito */

$this->title = $model->id_delito;
$this->params['breadcrumbs'][] = ['label' => 'Prec Dr Delitos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prec-dr-delito-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_delito], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_delito], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_delito',
            'tx_delito',
            'icon_name',
            'imagen',
        ],
    ]) ?>

</div>
