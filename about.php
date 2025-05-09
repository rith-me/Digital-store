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
            <a href="index.html">
               <img class="logo" src="assets/img/logo/Online-store-white.png" alt="logo">
            </a>
         </div>
         <div class="mobile-menu"></div>
         <div class="sidebar__action mt-330">
            <div class="sidebar__login mt-15">
               <a href="#"><i class="far fa-unlock"></i> Log In</a>
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


   <!-- about area start -->
   <section class="about__area pt-100">
      <div class="container">
         <div class="row">
            <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1">
               <div class="about__wrapper">
                  <span class="about__sub-title">About Markit</span>
                  <h3 class="about__title">We're enabling <br> Everyone to create for the website.</h3>
                  <div class="about__thumb w-img wow fadeInUp" data-wow-delay=".3s">
                     <img src="assets/img/about/about-1.jpg" alt="">
                  </div>
                  <div class="about__count pt-50 pb-15 wow fadeInUp" data-wow-delay=".5s">
                     <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                           <div class="about__count-item text-center launche mb-30">
                              <p>LAUNCHED IN</p>
                              <h4><span class="counter">2009</span></h4>
                           </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                           <div class="about__count-item text-center community mb-30">
                              <p>COMMUNITY OF</p>
                              <h4><span class="counter">13,000</span>+</h4>
                           </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                           <div class="about__count-item text-center mission mb-30">
                              <p>MISSION PROGRESS</p>
                              <h4><span class="counter">4.9</span>%</h4>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="about__content">
                     <p class="about__text">Tomfoolery nice one have it cup of tea wind up bugger on your bike mate cobblers Queen's English, it's all gone to pot mush a load of old tosh off his nut I don't want no agro up the duff. Blower excuse my French William squiffy bender young delinquent the little rotter pardon me bubble and squeak baking cakes don't get shirty with me!</p>
                     <p class="about__sub-text">With their varied backgrounds, our engineers collaborate with the other roles at Automattic to define, implement, and improve the experience those engines provide and enable.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- about area end -->

   <!-- brand area start -->
   <div class="brand__area pb-65 pt-80">
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
   <div class="testimonial__area pb-110 fix">
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
                           <p>Tomfoolery chimney pot loo easy peasy twit he lost his bottle lavatory excuse my French up the duff cup of char bender fantastic arse.!</p>
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
                           <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy grub bog no biggie he nicked it what a load of rubbish pear shaped.!</p>
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
                           <p>Tomfoolery chimney pot loo easy peasy twit he lost his bottle lavatory excuse my French up the duff cup of char bender fantastic arse.!</p>
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
                           <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy grub bog no biggie he nicked it what a load of rubbish pear shaped.!</p>
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
                           <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy grub bog no biggie he nicked it what a load of rubbish pear shaped.!</p>
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
                           <p>Tomfoolery chimney pot loo easy peasy twit he lost his bottle lavatory excuse my French up the duff cup of char bender fantastic arse.!</p>
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
                           <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy grub bog no biggie he nicked it what a load of rubbish pear shaped.!</p>
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
                           <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy grub bog no biggie he nicked it what a load of rubbish pear shaped.!</p>
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
                           <p>Loo crikey bubble and sque wind up zonked arg bargy pukka nancy boy grub bog no biggie he nicked it what a load of rubbish pear shaped.!</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- testimonial area end -->

   <!-- cta area start -->
   <section class="cta__area pb-60">
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