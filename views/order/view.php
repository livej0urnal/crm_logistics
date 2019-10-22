<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Order */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="order-view">

    <h1>Заказ id#<?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
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
            'id',
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
                'format' => 'html'
            ],
            'price',
            'comment',
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
                'format' => 'html'
            ],
        ],
    ]) ?>

    <div class="clearfix" style="min-height: 10px"></div>
    <h4>Информация о клиенте</h4>
    <?php $client = $model->client; ?>
    <table class="table table-striped table-bordered detail-view">
        <thead>
        <tr>
            <th>Имя</th>
            <th>Телефон</th>
            <th>Адрес</th>
            <th>Компания</th>
            <th>Комментарий</th>
        </tr>
        </thead>


            <tbody>
            <tr>
                <td><?= $client->name ?> </td>
                <td><?= $client->phone ?></td>
                <td><?= $client->address ?></td>
                <?php if($client->company == '0') : ?>
                    <td>Нет</td>
                <?php else: ?>
                    <td>Да</td>
                <?php endif; ?>
                <td><?= $client->comment ?></td>
            </tr>
            </tbody>
    </table>

    <div class="clearfix" style="min-height: 10px"></div>
    <h4>Товары</h4>
    <?php
        $items = $model->orderItems;
    ?>
    <table class="table table-striped table-bordered detail-view">
        <thead>
        <tr>
            <th>Название товара</th>
            <th>Цена</th>
            <th>Кол-во</th>
        </tr>
        </thead>

        <?php foreach ($items as $item) :  ?>

            <tbody>
            <tr>
                <?php $product = \app\models\Products::findOne($item->product_id) ?>
                <td><?= $product->title ?></td>
                <td><?= $product->price ?></td>
                <td><?= $item->cost ?></td>
            </tr>
            </tbody>
        <?php endforeach; ?>
    </table>




</div>
