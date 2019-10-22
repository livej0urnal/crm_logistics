<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Waybill */

$this->title = 'Create Waybill';
$this->params['breadcrumbs'][] = ['label' => 'Waybills', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="waybill-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
