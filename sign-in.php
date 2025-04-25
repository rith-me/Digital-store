<?php require('inc/header.php'); ?>
<!-- header area end -->

<!-- cart mini area start -->
<?php require('inc/cart.php');
if (isset($_POST['login'])) {
   $status_msg = "Login Successfully";
   $email = $_POST['email'];
   $password = $_POST['password'];
   if (empty($email)) {
      $status_msg = "Email is required";
   } else if (empty($password)) {
      $status_msg = "Password is required";
   } else {
      $status_msg = $auth->loginUser($email, $password);
   }
}

if ($auth->isLogin()) {
   header("location: index.php");
   die();
}
?>

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
                  <span>2</span>
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

   <!-- sign up area start -->
   <section class="signup__area po-rel-z1 pt-100 pb-145">
      <div class="sign__shape">
         <img class="man-1" src="assets/img/icon/sign/man-1.png" alt="">
         <img class="man-2" src="assets/img/icon/sign/man-2.png" alt="">
         <img class="circle" src="assets/img/icon/sign/circle.png" alt="">
         <img class="zigzag" src="assets/img/icon/sign/zigzag.png" alt="">
         <img class="dot" src="assets/img/icon/sign/dot.png" alt="">
         <img class="bg" src="assets/img/icon/sign/sign-up.png" alt="">
      </div>
      <div class="container">
         <div class="row">
            <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
               <div class="page__title-wrapper text-center mb-55">
                  <h2 class="page__title-2">Sign in to <br> recharge direct.</h2>
                  <p>it you don't have an account you can <a href="#">Register here!</a></p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
               <div class="sign__wrapper white-bg">
                  <div class="sign__header mb-35">
                     <div class="sign__in text-center">
                        <!-- <a href="#" class="sign__social text-start mb-15"><i class="fab fa-facebook-f"></i>Sign in with Facebook</a> -->
                        <?php $sign_in_msg = "<p> <span>........</span> <a href=\"sign-in.php\">sign in</a> with your email<span> ........</span> </p>";
                        if (isset($_POST['login'])) {
                           echo "<p style=\"color:red\"> <span>........</span> {$status_msg}<span> ........</span> </p>";
                        } else {
                           echo $sign_in_msg;
                        }
                        ?>
                     </div>
                  </div>
                  <div class="sign__form">
                     <form method="post">
                        <div class="sign__input-wrapper mb-25">
                           <h5>Work email</h5>
                           <div class="sign__input">
                              <input type="email" name="email" placeholder="e-mail address">
                              <i class="fal fa-envelope"></i>
                           </div>
                        </div>
                        <div class="sign__input-wrapper mb-10">
                           <h5>Password</h5>
                           <div class="sign__input">
                              <input type="password" name="password" placeholder="Password">
                              <i class="fal fa-lock"></i>
                           </div>
                        </div>
                        <div class="sign__action d-sm-flex justify-content-between mb-30">
                           <div class="sign__agree d-flex align-items-center">
                              <input class="m-check-input" type="checkbox" id="m-agree">
                              <label class="m-check-label" for="m-agree">Keep me signed in
                              </label>
                           </div>
                           <div class="sign__forgot">
                              <a href="#">Forgot your password?</a>
                           </div>
                        </div>
                        <button name="login" value="true" class="m-btn m-btn-4 w-100"> <span></span> Sign In</button>
                        <div class="sign__new text-center mt-20">
                           <p>New to Markit? <a href="sign-up.php">Sign Up</a></p>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- sign up area end -->

</main>

<!-- footer area start -->
<?php include("inc/footer.php"); ?>
<!-- footer area start -->
</body>

</html>