<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\FinesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Штрафы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fines-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                    'attribute' => 'worker_id',
                    'value' => function($data)
                    {
                        return $data->worker->fio;
                    }
            ],
            //'worker_id',
            'money',
            'description',
            'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
