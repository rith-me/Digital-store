<?php require('inc/header.php'); ?>
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

   <!-- documentation area start -->
   <section class="documentation__area pt-100 pb-100">
      <div class="container">
         <div class="row">
            <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3">
               <div class="page__title-wrapper text-center mb-60">
                  <h2 class="page__title-2">Search <br>Documentation</h2>
                  <p>Lets Find what You Are Looking For!</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
               <div class="documentation__search text-center mb-90">
                  <form action="#">
                     <div class="documentation__search-inner d-sm-flex justify-content-center align-items-center">
                        <div class="documentation__search-input">
                           <span><i class="far fa-search"></i></span>
                           <input type="text" placeholder="Search Documentation...">
                        </div>
                        <button type="submit" class="m-btn ml-20"> <span></span> search</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="documentation__item gradient-pink mb-30 transition-3 text-center">
                  <div class="documentation__icon mb-30">
                     <img src="assets/img/icon/documentation/shop-bag.png" alt="">
                  </div>
                  <div class="documentation__content">
                     <h3 class="documentation__title"><a href="contact.html">Getting Started</a></h3>
                     <p>Do one on your bike mate why geeza chancer.</p>
                  </div>
               </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="documentation__item gradient-blue mb-30 transition-3 text-center">
                  <div class="documentation__icon mb-30">
                     <img src="assets/img/icon/documentation/shop-bag.png" alt="">
                  </div>
                  <div class="documentation__content">
                     <h3 class="documentation__title"><a href="about.html">Knowledge Base</a></h3>
                     <p>Do one on your bike mate why geeza chancer.</p>
                  </div>
               </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="documentation__item gradient-orange mb-30 transition-3 text-center">
                  <div class="documentation__icon mb-30">
                     <img src="assets/img/icon/documentation/shop-bag.png" alt="">
                  </div>
                  <div class="documentation__content">
                     <h3 class="documentation__title"><a href="product.html">Templates</a></h3>
                     <p>Do one on your bike mate why geeza chancer.</p>
                  </div>
               </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="documentation__item gradient-purple mb-30 transition-3 text-center">
                  <div class="documentation__icon mb-30">
                     <img src="assets/img/icon/documentation/shop-bag.png" alt="">
                  </div>
                  <div class="documentation__content">
                     <h3 class="documentation__title"><a href="blog.html">News & Updates</a></h3>
                     <p>Do one on your bike mate why geeza chancer.</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-xxl-12">
               <div class="support__thumb text-center mt-40">
                  <a href="#">
                     <img src="assets/img/support/profile/s-p-1.jpg" alt="">
                     <img src="assets/img/support/profile/s-p-2.jpg" alt="">
                     <img src="assets/img/support/profile/s-p-3.jpg" alt="">
                     <img src="assets/img/support/profile/s-p-4.jpg" alt="">
                  </a>
                  <p>Contact us directly at <a href="mailto:support@markit.com">support@markit.com</a> </p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- documentation area end -->


   <!-- blog area start -->
   <section class="blog__area pt-105 pb-110 grey-bg-2">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="section__title-wrapper mb-65">
                  <h2 class="section__title">Latest blog</h2>
                  <p>A load of old tosh the full monty sloshed pukka squiffy.</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
               <div class="blog__wrapper white-bg mb-30 transition-3">
                  <div class="blog__single">
                     <div class="blog__icon"></div>
                     <h3 class="blog__title">
                        <a href="blog.html">How do I purchase an item?</a>
                     </h3>
                  </div>
                  <div class="blog__single">
                     <div class="blog__icon"></div>
                     <h3 class="blog__title">
                        <a href="blog.html">How to download your items</a>
                     </h3>
                  </div>
                  <div class="blog__single">
                     <div class="blog__icon"></div>
                     <h3 class="blog__title">
                        <a href="blog.html">Licenses overview?</a>
                     </h3>
                  </div>
                  <div class="blog__single">
                     <div class="blog__icon"></div>
                     <h3 class="blog__title">
                        <a href="blog.html">Community jobs board.</a>
                     </h3>
                  </div>
               </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
               <div class="blog__wrapper white-bg mb-30 transition-3">
                  <div class="blog__single">
                     <div class="blog__icon"></div>
                     <h3 class="blog__title">
                        <a href="blog.html">How to add a feature product</a>
                     </h3>
                  </div>
                  <div class="blog__single">
                     <div class="blog__icon"></div>
                     <h3 class="blog__title">
                        <a href="blog.html">Critique my site?</a>
                     </h3>
                  </div>
                  <div class="blog__single">
                     <div class="blog__icon"></div>
                     <h3 class="blog__title">
                        <a href="blog.html">How do I purchase an item?</a>
                     </h3>
                  </div>
                  <div class="blog__single">
                     <div class="blog__icon"></div>
                     <h3 class="blog__title">
                        <a href="blog.html">Marketing & SEO sdvice</a>
                     </h3>
                  </div>
               </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
               <div class="blog__wrapper white-bg mb-30 transition-3">
                  <div class="blog__single">
                     <div class="blog__icon"></div>
                     <h3 class="blog__title">
                        <a href="#">Does the latest Stencil</a>
                     </h3>
                  </div>
                  <div class="blog__single">
                     <div class="blog__icon"></div>
                     <h3 class="blog__title">
                        <a href="blog.html">How do I purchase an item?</a>
                     </h3>
                  </div>
                  <div class="blog__single">
                     <div class="blog__icon"></div>
                     <h3 class="blog__title">
                        <a href="blog.html">I've Forgotten name or password</a>
                     </h3>
                  </div>
                  <div class="blog__single">
                     <div class="blog__icon"></div>
                     <h3 class="blog__title">
                        <a href="blog.html">Removal of royal mail from</a>
                     </h3>
                  </div>
               </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
               <div class="blog__wrapper white-bg mb-30 transition-3">
                  <div class="blog__single">
                     <div class="blog__icon"></div>
                     <h3 class="blog__title">
                        <a href="blog.html">BigCommerce developers</a>
                     </h3>
                  </div>
                  <div class="blog__single">
                     <div class="blog__icon"></div>
                     <h3 class="blog__title">
                        <a href="blog.html">Apps & Integrations advice</a>
                     </h3>
                  </div>
                  <div class="blog__single">
                     <div class="blog__icon"></div>
                     <h3 class="blog__title">
                        <a href="blog.html">Theme support older stores</a>
                     </h3>
                  </div>
                  <div class="blog__single">
                     <div class="blog__icon"></div>
                     <h3 class="blog__title">
                        <a href="blog.html">Knowledge Base</a>
                     </h3>
                  </div>
               </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
               <div class="blog__wrapper white-bg mb-30 transition-3">
                  <div class="blog__single">
                     <div class="blog__icon"></div>
                     <h3 class="blog__title">
                        <a href="blog.html">Tracking carrier option list</a>
                     </h3>
                  </div>
                  <div class="blog__single">
                     <div class="blog__icon"></div>
                     <h3 class="blog__title">
                        <a href="blog.html">Community Jobs Board</a>
                     </h3>
                  </div>
                  <div class="blog__single">
                     <div class="blog__icon"></div>
                     <h3 class="blog__title">
                        <a href="blog.html">How do I purchase an item?</a>
                     </h3>
                  </div>
                  <div class="blog__single">
                     <div class="blog__icon"></div>
                     <h3 class="blog__title">
                        <a href="blog.html">What is Item Support?</a>
                     </h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- blog area end -->

   <!-- cta area start -->
   <section class="cta__area pt-110 pb-60">
      <div class="container">
         <div class="row">
            <div class="col-xxl-6 offset-xxl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
               <div class="section__title-wrapper text-center mb-45 wow fadeInUp" data-wow-delay=".3s">
                  <h2 class="section__title">Join The Community</h2>
                  <p>Thousands of Markit Brands have made the swich.Text marketing with the customer in mind!</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xxl-6 offset-xxl-3">
               <div class="cta__content text-center wow fadeInUp" data-wow-delay=".5s">
                  <a href="pricing.html" class="m-btn m-btn-border-2 cta__btn active"> <span></span> Start 14 Day Free Trial</a>
                  <a href="pricing.html" class="m-btn m-btn-border-2 cta__btn"> <span></span> Claim Free Demo</a>
                  <p>Start Sending Texts - No Credit Card Necessary</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- cta area end -->

   <!-- community area start -->
   <div class="community__area pb-140">
      <div class="container">
         <div class="row">
            <div class="col-xxl-10 offset-xxl-1">
               <div class="community__wrapper p-relative wow fadeInUp" data-wow-delay=".7s">
                  <img class="community-map" src="assets/img/shape/map.png" alt="">
                  <div class="community__person">
                     <img class="com-1" src="assets/img/community/com-1.jpg" alt="">
                     <img class="com-2" src="assets/img/community/com-2.jpg" alt="">
                     <img class="com-3" src="assets/img/community/com-3.jpg" alt="">
                     <img class="com-4" src="assets/img/community/com-4.jpg" alt="">
                     <img class="com-5" src="assets/img/community/com-5.jpg" alt="">
                     <img class="com-6" src="assets/img/community/com-6.jpg" alt="">
                     <img class="com-7" src="assets/img/community/com-7.jpg" alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- community area end -->
</main>

<!-- footer area start -->
<?php include("inc/footer.php"); ?>
<!-- footer area start -->
</body>

</html>