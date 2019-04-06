<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use app\models\User;
use app\models\user\CreateForm;
use app\models\user\UpdateForm;

class UserController extends Controller
{

    public function behaviors()
    {
        return [
            'access' =>[
                'class' => AccessControl::className(),
                'rules' =>[
                    [
                        'allow' => true,
                        'roles' => ['admin'],
                        'actions' =>['index', 'create', 'update', 'delete'],
                    ],
                ]
            ],

        ];
    }


    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => User::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCreate()
    {
        $user = new CreateForm();

        if ($user->load(Yii::$app->request->post()) && $user->save()) {
            Yii::$app->session->setFlash('succes');
            // return $this->redirect(['view', 'id' => $user->id]);
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'user' => $user,
        ]);
    }

    public function actionUpdate($id)
    {
        $user = $this->findModel($id);

        if ($user->load(Yii::$app->request->post()) && $user->save()) {
            Yii::$app->session->setFlash('succes');
            return $this->redirect(['index']);
        }

        $user->password = null;

        return $this->render('update', [
            'user' => $user,
        ]);
    }

    public function actionDelete($id)
    {
        $user = $this->findModel($id);
        $user->active = 0;
        $user->save(false);

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($user = UpdateForm::findOne($id)) !== null) {
            return $user;
        }
        throw new NotFoundHttpException('Пользователь не найден!');
    }

    // public function actionView($id)
    // {
    //     return $this->render('view', [
    //         'model' => $this->findModel($id),
    //     ]);
    // }
}
