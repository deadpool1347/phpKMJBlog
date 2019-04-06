<?php

namespace app\models\user;

use Yii;
use app\models\AuthAssignment;

class UpdateForm extends \app\models\User
{
    public $role;

    public function rules()
    {
        return [
            [['login', 'email', 'role', 'active'], 'required'],
            [['login', 'email'], 'string', 'max' => 50],
            ['email', 'email'],
            ['active', 'in', 'range' => [1,2]],
        ];
    }

    public function attributeLabels()
    {
        return [
            'login' => 'Логин',
            'email' =>"E-mail",
            'role' => 'Роль',
        ];
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $auth_assignment = AuthAssignment::findOne(['user_id' => $this->id]);

        if (empty($auth_assignment)){
            $auth_assignment = new AuthAssignment;
        }

        $auth_assignment->user_id = $this->id;
        $auth_assignment->item_name = $this->role;
        $auth_assignment->save();
    }

}
