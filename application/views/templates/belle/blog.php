<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-content">
    <!--Page Title-->
    <div class="page section-header text-center mb-0">
        <div class="page-title">
            <div class="wrapper"><h1 class="page-width">Blog MimicStore</h1></div>
        </div>
    </div>
    <!--End Page Title--> 
    <div class="bredcrumbWrap">
        <div class="container breadcrumbs">
            <a href="#" title="Back to the home page"><?= lang('home') ?></a><span aria-hidden="true">›</span><span>Blog MimicStore</span>
        </div>
    </div>   
    <div class="container">
        <div class="row">
            <!--Sidebar-->
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar">
                <div class="sidebar_tags">
                    <div class="sidebar_widget categories">
                        <div class="widget-title"><h2><?= lang('categories') ?></h2></div>
                        <div class="widget-content">
                            <ul class="sidebar_categories">
                            <?php
                                if (!empty($nonDynPages)) {
                                    foreach ($nonDynPages as $addonPage) {
                                        ?>
                                        <li <?= uri_string() == $addonPage || uri_string() == MY_LANGUAGE_ABBR . '/' . $addonPage ? ' ' : '' ?> class="lvl-1 active"><a href="<?= LANG_URL . '/' . $addonPage ?>"><?= mb_ucfirst(lang($addonPage)) ?></a></li>
                                        <?php
                                    }
                                }
                                if (!empty($dynPages)) {
                                    foreach ($dynPages as $addonPage) {
                                        ?>
                                        <li <?= urldecode(uri_string()) == 'page/' . $addonPage['pname'] || uri_string() == MY_LANGUAGE_ABBR . '/' . 'page/' . $addonPage['pname'] ? ' class="lvl-1 active"' : ''
                                        ?>><a href="<?= LANG_URL . '/page/' . $addonPage['pname'] ?>" class="site-nav lvl-1" ><?= mb_ucfirst($addonPage['lname']) ?></a></li>
                                            <?php
                                        }
                                    }
                                    ?>                            
                                <!-- <li class="lvl-1 "><a href="http://annimexweb.com/" class="site-nav lvl-1">Beauty</a></li>
                                <li class="lvl-1  active"><a href="#" class="site-nav lvl-1">fashion</a></li>
                                <li class="lvl-1 "><a href="#" class="site-nav lvl-1">summer</a></li>
                                <li class="lvl-1 "><a href="#" class="site-nav lvl-1">trend</a></li>
                                <li class="lvl-1 "><a href="#" class="site-nav lvl-1">winter</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar_widget">
                        <div class="widget-title"><h2>Recent Posts</h2></div>
                        <div class="widget-content">
                            <div class="list list-sidebar-products">
                                <div class="grid">
                                <div class="grid__item">
                                    <div class="mini-list-item">
                                    <div class="mini-view_image">
                                        <a class="grid-view-item__link" href="#">
                                            <img class="grid-view-item__image blur-up lazyload" data-src="<?=base_url ('template/imgs/blog-post-sml-1.jpg')?>" src="<?=base_url ('template/imgs/blog-post-sml-1.jpg')?>" alt="" />
                                        </a>
                                    </div>
                                    <div class="details"> <a class="grid-view-item__title" href="#">It's all about how you wear</a>
                                        <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:33:00Z">May 02, 2017</time></span></div>
                                    </div>
                                    </div>
                                </div>
                                <div class="grid__item">
                                    <div class="mini-list-item">
                                    <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="<?=base_url ('template/imgs/blog-post-sml-2.jpg')?>" src="<?=base_url ('template/imgs/blog-post-sml-2.jpg')?>" alt="" /></a> </div>
                                    <div class="details"> <a class="grid-view-item__title" href="#">27 Days of Spring Fashion Recap</a>
                                        <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:33:00Z">May 02, 2017</time> </span></div>
                                    </div>
                                    </div>
                                </div>
                                <div class="grid__item">
                                    <div class="mini-list-item">
                                    <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="<?=base_url ('template/imgs/blog-post-sml-3.jpg')?>" src="<?=base_url ('template/imgs/blog-post-sml-3.jpg')?>" alt="" /></a> </div>
                                    <div class="details"> <a class="grid-view-item__title" href="#">How to Wear The Folds Trend Four Ways</a>
                                        <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:14:00Z">May 02, 2017</time> </span></div>
                                    </div>
                                    </div>
                                </div>
                                <div class="grid__item">
                                    <div class="mini-list-item">
                                    <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="<?=base_url ('template/imgs/blog-post-sml-4.jpg')?>" src="<?=base_url ('template/imgs/blog-post-sml-4.jpg')?>" alt="" /></a> </div>
                                    <div class="details"> <a class="grid-view-item__title" href="#">Accusantium doloremque</a>
                                        <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:12:00Z">May 02, 2017</time> </span></div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar_widget">
                        <div class="widget-title"><h2>Recent Comments</h2></div>
                        <div class="widget-content">
                            <div class="list list-sidebar-products">
                                <div class="grid">
                                <div class="grid__item">
                                    <div class="mini-list-item">
                                    <div class="mini-view_image">
                                        <a class="grid-view-item__link" href="#">
                                            <img class="grid-view-item__image blur-up lazyload" data-src="<?=base_url ('template/imgs/recent-commnet-img.jpg')?>" src="<?=base_url ('template/imgs/recent-commnet-img.jpg')?>" alt="" />
                                        </a>
                                    </div>
                                    <div class="details">
                                        <div class="grid-view-item__meta"><strong>Tim</strong> On <a href="#">Lorem Ipsum</a></div>
                                        <a class="grid-view-item__title" href="#">On sait depuis longtemps que travailler avec</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="grid__item">
                                    <div class="mini-list-item">
                                    <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="<?=base_url ('template/imgs/recent-commnet-img.jpg')?>" src="<?=base_url ('template/imgs/recent-commnet-img.jpg')?>" alt="" /></a> </div>
                                    <div class="details">
                                        <div class="grid-view-item__meta"><strong>Joy</strong> On <a href="#">Lorem Ipsum</a></div>
                                        <a class="grid-view-item__title" href="#">On sait depuis longtemps que travailler avec</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="grid__item">
                                    <div class="mini-list-item">
                                    <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="<?=base_url ('template/imgs/recent-commnet-img.jpg')?>" src="<?=base_url ('template/imgs/recent-commnet-img.jpg')?>" alt="" /></a> </div>
                                    <div class="details">
                                        <div class="grid-view-item__meta"><strong>Jhon</strong> On <a href="#">Lorem Ipsum</a></div>
                                        <a class="grid-view-item__title" href="#">On sait depuis longtemps que travailler avec</a>
                                    </div>
                                    </div>
                                </div>
                                <div class="grid__item">
                                    <div class="mini-list-item">
                                    <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="<?=base_url ('template/imgs/recent-commnet-img.jpg')?>" src="<?=base_url ('template/imgs/recent-commnet-img.jpg')?>" alt="" /></a> </div>
                                    <div class="details">
                                        <div class="grid-view-item__meta"><strong>Tim</strong> On <a href="#">Lorem Ipsum</a></div>
                                        <a class="grid-view-item__title" href="#">On sait depuis longtemps que travailler avec</a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar_widget tags-clouds">
                        <div class="widget-title"><h2>Tags Cloud</h2></div>
                        <div class="widget-content">
                            <ul>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Clothes</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">Furniture</a></li>
                                <li><a href="#">Sun Glasses</a></li>
                                <li><a href="#">Winter</a></li>
                                <li><a href="#">Autoparts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Sidebar-->


            <!--Main Content-->
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                <div class="custom-search">
                    <form action="" method="GET" class="input-group search-header search" role="search" style="position: relative;">
                        <input class="search-header__input search__input input-group__field" value="<?= isset($_GET['q']) ? $_GET['q'] : '' ?>" type="search" name="q" placeholder="<?= lang('search') ?>" aria-label="Search" autocomplete="off">
                        <span class="input-group__btn"><button class="btnSearch" type="submit"> <i class="fa fa-search"></i> </button></span>
                    </form>
                </div>
                <div class="blog--list-view">
                    <div class="row">
                    <?php
                        if (!empty($posts)) {
                            foreach ($posts as $post) {?>                        
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 article"> 
                    
                            <!-- Article Image --> 
                            <a class="article_featured-image" href="<?= LANG_URL . '/blog/' . $post['url'] ?>"><img class="blur-up lazyload" data-src="<?= base_url('attachments/blog_images/' . $post['image']) ?>" src="<?= base_url('attachments/blog_images/' . $post['image']) ?>" alt="<?= $post['title'] ?>"></a> 
                            <h2 class="h3"><a href="<?= LANG_URL . '/blog/' . $post['url'] ?>"><?= character_limiter($post['title'], 85) ?></a></h2>
                            <ul class="publish-detail">                      
                                <li><i class="fa fa-user" aria-hidden="true"></i>  User</li>
                                <li><i class="fa fa-clock-o"></i> <time datetime="<?= date('M d, y', $post['time']) ?>"><?= date('M d, y', $post['time']) ?></time></li>
                            </ul>
                            <div class="rte"> 
                                <p><?= character_limiter(strip_tags($post['description']), 300) ?></p>
                                    </div>
                            <p><a href="<?= LANG_URL . '/blog/' . $post['url'] ?>" class="btn btn-secondary btn--small"><?= lang('read_mode') ?> <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                        </div>
                        <?php
                        }
                    } else { ?>
                        <div class="alert alert-info"><?= lang('no_posts') ?></div>
                    <?php } ?>

                    </div>
                    <hr/>
                    <div class="pagination">
                        <ul>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="next"><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Main Content-->
        </div>
    </div>    
</div>