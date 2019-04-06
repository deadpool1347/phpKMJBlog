<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;

use app\models\user\LoginForm;
use app\models\user\RegForm;
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
    // public function actionTestBigMe()
    // {
    //     echo('hgfdsdfghjxthtp ---');
    // }

    public function actionTest()
    {
        $article = new Article;
        $article->title = 'Заголовок';
        $article->content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in commodo sapien. In nulla felis, bibendum a elit vitae, porta pulvinar ex. Ut vulputate fringilla ipsum et commodo. Aliquam ut condimentum elit, a mollis metus.';
        $article->save();


        $article = Article::find()->all();
        var_dump($article);
    }

    public function actionIndex($search = null)
    {
        $query = Article::find()
            ->joinWith(['user'])
            ->orFilterWhere(['like', 'article.title', $search])
            ->orFilterWhere(['like', 'user.login', $search]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ],
        ]);

        return $this->render('index', [
          'dataProvider' => $dataProvider,
        ]);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'auth';
        $login = new LoginForm();

        if ($login->load(Yii::$app->request->post()) && $login->login())
        {
            return $this->goHome();
        }

        return $this->render('login', [
            'login' => $login
        ]);
    }

    public function actionReg()
    {
        $this->layout = 'auth';
        $reg = new RegForm();

        if($reg->load(Yii::$app->request->post()) && $reg->registrate())
        {
            return $this->goHome();
        }

        return $this->render('reg', [
          'reg' => $reg
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
