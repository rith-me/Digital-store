<?php require('inc/header.php');
// $query = new query();
// $p_data_9 = $query->fetchData("products", "*", "", "", "", 9);
// // print_r($p_data_9);
// $p_data_6 = $query->fetchData("products", "*", "", "", "", 6);
// $p_data_1 = $query->getProducts();
// print_r($p_data_1);
$api = new APIClient();
$t_per_page = 9;
$p_per_page = 6;

if(isset($_GET['load'])){
   if($_GET['load'] == 't_load_more'){
      $_SESSION['t_load_more'] = ($_SESSION['t_load_more'] ?? $t_per_page) + 3;
      $t_per_page = $_SESSION['t_load_more'];
   }
   if($_GET['load'] == 'p_load_more'){
      $_SESSION['p_load_more'] = ($_SESSION['p_load_more'] ?? $p_per_page) + 3;
      $p_per_page = $_SESSION['p_load_more'];
   }
}else{
   $_SESSION['t_load_more'] = $t_per_page;
    $_SESSION['p_load_more'] = $p_per_page;
}

$response = $api->callAPI("/public/products?per_page=$p_per_page"); // Example GET request
$p_data_6 = $response['data']['data']??null;
$response = $api->callAPI("/public/products?per_page=$t_per_page");
$p_data_9 = $response['data']['data']??null;
$p_data_total = $response['data']['total'];
// print_r($p_data_9);

$token = $_SESSION['token']??$_COOKIE['token']??null;
$response = $api->callAPI("/cart/view",'GET',[],$token); // Example GET request
$cart_data = $response['data'] ??[];
// MyLog('សារប្រតិបត្តិការ 2: ' . json_encode($cart_data, JSON_UNESCAPED_UNICODE));

$html = "";
?> 
<!-- header area end -->


<!-- cart mini area start -->
<?php include("inc/cart.php"); ?>
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
<!-- sidebar area end -->
<div class="body-overlay"></div>
<!-- sidebar area end -->


