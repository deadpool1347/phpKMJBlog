<?php
use yii\helpers\Html;
 ?>

<!-- Header Section
==================================================================== -->
<header class="header-section fixed-header">
    <!-- Header Section Container -->
    <div class="header-section-container">
        <!-- Header Menu -->
        <div class="header-menu">
            <!-- Header Menu Container -->
            <div class="header-menu-container">
                <!-- Navbar -->
                <nav class="navbar">
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row">
                            <!-- col-md-12 -->
                            <div class="col-md-12">
                                <!-- Navbar Header / Logo -->
                                <div class="navbar-header">
                                    <a href="/" class="navbar-brand" title="PLUME">
                                        <img src="/theme/images/logo.png" alt="KMJBlog Logo" &nbsp />   <h1>KMJ Blog </h1>
                                    </a>
                                </div><!-- /End Navbar Header / Logo -->
                                <!-- Header Buttons -->
                                <ul class="header-btns">
                                    <!-- Header Cart Button -->

                                    <!-- Header Language Button -->



                                    <!-- Header Search Button -->
                                    <li class="header-search-btn">
                                        <a href="/theme/#" class="form-open-btn">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </li><!-- /End Header Search Button -->


                                </ul><!-- /End Header Buttons -->


                                <!-- Toggle Menu Button -->
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="menu-wd">Menu</span>
                                    <span class="lines-wrapper"><i class="lines"></i></span>
                                </button><!-- /End Toggle Menu Button -->

                                <?= $this->render('menu') ?>

                            </div><!-- /End col-md-12 -->
                        </div><!-- /End row -->
                    </div><!-- /End container -->
                </nav><!-- /End Navbar -->


                <!-- Header Search Form Block
                ==================================================== -->
                <div class="form-block header-search-form-block">
                    <!-- Form Block Container -->
                    <div class="form-block-container">
                        <!-- Form -->
                        <?= Html::beginForm(['/'], 'get') ?>
                            <!-- col-md-12 -->
                            <div class="col-md-12">
                                <!-- Form Group -->

                                    <div class="form-group">
                                        <!-- Close Button -->
                                        <a href="/theme/#" class="form-close-btn">&times;</a>
                                        <?= Html::textInput('search', null, [
                                            'class' => 'form-control',
                                            'placeholder' => 'Пожалуйста введите значение' ,
                                            'autocomplete' =>'off',
                                            ]) ?>
                                        <!-- <input type="text" class="form-control" placeholder="Type then hit enter to search..." name="s" autocomplete="off"> -->
                                    </div><!-- /End Form Group -->

                            </div><!-- /End col-md-12 -->

                        <?= Html::endForm()?>
                    </div><!-- /End Form Block Container -->
                </div><!-- /End Header Search Form Block -->


            </div><!-- /End Header Menu Container -->
        </div><!-- /End Header Menu -->


    </div><!-- /End Header Section Container -->
</header><!-- /End Header Section -->
