<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

use app\models\AuthItem;

?>

<?php $form = ActiveForm::begin(); ?>

    
    <div class="col-md-12">
        <?= $form->field($user, 'login')->textInput(['maxlength' => true]) ?>
    </div><!-- /End Name -->

    <div class="col-md-12">
        <?= $form->field($user, 'email')->textInput(['maxlength' => true]) ?>
    </div><!-- /End Name -->

    <div class="col-md-12">
        <?= $form->field($user, 'role')->dropDownList(ArrayHelper::map(AuthItem::findAll(['type' => 1]), 'name', 'description')) ?>
    </div><!-- /End Name -->

    <div class="col-md-12">
        <?= $form->field($user, 'active')->dropDownList(['0' => 'Неактивен', '1' => 'Активен']) ?>
    </div><!-- /End Name -->


    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

<?php ActiveForm::end(); ?>
