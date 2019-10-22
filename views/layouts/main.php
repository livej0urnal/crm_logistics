<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">

    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title><?= Html::encode($this->title) ?></title>
        <?= Html::csrfMetaTags() ?>
        <?php $this->head() ?>
        <link rel="shortcut icon" href="/images/favicon.ico">
    </head>

    <?php $this->beginBody() ?>
    <body>

    <div class="header-bg">
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo-->
                    <div>
                        <a href="<?= \yii\helpers\Url::home() ?>" class="logo">
                            <span class="logo-light">
                                    <i class="mdi mdi-camera-control"></i> Stexo
                            </span>
                        </a>
                    </div>
                    <!-- End Logo-->


                    <div class="clearfix"></div>

                </div>
                <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">

                    <div id="navigation">

                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="<?= \yii\helpers\Url::home() ?>"><i class="icon-accelerator"></i> Главная</a>
                            </li>
                            <li>
                                <a href="/order/create"><i class="mdi mdi-layers-plus"></i>Новый заказ</a>
                            </li>
                            <li>
                                <a href="/order/index"><i class="mdi mdi-shopping"></i>Заказы</a>
                            </li>
                            <li>
                                <a href="/clients/index"><i class="fas fa-address-book"></i>Клиенты</a>

                            </li>
                            <li class="has-submenu">
                                <a href=""><i class="ti-shopping-cart-full"></i>Товары<i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="/products">Товары</a></li>
                                            <li><a href="/category">Категории</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href=""> <i class="mdi mdi-home-group"></i>Склад <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="/sources">Поставщики</a></li>
                                            <li><a href="/waybill/index">Накладные</a></li>
                                            <li><a href="/off/index">Списания</a></li>
                                            <li><a href="/inventory/index">Инвентаризация</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href=""><i class="ti-money"></i>Финансы<i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="/salary/index">Зарплаты</a></li>
                                            <li><a href="/other/index">Прочие расходы</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href=""><i class="ti-settings"></i>Настройки<i class="mdi mdi-chevron-down mdi-drop"></i></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="/workers/index">Сотрудники</a></li>
                                            <li><a href="/prize/index">Премии</a></li>
                                            <li><a href="/fines/index">Штрафы</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/admin/"><i class="ti-user"></i>RBAC</a>
                            </li>
                            <li>
                                <a href="/site/logout"><i class="fas fa-sign-out-alt"></i>Выход</a>
                            </li>
                        </ul>
                        <!-- End navigation menu -->
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

    </div>
    <!-- header-bg -->

    <div class="wrapper">
        <div class="container-fluid">
            <div class="clearfix" style="min-height: 10px"></div>
            <?= $content ?>

        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end wrapper -->



    <?php $this->endBody() ?>
    </body>

    </html>
<?php $this->endPage() ?>