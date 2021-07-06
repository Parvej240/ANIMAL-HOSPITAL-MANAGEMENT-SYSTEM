<?php include "templates/header.php" ?>
<?php include "templates/nav.php" ?>
	  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-4">
            <h1 class="mb-3 bread">Pay Online</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Payment <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    <section class="paymentform mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                <?php
if(isset($_POST['pay'])){
    $amount = $_POST['amount'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


/* PHP */
$post_data = array();
$post_data['store_id'] = "anima5e9a9c31dab5c";
$post_data['store_passwd'] = "anima5e9a9c31dab5c@ssl";
$post_data['total_amount'] = $amount;
$post_data['currency'] = "BDT";
$post_data['tran_id'] = "SSLCZ_TEST_".uniqid();
$post_data['success_url'] = "http://www.animal.test/parvaj/success.php";
$post_data['fail_url'] = "http://www.animal.test/parvaj/fail.php";
$post_data['cancel_url'] = "http://localhost/new_sslcz_gw/cancel.php";
# $post_data['multi_card_name'] = "mastercard,visacard,amexcard";  # DISABLE TO DISPLAY ALL AVAILABLE

# EMI INFO
$post_data['emi_option'] = "1";
$post_data['emi_max_inst_option'] = "9";
$post_data['emi_selected_inst'] = "9";

# CUSTOMER INFORMATION
$post_data['cus_name'] = $name;
$post_data['cus_email'] = $email;
$post_data['cus_add1'] = "Dhaka";
$post_data['cus_add2'] = "Dhaka";
$post_data['cus_city'] = "Dhaka";
$post_data['cus_state'] = "Dhaka";
$post_data['cus_postcode'] = "1000";
$post_data['cus_country'] = "Bangladesh";
$post_data['cus_phone'] = $phone;
$post_data['cus_fax'] = "01711111111";

# SHIPMENT INFORMATION
$post_data['ship_name'] = "testanimardmu";
$post_data['ship_add1 '] = "Dhaka";
$post_data['ship_add2'] = "Dhaka";
$post_data['ship_city'] = "Dhaka";
$post_data['ship_state'] = "Dhaka";
$post_data['ship_postcode'] = "1000";
$post_data['ship_country'] = "Bangladesh";

# OPTIONAL PARAMETERS
$post_data['value_a'] = "ref001";
$post_data['value_b '] = "ref002";
$post_data['value_c'] = "ref003";
$post_data['value_d'] = "ref004";

# CART PARAMETERS
$post_data['cart'] = json_encode(array(
    array("product"=>"DHK TO BRS AC A1","amount"=>"200.00"),
    array("product"=>"DHK TO BRS AC A2","amount"=>"200.00"),
    array("product"=>"DHK TO BRS AC A3","amount"=>"200.00"),
    array("product"=>"DHK TO BRS AC A4","amount"=>"200.00")
));
$post_data['product_amount'] = "100";
$post_data['vat'] = "5";
$post_data['discount_amount'] = "5";
$post_data['convenience_fee'] = "3";




# REQUEST SEND TO SSLCOMMERZ
$direct_api_url = "https://sandbox.sslcommerz.com/gwprocess/v3/api.php";

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $direct_api_url );
curl_setopt($handle, CURLOPT_TIMEOUT, 30);
curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($handle, CURLOPT_POST, 1 );
curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, FALSE); # KEEP IT FALSE IF YOU RUN FROM LOCAL PC


$content = curl_exec($handle );

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if($code == 200 && !( curl_errno($handle))) {
	curl_close( $handle);
	$sslcommerzResponse = $content;
} else {
	curl_close( $handle);
	echo "FAILED TO CONNECT WITH SSLCOMMERZ API";
	exit;
}

# PARSE THE JSON RESPONSE
$sslcz = json_decode($sslcommerzResponse, true );

if(isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL']!="" ) {
        # THERE ARE MANY WAYS TO REDIRECT - Javascript, Meta Tag or Php Header Redirect or Other
        # echo "<script>window.location.href = '". $sslcz['GatewayPageURL'] ."';</script>";
	echo "<meta http-equiv='refresh' content='0;url=".$sslcz['GatewayPageURL']."'>";
	# header("Location: ". $sslcz['GatewayPageURL']);
	exit;
} else {
	echo "JSON Data parsing error!";
}


}
?>
                    <form method="POST" action="">
                        <div class="form-row">
                            <div class="form-group">
                            <label for="inputEmail4">Amount</label>
                            <input type="text" name="amount" class="form-control" id="inputEmail4" placeholder="Enter Amount" require>
                          
                            <label for="inputPassword4">Name</label>
                            <input type="text" name="name" class="form-control" id="inputPassword4" placeholder="Name" require>
                            <label for="inputPassword4">Email</label>
                            <input type="text" name="email" class="form-control" id="inputPassword4" placeholder="Email" require>
                            <label for="inputPassword4">Phone</label>
                            <input type="text" name="phone" class="form-control" id="inputPassword4" placeholder="Pnone" require>
                            </div>
                        </div>
                        <button type="submit" name="pay" class="btn btn-primary">Pay Now</button>
                    </form>

                </div>
            </div>
        </div>
    </section>
<?php include "templates/footer.php" ?>