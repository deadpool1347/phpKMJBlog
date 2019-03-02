<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;

use app\models\SingInForm;

class SiteController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

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

    // public function actionLogin()
    // {
    //     if (!Yii::$app->user->isGuest) {
    //         return $this->goHome();
    //     }

    //     $model = new SingInForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->login()) {
    //         return $this->goBack();
    //     }

    //     $model->password = '';
    //     return $this->render('login', [
    //         'model' => $model,
    //     ]);
    // }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSignIn()
    {
        echo "string";
        die;
        $this->layout = 'auth';

        $sign_in = new SingInForm();

        return $this->render('sign-in', [
            'sign_in' => $sign_in
        ]);
    }

    public function actionSignUp()
    {
        $this->layout = 'auth';
        
        return $this->render('sign-up');
    }

    // public function actionLogout()
    // {
    //     Yii::$app->user->logout();

    //     return $this->goHome();
    // }
}
