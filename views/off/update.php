<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WriteOff */

$this->title = 'Update Write Off: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Write Offs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="write-off-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
