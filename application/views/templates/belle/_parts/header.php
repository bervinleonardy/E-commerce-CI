<!DOCTYPE html>
<html class="no-js" lang="<?= MY_LANGUAGE_ABBR ?>">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
        <meta name="description" content="<?= $description ?>" />
        <meta name="keywords" content="<?= $keywords ?>" />
        <meta property="og:title" content="<?= $title ?>" />
        <meta property="og:description" content="<?= $description ?>" />
        <meta property="og:url" content="<?= LANG_URL ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="<?= base_url('assets/img/site-overview.png') ?>" />
        <title><?= $title ?></title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?= base_url('template/imgs/favicon.ico') ?>" />
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="<?= base_url('templatecss/plugins.css') ?>" type="text/css" media="all"/>
        <!-- Bootstap CSS -->
        <link rel="stylesheet" href="<?= base_url('templatecss/bootstrap.min.css') ?>" type="text/css" media="all"/>
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="<?= base_url('templatecss/style.css') ?>" type="text/css" media="all"/>
        <link rel="stylesheet" href="<?= base_url('templatecss/responsive.css') ?>" type="text/css" media="all"/>    
        
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <!-- <link rel="stylesheet" href="?= base_url('cssloader/theme.css') ?>"  />
        <script src="?= base_url('assets/js/jquery.min.js') ?>"></script> -->
        
        <!-- <link rel="stylesheet" href="?= base_url('templatecss/custom.css') ?>" /> -->

        <script src="<?= base_url('loadlanguage/all.js') ?>"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <?php if ($cookieLaw != false) { ?>
            <script type="text/javascript">
                window.cookieconsent_options = {"message": "<?= $cookieLaw['message'] ?>", "dismiss": "<?= $cookieLaw['button_text'] ?>", "learnMore": "<?= $cookieLaw['learn_more'] ?>", "link": "<?= $cookieLaw['link'] ?>", "theme": "<?= $cookieLaw['theme'] ?>"};
            </script>
            <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
        <?php } ?>
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style> 
        #home-slider { height : 370px; margin-bottom : 40px; }
        #home-slider .right-side { padding-top : 60px; }
        #home-slider .left-side img { max-height : 370px; }
        #home-slider .description { color : #666; margin-bottom : 15px; }
        #home-slider .price { font-size : 40px; margin-bottom : 15px; }
        #home-slider .carousel-control { background-color : none; }
        #home-slider .carousel-control.left, #home-slider .carousel-control.right { background-image : url('template/imgs/arrows-2x.png'); }
        #home-slider .carousel-control.left { background-position : 0 center; width : 100px; }
        #home-slider .carousel-control.right { background-position : -100px center; width : 100px; }
        #home-slider a.option { background : #fff none repeat scroll 0 0; border : 1px solid #ddd; color : #000; cursor : pointer; float : right; font-size : 0.85em; outline : medium none; padding : 10px 30px; text-transform : uppercase; transition : all 0.3s ease 0s; }
        #home-slider a.option.right-5 { margin-right : 5px; }
        #home-slider a.option:hover { text-decoration : none; }
        #home-slider a.option img {width:20px; margin-right: 5px;}
        #home-slider .carousel-indicators li { border : 1px solid #333; }
        #home-slider .carousel-indicators .active { background-color : #333; }        
        </style>
    </head>
    <body class="template-index belle home12-category">
    <div id="pre-loader">
        <img src="<?= base_url('template/imgs/loader.gif')?>" alt="Loading..." />
    </div>        
    <div class="pageWrapper">
	<!--Search Form Drawer-->
	<div class="search">
        <div class="search__form">
            <form method="GET" class="search-bar__form" action="<?= LANG_URL ?>">
                <button class="go-btn search__button" type="submit"><i class="fa fa-search"></i></button>
                <input class="search__input" type="search" name="q" id="search_in_title" value="<?= isset($_GET['search_in_title']) ? $_GET['search_in_title'] : '' ?>" placeholder="<?= lang('search_for') ?>..." aria-label="Search" autocomplete="off">
            </form>
            <button type="button" class="search-trigger close-btn" onclick="submitForm()"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <!--End Search Form Drawer-->
    <!--Top Header-->
    <div class="top-header">
        <div class="container-fluid">
            <div class="row">
            	<div class="col-10 col-sm-8 col-md-5 col-lg-4">
                    <div class="currency-picker">
                        <span class="selected-currency">USD</span>
                        <ul id="currencies">
                            <li data-currency="INR" class="">INR</li>
                            <li data-currency="GBP" class="">GBP</li>
                            <li data-currency="CAD" class="">CAD</li>
                            <li data-currency="USD" class="selected">USD</li>
                            <li data-currency="AUD" class="">AUD</li>
                            <li data-currency="EUR" class="">EUR</li>
                            <li data-currency="JPY" class="">JPY</li>
                        </ul>
                    </div>
                    <div class="language-dropdown">
                        <span class="language-dd">Indonesia</span>
                        <?php
                            $num_langs = count($allLanguages);
                            if ($num_langs > 0) {
                                ?>
                                <ul id="language">
                                    <?php
                                    $i = 1;
                                    $lang_last = '';
                                    foreach ($allLanguages as $key_lang => $lang) { ?>
                                        <li <?= $i == $num_langs ? 'class="last-item"' : '' ?>>
                                            <img src="<?= base_url('attachments/lang_flags/' . $lang['flag']) ?>" alt="Language-<?= MY_LANGUAGE_ABBR ?>"><a href="<?= base_url($key_lang) ?>"><?= $lang['name'] ?></a>
                                        </li>
                                        <?php
                                        $i++;
                                    } ?>
                                </ul>
                            <?php } ?>    
                    </div>
                    <p class="phone-no"><i class="fa fa-phone"></i> +440 0(111) 044 833</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                	<div class="text-center"><p class="top-header_middle-text"> Worldwide Express Shipping</p></div>
                </div>
                <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                	<span class="user-menu d-block d-lg-none"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <ul class="customer-links list-inline">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Create Account</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Top Header-->
    <!--Header-->
    <div class="header-wrap animated d-flex border-bottom">
    	<div class="container-fluid">        
            <div class="row align-items-center">
            	<!--Desktop Logo-->
                <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                    <a href="<?= site_url() ?>">
                    	<img src="<?= base_url('template/imgs/logo.png')?>" class="site-logo" alt="" title="" />
                    </a>
                </div>
                <!--End Desktop Logo-->
                <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                	<div class="d-block d-lg-none">
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        	<!-- <i class="fa fa-times"></i> -->
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                	<!--Desktop Menu-->
                	<nav class="grid__item" id="AccessibleNav">
                    <!-- for mobile -->
                        <ul id="siteNav" class="site-nav medium center hidearrow">
                            <li <?= uri_string() == '' || uri_string() == MY_LANGUAGE_ABBR ? ' class="lvl1 parent megamenu"' : '' ?> ><a href="<?= LANG_URL ?>"><?= lang('home') ?> </i></a></li>

                            <li class="lvl1 parent megamenu"><a href="<?= LANG_URL ?>"><?= lang('categories') ?> <i class="fa fa-angle-down"></i></a>
                            	<div class="megamenu style4">
                                    <?php if (!empty($arrCategories)) { ?>
                                        <ul class="grid grid--uniform mmWrapper">
                                            <?php
                                            foreach ($arrCategories as $categorie) {
                                                ?>
                                                <li class="grid__item lvl-1 col-md-3 col-lg-3">
                                                    <a href="javascript:void(0);" data-categorie-id="<?= $categorie['id'] ?>" class="site-nav lvl-1 <?= isset($_GET['category']) && $_GET['category'] == $categorie['id'] ? 'selected' : '' ?>">
                                                      <?= $categorie['name'] ?>
                                                    </a>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    <?php } else { ?>
                                        <ul class="subLinks">
                                                <li class="lvl-2"><a href="javascript:void(0);" class="site-nav lvl-2"><?= lang('no_sub_categories') ?></a></li>
                                            </ul>                                        
                                        <!-- <div class="alert alert-info">?= lang('no_sub_categories') ?></div> -->
                                    <?php } ?>                                    
                                    <!-- <ul class="grid grid--uniform mmWrapper">
                                    	<li class="grid__item lvl-1 col-md-3 col-lg-3">
                                            <a href="#" class="site-nav lvl-1">Shop Pages</a>
                                            <ul class="subLinks">
                                                <li class="lvl-2"><a href="shop-left-sidebar.html" class="site-nav lvl-2">Left Sidebar</a></li>
                                            </ul>
                                      	</li>
                                        <li class="grid__item lvl-1 col-md-6 col-lg-6">
                                        	<a href="#"><img src="?= base_url('template/imgs/megamenu-bg1.jpg')?>" alt="" title="" /></a>
                                        </li>
                                    </ul> -->
                              	</div>
                            </li>

                        <!-- <li class="lvl1 parent megamenu"><a href="#">Product <i class="fa fa-angle-down"></i></a>
                        	<div class="megamenu style2">
                                <ul class="grid mmWrapper">
                                    <li class="grid__item one-whole">
                                        <ul class="grid">
                                            <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Product Page</a>
                                                <ul class="subLinks">
                                                    <li class="lvl-2"><a href="product-layout-1.html" class="site-nav lvl-2">Product Layout 1</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                  	<li class="grid__item large-up--one-whole imageCol"><a href="#"><img src="<= base_url('template/imgs/megamenu-bg2.jpg')?>" alt=""></a></li>
                                </ul>
                          	</div>
                        </li> -->                           
                        <!-- <li class="lvl1 parent dropdown"><a href="#">Pages <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown">
                              <li><a href="cart-variant1.html" class="site-nav">Cart Page <i class="fa fa-angle-right"></i></a></li>
                              
                              <li><a href="compare-variant1.html" class="site-nav">Compare Product <i class="fa fa-angle-right"></i></a>
                                <ul class="dropdown">
                                    <li><a href="compare-variant1.html" class="site-nav">Compare Variant1</a></li>
                                 </ul>
                            </li>
							<li><a href="checkout.html" class="site-nav">Checkout</a></li>
                            <li><a href="about-us.html" class="site-nav">About Us <span class="lbl nm_label1">New</span> </a></li>
                            <li><a href="contact-us.html" class="site-nav">Contact Us</a></li>
                            <li><a href="faqs.html" class="site-nav">FAQs</a></li>
                            <li><a href="lookbook1.html" class="site-nav">Lookbook<i class="fa fa-angle-right"></i></a>
                              <ul>
                                <li><a href="lookbook1.html" class="site-nav">Style 1</a></li>
                                <li><a href="lookbook2.html" class="site-nav">Style 2</a></li>
                              </ul>
                            </li>
                            <li><a href="404.html" class="site-nav">404</a></li>
                            <li><a href="coming-soon.html" class="site-nav">Coming soon <span class="lbl nm_label1">New</span> </a></li>
                          </ul>
                        </li> -->
                        <!-- <li class="lvl1 parent dropdown"><a href="#">Blog <i class="fa fa-angle-down"></i></a> -->
                        <?php
                            if (!empty($nonDynPages)) {
                                foreach ($nonDynPages as $addonPage) {
                                    ?>
                                    <li <?= uri_string() == $addonPage || uri_string() == MY_LANGUAGE_ABBR . '/' . $addonPage ? ' class="lvl1 parent dropdown"' : '' ?>><a href="<?= LANG_URL . '/' . $addonPage ?>"><?= mb_ucfirst(lang($addonPage)) ?></a></li>
                                    <?php
                                }
                            }
                            if (!empty($dynPages)) {
                                foreach ($dynPages as $addonPage) {
                                    ?>
                                    <li <?= urldecode(uri_string()) == 'page/' . $addonPage['pname'] || uri_string() == MY_LANGUAGE_ABBR . '/' . 'page/' . $addonPage['pname'] ? ' class="lvl1 parent dropdown"' : ''?>> 
                                    <a href=" <?= LANG_URL . '/page/' . $addonPage['pname'] ?>"><?= mb_ucfirst($addonPage['lname']) ?></a></li>
                        <?php }}?>

                        <!-- </li> -->
                        <!-- <li class="lvl1"><a href="#"><b>Buy Now!</b> <i class="fa fa-angle-down"></i></a></li> -->
                        <li <?= uri_string() == 'checkout' || uri_string() == MY_LANGUAGE_ABBR . '/checkout' ? ' class="lvl1 parent megamenu"' : '' ?>><a href="<?= LANG_URL . '/checkout' ?>"><?= lang('checkout') ?></a></li>
                        <li <?= uri_string() == 'shopping-cart' || uri_string() == MY_LANGUAGE_ABBR . '/shopping-cart' ? ' class="lvl1 parent megamenu"' : '' ?>><a href="<?= LANG_URL . '/shopping-cart' ?>"><?= lang('shopping_cart') ?></a></li>
                        <li <?= uri_string() == 'contacts' || uri_string() == MY_LANGUAGE_ABBR . '/contacts' ? ' class="lvl1 parent megamenu"' : '' ?>><a href="<?= LANG_URL . '/contacts' ?>"><?= lang('contacts') ?></a></li>                        
                      </ul>
                    </nav>
                    <!--End Desktop Menu-->
                </div>
                <!--Mobile Logo-->
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                	<div class="logo">
                        <a href="<?= base_url() ?>">
                            <img src="<?= base_url('attachments/site_logo/' . $sitelogo) ?>" alt="<?= $_SERVER['HTTP_HOST'] ?>" title="<?= $_SERVER['HTTP_HOST'] ?>" />
                        </a>
                    </div>
                </div>
                <!--Mobile Logo-->
                <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                	<div class="site-cart">
                    	<a href="#" class="site-header__cart" title="Cart">
                        	<i class="fa fa-shopping-bag"></i>
                            <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count"><?= is_numeric($cartItems) && (int)$cartItems == 0 ? 0 : $sumOfItems ?></span>
                        </a>
                        <!--Minicart Popup-->
                        <div id="header-cart" class="block block-cart">
                        	<ul class="mini-products-list">
                                <li class="item">

                                    <!-- ?= $load::getCartItems($cartItems) ?> -->
                                	<a class="product-image" href="#">
                                    	<img src="<?= base_url('template/imgs/cape-dress-1.jpg')?>" alt="3/4 Sleeve Kimono Dress" title="" />
                                    </a>
                                    <div class="product-details">
                                    	<a href="#" class="remove"><i class="fa fa-times" aria-hidden="true"></i></a>
                                        <a href="#" class="edit-i remove"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a class="pName" href="cart.html">Sleeve Kimono Dress</a>
                                        <div class="variant-cart">Black / XL</div>
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                            	<span class="label">Qty:</span>
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa fa-minus" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="priceRow">
                                        	<div class="product-price">
                                            	<span class="money">$59.00</span>
                                            </div>
                                         </div>
                                    </div>
                                    
                                </li>
                            </ul>
                            <div class="total">
                            	<div class="total-in">
                                	<span class="label">Cart Subtotal:</span><span class="product-price"><span class="money"><?= is_numeric($cartItems) && (int)$cartItems == 0 ? 0 : $sumOfItems ?></span></span>
                                </div>
                                 <div class="buttonSet text-center">
                                    <!-- <a href="cart.html" class="btn btn-secondary btn--small">View Cart</a> -->
                                    <a <?= uri_string() == 'shopping-cart' || uri_string() == MY_LANGUAGE_ABBR . '/shopping-cart' ? ' ' : '' ?>class="btn btn-secondary btn--small" href="<?= LANG_URL . '/shopping-cart' ?>">View Cart</a>
                                    <!-- <a href="checkout.html" class="btn btn-secondary btn--small">Checkout</a> -->
                                    <a <?= uri_string() == 'checkout' || uri_string() == MY_LANGUAGE_ABBR . '/checkout' ? ' ' : '' ?> class="btn btn-secondary btn--small" href="<?= LANG_URL . '/checkout' ?>"><?= lang('checkout') ?></a>
                                </div>
                            </div>
                            
                        </div>
                        <!--End Minicart Popup-->
                    </div>
                    <div class="site-header__search">
                    	<button type="button" class="search-trigger"><i class="fa fa-search"></i></button>
                    </div>
                </div>
        	</div>
        </div>
    </div>
    <!--End Header-->

    <!--Mobile Menu-->
    <div class="mobile-nav-wrapper" role="navigation">
		<div class="closemobileMenu"><i class="icon fa fa-times pull-right"></i> Close Menu</div>
        <ul id="MobileNav" class="mobile-nav">
            <li <?= uri_string() == '' || uri_string() == MY_LANGUAGE_ABBR ? ' class="lvl1 parent megamenu"' : '' ?>><a href="<?= LANG_URL ?>"><?= lang('home') ?> <i class="fa fa-plus"></i></a>
            <!-- <ul>
                <li><a href="#" class="site-nav">Home Group 1<i class="fa fa-plus"></i></a>
                <ul>
                    <li><a href="index.html" class="site-nav">Home 1 - Classic</a></li>
                </ul>
                </li>
            </ul> -->
            </li>
            <li <?= uri_string() == 'checkout' || uri_string() == MY_LANGUAGE_ABBR . '/blog' ? ' class="lvl1 parent megamenu"' : '' ?> ><a href="<?= LANG_URL . '/blog'?>"><?= lang('blog') ?> <i class="fa fa-plus"></i></a>
                <!-- <ul>
                    <li><a href="#" class="site-nav">Shop Pages<i class="fa fa-plus"></i></a>
                    <ul>
                        <li><a href="shop-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                    </ul>
                    </li>
                </ul> -->
            </li>
            <li <?= uri_string() == '' || uri_string() == MY_LANGUAGE_ABBR . '/checkout' ? ' class="lvl1 parent megamenu"' : '' ?>><a href="<?= LANG_URL . '/checkout'?>"><?= lang('checkout') ?> <i class="fa fa-plus"></i></a>
                <!-- <ul>
                    <li><a href="product-layout-1.html" class="site-nav">Product Page<i class="fa fa-plus"></i></a>
                    <ul>
                        <li><a href="product-layout-1.html" class="site-nav">Product Layout 1</a></li>
                    </ul>
                    </li>
                </ul> -->
            </li>
            <li <?= uri_string() == '' || uri_string() == MY_LANGUAGE_ABBR . '/shopping-cart' ? ' class="lvl1 parent megamenu"' : '' ?>><a href="<?= LANG_URL . '/shopping-cart'?>"><?= lang('shopping_cart') ?> <i class="fa fa-plus"></i></a>
                <!-- <ul>
                    <li><a href="cart-variant1.html" class="site-nav">Cart Page <i class="fa fa-plus"></i></a>
                        <ul class="dropdown">
                            <li><a href="cart-variant1.html" class="site-nav">Cart Variant1</a></li>
                            <li><a href="cart-variant2.html" class="site-nav">Cart Variant2</a></li>
                        </ul>
                    </li>
                    <li><a href="compare-variant1.html" class="site-nav">Compare Product <i class="fa fa-plus"></i></a>
                        <ul class="dropdown">
                            <li><a href="compare-variant1.html" class="site-nav">Compare Variant1</a></li>
                        </ul>
                    </li>
                    <li><a href="checkout.html" class="site-nav">Checkout</a></li>
                    <li><a href="checkout.html" class="site-nav">Checkout</a></li>
                    <li><a href="about-us.html" class="site-nav">About Us<span class="lbl nm_label1">New</span></a></li>
                    <li><a href="contact-us.html" class="site-nav">Contact Us</a></li>
                    <li><a href="faqs.html" class="site-nav">FAQs</a></li>
                    <li><a href="lookbook1.html" class="site-nav">Lookbook<i class="fa fa-plus"></i></a>
                    <ul>
                        <li><a href="lookbook1.html" class="site-nav">Style 1</a></li>
                        <li><a href="lookbook2.html" class="site-nav last">Style 2</a></li>
                    </ul>
                    </li>
                    <li><a href="404.html" class="site-nav">404</a></li>
                    <li><a href="coming-soon.html" class="site-nav">Coming soon<span class="lbl nm_label1">New</span></a></li>
                </ul> -->
            </li>
            <li <?= uri_string() == '' || uri_string() == MY_LANGUAGE_ABBR . '/contacts' ? ' class="lvl1 parent megamenu"' : '' ?>><a href="<?= LANG_URL . '/contacts'?>"><?= lang('contacts') ?> <i class="fa fa-plus"></i></a>
                <!-- <ul>
                    <li><a href="blog-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                    <li><a href="blog-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                    <li><a href="blog-fullwidth.html" class="site-nav">Fullwidth</a></li>
                    <li><a href="blog-grid-view.html" class="site-nav">Gridview</a></li>
                    <li><a href="blog-article.html" class="site-nav">Article</a></li>
                </ul> -->
            </li>
                <!-- <li class="lvl1"><a href="#"><b>Buy Now!</b></a></li> -->
      </ul>
	</div>
    <!--End Mobile Menu-->