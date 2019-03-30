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

            <?= $form->errorSummary($password) ?>


            <div class="col-md-12">
                <?= $form->field($password, 'password')->passwordInput() ?>
            </div>

            <div class="col-md-12">
                <?= $form->field($password, 'password_ch')->passwordInput() ?>
            </div>


            <div class="col-md-12">
                <div class="form-group">
                    <?= Html::submitButton('Сохранить', ['class' => 'btn btn-gfort']) ?>
                </div>
            </div>



        <?php ActiveForm::end() ?>

    </div><!-- /End Form Block Container -->
</div><!-- /End Account Form Block -->
