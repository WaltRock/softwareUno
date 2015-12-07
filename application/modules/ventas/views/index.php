<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="es"><!--<![endif]-->
    <?php echo headerVentas(); ?>
    <body class="common-home">
        <?php echo navVentas(); ?>
        <header>
            <?php echo barraBusqueda() ?>
        </header>
        <div class="container">
            <?php echo menuVentas() ?>
        </div>
        <div class="container">
            <div class="row">                
                <div id="content" class="col-sm-12">
                    <div id="slideshow0" class="owl-carousel" style="opacity: 1;">
                        <!--Banner Slide Banner Slide Banner Slide Banner Slide Banner Slide Banner Slide Banner Slide Banner Slide  -->
                        <div class="item">
                            <img src="<?php echo base_url(); ?>assets/img/banners/rustic.jpg" alt="Mesas" class="img-responsive" />
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url(); ?>assets/img/banners/modern.jpg" alt="Mesas" class="img-responsive" />
                        </div>
                    </div>
                    <script type="text/javascript">
                        $('#slideshow0').owlCarousel({
                            items: 6,
                            autoPlay: 3000,
                            singleItem: true,
                            navigation: true,
                            navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
                            pagination: true
                        });
                    </script>
                    <h3>Destacados</h3>
                    <div class="row">
                        <?php echo $productos ?>
                    </div>

                    <script type="text/javascript"><!--
                        $('#carousel0').owlCarousel({
                            items: 6,
                            autoPlay: 3000,
                            navigation: true,
                            navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
                            pagination: true
                        });
--></script></div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h5>Information</h5>
                        <ul class="list-unstyled">
                            <li><a href="http://localhost/Cedros/upload/index.php?route=information/information&amp;information_id=4">About Us</a></li>
                            <li><a href="http://localhost/Cedros/upload/index.php?route=information/information&amp;information_id=6">Delivery Information</a></li>
                            <li><a href="http://localhost/Cedros/upload/index.php?route=information/information&amp;information_id=3">Privacy Policy</a></li>
                            <li><a href="http://localhost/Cedros/upload/index.php?route=information/information&amp;information_id=5">Terms &amp; Conditions</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h5>Customer Service</h5>
                        <ul class="list-unstyled">
                            <li><a href="http://localhost/Cedros/upload/index.php?route=information/contact">Contact Us</a></li>
                            <li><a href="http://localhost/Cedros/upload/index.php?route=account/return/add">Returns</a></li>
                            <li><a href="http://localhost/Cedros/upload/index.php?route=information/sitemap">Site Map</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h5>Extras</h5>
                        <ul class="list-unstyled">
                            <li><a href="http://localhost/Cedros/upload/index.php?route=product/manufacturer">Brands</a></li>
                            <li><a href="http://localhost/Cedros/upload/index.php?route=account/voucher">Gift Vouchers</a></li>
                            <li><a href="http://localhost/Cedros/upload/index.php?route=affiliate/account">Affiliates</a></li>
                            <li><a href="http://localhost/Cedros/upload/index.php?route=product/special">Specials</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h5>My Account</h5>
                        <ul class="list-unstyled">
                            <li><a href="http://localhost/Cedros/upload/index.php?route=account/account">My Account</a></li>
                            <li><a href="http://localhost/Cedros/upload/index.php?route=account/order">Order History</a></li>
                            <li><a href="http://localhost/Cedros/upload/index.php?route=account/wishlist">Wish List</a></li>
                            <li><a href="http://localhost/Cedros/upload/index.php?route=account/newsletter">Newsletter</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p>Powered By <a href="http://www.uigv.edu.pe/">UIGV</a><br> Facultad de Ingenieria de sistemas</p>
            </div>
        </footer>

        <!--
        OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
        Please donate via PayPal to donate@opencart.com
        //-->

        <!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->

    </body></html>