<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en"><!--<![endif]-->
    <?php echo headerVentas() ?>
    <body class="product-search">
        <?php echo navVentas() ?>
        <header>
            <?php echo barraBusqueda() ?>
        </header>
        <div class="container">
            <?php echo menuVentas() ?>
        </div>
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="http://localhost/Cedros/upload/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
                <li><a href="http://localhost/Cedros/upload/index.php?route=product/search&amp;search=g">Search</a></li>
            </ul>
            <div class="row">                <div id="content" class="col-sm-12">      <h1>Search - g</h1>
                    <label class="control-label" for="input-search">Search Criteria</label>
                    <div class="row">
                        <div class="col-sm-4">
                            <input name="search" value="g" placeholder="Keywords" id="input-search" class="form-control" type="text">
                        </div>
                        <div class="col-sm-3">
                            <select name="category_id" class="form-control">
                                <option selected="selected" value="0">All Categories</option>
                                <option value="20">Desktops</option>
                                <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PC</option>
                                <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mac</option>
                                <option value="18">Laptops &amp; Notebooks</option>
                                <option value="46">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Macs</option>
                                <option value="45">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Windows</option>
                                <option value="25">Components</option>
                                <option value="29">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mice and Trackballs</option>
                                <option value="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Monitors</option>
                                <option value="35">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 1</option>
                                <option value="36">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 2</option>
                                <option value="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Printers</option>
                                <option value="31">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scanners</option>
                                <option value="32">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web Cameras</option>
                                <option value="57">Tablets</option>
                                <option value="17">Software</option>
                                <option value="24">Phones &amp; PDAs</option>
                                <option value="33">Cameras</option>
                                <option value="34">MP3 Players</option>
                                <option value="43">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 11</option>
                                <option value="44">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 12</option>
                                <option value="47">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 15</option>
                                <option value="48">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 16</option>
                                <option value="49">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 17</option>
                                <option value="50">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 18</option>
                                <option value="51">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 19</option>
                                <option value="52">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 20</option>
                                <option value="58">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 25</option>
                                <option value="53">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 21</option>
                                <option value="54">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 22</option>
                                <option value="55">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 23</option>
                                <option value="56">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 24</option>
                                <option value="38">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 4</option>
                                <option value="37">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 5</option>
                                <option value="39">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 6</option>
                                <option value="40">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 7</option>
                                <option value="41">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 8</option>
                                <option value="42">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test 9</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label class="checkbox-inline">
                                <input disabled="disabled" name="sub_category" value="1" type="checkbox">
                                Search in subcategories</label>
                        </div>
                    </div>
                    <p>
                        <label class="checkbox-inline">
                            <input name="description" value="1" id="description" type="checkbox">
                            Search in product descriptions</label>
                    </p>
                    <input value="Search" id="button-search" class="btn btn-primary" type="button">
                    <h2>Products meeting the search criteria</h2>
                    <p><a href="http://localhost/Cedros/upload/index.php?route=product/compare" id="compare-total">Product Compare (0)</a></p>
                    <div class="row">
                        <div class="col-sm-3 hidden-xs">
                            <div class="btn-group">
                                <button data-original-title="List" type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title=""><i class="fa fa-th-list"></i></button>
                                <button data-original-title="Grid" type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title=""><i class="fa fa-th"></i></button>
                            </div>
                        </div>
                        <div class="col-sm-1 col-sm-offset-2 text-right">
                            <label class="control-label" for="input-sort">Sort By:</label>
                        </div>
                        <div class="col-sm-3 text-right">
                            <select id="input-sort" class="form-control col-sm-3" onchange="location = this.value;">
                                <option value="http://localhost/Cedros/upload/index.php?route=product/search&amp;sort=p.sort_order&amp;order=ASC&amp;search=g" selected="selected">Default</option>
                                <option value="http://localhost/Cedros/upload/index.php?route=product/search&amp;sort=pd.name&amp;order=ASC&amp;search=g">Name (A - Z)</option>
                                <option value="http://localhost/Cedros/upload/index.php?route=product/search&amp;sort=pd.name&amp;order=DESC&amp;search=g">Name (Z - A)</option>
                                <option value="http://localhost/Cedros/upload/index.php?route=product/search&amp;sort=p.price&amp;order=ASC&amp;search=g">Price (Low &gt; High)</option>
                                <option value="http://localhost/Cedros/upload/index.php?route=product/search&amp;sort=p.price&amp;order=DESC&amp;search=g">Price (High &gt; Low)</option>
                                <option value="http://localhost/Cedros/upload/index.php?route=product/search&amp;sort=rating&amp;order=DESC&amp;search=g">Rating (Highest)</option>
                                <option value="http://localhost/Cedros/upload/index.php?route=product/search&amp;sort=rating&amp;order=ASC&amp;search=g">Rating (Lowest)</option>
                                <option value="http://localhost/Cedros/upload/index.php?route=product/search&amp;sort=p.model&amp;order=ASC&amp;search=g">Model (A - Z)</option>
                                <option value="http://localhost/Cedros/upload/index.php?route=product/search&amp;sort=p.model&amp;order=DESC&amp;search=g">Model (Z - A)</option>
                            </select>
                        </div>
                        <div class="col-sm-1 text-right">
                            <label class="control-label" for="input-limit">Show:</label>
                        </div>
                        <div class="col-sm-2 text-right">
                            <select id="input-limit" class="form-control" onchange="location = this.value;">
                                <option value="http://localhost/Cedros/upload/index.php?route=product/search&amp;search=g&amp;limit=15" selected="selected">15</option>
                                <option value="http://localhost/Cedros/upload/index.php?route=product/search&amp;search=g&amp;limit=25">25</option>
                                <option value="http://localhost/Cedros/upload/index.php?route=product/search&amp;search=g&amp;limit=50">50</option>
                                <option value="http://localhost/Cedros/upload/index.php?route=product/search&amp;search=g&amp;limit=75">75</option>
                                <option value="http://localhost/Cedros/upload/index.php?route=product/search&amp;search=g&amp;limit=100">100</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="product-thumb">
                                <div class="image"><a href="http://localhost/Cedros/upload/index.php?route=product/product&amp;product_id=33&amp;search=g"><img src="Search%20-%20g_files/samsung_syncmaster_941bw-228x228.jpg" alt="Samsung SyncMaster 941BW" title="Samsung SyncMaster 941BW" class="img-responsive"></a></div>
                                <div class="caption">
                                    <h4><a href="http://localhost/Cedros/upload/index.php?route=product/product&amp;product_id=33&amp;search=g">Samsung SyncMaster 941BW</a></h4>
                                    <p>
                                        Imagine the advantages of going big without slowing down. The big 19" 941BW monitor combines..</p>
                                    <p class="price">
                                        $242.00                                                <span class="price-tax">Ex Tax: $200.00</span>
                                    </p>
                                </div>
                                <div class="button-group">
                                    <button type="button" onclick="cart.add('33', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
                                    <button data-original-title="Add to Wish List" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('33');"><i class="fa fa-heart"></i></button>
                                    <button data-original-title="Compare this Product" type="button" data-toggle="tooltip" title="" onclick="compare.add('33');"><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="product-thumb">
                                <div class="image"><a href="http://localhost/Cedros/upload/index.php?route=product/product&amp;product_id=49&amp;search=g"><img src="Search%20-%20g_files/samsung_tab_1-228x228.jpg" alt="Samsung Galaxy Tab 10.1" title="Samsung Galaxy Tab 10.1" class="img-responsive"></a></div>
                                <div class="caption">
                                    <h4><a href="http://localhost/Cedros/upload/index.php?route=product/product&amp;product_id=49&amp;search=g">Samsung Galaxy Tab 10.1</a></h4>
                                    <p>
                                        Samsung Galaxy Tab 10.1, is the world’s thinnest tablet, measuring 8.6 mm thickness, runnin..</p>
                                    <p class="price">
                                        $241.99                                                <span class="price-tax">Ex Tax: $199.99</span>
                                    </p>
                                </div>
                                <div class="button-group">
                                    <button type="button" onclick="cart.add('49', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button>
                                    <button data-original-title="Add to Wish List" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('49');"><i class="fa fa-heart"></i></button>
                                    <button data-original-title="Compare this Product" type="button" data-toggle="tooltip" title="" onclick="compare.add('49');"><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 text-left"></div>
                        <div class="col-sm-6 text-right">Showing 1 to 2 of 2 (1 Pages)</div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript"><!--
        $('#button-search').bind('click', function () {
                url = 'index.php?route=product/search';

                var search = $('#content input[name=\'search\']').prop('value');

                if (search) {
                    url += '&search=' + encodeURIComponent(search);
                }

                var category_id = $('#content select[name=\'category_id\']').prop('value');

                if (category_id > 0) {
                    url += '&category_id=' + encodeURIComponent(category_id);
                }

                var sub_category = $('#content input[name=\'sub_category\']:checked').prop('value');

                if (sub_category) {
                    url += '&sub_category=true';
                }

                var filter_description = $('#content input[name=\'description\']:checked').prop('value');

                if (filter_description) {
                    url += '&description=true';
                }

                location = url;
            });

            $('#content input[name=\'search\']').bind('keydown', function (e) {
                if (e.keyCode == 13) {
                    $('#button-search').trigger('click');
                }
            });

            $('select[name=\'category_id\']').on('change', function () {
                if (this.value == '0') {
                    $('input[name=\'sub_category\']').prop('disabled', true);
                } else {
                    $('input[name=\'sub_category\']').prop('disabled', false);
                }
            });

            $('select[name=\'category_id\']').trigger('change');
--></script>
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
                <p>Powered By <a href="http://www.opencart.com/">OpenCart</a><br> Your Store © 2015</p>
            </div>
        </footer>

        <!--
        OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
        Please donate via PayPal to donate@opencart.com
        //-->

        <!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->

    </body></html>