<?php require('inc/header.php'); 
$api = new APIClient();

if (!isset($_GET['id']) && !isset($_GET['category'])) {
   header("location: index.php");
} else {
   $foundId = null;
   if(isset($_GET['category'])){
      $response = $api->callAPI("/public/categories"); // Example GET request
      $catagories = $response['data']??null;
      $targetName = $_GET['category'];
      
      foreach ($catagories as $item) {
         if (strtolower($item['name']) === strtolower($targetName)) {
             $foundId = $item['id'];
             break;
         }
     }
   }
   $c_id = $_GET['id'] ?? $foundId;

   $response = $api->callAPI("/public/categories/$c_id/products");
   if($response['status_code'] != 200){
      header("location: index.php");
   }else
   $p_data = $response['data']??[];
   $response = $api->callAPI("/public/products?per_page=9"); // Example GET request
   $p_data_9 = $response['data']['data']??null;
}
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

   <!-- bg shape area start -->
   <div class="bg-shape">
      <img src="assets/img/shape/shape-1.png" alt="">
   </div>
   <!-- bg shape area end -->

   <!-- product area start -->
   <section class="product__area po-rel-z1 pt-100 pb-115 grey-bg">
      <div class="container">
         <div class="row">
            <div class="d-none col-xxl-4 col-xl-4 col-lg-4 order-lg-first order-last">
               <div class="product__sidebar mr-30">
                  <div class="product__sidebar-widget  white-bg mb-30">
                     <div class="sidebar__widget mb-20">
                        <form action="#">
                           <div class="sidebar__widget-head d-flex align-items-center justify-content-between">
                              <h4 class="sidebar__widget-title">Category</h4>
                              <button type="submit" class="sidebar__clear-btn"><i class="fal fa-repeat"></i>Clear</button>
                           </div>
                           <div class="sidebar__widget-content">
                              <div class="sidebar__check-wrapper">
                                 <ul>
                                    <li class="d-flex justify-content-between align-items-center">
                                       <div class="sidebar__check d-flex align-items-center">
                                          <input class="m-check-input" type="checkbox" id="m-wp">
                                          <label class="m-check-label" for="m-wp">WordPress</label>
                                       </div>
                                       <span>76</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                       <div class="sidebar__check d-flex align-items-center">
                                          <input class="m-check-input" type="checkbox" id="m-marketing">
                                          <label class="m-check-label" for="m-marketing">Marketing</label>
                                       </div>
                                       <span>24</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                       <div class="sidebar__check d-flex align-items-center">
                                          <input class="m-check-input" type="checkbox" id="m-kit">
                                          <label class="m-check-label" for="m-kit">Interface Kit</label>
                                       </div>
                                       <span>27</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                       <div class="sidebar__check d-flex align-items-center">
                                          <input class="m-check-input" type="checkbox" id="m-templates">
                                          <label class="m-check-label" for="m-templates">Templates</label>
                                       </div>
                                       <span>44</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                       <div class="sidebar__check d-flex align-items-center">
                                          <input class="m-check-input" type="checkbox" id="m-ecommerce">
                                          <label class="m-check-label" for="m-ecommerce">eCommerce</label>
                                       </div>
                                       <span>16</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                       <div class="sidebar__check d-flex align-items-center">
                                          <input class="m-check-input" type="checkbox" id="m-component">
                                          <label class="m-check-label" for="m-component">Component</label>
                                       </div>
                                       <span>12</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="sidebar__widget">
                        <form action="#">
                           <div class="sidebar__widget-head d-flex align-items-center justify-content-between">
                              <h4 class="sidebar__widget-title">Tags</h4>
                              <button type="submit" class="sidebar__clear-btn"><i class="fal fa-repeat"></i>Clear</button>
                           </div>
                           <div class="sidebar__widget-content">
                              <div class="sidebar__check-wrapper sidebar__tag">
                                 <ul>
                                    <li class="d-flex justify-content-between align-items-center">
                                       <div class="sidebar__check d-flex align-items-center">
                                          <input class="m-check-input" type="checkbox" id="m-marketplace">
                                          <label class="m-check-label" for="m-marketplace">Marketplace</label>
                                       </div>
                                       <span>28</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                       <div class="sidebar__check d-flex align-items-center">
                                          <input class="m-check-input" type="checkbox" id="m-fashion">
                                          <label class="m-check-label" for="m-fashion">Fashion</label>
                                       </div>
                                       <span>13</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                       <div class="sidebar__check d-flex align-items-center">
                                          <input class="m-check-input" type="checkbox" id="m-responsive">
                                          <label class="m-check-label" for="m-responsive">Responsive</label>
                                       </div>
                                       <span>26</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                       <div class="sidebar__check d-flex align-items-center">
                                          <input class="m-check-input" type="checkbox" id="m-education">
                                          <label class="m-check-label" for="m-education">Education</label>
                                       </div>
                                       <span>05</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                       <div class="sidebar__check d-flex align-items-center">
                                          <input class="m-check-input" type="checkbox" id="m-shop">
                                          <label class="m-check-label" for="m-shop">Shop</label>
                                       </div>
                                       <span>07</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                       <div class="sidebar__check d-flex align-items-center">
                                          <input class="m-check-input" type="checkbox" id="m-furniture">
                                          <label class="m-check-label" for="m-furniture">Furniture</label>
                                       </div>
                                       <span>10</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                       <div class="sidebar__check d-flex align-items-center">
                                          <input class="m-check-input" type="checkbox" id="m-multipurpose">
                                          <label class="m-check-label" for="m-multipurpose">Multipurpose</label>
                                       </div>
                                       <span>32</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                       <div class="sidebar__check d-flex align-items-center">
                                          <input class="m-check-input" type="checkbox" id="m-store">
                                          <label class="m-check-label" for="m-store">Store</label>
                                       </div>
                                       <span>20</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                       <div class="sidebar__check d-flex align-items-center">
                                          <input class="m-check-input" type="checkbox" id="m-agency">
                                          <label class="m-check-label" for="m-agency">Agency</label>
                                       </div>
                                       <span>83</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                       <div class="sidebar__check d-flex align-items-center">
                                          <input class="m-check-input" type="checkbox" id="m-portfolio">
                                          <label class="m-check-label" for="m-portfolio">Portfolio</label>
                                       </div>
                                       <span>45</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                       <div class="sidebar__check d-flex align-items-center">
                                          <input class="m-check-input" type="checkbox" id="m-construction">
                                          <label class="m-check-label" for="m-construction">Construction</label>
                                       </div>
                                       <span>25</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="sidebar__banner" data-background="assets/img/banner/sidebar-banner.jpg">
                     <h4 class="sidebar__banner-title">Check Out <br>Our free Templates</h4>
                     <a href="product.html" class="m-btn m-btn-white"> <span></span> free template</a>
                  </div>
               </div>
            </div>

            <div class="col-xxl-12 col-xl-12 col-lg-12">
               <div class="row">
               <?php
                  if($p_data)
                  foreach ($p_data as $key => $value) {
                     $product_title = isset($value['product_name']) ? mb_substr($value['product_name'], 0, 30) . ".." : "";
                     $excerpt = isset($value['product_content']) ? mb_substr($value['product_content'], 0, 30) . ".." : "";
                     $catagory = (isset($value['category']) ? $value['category'] : ($value['category_name']??'Category'));
                    
                     $price = $value['priceUSD']??0 ;
     
                     // ប្តូរ 0 ទៅជា "FREE!"
                     $price = ($price == 0) ? "FREE!" : "$" . $price;

                     // Generate HTML
                     echo '<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                        <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".3s">
                           <div class="product__thumb">
                              <div class="product__thumb-inner fix w-img">
                                 <a href="product-details.php?id=' . $value['product_id'] . '">
                                    <img class="product_img_356" src="' . (isset($value['image']) ? $value['image'] : '') . '" alt="">
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
                                 <a href="product-details.php?id=' . $value['product_id'] . '">' . $product_title . '</a>
                              </h3>
                              <p class="product__author">by <a href="#">Theme Pure</a> in <a href="#">Templates</a></p>
                           </div>
                        </div>
                     </div>';
                  }
                  else
                  echo `<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                     <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".3s">
                        <div class="product__thumb">
                           <div class="product__thumb-inner fix w-img">
                              <a href="product-details.html">
                                 <img src="assets/img/product/product-1.jpg" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="product__content">
                           <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                              <div class="product__tag">
                                 <a href="#">License Key</a>
                              </div>
                              <div class="product__price">
                                 <span>$49</span>
                              </div>
                           </div>
                           <h3 class="product__title">
                              <a href="product-details.html">Zibber - License Key Consulting...</a>
                           </h3>
                           <p class="product__author">by <a href="#">Theme Pure</a> in <a href="#">Templates</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                     <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".5s">
                        <div class="product__thumb">
                           <div class="product__thumb-inner fix w-img">
                              <a href="product-details.html">
                                 <img src="assets/img/product/product-2.jpg" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="product__content">
                           <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                              <div class="product__tag">
                                 <a href="#">corporate</a>
                              </div>
                              <div class="product__price">
                                 <span>$23</span>
                              </div>
                           </div>
                           <h3 class="product__title">
                              <a href="product-details.html">Pixen - Printing Services Company..</a>
                           </h3>
                           <p class="product__author">by <a href="#">Theme Pure</a> in <a href="#">Templates</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                     <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".7s">
                        <div class="product__thumb">
                           <div class="product__thumb-inner fix w-img">
                              <a href="product-details.html">
                                 <img src="assets/img/product/product-3.jpg" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="product__content">
                           <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                              <div class="product__tag">
                                 <a href="#">listing</a>
                              </div>
                              <div class="product__price">
                                 <span>$12</span>
                              </div>
                           </div>
                           <h3 class="product__title">
                              <a href="product-details.html">Findup - Directory & Listing PSD...</a>
                           </h3>
                           <p class="product__author">by <a href="#">Theme Pure</a> in <a href="#">Templates</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                     <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay=".9s">
                        <div class="product__thumb">
                           <div class="product__thumb-inner fix w-img">
                              <a href="product-details.html">
                                 <img src="assets/img/product/product-4.jpg" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="product__content">
                           <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                              <div class="product__tag">
                                 <a href="#">e-commerce</a>
                              </div>
                              <div class="product__price">
                                 <span>$59</span>
                              </div>
                           </div>
                           <h3 class="product__title">
                              <a href="product-details.html">Agota - Clean Minimal eCommerce.</a>
                           </h3>
                           <p class="product__author">by <a href="#">Theme Pure</a> in <a href="#">Templates</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                     <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay="1.2s">
                        <div class="product__thumb">
                           <div class="product__thumb-inner fix w-img">
                              <a href="product-details.html">
                                 <img src="assets/img/product/product-5.jpg" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="product__content">
                           <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                              <div class="product__tag">
                                 <a href="#">License Key</a>
                              </div>
                              <div class="product__price">
                                 <span>$49</span>
                              </div>
                           </div>
                           <h3 class="product__title">
                              <a href="product-details.html">BngTech - IT Solutions WordPress...</a>
                           </h3>
                           <p class="product__author">by <a href="#">Theme Pure</a> in <a href="#">Templates</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                     <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay="1.5s">
                        <div class="product__thumb">
                           <div class="product__thumb-inner fix w-img">
                              <a href="product-details.html">
                                 <img src="assets/img/product/product-6.jpg" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="product__content">
                           <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                              <div class="product__tag">
                                 <a href="#">Construction</a>
                              </div>
                              <div class="product__price">
                                 <span>$49</span>
                              </div>
                           </div>
                           <h3 class="product__title">
                              <a href="product-details.html">BildPress - Construction WordPres.</a>
                           </h3>
                           <p class="product__author">by <a href="#">Theme Pure</a> in <a href="#">Templates</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                     <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay="1.5s">
                        <div class="product__thumb">
                           <div class="product__thumb-inner fix w-img">
                              <a href="product-details.html">
                                 <img src="assets/img/product/product-7.jpg" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="product__content">
                           <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                              <div class="product__tag">
                                 <a href="#">E-commerce</a>
                              </div>
                              <div class="product__price">
                                 <span>$15</span>
                              </div>
                           </div>
                           <h3 class="product__title">
                              <a href="product-details.html">Retbo - eCommerce PSD Template</a>
                           </h3>
                           <p class="product__author">by <a href="#">Theme Pure</a> in <a href="#">Templates</a></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                     <div class="product__item white-bg mb-30 wow fadeInUp" data-wow-delay="1.5s">
                        <div class="product__thumb">
                           <div class="product__thumb-inner fix w-img">
                              <a href="product-details.html">
                                 <img src="assets/img/product/product-8.jpg" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="product__content">
                           <div class="product__meta mb-10 d-flex justify-content-between align-items-center">
                              <div class="product__tag">
                                 <a href="#">Medical</a>
                              </div>
                              <div class="product__price">
                                 <span>$29</span>
                              </div>
                           </div>
                           <h3 class="product__title">
                              <a href="product-details.html">Sycho - Psychology and Counseling.</a>
                           </h3>
                           <p class="product__author">by <a href="#">Theme Pure</a> in <a href="#">Templates</a></p>
                        </div>
                     </div>
                  </div>`;
               ?>
                  
               </div>
               <div class="row d-none">
                  <div class="col-xxl-12">
                     <div class="basic-pagination wow fadeInUp text-center mt-20" data-wow-delay=".2s">
                        <ul>
                           <li>
                              <a href="product.html">
                                 <i class="arrow_left"></i>
                              </a>
                           </li>
                           <li class="active">
                              <a href="#">
                                 <span>1</span>
                              </a>
                           </li>
                           <li >
                              <a href="#">
                                 <span>2</span>
                              </a>
                           </li>
                           <li>
                              <a href="product.html">
                                 <span>3</span>
                              </a>
                           </li>
                           <li>
                              <a href="product.html">
                                 <i class="fal fa-ellipsis-h"></i>
                              </a>
                           </li>
                           <li>
                              <a href="product.html">
                                 <span>30</span>
                              </a>
                           </li>
                           <li>
                              <a href="product.html">
                                 <i class="arrow_right"></i>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- product area end -->

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
            <div class="col-xxl-6 col-xl-6 col-lg col-md-4">
                <div class="trending__more d-flex justify-content-md-end  mb-50 d-none">
                    <a href="product.php" class="m-btn m-btn-border"><span></span>Explore Cloneables</a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            if(isset($p_data_9))
            foreach ($p_data_9 as $key => $value) {
                // កាត់ចំណងជើង និង excerpt
                $product_title = isset($value['product_name']) ? mb_substr($value['product_name'], 0, 30) . ".." : "";
                $excerpt = isset($value['product_content']) ? mb_substr($value['product_content'], 0, 30) . ".." : "";
                $catagory = (isset($value['category']) ? $value['category'] : ($value['category_name']??'Category'));

                // ទាញយកតម្លៃពី database
               //  $priceData = $query->fetchData("product_meta", "min_price", "product_id='{$value['id']}'");

                // ពិនិត្យថា $priceData មានទិន្នន័យឬអត់
                $price = $value['priceUSD']??0 ;// (!empty($priceData) && isset($priceData[0]['min_price'])) ? (int)$priceData[0]['min_price'] : 0;

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
      </div>
   </section>
   <!-- trending area end -->

   <!-- banner area start -->
   <section class="banner__area pb-90 d-none">
      <div class="container">
         <div class="row">
            <div class="col-xxl-6 col-xl-6 col-md-6">
               <div class="banner__item mb-30 wow fadeInUp" data-wow-delay=".3s" data-background="assets/img/banner/banner-1.jpg">
                  <h3 class="banner__title">Designers who changed the web with Markit</h3>
                  <p>He lost his bottle that zonked spend a penny young delinquent bugger.</p>
                  <a href="about.html" class="m-btn m-btn-white banner__more"> <span></span> Learn More</a>
               </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-md-6">
               <div class="banner__item mb-30 wow fadeInUp" data-wow-delay=".7s" data-background="assets/img/banner/banner-2.jpg">
                  <h3 class="banner__title">Professional Websites are made by Markit</h3>
                  <p>He lost his bottle that zonked spend a penny young delinquent bugger.</p>
                  <a href="about.html" class="m-btn m-btn-white banner__more"> <span></span> Learn More</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- banner area end -->

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
</main>

<!-- footer area start -->
<?php include("inc/footer.php"); ?>
<!-- footer area start -->
</body>

</html>