<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

use app\models\Theme;

?>

<?php $form = ActiveForm::begin() ?>

    <h1><?= $title ?></h1>

    <div class="col-md-6">
        <?= $form->field($article, 'title') ?>
    </div>

    <div class="col-md-6">
        <?= $form->field($article, 'theme_id')->dropDownlist(ArrayHelper::map(Theme::find()->all(), 'id', 'name')); ?>
    </div>

    <div class="col-md-12">
        <?= $form->field($article, 'content')->textarea() ?>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-gfort']) ?>
        </div>
    </div>

<?php ActiveForm::end() ?>
