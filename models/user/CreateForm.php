<?php

namespace app\models\user;

use Yii;
use app\models\AuthAssignment;
use swods\randstring\RandString;

class CreateForm extends \app\models\User
{
    public $role;

    public function rules()
    {
        return [
            [['login', 'email', 'role'], 'required'],
            [['login', 'email'], 'string', 'max' => 50],
            ['email', 'email'],
            ['login', 'unique'],
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

    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        }

        $this->password = RandString::generate();
        return true;
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $auth_assignment = new AuthAssignment;
        $auth_assignment->item_name = $this->role;
        $auth_assignment->user_id = $this->id;
        $auth_assignment->save();
    }

}
