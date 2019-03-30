<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Пользователи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

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
        <?= Html::a('Создать пользователя', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'password',
            'email:email',
            'active',
            [
                'attribute' => 'created',
                'value' => function($user) {
                    return  date('d.m.Y', strtotime($user->created));
                },
            ],
            [
                'attribute' => 'login',
            ],
            [
                'attribute' => 'itemName.description',
                'header' => 'Роль',
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
                'buttons' => [
                    'update' => function($url, $user){
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', ['/admin/user/update', 'id' => $user->id]);
                    },
                     'delete' => function($url, $user){
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['/admin/user/delete', 'id' => $user->id]);
                    },
                ]
            ],
        ],
    ]); ?>
</div>
