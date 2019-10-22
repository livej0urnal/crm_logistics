<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model app\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput() ?>
    <?php echo $form->field($model, 'worker_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Workers::find()->all(), 'id', 'fio')) ?>

    <?php echo $form->field($model, 'client_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Clients::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'payment')->dropDownList([ '0' => 'Безнал.', '1' => 'Налич.', '2' => 'Кредит', '3' => 'Дебит', ]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'comment')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),]); ?>
    <?= $form->field($model, 'status')->dropDownList([ '0' => 'Новый', '1' => 'В обработке', '2' => 'Выполнен', ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
