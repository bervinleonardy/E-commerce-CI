<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!--Body Content-->
<div id="page-content">
    <?php if (count($sliderProducts) > 0) {?> 
    	<!--Home slider-->
    <div id="home-slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            $i = 0;
            while ($i < count($sliderProducts)) {
                ?>
                <li data-target="#home-slider" data-slide-to="0" class="<?= $i == 0 ? 'active' : '' ?>"></li>
                <?php
                $i++;
            }
            ?>
        </ol>
        <div class="container">
            <div class="home-slideshow" role="listbox">
                <?php
                $i = 0;
                foreach ($sliderProducts as $article) {
                    ?>
                    <div class="slide slideshow--medium <?= $i == 0 ? 'active' : '' ?>">
                        <div class="blur-up lazyload">
                            <img data-src="<?= base_url('attachments/shop_images/' . $article['image']) ?>" src="<?= base_url('attachments/shop_images/' . $article['image']) ?>" class="blur-up lazyload" alt="">
                            <div class="slideshow__text-wrap slideshow__overlay classic middle">
                                <div class="slideshow__text-content classic left">
                                
                                    <div class="container">                            
                                        <div class="wrap-caption left">
                                            <h2 class="h1 mega-title slideshow__title">
                                                <a href="<?= LANG_URL . '/' . $article['url'] ?>">
                                                    <?= character_limiter($article['title'], 100) ?>
                                                </a>
                                            </h2>
                                            <span class="mega-subtitle slideshow__subtitle">
                                                <a href="<?= LANG_URL . '/' . $article['url'] ?>">
                                                    <?= lang('details') ?>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>                                    
                        </div>
                    </div>
                    <?php
                    $i++;
                }
                ?>
            </div>
        </div>
        
        <a href="#home-slider" role="button" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        <a href="#home-slider" role="button" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
    </div>
<?php } ?>        
    	<!-- <div class="slideshow slideshow-wrapper pb-section">
        	<div class="home-slideshow">

            	<div class="slide slideshow--medium">
                	<div class="blur-up lazyload">
                        <img class="blur-up lazyload" data-src="?= base_url('template/imgs/home11-grid-banner1.jpg')?>" src="?= base_url('template/imgs/home11-grid-banner1.jpg')?>" alt="Shop Our New Collection" title="Shop Our New Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic middle">
                            <div class="slideshow__text-content middle">
                            	<div class="container">
                                    <div class="wrap-caption right">
                                        <h2 class="h1 mega-title slideshow__title">Outfit of Today</h2>
                                        <span class="mega-subtitle slideshow__subtitle">Lookbook ss 2018</span>
                                        <span class="btn">View Catelog</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            	<div class="slide slideshow--medium">
                	<div class="blur-up lazyload">
                        <img class="blur-up lazyload" data-src="?= base_url('template/imgs/home2-default-banner2.jpg')?>" src="?= base_url('template/imgs/home2-default-banner2.jpg')?>" alt="Outfit of Today" title="Summer Bikini Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic middle">
                            <div class="slideshow__text-content middle">
                            	<div class="container">
                                    <div class="wrap-caption center">
                                        <h2 class="h1 mega-title slideshow__title">Fashion &amp; Show</h2>
                                        <span class="mega-subtitle slideshow__subtitle">A World Fashion and Trendy Fashion Clother's</span>
                                        <span class="btn">Shop now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                

            </div>
        </div> -->
        <!--End Home slider-->
        
      	<!--Feature Content-->
        <div class="section feature-content">
            <div class="container">
                <div class="row">
                    <div class="feature-row">
                        <div class="col-12 col-sm-12 col-md-6 feature-row__item text-center">
                            <img class="blur-up lazyload" data-src="<?= base_url('template/imgs/home12-category-bnr1.jpg')?>" src="<?= base_url('template/imgs/home12-category-bnr1.jpg')?>" alt="Hot hoodies jackets" title="Hot hoodies jackets" />
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 feature-row__item feature-row__text feature-row__text--left text-left">
                            <div class="row-text">
                                <h2 class="h2">Hot hoodies jackets</h2>
                                <p>Cover up in style with Hot Jackets now only $50</p>
                                <a href="#" class="btn">SHOP $50 Jackets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Feature Content-->
        
        <!-- Feature Content-- -->
        <div class="section feature-content">
            <div class="container">
                <div class="row">
                    <div class="feature-row">
                        <div class="col-12 col-sm-12 col-md-6 feature-row__item feature-row__text feature-row__text--right text-right">
                            <div class="row-text">
                                <h2 class="h2">Shoes Collection</h2>
                                <p>Shoes we can't stop wearing!</p>
                                <a href="#" class="btn">Shop Now</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 feature-row__item text-center">
                            <img class="blur-up lazyload" data-src="<?= base_url('template/imgs/home12-category-bnr2.jpg')?>" src="<?= base_url('template/imgs/home12-category-bnr2.jpg')?>" alt="Shoes Collection" title="Shoes Collection" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Content--> 
        
        <!--Shop these looks-->
        <div class="section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2"><?= lang('products') ?></h2>
                            <p>Shop from hundreds of collections for a fashionable look.</p>
                        </div>
						<div class="productSlider grid-products grid-products-hover-gry">
                        <?php
                            if (!empty($products)) {
                                $load::getProducts($products, 'col-12 item', false);
                            } else {
                                ?>
                                <script>
                                    $(document).ready(function () {
                                        ShowNotificator('alert-info', '<?= lang('no_results') ?>');
                                    });
                                </script>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>   
                 
            </div>
        </div>
        <!--End Shop these looks-->
        
        <!--Feature Content-->
        <div class="section feature-content">
            <div class="container">
                <div class="row">
                    <div class="feature-row">
                        <div class="col-12 col-sm-12 col-md-6 feature-row__item text-center">
                            <img class="blur-up lazyload" data-src="<?= base_url('template/imgs/home12-category-bnr3.jpg')?>" src="<?= base_url('template/imgs/home12-category-bnr3.jpg')?>" alt="Nuke New Arrivals" title="Nuke New Arrivals" />
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 feature-row__item feature-row__text feature-row__text--left text-left">
                            <div class="row-text">
                                <h2 class="h2">Nuke New Arrivals</h2>
                                <p>Fresh arrivals are here to take over your closet!</p>
                                <a href="#" class="btn">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Feature Content-->
        
        <!--Three Column Products-->
        <div class="section three-column-pro">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    	<div class="section-header text-left">
                            <h2 class="h2">Most Popular</h2>
                        </div>
                        <div class="grid">
                            <div class="grid__item">
                              <div class="mini-list-item">
                                <div class="mini-view_image">
                                    <a class="grid-view-item__link" href="#">
                                        <img class="grid-view-item__image blur-up lazyload" data-src="<?= base_url('template/imgs/home7-product1.jpg')?>" src="<?= base_url('template/imgs/home7-product1.jpg')?>" alt="" >
                                    </a>
                                </div>
                                <div class="details"> <a class="grid-view-item__title" href="#">Camoscio Zip Heel</a>
                                  <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$173.60</span></span></div>
                                </div>
                              </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <!--End Three Column Products-->
        
        <!-- Instagram Section-->
        <div class="section instagram-feed-section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2 heading-font">Belle On Instagram</h2>
                            <p>Phasellus lorem malesuada ligula pulvinar commodo maecenas suscipit auctom.</p>
                        </div>
                        <!--Instagram ID-->
                        <div id="instafeed" class="imlow_resolution"></div>
                        <!--End Instagram ID-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Instagram Section-->
        
    </div>
    <!--End Body Content-->