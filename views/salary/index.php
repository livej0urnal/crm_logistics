<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\SalarySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Зарплаты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="salary-index">

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
            'name',
            [
                    'attribute' => 'worker_id',
                    'value' => function($data)
                    {
                        return $data->worker->fio;
                    }
            ],
            //'rate_id',
            'start_date',
            'end_date',
            [
                    'attribute' => 'prize_id',
                    'value' => function($data)
                    {
                        if(!empty($data->prize->money))
                        {
                            return '<span class="btn btn-success waves-effect waves-light">' .$data->prize->money . '</span>';
                        }
                        else{
                            return $data->prize->money;
                        }

                    } ,
                    'format' => 'html'
            ],
            //'prize_id',
            [
                'attribute' => 'fine_id',
                'value' => function($data)
                {
                    if(!empty($data->fine->money))
                    {
                        return '<span class="btn btn-danger waves-effect waves-light">' .$data->fine->money . '</span>';

                    }
                    else{
                        return $data->fine->money;
                    }

                },
                'format' => 'html'
            ],
            //'fine_id',
            'money',


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
