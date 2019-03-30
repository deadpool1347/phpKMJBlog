<?php
use yii\helpers\Url;
 ?>
<article class="blog-item format-standard">
    <!-- Blog item Container -->
    <div class="blog-item-container">


        <!-- Blog item Media -->
        <div class="blog-item-media">
            <a href="/theme/#" title="You must do the things you think you can't do" class="overlay-hover-2x scale-hover">
                <img src="/theme/images/blog/thumbs/large/001.jpg" alt="Article Image" />
            </a>
        </div><!-- /End Blog item Media -->


        <!-- Blog item Body -->
        <div class="blog-item-body">


            <!-- Blog item Meta -->
            <div class="blog-item-meta">
                <span class="item-meta-format">
                    <a href="/theme/#">
                        <i class="fa fa-file-text-o"></i>
                        <i class="fa fa-file-text-o"></i>
                    </a>
                </span>
                <span class="item-meta-date">
                    <time datetime="2016-05-17"><?= date('d.m.Y', strtotime($model->created)) ?></time>
                </span>
                <span class="item-meta-category">
                    <a href="/theme/#" title="Standard">Standard</a>
                </span>
                <span class="item-meta-comments">
                    <a href="/theme/#"><i class="fa fa-comments-o"></i>3</a>
                </span>
            </div><!-- /End Blog item Meta -->


            <!-- Blog item Title -->
            <h2 class="blog-item-title">
                <a href="/theme/#" title="You must do the things you think you can't do"><?= $model->title ?></a>
            </h2><!-- /End Blog item Title -->


            <!-- Blog item Description -->
            <div class="blog-item-description">

                <p><?= $model->content ?></p>

            </div><!-- /End Blog item Description -->


            <!-- Blog item Read More Button -->
            <div class="blog-item-read-btn">
                <a href="<?= Url::to(['/article/show', 'id' => $model->id]) ?>">Read more <i class="fa fa-long-arrow-right"></i></a>
            </div><!-- /End Blog item Read More Button -->


        </div><!-- /End Blog item Body -->


        <!-- Blog item Footer -->
        <div class="blog-item-footer">


            <!-- Blog item Author -->
            <div class="blog-item-author">
                <a href="/theme/#" title="Posts by Graphicfort" data-toggle="tooltip" data-placement="top">
                    <img src="/theme/images/avatar/gf-avatar.jpg" alt="Graphicfort Author" /><span>Graphicfort</span>
                </a>
            </div><!-- /End Blog item Author -->


            <!-- Blog item Buttons -->
            <div class="blog-item-btns">
                <!-- Blog item Buttons List -->
                <ul class="blog-item-btns-list">

                    <!-- Blog item Views -->
                    <li class="blog-item-views">
                        <p><i class="fa fa-eye"></i>10</p>
                    </li><!-- /End Blog item Views -->

                    <!-- Blog item Like -->
                    <li class="blog-item-like">
                        <a href="/theme/#"><i class="fa fa-heart-o"></i>5</a>
                    </li><!-- /End Blog item Like -->
                    <?php if (Yii::$app->user->can('updateArticle')) : ?>
                    <li class="blog-item-like">
                        <a href="<?= Url::to(['/article/update']) ?>"><i class="fa fa-edit"></i></a>
                    </li><!-- /End Blog item Like -->
                  <?php endif; ?>
                    <!-- Blog item Share -->
                    <li class="blog-item-share" title="Share" data-toggle="tooltip" data-placement="top">
                        <a href="/theme/#"><i class="fa fa-share"></i></a>
                        <!-- Social Icons Block -->
                        <div class="social-icons-block icons-style-1">
                            <ul>

                                <li>
                                    <a href="/theme/#" title="Facebook">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="/theme/#" title="Google Plus">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="/theme/#" title="Twitter">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="/theme/#" title="Pinterest">
                                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- /End Social Icons Block -->
                    </li><!-- /End Blog item Share -->
                </ul><!-- /End Blog item Buttons List -->
            </div><!-- /End Blog item Buttons -->
        </div><!-- /End Blog item Footer -->
    </div><!-- /End Blog item Container -->
</article><!-- /End Blog item -->
