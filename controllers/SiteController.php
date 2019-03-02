<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\data\ActiveDataProvider;

use app\models\SingInForm;
use app\models\Article;

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

    // public function actionTest()
    // {
    //     $article = new Article;
    //     $article->title = 'Заголовок';
    //     $article->content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in commodo sapien. In nulla felis, bibendum a elit vitae, porta pulvinar ex. Ut vulputate fringilla ipsum et commodo. Aliquam ut condimentum elit, a mollis metus.';
    //     $article->save();

    //     $article = Article::find()->where(['article.id' => 1])->all();
    //     var_dump($article);
    // }

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Article::find(),
            'pagination' => [
                'pageSize' => 2,
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSignIn()
    {
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
