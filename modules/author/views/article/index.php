<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Статьи';
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

<p>
    <?= Html::a('Добавить статью', ['create'], ['class' => 'btn btn-success']) ?>
</p>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'title',
        [
            'attribute' => 'created',
            'value' => function($article) {
                return  date('d.m.Y', strtotime($article->created));
            }
        ],
        [
            'attribute' => 'user.login',
            // 'value' => function($article) {
            //     return  date('d.m.Y', strtotime($article->created));
            // }
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{update} {delete}',
            'buttons' => [
                'update' => function($url, $article) {
                    return Html::a('<span class="glyphicon glyphicon-pencil"></span>', ['/author/article/update', 'id' => $article->id]);
                },
                'delete' => function($url, $article) {
                    if (Yii::$app->user->can('admin')) {
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['/author/article/delete', 'id' => $article->id]);
                    }
                },
            ]
        ],
    ],
]); ?>
