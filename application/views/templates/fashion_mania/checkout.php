<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyCAVRk5JjTkWtcDDfxbo_gclBKLsqIpg18&language=us"></script>
  <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" 
  data-client-key="SB-Mid-client-LLmQh4mshlBGEP5J>"></script>
<link href="<?= base_url('assets/css/nice-select.css') ?>" rel="stylesheet">
<div class="container" id="checkout-page">
    <div class="body">
        <?php if ($cartItems['array'] != null) { ?>
            <?= purchase_steps(1, 2) ?>
            <div class="row bottom-30">
                <div class="col-sm-9 left-side">
                    <form method="POST" id="goOrder">
                        <div class="title alone cloth-bg-color">
                            <span><?= lang('checkout') ?></span>
                        </div>
                        <?php
                        if ($this->session->flashdata('submit_error')) {
                            ?>
                            <hr>
                            <div class="alert alert-danger"><h4><span class="glyphicon glyphicon-alert"></span> <?= lang('finded_errors') ?></h4><?php
                                foreach ($this->session->flashdata('submit_error') as $error)
                                    echo $error . '<br>';
                                ?>
                            </div>
                            <hr>
                            <?php
                        }
                        ?>
                        <div class="row payment-type-box">
                            <div class="col-xs-12">
                                <span class="top-header"><?= lang('choose_payment') ?>:</span>
                                <select class="payment-type" data-style="btn-blue" name="payment_type" id="payment_type">

                                    <?php if ($cashondelivery_visibility == 1) { ?>
                                        <option value="cashOnDelivery"><?= lang('cash_on_delivery') ?> </option>
                                    <?php } if (filter_var($paypal_email, FILTER_VALIDATE_EMAIL)) { ?>
                                        <option value="PayPal"><?= lang('paypal') ?> </option>
                                    <?php } if ($bank_account['iban'] != null) { ?>
                                        <option value="Bank"><?= lang('bank_payment') ?> </option>
                                    <?php } if($payment_gateway == 1){ ?>
                                          <option value="midtrans">Midtrans</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="firstNameInput"><?= lang('first_name') ?> (<sup><?= lang('requires') ?></sup>)</label>
                                <input id="firstNameInput" class="form-control" name="first_name" value="<?= @$_SESSION['logged_user']['name'] ?>" type="text" placeholder="<?= lang('first_name') ?>">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="lastNameInput"><?= lang('last_name') ?> (<sup><?= lang('requires') ?></sup>)</label>
                                <input id="lastNameInput" class="form-control" name="last_name" value="<?= @$_POST['last_name'] ?>" type="text" placeholder="<?= lang('last_name') ?>">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="emailAddressInput"><?= lang('email_address') ?> (<sup><?= lang('requires') ?></sup>)</label>
                                <input id="emailAddressInput" class="form-control" name="email"  value="<?= @$_SESSION['logged_user']['email'] ?>" type="text" placeholder="<?= lang('email_address') ?>">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="phoneInput"><?= lang('phone') ?> (<sup><?= lang('requires') ?></sup>)</label>
                                <input id="phoneInput" class="form-control" name="phone"  value="<?= @$_SESSION['logged_user']['phone'] ?>" type="text" placeholder="<?= lang('phone') ?>">
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="addressInput"><?= lang('address') ?> (<sup><?= lang('requires') ?></sup>)</label>
                                <textarea id="addressInput" name="address"  class="form-control" rows="3"><?= @$_POST['address'] ?></textarea>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="LongLat">Lokasi (<sup><?= lang('requires') ?></sup>)</label>
                                <body onload="peta_awal()">
                                <div id="map_canvas" style="height:300px"></div>
                            </body>
                            </div>
                             
                            <div class="form-group col-sm-6">
                                <label for="cityInput"><?= lang('city') ?> (<sup><?= lang('requires') ?></sup>)</label>
                                <input id="cityInput" class="form-control" name="city" value="<?= @$_POST['city'] ?>" type="text" placeholder="<?= lang('city') ?>">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="postInput"><?= lang('post_code') ?></label>
                                <input id="postInput" class="form-control" name="post_code"  value="<?= @$_POST['post_code'] ?>" type="text" placeholder="<?= lang('post_code') ?>">
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="notesInput"><?= lang('notes') ?></label>
                                <textarea id="notesInput" class="form-control" name="notes"  rows="3"><?= @$_POST['notes'] ?></textarea>
                            </div>
                        </div>
                        <?php if ($codeDiscounts == 1) { ?>
                            <div class="discount">
                                <label><?= lang('discount_code') ?></label>
                                <input class="form-control" name="discountCode" id="discountCode" value="<?= @$_POST['discountCode'] ?>" placeholder="<?= lang('enter_discount_code') ?>" type="text">
                                <a href="javascript:void(0);" class="btn btn-default" onclick="checkDiscountCode()"><?= lang('check_code') ?></a>
                            </div>
                        <?php } ?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-products">
                                <thead>
                                    <tr>
                                        <th><?= lang('product') ?></th>
                                        <th><?= lang('title') ?></th>
                                        <th><?= lang('quantity') ?></th>
                                        <th><?= lang('price') ?></th>
                                        <th><?= lang('total') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    // var_dump($cartItems['array']);
                                    // die();
                                         foreach ($cartItems['array'] as $item) { ?>
                                        <tr>
                                            <td class="relative">
                                                <input type="hidden" name="id[]" id="id" value="<?= $item['id'] ?>">
                                                <input type="hidden" name="quantity[]" id="quantity" value="<?= $item['num_added'] ?>">
                                                <img class="product-image" src="<?= base_url('/attachments/shop_images/' . $item['image']) ?>" alt="">
                                                <a href="<?= base_url('home/removeFromCart?delete-product=' . $item['id'] . '&back-to=checkout') ?>" class="btn btn-xs btn-danger remove-product">
                                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                            <td><a href="<?= LANG_URL . '/' . $item['url'] ?>"><?= $item['title'] ?></a></td>
                                            <td>
                                                <a class="btn btn-xs btn-primary refresh-me add-to-cart <?= $item['quantity'] <= $item['num_added'] ? 'disabled' : '' ?>" data-id="<?= $item['id'] ?>" href="javascript:void(0);">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </a>
                                                <span class="quantity-num">
                                                    <?= $item['num_added'] ?>
                                                </span>
                                                <a class="btn  btn-xs btn-danger" onclick="removeProduct(<?= $item['id'] ?>, true)" href="javascript:void(0);">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                </a>
                                            </td>
                                            <td><?= CURRENCY ?> <?= $item['price']?></td>
                                            <td><?= CURRENCY ?> <?= $item['sum_price']?></td>
                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="4" class="text-right"><?= lang('total') ?></td>
                                        <td>
                                            <?= CURRENCY ?> <span class="final-amount"><?= $cartItems['finalSum'] ?></span>
                                            <input type="hidden" class="final-amount" name="final_amount" value="<?= $cartItems['finalSum'] ?>">
                                            <input type="hidden" name="amount_currency" value="<?= CURRENCY ?>">
                                            <input type="hidden" name="discountAmount" value="">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                    <div>
                        <a href="<?= LANG_URL ?>" class="btn cloth-bg-color go-shop">
                            <i class="fa fa-angle-left" aria-hidden="true"></i> 
                            <?= lang('back_to_shop') ?>
                        </a>
                        <a href="javascript:void(0);" class="btn cloth-bg-color go-order" id="Btnproses" onclick="SaveOrder();">
                            <?= lang('custom_order') ?> 
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            
                        </a>
                        <div class="visible-xs bottom-30"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-sm-3"> 
                    <div class="filter-sidebar">
                        <div class="title cloth-bg-color">
                            <span><?= lang('best_sellers') ?></span>
                        </div>
                        <?= $load::getProducts($bestSellers, '', true) ?>
                    </div>
                </div>
            </div>
            <?php
            include 'bodyFooter.php';
        } else {
            ?>
            <div class="alert alert-info"><?= lang('no_products_in_cart') ?></div>
            <?php
        }
        ?>
    </div>
</div>
<?php
if ($this->session->flashdata('deleted')) {
    ?>
<script>
$(document).ready(function () {
    ShowNotificator('alert-info', '<?= $this->session->flashdata('deleted') ?>');
});
</script>
<?php } if ($codeDiscounts == 1 && isset($_POST['discountCode'])) {
    ?>
<script>
$(document).ready(function () {
    checkDiscountCode();
});
</script>
<?php } ?>
<script src="<?= base_url('assets/js/jquery.nice-select.min.js') ?>"></script>
<script>
$(document).ready(function () {
    $('select').niceSelect();
});
</script>


<script type="text/javascript">
    function SaveOrder(){
        var url="<?php echo site_url('checkout')?>";
        $.ajax({ 
            url : url,
            data: getParamsOrder(),
            type: 'post',
            success: function(result){
                ImportMidtrans();          
            }
        });
    };
    function ImportMidtrans(){
           $.ajax({
              url: '<?=site_url()?>/snap/token',
              cache: false,
              success: function(data) {
                console.log('token = '+data);
                
                var resultType = document.getElementById('result-type');
                var resultData = document.getElementById('result-data');

                function changeResult(type,data){
                  $("#result-type").val(type);
                  $("#result-data").val(JSON.stringify(data));

                }

                snap.pay(data, {
                  
                  onSuccess: function(result){
                    changeResult('success', result);
                    console.log(result.status_message);
                    console.log(result);
                    $("#payment-form").submit();
                  },
                  onPending: function(result){
                    changeResult('pending', result);
                    console.log(result.status_message);
                    $("#payment-form").submit();
                  },
                  onError: function(result){
                    changeResult('error', result);
                    console.log(result.status_message);
                    $("#payment-form").submit();
                  }
                });
              }
            }); 
    };

    function getParamsOrder(){
        var obj = <?php echo json_encode(array('order'=>$cartItems['array'])); ?>;
        //console.log(obj.order)
        var params ={"payment_type":$('#payment_type').val(),
                     "first_name":$('#firstNameInput').val(),
                     "last_name" :$('#lastNameInput').val(),
                     "email":$('#emailAddressInput').val(),
                     "phone":$('#phoneInput').val(),
                     "address":$('#addressInput').val(),
                     "city":$('#cityInput').val(),
                     "post_code":$('#postInput').val(),
                     "notes":$('#notesInput').val(),
                     "discountCode":$('#discountCode').val()
                    }
        console.log(params);         
        var obj_array=JSON.parse(JSON.stringify(obj.order));
        params['total_record']=obj_array.length;    
        //console.log(obj_array[0].quantity);         
        for(var i = 0 ; i < obj_array.length; i++){
            console.log(obj_array[i].quantity);
            params['id'+i]=obj_array[i].id;
            params['quantity'+i]=obj_array[i].num_added;
        }
        return params;            
    };
</script>

 <!-- MAPS -->

 <script type="text/javascript">
     function peta_awal(){
        var lokasibaru = new google.maps.LatLng(-6.90389, 107.61861);
        console.log(lokasibaru);
        var petaoption = {
            zoom: 9,
            center: lokasibaru,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        peta = new google.maps.Map(document.getElementById("map_canvas"),petaoption);
        var legend = /** @type {HTMLInputElement} */ (
        document.getElementById('legenda'));
        //getPuskesmas();
}
 </script>