<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;

use app\models\Article;
use app\models\Comment;

class ArticleController extends \yii\web\Controller
{
    public $defaultAction = 'create';

    // public function behaviors()
    // {
    //     return [
    //         'access' => [
    //             'class' => AccessControl::className(),
    //             'rules' => [
    //                 [
    //                     'allow' => true,
    //                     'roles' => ['author'],
    //                 ],
    //             ],
    //         ],
    //     ];
    // }

    public function actionShow($id)
    {
        $article = Article::findOne($id);

        if (empty($article)) {
          throw new NotFoundHttpException('Статья не найдена');
        }

        $comment = new Comment();
        $comment->article_id = $id;
        $comment->user_id = Yii::$app->user->id;

        if ($this->createCommnet($comment)) {
            return $this->refresh();
        }

        return $this->render('article', [
          'article' => $article,
          'comment' => $comment,
          'comments' => Comment::find()->where(['article_id' => $id])->orderBy('id DESC')->all(),
        ]);
    }

    public function createCommnet($comment)
    {
        if ($comment->load(Yii::$app->request->post()) && $comment->save()){
            Yii::$app->session->setFlash('success');
            return true;
        }
        return false;
    }
}
