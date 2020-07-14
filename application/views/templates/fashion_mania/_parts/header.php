<!DOCTYPE html>
<html lang="<?= MY_LANGUAGE_ABBR ?>">
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
        <link href="<?= base_url('templatecss/bootstrap.css') ?>" rel="stylesheet" type="text/css" media="all" />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?= base_url('templatejs/jquery.min.js') ?>"></script>
        <!-- Custom Theme files -->
        <!--theme-style-->
        <link href="<?= base_url('templatecss/style.css') ?>" rel="stylesheet" type="text/css" media="all" />	
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- start menu -->
        <link href="<?= base_url('templatecss/memenu.css') ?>" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="<?= base_url('templatejs/memenu.js')?>"></script>
        <script>$(document).ready(function(){$(".memenu").memenu();});</script>
        <script src="<?= base_url('templatejs/simpleCart.min.js') ?>"> </script>
        <!-- slide -->
        <script src="<?= base_url('templatejs/responsiveslides.min.js') ?>"></script>
        <script>
            $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
            });
        </script>

        <link rel="stylesheet" href="<?= base_url('templatecss/custom.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('cssloader/theme.css') ?>"  />
        <!-- <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script> -->
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
    </head>
    <body>
    <!--header-->
    <div class="header">
        <div class="header-top">
            <div class="container">
            <div class="col-sm-4 world">
                        <ul >
                            <li>
                            <select class="in-drop">
                                <option>English</option>
                                <option>Japanese</option>
                                <option>French</option>
                                </select></li>
                            <li><select class="in-drop1">
                                <option>Dollar</option>
                                <option>Euro</option>
                                <option>Yen</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-4 logo">
                        <a href="index.html"><img src="<?= base_url ('template/imgs/logo.png')?>" alt=""></a>	
                    </div>
            
                <div class="col-sm-4 header-left">		
                        <p class="log"><a href="account.html"  >Login</a>
                            <span>or</span><a  href="account.html"  >Signup</a></p>
                        <div class="cart box_1">
                            <a href="checkout.html">
                            <h3> <div class="total">
                                <span class="simpleCart_total"></span></div>
                                <img src="<?= base_url ('template/imgs/cart.png')?>" alt=""/></h3>
                            </a>
                            <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

                        </div>
                        <div class="clearfix"> </div>
                </div>
                    <div class="clearfix"> </div>
            </div>
            </div>
            <div class="container">
                <div class="head-top">
                    <div class="col-sm-2 number">
                        <span><i class="glyphicon glyphicon-phone"></i>085 596 234</span>
                    </div>
            <div class="col-sm-8 h_menu4">
                    <ul class="memenu skyblue">
                        <li class=" grid"><a  href="index.html">Home</a></li>	
                        <li><a  href="#">Men</a>
                            <div class="mepanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>All Clothing</h4>
                                        <ul>
                                            <li><a href="products.html">Shirts</a></li>
                                            <li><a href="products.html">Sports Wear</a></li>
                                            <li><a href="products.html">Shorts</a></li>
                                            <li><a href="products.html">Suits & Blazers</a></li>
                                            <li><a href="products.html">Formal Shirts</a></li>
                                            <li><a href="products.html">Sweatpants</a></li>
                                            <li><a href="products.html">Swimwear</a></li>
                                            <li><a href="products.html">Trousers & Chinos</a></li>
                                            <li><a href="products.html">T-Shirts</a></li>
                                            <li><a href="products.html">Underwear & Socks</a></li>
                                            
                                        </ul>	
                                    </div>							
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Footwear</h4>
                                        <ul>
                                            <li><a href="products.html">Formal Shoes</a></li>
                                            <li><a href="products.html">Boots</a></li>
                                            <li><a href="products.html">Sports Shoes</a></li>
                                            <li><a href="products.html">Casual Shoes</a></li>
                                            <li><a href="products.html">Running Shoes</a></li>
                                            <li><a href="products.html">Sneakers</a></li>
                                            <li><a href="products.html">Loafers</a></li>
                                            <li><a href="products.html">Slippers</a></li>
                                            <li><a href="products.html">Sandals</a></li>
                                            <li><a href="products.html">Flip-flops</a></li>
                                        
                                        </ul>	
                                    </div>							
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Popular Brands</h4>
                                        <ul>
                                            <li><a href="products.html">Levis</a></li>
                                            <li><a href="products.html">Persol</a></li>
                                            <li><a href="products.html">Nike</a></li>
                                            <li><a href="products.html">Edwin</a></li>
                                            <li><a href="products.html">New Balance</a></li>
                                            <li><a href="products.html">Jack & Jones</a></li>
                                            <li><a href="products.html">Paul Smith</a></li>
                                            <li><a href="products.html">Ray-Ban</a></li>
                                            <li><a href="products.html">Wood Wood</a></li>
                                        </ul>	
                                    </div>												
                                </div>
                            </div>
                            </div>
                        </li>
                        <li class="grid"><a  href="#">	Women</a>
                            <div class="mepanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>All Clothing</h4>
                                        <ul>
                                            <li><a href="products.html">Shirts & Tops</a></li>
                                            <li><a href="products.html">Sports Wear</a></li>
                                            <li><a href="products.html">Kurtas & Kurties</a></li>
                                            <li><a href="products.html">Suits & Blazers</a></li>
                                            <li><a href="products.html">Sarees</a></li>
                                            <li><a href="products.html">Sweatpants</a></li>
                                            <li><a href="products.html">Swimwear</a></li>
                                            <li><a href="products.html">Night-Suits</a></li>
                                            <li><a href="products.html">T-Shirts</a></li>
                                            <li><a href="products.html">Jeans</a></li>
                                            
                                        </ul>	
                                    </div>							
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Footwear</h4>
                                        <ul>
                                            <li><a href="products.html">Heels</a></li>
                                            <li><a href="products.html">Flats</a></li>
                                            <li><a href="products.html">Sports Shoes</a></li>
                                            <li><a href="products.html">Casual Shoes</a></li>
                                            <li><a href="products.html">Running Shoes</a></li>
                                            <li><a href="products.html">Wedges</a></li>
                                            <li><a href="products.html">Boots</a></li>
                                            <li><a href="products.html">Pumps</a></li>
                                            <li><a href="products.html">Slippers</a></li>
                                            <li><a href="products.html">Flip-flops</a></li>
                                        
                                        </ul>
                                    </div>							
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Popular Brands</h4>
                                        <ul>
                                            <li><a href="products.html">Levis</a></li>
                                            <li><a href="products.html">Persol</a></li>
                                            <li><a href="products.html">Nike</a></li>
                                            <li><a href="products.html">Edwin</a></li>
                                            <li><a href="products.html">New Balance</a></li>
                                            <li><a href="products.html">Jack & Jones</a></li>
                                            <li><a href="products.html">Paul Smith</a></li>
                                            <li><a href="products.html">Ray-Ban</a></li>
                                            <li><a href="products.html">Wood Wood</a></li>
                                        </ul>	
                                    </div>												
                                </div>
                            </div>
                            </div>
                    </li>
                    <li><a  href="typo.html">Blog</a></li>				
                    <li><a class="color6" href="contact.html">Conact</a></li>
                </ul> 
                </div>
                    <div class="col-sm-2 search">		
                <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
            </div>
            <div class="clearfix"> </div>
                <!---pop-up-box---->
                        <!-- <script type="text/javascript" src="<?= base_url ('templatejs/modernizr.custom.min.js')?>"></script>     -->
                        <link href="<?= base_url ('templatecss/popuo-box.css" rel="stylesheet')?>" type="text/css" media="all"/>
                        <script src="<?= base_url ('templatejs/jquery.magnific-popup.js')?>" type="text/javascript"></script>
                        <!---//pop-up-box---->
                    <div id="small-dialog" class="mfp-hide">
                    <div class="search-top">
                            <div class="login">
                                <input type="submit" value="">
                                <input type="text" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
                            </div>
                            <p>	Shopping</p>
                        </div>				
                    </div>
                    <script>
                            $(document).ready(function() {
                            $('.popup-with-zoom-anim').magnificPopup({
                                type: 'inline',
                                fixedContentPos: false,
                                fixedBgPos: true,
                                overflowY: 'auto',
                                closeBtnInside: true,
                                preloader: false,
                                midClick: true,
                                removalDelay: 300,
                                mainClass: 'my-mfp-zoom-in'
                            });
                                                                                            
                            });
                    </script>			
        <!---->		
            </div>
        </div>
    </div>
    <!--banner-->
    <div class="banner">
        <div class="col-sm-3 banner-mat">
            <img class="img-responsive"	src="<?= base_url ('template/imgs/ba1.jpg')?>" alt="">
        </div>
        <div class="col-sm-6 matter-banner">
            <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider">
                        <li>
                            <img src="<?= base_url ('template/imgs/1.jpg')?>" alt="">
                        </li>
                        <li>
                            <img src="<?= base_url ('template/imgs/2.jpg')?>" alt="">   
                        </li>
                        <li>
                            <img src="<?= base_url ('template/imgs/1.jpg')?>" alt="">
                        </li>	
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-3 banner-mat">
            <img class="img-responsive" src="<?= base_url ('template/imgs/ba.jpg')?>" alt="">
        </div>
        <div class="clearfix"> </div>
    </div>
    <!--//banner-->
    <!--content-->
    <div class="content">
        <div class="container">
            <div class="content-top">
                <h1>Recent Products</h1>
                <div class="content-top1">
                    <div class="col-md-3 col-md2">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="single.html">
                                <img class="img-responsive" src="<?= base_url ('template/imgs/pi.png')?>" alt="" />
                            </a>
                            <h3><a href="single.html">Tops</a></h3>
                            <div class="price">
                                    <h5 class="item_price">$300</h5>
                                    <a href="#" class="item_add">Add To Cart</a>
                                    <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>	
                <div class="col-md-3 col-md2">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="single.html">
                                <img class="img-responsive" src="<?= base_url ('template/imgs/pi2.png')?>" alt="" />
                            </a>
                            <h3><a href="single.html">T-Shirt</a></h3>
                            <div class="price">
                                    <h5 class="item_price">$300</h5>
                                    <a href="#" class="item_add">Add To Cart</a>
                                    <div class="clearfix"> </div>
                            </div>
                            
                        </div>
                    </div>	
                <div class="col-md-3 col-md2">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="single.html">
                                <img class="img-responsive" src="<?= base_url ('template/imgs/pi4.png')?>" alt="" />
                            </a>
                            <h3><a href="single.html">Shirt</a></h3>
                            <div class="price">
                                    <h5 class="item_price">$300</h5>
                                    <a href="#" class="item_add">Add To Cart</a>
                                    <div class="clearfix"> </div>
                            </div>
                            
                        </div>
                    </div>	
                <div class="col-md-3 col-md2">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="single.html">
                                <img class="img-responsive" src="<?= base_url ('template/imgs/pi1.png')?>" alt="" />
                            </a>
                            <h3><a href="single.html">Tops</a></h3>
                            <div class="price">
                                    <h5 class="item_price">$300</h5>
                                    <a href="#" class="item_add">Add To Cart</a>
                                    <div class="clearfix"> </div>
                            </div>
                            
                        </div>
                    </div>	
                <div class="clearfix"> </div>
                </div>	
                <div class="content-top1">
                    <div class="col-md-3 col-md2">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="single.html">
                                <img class="img-responsive" src="<?= base_url ('template/imgs/pi3.png')?>" alt="" />
                            </a>
                            <h3><a href="single.html">Shirt</a></h3>
                            <div class="price">
                                    <h5 class="item_price">$300</h5>
                                    <a href="#" class="item_add">Add To Cart</a>
                                    <div class="clearfix"> </div>
                            </div>
                            
                        </div>
                    </div>	
                <div class="col-md-3 col-md2">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="single.html">
                                <img class="img-responsive" src="<?= base_url ('template/imgs/pi5.png')?>" alt="" />
                            </a>
                            <h3><a href="single.html">T-Shirt</a></h3>
                            <div class="price">
                                    <h5 class="item_price">$300</h5>
                                    <a href="#" class="item_add">Add To Cart</a>
                                    <div class="clearfix"> </div>
                            </div>
                            
                        </div>
                    </div>	
                <div class="col-md-3 col-md2">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="single.html">
                                <img class="img-responsive" src="<?= base_url ('template/imgs/pi6.png')?>" alt="" />
                            </a>
                            <h3><a href="single.html">Jeans</a></h3>
                            <div class="price">
                                    <h5 class="item_price">$300</h5>
                                    <a href="#" class="item_add">Add To Cart</a>
                                    <div class="clearfix"> </div>
                            </div>
                            
                        </div>
                    </div>	
                <div class="col-md-3 col-md2">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="single.html">
                                <img class="img-responsive" src="<?= base_url ('template/imgs/pi7.png')?>" alt="" />
                            </a>
                            <h3><a href="single.html">Tops</a></h3>
                            <div class="price">
                                    <h5 class="item_price">$300</h5>
                                    <a href="#" class="item_add">Add To Cart</a>
                                    <div class="clearfix"> </div>
                            </div>
                            
                        </div>
                    </div>	
                <div class="clearfix"> </div>
                </div>	
            </div>
        </div>
    </div>
    <!--//content-->