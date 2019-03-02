<?php

use yii\helpers\Url;

?>

<!-- Account Form Block -->
<div class="form-block account-form-block">
    <!-- Form Block Container -->
    <div class="form-block-container">
        <!-- Form -->
        <form method="post" action="#">


            <!-- Form Block Title -->
            <div class="col-md-12">
                <div class="form-block-title text-center">
                    <h4>Great to see you here!</h4>
                </div>
            </div><!-- /End Form Block Title -->


            <!-- Email Address -->
            <div class="col-md-12">
                <!-- Form Group -->
                <div class="form-group">

                    <label for="account_form_email">E-mail</label>
                    <input type="email" class="form-control" name="account_form_email" id="email">

                </div><!-- /End Form Group -->
            </div><!-- /End Email Address -->


            <!-- Username -->
            <div class="col-md-12">
                <div class="form-group">

                    <label for="account_form_name">Имя пользователя</label>
                    <input type="text" class="form-control" name="account_form_name" id="name">

                </div>
            </div><!-- /End Username -->


            <!-- Password -->
            <div class="col-md-12">
                <div class="form-group">

                    <label for="account_form_password">Пароль</label>
                    <input type="password" class="form-control" name="account_form_password" id="account_form_password">

                </div>
            </div><!-- /End Password -->


            <!-- Submit Button -->
            <div class="col-md-12">
                <!-- Form Group -->
                <div class="form-group">

                    <p>By creating an account you agree to our <a href="#">Terms and Conditions</a> and our <a href="#">Privacy Policy</a>.</p>

                    <button type="submit" class="btn btn-gfort">Sign up</button>

                </div><!-- /End Form Group -->
            </div><!-- /End Submit Button -->


            <!-- Form Block Title -->
            <div class="col-md-12">
                <div class="form-block-title text-center">
                    <h4>Если у вас уже есть аккаунт</h4>
                    <a href="<?= Url::to(['/site/sign-in']) ?>" class="btn btn-gfort">Войти</a>
                </div>
            </div><!-- /End Form Block Title -->


        </form><!-- /End Form -->
    </div><!-- /End Form Block Container -->
</div><!-- /End Account Form Block -->
