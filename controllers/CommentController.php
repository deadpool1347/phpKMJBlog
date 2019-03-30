<?php
namespace app\controllers;
use Yii;
use app\models\Comment;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
/**
 * CommentController implements the CRUD actions for Comment model.
 */
class CommentController extends Controller
{
    public $enableCsrfValidation = false;
    /**
     * Lists all Comment models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Comment::find(),
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Displays a single Comment model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'comment' => $this->findModel($id),
        ]);
    }
    /**
     * Creates a new Comment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $comment = new Comment();
        if ($comment->load(Yii::$app->request->post()) && $comment->save()) {
            return $this->redirect(['view', 'id' => $comment->id]);
        }
        return $this->render('create', [
            'comment' => $comment,
        ]);
    }
    /**
     * Updates an existing Comment model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $comment = $this->findModel($id);
        if ($comment->load(Yii::$app->request->post()) && $comment->save()) {
            return $this->redirect(['view', 'id' => $comment->id]);
        }
        return $this->render('update', [
            'comment' => $comment,
        ]);
    }
    /**
     * Deletes an existing Comment model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }
    /**
     * Finds the Comment model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Comment the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($comment = Comment::findOne($id)) !== null) {
            return $comment;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
