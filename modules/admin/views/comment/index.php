<?php

use app\models\Comment;

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Комментарии';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<?php if (Yii::$app->session->getFlash('succes')) : ?>
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        Ваша заявка вскоре будет одобрена!
    </div><!-- /End Alert -->
<?php endif; ?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'attribute' => 'article.title',
            'header' => 'Название',

        ],
        [
            'attribute' => 'user.login',
            'header' => 'login',
        ],
        'content',
        [
            'attribute' => 'created',
            'value' => function($comment) {
                return  date('d.m.Y', strtotime($comment->created));
            }
        ],

        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{update} {delete}',
            'buttons' => [
                'update' => function($url, $comment) {
                    return Html::a('<span class="glyphicon glyphicon-pencil"></span>', ['/admin/comment/update', 'id' => $comment->id]);
                },
                'delete' => function($url, $comment) {
                    if (Yii::$app->user->can('admin')) {
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['/admin/comment/delete', 'id' => $comment->id]);
                    }
                },
            ]
        ],
    ],
]); ?>
