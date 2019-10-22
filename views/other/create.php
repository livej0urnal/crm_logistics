<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OtherCosts */

$this->title = Yii::t('app', 'Create Other Costs');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Other Costs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="other-costs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