<main>

   <?php
   if(isset($_POST['query'])){
      $d = (object)$_POST;
      $query = $d->query;
      $_SESSION['query'] = $query;
      if($query){
         $response = $api->callAPI("/search-products?query=$query");
         $p_data_9 = $p_data_6 = $response['data']??null;
      }
     
   }

  
   ?>
    <!-- hero area start -->
   <section class="hero__area hero__height grey-bg-3 d-flex align-items-center">
      <div class="hero__shape">
         <img class="circle" src="assets/img/icon/hero/hero-circle.png" alt="circle">
         <img class="circle-2" src="assets/img/icon/hero/hero-circle-2.png" alt="circle">
         <img class="square" src="assets/img/icon/hero/hero-square.png" alt="circle">
         <img class="square-2" src="assets/img/icon/hero/hero-square-2.png" alt="circle">
         <img class="dot" src="assets/img/icon/hero/hero-dot.png" alt="circle">
         <img class="triangle" src="assets/img/icon/hero/hero-triangle.png" alt="circle">
      </div>
      <div class="container">
         <div class="row">
               <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8 col-sm-8">
                  <div class="hero__content">
                     <h2 class="hero__title">
                           <span>Unlock a Universe </span>
                           of Digital Delights
                     </h2>
                     <p>—Your Next Favorite Software is Just a Click Away.</p>
                     <div class="hero__search">
                           <form action="index.php" method="post">
                              <div class="hero__search-inner d-xl-flex">
                                 <div class="hero__search-input">
                                       <span><i class="far fa-search"></i></span>
                                       <input type="text" name="query" value="<?php echo $_SESSION['query']??'' ?>" placeholder="Search for products">
                                 </div>
                                 <button type="submit" class="m-btn ml-20"> <span></span> search</button>
                              </div>
                           </form>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                  <div class="hero__thumb-wrapper scene ml-70">
                     <div class="hero__thumb one d-none d-lg-block">
                           <img class="layer" data-depth="0.2"
                              src="https://themepure.net/template/markit/markit/assets/img/hero/hero-1.jpg" alt="">
                     </div>
                     <div class="hero__thumb two">
                           <img class="layer" data-depth="0.3"
                              src="https://themepure.net/template/markit/markit/assets/img/hero/hero-2.jpg" alt="">
                     </div>
                     <div class="hero__thumb three">
                           <img class="layer" data-depth="0.4"
                              src="https://themepure.net/template/markit/markit/assets/img/hero/hero-3.jpg" alt="">
                     </div>
                  </div>
               </div>
         </div>
      </div>
   </section>
   <!-- hero area end -->

   

   <!-- category area start -->
   <section class="category__area pt-105 pb-135">
      <div class="container">
         <div class="row">
               <div class="col-xxl-12">
                  <div class="section__title-wrapper text-center mb-60">
                     <h2 class="section__title">Browse <br> Popular Categories</h2>
                     <p>Find over 70 software acount and license key.</p>
                  </div>
               </div>
         </div>
        
         <div class="row">
               <div class="col-xxl-4 col-xl-4 col-md-6 col-sm-6">
                  <div class="category__item transition-3 text-center white-bg mb-30 wow fadeInUp"
                     data-wow-delay=".3s">
                     <div class="category__icon mb-25">
                           <a href="product.php?id=<?php if($catagories) echo $catagories[0]['id']?>"><img src="assets/img/icon/catagory/cat-1.png" alt=""></a>
                     </div>
                     <div class="category__content">
                           <h3 class="category__title">
                              <a href="product.php?id=<?php if($catagories) echo $catagories[0]['id']?>"><?php if($catagories) echo $catagories[0]['name'] ?></a>
                           </h3>
                           <a href="product.php ?id=<?php if($catagories) echo $catagories[0]['id']?>" class="link-btn">
                              <i class="far fa-long-arrow-right"></i>
                              Learn More
                           </a>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-4 col-xl-4 col-md-6 col-sm-6">
                  <div class="category__item transition-3 text-center white-bg mb-30 wow fadeInUp"
                     data-wow-delay=".5s">
                     <div class="category__icon mb-25">
                           <a href="product.php?id=<?php if($catagories) echo $catagories[1]['id']?>"><img src="assets/img/icon/catagory/cat-2.png" alt=""></a>
                     </div>
                     <div class="category__content">
                           <h3 class="category__title">
                              <a href="product.php?id=<?php if($catagories) echo $catagories[1]['id']?>"><?php if($catagories) echo $catagories[1]['name'] ?></a>
                           </h3>
                           <a href="product.php?id=<?php if($catagories) echo $catagories[1]['id']?>" class="link-btn">
                              <i class="far fa-long-arrow-right"></i>
                              Learn More
                           </a>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-4 col-xl-4 col-md-6 col-sm-6">
                  <div class="category__item transition-3 text-center white-bg mb-30 wow fadeInUp"
                     data-wow-delay=".7s">
                     <div class="category__icon mb-25">
                           <a href="product.php?id=<?php if($catagories) echo $catagories[2]['id']?>"><img src="assets/img/icon/catagory/cat-3.png" alt=""></a>
                     </div>
                     <div class="category__content">
                           <h3 class="category__title">
                              <a href="product.php?id=<?php if($catagories) echo $catagories[2]['id']?>"><?php if($catagories) echo $catagories[2]['name'] ?></a>
                           </h3>
                           <a href="product.php?id=<?php if($catagories) echo $catagories[2]['id']?>" class="link-btn">
                              <i class="far fa-long-arrow-right"></i>
                              Learn More
                           </a>
                     </div>
                  </div>
               </div>
               <div class="d-none col-xxl-3 col-xl-3 col-md-6 col-sm-6">
                  <div class="category__item transition-3 text-center white-bg mb-30 wow fadeInUp"
                     data-wow-delay=".9s">
                     <div class="category__icon mb-25">
                           <a href="#"><img src="assets/img/icon/catagory/cat-4.png" alt=""></a>
                     </div>
                     <div class="category__content">
                           <h3 class="category__title">
                              <a href="product.php">Digital Marketing</a>
                           </h3>
                           <a href="product.php" class="link-btn">
                              <i class="far fa-long-arrow-right"></i>
                              Learn More
                           </a>
                     </div>
                  </div>
               </div>
         </div>
         <div class="row d-none">
               <div class="col-xxl-12">
                  <div class="category__more mt-30 text-center">
                     <a href="product.php" class="m-btn m-btn-2"> <span></span> View all categories</a>
                  </div>
               </div>
         </div>
      </div>
   </section>
   <!-- category area end -->
   
   <!-- trending area start -->
   <section class="trending__area pt-110 pb-110 grey-bg">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xxl-6 col-xl-6 col-lg col-md-8">
                <div class="section__title-wrapper mb-50">
                    <h2 class="section__title">Trending <br> Landmark Software</h2>
                    <!-- <p>Jeffrey pardon me jolly good.</p> -->
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg col-md-4 d-none">
                <div class="trending__more d-flex justify-content-md-end  mb-50">
                    <a href="product.php" class="m-btn m-btn-border"><span></span>View All Product</a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            if($p_data_9)
            foreach ($p_data_9 as $key => $value) {
                // កាត់ចំណងជើង និង excerpt
                $product_title = isset($value['product_name']) ? mb_substr($value['product_name'], 0, 30) . ".." : (isset($value['name']) ? mb_substr($value['name'], 0, 30) . ".." :"");
                $excerpt = isset($value['product_content']) ? mb_substr($value['product_content'], 0, 30) . ".." : (isset($value['detail']) ? mb_substr($value['detail'], 0, 30) . ".." :"");
                $catagory = (isset($value['category']) ? $value['category'] : ($value['category_name']??'Category'));

                // ទាញយកតម្លៃពី database
               //  $priceData = $query->fetchData("product_meta", "min_price", "product_id='{$value['id']}'");

                // ពិនិត្យថា $priceData មានទិន្នន័យឬអត់
                $price = $value['priceUSD']??$value['price']??0 ;// (!empty($priceData) && isset($priceData[0]['min_price'])) ? (int)$priceData[0]['min_price'] : 0;

                // ប្តូរ 0 ទៅជា "FREE!"
                $price = ($price == 0) ? "FREE!" : "$" . $price;

                // Generate HTML
                echo '<div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                    <div class="trending__item d-sm-flex white-bg mb-30 wow fadeInUp" data-wow-delay=".3s">
                        <div class="trending__thumb mr-25">
                            <div class="trending__thumb-inner fix">
                                <a href="product-details.php?id=' . $value['id'] . '">
                                    <img src="' . (isset($value['image_url']) ? $value['image_url'] : '') . '" alt="" class="product_img_102">
                                </a>
                            </div>
                        </div>
                        <div class="trending__content">
                            <h3 class="trending__title"><a href="product-details.php?id=' . $value['id'] . '">' . $product_title . '</a></h3>
                            <p>Click to see full information.</p>
                            <div class="trending__meta d-flex justify-content-between">
                                <div class="trending__tag">
                                    <a href="product.php?category='.$catagory.'">'.$catagory.'</a>
                                </div>
                                <div class="trending__price">
                                    <span>' . $price . '</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
               }
               ?>
         </div>
         <div class="row <?php echo ($p_data_total > 9) ? '' : 'd-none' ;?> ">
               <div class="col-xxl-12">
                  <div class="product__more text-center mt-30">
                     <a href="index.php?load=t_load_more"  class="m-btn m-btn-2"> <span></span> Load More </a>
                  </div>
               </div>
         </div>
      </div>
   </section>

   <!-- subscribe area start -->
   <section class="subscribe__area p-relative pt-100 pb-110"
      data-background="assets/img/bg/subscribe-bg.jpg">
      <div class="subscribe__icon">
         <img class="ps" src="assets/img/icon/subscribe/ps.png" alt="">
         <img class="wp" src="assets/img/icon/register/pr.png" alt="">
         <img class="html" src="assets/img/icon/register/AI.png" alt="">
         <img class="f" src="assets/img/icon/subscribe/f.png" alt="">
         <img class="man" src="assets/img/icon/subscribe/man.png" alt="">
      </div>
      <div class="container">
         <div class="row">
               <div class="col-xxl-12">
                  <div class="subscribe__content text-center wow fadeInUp" data-wow-delay=".5s">
                     <h3 class="subscribe__title">Want to be a seler? <br> Create your acount now.</h3>
                     <p>Try our website for FREE!</p>
                     <div class="subscribe__form wow fadeInUp" data-wow-delay=".7s">
                           <form action="#">
                              <!-- <input type="email" placeholder="Email Address"> -->
                              <button type="submit" class="m-btn m-btn-black"><span></span> register
                              </button>
                           </form>
                           <p>Join 20+ other selers in our Markit community.</p>
                     </div>
                  </div>
               </div>
         </div>
      </div>
   </section>
   <!-- subscribe area end -->

   <!-- product area start -->
   <section class="product__area pt-105 pb-110 grey-bg-2">
      <div class="container">
         <div class="row">
               <div class="col-xxl-12">
                  <div class="section__title-wrapper text-center mb-60">
                     <h2 class="section__title">Latest <br>  Products</h2>
                     <p>From Digital Store</p>
                  </div>
               </div>
         </div>
         <div class="row">
         <?php
            if($p_data_6)
            foreach ($p_data_6 as $key => $value) {
               // កាត់ចំណងជើង និង excerpt
               $product_title = isset($value['product_name']) ? mb_substr($value['product_name'], 0, 30) . ".." : (isset($value['name']) ? mb_substr($value['name'], 0, 30) . ".." :"");
               $excerpt = isset($value['category']) ? mb_substr($value['category'], 0, 30) . ".." : (isset($value['category_name']) ? mb_substr($value['category_name'], 0, 30) . ".." :"");

               // ទាញយកតម្លៃពី database
               // $priceData = $query->fetchData("product_meta", "min_price", "product_id='{$value['id']}'");

               // ពិនិត្យថា $priceData មានតម្លៃឬអត់
               $price = $value['priceUSD']??0;//(!empty($priceData) && isset($priceData[0]['min_price'])) ? (int)$priceData[0]['min_price'] : 0;
               $catagory = (isset($value['category']) ? $value['category'] : ($value['category_name']??'Category'));
               // ប្តូរ 0 ទៅជា "FREE!"
               $price = ($price == 0) ? "FREE!" : "$" . $price;

               // បង្កើត HTML
               $html = '<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                  <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".3s">
                        <div class="product__thumb">
                           <div class="product__thumb-inner fix w-img">
                              <a href="product-details.php?id=' . $value['id'] . '">
                                    <img class="product_img_356" src="' . (isset($value['image_url']) ? $value['image_url'] : '') . '" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="product__content">
                           <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                              <div class="product__tag">
                                    <a href="product.php?category='.$catagory.'">'.$catagory.'</a>
                              </div>
                              <div class="product__price">
                                    <span>' . $price . '</span>
                              </div>
                           </div>
                           <h3 class="product__title">
                              <a href="product-details.php?id=' . $value['id'] . '">' . $product_title . '</a>
                           </h3>
                           <p class="product__author">by <a href="#">Theme Pure</a> in <a href="#">Templates</a></p>
                        </div>
                  </div>
               </div>';

               echo $html;
            }

         ?>



         </div>
         <div class="row <?php echo ($p_data_total > 6) ? '' : 'd-none' ;?>">
               <div class="col-xxl-12">
                  <div class="product__more text-center mt-30">
                     <a href="index.php?load=p_load_more"  class="m-btn m-btn-2"> <span></span> Load More </a>
                  </div>
               </div>
         </div>
      </div>
   </section>
   <!-- product area end -->

   <!-- cta area start -->
   <section class="cta__area pt-100 pb-60 d-none">
      <div class="container">
         <div class="row">
               <div class="col-xxl-6 offset-xxl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                  <div class="section__title-wrapper text-center mb-45">
                     <h2 class="section__title wow fadeInUp" data-wow-delay=".3s">Grow Your Revenue
                           <span>Today</span>
                     </h2>
                     <p class="wow fadeInUp" data-wow-delay=".5s">Thousands of Markit Brands have made
                           the swich.Text marketing with the customer in mind!</p>
                  </div>
               </div>
         </div>
         <div class="row">
               <div class="col-xxl-6 offset-xxl-3">
                  <div class="cta__content text-center wow fadeInUp" data-wow-delay=".7s">
                     <a href="pricing.php" class="m-btn m-btn-border-2 cta__btn active"> <span></span>
                           Start 14 Day Free Trial</a>
                     <a href="pricing.php" class="m-btn m-btn-border-2 cta__btn"> <span></span> Claim
                           Free Demo</a>
                     <p>Start Sending Texts - No Credit Card Necessary</p>
                  </div>
               </div>
         </div>
      </div>
   </section>
   <!-- cta area end -->

   <!-- brand area start -->
   <div class="brand__area pb-15 d-none">
      <div class="container">
         <div class="row">
               <div class="col-xxl-12">
                  <div class="brand__slider owl-carousel wow fadeInUp" data-wow-delay=".5s">
                     <div class="brand__thumb">
                           <img src="assets/img/brand/brand-1.png" alt="">
                     </div>
                     <div class="brand__thumb">
                           <img src="assets/img/brand/brand-2.png" alt="">
                     </div>
                     <div class="brand__thumb">
                           <img src="assets/img/brand/brand-3.png" alt="">
                     </div>
                     <div class="brand__thumb">
                           <img src="assets/img/brand/brand-4.png" alt="">
                     </div>
                     <div class="brand__thumb">
                           <img src="assets/img/brand/brand-5.png" alt="">
                     </div>
                  </div>
               </div>
         </div>
      </div>
   </div>
   <!-- brand area end -->

   <!-- testimonial area start -->
   <div class="testimonial__area pt-50 pb-115 fix d-none">
      <div class="container">
         <div class="testimonial__inner p-relative pb-110">
               <div class="testimonial__bg p-absolute">
                  <img src="assets/img/bg/testimonial-bg.png" alt="">
               </div>
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="testimonial__slider owl-carousel wow fadeInUp" data-wow-delay=".5s">
                           <div class="testimonial__item white-bg">
                              <div class="testimonial__person d-flex mb-20">
                                 <div class="testimonial__avater">
                                       <img src="assets/img/testimonial/testi-1.jpg" alt="">
                                 </div>
                                 <div class="testimonial__info ml-15">
                                       <h5>Justin Case</h5>
                                       <span>@justin</span>
                                 </div>
                              </div>
                              <div class="testimonial__text">
                                 <p>Tomfoolery chimney pot loo easy peasy twit he lost his bottle
                                       lavatory excuse my French up the duff cup of char bender fantastic
                                       arse.!</p>
                              </div>
                           </div>
                           <div class="testimonial__item white-bg">
                              <div class="testimonial__person d-flex mb-20">
                                 <div class="testimonial__avater">
                                       <img src="assets/img/testimonial/testi-2.jpg" alt="">
                                 </div>
                                 <div class="testimonial__info ml-15">
                                       <h5>Gunther Beard</h5>
                                       <span>@beard</span>
                                 </div>
                              </div>
                              <div class="testimonial__text">
                                 <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy
                                       grub bog no biggie he nicked it what a load of rubbish pear shaped.!
                                 </p>
                              </div>
                           </div>
                           <div class="testimonial__item white-bg">
                              <div class="testimonial__person d-flex mb-20">
                                 <div class="testimonial__avater">
                                       <img src="assets/img/testimonial/testi-3.jpg" alt="">
                                 </div>
                                 <div class="testimonial__info ml-15">
                                       <h5>Joss Sticks</h5>
                                       <span>@sticks</span>
                                 </div>
                              </div>
                              <div class="testimonial__text">
                                 <p>Tomfoolery chimney pot loo easy peasy twit he lost his bottle
                                       lavatory excuse my French up the duff cup of char bender fantastic
                                       arse.!</p>
                              </div>
                           </div>
                           <div class="testimonial__item white-bg">
                              <div class="testimonial__person d-flex mb-20">
                                 <div class="testimonial__avater">
                                       <img src="assets/img/testimonial/testi-4.jpg" alt="">
                                 </div>
                                 <div class="testimonial__info ml-15">
                                       <h5>Samuel Serif</h5>
                                       <span>@justin</span>
                                 </div>
                              </div>
                              <div class="testimonial__text">
                                 <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy
                                       grub bog no biggie he nicked it what a load of rubbish pear shaped.!
                                 </p>
                              </div>
                           </div>
                           <div class="testimonial__item white-bg">
                              <div class="testimonial__person d-flex mb-20">
                                 <div class="testimonial__avater">
                                       <img src="assets/img/testimonial/testi-2.jpg" alt="">
                                 </div>
                                 <div class="testimonial__info ml-15">
                                       <h5>Shahnewaz Sakil</h5>
                                       <span>@Shahnewaz</span>
                                 </div>
                              </div>
                              <div class="testimonial__text">
                                 <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy
                                       grub bog no biggie he nicked it what a load of rubbish pear shaped.!
                                 </p>
                              </div>
                           </div>
                           <div class="testimonial__item white-bg">
                              <div class="testimonial__person d-flex mb-20">
                                 <div class="testimonial__avater">
                                       <img src="assets/img/testimonial/testi-3.jpg" alt="">
                                 </div>
                                 <div class="testimonial__info ml-15">
                                       <h5>Joss Sticks</h5>
                                       <span>@sticks</span>
                                 </div>
                              </div>
                              <div class="testimonial__text">
                                 <p>Tomfoolery chimney pot loo easy peasy twit he lost his bottle
                                       lavatory excuse my French up the duff cup of char bender fantastic
                                       arse.!</p>
                              </div>
                           </div>
                           <div class="testimonial__item white-bg">
                              <div class="testimonial__person d-flex mb-20">
                                 <div class="testimonial__avater">
                                       <img src="assets/img/testimonial/testi-2.jpg" alt="">
                                 </div>
                                 <div class="testimonial__info ml-15">
                                       <h5>Gunther Beard</h5>
                                       <span>@beard</span>
                                 </div>
                              </div>
                              <div class="testimonial__text">
                                 <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy
                                       grub bog no biggie he nicked it what a load of rubbish pear shaped.!
                                 </p>
                              </div>
                           </div>
                           <div class="testimonial__item white-bg">
                              <div class="testimonial__person d-flex mb-20">
                                 <div class="testimonial__avater">
                                       <img src="assets/img/testimonial/testi-4.jpg" alt="">
                                 </div>
                                 <div class="testimonial__info ml-15">
                                       <h5>Samuel Serif</h5>
                                       <span>@justin</span>
                                 </div>
                              </div>
                              <div class="testimonial__text">
                                 <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy
                                       grub bog no biggie he nicked it what a load of rubbish pear shaped.!
                                 </p>
                              </div>
                           </div>
                           <div class="testimonial__item white-bg">
                              <div class="testimonial__person d-flex mb-20">
                                 <div class="testimonial__avater">
                                       <img src="assets/img/testimonial/testi-1.jpg" alt="">
                                 </div>
                                 <div class="testimonial__info ml-15">
                                       <h5>Samuel Serif</h5>
                                       <span>@justin</span>
                                 </div>
                              </div>
                              <div class="testimonial__text">
                                 <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy
                                       grub bog no biggie he nicked it what a load of rubbish pear shaped.!
                                 </p>
                              </div>
                           </div>
                     </div>
                  </div>
               </div>
         </div>
      </div>
   </div>
   <!-- testimonial area end -->

   <!-- banner area start -->
   <section class="banner__area pb-90 d-none">
      <div class="container">
         <div class="row">
               <div class="col-xxl-6 col-xl-6 col-md-6">
                  <div class="banner__item mb-30 wow fadeInUp" data-wow-delay=".3s"
                     data-background="assets/img/banner/banner-1.jpg">
                     <h3 class="banner__title">Designers who changed the web with Markit</h3>
                     <p>He lost his bottle that zonked spend a penny young delinquent bugger.</p>
                     <a href="about.php" class="m-btn m-btn-white banner__more"> <span></span> Learn
                           More</a>
                  </div>
               </div>
               <div class="col-xxl-6 col-xl-6 col-md-6">
                  <div class="banner__item mb-30 wow fadeInUp" data-wow-delay=".7s"
                     data-background="assets/img/banner/banner-2.jpg">
                     <h3 class="banner__title">Professional Websites are made by Markit</h3>
                     <p>He lost his bottle that zonked spend a penny young delinquent bugger.</p>
                     <a href="about.php" class="m-btn m-btn-white banner__more"> <span></span> Learn
                           More</a>
                  </div>
               </div>
         </div>
      </div>
   </section>
   <!-- banner area end -->
</main>

<!-- footer area start -->
<?php include("inc/footer.php"); ?>
<!-- footer area start -->


</body>

</html>