<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php if (Yii::$app->session->getFlash('success')) : ?>
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        Ваша заявка вскоре будет одобрена!
    </div><!-- /End Alert -->
<?php endif; ?>

<div class="section-title section-title-sm">
    <h2 class="section-main-title">Оставить комментарий</h2>
</div><!-- /End Section Title -->


<!-- Respond Form Block -->
<div class="form-block respond-form-block">
    <!-- Form Block Container -->
    <div class="form-block-container">
        <!-- Form -->
        <?php $form = ActiveForm::begin() ?>
            <!-- Form Block Title -->

            <div class="col-md-12">
              <?= $form->field($comment, 'content')->textarea() ?>
            </div><!-- /End Comment -->


            <!-- Submit Button -->
            <div class="col-md-12">
                <!-- Form Group -->
                <div class="form-group">
                  <?= Html::submitButton('Сохранить', ['class' => 'btn btn-gfort']) ?>
                </div><!-- /End Form Group -->
            </div><!-- /End Submit Button -->

        <?php ActiveForm::end() ?>
    </div><!-- /End Form Block Container -->
</div><!-- /End Respond Form Block -->
