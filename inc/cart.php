<?php
//include_once("functions.php");
// $cart_data = $query->fetchData("cart", "*", "user_id='$user_id'");
$auth = new auth();
$api = new APIClient();
$token = $_SESSION['token']??$_COOKIE['token']??null;;
$response = $api->callAPI("/cart/view",'GET',[],$token); // Example GET request
$cart_data = $response['data'] ??[];
MyLog('សារប្រតិបត្តិការ 2: ' . json_encode($cart_data, JSON_UNESCAPED_UNICODE));

?>
<div class="cartmini__area">
    <div class="cartmini__wrapper">
        <div class="cartmini__title">
            <h4>Shopping cart</h4>
        </div>
        <div class="cartmini__close">
            <button type="button" class="cartmini__close-btn"><i class="fal fa-times"></i></button>
        </div>
        <div class="cartmini__widget">
            <div class="cartmini__inner">
                <ul>
                    <?php
                    $cart_total = 0;
                    if($cart_data)
                    foreach ($cart_data as $key => $value) {
                        $product_id = $value['product_id'];
                        // $c_data = $query->fetchData("products", "*", "id='$product_id'");
                        // $response = $api->callAPI("public/products/$product_id"); // Example GET request
                        // $c_data = $response['data']['data'] ??[];
                        $c_data = $value['product'];
                        $cart_total = ($cart_total) + ($value['total_price']);
                        $price = $c_data['priceUSD'];
                        echo $html = " <li>
                        <div class=\"cartmini__thumb\">
                            <a href=\"product-details.php\">
                                <img src=\"{$c_data['image']}\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"cartmini__content\">
                            <h5><a href=\"product-details.php?id={$product_id}\">{$c_data['product_name']}</a></h5>
                            <div class=\"product-quantity mt-10 mb-10\">
                                <!-- <span class=\"cart-minus\">-</span>
                                <input class=\"cart-input\" type=\"text\" value=\"1\" />
                                <span class=\"cart-plus\">+</span> -->
                            </div>
                            <div class=\"product__sm-price-wrapper\">
                                <span>{$value['quantity']} <i class=\"fal fa-times\"></i></span>
                                <span class=\"product__sm-price\">" . (is_numeric($price) ? "$" . $price : $price) . "</span>
                            </div>
                        </div>
                        <a href=\"product-details.php?id={$product_id}&remove_cart={$product_id}&msg=msg\" class=\"cartmini__del\"><i class=\"fal fa-times\"></i></a>
                    </li>";
                    } ?>


                </ul>
            </div>
            <div class="cartmini__checkout">
                <div class="cartmini__checkout-title mb-30">
                    <h4>Subtotal:</h4>
                    <span>$<?php echo $cart_total; ?></span>
                </div>
                <div class="cartmini__checkout-btn">
                    <!-- <a href="cart.php" class="m-btn m-btn-border mb-10 w-100"> <span></span> view cart</a> -->
                    <!-- <a href="?action=checkout" class="m-btn m-btn-3 w-100" id="checkout"> <span></span> checkout</a> -->
                    <div class="m-btn m-btn-3 w-100 " id="<?php echo $cart_total > 0 ? 'checkout' :''; ?>" > <span></span> checkout</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>
<!-- cart mini area end -->


<!-- sidebar area start -->
<div class="sidebar__area">
    <div class="sidebar__wrapper">
        <div class="sidebar__close">
            <button class="sidebar__close-btn" id="sidebar__close-btn">
                <span><i class="fal fa-times"></i></span>
                <span>close</span>
            </button>
        </div>
        <div class="sidebar__content">
            <div class="logo mb-40">
                <a href="index.php">
                    <img class="logo" src="assets/img/logo/Online-store-white.png" alt="logo">
                </a>
            </div>
            <div class="mobile-menu"></div>
            <div class="sidebar__action mt-330">
                <div class="sidebar__login mt-15">
                    <!-- <a href="#"><i class="far fa-unlock"></i> Log In</a> -->
                    <?php if ($auth->isLogin()) {
                        echo "<a href=\"account\"><i class=\"far fa-user\"></i>Account</a>";
                    } else {
                        echo "<a href=\"sign-in.php\"><i class=\"far fa-unlock\"></i> Log In</a>";
                    } ?>
                </div>
                <div class="sidebar__cart mt-20">
                    <a href="javascript:void(0);" class="cart-toggle-btn">
                        <i class="far fa-shopping-cart"></i>
                        <span><?php echo $cart_count; ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="modal fade" id="qrCodeModal" tabindex="-1" aria-labelledby="qrCodeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="qrCodeModalLabel">Scan QR Code</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="text-align: center;">
        <canvas id="qrCodeCanvas"></canvas>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->
<div class="modal fade" id="qrCodeModal" tabindex="-1" aria-labelledby="qrCodeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="max-width: 380px;">
    <div class="modal-content" style="border-radius: 15px; overflow: hidden;">
      <!-- Header section -->
      <div style="background-color: #d32f2f; color: white; padding: 1rem; position: relative;">
        <div style="font-size: 1.5rem; font-weight: bold; text-align: center;">KHQR</div>
        <!-- Optionally add corner cut style here with CSS if needed -->
      </div>

      <!-- Body section -->
      <div class="modal-body py-4 px-5">
        <div id="qrName" class="px-3" style="font-weight: bold; font-size: 1.1rem;">CHANNARITH PRUM</div>
        <div class="text-center">
            <hr class="m-3" style="margin: 1rem 0;" />
            <!-- QR Code canvas -->
            <canvas id="qrCodeCanvas" style="max-height: 100% !important; "></canvas>
        </div>
      </div>

      <!-- Footer section -->
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
