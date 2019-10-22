<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заказы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

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
            'date',
            //'worker_id',
            [
                    'attribute' => 'worker_id',
                    'value' => function($data)
                    {
                        return $data->worker->fio;
                    }
            ],
            //'client_id',
            [
                    'attribute' => 'client_id',
                    'value' => function($data)
                    {
                        return $data->client->name;
                    }
            ],
            //'payment',
            [
                'attribute' => 'payment',
                'value' => function($data)
                {
                    if($data->payment == '0')
                    {
                        return '<i class="mdi mdi-credit-card" style="color:green;font-style: italic;"> Безнал.</i>  ';
                    }
                    elseif ($data->payment == '1')
                    {
                        return '<i class="mdi mdi-cash-marker" style="color:green;font-style: italic;"> Налич.</i>';
                    }
                    elseif ($data->payment == '2')
                    {
                        return '<i class="mdi mdi-monitor-lock" style="color: blue;font-style: italic;"> Дебит</i> ';
                    }
                    elseif ($data->payment == '3')
                    {
                        return '<i class="mdi mdi-bank-remove" style="color: red;font-style: italic;"> Кредит</i> ';
                    }
                },
                'format' => 'raw',
                'filter' => [
                        0 => 'Безнал.',
                        1 => 'Налич.',
                        2 => 'Дебит',
                        3 => 'Кредит',
                ],
            ],
            'price',
            //'comment',
            //'status',
            [
                    'attribute' => 'status',
                    'value' => function($data)
                    {
                        if($data->status == '0')
                        {
                            return '<span class="alert alert-warning">Новый</span>';
                        }
                        elseif ($data->status == '1')
                        {
                            return '<span class="alert alert-success">В обработке</span>';
                        }
                        elseif ($data->status == '2')
                        {
                           return '<span class="alert alert-secondary">Выполнен</span>';
                        }
                    },
                'format' => 'raw',
                'filter' => [
                    0 => 'Новый',
                    1 => 'В обработке',
                    2 => 'Выполнен',
                ],
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
