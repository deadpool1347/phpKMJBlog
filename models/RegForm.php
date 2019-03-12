<?php

namespace app\models;

use Yii;
use yii\base\Model;

class RegForm extends Model
{
    public $login;
    public $password;
    public $email;
    public $password_ch;

    private $_user = false;

    public function rules()
    {
        return [
            // username and password are both required
            [['login', 'password', 'email', 'password_ch'], 'required'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
            ['email', 'email'],
            ['email', 'validateEmail'],
            ['login', 'validateLogin'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'login' => 'Логин',
            'password' => 'Пароль',
            'email' =>"E-mail",
            'password_ch' => 'Подтверждение пароля'
        ];
    }

    public function validatePassword($attribute, $params)
    {
        if ($this->password != $this->password_ch) {
            $this->addError($attribute, 'Пароли не совпадают');
        }
    }

    public function validateLogin($attribute, $params)
    {
        if (User::findByLogin($this->login)) {
            $this->addError($attribute, 'Такой логин уже существует');
        }
    }

    public function validateEmail($attribute, $params)
    {

        if (User::findOne(['email' => $this->email])) {
            $this->addError($attribute, 'Такой e-mail адрес уже существует');
        }
    }

    public function registrate()
    {
        if (!$this->validate()) {
          return false;
        }

        $user = new User();
        $user->email = $this->email;
        $user->password = $this->password;
        $user->login = $this->login;

        if ($user->save(false)) {
          return true;
        }
    }

    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByLogin($this->login);
        }

        return $this->_user;
    }
}
