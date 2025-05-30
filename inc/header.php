<?php
// session_start();
require('functions.php');

$auth = new auth();
$file = new files();

if (!$auth->isLogin()) {
    if (!isset($_SESSION['user_id'])) {
        $_SESSION['user_id'] = rndmString(3);
        $_SESSION['user_type'] = 0;
    }
}

$user_id = $_SESSION['user_id'];
$user_type = $_SESSION['user_type'];

$api = new APIClient();
$query = new query();
$shopAction = new shopAction();

$response = $api->callAPI("/public/categories"); // Example GET request
$catagories = $response['data']??null;
// print_r($catagories);
$get_id = $_GET['id'] ?? null;

if (isset($_GET['action']) && $_GET['action'] == "checkout") {
    // $shopAction->checkout();
    $order_hash = rndmString(13, "gd_order_");
    // header("location: razorpay/pay.php?order=$order_hash");
    // $msg = "checkout are not avalable, we are fixing.";
    // $msg_class = "alert-danger";
    // $st_msg = "Sorry";
}else if(isset($_GET['action']) && $_GET['action'] == "logout"){
    $token = $_SESSION['token']??$_COOKIE['token']??null;;
    $response = $api->callAPI("/logout",'POST',[],$token); // Example GET request
    if($response && ($response['status_code'] == 200)){
        $msg = $response['message'];
        $msg_class = "alert-success";
        $st_msg = "Congratulations";
    }
}

if (isset($_GET['download'])) {
    $p_id = $_GET['download'];
    $file->download($p_id);
}

if (isset($_GET['add_to_cart'])) {
    $pid = $_GET['add_to_cart'];
    
    // $cpd = $query->fetchData("product_meta", "*", "product_id='$pid'");
    $response = $api->callAPI("/public/products/$pid");
    $cpd = $response['data']??[];

    if (count($cpd) != 0) {
        // $caap = $query->fetchData("cart", "*", "user_id='$user_id' and product_id='$pid'");
        $cartResponse = $api->callAPI("/api/cart/view");
        $caap = $cartResponse['data']??[];
        // MyLog('សារប្រតិបត្តិការ 2 '.json_encode($caap));

        if (count($caap) == 0) {
            // $data = ["product_id" => $pid, "user_id" => $user_id,  "price" => $cpd['priceUSD'], "user_type" => $user_type];
            // $q = $query->insertData("cart", $data);
            // MyLog('សារប្រតិបត្តិការ 1 '.json_encode($data));
            $token = $_SESSION['token']??$_COOKIE['token']??null;;
            $data = ["product_id" => $pid, "quantity"=>1];
            
            $response = $api->callAPI("/cart/add",'POST',$data,$token); // Example GET request
            // MyLog('សារប្រតិបត្តិការ 3 '.json_encode($response));
            if($response && ($response['status_code'] == 200)){
                $msg = "Product added to your cart successfully";
                $msg_class = "alert-success";
                $st_msg = "Congratulations";
            }else{
                $msg = "Product add to your cart feiled";
                $msg_class = "alert-danger";
                $st_msg = "Sorry";
            }
            
        } else {
            $msg = "This product is already available in your Cart";
            $msg_class = "alert-danger";
            $st_msg = "Sorry";
        }
    }
}

if (isset($_GET['remove_cart'])) {
    $pid = $_GET['remove_cart'];
    // $cart_check = $query->fetchData("cart", "*", "user_id='$user_id' and product_id='$pid'");
    $cartResponse = $api->callAPI("/api/cart/view");
    $cart_check = $cartResponse['data']??[];
    if (count($cart_check) != 0) {
        $msg = "That product is not in your cart";
        $msg_class = "alert-danger";
        $st_msg = "Dear";
    } else {
        // $q = $query->dropData("cart", "user_id='$user_id' and product_id='$pid'");
        $token = $_SESSION['token']??$_COOKIE['token']??null;;
        $response = $api->callAPI("/cart/remove/$pid", 'DELETE', [], $token); // Example GET request
        // MyLog('សារប្រតិបត្តិការ 3 '.json_encode($response));
        // MyLog('សារប្រតិបត្តិការ 4 '.json_encode($pid));
        if($response && ($response['status_code'] === 200)){
            $msg = "Product removed from your cart";
            $msg_class = "alert-success";
            $st_msg = "Ok";
            header("location: product-details.php");

        }else{
            $msg = "Product removed from your cart feiled";
            $msg_class = "alert-danger";
            $st_msg = "Sorry";
            header("location: product-details.php");

        }
        
    }
}



$token = $_SESSION['token']??$_COOKIE['token']??null;;
$cartResponse = $api->callAPI("/cart/view",'GET',[],$token); // Example GET request
$cart_data = $cartResponse['data'] ??[];
$cart_count = count($cart_data);

