<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
    'filterModel' => $searchModel,
    'columns' => [
        'id',
        'title',
        [
            'header' => 'Автор',
            'attribute' => 'user.login',
        ],
        [
            'attribute' => 'created',
            'filter' => false,
            'value' => function($article) {
                return  date('d.m.Y', strtotime($article->created));
            }
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{publish} {update} {delete}',
            'buttons' => [
                'publish' => function($url, $article) {
                    if (Yii::$app->user->can('admin')) {
                        $icon = $article->is_published ? 'glyphicon glyphicon-eye-close' : 'glyphicon glyphicon-eye-open';
                        return Html::a(Html::tag('span', null, ['class' => $icon]), ['/author/article/publish', 'id' => $article->id]);
                    }
                },
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
