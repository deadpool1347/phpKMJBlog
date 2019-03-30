<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin() ?>
    <!-- Name -->
    <div class="col-md-12">
        <?= $form->field($comment, 'user_id') ?>
    </div><!-- /End Name -->

    <!-- Email Address -->
    <div class="col-md-12">
        <!-- Form Group -->
          <?= $form->field($comment, 'content')->textarea() ?>
    </div><!-- /End Email Address -->
    <!-- Submit Button -->
    <div class="col-md-12">
        <!-- Form Group -->
        <div class="form-group">

            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-gfort']) ?>

        </div><!-- /End Form Group -->
    </div><!-- /End Submit Button -->


<?php ActiveForm::end() ?>