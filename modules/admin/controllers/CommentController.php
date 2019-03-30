<?php
namespace app\modules\admin\controllers;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use app\models\Comment;

class CommentController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Comment::find(),
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'comment' => $this->findModel($id),
        ]);
    }

    public function actionUpdate($id)
    {
        $comment = $this->findModel($id);

        if ($comment->load(Yii::$app->request->post()) && $comment->save()){
           Yii::$app->session->setFlash('succes');
           return $this->redirect(['index']);
        }

        return $this->render('update', [
            'comment' => $comment,
        ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($comment = Comment::findOne($id)) !== null) {
            return $comment;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