// $cart_count = count($query->fetchData("cart", "*", "user_id='$user_id'"));
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Digital Store </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/Online-store.png">
    <link rel="stylesheet" href="assets/css/preloader.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/backToTop.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/fontAwesome5Pro.css">
    <link rel="stylesheet" href="assets/css/elegantFont.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="./assets/js/khqr-1.0.16.min.js"></script>
    <!-- <script src="https://github.com/davidhuotkeo/bakong-khqr/releases/download/bakong-khqr-1.0.6/khqr-1.0.6.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/qrcode/build/qrcode.min.js"></script>
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

    <!-- Add your site or application content here -->

    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two" style="left:20px;"></div>
                <div class="object" id="object_three" style="left:40px;"></div>
                <div class="object" id="object_four" style="left:60px;"></div>
                <div class="object" id="object_five" style="left:80px;"></div>
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- header area start -->
    <header>
        <div class="header__area white-bg" id="header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-6">
                        <div class="logo">
                            <a href="index.php">
                                <img class="logo" src="assets/img/logo/Online-store.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-8 col-lg-8 d-none d-lg-block">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-dropdown- <?php echo ($get_id==null ? 'active' : '') ?>">
                                        <a href="index.php">Home</a>
                                        <!-- <ul class="submenu">
                                            <li><a href="index.php">Home Wordpress</a></li>
                                            <li><a href="index-2.php">Home Plugins</a></li>
                                        </ul> -->
                                    </li>
                                    <?php
                                    if($catagories)
                                    foreach ($catagories as $key => $value) {
                                        // កាត់ចំណងជើង និង excerpt
                                        $catagory_id = $value['id']??null;
                                        $name = $value['name'] ?? 'catagory_name';
                                        // Generate HTML
                                        echo '<li class="'.($get_id==$catagory_id ? 'active' : '').'"><a href="product.php?id=' . $value['id'] . '">'.$name.'</a></li>';
                                    }
                                    else
                                    echo `<li class="has-dropdown">
                                            <a href="product.php">Themes</a>
                                            <ul class="submenu">
                                                <li><a href="product.php">Product</a></li>
                                                <li><a href="product-details.php">Product Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="product.php">HTML</a></li>
                                        <!-- <li><a href="support.php">Support</a></li> -->
                                        <li class="has-dropdown">
                                            <a href="product.php">pages</a>

                                            <ul class="submenu">
                                                <li><a href="about.php">About</a></li>
                                                <li><a href="documentation.php">Documentation</a></li>
                                                <li><a href="pricing.php">Pricing</a></li>
                                                <li><a href="sign-up.php">Sign Up</a></li>
                                                <li><a href="sign-in.php">Log In</a></li>
                                            </ul>
                                        </li>`;
                                    ?>
                                    
                                    <li class="has-dropdown d-none">
                                        <a href="blog.php">Blog</a>

                                        <ul class="submenu">
                                            <li><a href="blog.php">Blog</a></li>
                                            <li><a href="blog-details.php">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php" class="">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-8 col-6">
                        <div class="header__action d-flex align-items-center justify-content-end">

                            <div class="header__login d-none d-sm-block">
                                <?php if ($auth->isLogin()) {
                                    echo "<a href=\"account\"><i class=\"far fa-user\"></i>Account</a>";
                                } else {

                                    echo "<a href=\"sign-in.php\"><i class=\"far fa-unlock\"></i> Log In</a>";
                                } ?>

                            </div>
                            <div class="header__cart d-none d-sm-block">
                                <a href="javascript:void(0);" class="cart-toggle-btn">
                                    <i class="far fa-shopping-cart"></i>
                                    <span><?php echo $cart_count; ?></span>
                                </a>
                            </div>
                            <div class="sidebar__menu d-lg-none">
                                <div class="sidebar-toggle-btn" id="sidebar-toggle">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php
    if (isset($_GET['msg'])) {
        if ($_GET["msg"] != "msg") {
            $msg = $_GET["msg"];
            $msg_class = "alert-success";
            
        }
      //MyLog('សារប្រតិបត្តិការ 32 '.json_encode($_GET["msg"]));

        if ($_GET['msg'] == "order successful"){
    
            $token = $_SESSION['token']??$_COOKIE['token']??null;;
            $response = $api->callAPI("/cart/place-order", 'POST', [], $token); // Example GET request
          //MyLog('សារប្រតិបត្តិការ 33 '.json_encode($response));
        
            if($response && ($response['status_code'] === 200)){
                header("location: index.php?msg=msg");
                $_SESSION['msg'] = $msg = "Order successfully. Thank you for order, View more in your account.";
                $_SESSION['msg_class'] = $msg_class = "alert-success";
                $_SESSION['st_msg'] = $st_msg = "Congratulations";

            }else{
                header("location: index.php?msg=msg");
                $_SESSION['msg'] = $msg = "Order feiled";
                $_SESSION['msg_class'] = $msg_class = "alert-danger";
                $_SESSION['st_msg'] = $st_msg = "Sorry";
        
            }
        }

        $st_msg = $st_msg ?? (isset($_SESSION['st_msg']) ? $_SESSION['st_msg']: '' );
        $msg_class = $msg_class ?? (isset($_SESSION['msg_class']) ? $_SESSION['msg_class']: '');
        $msg = $msg ?? (isset($_SESSION['msg']) ? $_SESSION['msg']: '');

        $html = "<div class=\"alert {$msg_class} alert-dismissible\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <strong>{$st_msg}!</strong> {$msg}
          </div>";
        echo $html;
    }
    ?>
</body>
</html>