<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<script src="..plugins/ckeditor.js"></script>
<div class="comment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($comment, 'user_id')->textInput() ?>

    <?= $form->field($comment, 'content')->textarea(['rows' => 6]) ?>

    
     <textarea name="editor1" id="editor1" rows="10" cols="80">
         This is my textarea to be replaced with CKEditor.
     </textarea>
     <script>
         // Replace the <textarea id="editor1"> with a CKEditor
         // instance, using default configuration.
         CKEDITOR.replace( 'editor1' );
     </script>


    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
