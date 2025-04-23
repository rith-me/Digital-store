<?php require('header.php'); 
$api = new APIClient();
$i = $_GET['id']??0;
$token = $_SESSION['token']??null;
$token_seller = $_SESSION['token_seller']??null;
$response = $api->callAPI("/cart/orders",'GET',[],$token); // Example GET request
$orderData = $response['data'][$i-1] ??[];
?>

<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="../assets/img/logo/Online-store.png" alt="" width="" height="57">
    <h1 class="display-5 fw-bold">Claim Info</h1>
    <div class="col-lg-6 mx-auto ">
      <div class="rounded-3 border mb-2 p-2">
      <span class="lead mb-4" width="80">Product : <?php echo $orderData['product_name']??'';?></span> <br>  
      <span class="lead mb-4" width="80">Product Detail: <?php echo $orderData['product_detail']??'';?></span><br>
      <bold class="lead  mb-4" width="80"><?php echo $orderData['product_claim']??'';?></bold>
      </div>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="index.php" type="button" class="btn btn-primary btn-lg px-4 gap-3">Back</a>
        <a href="../index.php" type="button" class="btn btn-outline-secondary btn-lg px-4">Home</a>
      </div>
    </div>
  </div>


</body>

</html>