<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DrDelitoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prec Dr Delitos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prec-dr-delito-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Prec Dr Delito', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_delito',
            'tx_delito',
            'icon_name',
            'imagen',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
