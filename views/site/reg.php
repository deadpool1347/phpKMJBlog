<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<!-- Account Form Block -->
<div class="form-block account-form-block">
    <!-- Form Block Container -->
    <div class="form-block-container">
        <!-- Form -->
        <?php $form = ActiveForm::begin() ?>


            <!-- Form Block Title -->
            <div class="col-md-12">
                <div class="form-block-title text-center">
                    <h4>Great to see you here!</h4>
                </div>
            </div><!-- /End Form Block Title -->

            <?= $form->errorSummary($reg) ?>

            <!-- Email Address -->
            <div class="col-md-12">
                <!-- Form Group -->
                    <?= $form->field($reg, 'email') ?>
                    <!-- <label for="account_form_email">E-mail</label>
                    <input type="email" class="form-control" name="account_form_email" id="email"> -->

            </div><!-- /End Email Address -->


            <!-- Username -->
            <div class="col-md-12">
                  <?= $form->field($reg, 'login') ?>
                    <!-- <label for="account_form_name">Имя пользователя</label>
                    <input type="text" class="form-control" name="account_form_name" id="name"> -->

            </div><!-- /End Username -->


            <!-- Password -->
            <div class="col-md-12">
                    <?= $form->field($reg, 'password')->passwordInput() ?>
                    <!-- <label for="account_form_password">Пароль</label>
                    <input type="password" class="form-control" name="account_form_password" id="account_form_password"> -->

            </div><!-- /End Password -->

            <!-- Password -->
            <div class="col-md-12">
                    <!-- <label for="account_form_password">Подтверждение пароля</label>
                    <input type="password" class="form-control" name="account_form_password_ch" id="account_form_password"> -->
                    <?= $form->field($reg, 'password_ch')->passwordInput() ?>

            </div><!-- /End Password -->

            <!-- Submit Button -->
            <div class="col-md-12">
                <!-- Form Group -->
                <div class="form-group">

                    <p>Создавая аккаунт, вы соглашаетесь с нашими <a href="#">Terms and Conditions</a> and our <a href="#">Privacy Policy</a>.</p>

                    <?= Html::submitButton('Регистрация', ['class' => 'btn btn-gfort']) ?>

                </div><!-- /End Form Group -->
            </div><!-- /End Submit Button -->


            <!-- Form Block Title -->
            <div class="col-md-12">
                <div class="form-block-title text-center">
                    <h4>Если у вас уже есть аккаунт</h4>
                    <a href="<?= Url::to(['/site/sign-in']) ?>" class="btn btn-gfort">Войти</a>
                </div>
            </div><!-- /End Form Block Title -->


        <?php ActiveForm::end() ?>
    </div><!-- /End Form Block Container -->
</div><!-- /End Account Form Block -->
