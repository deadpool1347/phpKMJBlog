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
