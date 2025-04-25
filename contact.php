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

   <!-- contact area start -->
   <section class="contact__area pt-105 pb-145">
      <div class="contact__shape">
         <img class="man-1" src="assets/img/icon/sign/man-1.png" alt="">
         <img class="circle" src="assets/img/icon/sign/circle.png" alt="">
         <img class="zigzag" src="assets/img/icon/sign/zigzag.png" alt="">
         <img class="dot" src="assets/img/icon/sign/dot.png" alt="">
         <img class="bg" src="assets/img/icon/sign/sign-up.png" alt="">
      </div>
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="page__title-wrapper mb-55">
                  <h2 class="page__title-2">Leave Us a Message.</h2>
                  <p>Jolly good bevvy butty it's all gone to pot that quaint so I said cheers.</p>
               </div>
            </div>
         </div>
         <div class="row">

            <div class="col-xxl-12 col-xl-12">
               <div class="contact__wrapper  white-bg">
                  <div class="contact__form">
                     <form action="#">
                        <div class="row">
                           <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                              <div class="contact__input-wrapper mb-25">
                                 <h5>Full Name</h5>
                                 <div class="contact__input">
                                    <input type="text" placeholder="Full name">
                                    <i class="fal fa-user"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                              <div class="contact__input-wrapper mb-25">
                                 <h5>Work email</h5>
                                 <div class="contact__input">
                                    <input type="text" placeholder="e-mail address">
                                    <i class="fal fa-envelope"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                              <div class="contact__input-wrapper mb-25">
                                 <h5>Company Name</h5>
                                 <div class="contact__input">
                                    <input type="text" placeholder="Company Name">
                                    <i class="fal fa-smile"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                              <div class="contact__input-wrapper mb-25">
                                 <h5>Website</h5>
                                 <div class="contact__input">
                                    <input type="text" placeholder="Website">
                                    <i class="fal fa-globe"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xxl-12">
                              <div class="contact__input-wrapper mb-25">
                                 <h5>Message</h5>
                                 <div class="contact__input textarea">
                                    <textarea placeholder="Tell us a bil about your project"></textarea>
                                    <i class="fal fa-comment"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-xxl-12">
                              <button type="submit" class="m-btn m-btn-4"> <span></span> submit </button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <!-- <div class="col-xxl-2 col-xl-2">
               <div class="contact__map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.4781197396497!2d104.92751731539378!3d11.56210899210271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095164d0deffb7%3A0xa0cc1982d50be5a1!2sPhnom%20Penh%2C%20Cambodia!5e0!3m2!1sen!2sus!4v1617728495854!5m2!1sen!2sus"></iframe>
               </div>
            </div> -->
         </div>
      </div>
   </section>
   <!-- contact area end -->

   <!-- contact info area start -->
   <section class="contact__info pt-20 pb-120">
      <div class="contact__info-shape">
         <img src="assets/img/icon/contact/contact-bg.png" alt="">
      </div>
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="page__title-wrapper text-center mb-55">
                  <h2 class="page__title-2">We'd love to <br>hear from you</h2>
                  <p>Stay in touch with us</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
               <div class="contact__item text-center white-bg mb-30 transition-3">
                  <div class="contact__icon mb-30 d-flex justify-content-center align-items-center">
                     <img src="assets/img/icon/contact/office.png" alt="">
                  </div>
                  <div class="contact__content">
                     <h4 class="contact__content-title">Austin Texas, 7 Avenue,</h4>
                     <h4 class="contact__content-title">New York, 4223</h4>
                  </div>
               </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
               <div class="contact__item text-center white-bg mb-30 transition-3">
                  <div class="contact__icon mb-30 d-flex justify-content-center align-items-center">
                     <img src="assets/img/icon/contact/mail.png" alt="">
                  </div>
                  <div class="contact__content">
                     <h4 class="contact__content-title"><a href="mailto:support@markit.com">support@markit.com</a></h4>
                     <h4 class="contact__content-title"><a href="mailto:info@markit.com">info@markit.com</a></h4>
                  </div>
               </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
               <div class="contact__item text-center white-bg mb-30 transition-3">
                  <div class="contact__icon mb-30 d-flex justify-content-center align-items-center">
                     <img src="assets/img/icon/contact/phone.png" alt="">
                  </div>
                  <div class="contact__content">
                     <h4 class="contact__content-title"><a href="tel:+(624)-7600-96">+(624) 7600 96</a> </h4>
                     <h4 class="contact__content-title"><a href="tel:+(420)-244-26">+(420) 244 26</a> </h4>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- contact info area end -->

</main>

<!-- footer area start -->
<?php include("inc/footer.php"); ?>
<!-- footer area start -->
</body>

</html>