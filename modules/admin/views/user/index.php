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
        'filterModel' => $searchModel,
        'rowOptions' => function($user) {
            if (!$user->active) {
                return ['style' => 'background-color:#e6b1b1;'];
            }
        },
        'columns' => [
            [
                'attribute' => 'login',
            ],
            'email:email',
            [
                'attribute' => 'active',
                'filter' => [0 => 'Не активный', 1 => 'Активный'],
                'format' => 'raw',
                'value' => function($user) {
                    return  $user->active ? Html::tag('span', 'Активный', ['class' => 'text-success']) : Html::tag('span', 'Активный', ['class' => 'text-danger']);
                },
            ],
            [
                'attribute' => 'itemName.description',
                'header' => 'Роль',
            ],
            [
                'attribute' => 'created',
                'filter' => false,
                'value' => function($user) {
                    return  date('d.m.Y', strtotime($user->created));
                },
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
