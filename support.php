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

   <!-- support area start -->
   <section class="support__area po-rel-z1 pt-100 pb-100">
      <div class="support__shape wow fadeInLeft" data-wow-delay=".9s">
         <img src="assets/img/bg/support-bg.png" alt="">
      </div>
      <div class="container">
         <div class="row">
            <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3">
               <div class="page__title-wrapper text-center mb-60">
                  <h2 class="page__title-2">Welcome! <br>How can we help?</h2>
                  <p>Our support forums and make your support experience better.</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
               <div class="support__item mb-30 text-center white-bg transition-3 wow fadeInUp" data-wow-delay=".3s">
                  <div class="support__icon mb-30">
                     <img src="assets/img/support/suport-1.png" alt="">
                  </div>
                  <div class="support__content">
                     <h3 class="support__title">Customer Support</h3>
                     <p>Oxford smashing Harry spend a penny get stuffed mate cup of char It's your round.</p>
                     <a href="contact.html" class="m-btn m-btn-border m-btn-border-3">Submit Ticket</a>
                  </div>
               </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
               <div class="support__item mb-30 text-center white-bg transition-3 wow fadeInUp" data-wow-delay=".5s">
                  <div class="support__icon mb-30 d-flex justify-content-center align-items-end">
                     <img src="assets/img/support/suport-2.png" alt="">
                  </div>
                  <div class="support__content">
                     <h3 class="support__title">Need Customization</h3>
                     <p>Oxford smashing Harry spend a penny get stuffed mate cup of char It's your round.</p>
                     <a href="contact.html" class="m-btn m-btn-border m-btn-border-3">Submit Ticket</a>
                  </div>
               </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
               <div class="support__item mb-30 text-center white-bg transition-3  wow fadeInUp" data-wow-delay=".7s">
                  <div class="support__icon mb-30 d-flex justify-content-center align-items-end">
                     <img src="assets/img/support/suport-3.png" alt="">
                  </div>
                  <div class="support__content">
                     <h3 class="support__title">Support Includes</h3>
                     <p>Oxford smashing Harry spend a penny get stuffed mate cup of char It's your round.</p>
                     <a href="contact.html" class="m-btn m-btn-border m-btn-border-3">Submit Ticket</a>
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
   <!-- support area end -->

   <!-- faq area start -->
   <section class="faq__area grey-bg-2 pt-105 pb-125">
      <div class="container">
         <div class="row">
            <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
               <div class="section__title-wrapper text-center mb-65">
                  <h2 class="section__title">Frequently Asked Questions</h2>
                  <p>A load of old tosh the full monty sloshed pukka squiffy.</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-3">
               <div class="faq__tab wow fadeInLeft" data-wow-delay=".3s">
                  <ul class="nav nav-tabs" id="faqTab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="sale-tab" data-bs-toggle="tab" data-bs-target="#sale" type="button" role="tab" aria-controls="sale" aria-selected="true">Sales</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="template-tab" data-bs-toggle="tab" data-bs-target="#template" type="button" role="tab" aria-controls="template" aria-selected="false">Templates</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ui-tab" data-bs-toggle="tab" data-bs-target="#ui" type="button" role="tab" aria-controls="ui" aria-selected="false">UI Design </button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="xd-tab" data-bs-toggle="tab" data-bs-target="#xd" type="button" role="tab" aria-controls="xd" aria-selected="false">XD Files</button>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-9">
               <div class="faq__tab-content wow fadeInRight" data-wow-delay=".7s">
                  <div class="tab-content" id="faqTabContent">
                     <div class="tab-pane fade show active" id="sale" role="tabpanel" aria-labelledby="sale-tab">
                        <div class="accordion" id="sale-accordion">
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Which plan should I choose?
                                 </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#sale-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwo">
                                 <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Do you offer custom services & development?
                                 </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#sale-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThree">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What are your office hours?
                                 </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#sale-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingFour">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Can I get support for the free version?
                                 </button>
                              </h2>
                              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#sale-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingFive">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Do your products support RTL?
                                 </button>
                              </h2>
                              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#sale-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="template" role="tabpanel" aria-labelledby="template-tab">
                        <div class="accordion" id="template-accordion">
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingSix">
                                 <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Do you offer custom services & development?
                                 </button>
                              </h2>
                              <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingSix" data-bs-parent="#template-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingSev">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSev" aria-expanded="false" aria-controls="collapseSev">
                                    What are your office hours?
                                 </button>
                              </h2>
                              <div id="collapseSev" class="accordion-collapse collapse" aria-labelledby="headingSev" data-bs-parent="#template-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingEig">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEig" aria-expanded="false" aria-controls="collapseEig">
                                    Can I get support for the free version?
                                 </button>
                              </h2>
                              <div id="collapseEig" class="accordion-collapse collapse" aria-labelledby="headingEig" data-bs-parent="#template-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingNine">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    Do your products support RTL?
                                 </button>
                              </h2>
                              <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#template-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTen">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                    Which plan should I choose?
                                 </button>
                              </h2>
                              <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#template-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="ui" role="tabpanel" aria-labelledby="ui-tab">
                        <div class="accordion" id="ui-accordion">
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingEle">
                                 <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEle" aria-expanded="false" aria-controls="collapseEle">
                                    Do you offer custom services & development?
                                 </button>
                              </h2>
                              <div id="collapseEle" class="accordion-collapse collapse show" aria-labelledby="headingEle" data-bs-parent="#ui-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwl">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwl" aria-expanded="false" aria-controls="collapseTwl">
                                    What are your office hours?
                                 </button>
                              </h2>
                              <div id="collapseTwl" class="accordion-collapse collapse" aria-labelledby="headingTwl" data-bs-parent="#ui-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingThi">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThi" aria-expanded="false" aria-controls="collapseThi">
                                    Can I get support for the free version?
                                 </button>
                              </h2>
                              <div id="collapseThi" class="accordion-collapse collapse" aria-labelledby="headingThi" data-bs-parent="#ui-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingFourth">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourth" aria-expanded="false" aria-controls="collapseFourth">
                                    Do your products support RTL?
                                 </button>
                              </h2>
                              <div id="collapseFourth" class="accordion-collapse collapse" aria-labelledby="headingFourth" data-bs-parent="#ui-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingFiveth">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFivth" aria-expanded="true" aria-controls="collapseFivth">
                                    Which plan should I choose?
                                 </button>
                              </h2>
                              <div id="collapseFivth" class="accordion-collapse collapse" aria-labelledby="headingFiveth" data-bs-parent="#ui-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="xd" role="tabpanel" aria-labelledby="xd-tab">
                        <div class="accordion" id="xd-accordion">
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingSixth">
                                 <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixth" aria-expanded="false" aria-controls="collapseSixth">
                                    Do you offer custom services & development?
                                 </button>
                              </h2>
                              <div id="collapseSixth" class="accordion-collapse collapse show" aria-labelledby="headingSixth" data-bs-parent="#xd-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingSevth">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSevth" aria-expanded="false" aria-controls="collapseSevth">
                                    What are your office hours?
                                 </button>
                              </h2>
                              <div id="collapseSevth" class="accordion-collapse collapse" aria-labelledby="headingSevth" data-bs-parent="#xd-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingEigth">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEigth" aria-expanded="false" aria-controls="collapseEigth">
                                    Can I get support for the free version?
                                 </button>
                              </h2>
                              <div id="collapseEigth" class="accordion-collapse collapse" aria-labelledby="headingEigth" data-bs-parent="#xd-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingNieth">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNieth" aria-expanded="false" aria-controls="collapseNieth">
                                    Do your products support RTL?
                                 </button>
                              </h2>
                              <div id="collapseNieth" class="accordion-collapse collapse" aria-labelledby="headingNieth" data-bs-parent="#xd-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingTwth">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwth" aria-expanded="true" aria-controls="collapseTwth">
                                    Which plan should I choose?
                                 </button>
                              </h2>
                              <div id="collapseTwth" class="accordion-collapse collapse" aria-labelledby="headingTwth" data-bs-parent="#xd-accordion">
                                 <div class="accordion-body">
                                    <p>Only a quid cor blimey guvnor jolly good brolly gutted mate cup of tea cheers it grub blatant, some dodgy chav william buggered my good sir owt to do with me the bee's knees bubble and squeak.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- faq area end -->

   <!-- blog area start -->
   <section class="blog__area pt-105 pb-110">
      <div class="container">
         <div class="row">
            <div class="col-xxl-11 offset-xxl-1">
               <div class="section__title-wrapper mb-65">
                  <h2 class="section__title">Latest blog</h2>
                  <p>A load of old tosh the full monty sloshed pukka squiffy.</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xxl-11 offset-xxl-1 col-xl-11">
               <div class="row">
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                     <div class="blog__item mb-35">
                        <p class="blog__text">
                           <a href="blog-details.html">He lost his bottle hanky panky that super mufty spiffing bobby pardon me geeza lemon.</a>
                        </p>
                     </div>
                     <div class="blog__item mb-35">
                        <p class="blog__text">
                           <a href="blog-details.html">Oxford super are you taking the piss me old mucker boot owt to do with me the bee's knees.</a>
                        </p>
                     </div>
                     <div class="blog__item mb-35">
                        <p class="blog__text">
                           <a href="blog-details.html">David, it's your round wellies sloshed only a quid bubble and squeak mufty chap.</a>
                        </p>
                     </div>
                     <div class="blog__item mb-35">
                        <p class="blog__text">
                           <a href="blog-details.html">Jeffrey faff about A bit of how's your father he lost his bottle, butty cras skive off I give.</a>
                        </p>
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                     <div class="blog__item mb-35">
                        <p class="blog__text">
                           <a href="blog-details.html">Jeffrey faff about A bit of how's your father he lost his bottle, butty cras skive.</a>
                        </p>
                     </div>
                     <div class="blog__item mb-35">
                        <p class="blog__text">
                           <a href="blog-details.html">Lurgy don't get shirty with me blower posh porkies spend a penny tickety boo mufty .</a>
                        </p>
                     </div>
                     <div class="blog__item mb-35">
                        <p class="blog__text">
                           <a href="blog-details.html">He lost his bottle hanky panky that super mufty spiffing bobby pardon me geeza lemon.</a>
                        </p>
                     </div>
                     <div class="blog__item mb-35">
                        <p class="blog__text">
                           <a href="blog-details.html">Oxford super are you taking the piss me old mucker boot owt to do with me the bee's knees.</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- blog area end -->

   <!-- cta area start -->
   <section class="cta__area pb-145">
      <div class="container">
         <div class="cta__bg cta__inner pt-90 pb-90">
            <div class="row">
               <div class="col-xxl-6 offset-xxl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                  <div class="section__title-wrapper text-center mb-45 wow fadeInUp" data-wow-delay=".3s">
                     <h2 class="section__title text-white">Join The Community</h2>
                     <p class="text-white opacity-7">Thousands of Markit Brands have made the swich.Text marketing with the customer in mind!</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xxl-6 offset-xxl-3">
                  <div class="cta__content text-center wow fadeInUp" data-wow-delay=".5s">
                     <a href="pricing.html" class="m-btn m-btn-white-2 cta__btn"> <span></span> Start 14 Day Free Trial</a>
                     <a href="pricing.html" class="m-btn m-btn-border-4 cta__btn"> <span></span> Claim Free Demo</a>
                     <p class="text-white opacity-7">Start Sending Texts - No Credit Card Necessary</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- cta area end -->

</main>

<!-- footer area start -->
<?php include("inc/footer.php"); ?>
<!-- footer area start -->
</body>

</html>