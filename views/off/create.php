<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WriteOff */

$this->title = 'Create Write Off';
$this->params['breadcrumbs'][] = ['label' => 'Write Offs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="write-off-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
