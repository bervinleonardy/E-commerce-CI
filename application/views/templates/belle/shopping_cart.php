<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-content">
    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper"><h1 class="page-width"><?= lang('shopping_cart') ?></h1></div>
        </div>
    </div>
    <!--End Page Title-->    
    <div class="container">
      <div class="row">
       <div class="col-12 col-sm-12 col-md-8 col-lg-8 main-col">    
        <?php
        if ($cartItems['array'] == null) {
            ?>
            <div class="alert alert-info"><?= lang('no_products_in_cart') ?></div>
            <?php
        } else {
            echo purchase_steps(1);
            ?>
            <div class="table-responsive">
            <form action="#" method="post" class="cart style2">
                <table class="table table-bordered table-products">
                    <thead class="cart__row cart__header">
                        <tr>
                            <th colspan="2" class="text-center"><?= lang('product') ?></th>
                            <!-- <th class="text-center">?= lang('title') ?></th> -->
                            <th class="text-center"><?= lang('price') ?></th>
                            <th class="text-center"><?= lang('quantity') ?></th>
                            <th class="text-right"><?= lang('total') ?></th>
                            <th class="action">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cartItems['array'] as $item) { ?>
                            <tr class="cart__row border-bottom line1 cart-flex border-top">
                                <td class="cart__image-wrapper cart-flex-item">
                                    <input type="hidden" name="id[]" value="<?= $item['id'] ?>">
                                    <input type="hidden" name="quantity[]" value="<?= $item['num_added'] ?>">
                                    <img class="cart__image" src="<?= base_url('/attachments/shop_images/' . $item['image']) ?>" alt="">
                                </td>
                                <!-- <td><a href="?= LANG_URL . '/' . $item['url'] ?>">?= $item['title'] ?></a></td> -->
                                <td class="cart__meta small--text-left cart-flex-item">
                                        <div class="list-view-item__title">
                                            <a href="<?= LANG_URL . '/' . $item['url'] ?>"><?= $item['title'] ?></a>
                                        </div>
                                        
                                        <div class="cart__meta-text">
                                            Color: Navy<br>Size: Small<br>
                                        </div>
                                    </td>                                
                                <td class="cart__price-wrapper cart-flex-item">
                                    <span class="money"><?= CURRENCY .' ' . $item['price']?></span>
                                </td>                           
                                <td class="cart__update-wrapper cart-flex-item text-right">
                                        <div class="cart__qty text-center">
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" onclick="removeProduct(<?= $item['id'] ?>, true)" href="javascript:void(0);"><i class="fa fa-minus"></i></a>
                                                <input class="cart__qty-input qty" type="text" name="updates[]" id="qty" value="<?= $item['num_added'] ?>" pattern="[0-9]*">
                                                <a class="qtyBtn plus add-to-cart <?= $item['quantity'] <= $item['num_added'] ? 'disabled' : '' ?>" data-id="<?= $item['id'] ?>" href="javascript:void(0);"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </td>                                
                                <td class="text-right small--hide cart-price">
                                        <div><span class="money"><?= CURRENCY .' ' . $item['sum_price']?></span></div>
                                </td>                     
                                <td class="text-center small--hide"><a href="<?= base_url('home/removeFromCart?delete-product=' . $item['id'] . '&back-to=shopping-cart') ?>" class="btn btn--secondary cart__remove" title="Hapus Item"><i class="fa fa-times"></i></a></td>
                            </tr>
                        <?php } ?>
                        <!-- <tr>
                            <td colspan="4" class="text-right"><= lang('total') ?></td>
                            <td>?= CURRENCY ?> ?= $cartItems['finalSum']?></td>
                        </tr> -->
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="text-left"><a href="<?= LANG_URL ?>" class="btn--link cart-continue"><i class="fa fa-arrow-circle-left"></i> <?= lang('back_to_shop') ?></a></td>
                            <td colspan="3" class="text-right"><button type="submit" name="update" class="btn--link cart-update"><i class="fa fa-refresh"></i> Update</button></td>
                        </tr>
                    </tfoot>                    
                </table>
              <div class="currencymsg">We processes all orders in USD. While the content of your cart is currently displayed in USD, the checkout will use USD at the most current exchange rate.</div>
					<div id="shipping-calculator" class="mb-4">
                    </div> 
                </form>              
            </div>
            <!-- <a href="?= LANG_URL ?>" class="btn cloth-bg-color go-shop">
                <i class="fa fa-angle-left" aria-hidden="true"></i> 
                ?= lang('back_to_shop') ?>
            </a> -->
            <!-- <a class="btn cloth-bg-color go-checkout" href="?= LANG_URL . '/checkout' ?>">
                ?= lang('checkout') ?> 
                <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
            </a> -->
        <?php } ?>
        <!-- <div class="bottom-30"></div> -->
        <!-- ?php include 'bodyFooter.php' ?> -->
      </div>
   </div>
    <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
        <div class="cart-note">
            <div class="solid-border">
                <h5><label for="CartSpecialInstructions" class="cart-note__label small--text-center">Add a note to your order</label></h5>
                <textarea name="note" id="CartSpecialInstructions" class="cart-note__input"></textarea>
            </div>
        </div>
        <div class="solid-border">
            <div class="row">
            <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Subtotal</strong></span>
            <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money"><?= CURRENCY ?> <?= $cartItems['finalSum']?></span></span>
            </div>
            <div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
            <p class="cart_tearm">
            <label>
                <input type="checkbox" name="tearm" id="cartTearm" class="checkbox" value="tearm" required="">
                I agree with the terms and conditions</label>
            </p>
            <input type="submit" name="checkout" id="cartCheckout" class="btn btn--small-wide checkout" value="Checkout" disabled="disabled">
            <div class="paymnet-img"><img src="<?= base_url ('template/imgs/payment-img.jpg')?>" alt="Payment"></div>
        </div>
    </div>    
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
<?php } ?>