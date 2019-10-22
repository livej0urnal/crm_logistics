<?php

namespace app\controllers;

use app\models\Waybill;
use app\models\WriteOff;
use Yii;
use yii\filters\AccessControl;
use app\controllers\AppController;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Order;

class SiteController extends AppController
{


    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $id = Yii::$app->request->get('id');
        $orderactive = Order::find()->where(['status' => '1'])->all();
        $orderok = Order::find()->where(['status' => '2'])->all();
        $neworder = Order::find()->where(['status' => '0'])->all();
        $offs = WriteOff::find()->all();
        $last = Order::find()->where(['status' => '0'])->limit(5)->all();
        $waybill = Waybill::find()->orderBy(['date' => SORT_DESC])->limit(3)->all();
        $this->setMeta('Stexo - logistics base CRM on Yii2+');
        return $this->render('index' , compact('orderactive' , 'orderok' , 'neworder' , 'offs' , 'last' , 'waybill'));
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        $this->layout = false;
        $this->setMeta('Login for Stexo logistics base CRM');
        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
