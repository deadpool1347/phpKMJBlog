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
        <title>PLUME HTML5 Multipurpose Template</title>

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
        <link href="/theme/https://fonts.googleapis.com/css?family=Montserrat:400,700%7CPoppins:400,500,600" rel="stylesheet">

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
                                                <a href="/theme/index.html" class="navbar-brand" title="PLUME">
                                                    <img src="/theme/images/logo.png" alt="PLUME Logo" />
                                                </a>
                                            </div><!-- /End Navbar Header / Logo -->


                                            <!-- Header Buttons -->
                                            <ul class="header-btns">


                                                <!-- Header Cart Button -->
                                                <li class="header-cart-btn">
                                                    <a href="/theme/#" title="View Cart">
                                                        <i class="fa fa-shopping-bag"></i><span class="badge">2</span>
                                                    </a>
                                                    <!-- Header Cart -->
                                                    <div class="header-cart">
                                                        <!-- Header Cart Container -->
                                                        <div class="header-cart-container">


                                                            <!-- Shop Products -->
                                                            <ul class="shop-products">


                                                                <!-- Product Item -->
                                                                <li>

                                                                    <!-- Remove Button -->
                                                                    <a href="/theme/#" class="remove-btn" title="Remove this item">&times;</a>

                                                                    <!-- Item image -->
                                                                    <a href="/theme/#" title="Eraser with wood plate" class="item-image overlay-hover scale-hover-2x">
                                                                        <img src="/theme/images/header/header-cart/001.jpg" alt="Product Image" />
                                                                    </a>

                                                                    <!-- Shop Item Body -->
                                                                    <div class="shop-item-body">

                                                                        <!-- Title -->
                                                                        <a href="/theme/#" title="Eraser with wood plate">Eraser with wood plate</a>

                                                                        <!-- Quantity -->
                                                                        <span class="quantity">1 &times; <span class="amount"><span class="currencySymbol">$</span>17</span></span>

                                                                    </div><!-- /End Shop Item Body -->

                                                                </li><!-- /End Product Item -->


                                                                <!-- Product Item -->
                                                                <li>

                                                                    <!-- Remove Button -->
                                                                    <a href="/theme/#" class="remove-btn" title="Remove this item">&times;</a>

                                                                    <!-- Item image -->
                                                                    <a href="/theme/#" title="Pencil with wood stand" class="item-image overlay-hover scale-hover-2x">
                                                                        <img src="/theme/images/header/header-cart/002.jpg" alt="Product Image" />
                                                                    </a>

                                                                    <!-- Shop Item Body -->
                                                                    <div class="shop-item-body">

                                                                        <!-- Title -->
                                                                        <a href="/theme/#" title="Pencil with wood stand">Pencil with wood stand</a>

                                                                        <!-- Quantity -->
                                                                        <span class="quantity">2 &times; <span class="amount"><span class="currencySymbol">$</span>17</span></span>

                                                                    </div><!-- /End Shop Item Body -->

                                                                </li><!-- /End Product Item -->


                                                            </ul><!-- /End Shop Products -->


                                                            <!-- Total Price -->
                                                            <p class="total-price">
                                                                <strong>Subtotal:</strong>
                                                                <span class="amount"><span class="currencySymbol">$</span>51</span>
                                                            </p><!-- /End Total Price -->


                                                            <!-- Buttons -->
                                                            <p class="buttons">
                                                                <a href="/theme/#" class="btn btn-gfort">View Cart</a>
                                                                <a href="/theme/#" class="btn btn-gfort">Checkout</a>
                                                            </p><!-- /End Buttons -->


                                                        </div><!-- /End Header Cart Container -->
                                                    </div><!-- /End Header Cart -->
                                                </li><!-- /End Header Cart Button -->


                                                <!-- Header Language Button -->
                                                <li class="header-lang-btn">
                                                    <a href="/theme/#" title="English">EN</a>
                                                    <!-- Header Language Menu -->
                                                    <nav class="header-language-menu">
                                                        <ul>

                                                            <li>
                                                                <a href="/theme/#" title="French">
                                                                    <img src="/theme/images/header/header-lang-flags/fr.jpg" alt="French">Fr
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="/theme/#" title="Deutsch">
                                                                    <img src="/theme/images/header/header-lang-flags/ge.jpg" alt="Deutsch">De
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="/theme/#" title="Italian">
                                                                    <img src="/theme/images/header/header-lang-flags/it.jpg" alt="Italian">It
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </nav><!-- /End Header Language Menu -->
                                                </li><!-- /End Header Language Button -->


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


                                            <!-- Navbar Collapse (Menu) -->
                                            <div class="navbar-collapse collapse">
                                                <ul class="nav navbar-nav">


                                                    <li>
                                                        <a href="/theme/index.html">Home</a>
                                                    </li>


                                                    <li>
                                                        <a href="/theme/#">Features</a>
                                                        <ul class="submenu">


                                                            <li>
                                                                <a href="/theme/#">Headers</a>
                                                                <ul class="submenu">

                                                                    <li><a href="/theme/header-1.html">Header 1</a></li>

                                                                    <li><a href="/theme/header-2.html">Header 2</a></li>

                                                                    <li><a href="/theme/header-3.html">Header 3</a></li>

                                                                    <li><a href="/theme/header-4.html">Header 4</a></li>

                                                                    <li><a href="/theme/header-5.html">Header 5</a></li>

                                                                    <li><a href="/theme/header-6.html">Header 6</a></li>

                                                                    <li><a href="/theme/header-7.html">Header 7</a></li>

                                                                    <li><a href="/theme/header-8.html">Header 8</a></li>

                                                                    <li><a href="/theme/header-9.html">Header 9</a></li>

                                                                    <li><a href="/theme/header-10.html">Header 10</a></li>

                                                                    <li><a href="/theme/header-11.html">Header 11</a></li>

                                                                    <li><a href="/theme/header-12.html">Header 12</a></li>

                                                                    <li><a href="/theme/header-13.html">Header 13</a></li>

                                                                    <li><a href="/theme/header-14.html">Header 14</a></li>

                                                                </ul>
                                                            </li>


                                                            <li>
                                                                <a href="/theme/#">Page Title</a>
                                                                <ul class="submenu">

                                                                    <li>
                                                                        <a href="/theme/#">Large</a>
                                                                        <ul class="submenu">

                                                                            <li>
                                                                                <a href="/theme/page-title-large-parallax-background.html">Parallax Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-large-grey-background.html">Grey Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-large-white-background.html">White Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-large-main-background.html">Main Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-large-black-background.html">Black Background</a>
                                                                            </li>

                                                                        </ul>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/#">Medium 1</a>
                                                                        <ul class="submenu">

                                                                            <li>
                                                                                <a href="/theme/page-title-medium-1-parallax-background.html">Parallax Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-medium-1-grey-background.html">Grey Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-medium-1-white-background.html">White Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-medium-1-main-background.html">Main Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-medium-1-black-background.html">Black Background</a>
                                                                            </li>

                                                                        </ul>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/#">Medium 2</a>
                                                                        <ul class="submenu">

                                                                            <li>
                                                                                <a href="/theme/page-title-medium-2-parallax-background.html">Parallax Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-medium-2-grey-background.html">Grey Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-medium-2-white-background.html">White Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-medium-2-main-background.html">Main Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-medium-2-black-background.html">Black Background</a>
                                                                            </li>

                                                                        </ul>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/#">Small</a>
                                                                        <ul class="submenu">

                                                                            <li>
                                                                                <a href="/theme/page-title-small-parallax-background.html">Parallax Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-small-grey-background.html">Grey Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-small-white-background.html">White Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-small-main-background.html">Main Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-small-black-background.html">Black Background</a>
                                                                            </li>

                                                                        </ul>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/#">Wide</a>
                                                                        <ul class="submenu">

                                                                            <li>
                                                                                <a href="/theme/page-title-wide-parallax-background.html">Parallax Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-wide-grey-background.html">Grey Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-wide-white-background.html">White Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-wide-main-background.html">Main Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-wide-black-background.html">Black Background</a>
                                                                            </li>

                                                                        </ul>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/#">Minimal</a>
                                                                        <ul class="submenu">

                                                                            <li>
                                                                                <a href="/theme/page-title-minimal-parallax-background.html">Parallax Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-minimal-grey-background.html">Grey Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-minimal-white-background.html">White Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-minimal-main-background.html">Main Background</a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="/theme/page-title-minimal-black-background.html">Black Background</a>
                                                                            </li>

                                                                        </ul>
                                                                    </li>

                                                                </ul>
                                                            </li>


                                                            <li>
                                                                <a href="/theme/#">Events</a>
                                                                <ul class="submenu">

                                                                    <li><a href="/theme/events-right-sidebar.html">Right sidebar</a></li>

                                                                    <li><a href="/theme/events-left-sidebar.html">Left sidebar</a></li>

                                                                    <li><a href="/theme/events-wide.html">Wide</a></li>

                                                                    <li>
                                                                        <a href="/theme/#">Single Event</a>
                                                                        <ul class="submenu">

                                                                            <li><a href="/theme/events-single-right-sidebar.html">Right sidebar</a></li>

                                                                            <li><a href="/theme/events-single-left-sidebar.html">Left sidebar</a></li>

                                                                            <li><a href="/theme/events-single-wide.html">Wide</a></li>

                                                                        </ul>
                                                                    </li>

                                                                </ul>
                                                            </li>


                                                            <li><a href="/theme/widgets.html">Widgets</a></li>


                                                            <li><a href="/theme/top-footer.html">Top Footer</a></li>


                                                            <li><a href="/theme/copyright.html">Copyright</a></li>


                                                        </ul>
                                                    </li>


                                                    <li>
                                                        <a href="/theme/#">Portfolio</a>
                                                        <ul class="submenu">


                                                            <li>
                                                                <a href="/theme/#">1 Column</a>
                                                                <ul class="submenu">

                                                                    <li>
                                                                        <a href="/theme/#">Right Sidebar</a>
                                                                        <ul class="submenu">

                                                                            <li><a href="/theme/portfolio-1-right-sidebar.html">Default</a></li>

                                                                            <li><a href="/theme/portfolio-1-right-sidebar-title-overlay.html">Title overlay</a></li>

                                                                        </ul>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/#">Left Sidebar</a>
                                                                        <ul class="submenu">

                                                                            <li><a href="/theme/portfolio-1-left-sidebar.html">Default</a></li>

                                                                            <li><a href="/theme/portfolio-1-left-sidebar-title-overlay.html">Title overlay</a></li>

                                                                        </ul>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/#">Wide</a>
                                                                        <ul class="submenu">

                                                                            <li><a href="/theme/portfolio-1-wide.html">Default</a></li>

                                                                            <li><a href="/theme/portfolio-1-wide-title-overlay.html">Title overlay</a></li>

                                                                        </ul>
                                                                    </li>

                                                                </ul>
                                                            </li>


                                                            <li>
                                                                <a href="/theme/#">2 Columns</a>
                                                                <ul class="submenu">

                                                                    <li>
                                                                        <a href="/theme/#">Right Sidebar</a>
                                                                        <ul class="submenu">

                                                                            <li><a href="/theme/portfolio-2-right-sidebar.html">Default</a></li>

                                                                            <li><a href="/theme/portfolio-2-right-sidebar-title-overlay.html">Title overlay</a></li>

                                                                            <li><a href="/theme/portfolio-2-right-sidebar-no-margin.html">Default - no margin</a></li>

                                                                            <li><a href="/theme/portfolio-2-right-sidebar-title-overlay-no-margin.html">Title overlay - no margin</a></li>

                                                                        </ul>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/#">Left Sidebar</a>
                                                                        <ul class="submenu">

                                                                            <li><a href="/theme/portfolio-2-left-sidebar.html">Default</a></li>

                                                                            <li><a href="/theme/portfolio-2-left-sidebar-title-overlay.html">Title overlay</a></li>

                                                                            <li><a href="/theme/portfolio-2-left-sidebar-no-margin.html">Default - no margin</a></li>

                                                                            <li><a href="/theme/portfolio-2-left-sidebar-title-overlay-no-margin.html">Title overlay - no margin</a></li>

                                                                        </ul>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/#">Wide</a>
                                                                        <ul class="submenu">

                                                                            <li><a href="/theme/portfolio-2-wide.html">Default</a></li>

                                                                            <li><a href="/theme/portfolio-2-wide-title-overlay.html">Title overlay</a></li>

                                                                            <li><a href="/theme/portfolio-2-wide-no-margin.html">Default - no margin</a></li>

                                                                            <li><a href="/theme/portfolio-2-wide-title-overlay-no-margin.html">Title overlay - no margin</a></li>

                                                                        </ul>
                                                                    </li>

                                                                </ul>
                                                            </li>


                                                            <li>
                                                                <a href="/theme/#">3 Columns</a>
                                                                <ul class="submenu">

                                                                    <li>
                                                                        <a href="/theme/#">Right Sidebar</a>
                                                                        <ul class="submenu">

                                                                            <li><a href="/theme/portfolio-3-right-sidebar.html">Default</a></li>

                                                                            <li><a href="/theme/portfolio-3-right-sidebar-title-overlay.html">Title overlay</a></li>

                                                                            <li><a href="/theme/portfolio-3-right-sidebar-no-margin.html">Default - no margin</a></li>

                                                                            <li><a href="/theme/portfolio-3-right-sidebar-title-overlay-no-margin.html">Title overlay - no margin</a></li>

                                                                        </ul>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/#">Left Sidebar</a>
                                                                        <ul class="submenu">

                                                                            <li><a href="/theme/portfolio-3-left-sidebar.html">Default</a></li>

                                                                            <li><a href="/theme/portfolio-3-left-sidebar-title-overlay.html">Title overlay</a></li>

                                                                            <li><a href="/theme/portfolio-3-left-sidebar-no-margin.html">Default - no margin</a></li>

                                                                            <li><a href="/theme/portfolio-3-left-sidebar-title-overlay-no-margin.html">Title overlay - no margin</a></li>

                                                                        </ul>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/#">Wide</a>
                                                                        <ul class="submenu">

                                                                            <li><a href="/theme/portfolio-3-wide.html">Default</a></li>

                                                                            <li><a href="/theme/portfolio-3-wide-title-overlay.html">Title overlay</a></li>

                                                                            <li><a href="/theme/portfolio-3-wide-no-margin.html">Default - no margin</a></li>

                                                                            <li><a href="/theme/portfolio-3-wide-title-overlay-no-margin.html">Title overlay - no margin</a></li>

                                                                        </ul>
                                                                    </li>

                                                                </ul>
                                                            </li>


                                                            <li>
                                                                <a href="/theme/#">4 Columns</a>
                                                                <ul class="submenu">

                                                                    <li>
                                                                        <a href="/theme/#">Wide</a>
                                                                        <ul class="submenu">

                                                                            <li><a href="/theme/portfolio-4-wide.html">Default</a></li>

                                                                            <li><a href="/theme/portfolio-4-wide-title-overlay.html">Title overlay</a></li>

                                                                            <li><a href="/theme/portfolio-4-wide-no-margin.html">Default - no margin</a></li>

                                                                            <li><a href="/theme/portfolio-4-wide-title-overlay-no-margin.html">Title overlay - no margin</a></li>

                                                                        </ul>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/#">FullWidth</a>
                                                                        <ul class="submenu">

                                                                            <li><a href="/theme/portfolio-4-fullwidth.html">Default</a></li>

                                                                            <li><a href="/theme/portfolio-4-fullwidth-title-overlay.html">Title overlay</a></li>

                                                                            <li><a href="/theme/portfolio-4-fullwidth-no-margin.html">Default - no margin</a></li>

                                                                            <li><a href="/theme/portfolio-4-fullwidth-title-overlay-no-margin.html">Title overlay - no margin</a></li>

                                                                        </ul>
                                                                    </li>

                                                                </ul>
                                                            </li>


                                                            <li>
                                                                <a href="/theme/#">5 Columns</a>
                                                                <ul class="submenu">

                                                                    <li>
                                                                        <a href="/theme/#">Wide</a>
                                                                        <ul class="submenu">

                                                                            <li><a href="/theme/portfolio-5-wide.html">Default</a></li>

                                                                            <li><a href="/theme/portfolio-5-wide-title-overlay.html">Title overlay</a></li>

                                                                            <li><a href="/theme/portfolio-5-wide-no-margin.html">Default - no margin</a></li>

                                                                            <li><a href="/theme/portfolio-5-wide-title-overlay-no-margin.html">Title overlay - no margin</a></li>

                                                                        </ul>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/#">FullWidth</a>
                                                                        <ul class="submenu">

                                                                            <li><a href="/theme/portfolio-5-fullwidth.html">Default</a></li>

                                                                            <li><a href="/theme/portfolio-5-fullwidth-title-overlay.html">Title overlay</a></li>

                                                                            <li><a href="/theme/portfolio-5-fullwidth-no-margin.html">Default - no margin</a></li>

                                                                            <li><a href="/theme/portfolio-5-fullwidth-title-overlay-no-margin.html">Title overlay - no margin</a></li>

                                                                        </ul>
                                                                    </li>

                                                                </ul>
                                                            </li>


                                                            <li><a href="/theme/portfolio-masnory.html">Masnory</a></li>


                                                            <li>
                                                                <a href="/theme/#">Single Project</a>
                                                                <ul class="submenu">

                                                                    <li>
                                                                        <a href="/theme/#">Right Sidebar</a>
                                                                        <ul class="submenu">

                                                                            <li><a href="/theme/portfolio-single-right-sidebar-image.html">image</a></li>

                                                                            <li><a href="/theme/portfolio-single-right-sidebar-slider.html">Slider</a></li>

                                                                            <li><a href="/theme/portfolio-single-right-sidebar-video.html">Video</a></li>

                                                                            <li><a href="/theme/portfolio-single-right-sidebar-audio.html">Audio</a></li>

                                                                        </ul>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/#">Left Sidebar</a>
                                                                        <ul class="submenu">

                                                                            <li><a href="/theme/portfolio-single-left-sidebar-image.html">image</a></li>

                                                                            <li><a href="/theme/portfolio-single-left-sidebar-slider.html">Slider</a></li>

                                                                            <li><a href="/theme/portfolio-single-left-sidebar-video.html">Video</a></li>

                                                                            <li><a href="/theme/portfolio-single-left-sidebar-audio.html">Audio</a></li>

                                                                        </ul>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/#">Wide</a>
                                                                        <ul class="submenu">

                                                                            <li><a href="/theme/portfolio-single-wide-image.html">image</a></li>

                                                                            <li><a href="/theme/portfolio-single-wide-slider.html">Slider</a></li>

                                                                            <li><a href="/theme/portfolio-single-wide-video.html">Video</a></li>

                                                                            <li><a href="/theme/portfolio-single-wide-audio.html">Audio</a></li>

                                                                        </ul>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/#">Wide (Side by Side)</a>
                                                                        <ul class="submenu">

                                                                            <li><a href="/theme/portfolio-single-wide-sbs-image.html">image</a></li>

                                                                            <li><a href="/theme/portfolio-single-wide-sbs-slider.html">Slider</a></li>

                                                                            <li><a href="/theme/portfolio-single-wide-sbs-video.html">Video</a></li>

                                                                            <li><a href="/theme/portfolio-single-wide-sbs-audio.html">Audio</a></li>

                                                                        </ul>
                                                                    </li>

                                                                </ul>
                                                            </li>


                                                        </ul>
                                                    </li>


                                                    <li class="megamenu">
                                                        <a href="/theme/#">Pages</a>
                                                        <ul class="submenu">


                                                            <li>
                                                                <a href="/theme/#">Pages 1</a>
                                                                <ul class="submenu">

                                                                    <li><a href="/theme/about-us-1.html">About US 1</a></li>

                                                                    <li><a href="/theme/about-us-2.html">About US 2</a></li>

                                                                    <li><a href="/theme/about-us-3.html">About US 3</a></li>

                                                                    <li><a href="/theme/about-us-4.html">About US 4</a></li>

                                                                    <li><a href="/theme/about-me.html">About ME</a></li>

                                                                    <li><a href="/theme/services-1.html">Services 1</a></li>

                                                                    <li><a href="/theme/sign-in-1.html">Sign in 1</a></li>

                                                                    <li><a href="/theme/sign-up-1.html">Sign up 1</a></li>

                                                                    <li><a href="/theme/lost-password-1.html">Lost Password 1</a></li>

                                                                    <li><a href="/theme/404-1.html">404 (1)</a></li>

                                                                    <li><a href="/theme/under-construction-1.html">Under Construction (1)</a></li>

                                                                    <li><a href="/theme/maintenance-1.html">Maintenance (1)</a></li>

                                                                </ul>
                                                            </li>


                                                            <li>
                                                                <a href="/theme/#">Pages 2</a>
                                                                <ul class="submenu">

                                                                    <li><a href="/theme/services-2.html">Services 2</a></li>

                                                                    <li><a href="/theme/services-3.html">Services 3</a></li>

                                                                    <li><a href="/theme/services-4.html">Services 4</a></li>

                                                                    <li><a href="/theme/services-5.html">Services 5</a></li>

                                                                    <li><a href="/theme/faq-1.html">FAQ 1</a></li>

                                                                    <li><a href="/theme/faq-2.html">FAQ 2</a></li>

                                                                    <li><a href="/theme/sign-in-2.html">Sign in 2</a></li>

                                                                    <li><a href="/theme/sign-up-2.html">Sign up 2</a></li>

                                                                    <li><a href="/theme/lost-password-2.html">Lost Password 2</a></li>

                                                                    <li><a href="/theme/404-2.html">404 (2)</a></li>

                                                                    <li><a href="/theme/under-construction-2.html">Under Construction (2)</a></li>

                                                                    <li><a href="/theme/maintenance-2.html">Maintenance (2)</a></li>

                                                                </ul>
                                                            </li>


                                                            <li>
                                                                <a href="/theme/#">Pages 3</a>
                                                                <ul class="submenu">

                                                                    <li><a href="/theme/contact-us-1.html">Contact US 1</a></li>

                                                                    <li><a href="/theme/contact-us-2.html">Contact US 2</a></li>

                                                                    <li><a href="/theme/contact-us-3.html">Contact US 3</a></li>

                                                                    <li><a href="/theme/jobs.html">Jobs</a></li>

                                                                    <li><a href="/theme/404.html">404</a></li>

                                                                    <li><a href="/theme/under-construction.html">Under Construction</a></li>

                                                                    <li><a href="/theme/sign-in-3.html">Sign in 3</a></li>

                                                                    <li><a href="/theme/sign-up-3.html">Sign up 3</a></li>

                                                                    <li><a href="/theme/lost-password-3.html">Lost Password 3</a></li>

                                                                    <li><a href="/theme/404-3.html">404 (3)</a></li>

                                                                    <li><a href="/theme/under-construction-3.html">Under Construction (3)</a></li>

                                                                    <li><a href="/theme/maintenance-3.html">Maintenance (3)</a></li>

                                                                </ul>
                                                            </li>


                                                            <li>
                                                                <a href="/theme/#">Pages 4</a>
                                                                <ul class="submenu">

                                                                    <li><a href="/theme/maintenance.html">Maintenance</a></li>

                                                                    <li><a href="/theme/sign-in.html">Sign in</a></li>

                                                                    <li><a href="/theme/sign-up.html">Sign up</a></li>

                                                                    <li><a href="/theme/lost-password.html">Lost Password</a></li>

                                                                    <li><a href="/theme/search-results.html">Search Results</a></li>

                                                                    <li><a href="/theme/sitemap.html">SiteMap</a></li>

                                                                    <li><a href="/theme/sign-in-4.html">Sign in 4</a></li>

                                                                    <li><a href="/theme/sign-up-4.html">Sign up 4</a></li>

                                                                    <li><a href="/theme/lost-password-4.html">Lost Password 4</a></li>

                                                                    <li><a href="/theme/404-4.html">404 (4)</a></li>

                                                                    <li><a href="/theme/under-construction-4.html">Under Construction (4)</a></li>

                                                                    <li><a href="/theme/maintenance-4.html">Maintenance (4)</a></li>

                                                                </ul>
                                                            </li>


                                                        </ul>
                                                    </li>


                                                    <li>
                                                        <a href="/theme/#">Shop</a>
                                                        <ul class="submenu">


                                                            <li>
                                                                <a href="/theme/#">Account</a>
                                                                <ul class="submenu">

                                                                    <li>
                                                                        <a href="/theme/shop-account-dashboard.html">Dashboard</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/shop-account-orders-1.html">Orders (1)</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/shop-account-orders-2.html">Orders (2)</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/shop-account-order-details.html">Order Details</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/shop-account-downloads-1.html">Downloads (1)</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/shop-account-downloads-2.html">Downloads (2)</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/shop-account-addresses-1.html">Addresses (1)</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/shop-account-addresses-2.html">Addresses (2)</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/shop-account-addresses-3.html">Addresses (3)</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/shop-account-addresses-4.html">Addresses (4)</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/shop-account-details.html">Account Details</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/shop-account-wishlist-1.html">Wishlist (1)</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/shop-account-wishlist-2.html">Wishlist (2)</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/shop-account-wishlist-3.html">Wishlist (3)</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/shop-account-wishlist-4.html">Wishlist (4)</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/shop-account-wishlist-5.html">Wishlist (5)</a>
                                                                    </li>

                                                                </ul>
                                                            </li>


                                                            <li>
                                                                <a href="/theme/#">2 Columns</a>
                                                                <ul class="submenu">

                                                                    <li><a href="/theme/shop-2-right-sidebar.html">Right Sidebar</a></li>

                                                                    <li><a href="/theme/shop-2-left-sidebar.html">Left Sidebar</a></li>

                                                                </ul>
                                                            </li>


                                                            <li>
                                                                <a href="/theme/#">3 Columns</a>
                                                                <ul class="submenu">

                                                                    <li><a href="/theme/shop-3-right-sidebar.html">Right Sidebar</a></li>

                                                                    <li><a href="/theme/shop-3-left-sidebar.html">Left Sidebar</a></li>

                                                                    <li><a href="/theme/shop-3-wide.html">Wide</a></li>

                                                                </ul>
                                                            </li>


                                                            <li>
                                                                <a href="/theme/shop-4.html">4 Columns</a>
                                                            </li>


                                                            <li>
                                                                <a href="/theme/shop-5.html">5 Columns</a>
                                                            </li>


                                                            <li>
                                                                <a href="/theme/#">Single Product</a>
                                                                <ul class="submenu">

                                                                    <li>
                                                                        <a href="/theme/shop-single-right-sidebar.html">Right Sidebar</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/shop-single-left-sidebar.html">Left Sidebar</a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="/theme/shop-single-wide.html">Wide</a>
                                                                    </li>

                                                                </ul>
                                                            </li>


                                                            <li>
                                                                <a href="/theme/#">Cart</a>
                                                                <ul class="submenu">

                                                                    <li><a href="/theme/shop-cart-1.html">Cart (1)</a></li>

                                                                    <li><a href="/theme/shop-cart-2.html">Cart (2)</a></li>

                                                                </ul>
                                                            </li>


                                                            <li>
                                                                <a href="/theme/#">Checkout</a>
                                                                <ul class="submenu">

                                                                    <li><a href="/theme/shop-checkout-1.html">Checkout (1)</a></li>

                                                                    <li><a href="/theme/shop-checkout-2.html">Checkout (2)</a></li>

                                                                </ul>
                                                            </li>


                                                        </ul>
                                                    </li>


                                                    <li class="megamenu current_page_item">
                                                        <a href="/theme/#">Blog</a>
                                                        <ul class="submenu">


                                                            <li class="current_page_item">
                                                                <a href="/theme/#">Right sidebar</a>
                                                                <ul class="submenu">

                                                                    <li class="current_page_item"><a href="/theme/blog-right-sidebar.html">Default</a></li>

                                                                    <li><a href="/theme/blog-right-sidebar-small-images.html">Small image</a></li>

                                                                    <li><a href="/theme/blog-right-sidebar-masonry.html">Masonry</a></li>

                                                                    <li><a href="/theme/blog-right-sidebar-grid.html">Grid</a></li>

                                                                    <li><a href="/theme/blog-right-sidebar-timeline.html">Timeline</a></li>

                                                                    <li><a href="/theme/blog-right-sidebar-timeline-minimal.html">Timeline Minimal</a></li>

                                                                    <li><a href="/theme/blog-right-sidebar-minimal-1.html">Minimal v1</a></li>

                                                                    <li><a href="/theme/blog-right-sidebar-minimal-2.html">Minimal v2</a></li>

                                                                    <li><a href="/theme/blog-right-sidebar-single.html">Single Post (Default)</a></li>

                                                                </ul>
                                                            </li>


                                                            <li>
                                                                <a href="/theme/#">Left sidebar</a>
                                                                <ul class="submenu">

                                                                    <li><a href="/theme/blog-left-sidebar.html">Default</a></li>

                                                                    <li><a href="/theme/blog-left-sidebar-small-images.html">Small image</a></li>

                                                                    <li><a href="/theme/blog-left-sidebar-masonry.html">Masonry</a></li>

                                                                    <li><a href="/theme/blog-left-sidebar-grid.html">Grid</a></li>

                                                                    <li><a href="/theme/blog-left-sidebar-timeline.html">Timeline</a></li>

                                                                    <li><a href="/theme/blog-left-sidebar-timeline-minimal.html">Timeline Minimal</a></li>

                                                                    <li><a href="/theme/blog-left-sidebar-minimal-1.html">Minimal v1</a></li>

                                                                    <li><a href="/theme/blog-left-sidebar-minimal-2.html">Minimal v2</a></li>

                                                                    <li><a href="/theme/blog-left-sidebar-single-audio.html">Single Post (Audio)</a></li>

                                                                </ul>
                                                            </li>


                                                            <li>
                                                                <a href="/theme/#">Center</a>
                                                                <ul class="submenu">

                                                                    <li><a href="/theme/blog-center.html">Default</a></li>

                                                                    <li><a href="/theme/blog-center-small-images.html">Small image</a></li>

                                                                    <li><a href="/theme/blog-center-masonry.html">Masonry</a></li>

                                                                    <li><a href="/theme/blog-center-grid.html">Grid</a></li>

                                                                    <li><a href="/theme/blog-center-timeline.html">Timeline</a></li>

                                                                    <li><a href="/theme/blog-center-timeline-minimal.html">Timeline Minimal</a></li>

                                                                    <li><a href="/theme/blog-center-minimal-1.html">Minimal v1</a></li>

                                                                    <li><a href="/theme/blog-center-minimal-2.html">Minimal v2</a></li>

                                                                    <li><a href="/theme/blog-center-single-quote.html">Single Post (Quote)</a></li>

                                                                </ul>
                                                            </li>


                                                            <li>
                                                                <a href="/theme/#">Wide</a>
                                                                <ul class="submenu">

                                                                    <li><a href="/theme/blog-wide.html">Default</a></li>

                                                                    <li><a href="/theme/blog-wide-small-images.html">Small image</a></li>

                                                                    <li><a href="/theme/blog-wide-masonry.html">Masonry</a></li>

                                                                    <li><a href="/theme/blog-wide-grid.html">Grid</a></li>

                                                                    <li><a href="/theme/blog-wide-timeline.html">Timeline</a></li>

                                                                    <li><a href="/theme/blog-wide-timeline-minimal.html">Timeline Minimal</a></li>

                                                                    <li><a href="/theme/blog-wide-minimal-1.html">Minimal v1</a></li>

                                                                    <li><a href="/theme/blog-wide-minimal-2.html">Minimal v2</a></li>

                                                                    <li><a href="/theme/blog-wide-single-link.html">Single Post (Link)</a></li>

                                                                </ul>
                                                            </li>


                                                        </ul>
                                                    </li>


                                                    <li class="megamenu">
                                                        <a href="/theme/#">Elements</a>
                                                        <ul class="submenu">


                                                            <li>
                                                                <a href="/theme/#">Elements 1</a>
                                                                <ul class="submenu">

                                                                    <li><a href="/theme/elements-sections.html">Sections</a></li>

                                                                    <li><a href="/theme/elements-dividers.html">Dividers</a></li>

                                                                    <li><a href="/theme/elements-buttons.html">Buttons</a></li>

                                                                    <li><a href="/theme/elements-social-icons.html">Social icons</a></li>

                                                                    <li><a href="/theme/elements-social-feeds.html">Social Feeds</a></li>

                                                                    <li><a href="/theme/elements-forms.html">Forms</a></li>

                                                                    <li><a href="/theme/elements-subscribe-forms.html">Subscribe Forms</a></li>

                                                                    <li><a href="/theme/elements-tooltips.html">Tooltips</a></li>

                                                                    <li><a href="/theme/elements-tabs.html">Tabs</a></li>

                                                                    <li><a href="/theme/elements-accordion.html">Accordion</a></li>

                                                                    <li><a href="/theme/elements-tables.html">Tables</a></li>

                                                                </ul>
                                                            </li>


                                                            <li>
                                                                <a href="/theme/#">Elements 2</a>
                                                                <ul class="submenu">

                                                                    <li><a href="/theme/elements-alerts.html">Alerts</a></li>

                                                                    <li><a href="/theme/elements-clients.html">Clients</a></li>

                                                                    <li><a href="/theme/elements-counters-progress-pie.html">Counters, Progress &amp; Pie</a></li>

                                                                    <li><a href="/theme/elements-skills.html">Skills</a></li>

                                                                    <li><a href="/theme/elements-text-block.html">Text Block</a></li>

                                                                    <li><a href="/theme/elements-icon-block.html">Icon Block</a></li>

                                                                    <li><a href="/theme/elements-image-block.html">Image Block</a></li>

                                                                    <li><a href="/theme/elements-media-block.html">Media Block</a></li>

                                                                    <li><a href="/theme/elements-multimedia-block.html">Multimedia Block</a></li>

                                                                    <li><a href="/theme/elements-process-block.html">Process Block</a></li>

                                                                    <li><a href="/theme/elements-contact-block.html">Contact Block</a></li>

                                                                </ul>
                                                            </li>


                                                            <li>
                                                                <a href="/theme/#">Elements 3</a>
                                                                <ul class="submenu">

                                                                    <li><a href="/theme/elements-maps.html">Maps</a></li>

                                                                    <li><a href="/theme/elements-pricing-tables.html">Pricing Tables</a></li>

                                                                    <li><a href="/theme/elements-cta.html">Call to action</a></li>

                                                                    <li><a href="/theme/elements-lightbox.html">Lightbox</a></li>

                                                                    <li><a href="/theme/elements-testimonials.html">Testimonials</a></li>

                                                                    <li><a href="/theme/elements-timeline.html">Timeline</a></li>

                                                                    <li><a href="/theme/elements-team-member.html">Team Member</a></li>

                                                                    <li><a href="/theme/elements-lists.html">Lists</a></li>

                                                                    <li><a href="/theme/elements-modal.html">Modal</a></li>

                                                                    <li><a href="/theme/index-resume.html">Text Animation</a></li>

                                                                    <li><a href="/theme/elements-gallery.html">Gallery</a></li>

                                                                </ul>
                                                            </li>


                                                            <li>
                                                                <a href="/theme/#">Elements 4</a>
                                                                <ul class="submenu">

                                                                    <li><a href="/theme/elements-recent-posts.html">Recent Posts</a></li>

                                                                    <li><a href="/theme/elements-recent-projects.html">Recent Projects</a></li>

                                                                    <li><a href="/theme/elements-recent-products.html">Recent Products</a></li>

                                                                    <li><a href="/theme/elements-recent-events.html">Recent Events</a></li>

                                                                    <li><a href="/theme/elements-pre.html">pre</a></li>

                                                                    <li><a href="/theme/elements-icons.html">Icons</a></li>

                                                                    <li><a href="/theme/elements-animation.html">Animation</a></li>

                                                                    <li><a href="/theme/faq-2.html">Smooth Scrolling</a></li>

                                                                    <li><a href="/theme/elements-page-preloader-1.html">Page Preloader</a></li>

                                                                    <li><a href="/theme/elements-notifications-1.html">Notifications</a></li>

                                                                    <li><a href="/theme/elements-panels.html">Panels</a></li>

                                                                </ul>
                                                            </li>


                                                        </ul>
                                                    </li>


                                                </ul>
                                            </div><!-- /End Navbar Collapse (Menu) -->


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
                                    <form method="get" action="search-results.html">


                                        <!-- col-md-12 -->
                                        <div class="col-md-12">
                                            <!-- Form Group -->
                                            <div class="form-group">

                                                <!-- Close Button -->
                                                <a href="/theme/#" class="form-close-btn">&times;</a>

                                                <input type="text" class="form-control" placeholder="Type then hit enter to search..." name="s" autocomplete="off">

                                            </div><!-- /End Form Group -->
                                        </div><!-- /End col-md-12 -->


                                    </form><!-- /End Form -->
                                </div><!-- /End Form Block Container -->
                            </div><!-- /End Header Search Form Block -->


                        </div><!-- /End Header Menu Container -->
                    </div><!-- /End Header Menu -->


                </div><!-- /End Header Section Container -->
            </header><!-- /End Header Section -->


            <!-- Page Title Section
            ==================================================================== -->
            <div class="page-title-section page-title-section-wide grey-background-color">
                <!-- Section Container -->
                <div class="section-container">


                    <!-- Breadcrumb Title -->
                    <div class="breadcrumb-title">
                        <!-- container -->
                        <div class="container">

                            <h1 class="breadcrumb-main-title">Blog</h1>

                        </div><!-- /End container -->
                    </div><!-- /End Breadcrumb Title -->


                    <!-- Breadcrumb Block -->
                    <div class="breadcrumb-block">
                        <!-- container -->
                        <div class="container">

                            <ol class="breadcrumb">
                                <li><a href="/theme/index.html" title="Home"><i class="fa fa-home"></i></a></li>
                                <li class="active">Blog Right Sidebar</li>
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


                                            <!-- Blog items Wrapper -->
                                            <div class="blog-items-wrapper blog-col-1">


                                                <!-- Blog item -->
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
                                                                    <time datetime="2016-05-17">May 17, 2016</time>
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
                                                                <a href="/theme/#" title="You must do the things you think you can't do">You must do the things you think you can't do</a>
                                                            </h2><!-- /End Blog item Title -->


                                                            <!-- Blog item Description -->
                                                            <div class="blog-item-description">

                                                                <p>They had not gone far before they saw the Mock Turtle in the distance, sitting sad and lonely on a little ledge of rock, and, as they came nearer, Alice could hear him sighing as if his heart would break. She pitied him deeply. What is his sorrow? she [...]</p>

                                                            </div><!-- /End Blog item Description -->


                                                            <!-- Blog item Read More Button -->
                                                            <div class="blog-item-read-btn">
                                                                <a href="/theme/#">Read more <i class="fa fa-long-arrow-right"></i></a>
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


                                                <!-- Blog item -->
                                                <article class="blog-item format-image">
                                                    <!-- Blog item Container -->
                                                    <div class="blog-item-container">


                                                        <!-- Blog item Media -->
                                                        <div class="blog-item-media">
                                                            <a href="/theme/images/blog/002.jpg" title="ideas shape the course of history" class="overlay-hover-2x scale-hover" data-gfort-lightbox>
                                                                <img src="/theme/images/blog/thumbs/large/002.jpg" alt="Article Image" />
                                                            </a>
                                                        </div><!-- /End Blog item Media -->


                                                        <!-- Blog item Body -->
                                                        <div class="blog-item-body">


                                                            <!-- Blog item Meta -->
                                                            <div class="blog-item-meta">
                                                                <span class="item-meta-format">
                                                                    <a href="/theme/#">
                                                                        <i class="fa fa-camera-retro"></i>
                                                                        <i class="fa fa-camera-retro"></i>
                                                                    </a>
                                                                </span>
                                                                <span class="item-meta-date">
                                                                    <time datetime="2016-05-17">May 17, 2016</time>
                                                                </span>
                                                                <span class="item-meta-category">
                                                                    <a href="/theme/#" title="lightbox">lightbox</a>
                                                                </span>
                                                                <span class="item-meta-comments">
                                                                    <a href="/theme/#"><i class="fa fa-comments-o"></i>3</a>
                                                                </span>
                                                            </div><!-- /End Blog item Meta -->


                                                            <!-- Blog item Title -->
                                                            <h2 class="blog-item-title">
                                                                <a href="/theme/#" title="ideas shape the course of history">ideas shape the course of history</a>
                                                            </h2><!-- /End Blog item Title -->


                                                            <!-- Blog item Description -->
                                                            <div class="blog-item-description">

                                                                <p>They had not gone far before they saw the Mock Turtle in the distance, sitting sad and lonely on a little ledge of rock, and, as they came nearer, Alice could hear him sighing as if his heart would break. She pitied him deeply. What is his sorrow? she [...]</p>

                                                            </div><!-- /End Blog item Description -->


                                                            <!-- Blog item Read More Button -->
                                                            <div class="blog-item-read-btn">
                                                                <a href="/theme/#">Read more <i class="fa fa-long-arrow-right"></i></a>
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


                                                <!-- Blog item -->
                                                <article class="blog-item format-gallery">
                                                    <!-- Blog item Container -->
                                                    <div class="blog-item-container">


                                                        <!-- Blog item Media -->
                                                        <div class="blog-item-media">
                                                            <!-- gfort owl Slider -->
                                                            <div class="gfort-owl-slider owl-carousel owl-theme" data-slider-items="1" data-slider-arrows="true" data-slider-dots="true" data-slider-dots-position="inside" data-slider-autoplay="true">


                                                                <!-- gfort owl Slider Item -->
                                                                <div class="gfort-owl-slider-item">
                                                                    <a href="/theme/images/blog/003.jpg" title="A great idea can make difference" class="overlay-hover-2x scale-hover" data-gfort-lightbox data-gfort-lightbox-group="gallery-1">
                                                                        <img src="/theme/images/blog/thumbs/large/003.jpg" alt="Article Image" />
                                                                    </a>
                                                                </div><!-- /End gfort owl Slider Item -->


                                                                <!-- gfort owl Slider Item -->
                                                                <div class="gfort-owl-slider-item">
                                                                    <a href="/theme/images/blog/004.jpg" title="A great idea can make difference" class="overlay-hover-2x scale-hover" data-gfort-lightbox data-gfort-lightbox-group="gallery-1">
                                                                        <img src="/theme/images/blog/thumbs/large/004.jpg" alt="Article Image" />
                                                                    </a>
                                                                </div><!-- /End gfort owl Slider Item -->


                                                            </div><!-- /End gfort owl Slider -->
                                                        </div><!-- /End Blog item Media -->


                                                        <!-- Blog item Body -->
                                                        <div class="blog-item-body">


                                                            <!-- Blog item Meta -->
                                                            <div class="blog-item-meta">
                                                                <span class="item-meta-format">
                                                                    <a href="/theme/#">
                                                                        <i class="fa fa-image"></i>
                                                                        <i class="fa fa-image"></i>
                                                                    </a>
                                                                </span>
                                                                <span class="item-meta-date">
                                                                    <time datetime="2016-05-17">May 17, 2016</time>
                                                                </span>
                                                                <span class="item-meta-category">
                                                                    <a href="/theme/#" title="Gallery">Gallery</a>
                                                                </span>
                                                                <span class="item-meta-comments">
                                                                    <a href="/theme/#"><i class="fa fa-comments-o"></i>3</a>
                                                                </span>
                                                            </div><!-- /End Blog item Meta -->


                                                            <!-- Blog item Title -->
                                                            <h2 class="blog-item-title">
                                                                <a href="/theme/#" title="A great idea can make difference">A great idea can make difference</a>
                                                            </h2><!-- /End Blog item Title -->


                                                            <!-- Blog item Description -->
                                                            <div class="blog-item-description">

                                                                <p>They had not gone far before they saw the Mock Turtle in the distance, sitting sad and lonely on a little ledge of rock, and, as they came nearer, Alice could hear him sighing as if his heart would break. She pitied him deeply. What is his sorrow? she [...]</p>

                                                            </div><!-- /End Blog item Description -->


                                                            <!-- Blog item Read More Button -->
                                                            <div class="blog-item-read-btn">
                                                                <a href="/theme/#">Read more <i class="fa fa-long-arrow-right"></i></a>
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


                                                <!-- Blog item -->
                                                <article class="blog-item format-video">
                                                    <!-- Blog item Container -->
                                                    <div class="blog-item-container">


                                                        <!-- Blog item Media -->
                                                        <div class="blog-item-media">
                                                            <iframe src="/theme/https://player.vimeo.com/video/47505825?color=2791d8&title=0&byline=0&portrait=0" allowfullscreen></iframe>
                                                        </div><!-- /End Blog item Media -->


                                                        <!-- Blog item Body -->
                                                        <div class="blog-item-body">


                                                            <!-- Blog item Meta -->
                                                            <div class="blog-item-meta">
                                                                <span class="item-meta-format">
                                                                    <a href="/theme/#">
                                                                        <i class="fa fa-video-camera"></i>
                                                                        <i class="fa fa-video-camera"></i>
                                                                    </a>
                                                                </span>
                                                                <span class="item-meta-date">
                                                                    <time datetime="2016-05-17">May 17, 2016</time>
                                                                </span>
                                                                <span class="item-meta-category">
                                                                    <a href="/theme/#" title="Video">Video</a>
                                                                </span>
                                                                <span class="item-meta-comments">
                                                                    <a href="/theme/#"><i class="fa fa-comments-o"></i>3</a>
                                                                </span>
                                                            </div><!-- /End Blog item Meta -->


                                                            <!-- Blog item Title -->
                                                            <h2 class="blog-item-title">
                                                                <a href="/theme/#" title="Creative miniworld">Creative miniworld</a>
                                                            </h2><!-- /End Blog item Title -->


                                                            <!-- Blog item Description -->
                                                            <div class="blog-item-description">

                                                                <p>They had not gone far before they saw the Mock Turtle in the distance, sitting sad and lonely on a little ledge of rock, and, as they came nearer, Alice could hear him sighing as if his heart would break. She pitied him deeply. What is his sorrow? she [...]</p>

                                                            </div><!-- /End Blog item Description -->


                                                            <!-- Blog item Read More Button -->
                                                            <div class="blog-item-read-btn">
                                                                <a href="/theme/#">Read more <i class="fa fa-long-arrow-right"></i></a>
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


                                                <!-- Blog item -->
                                                <article class="blog-item format-quote">
                                                    <!-- Blog item Container -->
                                                    <div class="blog-item-container">


                                                        <!-- Blog item Body -->
                                                        <div class="blog-item-body">


                                                            <!-- Blog item Meta -->
                                                            <div class="blog-item-meta">
                                                                <span class="item-meta-format">
                                                                    <a href="/theme/#">
                                                                        <i class="fa fa-quote-left"></i>
                                                                        <i class="fa fa-quote-left"></i>
                                                                    </a>
                                                                </span>
                                                                <span class="item-meta-date">
                                                                    <time datetime="2016-05-17">May 17, 2016</time>
                                                                </span>
                                                                <span class="item-meta-category">
                                                                    <a href="/theme/#" title="Quotes">Quotes</a>
                                                                </span>
                                                                <span class="item-meta-comments">
                                                                    <a href="/theme/#"><i class="fa fa-comments-o"></i>3</a>
                                                                </span>
                                                            </div><!-- /End Blog item Meta -->


                                                            <!-- Blog item Format Content -->
                                                            <div class="blog-item-format-content">

                                                                <!-- Blog item Title -->
                                                                <h2 class="blog-item-title">We're here to put a dent in universe. Otherwise why else even be here ?</h2>

                                                                <!-- Blog item Format Description -->
                                                                <span class="blog-item-format-desc"><i class="fa fa-minus"></i>Steve Jobs</span>

                                                            </div><!-- /End Blog item Format Content -->


                                                        </div><!-- /End Blog item Body -->


                                                    </div><!-- /End Blog item Container -->
                                                </article><!-- /End Blog item -->


                                                <!-- Blog item -->
                                                <article class="blog-item format-link">
                                                    <!-- Blog item Container -->
                                                    <div class="blog-item-container">


                                                        <!-- Blog item Body -->
                                                        <div class="blog-item-body">


                                                            <!-- Blog item Meta -->
                                                            <div class="blog-item-meta">
                                                                <span class="item-meta-format">
                                                                    <a href="/theme/#">
                                                                        <i class="fa fa-link"></i>
                                                                        <i class="fa fa-link"></i>
                                                                    </a>
                                                                </span>
                                                                <span class="item-meta-date">
                                                                    <time datetime="2016-05-17">May 17, 2016</time>
                                                                </span>
                                                                <span class="item-meta-category">
                                                                    <a href="/theme/#" title="Link">Link</a>
                                                                </span>
                                                                <span class="item-meta-comments">
                                                                    <a href="/theme/#"><i class="fa fa-comments-o"></i>3</a>
                                                                </span>
                                                            </div><!-- /End Blog item Meta -->


                                                            <!-- Blog item Format Content -->
                                                            <div class="blog-item-format-content">

                                                                <!-- Blog item Title -->
                                                                <h2 class="blog-item-title">
                                                                    <a href="/theme/http://gfort.co/portfolio" title="Creative HTML5 Templates &amp; wordPress themes" target="_blank">Creative HTML5 Templates &amp; wordPress themes</a>
                                                                </h2><!-- /End Blog item Title -->

                                                                <!-- Blog item Format Description -->
                                                                <span class="blog-item-format-desc">Check our Portfolio</span>

                                                            </div><!-- /End Blog item Format Content -->


                                                        </div><!-- /End Blog item Body -->


                                                    </div><!-- /End Blog item Container -->
                                                </article><!-- /End Blog item -->


                                                <!-- Blog item -->
                                                <article class="blog-item format-audio">
                                                    <!-- Blog item Container -->
                                                    <div class="blog-item-container">


                                                        <!-- Blog item Media -->
                                                        <div class="blog-item-media">
                                                            <iframe src="/theme/https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/132774758&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                                                        </div><!-- /End Blog item Media -->


                                                        <!-- Blog item Body -->
                                                        <div class="blog-item-body">


                                                            <!-- Blog item Meta -->
                                                            <div class="blog-item-meta">
                                                                <span class="item-meta-format">
                                                                    <a href="/theme/#">
                                                                        <i class="fa fa-music"></i>
                                                                        <i class="fa fa-music"></i>
                                                                    </a>
                                                                </span>
                                                                <span class="item-meta-date">
                                                                    <time datetime="2016-05-17">May 17, 2016</time>
                                                                </span>
                                                                <span class="item-meta-category">
                                                                    <a href="/theme/#" title="Audio">Audio</a>
                                                                </span>
                                                                <span class="item-meta-comments">
                                                                    <a href="/theme/#"><i class="fa fa-comments-o"></i>3</a>
                                                                </span>
                                                            </div><!-- /End Blog item Meta -->


                                                            <!-- Blog item Title -->
                                                            <h2 class="blog-item-title">
                                                                <a href="/theme/#" title="Pharrell Williams - Happy">Pharrell Williams - Happy</a>
                                                            </h2><!-- /End Blog item Title -->


                                                            <!-- Blog item Description -->
                                                            <div class="blog-item-description">

                                                                <p>They had not gone far before they saw the Mock Turtle in the distance, sitting sad and lonely on a little ledge of rock, and, as they came nearer, Alice could hear him sighing as if his heart would break. She pitied him deeply. What is his sorrow? she [...]</p>

                                                            </div><!-- /End Blog item Description -->


                                                            <!-- Blog item Read More Button -->
                                                            <div class="blog-item-read-btn">
                                                                <a href="/theme/#">Read more <i class="fa fa-long-arrow-right"></i></a>
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


                                            </div><!-- /End Blog items Wrapper -->


                                            <!-- Navigation Block -->
                                            <div class="gfort-navigation-block">
                                                <nav aria-label="Page navigation">
                                                    <!-- Pagination -->
                                                    <ul class="pagination">

                                                        <li class="disabled">
                                                            <span>
                                                                <span aria-hidden="true">
                                                                    <i class="fa fa-angle-left"></i>
                                                                </span>
                                                            </span>
                                                        </li>

                                                        <li class="active">
                                                            <span>1 <span class="sr-only">(current)</span></span>
                                                        </li>

                                                        <li><a href="/theme/#">2</a></li>
                                                        <li><a href="/theme/#">3</a></li>
                                                        <li><a href="/theme/#">4</a></li>
                                                        <li><a href="/theme/#">5</a></li>

                                                        <li>
                                                            <a href="/theme/#" aria-label="Next">
                                                                <span aria-hidden="true">
                                                                    <i class="fa fa-angle-right"></i>
                                                                </span>
                                                            </a>
                                                        </li>

                                                    </ul><!-- /End Pagination -->
                                                </nav>
                                            </div><!-- /End Navigation Block -->


                                        </div><!-- /End col-md-12 -->


                                    </div><!-- /End row -->
                                </div><!-- /End container -->
                            </div><!-- /End Section Container -->
                        </div><!-- /End gfort Section -->


                    </div><!-- /End Main Content Container -->
                </div><!-- /End Main Content -->


                <!-- Main Sidebar
                ================================================================ -->
                <div class="main-sidebar">
                    <!-- Main Sidebar Container -->
                    <div class="main-sidebar-container">


                        <!-- Widget Block ( Social icons ) -->
                        <div class="widget-block widget-block-social-icons">
                            <!-- Widget Block Container -->
                            <div class="widget-block-container">


                                <!-- Widget Block Title -->
                                <div class="widget-block-title">
                                    <h6>Stay connected</h6>
                                </div><!-- /End Widget Block Title -->


                                <!-- Widget Block Body -->
                                <div class="widget-block-body">

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
                                                <a href="/theme/#" title="youtube">
                                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="/theme/#" title="Behance">
                                                    <i class="fa fa-behance" aria-hidden="true"></i>
                                                    <i class="fa fa-behance" aria-hidden="true"></i>
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

                                </div><!-- /End Widget Block Body -->


                            </div><!-- /End Widget Block Container -->
                        </div><!-- /End Widget Block ( Social icons ) -->


                        <!-- Widget Block ( Text ) -->
                        <div class="widget-block widget-block-text">
                            <!-- Widget Block Container -->
                            <div class="widget-block-container">


                                <!-- Widget Block Title -->
                                <div class="widget-block-title">
                                    <h6>Reach us</h6>
                                </div><!-- /End Widget Block Title -->


                                <!-- Widget Block Body -->
                                <div class="widget-block-body">

                                    <strong>Email:</strong>
                                    <p><a href="/theme/mailto:support@example.com" title="Support">support@example.com</a></p>

                                    <strong>Phone:</strong>
                                    <p><a href="/theme/tel:+11234567890" title="+1 123 456-7890">+1 123 456-7890</a></p>

                                    <strong>Location:</strong>
                                    <p>6 rue Saint-Martin, 12345 Paris, France</p>

                                </div><!-- /End Widget Block Body -->


                            </div><!-- /End Widget Block Container -->
                        </div><!-- /End Widget Block ( Text ) -->


                        <!-- Widget Block ( Instagram ) -->
                        <div class="widget-block widget-block-instagram">
                            <!-- Widget Block Container -->
                            <div class="widget-block-container">


                                <!-- Widget Block Title -->
                                <div class="widget-block-title">
                                    <h6>instagram</h6>
                                </div><!-- /End Widget Block Title -->


                                <!-- Widget Block Body -->
                                <div class="widget-block-body">

                                    <!-- Instagram Feed Block -->
                                    <div class="instagram-feed-block" data-instagram-userid="2546719702" data-instagram-feed-count="6" data-instagram-accesstoken="2546719702.d9ac2e9.d35b2fa3fd0b41048d0717d100e21964"></div><!-- /End Instagram Feed Block -->

                                </div><!-- /End Widget Block Body -->


                            </div><!-- /End Widget Block Container -->
                        </div><!-- /End Widget Block ( Instagram ) -->


                        <!-- Widget Block ( Categories ) -->
                        <div class="widget-block widget-block-categories">
                            <!-- Widget Block Container -->
                            <div class="widget-block-container">


                                <!-- Widget Block Title -->
                                <div class="widget-block-title">
                                    <h6>Categories</h6>
                                </div><!-- /End Widget Block Title -->


                                <!-- Widget Block Body -->
                                <div class="widget-block-body">

                                    <!-- Categories Block -->
                                    <ul class="categories-block">
                                        <li><a href="/theme/#" title="Life Style">Life Style<span>(6)</span></a></li>
                                        <li><a href="/theme/#" title="Business">Business<span>(5)</span></a></li>
                                        <li><a href="/theme/#" title="Modern">Modern<span>(10)</span></a></li>
                                        <li><a href="/theme/#" title="Parallax">Parallax<span>(8)</span></a></li>
                                        <li><a href="/theme/#" title="Photography">Photography<span>(3)</span></a></li>
                                    </ul><!-- /End Categories Block -->

                                </div><!-- /End Widget Block Body -->


                            </div><!-- /End Widget Block Container -->
                        </div><!-- /End Widget Block ( Categories ) -->


                        <!-- Widget Block ( Latest Posts ) -->
                        <div class="widget-block widget-block-posts">
                            <!-- Widget Block Container -->
                            <div class="widget-block-container">


                                <!-- Widget Block Title -->
                                <div class="widget-block-title">
                                    <h6>Latest Posts</h6>
                                </div><!-- /End Widget Block Title -->


                                <!-- Widget Block Body -->
                                <div class="widget-block-body">

                                    <!-- Blog Posts -->
                                    <ul class="blog-posts">


                                        <!-- Blog Item -->
                                        <li>

                                            <!-- Item image -->
                                            <a href="/theme/#" title="You must do the things you think you can't do" class="item-image overlay-hover scale-hover-2x">
                                                <img src="/theme/images/widgets/blog-posts/001.jpg" alt="Article Image" />
                                            </a>

                                            <!-- Blog Item Body -->
                                            <div class="blog-item-body">

                                                <!-- Title -->
                                                <a href="/theme/#" title="You must do the things you think you can't do" class="blog-item-small-title">You must do the things you think you can't do</a>

                                                <!-- Blog item Meta -->
                                                <div class="blog-item-meta">
                                                    <span class="item-meta-date">
                                                        <time datetime="2016-05-17">May 17, 2016</time>
                                                    </span>
                                                    <span class="item-meta-comments">
                                                        <a href="/theme/#"><i class="fa fa-comments-o"></i>3</a>
                                                    </span>
                                                </div><!-- /End Blog item Meta -->

                                            </div><!-- /End Blog Item Body -->

                                        </li><!-- /End Blog Item -->


                                        <!-- Blog Item -->
                                        <li>

                                            <!-- Item image -->
                                            <a href="/theme/#" title="ideas shape the course of history" class="item-image overlay-hover scale-hover-2x">
                                                <img src="/theme/images/widgets/blog-posts/002.jpg" alt="Article Image" />
                                            </a>

                                            <!-- Blog Item Body -->
                                            <div class="blog-item-body">

                                                <!-- Title -->
                                                <a href="/theme/#" title="ideas shape the course of history" class="blog-item-small-title">ideas shape the course of history</a>

                                                <!-- Blog item Meta -->
                                                <div class="blog-item-meta">
                                                    <span class="item-meta-date">
                                                        <time datetime="2016-05-17">May 17, 2016</time>
                                                    </span>
                                                    <span class="item-meta-comments">
                                                        <a href="/theme/#"><i class="fa fa-comments-o"></i>3</a>
                                                    </span>
                                                </div><!-- /End Blog item Meta -->

                                            </div><!-- /End Blog Item Body -->

                                        </li><!-- /End Blog Item -->


                                        <!-- Blog Item -->
                                        <li>

                                            <!-- Item image -->
                                            <a href="/theme/#" title="A great idea can make difference" class="item-image overlay-hover scale-hover-2x">
                                                <img src="/theme/images/widgets/blog-posts/003.jpg" alt="Article Image" />
                                            </a>

                                            <!-- Blog Item Body -->
                                            <div class="blog-item-body">

                                                <!-- Title -->
                                                <a href="/theme/#" title="A great idea can make difference" class="blog-item-small-title">A great idea can make difference</a>

                                                <!-- Blog item Meta -->
                                                <div class="blog-item-meta">
                                                    <span class="item-meta-date">
                                                        <time datetime="2016-05-17">May 17, 2016</time>
                                                    </span>
                                                    <span class="item-meta-comments">
                                                        <a href="/theme/#"><i class="fa fa-comments-o"></i>3</a>
                                                    </span>
                                                </div><!-- /End Blog item Meta -->

                                            </div><!-- /End Blog Item Body -->

                                        </li><!-- /End Blog Item -->


                                    </ul><!-- /End Blog Posts -->

                                </div><!-- /End Widget Block Body -->


                            </div><!-- /End Widget Block Container -->
                        </div><!-- /End Widget Block ( Latest Posts ) -->


                        <!-- Widget Block ( Subscribe ) -->
                        <div class="widget-block widget-block-subscribe">
                            <!-- Widget Block Container -->
                            <div class="widget-block-container">


                                <!-- Widget Block Title -->
                                <div class="widget-block-title">
                                    <h6>Subscribe</h6>
                                </div><!-- /End Widget Block Title -->


                                <!-- Widget Block Body -->
                                <div class="widget-block-body">

                                    <!-- Subscribe Form Block (Mailchimp) -->
                                    <div class="form-block subscribe-form-block mailchimp-form-block" data-form-url="//Graphicfort.us11.list-manage.com/subscribe/post?u=dffe9a5d2b472dbe0cc471e1b&amp;id=4150cd2f12">
                                        <!-- Form Block Container -->
                                        <div class="form-block-container">
                                            <!-- Form -->
                                            <form method="post" action="#">


                                                <!-- Email Address -->
                                                <div class="col-md-12">
                                                    <!-- Form Group -->
                                                    <div class="form-group">

                                                        <label>Email Address</label>
                                                        <input type="email" class="form-control subscribe-email" name="EMAIL">

                                                    </div><!-- /End Form Group -->
                                                </div><!-- /End Email Address -->


                                                <!-- Submit Button -->
                                                <div class="col-md-12">
                                                    <!-- Form Group -->
                                                    <div class="form-group">

                                                        <button type="submit" class="btn btn-gfort">SUBSCRIBE</button>

                                                    </div><!-- /End Form Group -->
                                                </div><!-- /End Submit Button -->


                                                <!-- Text -->
                                                <div class="col-md-12">
                                                    <!-- Form Group -->
                                                    <div class="form-group">

                                                        <p>We promise that we will never share your e-mail address with any third party company.</p>

                                                    </div><!-- /End Form Group -->
                                                </div><!-- /End Text -->


                                            </form><!-- /End Form -->
                                        </div><!-- /End Form Block Container -->
                                    </div><!-- /End Subscribe Form Block (Mailchimp) -->

                                </div><!-- /End Widget Block Body -->


                            </div><!-- /End Widget Block Container -->
                        </div><!-- /End Widget Block ( Subscribe ) -->


                        <!-- Widget Block ( advertisement ) -->
                        <div class="widget-block widget-block-advertisement">
                            <!-- Widget Block Container -->
                            <div class="widget-block-container">


                                <!-- Widget Block Title -->
                                <div class="widget-block-title">
                                    <h6>Advertisement</h6>
                                </div><!-- /End Widget Block Title -->


                                <!-- Widget Block Body -->
                                <div class="widget-block-body">

                                    <!-- ADS Block -->
                                    <div class="ads-block">
                                        <!-- ADS Block Container -->
                                        <div class="ads-block-container">
                                            <a href="/theme/http://gfort.co/plume" title="PLUME" target="_blank">
                                                <img src="/theme/images/widgets/ads.jpg" alt="Advertisement" />
                                            </a>
                                        </div><!-- /End ADS Block Container -->
                                    </div><!-- /End ADS Block -->

                                </div><!-- /End Widget Block Body -->


                            </div><!-- /End Widget Block Container -->
                        </div><!-- /End Widget Block ( advertisement ) -->


                        <!-- Widget Block ( Tags ) -->
                        <div class="widget-block widget-block-tags">
                            <!-- Widget Block Container -->
                            <div class="widget-block-container">


                                <!-- Widget Block Title -->
                                <div class="widget-block-title">
                                    <h6>Tags Cloud</h6>
                                </div><!-- /End Widget Block Title -->


                                <!-- Widget Block Body -->
                                <div class="widget-block-body">

                                    <!-- Tags Block -->
                                    <div class="tags-block">
                                        <!-- Tags Block Container -->
                                        <div class="tags-block-container">

                                            <ul>

                                                <li>
                                                    <a href="/theme/#" title="video" class="btn btn-gfort-grey btn-gfort-sm">video</a>
                                                </li>

                                                <li>
                                                    <a href="/theme/#" title="plume" class="btn btn-gfort-grey btn-gfort-sm">plume</a>
                                                </li>

                                                <li>
                                                    <a href="/theme/#" title="Photography" class="btn btn-gfort-grey btn-gfort-sm">Photography</a>
                                                </li>

                                                <li>
                                                    <a href="/theme/#" title="music" class="btn btn-gfort-grey btn-gfort-sm">music</a>
                                                </li>

                                                <li>
                                                    <a href="/theme/#" title="parallax" class="btn btn-gfort-grey btn-gfort-sm">parallax</a>
                                                </li>

                                                <li>
                                                    <a href="/theme/#" title="modern" class="btn btn-gfort-grey btn-gfort-sm">modern</a>
                                                </li>

                                            </ul>

                                        </div><!-- /End Tags Block Container -->
                                    </div><!-- /End Tags Block -->

                                </div><!-- /End Widget Block Body -->


                            </div><!-- /End Widget Block Container -->
                        </div><!-- /End Widget Block ( Tags ) -->


                    </div><!-- /End Main Sidebar Container -->
                </div><!-- /End Main Sidebar -->


            </div><!-- /End Page Body (Right Sidebar) -->


            <!-- Footer Section
            ==================================================================== -->
            <footer class="footer-section">


                <!-- Footer Top Section -->
                <div class="footer-top-section">
                    <!-- Footer Top Section Container -->
                    <div class="footer-top-section-container">
                        <!-- container -->
                        <div class="container">
                            <!-- row -->
                            <div class="row">


                                <!-- col-md-4 -->
                                <div class="col-md-4">


                                    <!-- Widget Block ( Text ) -->
                                    <div class="widget-block widget-block-text">
                                        <!-- Widget Block Container -->
                                        <div class="widget-block-container">


                                            <!-- Widget Block Title -->
                                            <div class="widget-block-title">
                                                <h6>About us</h6>
                                            </div><!-- /End Widget Block Title -->


                                            <!-- Widget Block Body -->
                                            <div class="widget-block-body">

                                                <p>Donec pulvinar quam dolor, vitae ligulas elite pretium. Phasellus vitae turpis vel. Commod ullamcorper facilisis. Volutpat eu nisi sed ac orci nulla. Vitae ligula felis et quam.</p>

                                                <p>Integer a fringilla augue, sit amet efficitur arcu. Nullam in odio posuere magna id, consectetur ipsum.</p>

                                            </div><!-- /End Widget Block Body -->


                                        </div><!-- /End Widget Block Container -->
                                    </div><!-- /End Widget Block ( Text ) -->


                                </div><!-- /End col-md-4 -->


                                <!-- col-md-2 -->
                                <div class="col-md-2">


                                    <!-- Widget Block ( Link ) -->
                                    <div class="widget-block widget-block-link">
                                        <!-- Widget Block Container -->
                                        <div class="widget-block-container">


                                            <!-- Widget Block Title -->
                                            <div class="widget-block-title">
                                                <h6>Company</h6>
                                            </div><!-- /End Widget Block Title -->


                                            <!-- Widget Block Body -->
                                            <div class="widget-block-body">

                                                <!-- Links Block -->
                                                <ul class="links-block">
                                                    <li><a href="/theme/#" title="FAQs">FAQs</a></li>
                                                    <li><a href="/theme/#" title="Pricing">Pricing</a></li>
                                                    <li><a href="/theme/#" title="Portfolio">Portfolio</a></li>
                                                    <li><a href="/theme/#" title="About us">About us</a></li>
                                                    <li><a href="/theme/#" title="Terms of use">Terms of use</a></li>
                                                    <li><a href="/theme/#" title="Privacy Policy">Privacy Policy</a></li>
                                                </ul><!-- /End Links Block -->

                                            </div><!-- /End Widget Block Body -->


                                        </div><!-- /End Widget Block Container -->
                                    </div><!-- /End Widget Block ( Link ) -->


                                </div><!-- /End col-md-2 -->


                                <!-- col-md-3 -->
                                <div class="col-md-3">


                                    <!-- Widget Block ( Latest Posts ) -->
                                    <div class="widget-block widget-block-posts">
                                        <!-- Widget Block Container -->
                                        <div class="widget-block-container">


                                            <!-- Widget Block Title -->
                                            <div class="widget-block-title">
                                                <h6>Latest Posts</h6>
                                            </div><!-- /End Widget Block Title -->


                                            <!-- Widget Block Body -->
                                            <div class="widget-block-body">

                                                <!-- Blog Posts -->
                                                <ul class="blog-posts">


                                                    <!-- Blog Item -->
                                                    <li>

                                                        <!-- Item image -->
                                                        <a href="/theme/#" title="You must do the things you think you can't do" class="item-image overlay-hover scale-hover-2x">
                                                            <img src="/theme/images/widgets/blog-posts/001.jpg" alt="Article Image" />
                                                        </a>

                                                        <!-- Blog Item Body -->
                                                        <div class="blog-item-body">

                                                            <!-- Title -->
                                                            <a href="/theme/#" title="You must do the things you think you can't do" class="blog-item-small-title">You must do the things you think you can't do</a>

                                                            <!-- Blog item Meta -->
                                                            <div class="blog-item-meta">
                                                                <span class="item-meta-date">
                                                                    <time datetime="2016-05-17">May 17, 2016</time>
                                                                </span>
                                                                <span class="item-meta-comments">
                                                                    <a href="/theme/#"><i class="fa fa-comments-o"></i>3</a>
                                                                </span>
                                                            </div><!-- /End Blog item Meta -->

                                                        </div><!-- /End Blog Item Body -->

                                                    </li><!-- /End Blog Item -->


                                                    <!-- Blog Item -->
                                                    <li>

                                                        <!-- Item image -->
                                                        <a href="/theme/#" title="ideas shape the course of history" class="item-image overlay-hover scale-hover-2x">
                                                            <img src="/theme/images/widgets/blog-posts/002.jpg" alt="Article Image" />
                                                        </a>

                                                        <!-- Blog Item Body -->
                                                        <div class="blog-item-body">

                                                            <!-- Title -->
                                                            <a href="/theme/#" title="ideas shape the course of history" class="blog-item-small-title">ideas shape the course of history</a>

                                                            <!-- Blog item Meta -->
                                                            <div class="blog-item-meta">
                                                                <span class="item-meta-date">
                                                                    <time datetime="2016-05-17">May 17, 2016</time>
                                                                </span>
                                                                <span class="item-meta-comments">
                                                                    <a href="/theme/#"><i class="fa fa-comments-o"></i>3</a>
                                                                </span>
                                                            </div><!-- /End Blog item Meta -->

                                                        </div><!-- /End Blog Item Body -->

                                                    </li><!-- /End Blog Item -->


                                                </ul><!-- /End Blog Posts -->

                                            </div><!-- /End Widget Block Body -->


                                        </div><!-- /End Widget Block Container -->
                                    </div><!-- /End Widget Block ( Latest Posts ) -->


                                </div><!-- /End col-md-3 -->


                                <!-- col-md-3 -->
                                <div class="col-md-3">


                                    <!-- Widget Block ( Latest Projects ) -->
                                    <div class="widget-block widget-block-projects">
                                        <!-- Widget Block Container -->
                                        <div class="widget-block-container">


                                            <!-- Widget Block Title -->
                                            <div class="widget-block-title">
                                                <h6>Latest Projects</h6>
                                            </div><!-- /End Widget Block Title -->


                                            <!-- Widget Block Body -->
                                            <div class="widget-block-body">

                                                <ul class="portfolio-projects">

                                                    <li>
                                                        <a href="/theme/#" class="item-image overlay-hover scale-hover-2x">
                                                            <img src="/theme/images/widgets/portfolio-projects/001.jpg" alt="Project Image">
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="/theme/#" class="item-image overlay-hover scale-hover-2x">
                                                            <img src="/theme/images/widgets/portfolio-projects/002.jpg" alt="Project Image">
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="/theme/#" class="item-image overlay-hover scale-hover-2x">
                                                            <img src="/theme/images/widgets/portfolio-projects/003.jpg" alt="Project Image">
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="/theme/#" class="item-image overlay-hover scale-hover-2x">
                                                            <img src="/theme/images/widgets/portfolio-projects/004.jpg" alt="Project Image">
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="/theme/#" class="item-image overlay-hover scale-hover-2x">
                                                            <img src="/theme/images/widgets/portfolio-projects/005.jpg" alt="Project Image">
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="/theme/#" class="item-image overlay-hover scale-hover-2x">
                                                            <img src="/theme/images/widgets/portfolio-projects/006.jpg" alt="Project Image">
                                                        </a>
                                                    </li>

                                                </ul>

                                            </div><!-- /End Widget Block Body -->


                                        </div><!-- /End Widget Block Container -->
                                    </div><!-- /End Widget Block ( Latest Projects ) -->


                                </div><!-- /End col-md-3 -->


                            </div><!-- /End row -->
                        </div><!-- /End container -->
                    </div><!-- /End Footer Top Section Container -->
                </div><!-- /End Footer Top Section -->


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

                                                <p>&copy; 2017 <a href="/theme/http://themeforest.net/user/graphicfort/portfolio?ref=GraphicFort" title="Graphicfort" target="_blank">Graphicfort</a>, all rights reserved.</p>

                                            </div><!-- /End Info Block Container -->
                                        </div><!-- /End Info Block -->


                                    </div><!-- /End copyright Widget Container -->
                                </div><!-- /End copyright Widget ( Left ) -->


                                <!-- copyright Widget ( Right ) -->
                                <div class="copyright-widget widget-right-side">
                                    <!-- copyright Widget Container -->
                                    <div class="copyright-widget-container">

                                        <!-- Social Icons Block ( small ) -->
                                        <div class="social-icons-block icons-transparent icons-sm icons-style-1">
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
                                                    <a href="/theme/#" title="youtube">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="/theme/#" title="Behance">
                                                        <i class="fa fa-behance" aria-hidden="true"></i>
                                                        <i class="fa fa-behance" aria-hidden="true"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="/theme/#" title="Pinterest">
                                                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                                                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="/theme/#" title="Dribbble">
                                                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                                                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div><!-- /End Social Icons Block ( small ) -->

                                    </div><!-- /End copyright Widget Container -->
                                </div><!-- /End copyright Widget ( Right ) -->


                            </div><!-- /End row -->
                        </div><!-- /End container -->
                    </div><!-- /End Footer copyright Section Container -->
                </div><!-- /End Footer copyright Section -->


            </footer><!-- /End Footer Section -->


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
