<footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="<?= base_url('attachments/imgs/footer-logo.png')?>"></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello.colorlib@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                            <img src="<?= base_url('attachments/imgs/payment-method.png')?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php if ($this->session->flashdata('emailAdded')) { ?>
    <script>
        $(document).ready(function () {
            ShowNotificator('alert-info', '<?= lang('email_added') ?>');
        });
    </script>
    <?php
}
echo $addJs;
?>
</div>
</div>
<div id="notificator" class="alert"></div>

<script src="<?= base_url('templatejs/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('templatejs/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('templatejs/jquery-ui.min.js') ?>"></script>
    <script src="<?= base_url('templatejs/jquery.countdown.min.js') ?>"></script>
    <script src="<?= base_url('templatejs/jquery.nice-select.min.js') ?>"></script>
    <script src="<?= base_url('templatejs/jquery.zoom.min.js') ?>"></script>
    <script src="<?= base_url('templatejs/jquery.dd.min.js') ?>"></script>
    <script src="<?= base_url('templatejs/jquery.slicknav.js') ?>"></script>
    <script src="<?= base_url('templatejs/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('templatejs/main.js') ?>"></script>

</body>
</html>
