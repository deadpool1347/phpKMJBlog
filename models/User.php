<?php

namespace app\models;

class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    public static function tableName()
    {
      return 'user';
    }

    public function rules()
    {
        return [
            [['login', 'password', 'email'], 'required'],
            [['login', 'email'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password' => 'Password',
            'email' => 'Email',
            'created' => 'Created',
        ];
    }

    public static function findByLogin($login)
    {
        return self::findOne(['login' => $login]);
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }

    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['user_id' => 'id']);
    }

    public function getAuthKey() {}
    public function validateAuthKey($authKey) {}
    public static function findIdentityByAccessToken($token, $type = null) {}
}
