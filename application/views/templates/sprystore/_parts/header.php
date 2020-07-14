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
        <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>" /> 
        <!-- <link rel="stylesheet" href="<?= base_url('templatecss/bootstrap.min.css') ?>" /> -->
        <!-- Template CSS -->
        <link rel="stylesheet" href="<?= base_url('templatecss/style-starter.css') ?>">
        <!-- Template CSS -->
        <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
        <!-- Template CSS -->
        <!-- <link href="<?= base_url('assets/css/bootstrap-datepicker.min.css') ?>" rel="stylesheet" /> -->
        <!-- <link rel="stylesheet" href="<?= base_url('templatecss/custom.css') ?>" /> 
        <link rel="stylesheet" href="<?= base_url('cssloader/theme.css') ?>"  /> -->
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
    <!--w3l-banner-slider-main-->
    <section class="w3l-banner-slider-main">
        <div class="top-header-content">
            <header class="tophny-header">
                <div class="container-fluid">
                    <div class="top-right-strip row">
                        <!--/left-->
                        <div class="top-hny-left-content col-lg-6 pl-lg-0">
                            <h6>Upto 30% off on All styles , <a href="#" target="_blank"> Click here for <span
                                        class="fa fa-hand-o-right hand-icon" aria-hidden="true"></span> <span
                                        class="hignlaite">More details</span></a></h6>
                        </div>
                        <!--//left-->
                        <!--/right-->
                        <ul class="top-hnt-right-content col-lg-6">

                            <li class="button-log usernhy">
                                <a class="btn-open" href="#">
                                    <span class="fa fa-user" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li class="transmitvcart galssescart2 cart cart box_1">
                                <form action="#" method="post" class="last">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="display" value="1">
                                    <button class="top_transmitv_cart" type="submit" name="submit" value="">
                                        My Cart
                                        <span class="fa fa-shopping-cart"></span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                        <!--//right-->
                        <div class="overlay-login text-left">
                            <button type="button" class="overlay-close1">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </button>
                            <div class="wrap">
                                <h5 class="text-center mb-4">Login Now</h5>
                                <div class="login-bghny p-md-5 p-4 mx-auto mw-100">
                                    <!--/login-form-->
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <p class="login-texthny mb-2">Email address</p>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="" required="">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                                with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <p class="login-texthny mb-2">Password</p>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                placeholder="" required="">
                                        </div>
                                        <div class="form-check mb-2">
                                            <div class="userhny-check">
                                                <label class="check-remember container">
                                                    <input type="checkbox" class="form-check"> <span
                                                        class="checkmark"></span>
                                                    <p class="privacy-policy">Remember me</p>
                                                </label>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <button type="submit" class="submit-login btn mb-4">Sign In</button>

                                    </form>
                                    <!--//login-form-->
                                </div>
                                <!---->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/nav-->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid serarc-fluid">
                        <a class="navbar-brand" href="index.html">
                            Spry<span class="lohny">S</span>tore</a>
                        <!-- if logo is image enable this   
                                <a class="navbar-brand" href="#index.html">
                                    <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                                </a> -->
                        <!--/search-right-->
                        <div class="search-right">

                            <a href="#search" title="search"><span class="fa fa-search mr-2" aria-hidden="true"></span>
                                <span class="search-text">Search here</span></a>
                            <!-- search popup -->
                            <div id="search" class="pop-overlay">
                                <div class="popup">

                                    <form action="#" method="post" class="search-box">
                                        <input type="search" placeholder="Keyword" name="search" required="required"
                                            autofocus="">
                                        <button type="submit" class="btn">Search</button>
                                    </form>

                                </div>
                                <a class="close" href="#">×</a>
                            </div>
                            <!-- /search popup -->
                        </div>
                        <!--//search-right-->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon fa fa-bars"> </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">What We Offer</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
                <!--//nav-->
            </header>
            <div class="bannerhny-content">

                <!--/banner-slider-->
                <div class="content-baner-inf">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h3>Women's
                                            Fashion
                                            <br>50% Off</h3>
                                        <a href="#" class="shop-button btn">
                                            Shop Now
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item item2">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h3>Men's
                                            Fashion
                                            <br>60% Off</h3>
                                        <a href="#" class="shop-button btn">
                                            Shop Now
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item item3">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h3>Women's
                                            Fashion
                                            <br>50% Off</h3>
                                        <a href="#" class="shop-button btn">
                                            Shop Now
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item item4">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h3>Men's
                                            Fashion
                                            <br>60% Off</h3>
                                        <a href="#" class="shop-button btn">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!--//banner-slider-->
                <!--//banner-slider-->
                <div class="right-banner">
                    <div class="right-1">
                        <h4>
                            Men's
                            Fashion
                            <br>50% Off</h4>
                    </div>
                </div>

            </div>

    </section>