<?php

namespace app\modules\user\controllers;

use Yii;

use app\models\user\ResetPasswordForm;

class UserController extends \yii\web\Controller
{
    public function actionResetPassword()
    {
        $this->layout = '@app/views/layouts/auth';

        $reset_password = ResetPasswordForm::findOne(Yii::$app->user->id);

        if ($reset_password->load(Yii::$app->request->post()) && $reset_password->save()) {
            Yii::$app->session->setFlash('succes');
            return $this->redirect(['/']);
        }

        $reset_password->password = null;

        return $this->render('reset-password', [
            'password' => $reset_password,
        ]);
    }
}
