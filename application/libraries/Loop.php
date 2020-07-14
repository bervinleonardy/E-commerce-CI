<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loop
{

    private static $CI;

    public function __construct()
    {
        self::$CI = & get_instance();
    }

    static function getCartItems($cartItems)
    {
        if (!empty($cartItems['array'])) {
            ?>
            <li class="cleaner text-right">
                <a href="javascript:void(0);" class="btn-blue-round" onclick="clearCart()">
                    <?= lang('clear_all') ?>
                </a>
            </li>
            <li class="divider"></li>
            <?php
            foreach ($cartItems['array'] as $cartItem) {
                ?>
                <li class="shop-item" data-article-id="<?= $cartItem['id'] ?>">
                    <span class="num_added hidden"><?= $cartItem['num_added'] ?></span>
                    <div class="item">
                        <div class="item-in">
                            <div class="left-side">
                                <img src="<?= base_url('/attachments/shop_images/' . $cartItem['image']) ?>" alt="" />
                            </div>
                            <div class="right-side">
                                <a href="<?= LANG_URL . '/' . $cartItem['url'] ?>" class="item-info">
                                    <span><?= $cartItem['title'] ?></span>
                                    <span class="prices">
                                        <?=
                                        $cartItem['num_added'] == 1 ? $cartItem['price'] : '<span class="num-added-single">'
                                                . $cartItem['num_added'] . '</span> x <span class="price-single">'.CURRENCY.' '
                                                . $cartItem['price'] .' </span> = '.CURRENCY.' <span class="sum-price-single">'
                                                . $cartItem['sum_price'] . '</span>'
                                        ?>
                                    </span>
                                    <!-- <span class="currency">?= CURRENCY ?></span> -->
                                </a>
                            </div>
                        </div>
                        <div class="item-x-absolute">
                            <button class="btn btn-xs btn-danger pull-right" onclick="removeProduct(<?= $cartItem['id'] ?>)">
                                x
                            </button>
                        </div>
                    </div>
                </li>
                <?php
            }
            ?>
            <li class="divider"></li>
            <li class="text-center">
                <a class="go-checkout btn btn-default btn-sm" href="<?= LANG_URL . '/checkout' ?>">
                    <?=
                    !empty($cartItems['array']) ? '<i class="fa fa-check"></i> '
                            . lang('checkout') . ' - <span class="finalSum">' . $cartItems['finalSum']
                            . '</span>' . CURRENCY : '<span class="no-for-pay">' . lang('no_for_pay') . '</span>'
                    ?>
                </a>
            </li>
        <?php } else {
            ?>
            <li class="text-center"><?= lang('no_products') ?></li>
            <?php
        }
    }

    static public function getProducts($products, $classes = '', $carousel = false)
    {
        if ($carousel == true) {
            ?>
            <div class="productSlider grid-products grid-products-hover-gry" id="small_carousel" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                    <?php
                    $i = 0;
                    while ($i < count($products)) {
                        if ($i == 0)
                            $active = 'active';
                        else
                            $active = '';
                        ?>
                        <li data-target="#small_carousel" data-slide-to="<?= $i ?>" class="<?= $active ?>"></li>
                        <?php
                        $i++;
                    }
                    ?>
                </ol>
                <div class="col-12 item">
                <?php
                }
                $i = 0;
                foreach ($products as $article) {
                    if ($i == 0 && $carousel == true) {
                        $active = 'active';
                    } else {
                        $active = '';
                    }
                    ?>
                    <div class="col-12 item">
                    <div class="product-image <?= $carousel == true ? 'item' : '' ?> <?= $classes ?> <?= $active ?>">
                        <!-- <div class="inner"> -->
                            <!-- <div class="img-container"> -->
                                <a class="grid-view-item__link" href="<?= $article['vendor_url'] == null ? LANG_URL . '/' . $article['url'] : LANG_URL . '/' . $article['vendor_url'] . '/' . $article['url'] ?>">
                                    <img class="primary blur-up lazyload" src="<?= base_url('/attachments/shop_images/' . $article['image']) ?>" alt="<?= str_replace('"', "'", $article['title']) ?>">
                                    <img class="hover blur-up lazyload" src="<?= base_url('/attachments/shop_images/' . $article['image']) ?>" alt="<?= str_replace('"', "'", $article['title']) ?>">
                                </a>
                            <?php if (self::$CI->load->get_var('publicQuantity') == 1) { ?>
                                <!-- <div class="quantity"> -->
                                    <?= lang('in_stock') ?>: <span><?= $article['quantity'] ?></span>
                                <!-- </div> -->
                            <?php } if (self::$CI->load->get_var('moreInfoBtn') == 1) { ?>
                                <!-- <a href="?= $article['vendor_url'] == null ? LANG_URL . '/' . $article['url'] : LANG_URL . '/' . $article['vendor_url'] . '/' . $article['url'] ?>" class="info-btn gradient-color">
                                    <span class="text-to-bg">?= lang('info_product_list') ?></span>
                                </a> -->
                            <?php } 
                            if (self::$CI->load->get_var('hideBuyButtonsOfOutOfStock') == 0 || (int)$article['quantity'] > 0) {
                                $hasRefresh = false;
                                if(self::$CI->load->get_var('refreshAfterAddToCart') == 1) {
                                    $hasRefresh = true;
                                }
                            ?>
                            <form class="variants add" data-id="<?= $article['id'] ?>" action="<?= LANG_URL . '/checkout' ?>" onclick="window.location.href='<?= LANG_URL . '/checkout' ?>'" method="GET">
                                <!-- <img class="loader" src="?= base_url('assets/imgs/ajax-loader.gif') ?>" alt="Loding">   -->
                                <button class="btn btn-addto-cart" type="button" tabindex="0"><?= lang('add_to_cart') ?></button>
                            </form>       
                            <div class="button-set">
                                <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                                <!-- <div class="wishlist-btn">
                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                </div>
                                <div class="compare-btn">
                                    <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                        <i class="fa fa-random"></i>
                                    </a>
                                </div> -->
                            </div>  
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="<?= $article['vendor_url'] == null ? LANG_URL . '/' . $article['url'] : LANG_URL . '/' . $article['vendor_url'] . '/' . $article['url'] ?>"><?= character_limiter($article['title'], 70) ?></a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                <?php
                                if ($article['old_price'] != '' && $article['old_price'] != 0 && $article['price'] != '' && $article['price'] != 0) {
                                    $percent_friendly = number_format((($article['old_price'] - $article['price']) / $article['old_price']) * 100) . '%';
                                    ?>                                
                                    <span class="old-price"><?= $percent_friendly ?></span>
                                    <?php } ?>
                                    <span class="price"><?= CURRENCY ?> <?= $article['price'] != '' ? number_format($article['price'], 2) : 0 ?></span>
                                </div>
                                <!-- End product price -->
                            </div>
                            <!-- End product details -->              
                            <?php } else { ?>
                            <div>
                                Product is out of stock
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php $i++; } 
                if ($carousel == true) { ?>
                </div>
                <a class="left carousel-control" href="#small_carousel" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </a>
                <a class="right carousel-control" href="#small_carousel" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
            </div>
            <?php
        }
    }
}
