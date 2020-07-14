<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$arrCategories = array();
foreach ($all_categories as $categorie) {
    if (isset($_GET['category']) && is_numeric($_GET['category']) && $_GET['category'] == $categorie['sub_for']) {
        $arrCategories[] = $categorie;
    }
    if (!isset($_GET['category']) || $_GET['category'] == '') {
        if ($categorie['sub_for'] == 0) {
            $arrCategories[] = $categorie;
        }
    }
}
?>
    <!-- //w3l-banner-slider-main -->
    <section class="w3l-grids-hny-2">
        <!-- /content-6-section -->
        <div class="grids-hny-2-mian py-5">
            <div class="container py-lg-5">
                    
                <h3 class="hny-title mb-0 text-center">Shop With <span>Us</span></h3>
                <p class="mb-4 text-center">Handpicked Favourites just for you</p>
                <div class="welcome-grids row mt-5">
                    <div class="col-lg-2 col-md-4 col-6 welcome-image">
                            <div class="boxhny13">
                                    <a href="#URL">
                                            <img src="<?= base_url ('template/imgs/grid1')?>.jpg" class="img-fluid" alt="" />
                                    <div class="boxhny-content">
                                        <h3 class="title">Product
                                    </div>
                                </a>
                            </div>
                            <h4><a href="#URL">Hand Bags</a></h4>

                    </div>
                    
                    <div class="col-lg-2 col-md-4 col-6 welcome-image">
                            <div class="boxhny13">
                                    <a href="#URL">
                                            <img src="<?= base_url ('template/imgs/grid3')?>.jpg" class="img-fluid" alt="" />
                                    <div class="boxhny-content">
                                        <h3 class="title">Product</h3>
                                    </div>
                                </a>
                            </div>
                            <h4><a href="#URL">
                                    Watches</a></h4>

                        
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 welcome-image">
                            <div class="boxhny13">
                                    <a href="#URL">
                                            <img src="<?= base_url ('template/imgs/grid2')?>.jpg" class="img-fluid" alt="" />
                                    <div class="boxhny-content">
                                        <h3 class="title">Product</h3>
                                    </div>
                                </a>
                            </div>
                            <h4><a href="#URL">Shoes</a></h4>

                    
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 welcome-image">
                            <div class="boxhny13">
                                    <a href="#URL">
                                            <img src="<?= base_url ('template/imgs/grid4')?>.jpg" class="img-fluid" alt="" />
                                    <div class="boxhny-content">
                                        <h3 class="title">Product</h3>
                                    </div>
                                </a>
                            </div>
                            <h4><a href="#URL">Suits</a></h4>

                    </div>
                    <div class="col-lg-2 col-md-4 col-6 welcome-image">
                            <div class="boxhny13">
                                    <a href="#URL">
                                            <img src="<?= base_url ('template/imgs/grid5')?>.jpg" class="img-fluid" alt="" />
                                    <div class="boxhny-content">
                                        <h3 class="title">Product</h3>
                                    </div>
                                </a>
                            </div>
                            <h4><a href="#URL">
                                    Accessories</a></h4>

                        
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 welcome-image">
                            <div class="boxhny13">
                                    <a href="#URL">
                                            <img src="<?= base_url ('template/imgs/grid6')?>.jpg" class="img-fluid" alt="" />
                                    <div class="boxhny-content">
                                        <h3 class="title">Product</h3>
                                    </div>
                                </a>
                            </div>
                            <h4><a href="#URL">
                                    Fragrances</a></h4>

                        
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- //content-6-section -->

    <section class="w3l-content-w-photo-6">
        <!-- /specification-6-->
        <div class="content-photo-6-mian py-5">
                <div class="container py-lg-5">
                        <div class="align-photo-6-inf-cols row">
                            
                            <div class="photo-6-inf-right col-lg-6">
                                    <h3 class="hny-title text-left">All Branded Men's Suits are Flat <span>30% Discount</span></h3>
                                    <p>Visit our shop to see amazing creations from our designers.</p>
                                    <a href="#" class="read-more btn">
                                            Shop Now
                                    </a>
                            </div>
                            <div class="photo-6-inf-left col-lg-6">
                                    <img src="<?= base_url ('template/imgs/1.jpg')?>" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    <!-- //specification-6-->
        
    <section class="w3l-video-6">
        <!-- /video-6-->
        <div class="video-66-info">
            <div class="container-fluid">
                <div class="video-grids-info row">
                    <div class="video-gd-right col-lg-8">
                        <div class="video-inner text-center">
                                    <!--popup-->
                                        <a class="play-button btn popup-with-zoom-anim" href="#small-dialog">
                                                <span class="fa fa-play" aria-hidden="true"></span>
                                        </a>
                                        <div id="small-dialog" class="mfp-hide">
                                            <div class="search-top notify-popup">
                                                    <iframe src="https://player.vimeo.com/video/246139491" frameborder="0"
                                                    allow="autoplay; fullscreen" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <!--//popup-->
                            </div>
                    </div>
                    <div class="video-gd-left col-lg-4 p-lg-5 p-4">
                        <div class="p-xl-4 p-0 video-wrap">
                            <h3 class="hny-title text-left">All Branded Women's Bags are Flat <span>30% Discount</span>
                            </h3>
                            <p>Visit our shop to see amazing creations from our designers.</p>
                            <a href="#" class="read-more btn">
                                Shop Now
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- //video-6-->
    <section class="w3l-ecommerce-main">
        <!-- /products-->
        <div class="ecom-contenthny py-5">
            <div class="container py-lg-5">
                <h3 class="hny-title mb-0 text-center">Shop With <span>Us</span></h3>
                <p class="text-center">Handpicked Favourites just for you</p>
                <!-- /row-->
                <div class="ecom-products-grids row mt-lg-5 mt-3">
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2 transmitv">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="<?= base_url ('template/imgs/shop-1.jpg')?>">
                                    <img class="pic-2 img-fluid" src="<?= base_url ('template/imgs/shop-11.jpg')?>">
                                </a>
                                <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                        <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                        </li>
                                </ul>
                                <div class="transmitv single-item">
                                <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="transmitv_item" value="Women Maroon Top">
                                        <input type="hidden" name="amount" value="899.99">
                                        <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                            Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women Maroon Top </a></h3>
                                <span class="price"><del>$975.00</del>$899.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="<?= base_url ('template/imgs/shop-2.jpg')?>">
                                    <img class="pic-2 img-fluid" src="<?= base_url ('template/imgs/shop-22.jpg')?>">
                                </a>
                                <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                        <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                        </li>
                                </ul>
                                <div class="transmitv single-item">
                                        <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="transmitv_item" value="Men's Pink Shirt">
                                                <input type="hidden" name="amount" value="599.99">
                                                <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                                    Add to Cart
                                                </button>
                                            </form>
                                        </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Men's Pink Shirt </a></h3>
                                <span class="price"><del>$775.00</del>$599.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="<?= base_url ('template/imgs/shop-3.jpg')?>">
                                    <img class="pic-2 img-fluid" src="<?= base_url ('template/imgs/shop-33.jpg')?>">
                                </a>
                                <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                        <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                        </li>
                                </ul>
                                <div class="transmitv single-item">
                                        <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="transmitv_item" value="Dark Blue Top">
                                                <input type="hidden" name="amount" value="799.99">
                                                <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                                    Add to Cart
                                                </button>
                                            </form>
                                        </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Dark Blue Top </a></h3>
                                <span class="price"><del>$875.00</del>$799.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="<?= base_url ('template/imgs/shop-4.jpg')?>">
                                    <img class="pic-2 img-fluid" src="<?= base_url ('template/imgs/shop-44.jpg')?>">
                                </a>
                                <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                        <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                        </li>
                                </ul>
                                <div class="transmitv single-item">
                                        <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="transmitv_item" value="Women Tunic">
                                                <input type="hidden" name="amount" value="399.99">
                                                <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                                    Add to Cart
                                                </button>
                                            </form>
                                        </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Women Tunic </a></h3>
                                <span class="price"><del>$475.00</del>$399.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="<?= base_url ('template/imgs/shop-5.jpg')?>">
                                    <img class="pic-2 img-fluid" src="<?= base_url ('template/imgs/shop-55.jpg')?>">
                                </a>
                                <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                        <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                        </li>
                                </ul>
                                <div class="transmitv single-item">
                                        <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="transmitv_item" value="Yellow T-Shirt">
                                                <input type="hidden" name="amount" value="299.99">
                                                <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                                    Add to Cart
                                                </button>
                                            </form>
                                        </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Yellow T-Shirt</a></h3>
                                <span class="price"><del>$575.00</del>$299.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="<?= base_url ('template/imgs/shop-6.jpg')?>">
                                    <img class="pic-2 img-fluid" src="<?= base_url ('template/imgs/shop-66.jpg')?>">
                                </a>
                                <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                        <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                        </li>
                                </ul>
                                <div class="transmitv single-item">
                                        <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="transmitv_item" value="Straight Kurta">
                                                <input type="hidden" name="amount" value="699.99">
                                                <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                                    Add to Cart
                                                </button>
                                            </form>
                                        </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Straight Kurta </a></h3>
                                <span class="price"><del>$775.00</del>$699.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="<?= base_url ('template/imgs/shop-7.jpg')?>">
                                    <img class="pic-2 img-fluid" src="<?= base_url ('template/imgs/shop-77.jpg')?>">
                                </a>
                                <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                        <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                        </li>
                                </ul>
                                <div class="transmitv single-item">
                                        <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="transmitv_item" value="White T-Shirt">
                                                <input type="hidden" name="amount" value="599.99">
                                                <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                                    Add to Cart
                                                </button>
                                            </form>
                                        </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">White T-Shirt </a></h3>
                                <span class="price"><del>$675.00</del>$599.99</span>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-6 product-incfhny mt-4">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="#">
                                    <img class="pic-1 img-fluid" src="<?= base_url ('template/imgs/shop-8.jp')?>g">
                                    <img class="pic-2 img-fluid" src="<?= base_url ('template/imgs/shop-88.jpg')?>">
                                </a>
                                <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                        <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                        </li>
                                </ul>
                                <div class="transmitv single-item">
                                        <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="transmitv_item" value="Blue Sweater">
                                                <input type="hidden" name="amount" value="499.99">
                                                <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                                    Add to Cart
                                                </button>
                                            </form>
                                        </div>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">Blue Sweater</a></h3>
                                <span class="price"><del>$575.00</del>$499.99</span>
                            </div>
                        </div>

                    </div>


                </div>
                <!-- //row-->
            </div>
        </div>
    </section>
    <!-- //products-->
    <section class="w3l-content-5">
        <!-- /content-6-section -->
        <div class="content-5-main">
            <div class="container">
                <div class="content-info-in row">
                    <div class="content-gd col-md-6 offset-lg-3 text-center">
                        <h3 class="hny-title two">
                            Tons of Products & Options to
                            <span>change</span></h3>
                        <p>Ea consequuntur illum facere aperiam sequi optio consectetur adipisicing elitFuga, suscipit totam
                            animi consequatur saepe blanditiis.Lorem ipsum dolor sit amet,Ea consequuntur illum facere
                            aperiam sequi optio consectetur adipisicing elit..</p>
                        <a href="#" class="read-more-btn2 btn">
                            Shop Now
                        </a>

                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- //content-6-section -->
    <section class="w3l-post-grids-6">
        <!-- /post-grids-->
        <div class="post-6-mian py-5">
            <div class="container py-lg-5">
                    <h3 class="hny-title text-center mb-0 ">Latest Blog <span>Posts</span></h3>
                    <p class="mb-5 text-center">Handpicked Favourites just for you</p>
                <div class="post-hny-grids row mt-5">
                    <div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="<?= base_url ('template/imgs/bg1.jpg')?>" alt="blog-image">
                            </figure>
                        </a>

                        <div class="blog-thumbhny-caption">
                            <ul class="blog-info-list">
                                <li><a href="#admin">By admin</a></li>
                                <li class="date-post">
                                    Aug 10, 2020</li>
                            </ul>
                            <h4><a href="#">Here to bring your life style to the next level.</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
                        <a href="#">
                            <figure>
                                <img class="img-fluid" src="<?= base_url ('template/imgs/bg2.jpg')?>" alt="blog-image">
                            </figure>
                        </a>
                        <div class="blog-thumbhny-caption">
                            <ul class="blog-info-list">
                                <li><a href="#admin">By admin</a></li>
                                <li class="date-post">
                                    Aug 10, 2020</li>
                            </ul>
                            <h4><a href="#">Here to bring your life style to the next level.</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
                        <figure>
                            <img class="img-fluid" src="<?= base_url ('template/imgs/bg3.jpg')?>" alt="blog-image">
                        </figure>
                        <div class="blog-thumbhny-caption">
                            <ul class="blog-info-list">
                                <li><a href="#admin">By admin</a></li>
                                <li class="date-post">
                                    Aug 10, 2020</li>
                            </ul>
                            <h4><a href="#">Here to bring your life style to the next level.</a></h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
                        <figure>
                            <img class="img-fluid" src="<?= base_url ('template/imgs/bg4.jpg')?>" alt="blog-image">
                        </figure>
                        <div class="blog-thumbhny-caption">
                            <ul class="blog-info-list">
                                <li><a href="#admin">By admin</a></li>
                                <li class="date-post">
                                    Aug 10, 2020</li>
                            </ul>
                            <h4><a href="#">Here to bring your life style to the next level.</a></h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- //post-grids-->
    <section class="w3l-customers-sec-6">
        <div class="customers-sec-6-cintent py-5">
            <!-- /customers-->
            <div class="container py-lg-5">
                    <h3 class="hny-title text-center mb-0 ">Customers <span>Love</span></h3>
                    <p class="mb-5 text-center">What People Say</p>
                <div class="row customerhny my-lg-5 my-4">
                    <div class="col-md-12">
                        <div id="customerhnyCarousel" class="carousel slide" data-ride="carousel">

                            <ol class="carousel-indicators">
                                <li data-target="#customerhnyCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#customerhnyCarousel" data-slide-to="1"></li>
                            </ol>
                            <!-- Carousel items -->
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="customer-info text-center">
                                                <div class="feedback-hny">
                                                    <span class="fa fa-quote-left"></span>
                                                    <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                                                        adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                                                        quas nihil quasis.</p>
                                                </div>
                                                <div class="feedback-review mt-4">
                                                    <img src="<?= base_url ('template/imgs/c1.jpg')?>" class="img-fluid" alt="">
                                                    <h5>Smith Roy</h5>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                                <div class="customer-info text-center">
                                                        <div class="feedback-hny">
                                                            <span class="fa fa-quote-left"></span>
                                                            <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                                                                adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                                                                quas nihil quasis.</p>
                                                        </div>
                                                        <div class="feedback-review mt-4">
                                                            <img src="<?= base_url ('template/imgs/c2.jpg')?>" class="img-fluid" alt="">
                                                            <h5>Lora Grill</h5>
            
                                                        </div>
                                                    </div>
                                        </div>
                                        <div class="col-md-3">
                                                <div class="customer-info text-center">
                                                        <div class="feedback-hny">
                                                            <span class="fa fa-quote-left"></span>
                                                            <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                                                                adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                                                                quas nihil quasis.</p>
                                                        </div>
                                                        <div class="feedback-review mt-4">
                                                            <img src="<?= base_url ('template/imgs/c3.jpg')?>" class="img-fluid" alt="">
                                                            <h5>Laura Sten</h5>
            
                                                        </div>
                                                    </div>
                                        </div>
                                        <div class="col-md-3">
                                                <div class="customer-info text-center">
                                                        <div class="feedback-hny">
                                                            <span class="fa fa-quote-left"></span>
                                                            <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                                                                adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                                                                quas nihil quasis.</p>
                                                        </div>
                                                        <div class="feedback-review mt-4">
                                                            <img src="<?= base_url ('template/imgs/c4.jpg')?>" class="img-fluid" alt="">
                                                            <h5>John Lee</h5>
            
                                                        </div>
                                                    </div>
                                        </div>
                                    </div>
                                    <!--.row-->
                                </div>
                                <!--.item-->

                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-3">
                                                <div class="customer-info text-center">
                                                        <div class="feedback-hny">
                                                            <span class="fa fa-quote-left"></span>
                                                            <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                                                                adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                                                                quas nihil quasis.</p>
                                                        </div>
                                                        <div class="feedback-review mt-4">
                                                            <img src="<?= base_url ('template/imgs/c4.jpg')?>" class="img-fluid" alt="">
                                                            <h5>John Lee</h5>
            
                                                        </div>
                                                    </div>
                                        </div>
                                        <div class="col-md-3">
                                                <div class="customer-info text-center">
                                                        <div class="feedback-hny">
                                                            <span class="fa fa-quote-left"></span>
                                                            <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                                                                adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                                                                quas nihil quasis.</p>
                                                        </div>
                                                        <div class="feedback-review mt-4">
                                                            <img src="<?= base_url ('template/imgs/c3.jpg')?>" class="img-fluid" alt="">
                                                            <h5>Laura Sten</h5>
            
                                                        </div>
                                                    </div>
                                        </div>
                                        <div class="col-md-3">
                                                <div class="customer-info text-center">
                                                    <div class="feedback-hny">
                                                        <span class="fa fa-quote-left"></span>
                                                        <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                                                            adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                                                            quas nihil quasis.</p>
                                                    </div>
                                                    <div class="feedback-review mt-4">
                                                        <img src="<?= base_url ('template/imgs/c1.jpg')?>" class="img-fluid" alt="">
                                                        <h5>Smith Roy</h5>
        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                    <div class="customer-info text-center">
                                                            <div class="feedback-hny">
                                                                <span class="fa fa-quote-left"></span>
                                                                <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                                                                    adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                                                                    quas nihil quasis.</p>
                                                            </div>
                                                            <div class="feedback-review mt-4">
                                                                <img src="<?= base_url ('template/imgs/c2.jpg')?>" class="img-fluid" alt="">
                                                                <h5>Lora Grill</h5>
                
                                                            </div>
                                                        </div>
                                            </div>
                                    </div>
                                    <!--.row-->
                                </div>
                                <!--.item-->

                            </div>
                            <!--.carousel-inner-->
                        </div>
                        <!--.Carousel-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //customers-->
    <section class="w3l-subscription-6">
        <!--/customers -->
        <div class="subscription-infhny">
            <div class="container-fluid">

                <div class="subscription-grids row">

                    <div class="subscription-right form-right-inf col-lg-6 p-md-5 p-4">
                        <div class="p-lg-5 py-md-0 py-3">
                            <h3 class="hny-title">Join us for FREE to get instant <span>email updates!</span></h3>
                                <p>Subscribe and get notified at first on the latest update and offers!</p>

                            <form action="#" method="post" class="signin-form mt-lg-5 mt-4">
                                <div class="forms-gds">
                                    <div class="form-input">
                                        <input type="email" name="" placeholder="Your email here" required="">
                                    </div>
                                    <div class="form-input"><button class="btn">Join</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="subscription-left forms-25-info col-lg-6 ">

                    </div>
                </div>

                <!--//customers -->
            </div>
    </section>
    <!-- //customers-6-->