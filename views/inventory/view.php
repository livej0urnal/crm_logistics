<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Inventory */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Inventories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="inventory-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            [
                'attribute' => 'cat_id',
                'value' => function($data)
                {
                    return $data->category->title;
                }
            ],
            'worker_id',
        ],
    ]) ?>

    <div class="clearfix" style="min-height: 30px"></div>
    <?php $items = $model->products; ?>
    <table class="table table-striped table-bordered detail-view">
        <thead>
        <tr>
            <th>Название товара</th>
            <th>Кол-во</th>
        </tr>
        </thead>

        <?php foreach ($items as $item) :  ?>

            <tbody>
            <tr>
                <td><?= $item->product['title'] ?> </td>
                <td><?= $item->cost ?></td>
            </tr>
            </tbody>
        <?php endforeach; ?>
    </table>

</div>
