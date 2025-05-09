<?php require('inc/header.php');
$api = new APIClient();

$query = new query();
$shopAction = new shopAction();
if (!isset($_GET['id'])) {
   header("location: index.php");
} else {
   $p_id = $_GET['id'];
   // $p_data = $query->fetchData("products", "*", "id='$p_id' and product_status='publish'");
   // if (count($p_data) == 0) {
   //    header("location: index.php");
   // }
   $response = $api->callAPI("/public/products/$p_id");
   if($response['status_code'] != 200){
      header("location: index.php");
   }else
   $p_data = $response['data']??[];

   $response = $api->callAPI("/public/products"); // Example GET request
   $p_data_9 = $response['data']['data']??null;
}
$price = $p_data['priceUSD']??0;//(int)$query->fetchData("product_meta", "min_price", "product_id='$p_id'")[0]['min_price'];
$date = date("F j, Y", strtotime(isset($p_data['publish_date']) ? $p_data['publish_date'] : $p_data['created_at'] ?? null));
$update_date = date("F j, Y", strtotime(isset($p_data['product_modified']) ? $p_data['product_modified'] : $p_data['updated_at'] ?? null));
$image = $p_data['image_url'];
$title = $p_data['product_name'];
$buy_now_btn_text = "Add to Cart";
$buy_now_btn_link = "?id=$p_id&add_to_cart=$p_id&msg=msg";
$version = "Latest";
if ($price == 0) {
   $price = "FREE!";
   $buy_now_btn_text = "Download Now";
   $buy_now_btn_link = "?id=$p_id&download=$p_id";
} else if ($shopAction->isPurchased($p_id)) {
   $price = "Already Purchased!";
   $buy_now_btn_text = "Download Now";
   $buy_now_btn_link = "?id=$p_id&download=$p_id";
}
if(!isset($_SESSION['token'])){
   $buy_now_btn_link = "sign-in.php";
}
?>
<!-- header area end -->

<!-- cart mini area start -->
<?php include("inc/cart.php"); ?>
<!-- sidebar area end -->
<div class="body-overlay"></div>
<!-- sidebar area end -->

