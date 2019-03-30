<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


$this->title = 'Пользователи';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
// \yii\web\YiiAsset::register($this);
?>
    <h1><?= Html::encode($this->login) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $user->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $user->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверенны, что хотите удалить данного пользоватлея!',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $user,
        'columns' => [

        ],
        'attributes' => [
            'id',
            'login',
            'password',
            'email:email',
            'created',
            'activate',
        ],
    ]) ?>

</div>
