<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PrizeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Премии';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prize-index">

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
            //'worker_id',
            [
                    'attribute' => 'worker_id',
                    'value' => function($data)
                    {
                        return $data->worker->fio;
                    }
            ],
            'money',
            'description',
            'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
