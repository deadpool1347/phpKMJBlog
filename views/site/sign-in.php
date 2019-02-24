<?php

use yii\helpers\Url;

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<!-- Account Form Block -->
<div class="form-block account-form-block">
    <!-- Form Block Container -->
    <div class="form-block-container">

        <?php $form = ActiveForm::begin() ?>

            <div class="col-md-12">
                <div class="form-block-title text-center">
                    <h4>Great to have you back!</h4>
                </div>
            </div>

            <div class="col-md-12">
                <?= $form->field($sign_in, 'username') ?>
            </div>

            <div class="col-md-12">
                <?= $form->field($sign_in, 'password')->passwordInput() ?>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <?= Html::submitButton('Воход', ['class' => 'btn btn-gfort']) ?>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-block-title text-center">
                    <h4>Если у вас нет аккаунта</h4>
                    <a href="<?= Url::to(['/site/sign-up']) ?>" class="btn btn-gfort">Регистрация</a>
                </div>
            </div>

        <?php ActiveForm::end() ?>

    </div><!-- /End Form Block Container -->
</div><!-- /End Account Form Block -->