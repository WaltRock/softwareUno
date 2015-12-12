<div id="cart" class="btn-group btn-block">
    <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="btn btn-inverse
            btn-block btn-lg dropdown-toggle"><i class="fa fa-shopping-cart"></i> <span id="cart-total">3 item(s
            ) - 758.87€</span></button>
    <ul class="dropdown-menu pull-right">
        <li>
            <table class="table table-striped">
                <?php echo $tr?>
            </table>
        </li>
        <li>
            <div>
                <table class="table table-bordered">
                    <tr>
                        <td class="text-right"><strong>Sub-Total</strong></td>
                        <td class="text-right">628.46€</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                        <td class="text-right">4.71€</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>VAT (20%)</strong></td>
                        <td class="text-right">125.69€</td>
                    </tr>
                    <tr>
                        <td class="text-right"><strong>Total</strong></td>
                        <td class="text-right">758.87€</td>
                    </tr>
                </table>
                <p class="text-right"><a href="http://localhost/Cedros/upload/index.php?route=checkout/cart"
                                         ><strong><i class="fa fa-shopping-cart"></i> View Cart</strong></a>&nbsp;&nbsp;&nbsp;<a href="http:/
                                                                                                            /localhost/Cedros/upload/index.php?route=checkout/checkout"><strong><i class="fa fa-share"></i> Checkout
                        </strong></a></p>
            </div>
        </li>
    </ul>
</div>
