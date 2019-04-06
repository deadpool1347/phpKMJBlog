<div class="col-md-12">
    <!-- Contact Form Block -->
    <div class="form-block contact-form-block">
        <!-- Form Block Container -->
        <div class="form-block-container">
            <!-- Form -->
            <div class="col-md-12">
                <!-- Alert -->

            </div><!-- /End col-md-12 -->
          <?= $this->render('_form', [
            'article' => $article,
            'title' => 'Добавление статьи',
            ]) ?>
        </div><!-- /End Form Block Container -->
    </div><!-- /End Contact Form Block -->
</div><!-- /End col-md-12 -->
