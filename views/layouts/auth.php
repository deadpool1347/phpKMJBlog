<?php
    use app\assets\AuthAsset;
    AuthAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en-US">

    <!-- head
    ============================================================================ -->
    <head>
        <!-- Basic Info
        ======================================================================== -->
        <title>KMJ Blog</title>

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
        <link rel="shortcut icon" href="images/icons/favicon.ico">
        <link rel="apple-touch-icon" sizes="57x57" href="images/icons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="images/icons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="images/icons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="images/icons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="images/icons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="images/icons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/icons/apple-touch-icon-180x180.png">

        <!-- Google Fonts
        ======================================================================== -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CPoppins:400,500,600" rel="stylesheet">

        <!--  CSS Files
        ======================================================================== -->
        <!-- <link rel="stylesheet" href="js/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="css/plugins.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css"> -->

        <!--  Head JS Libs
        ======================================================================== -->
        <!-- <script src="js/vendor/modernizr-custom.js"></script> -->

        <?php $this->head() ?>
    </head><!-- /End head -->
    <!-- body
    ============================================================================ -->
    <body>
        <?php $this->beginBody() ?>
        <!-- To top Button
        ======================================================================== -->
        <a href="#" class="btn-gfort-top"><i class="fa fa-angle-up"></i></a>
        <!-- Main Wrapper
        ======================================================================== -->
        <div id="main-wrapper">
            <!-- Page Body
            ==================================================================== -->
            <div class="page-body">
                <!-- Main Content
                ================================================================ -->
                <div class="main-content">
                    <!-- Main Content Container -->
                    <div class="main-content-container">
                        <!-- gfort Section -->
                        <div class="gfort-section grey-background-color">
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
            </div><!-- /End Page Body -->
            <!-- Footer Section
            ==================================================================== -->
            <footer class="footer-section">
                <!-- Footer copyright Section -->
                <div class="footer-copyright-section">
                    <!-- Footer copyright Section Container -->
                    <div class="footer-copyright-section-container">
                        <!-- container -->
                        <div class="container">
                            <!-- row -->
                            <div class="row">
                                <!-- copyright Widget ( Left ) -->
                                <div class="copyright-widget widget-left-side">
                                    <!-- copyright Widget Container -->
                                    <div class="copyright-widget-container">
                                        <!-- Info Block -->
                                        <div class="info-block">
                                            <!-- Info Block Container -->
                                            <div class="info-block-container">

                                                <?= $this->render('copyright') ?>
                                                <!-- <p>&copy; 2017 <a href="http://themeforest.net/user/graphicfort/portfolio?ref=GraphicFort" title="Graphicfort" target="_blank">Graphicfort</a>, all rights reserved.</p> -->

                                            </div><!-- /End Info Block Container -->
                                        </div><!-- /End Info Block -->


                                    </div><!-- /End copyright Widget Container -->
                                </div><!-- /End copyright Widget ( Left ) -->

                                <?= $this->render('copyright') ?>

                            </div><!-- /End row -->
                        </div><!-- /End container -->
                    </div><!-- /End Footer copyright Section Container -->
                </div><!-- /End Footer copyright Section -->
            </footer><!-- /End Footer Section -->
        </div><!-- /End Main Wrapper -->


        <!-- Java Script Files
        ======================================================================== -->
        <!-- <script type="text/javascript" src="js/vendor/jquery.min.js"></script>
        <script type="text/javascript" src="js/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script> -->

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
