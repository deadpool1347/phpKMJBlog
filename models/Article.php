<?php

namespace app\models;

use Yii;


class Article extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'article';
    }

    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 250],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Статья',
            'content' => 'Содержпние',
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
