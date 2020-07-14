<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="tbd Template">
    <meta name="keywords" content="tbd, tbd, tbd, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NiMiCi</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->

    <link rel="stylesheet" href="<?= base_url('templatecss/bootstrap.min.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/themify-icons.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/elegant-icons.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('templatecss/owl.carousel.min.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('templatecss/nice-select.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('templatecss/jquery-ui.min.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('templatecss/slicknav.min.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('templatecss/style.css') ?>"/>
    
    
    <script>
var base_url = "<?php echo base_url();?>";
</script>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        hello.NiMiCI@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +65 11.188.888
                    </div>
                </div>
                 
                <div class="ht-right">
                 <?php 
                            if(isset( $_SESSION['logged_user'])){ 
				   ?>
							
					<a href="<?php echo  base_url() . "logout" ?>" class="login-panel"><i class="fa fa-user"></i>Logout </a>
                    <?php }else{ ?>
						
					<a href="#" class="login-panel" data-toggle="modal" data-target="#myModal2"><i class="fa fa-user"></i>Register</a>
                    <a href="#" class="login-panel" data-toggle="modal" data-target="#myModalLogin"><i class="fa fa-user"></i>Login &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <?php 
                            }
                        ?> 
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="<?= base_url('attachments/imgs/flag-1.jpg')?>" data-imagecss="flag yt"
                                data-title="English">English</option>
                            <option value='yu' data-image="<?= base_url('attachments/imgs/flag-2.jpg')?>" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All departments</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Underwear</a></li>
                            <li><a href="#">Kid's Clothing</a></li>
                            <li><a href="#">Brand Fashion</a></li>
                            <li><a href="#">Accessories/Shoes</a></li>
                            <li><a href="#">Luxury Brands</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="./front">Home</a></li>
                        
                        <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>
                        </li>
                        <!-- <li><a href="./blog.html">Blog</a></li> -->
                        <li<?= uri_string() == 'contacts' || uri_string() == MY_LANGUAGE_ABBR . '/contacts' ? ' class="active"' : '' ?>><a href="<?= LANG_URL . '/contacts' ?>"><?= lang('contacts') ?></a></li>
                        <li<?= uri_string() == 'contacts' || uri_string() == MY_LANGUAGE_ABBR . '/contacts' ? ' class="active"' : '' ?>><a href="<?= LANG_URL . '/shop' ?>"><?= lang('shop') ?></a></li>
						 <li<?= uri_string() == 'shopping-cart' || uri_string() == MY_LANGUAGE_ABBR . '/shopping-cart' ? ' class="active"' : '' ?>><a href="<?= LANG_URL . '/shopping-cart' ?>"><?= lang('shopping_cart') ?></a></li>
                        <li<?= uri_string() == 'checkout' || uri_string() == MY_LANGUAGE_ABBR . '/checkout' ? ' class=""' : '' ?>><a href="<?= LANG_URL . '/checkout' ?>"><?= lang('checkout') ?></a></li>
                      
                        </div>
                    </div>

   </nav>
           <!--      <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header> -->
    <!-- Header End -->
              <div class="container pb-modalreglog-container">
    <div class="row">
        <div class="col-xs-12 col-md-4 offset-md-4">
          
            <div class="input-group pb-modalreglog-input-group">
               <!--  <button class="btn btn-primary pb-modalreglog-submit" data-toggle="modal" data-target="#myModal">Login</button>
                <button class="btn btn-primary pb-modalreglog-submit" data-toggle="modal" data-target="#myModal2">Register</button> -->
                <div class="auth-page">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4"> 
            </div>
                

<div class="modal fade" id="myModalLogin" role="dialog">
     <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Login</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <div class="form-group row" id="div-cek-error" style="display: none;">
                     <div class="col-md-12">
                         <div class="alert alert-danger" role="alert" >
                            <span class="message"></span>
                         </div>
                     </div>
                    </div>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Email</label>
                            <div class="col-md-9">
                             <input type="text" name="email_login" class="form-control" id="email_login" placeholder="Email">
                             
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input name="password_login" id="password_login" placeholder="Password" class="form-control" type="password">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="Login()" class="btn btn-primary">Login</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
            </div>
                    </div>
                </div>
            </div>
          <div class="modal fade" id="myModal2" role="dialog">
     <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Register</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <div class="form-group row" id="div-cek-error" style="display: none;">
                     <div class="col-md-12">
                         <div class="alert alert-danger" role="alert" >
                            <span class="message"></span>
                         </div>
                     </div>
                    </div>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Email</label>
                            <div class="col-md-9">
                             <input type="text" name="email_register" class="form-control" id="email_register" placeholder="Email">
                             
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input name="password_register" id="password_register" placeholder="Password" class="form-control" type="password">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Ulangi Password</label>
                            <div class="col-md-9">
                                <input name="password_register2" id="password_register2" placeholder="Password" class="form-control" type="password">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                     <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama</label>
                            <div class="col-md-9">
                             <input type="text" name="nama_register" class="form-control" id="nama_register" placeholder="Email">
                             
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">No Telpon</label>
                            <div class="col-md-9">
                                <input name="notelpon" id="notelpon" placeholder="No Telpon
                                " class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="register()" class="btn btn-primary">Regster</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
        </div>
    </div>
    <!-- Js Plugins -->
  <script type="text/javascript">
   function Login(){
   var url="<?php echo site_url('Users/login')?>";
   $.ajax
    ({ 
        url : url,
        data: {"email":$('#email_login').val(),
              "password":$('#password_login').val(),
              "login" :true},
        type: 'post',
        success: function(result){
            // console.log(result);
            if(result === 'false' || result === false){
                $('#div-cek-error').show();
                $('#div-cek-error .message').html('Username atau password salah!');
            }else{
                // var data =JSON.parse(result.name);
                // var pesan='Selemat datang '+data;
                $('#myModalLogin').modal('hide');
                location.reload(); //refresh page, untuk session
                // $('#div-cek-success').show();
                // $('#div-cek-success .message').html(pesan);
            }

           
        }
    });
   }          
function register(){
   var url="<?php echo site_url('Users/register')?>";
   $.ajax
    ({ 
        url : url,
        data: {"email":$('#email_register').val(),
              "password_register":$('#password_register').val(),
              "password_ulang":$('#password_register2').val(),
              "nama":$('#nama_register').val(),
              "notelpon":$('#notelpon').val(),
              "register" :true},
        type: 'post',
        success: function(result){
            console.log(result);
            if(result === 'false' || result === false){
                $('#div-cek-error').show();
                $('#div-cek-error .message').html('Username atau password salah!');
            }else{
                // var data =JSON.parse(result.name);
                // var pesan='Selemat datang '+data;
                $('#myModalLogin').modal('hide');
                location.reload(); //refresh page, untuk session
                // $('#div-cek-success').show();
                // $('#div-cek-success .message').html(pesan);
            }

           
        }
    });
   }
    
</script>

   
<style>
    .pb-modalreglog-container
    {
        margin-top: 100px;
    }

    .pb-modalreglog-legend
    {
        text-align: center;
    }

    .pb-modalreglog-input-group
    {
        margin: auto;
    }

    .pb-modalreglog-submit
    {
        margin-left: 5px;
    }

    .pb-modalreglog-form-reg
    {
        text-align: center;
    }

    .pb-modalreglog-footer p
    {
        text-align: center;
        margin-top: 20px;
    }

    #pb-modalreglog-progressbar
    {
        border-radius: 2px;
    }
</style>

</body>

</html>
