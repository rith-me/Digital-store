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

   <!-- page title area -->
   <section class="page__title-area  pt-85">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="page__title-content mb-50">
                  <h2 class="page__title">Latest From The Blog</h2>
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- page title end -->

   <!-- postbox area start -->
   <section class="postbox__area pb-120">
      <div class="container">
         <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8">
               <div class="postbox__wrapper">
                  <article class="postbox__item format-image fix mb-50 wow fadeInUp" data-wow-delay=".2s">
                     <div class="postbox__thumb">
                        <a href="blog-details.html" class="w-img">
                           <img src="assets/img/blog/blog-1.jpg" alt="">
                        </a>
                     </div>
                     <div class="postbox__content">
                        <div class="postbox__meta d-flex mb-10">
                           <div class="postbox__tag mr-20">
                              <a href="#">marketing</a>
                           </div>
                           <div class="postbox__date">
                              <span><i class="fal fa-clock"></i> October 15, 2021</span>
                           </div>
                        </div>
                        <h3 class="postbox__title mb-15"><a href="blog-details.html">Why we decide to build a collaborative UX design tools platform?</a></h3>
                        <div class="postbox__text mb-20">
                           <p>The little rotter absolutely bladdered wind up victoria sponge starkers cack posh jolly good lost the plot nancy boy bonnet plastered.</p>
                        </div>
                        <div class="postbox__author d-flex align-items-center">
                           <div class="postbox__author-thumb mr-15">
                              <img src="assets/img/blog/author/blog-author-1.jpg" alt="">
                           </div>
                           <h5>Post by <a href="#">Justin Case</a> </h5>
                        </div>
                     </div>
                  </article>
                  <article class="postbox__item  format-video fix mb-50 wow fadeInUp" data-wow-delay=".5s">
                     <div class="postbox__thumb postbox__video">
                        <a href="blog-details.html" class="w-img">
                           <img src="assets/img/blog/blog-2.jpg" alt="">
                        </a>
                        <div class="postbox__play">
                           <a href="https://youtu.be/yJg-Y5byMMw" data-fancybox><i class="fas fa-play"></i></a>
                        </div>
                     </div>
                     <div class="postbox__content">
                        <div class="postbox__meta d-flex mb-10">
                           <div class="postbox__tag mr-20">
                              <a href="#">business</a>
                           </div>
                           <div class="postbox__date">
                              <span><i class="fal fa-clock"></i>December 24, 2021</span>
                           </div>
                        </div>
                        <h3 class="postbox__title mb-15"><a href="blog-details.html">Marketplace SEO: Tips for Etsy, Markit & Amazon Handmade</a></h3>
                        <div class="postbox__text mb-20">
                           <p>The little rotter absolutely bladdered wind up victoria sponge starkers cack posh jolly good lost the plot nancy boy bonnet plastered.</p>
                        </div>
                        <div class="postbox__author d-flex align-items-center">
                           <div class="postbox__author-thumb mr-15">
                              <img src="assets/img/blog/author/blog-author-2.jpg" alt="">
                           </div>
                           <h5>Post by <a href="#">Jackson Pot</a> </h5>

                        </div>
                     </div>
                  </article>
                  <div class="postbox__quote mb-50 wow fadeInUp" data-wow-delay=".7s">
                     <blockquote>
                        <h3>What a plonker say william mush bite your arm off brown bread chinwag he legged it the bee's knees lost the plot loo gutted.!</h3>
                        <span>Eleanor Fant</span>
                     </blockquote>
                  </div>
                  <article class="postbox__item  format-image fix mb-50 wow fadeInUp" data-wow-delay=".7s">
                     <div class="postbox__thumb">
                        <a href="blog-details.html" class="w-img">
                           <img src="assets/img/blog/blog-3.jpg" alt="">
                        </a>
                     </div>
                     <div class="postbox__content">
                        <div class="postbox__meta d-flex mb-10">
                           <div class="postbox__tag mr-20">
                              <a href="#">landing</a>
                           </div>
                           <div class="postbox__date">
                              <span><i class="fal fa-clock"></i>April 13, 2021</span>
                           </div>
                        </div>
                        <h3 class="postbox__title mb-15"><a href="blog-details.html">How to get your handmade website found on Google</a></h3>
                        <div class="postbox__text mb-20">
                           <p>The little rotter absolutely bladdered wind up victoria sponge starkers cack posh jolly good lost the plot nancy boy bonnet plastered.</p>
                        </div>
                        <div class="postbox__author d-flex align-items-center">
                           <div class="postbox__author-thumb mr-15">
                              <img src="assets/img/blog/author/blog-author-3.jpg" alt="">
                           </div>
                           <h5>Post by <a href="#">Weir Doe</a> </h5>
                        </div>
                     </div>
                  </article>
                  <article class="postbox__item  format-image fix mb-50 wow fadeInUp" data-wow-delay=".9s">
                     <div class="postbox__thumb">
                        <a href="blog-details.html" class="w-img">
                           <img src="assets/img/blog/blog-4.jpg" alt="">
                        </a>
                     </div>
                     <div class="postbox__content">
                        <div class="postbox__meta d-flex mb-10">
                           <div class="postbox__tag mr-20">
                              <a href="#">Technology</a>
                           </div>
                           <div class="postbox__date">
                              <span><i class="fal fa-clock"></i>March 24, 2021</span>
                           </div>
                        </div>
                        <h3 class="postbox__title mb-15"><a href="blog-details.html">Markit is changing Our biggest announcement Ever!</a></h3>
                        <div class="postbox__text mb-20">
                           <p>The little rotter absolutely bladdered wind up victoria sponge starkers cack posh jolly good lost the plot nancy boy bonnet plastered.</p>
                        </div>
                        <div class="postbox__author d-flex align-items-center">
                           <div class="postbox__author-thumb mr-15">
                              <img src="assets/img/blog/author/blog-author-3.jpg" alt="">
                           </div>
                           <h5>Post by <a href="#">Shahnewaz Sakil</a> </h5>
                        </div>
                     </div>
                  </article>
                  <div class="basic-pagination wow fadeInUp text-center" data-wow-delay=".2s">
                     <ul>
                        <li>
                           <a href="blog.html">
                              <i class="arrow_left"></i>
                           </a>
                        </li>
                        <li>
                           <a href="blog.html">
                              <span>1</span>
                           </a>
                        </li>
                        <li class="active">
                           <a href="#">
                              <span>2</span>
                           </a>
                        </li>
                        <li>
                           <a href="blog.html">
                              <span>3</span>
                           </a>
                        </li>
                        <li>
                           <a href="blog.html">
                              <i class="fal fa-ellipsis-h"></i>
                           </a>
                        </li>
                        <li>
                           <a href="blog.html">
                              <span>30</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <i class="arrow_right"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4">
               <div class="blog__sidebar-wrapper  ml-30">
                  <div class="blog__sidebar mb-30">
                     <div class="sidebar__widget mb-30">
                        <div class="sidebar__widget-content">
                           <div class="sidebar__search-wrapper">
                              <form action="#">
                                 <input type="text" placeholder="Search ...">
                                 <button type="submit"><i class="fal fa-search"></i></button>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar__widget mb-30">
                        <div class="sidebar__widget-title">
                           <h3>Recent News</h3>
                        </div>
                        <div class="sidebar__widget-content">
                           <div class="rc__post-wrapper">
                              <div class="rc__post d-flex align-items-center">
                                 <div class="rc__thumb mr-15">
                                    <a href="blog-details.html"><img src="assets/img/blog/sm/blog-sm-1.jpg" alt=""></a>
                                 </div>
                                 <div class="rc__content">
                                    <div class="rc__meta">
                                       <span>October 15, 2021</span>
                                    </div>
                                    <h6 class="rc__title"><a href="blog-details.html">Communication Between Departments</a></h6>
                                 </div>
                              </div>
                              <div class="rc__post d-flex align-items-center">
                                 <div class="rc__thumb mr-15">
                                    <a href="blog-details.html"><img src="assets/img/blog/sm/blog-sm-2.jpg" alt=""></a>
                                 </div>
                                 <div class="rc__content">
                                    <div class="rc__meta">
                                       <span>March 26, 2021</span>
                                    </div>
                                    <h6 class="rc__title"><a href="blog-details.html">How to build outside links for your shop SEO</a></h6>
                                 </div>
                              </div>
                              <div class="rc__post d-flex align-items-center">
                                 <div class="rc__thumb mr-15">
                                    <a href="blog-details.html"><img src="assets/img/blog/sm/blog-sm-3.jpg" alt=""></a>
                                 </div>
                                 <div class="rc__content">
                                    <div class="rc__meta">
                                       <span>October 15, 2021</span>
                                    </div>
                                    <h6 class="rc__title"><a href="blog-details.html">20 creative content ideas to post on Instagram</a></h6>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar__widget mb-30">
                        <div class="sidebar__widget-title">
                           <h3>Categories</h3>
                        </div>
                        <div class="sidebar__widget-content">
                           <div class="sidebar__catagory">
                              <ul>
                                 <li><a href="blog.html">Web Design (6)</a></li>
                                 <li><a href="blog.html"> Web Development (14)</a></li>
                                 <li><a href="blog.html">Graphics (12)</a></li>
                                 <li><a href="blog.html">IOS/Android Design (10)</a></li>
                                 <li><a href="blog.html">App & Saas (4)</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar__widget">
                        <div class="sidebar__widget-title">
                           <h3>Popular Tags</h3>
                        </div>
                        <div class="sidebar__widget-content">
                           <div class="tags">
                              <a href="#">Business</a>
                              <a href="#">Landing</a>
                              <a href="#">Design</a>
                              <a href="#">Digital</a>
                              <a href="#">Technology</a>
                              <a href="#">UI/UX</a>
                              <a href="#">Features</a>
                              <a href="#">Pix Saas Blog</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="sidebar__banner" data-background="assets/img/banner/sidebar-banner.jpg">
                     <h4 class="sidebar__banner-title">Check Out <br>Our free Templates</h4>
                     <a href="product.html" class="m-btn m-btn-white"> <span></span> free template</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- postbox area end -->

</main>

<!-- footer area start -->
<?php include("inc/footer.php"); ?>
<!-- footer area start -->
</body>

</html>