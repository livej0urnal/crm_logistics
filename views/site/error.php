<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>

<!-- Begin page -->
<div class="home-btn d-none d-sm-block">
    <a href="index.html" class="text-white"><i class="fas fa-home h2"></i></a>
</div>

<div class="account-pages">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">
                <div class="card ">
                    <div class="card-block">
                        <div class="text-center p-3">

                            <h4 class="mb-4 mt-5"><?= Html::encode($this->title) ?></h4>
                            <p class="mb-4"><?= nl2br(Html::encode($message)) ?></p>
                            <a class="btn btn-primary mb-4 waves-effect waves-light" href="<?= \yii\helpers\Url::home() ?>"><i class="mdi mdi-home"></i> Back to Dashboard</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- end row -->
    </div>
</div>
<!-- END wrapper -->