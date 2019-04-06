<div class="col-md-12">
    <!-- Contact Form Block -->
    <div class="form-block contact-form-block">
        <!-- Form Block Container -->
        <div class="form-block-container">
            <!-- Form -->
            <?= $this->render('_form', [
              'comment' => $comment,
              'title' => 'Изменение комментария',
              ]) ?>
        </div><!-- /End Form Block Container -->
    </div><!-- /End Contact Form Block -->
</div><!-- /End col-md-12 -->
