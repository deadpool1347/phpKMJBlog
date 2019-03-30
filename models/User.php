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
            // [['login', 'email'], 'required'],
            // ['password', 'required', 'except' => 'user_update'],
            // [['login', 'email'], 'string', 'max' => 50],
            // [['password'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Логин',
            'password' => 'Пароль',
            'email' => 'E-mail',
            'created' => 'Создан',
            'active' => 'Активные',
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

    public function getArticles()
    {
       return $this->hasMany(Article::className(), ['user_id' => 'id']);
    }

    public function getAuthAssignment()
    {
       return $this->hasOne(AuthAssignment::className(), ['user_id' => 'id']);
    }







    public function getItemName()
    {
       return $this->hasOne(AuthItem::className(), ['name' => 'item_name'])->viaTable('auth_assignment', ['user_id' => 'id']);
    }


    public function getAuthKey() {}
    public function validateAuthKey($authKey) {}
    public static function findIdentityByAccessToken($token, $type = null) {}
}
