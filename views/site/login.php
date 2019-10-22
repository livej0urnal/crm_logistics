<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Login for Stexo logistics base CRM</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />

    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="/css/icons.css" rel="stylesheet" type="text/css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

<!-- Begin page -->
<div class="accountbg"></div>

<div class="wrapper-page">
    <div class="card card-pages shadow-none">

        <div class="card-body">

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'layout' => 'horizontal',
                'class' => 'form-horizontal m-t-30',
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-11\">{input}</div>\n<div class=\"col-lg-11\">{error}</div>",
                ],
            ]); ?>
            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"col-12\">{input} {label}</div>\n<div class=\"col-lg-8 \">{error}</div>",
            ]) ?>

            <div class="form-group text-center m-t-20">
                <div class="col-12">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block btn-lg waves-effect waves-light', 'name' => 'login-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>
        </div>

    </div>
</div>
<!-- END wrapper -->

<!-- jQuery  -->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/metismenu.min.js"></script>
<script src="/js/jquery.slimscroll.js"></script>
<script src="/js/waves.min.js"></script>

<!-- App js -->
<script src="/js/app.js"></script>

</body>

</html>