<main>

   <!-- bg shape area start -->
   <div class="bg-shape">
      <img src="assets/img/shape/shape-1.png" alt="">
   </div>
   <!-- bg shape area end -->

   <!-- page title area -->
   <section class="page__title-area  pt-85">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="page__title-content mb-50">
                  <h2 class="page__title"><?php echo $title; ?></h2>
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="product.php">Product</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Current</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- page title end -->

   <!-- product area start -->
   <section class="product__area pb-115">
      <div class="container">
         <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8">
               <div class="product__wrapper">
                  <div class="product__details-thumb w-img mb-30">
                     <img src="<?php if($image) echo $image; else echo 'assets/img/banner/sidebar-banner.jpg'?>" alt="product-details">
                  </div>
                  <div class="product__details-content">
                     <div class="product__tab mb-40">
                        <ul class="nav nav-tabs" id="proTab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true">Overview</button>
                           </li>
                           <li class="nav-item d-none" role="presentation">
                              <button class="nav-link" id="support-tab" data-bs-toggle="tab" data-bs-target="#support" type="button" role="tab" aria-controls="support" aria-selected="false">Support</button>
                           </li>
                        </ul>
                     </div>
                     <div class="product__tab-content">
                        <div class="tab-content" id="proTabContent">
                           <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                              <div class="product__overview">
                                 <h3 class="product__overview-title">Product Details</h3>
                                 <?php echo $p_data['product_detail']; ?>
                                 <div class="product__social m-social grey-bg-2">
                                    <h4 class="product__social-title">Follow us</h4>
                                    <ul>
                                       <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                       <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                       <li><a href="#" class="pin"><i class="fab fa-pinterest-p"></i></a></li>
                                       <li><a href="#" class="link"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="support" role="tabpanel" aria-labelledby="support-tab">
                              <div class="product__support">
                                 <div class="latest-comments mb-55">
                                    <ul>
                                       <li>
                                          <div class="comments-box grey-bg-2">
                                             <div class="comments-info d-flex">
                                                <div class="comments-avatar mr-15">
                                                   <img src="assets/img/product/support/sup-1.jpg" alt="">
                                                </div>
                                                <div class="avatar-name">
                                                   <h5><?php echo $p_data['seller']??'Jason Response'; ?></h5>
                                                   <span class="post-meta">Author</span>
                                                </div>
                                             </div>
                                             <div class="comments-text ml-65">
                                                <p>Harry codswalp boot porkies up the duff morish cor blimey guvnor fa about blower twit Why it's your round matie.</p>
                                             </div>
                                          </div>
                                       </li>
                                       <li class="children">
                                          <div class="comments-box grey-bg-2">
                                             <div class="comments-info d-flex">
                                                <div class="comments-avatar mr-15">
                                                   <img src="assets/img/product/support/sup-2.jpg" alt="">
                                                </div>
                                                <div class="avatar-name">
                                                   <h5>Hilary Ouse</h5>
                                                   <span class="post-meta">Author</span>
                                                </div>
                                             </div>
                                             <div class="comments-text ml-65">
                                                <p>I don't want no agro dropped a clanger do one wind.!</p>
                                             </div>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="post-comment-form wow fadeInUp" data-wow-delay=".2s">
                                    <h4 class="post-comment-title mb-25">Add a comment</h4>
                                    <form action="#">
                                       <div class="post-comment-inner">
                                          <div class="row">
                                             <div class="col-xl-12">
                                                <div class="post-input d-sm-flex align-items-center mb-10">
                                                   <textarea placeholder="Comment for the author..."></textarea>
                                                   <button type="submit" class="m-btn m-btn-4"> <span></span> Post Comment</button>
                                                </div>
                                             </div>
                                             <div class="col-xl-12">
                                                <div class="post-agree d-flex align-items-center">
                                                   <input class="m-check-input" type="checkbox" id="m-agree">
                                                   <label class="m-check-label" for="m-agree">Email me when this comment receives a reply</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4">
               <div class="product__details-sidebar ml-30">
                  <div class="product__proprietor white-bg mb-30">
                     <div class="product__proprietor-head mb-25">
                        <div class="product__prorietor-info mb-20 d-flex justify-content-between">
                           <div class="product__proprietor-avater d-flex align-items-center">
                              <div class="product__proprietor-thumb">
                                 <img src="assets/img/product/proprietor/profile.png" alt="">
                              </div>
                              <div class="product__proprietor-name">
                                 <h5><a href="#"><?php echo $p_data['seller']??'Justin Case'; ?></a></h5>
                                 <a href="#">View Profile</a>
                              </div>
                           </div>
                           <div class="product__proprietor-price">
                              <span class="d-flex align-items-start"><?php echo '$'.$price; ?></span>
                           </div>
                        </div>
                        <div class="product__proprietor-text">
                           <p>Pay once and get lifetime free updates.</p>
                        </div>
                     </div>
                     <div class="product__proprietor-body fix">
                        <ul class="mb-10 fix">
                           <li class="d-none">
                              <h6>Downloads:</h6>
                              <span>44</span>
                           </li>

                           <li class="d-none">
                              <h6>Version:</h6>
                              <span><?php echo $version; ?></span>
                           </li>
                           <li class="d-none">
                              <h6>Released On:</h6>
                              <span><?php echo $date; ?></span>
                           </li>
                           <li>
                              <h6>Last Update:</h6>
                              <span><?php echo $update_date; ?></span>
                           </li>
                           <li class="d-none">
                              <h6>Framework:</h6>
                              <span>Redux:</span>
                           </li>
                        </ul>
                        <a href="<?php echo $buy_now_btn_link; ?>" class="m-btn m-btn-2 w-100 mb-20" > <span></span> <?php echo $buy_now_btn_text; ?></a>
                        <!-- <a href="pricing.php" class="m-btn m-btn-border w-100"> <span></span> Preview Project</a> -->
                     </div>
                  </div>
                  <div class="sidebar__banner d-none" data-background="assets/img/banner/sidebar-banner.jpg">
                     <h4 class="sidebar__banner-title">Check Out <br>Our free Templates</h4>
                     <a href="product.php" class="m-btn m-btn-white"> <span></span> free template</a>
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