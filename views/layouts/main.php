<?php
    use app\assets\AppAsset;
    AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en-US">


    <!-- head
    ============================================================================ -->
    <head>

        <!-- Basic Info
        ======================================================================== -->
        <title>KMJBlog</title>

        <meta name="author" content="Graphicfort">
        <meta name="robots" content="index follow">
        <meta name="googlebot" content="index follow">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="keywords" content="PLUME, HTML5, CSS3, Creative, Multipurpose, Template, Create a website fast">
        <meta name="description" content="HTML5 Multipurpose Template, Create a website fast">

        <!-- Mobile Configurations
        ======================================================================== -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- fav and icons for Mobile
        ======================================================================== -->
        <link rel="shortcut icon" href="/theme/images/icons/favicon.ico">
        <link rel="apple-touch-icon" sizes="57x57" href="/theme/images/icons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/theme/images/icons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/theme/images/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/theme/images/icons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/theme/images/icons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/theme/images/icons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/theme/images/icons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/theme/images/icons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/theme/images/icons/apple-touch-icon-180x180.png">

        <!-- Google Fonts
        ======================================================================== -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CPoppins:400,500,600" rel="stylesheet">

        <!--  CSS Files
        ======================================================================== -->
        <!-- <link rel="stylesheet" href="/theme/js/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/theme/fonts/font-awesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="/theme/css/plugins.css">
        <link rel="stylesheet" href="/theme/css/style.css">
        <link rel="stylesheet" href="/theme/css/responsive.css"> -->

        <!--  Head JS Libs
        ======================================================================== -->
        <!-- <script src="/theme/js/vendor/modernizr-custom.js"></script> -->
        <?php $this->head() ?>
    </head><!-- /End head -->
    <!-- body
    ============================================================================ -->
    <body>
      <?php $this->beginBody() ?>
        <!-- To top Button
        ======================================================================== -->
        <a href="/theme/#" class="btn-gfort-top"><i class="fa fa-angle-up"></i></a>
        <!-- Main Wrapper
        ======================================================================== -->
        <div id="main-wrapper">

            <?= $this->render('header') ?>

            <!-- Page Title Section
            ==================================================================== -->
            <div class="page-title-section page-title-section-wide grey-background-color">
                <!-- Section Container -->
                <div class="section-container">


                    <!-- Breadcrumb Title -->
                    <div class="breadcrumb-title">
                        <!-- container -->
                        <div class="container">
                            <h3 class="breadcrumb-main-title">KMJBlog Блог школы математики и информатики</h1>
                        </div><!-- /End container -->
                    </div><!-- /End Breadcrumb Title -->
                    <!-- Breadcrumb Block -->
                    <div class="breadcrumb-block">
                        <!-- container -->
                        <div class="container">
                            <ol class="breadcrumb">
                                <li><a href="/theme/index.html" title="Home"><i class="fa fa-home"></i></a></li>

                            </ol>
                        </div><!-- /End container -->
                    </div><!-- /End Breadcrumb block -->
                </div><!-- /End Section Container -->
            </div><!-- /End Page Title Section -->
            <!-- Page Body (Right Sidebar)
            ==================================================================== -->
            <div class="page-body page-right-sidebar">
                <!-- Main Content
                ================================================================ -->
                <div class="main-content">
                    <!-- Main Content Container -->
                    <div class="main-content-container">
                        <!-- gfort Section -->
                        <div class="gfort-section">
                            <!-- Section Container -->
                            <div class="section-container">
                                <!-- container -->
                                <div class="container">
                                    <!-- row -->
                                    <div class="row">
                                        <!-- col-md-12 -->
                                        <div class="col-md-12">
                                            <?= $content ?>
                                        </div><!-- /End col-md-12 -->
                                    </div><!-- /End row -->
                                </div><!-- /End container -->
                            </div><!-- /End Section Container -->
                        </div><!-- /End gfort Section -->
                    </div><!-- /End Main Content Container -->
                </div><!-- /End Main Content -->
                <?= $this->render('sidebar') ?>
            </div><!-- /End Page Body (Right Sidebar) -->
            <?= $this->render('footer') ?>
        </div><!-- /End Main Wrapper -->
        <!-- Java Script Files
        ======================================================================== -->
        <!-- <script type="text/javascript" src="/theme/js/vendor/jquery.min.js"></script>
        <script type="text/javascript" src="/theme/js/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/theme/js/plugins.js"></script>
        <script type="text/javascript" src="/theme/js/scripts.js"></script> -->
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
