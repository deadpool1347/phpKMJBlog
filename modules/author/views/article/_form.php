<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<script src="/plugins/ckeditor/ckeditor.js"></script>

<?php $form = ActiveForm::begin() ?>
    <!-- Name -->
    <h1><?= $title ?></h1>
    <div class="col-md-12">
        <?= $form->field($article, 'title') ?>
    </div><!-- /End Name -->

    <!-- Email Address -->
    <div class="col-md-12">
        <!-- Form Group -->
          <?= $form->field($article, 'content')->textarea(['id' => 'editor']) ?>
    </div><!-- /End Email Address -->
    <!-- Submit Button -->
    <div class="col-md-12">
        <!-- Form Group -->
        <div class="form-group">

            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-gfort']) ?>

        </div><!-- /End Form Group -->
    </div><!-- /End Submit Button -->


<?php ActiveForm::end() ?>


<script>
    CKEDITOR.replace('editor');
</script>
