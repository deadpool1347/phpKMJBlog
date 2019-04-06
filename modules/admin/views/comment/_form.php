<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<script src="/plugins/ckeditor/ckeditor.js"></script>

<?php $form = ActiveForm::begin() ?>
 <h1><?= $title ?></h1>
    <!-- Name -->
    <div class="col-md-12">
        <?= $form->field($comment, 'user_id') ?>
    </div><!-- /End Name -->

    <!-- Email Address -->
    <div class="col-md-12">
        <!-- Form Group -->
        <?= $form->field($comment, 'content')->textarea(['id' =>'editor1']) ?>

        <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace( 'editor1' );
        </script>
    </div><!-- /End Email Address -->
    <!-- Submit Button -->
    <div class="col-md-12">
        <!-- Form Group -->
        <div class="form-group">

            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-gfort']) ?>

        </div><!-- /End Form Group -->
    </div><!-- /End Submit Button -->


<?php ActiveForm::end() ?>
