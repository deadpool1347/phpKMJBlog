<?php

namespace app\models\user;

use Yii;
use app\models\AuthAssignment;

class ResetPasswordForm extends \app\models\User
{
    public $password_ch;

    public function rules()
    {
        return [
            [['password', 'password_ch'], 'required'],
            ['password_ch', 'checkPassword'],
        ];
    }

    public function checkPassword($attribute, $params)
    {
        if ($this->password != $this->password_ch) {
            $this->addError($attribute, 'Пароли не совпадают');
        }
    }

    public function attributeLabels()
    {
        return [
            'password' => 'Пароль',
            'password_ch' => 'Подтверждение пароля',

        ];
    }
}
