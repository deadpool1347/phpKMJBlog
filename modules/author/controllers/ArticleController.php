<?php

namespace app\modules\author\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;

use app\models\Article;
use app\models\SearchArticle;

class ArticleController extends \yii\web\Controller
{
    public $defaultAction = 'create';
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['author'],
                        'actions' => ['index', 'create', 'update'],
                    ],
                    [
                        'allow' => true,
                        'roles' => ['admin'],
                        'actions' => ['delete', 'publish'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex() 
    { 
        $searchModel = new SearchArticle(); 
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams); 

        return $this->render('index', [ 
            'searchModel' => $searchModel, 
            'dataProvider' => $dataProvider, 
        ]); 
    } 

    public function actionCreate()
    {
        $article = new Article();
        $article->user_id = Yii::$app->user->id;

        if ($article->load(Yii::$app->request->post()) && $article->save()){
           Yii::$app->session->setFlash('succes');
           return $this->redirect(['index']);
        }

        return $this->render('create',[
          'article' => $article,
        ]);
    }

    public function actionUpdate($id)
    {
        $article = $this->findModel($id);

        if ($article->load(Yii::$app->request->post()) && $article->save()){
           Yii::$app->session->setFlash('succes');
           return $this->redirect(['index']);
        }

        return $this->render('update', [
            'article' => $article,
        ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionPublish($id)
    {
        if (!Yii::$app->user->can('admin')) {
            throw new NotFoundHttpException('Статья не найдена');
        }

        $article = $this->findModel($id);
        $article->is_published = !$article->is_published;
        $article->save(false);

       return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($article = Article::findOne($id)) !== null) {
            return $article;
        }

    }
}
