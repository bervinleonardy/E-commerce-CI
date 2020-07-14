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
        <link href="<?= base_url('templatecss/bootstrap.min.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/css/bootstrap-datepicker.min.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('templatecss/custom.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('templatecss/style.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('cssloader/theme.css') ?>" rel="stylesheet" />
        <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
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
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'/>
    <!--//fonts-->       
    </head>
    <body>
 	  <!--header-->
       <div class="header">
		<div class="header-top">
			<div class="container">
				<div class="header-grid">
					<ul>
						<li  ><a href="articles.html" class="scroll">Articles</a></li>
						<li><a href="contact.html" class="scroll">Contact  </a></li>
						<li><a href="privacy.html" class="scroll">Privacy</a></li>
						<li><a href="#" class="scroll">Terms</a></li>						
					</ul>
                </div>
				<div class="header-grid-right">
                <?php if ($multiVendor == 1) { ?>
					<!-- <a href="#" class="sign-in">Sign In</a> -->
					<form method="POST" action="<?= LANG_URL . '/vendor/login' ?>">
						<input type="email" name="u_email" placeholder="<?= lang('email') ?>">
                        <input type="password" name="u_password" placeholder="<?= lang('password') ?>">
                        <!-- <div class="checkbox">
                            <label><input type="checkbox" name="remember_me"><?= lang('remember_me') ?></label>
                        </div>                         -->
						<input type="submit" name="login" value="<?= lang('u_login') ?>">
					</form>
					<label>|</label>
                    <a href="<?= LANG_URL . '/vendor/register' ?>" class="sign-up"><?= lang('register_me') ?></a>
                <?php } ?>
                </div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="container">
		<div class="header-bottom">			
				<div class="logo">
					<a href="index.html"><img src="<?= base_url ('template/imgs/logo-nimici.png')?>" alt=" " ></a>
				</div>
					<div class="ad-right">
					<img class="img-responsive" src="<?= base_url ('template/imgs/ad.png')?>" alt=" " >
				</div>
				<div class="clearfix"> </div>
			</div>	
			<div class="header-bottom-bottom">
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>
						<li class="active"><a href="index.html">HOME </a></li>
						<li><a href="men.html" >MEN</a></li>
						<li><a href="women.html" >WOMEN</a></li>
						<li><a href="collection.html" >COLLECTION</a></li>
						<li><a href="collection.html" >STORE PRODUCTS</a></li>
						<li><a href="collection.html" >LATEST  PRODUCT</a></li>
					</ul>	
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
				</script>
					
					<div class="clearfix"> </div>					
				</div>
				<div class="search">
					<form>
						<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
						<input type="submit"  value="">
					</form>
				</div>
				<div class="clearfix"> </div>
				</div>
		</div>
	</div>
	<!--content-->
	<div class="content">
		<div class="container">
		<div class="women-in">
			<div class="col-md-9 col-d">
				<div class="banner">
					<div class="banner-matter">
						<label>Collection</label>
						<h2>Summmer</h2>
						<p>Helping you look cool</p>
						
						</div>
						<div class="you">
							<span>40<label>%</label></span>
							<small>off</small>
						</div>			
						<p  class="para-in">Some text regarding the featured product.</p>
				</div>
				<!---->
				<div class="in-line">
					<div class="para-an">
						<h3>LATEST  ARRIVALS</h3>
						<p>Check our all latest products in this section.</p>
					</div>
					<div class="lady-in">
						<div class="col-md-4 you-para">
							<a href="single.html"><img class="img-responsive pic-in" src="<?= base_url ('template/imgs/pi.jpg')?>" alt=" " ></a>
							<div class="you-in">
								<span>15<label>%</label></span>
							<small>off</small>
							</div>
							<p>Premium Denim Women's Hidden</p>
							<span>$179.00  | <label class="cat-in"> </label> <a href="#">Add to Cart </a></span>
						</div>
						<div class="col-md-4 you-para">
							<a href="single.html"><img class="img-responsive pic-in" src="<?= base_url ('template/imgs/pi4.jpg')?>" alt=" " ></a>
							<div class="you-in">
								<span>15<label>%</label></span>
							<small>off</small>
							</div>
							<p>Premium Denim Women's Hidden</p>
							<span>$179.00  | <label class="cat-in"> </label> <a href="#">Add to Cart </a></span>
						</div>
						<div class="col-md-4 you-para para-grid">
							<a href="single.html"><img class="img-responsive pic-in" src="<?= base_url ('template/imgs/pi5.jpg')?>" alt=" " ></a>
							<div class="you-in">
								<span>15<label>%</label></span>
							<small>off</small>
							</div>
							<p>Premium Denim Women's Hidden</p>
							<span>$179.00  | <label class="cat-in"> </label> <a href="#">Add to Cart </a></span>
						</div>
						
						<div class="col-md-4 you-para">
							<a href="single.html"><img class="img-responsive pic-in" src="<?= base_url ('template/imgs/pi6.jpg')?>" alt=" " ></a>
							<div class="you-in">
								<span>15<label>%</label></span>
							<small>off</small>
							</div>
							<p>Premium Denim Women's Hidden</p>
							<span>$179.00  | <label class="cat-in"> </label> <a href="#">Add to Cart </a></span>
						</div>
						<div class="col-md-4 you-para">
							<a href="single.html"><img class="img-responsive pic-in" src="<?= base_url ('template/imgs/pi5.jpg')?>" alt=" " ></a>
							<div class="you-in">
								<span>15<label>%</label></span>
							<small>off</small>
							</div>
							<p>Premium Denim Women's Hidden</p>
							<span>$179.00  | <label class="cat-in"> </label> <a href="#">Add to Cart </a></span>
						</div>
						<div class="col-md-4 you-para para-grid">
							<a href="single.html"><img class="img-responsive pic-in" src="<?= base_url ('template/imgs/pi4.jpg')?>" alt=" " ></a>
							<div class="you-in">
								<span>15<label>%</label></span>
							<small>off</small>
							</div>
							<p>Premium Denim Women's Hidden</p>
							<span>$179.00  | <label class="cat-in"> </label> <a href="#">Add to Cart </a></span>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-m-left">
				<div class="in-left">				
					<p class="code">Cool COLLECTIONS</p>		
					<div class="cool">		
					</div>		
				</div>
				<div class="discount">
					<a href="single.html"><img class="img-responsive pic-in" src="<?= base_url ('template/imgs/p2.jpg')?>" alt=" " >	</a>		
						<p class="no-more">Exclusive <b>discount</b> <span>Womens wear</span></p>					
					<a href="#" class="know-more">know more</a>
				</div>
				<div class="discount">
					<a href="single.html"><img class="img-responsive pic-in" src="<?= base_url ('template/imgs/p3.jpg')?>" alt=" " ></a>			
						<p class="no-more no-get">Get Exclusive <b>discount on</b> <span>Ladies wear</span></p>					
					<a href="#" class="know-more">know more</a>
				</div>
				<div class="twitter-in">
					<h5>TWITTER  UPDATES</h5>
					<span class="twitter-ic">	</span>
					<div class="up-date">
						<p>@suniljoshi Looks like nice and dicent design</p>
						<a href="#">http://bit.ly/sun</a>
						<p class="ago">About 1 hour ago via twitterfeed</p>
					</div>
					<div class="up-date">
						<p>@suniljoshi Looks like nice and dicent design</p>
						<a href="#">http://bit.ly/sun</a>
						<p class="ago">About 1 hour ago via twitterfeed</p>
					</div>
					<a href="#" class="tweets">More Tweets</a>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
			</div>
			<!---->
			<div class="lady-in-on">
			<div class="buy-an">
						<h3>OTHER PRODUCTS</h3>
						<p>Check our all latest products in this section.</p>
					</div>
					<ul id="flexiselDemo1">			
				<li><a href="#"><img class="img-responsive women" src="<?= base_url ('template/imgs/pic.jpg')?>" alt=""></a>
				<div class="hide-in">
				<p>Premium Denim Women's Hidden</p>
				<span>$179.00  |  <a href="#">Buy Now </a></span>
				</div></li>
				<li><a href="#"><img class="img-responsive women" src="<?= base_url ('template/imgs/pic1.jpg')?>" alt=""></a>
				<div class="hide-in">
				<p>Premium Denim Women's Hidden</p>
				<span>$179.00  |  <a href="#">Buy Now </a></span>
				</div></li>
				<li><a href="#"><img class="img-responsive women" src="<?= base_url ('template/imgs/pic.jpg')?>" alt=""></a>
				<div class="hide-in">
				<p>Premium Denim Women's Hidden</p>
				<span>$179.00  |  <a href="#">Buy Now </a></span>
				</div></li>
				<li><a href="#"><img class="img-responsive women" src="<?= base_url ('template/imgs/pic2.jpg')?>" alt=""></a>
				<div class="hide-in">
				<p>Premium Denim Women's Hidden</p>
				<span>$179.00  |  <a href="#">Buy Now </a></span>
				</div></a></li>
            </ul>
        <script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="<?= base_url ('templatejs/jquery.flexisel.js')?>"></script>
		</div>
	</div>
	</div>
	<!---->