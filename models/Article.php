<?php

namespace app\models;

use Yii;


class Article extends \yii\db\ActiveRecord
{
    const HIDE = 0;
    const SHOW = 1;

    public static function tableName()
    {
        return 'article';
    }

    public function rules()
    {
        return [
            [['title', 'content', 'theme_id'], 'required'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 250],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Статья',
            'content' => 'Содержание',
            'theme_id' => 'Тема',
            'created' => 'Создана',
        ];
    }

    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['article_id' => 'id']);
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getTheme() 
    {
        return $this->hasOne(Theme::className(), ['id' => 'theme_id']);
    }
}
