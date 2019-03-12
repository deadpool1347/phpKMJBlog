<div class="comments-block">
    <!-- Comments Block container -->
    <div class="comments-block-container">
      <?= $this->render('_comment_form', [
        'comment' => $comment,
        ]) ?>



        <!-- Section Title -->
        <div class="section-title section-title-sm">
            <h2 class="section-main-title">Коментарии</h2>
        </div><!-- /End Section Title -->


        <!-- Comments Block List -->
        <ul class="comments-block-list">

            <?php foreach ($comments as $message) :  ?>
            <!-- Comments Block Item -->
                <li class="comments-block-item">
                <!-- Comment Block -->
                <div class="comment-block">
                    <!-- Comment Block Container -->
                    <div class="comment-block-container">


                        <!-- Comment Block Body -->
                        <div class="comment-block-body">


                            <!-- Comment Block Head -->
                            <div class="comment-block-head">
                                <h6><?= $message->user->login ?></h6>
                                <br>
                                <time datetime="2016-05-17"><?= date('d.m.Y', strtotime($message->created))?></time>
                            </div><!-- /End Comment Block Head -->


                            <!-- Comment Block Description -->
                            <div class="comment-block-description">
                                <p><?= $message->content ?></p>
                            </div><!-- /End Comment Block Description -->

                        </div><!-- /End Comment Block Body -->


                    </div><!-- /End Comment Block Container -->
                </div><!-- /End Comment Block -->
            </li><!-- /End Comments Block Item -->
            <?php endforeach; ?>
        </ul><!-- /End Comments Block List -->


        <!-- Section Title -->

    </div><!-- /End Comments Block container -->
</div><!-- /End Comments Block -->
