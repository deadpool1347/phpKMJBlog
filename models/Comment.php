<?php

namespace app\models;

use Yii;

class Comment extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'comment';
    }

    public function rules()
    {
        return [
            [['article_id', 'user_id', 'content'], 'required'],
            [['article_id', 'parent_id', 'user_id'], 'integer'],
            [['content'], 'string'],
            [['created'], 'safe'],
            [['article_id'], 'exist', 'skipOnError' => true, 'targetClass' => Article::className(), 'targetAttribute' => ['article_id' => 'id']],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Comment::className(), 'targetAttribute' => ['parent_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article_id' => 'Article ID',
            'parent_id' => 'Parent ID',
            'user_id' => 'User ID',
            'content' => 'Content',
            'created' => 'Created',
        ];
    }

    public function getArticle()
    {
        return $this->hasOne(Article::className(), ['id' => 'article_id']);
    }

    public function getParent()
    {
        return $this->hasOne(Comment::className(), ['id' => 'parent_id']);
    }

    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['parent_id' => 'id']);
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
